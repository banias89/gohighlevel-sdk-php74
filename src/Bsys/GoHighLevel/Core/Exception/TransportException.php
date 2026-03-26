<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Exception;

use RuntimeException;

final class TransportException extends RuntimeException
{
    public function __construct(
        private readonly int $curlErrorCode,
        string $message
    ) {
        parent::__construct($message, $curlErrorCode);
    }

    public function curlErrorCode(): int
    {
        return $this->curlErrorCode;
    }
}
