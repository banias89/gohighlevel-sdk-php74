<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Http;

use Bsys\GoHighLevel\Core\Exception\ApiException;
use Bsys\GoHighLevel\Core\Exception\SerializationException;
use Bsys\GoHighLevel\Core\Exception\TransportException;
use CURLFile;

final class CurlHttpClient
{
    private string $accessToken;

    private string $baseUrl;

    private ?string $version;

    private int $timeoutSeconds;

    private int $connectTimeoutSeconds;

    private string $userAgent;

    private string $authHeaderName;

    private ?string $authScheme;

    public function __construct(
        string $accessToken,
        string $baseUrl = 'https://services.leadconnectorhq.com',
        ?string $version = '2021-07-28',
        int $timeoutSeconds = 30,
        int $connectTimeoutSeconds = 10,
        string $userAgent = 'Bsys-GoHighLevel-SDK/1.0.0',
        string $authHeaderName = 'Authorization',
        ?string $authScheme = 'Bearer'
    ) {
        $this->accessToken = $accessToken;
        $this->baseUrl = $baseUrl;
        $this->version = $version;
        $this->timeoutSeconds = $timeoutSeconds;
        $this->connectTimeoutSeconds = $connectTimeoutSeconds;
        $this->userAgent = $userAgent;
        $this->authHeaderName = $authHeaderName;
        $this->authScheme = $authScheme;
    }

    /**
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function request(
        string $method,
        string $path,
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        $method = strtoupper($method);
        $url = $this->buildUrl($path, $query);

        $headerBag = $this->buildHeaderBag($headers, $body);
        $curlHeaders = $this->formatHeaderBag($headerBag);

        $ch = curl_init($url);
        if ($ch === false) {
            throw new TransportException(0, 'Unable to initialize cURL handle.');
        }

        $options = [
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => $curlHeaders,
            CURLOPT_TIMEOUT => $this->timeoutSeconds,
            CURLOPT_CONNECTTIMEOUT => $this->connectTimeoutSeconds,
        ];

        if ($body !== null) {
            $options[CURLOPT_POSTFIELDS] = $this->preparePayload($body, $headerBag);
        }

        curl_setopt_array($ch, $options);

        $rawResponse = curl_exec($ch);
        if ($rawResponse === false) {
            $errorCode = curl_errno($ch);
            $errorMessage = curl_error($ch);
            curl_close($ch);

            throw new TransportException($errorCode, $errorMessage !== '' ? $errorMessage : 'Unknown cURL transport error.');
        }

        $headerSize = (int) curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        $rawHeaders = substr($rawResponse, 0, $headerSize);
        $rawBody = substr($rawResponse, $headerSize);

        $parsedHeaders = $this->parseResponseHeaders($rawHeaders);
        $decodedBody = $this->decodeBody($rawBody, $parsedHeaders);

        if ($statusCode >= 400) {
            throw new ApiException($statusCode, $method, $path, $decodedBody, $parsedHeaders);
        }

        return new HttpResponse($statusCode, $parsedHeaders, $decodedBody, $rawBody);
    }

    /**
     * @param array<string, scalar|array<int, scalar>> $query
     */
    private function buildUrl(string $path, array $query): string
    {
        $normalizedPath = $this->startsWithString($path, '/') ? $path : '/' . $path;
        $url = rtrim($this->baseUrl, '/') . $normalizedPath;

        if ($query !== []) {
            $queryString = http_build_query($query, '', '&', PHP_QUERY_RFC3986);
            if ($queryString !== '') {
                $url .= '?' . $queryString;
            }
        }

        return $url;
    }

