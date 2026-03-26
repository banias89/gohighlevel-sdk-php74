<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CampaignsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getCampaigns' => [
                'method' => 'GET',
                'path' => '/campaigns/',
                'operationId' => 'get-campaigns',
                'summary' => 'Get Campaigns',
            ],
        ];
    }

    /**
     * Get Campaigns
     *
     * OperationId: get-campaigns
     * GET /campaigns/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCampaigns(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCampaigns', $pathParams, $query, $body, $headers);
    }
}