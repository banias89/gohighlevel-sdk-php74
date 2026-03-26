<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CompaniesModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getCompany' => [
                'method' => 'GET',
                'path' => '/companies/{companyId}',
                'operationId' => 'get-company',
                'summary' => 'Get Company',
            ],
        ];
    }

    /**
     * Get Company
     *
     * OperationId: get-company
     * GET /companies/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCompany(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCompany', $pathParams, $query, $body, $headers);
    }
}