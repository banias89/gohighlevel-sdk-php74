<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CustomMenusModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getCustomMenuById' => [
                'method' => 'GET',
                'path' => '/custom-menus/{customMenuId}',
                'operationId' => 'get-custom-menu-by-id',
                'summary' => 'Get Custom Menu Link',
            ],
            'deleteCustomMenu' => [
                'method' => 'DELETE',
                'path' => '/custom-menus/{customMenuId}',
                'operationId' => 'delete-custom-menu',
                'summary' => 'Delete Custom Menu Link',
            ],
            'updateCustomMenu' => [
                'method' => 'PUT',
                'path' => '/custom-menus/{customMenuId}',
                'operationId' => 'update-custom-menu',
                'summary' => 'Update Custom Menu Link',
            ],
            'getCustomMenus' => [
                'method' => 'GET',
                'path' => '/custom-menus/',
                'operationId' => 'get-custom-menus',
                'summary' => 'Get Custom Menu Links',
            ],
            'createCustomMenu' => [
                'method' => 'POST',
                'path' => '/custom-menus/',
                'operationId' => 'create-custom-menu',
                'summary' => 'Create Custom Menu Link',
            ],
        ];
    }

    /**
     * Get Custom Menu Link
     *
     * OperationId: get-custom-menu-by-id
     * GET /custom-menus/{customMenuId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomMenuById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomMenuById', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Custom Menu Link
     *
     * OperationId: delete-custom-menu
     * DELETE /custom-menus/{customMenuId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCustomMenu(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCustomMenu', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Custom Menu Link
     *
     * OperationId: update-custom-menu
     * PUT /custom-menus/{customMenuId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomMenu(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomMenu', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Menu Links
     *
     * OperationId: get-custom-menus
     * GET /custom-menus/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomMenus(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomMenus', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Menu Link
     *
     * OperationId: create-custom-menu
     * POST /custom-menus/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomMenu(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomMenu', $pathParams, $query, $body, $headers);
    }
}