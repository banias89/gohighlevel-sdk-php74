<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class FunnelsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createRedirect' => [
                'method' => 'POST',
                'path' => '/funnels/lookup/redirect',
                'operationId' => 'create-redirect',
                'summary' => 'Create Redirect',
            ],
            'updateRedirectById' => [
                'method' => 'PATCH',
                'path' => '/funnels/lookup/redirect/{id}',
                'operationId' => 'update-redirect-by-id',
                'summary' => 'Update Redirect By Id',
            ],
            'deleteRedirectById' => [
                'method' => 'DELETE',
                'path' => '/funnels/lookup/redirect/{id}',
                'operationId' => 'delete-redirect-by-id',
                'summary' => 'Delete Redirect By Id',
            ],
            'fetchRedirectsList' => [
                'method' => 'GET',
                'path' => '/funnels/lookup/redirect/list',
                'operationId' => 'fetch-redirects-list',
                'summary' => 'Fetch List of Redirects',
            ],
            'getfunnels' => [
                'method' => 'GET',
                'path' => '/funnels/funnel/list',
                'operationId' => 'getFunnels',
                'summary' => 'Fetch List of Funnels',
            ],
            'getpagesbyfunnelid' => [
                'method' => 'GET',
                'path' => '/funnels/page',
                'operationId' => 'getPagesByFunnelId',
                'summary' => 'Fetch list of funnel pages',
            ],
            'getpagescountbyfunnelid' => [
                'method' => 'GET',
                'path' => '/funnels/page/count',
                'operationId' => 'getPagesCountByFunnelId',
                'summary' => 'Fetch count of funnel pages',
            ],
        ];
    }

    /**
     * Create Redirect
     *
     * OperationId: create-redirect
     * POST /funnels/lookup/redirect
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createRedirect(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createRedirect', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Redirect By Id
     *
     * OperationId: update-redirect-by-id
     * PATCH /funnels/lookup/redirect/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateRedirectById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateRedirectById', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Redirect By Id
     *
     * OperationId: delete-redirect-by-id
     * DELETE /funnels/lookup/redirect/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteRedirectById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteRedirectById', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch List of Redirects
     *
     * OperationId: fetch-redirects-list
     * GET /funnels/lookup/redirect/list
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchRedirectsList(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchRedirectsList', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch List of Funnels
     *
     * OperationId: getFunnels
     * GET /funnels/funnel/list
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getfunnels(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getfunnels', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch list of funnel pages
     *
     * OperationId: getPagesByFunnelId
     * GET /funnels/page
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getpagesbyfunnelid(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getpagesbyfunnelid', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch count of funnel pages
     *
     * OperationId: getPagesCountByFunnelId
     * GET /funnels/page/count
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getpagescountbyfunnelid(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getpagescountbyfunnelid', $pathParams, $query, $body, $headers);
    }
}