<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class BusinessesModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'updateBusiness' => [
                'method' => 'PUT',
                'path' => '/businesses/{businessId}',
                'operationId' => 'update-business',
                'summary' => 'Update Business',
            ],
            'deleteBusiness' => [
                'method' => 'DELETE',
                'path' => '/businesses/{businessId}',
                'operationId' => 'delete-Business',
                'summary' => 'Delete Business',
            ],
            'getBusiness' => [
                'method' => 'GET',
                'path' => '/businesses/{businessId}',
                'operationId' => 'get-business',
                'summary' => 'Get Business',
            ],
            'getBusinessesByLocation' => [
                'method' => 'GET',
                'path' => '/businesses/',
                'operationId' => 'get-businesses-by-location',
                'summary' => 'Get Businesses by Location',
            ],
            'createBusiness' => [
                'method' => 'POST',
                'path' => '/businesses/',
                'operationId' => 'create-business',
                'summary' => 'Create Business',
            ],
        ];
    }

    /**
     * Update Business
     *
     * OperationId: update-business
     * PUT /businesses/{businessId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateBusiness(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateBusiness', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Business
     *
     * OperationId: delete-Business
     * DELETE /businesses/{businessId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteBusiness(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteBusiness', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Business
     *
     * OperationId: get-business
     * GET /businesses/{businessId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getBusiness(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getBusiness', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Businesses by Location
     *
     * OperationId: get-businesses-by-location
     * GET /businesses/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getBusinessesByLocation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getBusinessesByLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Business
     *
     * OperationId: create-business
     * POST /businesses/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createBusiness(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createBusiness', $pathParams, $query, $body, $headers);
    }
}