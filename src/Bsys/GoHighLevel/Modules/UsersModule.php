<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class UsersModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'searchUsers' => [
                'method' => 'GET',
                'path' => '/users/search',
                'operationId' => 'search-users',
                'summary' => 'Search Users',
            ],
            'filterUsersByEmail' => [
                'method' => 'POST',
                'path' => '/users/search/filter-by-email',
                'operationId' => 'filter-users-by-email',
                'summary' => 'Filter Users by Email',
            ],
            'getUser' => [
                'method' => 'GET',
                'path' => '/users/{userId}',
                'operationId' => 'get-user',
                'summary' => 'Get User',
            ],
            'updateUser' => [
                'method' => 'PUT',
                'path' => '/users/{userId}',
                'operationId' => 'update-user',
                'summary' => 'Update User',
            ],
            'deleteUser' => [
                'method' => 'DELETE',
                'path' => '/users/{userId}',
                'operationId' => 'delete-user',
                'summary' => 'Delete User',
            ],
            'getUserByLocation' => [
                'method' => 'GET',
                'path' => '/users/',
                'operationId' => 'get-user-by-location',
                'summary' => 'Get User by Location',
            ],
            'createUser' => [
                'method' => 'POST',
                'path' => '/users/',
                'operationId' => 'create-user',
                'summary' => 'Create User',
            ],
        ];
    }

    /**
     * Search Users
     *
     * OperationId: search-users
     * GET /users/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchUsers(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchUsers', $pathParams, $query, $body, $headers);
    }

    /**
     * Filter Users by Email
     *
     * OperationId: filter-users-by-email
     * POST /users/search/filter-by-email
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function filterUsersByEmail(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('filterUsersByEmail', $pathParams, $query, $body, $headers);
    }

    /**
     * Get User
     *
     * OperationId: get-user
     * GET /users/{userId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getUser(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getUser', $pathParams, $query, $body, $headers);
    }

    /**
     * Update User
     *
     * OperationId: update-user
     * PUT /users/{userId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateUser(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateUser', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete User
     *
     * OperationId: delete-user
     * DELETE /users/{userId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteUser(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteUser', $pathParams, $query, $body, $headers);
    }

    /**
     * Get User by Location
     *
     * OperationId: get-user-by-location
     * GET /users/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getUserByLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getUserByLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Create User
     *
     * OperationId: create-user
     * POST /users/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createUser(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createUser', $pathParams, $query, $body, $headers);
    }
}