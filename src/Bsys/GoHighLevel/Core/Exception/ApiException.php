<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Exception;

use RuntimeException;

final class ApiException extends RuntimeException
{
    private int $statusCode;

    private string $httpMethod;

    private string $path;

    /**
     * @var mixed
     */
    private $responseBody;

    /**
     * @var array<string, string>
     */
    private array $responseHeaders;

    /**
     * @param array<string, string> $responseHeaders
     * @param mixed $responseBody
     */
    public function __construct(
        int $statusCode,
        string $httpMethod,
        string $path,
        $responseBody,
        array $responseHeaders = [],
        string $message = ''
    ) {
        $this->statusCode = $statusCode;
        $this->httpMethod = $httpMethod;
        $this->path = $path;
        $this->responseBody = $responseBody;
        $this->responseHeaders = $responseHeaders;

        $defaultMessage = sprintf('HTTP %d returned for %s %s', $statusCode, $httpMethod, $path);
        parent::__construct($message !== '' ? $message : $defaultMessage, $statusCode);
    }

    public function statusCode(): int
    {
        return $this->statusCode;
    }

    public function httpMethod(): string
    {
        return $this->httpMethod;
    }

    public function path(): string
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function responseBody()
    {
        return $this->responseBody;
    }

    /**
     * @return array<string, string>
     */
    public function responseHeaders(): array
    {
        return $this->responseHeaders;
    }
}
