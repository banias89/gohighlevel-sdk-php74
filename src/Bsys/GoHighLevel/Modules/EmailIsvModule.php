<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class EmailIsvModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'verifyEmail' => [
                'method' => 'POST',
                'path' => '/email/verify',
                'operationId' => 'verify-email',
                'summary' => 'Email Verification',
            ],
        ];
    }

    /**
     * Email Verification
     *
     * OperationId: verify-email
     * POST /email/verify
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function verifyEmail(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('verifyEmail', $pathParams, $query, $body, $headers);
    }
}