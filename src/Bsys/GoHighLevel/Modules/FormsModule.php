<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class FormsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getFormsSubmissions' => [
                'method' => 'GET',
                'path' => '/forms/submissions',
                'operationId' => 'get-forms-submissions',
                'summary' => 'Get Forms Submissions',
            ],
            'uploadToCustomFields' => [
                'method' => 'POST',
                'path' => '/forms/upload-custom-files',
                'operationId' => 'upload-to-custom-fields',
                'summary' => 'Upload files to custom fields',
            ],
            'getForms' => [
                'method' => 'GET',
                'path' => '/forms/',
                'operationId' => 'get-forms',
                'summary' => 'Get Forms',
            ],
        ];
    }

    /**
     * Get Forms Submissions
     *
     * OperationId: get-forms-submissions
     * GET /forms/submissions
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getFormsSubmissions(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getFormsSubmissions', $pathParams, $query, $body, $headers);
    }

    /**
     * Upload files to custom fields
     *
     * OperationId: upload-to-custom-fields
     * POST /forms/upload-custom-files
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uploadToCustomFields(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uploadToCustomFields', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Forms
     *
     * OperationId: get-forms
     * GET /forms/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getForms(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getForms', $pathParams, $query, $body, $headers);
    }
}