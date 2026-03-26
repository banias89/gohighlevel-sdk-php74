<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class EmailsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'fetchCampaigns' => [
                'method' => 'GET',
                'path' => '/emails/schedule',
                'operationId' => 'fetch-campaigns',
                'summary' => 'Get Campaigns',
            ],
            'createTemplate' => [
                'method' => 'POST',
                'path' => '/emails/builder',
                'operationId' => 'create-template',
                'summary' => 'Create a new template',
            ],
            'fetchTemplate' => [
                'method' => 'GET',
                'path' => '/emails/builder',
                'operationId' => 'fetch-template',
                'summary' => 'Fetch email templates',
            ],
            'deleteTemplate' => [
                'method' => 'DELETE',
                'path' => '/emails/builder/{locationId}/{templateId}',
                'operationId' => 'delete-template',
                'summary' => 'Delete a template',
            ],
            'updateTemplate' => [
                'method' => 'POST',
                'path' => '/emails/builder/data',
                'operationId' => 'update-template',
                'summary' => 'Update a template',
            ],
        ];
    }

    /**
     * Get Campaigns
     *
     * OperationId: fetch-campaigns
     * GET /emails/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchCampaigns(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchCampaigns', $pathParams, $query, $body, $headers);
    }

    /**
     * Create a new template
     *
     * OperationId: create-template
     * POST /emails/builder
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch email templates
     *
     * OperationId: fetch-template
     * GET /emails/builder
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete a template
     *
     * OperationId: delete-template
     * DELETE /emails/builder/{locationId}/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Update a template
     *
     * OperationId: update-template
     * POST /emails/builder/data
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateTemplate', $pathParams, $query, $body, $headers);
    }
}