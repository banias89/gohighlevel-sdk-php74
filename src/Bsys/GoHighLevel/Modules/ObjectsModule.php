<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class ObjectsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getObjectSchemaByKey' => [
                'method' => 'GET',
                'path' => '/objects/{key}',
                'operationId' => 'get-object-schema-by-key',
                'summary' => 'Get Object Schema by key / id',
            ],
            'updateCustomObject' => [
                'method' => 'PUT',
                'path' => '/objects/{key}',
                'operationId' => 'update-custom-object',
                'summary' => 'Update Object Schema By Key / Id',
            ],
            'getRecordById' => [
                'method' => 'GET',
                'path' => '/objects/{schemaKey}/records/{id}',
                'operationId' => 'get-record-by-id',
                'summary' => 'Get Record By Id',
            ],
            'updateObjectRecord' => [
                'method' => 'PUT',
                'path' => '/objects/{schemaKey}/records/{id}',
                'operationId' => 'update-object-record',
                'summary' => 'Update Record',
            ],
            'deleteObjectRecord' => [
                'method' => 'DELETE',
                'path' => '/objects/{schemaKey}/records/{id}',
                'operationId' => 'delete-object-record',
                'summary' => 'Delete Record',
            ],
            'createObjectRecord' => [
                'method' => 'POST',
                'path' => '/objects/{schemaKey}/records',
                'operationId' => 'create-object-record',
                'summary' => 'Create Record',
            ],
            'searchObjectRecords' => [
                'method' => 'POST',
                'path' => '/objects/{schemaKey}/records/search',
                'operationId' => 'search-object-records',
                'summary' => 'Search Object Records',
            ],
            'getObjectByLocationId' => [
                'method' => 'GET',
                'path' => '/objects/',
                'operationId' => 'get-object-by-location-id',
                'summary' => 'Get all objects for a location',
            ],
            'createCustomObjectSchema' => [
                'method' => 'POST',
                'path' => '/objects/',
                'operationId' => 'create-custom-object-schema',
                'summary' => 'Create Custom Object',
            ],
        ];
    }

    /**
     * Get Object Schema by key / id
     *
     * OperationId: get-object-schema-by-key
     * GET /objects/{key}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getObjectSchemaByKey(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getObjectSchemaByKey', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Object Schema By Key / Id
     *
     * OperationId: update-custom-object
     * PUT /objects/{key}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomObject(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomObject', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Record By Id
     *
     * OperationId: get-record-by-id
     * GET /objects/{schemaKey}/records/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getRecordById(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getRecordById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Record
     *
     * OperationId: update-object-record
     * PUT /objects/{schemaKey}/records/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateObjectRecord(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateObjectRecord', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Record
     *
     * OperationId: delete-object-record
     * DELETE /objects/{schemaKey}/records/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteObjectRecord(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteObjectRecord', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Record
     *
     * OperationId: create-object-record
     * POST /objects/{schemaKey}/records
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createObjectRecord(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createObjectRecord', $pathParams, $query, $body, $headers);
    }

    /**
     * Search Object Records
     *
     * OperationId: search-object-records
     * POST /objects/{schemaKey}/records/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchObjectRecords(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchObjectRecords', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all objects for a location
     *
     * OperationId: get-object-by-location-id
     * GET /objects/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getObjectByLocationId(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getObjectByLocationId', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Object
     *
     * OperationId: create-custom-object-schema
     * POST /objects/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomObjectSchema(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomObjectSchema', $pathParams, $query, $body, $headers);
    }
}