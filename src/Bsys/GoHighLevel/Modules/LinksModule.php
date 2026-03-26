<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class LinksModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getLinkById' => [
                'method' => 'GET',
                'path' => '/links/id/{linkId}',
                'operationId' => 'get-link-by-id',
                'summary' => 'Get Link by ID',
            ],
            'updateLink' => [
                'method' => 'PUT',
                'path' => '/links/{linkId}',
                'operationId' => 'update-link',
                'summary' => 'Update Link',
            ],
            'deleteLink' => [
                'method' => 'DELETE',
                'path' => '/links/{linkId}',
                'operationId' => 'delete-link',
                'summary' => 'Delete Link',
            ],
            'searchTriggerLinks' => [
                'method' => 'GET',
                'path' => '/links/search',
                'operationId' => 'search-trigger-links',
                'summary' => 'Search Trigger Links',
            ],
            'getLinks' => [
                'method' => 'GET',
                'path' => '/links/',
                'operationId' => 'get-links',
                'summary' => 'Get Links',
            ],
            'createLink' => [
                'method' => 'POST',
                'path' => '/links/',
                'operationId' => 'create-link',
                'summary' => 'Create Link',
            ],
        ];
    }

    /**
     * Get Link by ID
     *
     * OperationId: get-link-by-id
     * GET /links/id/{linkId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLinkById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLinkById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Link
     *
     * OperationId: update-link
     * PUT /links/{linkId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateLink(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateLink', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Link
     *
     * OperationId: delete-link
     * DELETE /links/{linkId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteLink(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteLink', $pathParams, $query, $body, $headers);
    }

    /**
     * Search Trigger Links
     *
     * OperationId: search-trigger-links
     * GET /links/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchTriggerLinks(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchTriggerLinks', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Links
     *
     * OperationId: get-links
     * GET /links/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLinks(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLinks', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Link
     *
     * OperationId: create-link
     * POST /links/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createLink(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createLink', $pathParams, $query, $body, $headers);
    }
}