<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CustomFieldsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getCustomFieldById' => [
                'method' => 'GET',
                'path' => '/custom-fields/{id}',
                'operationId' => 'get-custom-field-by-id',
                'summary' => 'Get Custom Field / Folder By Id',
            ],
            'updateCustomField' => [
                'method' => 'PUT',
                'path' => '/custom-fields/{id}',
                'operationId' => 'update-custom-field',
                'summary' => 'Update Custom Field By Id',
            ],
            'deleteCustomField' => [
                'method' => 'DELETE',
                'path' => '/custom-fields/{id}',
                'operationId' => 'delete-custom-field',
                'summary' => 'Delete Custom Field By Id',
            ],
            'getCustomFieldsByObjectKey' => [
                'method' => 'GET',
                'path' => '/custom-fields/object-key/{objectKey}',
                'operationId' => 'get-custom-fields-by-object-key',
                'summary' => 'Get Custom Fields By Object Key',
            ],
            'createCustomFieldFolder' => [
                'method' => 'POST',
                'path' => '/custom-fields/folder',
                'operationId' => 'create-custom-field-folder',
                'summary' => 'Create Custom Field Folder',
            ],
            'updateCustomFieldFolder' => [
                'method' => 'PUT',
                'path' => '/custom-fields/folder/{id}',
                'operationId' => 'update-custom-field-folder',
                'summary' => 'Update Custom Field Folder Name',
            ],
            'deleteCustomFieldFolder' => [
                'method' => 'DELETE',
                'path' => '/custom-fields/folder/{id}',
                'operationId' => 'delete-custom-field-folder',
                'summary' => 'Delete Custom Field Folder',
            ],
            'createCustomField' => [
                'method' => 'POST',
                'path' => '/custom-fields/',
                'operationId' => 'create-custom-field',
                'summary' => 'Create Custom Field',
            ],
        ];
    }

    /**
     * Get Custom Field / Folder By Id
     *
     * OperationId: get-custom-field-by-id
     * GET /custom-fields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomFieldById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomFieldById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Custom Field By Id
     *
     * OperationId: update-custom-field
     * PUT /custom-fields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomField(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Custom Field By Id
     *
     * OperationId: delete-custom-field
     * DELETE /custom-fields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCustomField(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Fields By Object Key
     *
     * OperationId: get-custom-fields-by-object-key
     * GET /custom-fields/object-key/{objectKey}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomFieldsByObjectKey(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomFieldsByObjectKey', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Field Folder
     *
     * OperationId: create-custom-field-folder
     * POST /custom-fields/folder
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomFieldFolder(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomFieldFolder', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Custom Field Folder Name
     *
     * OperationId: update-custom-field-folder
     * PUT /custom-fields/folder/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomFieldFolder(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomFieldFolder', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Custom Field Folder
     *
     * OperationId: delete-custom-field-folder
     * DELETE /custom-fields/folder/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCustomFieldFolder(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCustomFieldFolder', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Field
     *
     * OperationId: create-custom-field
     * POST /custom-fields/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomField(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomField', $pathParams, $query, $body, $headers);
    }
}