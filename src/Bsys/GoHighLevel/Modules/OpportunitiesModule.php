<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class OpportunitiesModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'searchOpportunity' => [
                'method' => 'GET',
                'path' => '/opportunities/search',
                'operationId' => 'search-opportunity',
                'summary' => 'Search Opportunity',
            ],
            'getPipelines' => [
                'method' => 'GET',
                'path' => '/opportunities/pipelines',
                'operationId' => 'get-pipelines',
                'summary' => 'Get Pipelines',
            ],
            'getOpportunity' => [
                'method' => 'GET',
                'path' => '/opportunities/{id}',
                'operationId' => 'get-opportunity',
                'summary' => 'Get Opportunity',
            ],
            'deleteOpportunity' => [
                'method' => 'DELETE',
                'path' => '/opportunities/{id}',
                'operationId' => 'delete-opportunity',
                'summary' => 'Delete Opportunity',
            ],
            'updateOpportunity' => [
                'method' => 'PUT',
                'path' => '/opportunities/{id}',
                'operationId' => 'update-opportunity',
                'summary' => 'Update Opportunity',
            ],
            'updateOpportunityStatus' => [
                'method' => 'PUT',
                'path' => '/opportunities/{id}/status',
                'operationId' => 'update-opportunity-status',
                'summary' => 'Update Opportunity Status',
            ],
            'upsertOpportunity' => [
                'method' => 'POST',
                'path' => '/opportunities/upsert',
                'operationId' => 'Upsert-opportunity',
                'summary' => 'Upsert Opportunity',
            ],
            'addFollowersOpportunity' => [
                'method' => 'POST',
                'path' => '/opportunities/{id}/followers',
                'operationId' => 'add-followers-opportunity',
                'summary' => 'Add Followers',
            ],
            'removeFollowersOpportunity' => [
                'method' => 'DELETE',
                'path' => '/opportunities/{id}/followers',
                'operationId' => 'remove-followers-opportunity',
                'summary' => 'Remove Followers',
            ],
            'createOpportunity' => [
                'method' => 'POST',
                'path' => '/opportunities/',
                'operationId' => 'create-opportunity',
                'summary' => 'Create Opportunity',
            ],
        ];
    }

    /**
     * Search Opportunity
     *
     * OperationId: search-opportunity
     * GET /opportunities/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Pipelines
     *
     * OperationId: get-pipelines
     * GET /opportunities/pipelines
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getPipelines(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getPipelines', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Opportunity
     *
     * OperationId: get-opportunity
     * GET /opportunities/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Opportunity
     *
     * OperationId: delete-opportunity
     * DELETE /opportunities/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Opportunity
     *
     * OperationId: update-opportunity
     * PUT /opportunities/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Opportunity Status
     *
     * OperationId: update-opportunity-status
     * PUT /opportunities/{id}/status
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateOpportunityStatus(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateOpportunityStatus', $pathParams, $query, $body, $headers);
    }

    /**
     * Upsert Opportunity
     *
     * OperationId: Upsert-opportunity
     * POST /opportunities/upsert
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function upsertOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('upsertOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Add Followers
     *
     * OperationId: add-followers-opportunity
     * POST /opportunities/{id}/followers
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function addFollowersOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('addFollowersOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Remove Followers
     *
     * OperationId: remove-followers-opportunity
     * DELETE /opportunities/{id}/followers
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function removeFollowersOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('removeFollowersOpportunity', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Opportunity
     *
     * OperationId: create-opportunity
     * POST /opportunities/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createOpportunity(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createOpportunity', $pathParams, $query, $body, $headers);
    }
}