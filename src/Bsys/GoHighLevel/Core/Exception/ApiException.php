<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Exception;

use RuntimeException;

final class ApiException extends RuntimeException
{
    /**
     * @param array<string, string> $responseHeaders
     */
    public function __construct(
        private readonly int $statusCode,
        private readonly string $httpMethod,
        private readonly string $path,
        private readonly mixed $responseBody,
        private readonly array $responseHeaders = [],
        string $message = ''
    ) {
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

    public function responseBody(): mixed
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
