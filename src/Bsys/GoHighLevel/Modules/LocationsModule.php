<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class LocationsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'searchLocations' => [
                'method' => 'GET',
                'path' => '/locations/search',
                'operationId' => 'search-locations',
                'summary' => 'Search',
            ],
            'getLocation' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}',
                'operationId' => 'get-location',
                'summary' => 'Get Sub-Account (Formerly Location)',
            ],
            'putLocation' => [
                'method' => 'PUT',
                'path' => '/locations/{locationId}',
                'operationId' => 'put-location',
                'summary' => 'Put Sub-Account (Formerly Location)',
            ],
            'deleteLocation' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}',
                'operationId' => 'delete-location',
                'summary' => 'Delete Sub-Account (Formerly Location)',
            ],
            'getLocationTags' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/tags',
                'operationId' => 'get-location-tags',
                'summary' => 'Get Tags',
            ],
            'createTag' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/tags',
                'operationId' => 'create-tag',
                'summary' => 'Create Tag',
            ],
            'getTagById' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/tags/{tagId}',
                'operationId' => 'get-tag-by-id',
                'summary' => 'Get tag by id',
            ],
            'updateTag' => [
                'method' => 'PUT',
                'path' => '/locations/{locationId}/tags/{tagId}',
                'operationId' => 'update-tag',
                'summary' => 'Update tag',
            ],
            'deleteTag' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}/tags/{tagId}',
                'operationId' => 'delete-tag',
                'summary' => 'Delete tag',
            ],
            'taskSearch' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/tasks/search',
                'operationId' => 'task-search',
                'summary' => 'Task Search Filter',
            ],
            'getRecurringTaskById' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/recurring-tasks/{id}',
                'operationId' => 'get-recurring-task-by-id',
                'summary' => 'Get Recurring Task By Id',
            ],
            'updateRecurringTask' => [
                'method' => 'PUT',
                'path' => '/locations/{locationId}/recurring-tasks/{id}',
                'operationId' => 'update-recurring-task',
                'summary' => 'Update Recurring Task',
            ],
            'deleteRecurringTask' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}/recurring-tasks/{id}',
                'operationId' => 'delete-recurring-task',
                'summary' => 'Delete Recurring Task',
            ],
            'createRecurringTask' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/recurring-tasks',
                'operationId' => 'create-recurring-task',
                'summary' => 'Create Recurring Task',
            ],
            'getCustomFields' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/customFields',
                'operationId' => 'get-custom-fields',
                'summary' => 'Get Custom Fields',
            ],
            'createCustomField' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/customFields',
                'operationId' => 'create-custom-field',
                'summary' => 'Create Custom Field',
            ],
            'getCustomField' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/customFields/{id}',
                'operationId' => 'get-custom-field',
                'summary' => 'Get Custom Field',
            ],
            'updateCustomField' => [
                'method' => 'PUT',
                'path' => '/locations/{locationId}/customFields/{id}',
                'operationId' => 'update-custom-field',
                'summary' => 'Update Custom Field',
            ],
            'deleteCustomField' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}/customFields/{id}',
                'operationId' => 'delete-custom-field',
                'summary' => 'Delete Custom Field',
            ],
            'uploadFileCustomfields' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/customFields/upload',
                'operationId' => 'upload-file-customFields',
                'summary' => 'Uploads File to customFields',
            ],
            'getCustomValues' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/customValues',
                'operationId' => 'get-custom-values',
                'summary' => 'Get Custom Values',
            ],
            'createCustomValue' => [
                'method' => 'POST',
                'path' => '/locations/{locationId}/customValues',
                'operationId' => 'create-custom-value',
                'summary' => 'Create Custom Value',
            ],
            'getCustomValue' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/customValues/{id}',
                'operationId' => 'get-custom-value',
                'summary' => 'Get Custom Value',
            ],
            'updateCustomValue' => [
                'method' => 'PUT',
                'path' => '/locations/{locationId}/customValues/{id}',
                'operationId' => 'update-custom-value',
                'summary' => 'Update Custom Value',
            ],
            'deleteCustomValue' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}/customValues/{id}',
                'operationId' => 'delete-custom-value',
                'summary' => 'Delete Custom Value',
            ],
            'getTimezones' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/timezones',
                'operationId' => 'get-timezones',
                'summary' => 'Fetch Timezones',
            ],
            'getAllOrEmailSmsTemplates' => [
                'method' => 'GET',
                'path' => '/locations/{locationId}/templates',
                'operationId' => 'GET-all-or-email-sms-templates',
                'summary' => 'GET all or email/sms templates',
            ],
            'deleteAnEmailSmsTemplate' => [
                'method' => 'DELETE',
                'path' => '/locations/{locationId}/templates/{id}',
                'operationId' => 'DELETE-an-email-sms-template',
                'summary' => 'DELETE an email/sms template',
            ],
            'createLocation' => [
                'method' => 'POST',
                'path' => '/locations/',
                'operationId' => 'create-location',
                'summary' => 'Create Sub-Account (Formerly Location)',
            ],
        ];
    }

    /**
     * Search
     *
     * OperationId: search-locations
     * GET /locations/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function searchLocations(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('searchLocations', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Sub-Account (Formerly Location)
     *
     * OperationId: get-location
     * GET /locations/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Put Sub-Account (Formerly Location)
     *
     * OperationId: put-location
     * PUT /locations/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function putLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('putLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Sub-Account (Formerly Location)
     *
     * OperationId: delete-location
     * DELETE /locations/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Tags
     *
     * OperationId: get-location-tags
     * GET /locations/{locationId}/tags
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLocationTags(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLocationTags', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Tag
     *
     * OperationId: create-tag
     * POST /locations/{locationId}/tags
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createTag(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createTag', $pathParams, $query, $body, $headers);
    }

    /**
     * Get tag by id
     *
     * OperationId: get-tag-by-id
     * GET /locations/{locationId}/tags/{tagId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTagById(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTagById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update tag
     *
     * OperationId: update-tag
     * PUT /locations/{locationId}/tags/{tagId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateTag(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateTag', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete tag
     *
     * OperationId: delete-tag
     * DELETE /locations/{locationId}/tags/{tagId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteTag(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteTag', $pathParams, $query, $body, $headers);
    }

    /**
     * Task Search Filter
     *
     * OperationId: task-search
     * POST /locations/{locationId}/tasks/search
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function taskSearch(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('taskSearch', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Recurring Task By Id
     *
     * OperationId: get-recurring-task-by-id
     * GET /locations/{locationId}/recurring-tasks/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getRecurringTaskById(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getRecurringTaskById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Recurring Task
     *
     * OperationId: update-recurring-task
     * PUT /locations/{locationId}/recurring-tasks/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateRecurringTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateRecurringTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Recurring Task
     *
     * OperationId: delete-recurring-task
     * DELETE /locations/{locationId}/recurring-tasks/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteRecurringTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteRecurringTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Recurring Task
     *
     * OperationId: create-recurring-task
     * POST /locations/{locationId}/recurring-tasks
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createRecurringTask(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createRecurringTask', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Fields
     *
     * OperationId: get-custom-fields
     * GET /locations/{locationId}/customFields
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomFields(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomFields', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Field
     *
     * OperationId: create-custom-field
     * POST /locations/{locationId}/customFields
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomField(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Field
     *
     * OperationId: get-custom-field
     * GET /locations/{locationId}/customFields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomField(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Custom Field
     *
     * OperationId: update-custom-field
     * PUT /locations/{locationId}/customFields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomField(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Custom Field
     *
     * OperationId: delete-custom-field
     * DELETE /locations/{locationId}/customFields/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCustomField(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCustomField', $pathParams, $query, $body, $headers);
    }

    /**
     * Uploads File to customFields
     *
     * OperationId: upload-file-customFields
     * POST /locations/{locationId}/customFields/upload
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uploadFileCustomfields(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uploadFileCustomfields', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Values
     *
     * OperationId: get-custom-values
     * GET /locations/{locationId}/customValues
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomValues(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomValues', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Custom Value
     *
     * OperationId: create-custom-value
     * POST /locations/{locationId}/customValues
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCustomValue(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCustomValue', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Custom Value
     *
     * OperationId: get-custom-value
     * GET /locations/{locationId}/customValues/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomValue(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomValue', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Custom Value
     *
     * OperationId: update-custom-value
     * PUT /locations/{locationId}/customValues/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCustomValue(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCustomValue', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Custom Value
     *
     * OperationId: delete-custom-value
     * DELETE /locations/{locationId}/customValues/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCustomValue(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCustomValue', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Timezones
     *
     * OperationId: get-timezones
     * GET /locations/{locationId}/timezones
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTimezones(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTimezones', $pathParams, $query, $body, $headers);
    }

    /**
     * GET all or email/sms templates
     *
     * OperationId: GET-all-or-email-sms-templates
     * GET /locations/{locationId}/templates
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAllOrEmailSmsTemplates(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAllOrEmailSmsTemplates', $pathParams, $query, $body, $headers);
    }

    /**
     * DELETE an email/sms template
     *
     * OperationId: DELETE-an-email-sms-template
     * DELETE /locations/{locationId}/templates/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAnEmailSmsTemplate(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAnEmailSmsTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Sub-Account (Formerly Location)
     *
     * OperationId: create-location
     * POST /locations/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createLocation', $pathParams, $query, $body, $headers);
    }
}