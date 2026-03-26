<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core\Exception;

use RuntimeException;

final class TransportException extends RuntimeException
{
    private int $curlErrorCode;

    public function __construct(
        int $curlErrorCode,
        string $message
    ) {
        $this->curlErrorCode = $curlErrorCode;
        parent::__construct($message, $curlErrorCode);
    }

    public function curlErrorCode(): int
    {
        return $this->curlErrorCode;
    }
}
