<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Http;

/**
 * @phpstan-type ResponseHeaders array<string, string>
 */
final class HttpResponse
{
    public int $statusCode;

    /**
     * @var ResponseHeaders
     */
    public array $headers;

    /**
     * @var mixed
     */
    public $body;

    public string $rawBody;

    /**
     * @param ResponseHeaders $headers
     * @param mixed $body
     */
    public function __construct(int $statusCode, array $headers, $body, string $rawBody)
    {
        $this->statusCode = $statusCode;
        $this->headers = $headers;
        $this->body = $body;
        $this->rawBody = $rawBody;
    }

    public function isSuccess(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }
}
