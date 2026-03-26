<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Http;

/**
 * @phpstan-type ResponseHeaders array<string, string>
 */
final readonly class HttpResponse
{
    /**
     * @param ResponseHeaders $headers
     */
    public function __construct(
        public int $statusCode,
        public array $headers,
        public mixed $body,
        public string $rawBody
    ) {
    }

    public function isSuccess(): bool
    {
        return $this->statusCode >= 200 && $this->statusCode < 300;
    }
}