    /**
     * @param array<string, scalar> $headers
     * @param array<string, mixed>|string|null $body
     * @return array<string, string>
     */
    private function buildHeaderBag(array $headers, $body): array
    {
        $authHeaderKey = strtolower($this->authHeaderName);

        $bag = [
            $authHeaderKey => $this->formatAuthHeaderValue(),
            'accept' => 'application/json',
            'user-agent' => $this->userAgent,
        ];

        if ($this->version !== null) {
            $bag['version'] = $this->version;
        }

        foreach ($headers as $name => $value) {
            $bag[strtolower($name)] = (string) $value;
        }

        if ($body !== null && !$this->isMultipartPayload($body, $bag)) {
            $bag['content-type'] = $bag['content-type'] ?? 'application/json';
        }

        if ($this->isMultipartPayload($body, $bag)) {
            unset($bag['content-type']);
        }

        return $bag;
    }

    /**
     * @param array<string, string> $headerBag
     * @return list<string>
     */
    private function formatHeaderBag(array $headerBag): array
    {
        $result = [];

        foreach ($headerBag as $name => $value) {
            $formattedName = implode('-', array_map(static fn (string $part): string => ucfirst($part), explode('-', $name)));
            $result[] = $formattedName . ': ' . $value;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|string $body
     * @param array<string, string> $headerBag
     * @return array<string, mixed>|string
     */
    private function preparePayload($body, array $headerBag)
    {
        if (is_string($body)) {
            return $body;
        }

        if ($this->isMultipartPayload($body, $headerBag)) {
            return $body;
        }

        try {
            return json_encode($body, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            throw new SerializationException('Failed to encode request body to JSON: ' . $exception->getMessage(), 0, $exception);
        }
    }

    /**
     * @param array<string, mixed>|string|null $body
     * @param array<string, string> $headerBag
     */
    private function isMultipartPayload($body, array $headerBag): bool
    {
        if (isset($headerBag['content-type']) && $this->containsString(strtolower($headerBag['content-type']), 'multipart/form-data')) {
            return true;
        }

        if (!is_array($body)) {
            return false;
        }

        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($body));
        foreach ($iterator as $value) {
            if ($value instanceof CURLFile) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array<string, string>
     */
    private function parseResponseHeaders(string $rawHeaders): array
    {
        $blocks = preg_split('/\r\n\r\n/', trim($rawHeaders));
        if ($blocks === false || $blocks === []) {
            return [];
        }

        $headerLines = explode("\r\n", (string) end($blocks));
        $headers = [];

        foreach ($headerLines as $line) {
            if (!$this->containsString($line, ':')) {
                continue;
            }

            [$name, $value] = explode(':', $line, 2);
            $headers[strtolower(trim($name))] = trim($value);
        }

        return $headers;
    }

    /**
     * @param array<string, string> $headers
     */
    private function decodeBody(string $rawBody, array $headers)
    {
        if ($rawBody === '') {
            return null;
        }

        $contentType = strtolower($headers['content-type'] ?? '');
        $trimmedBody = trim($rawBody);
        $looksLikeJson = $this->startsWithString($trimmedBody, '{') || $this->startsWithString($trimmedBody, '[');

        if (!$this->containsString($contentType, 'application/json') && !$looksLikeJson) {
            return $rawBody;
        }

        try {
            return json_decode($rawBody, false, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            throw new SerializationException('Failed to decode JSON response: ' . $exception->getMessage(), 0, $exception);
        }
    }

    private function normalizeToken(string $token): string
    {
        $trimmed = trim($token);

        return $this->startsWithString(strtolower($trimmed), 'bearer ')
            ? trim(substr($trimmed, 7))
            : $trimmed;
    }

    private function formatAuthHeaderValue(): string
    {
        $normalizedToken = $this->normalizeToken($this->accessToken);
        if ($this->authScheme === null || trim($this->authScheme) === '') {
            return $normalizedToken;
        }

        return trim($this->authScheme) . ' ' . $normalizedToken;
    }

    private function startsWithString(string $haystack, string $needle): bool
    {
        return strncmp($haystack, $needle, strlen($needle)) === 0;
    }

    private function containsString(string $haystack, string $needle): bool
    {
        return strpos($haystack, $needle) !== false;
    }
}
