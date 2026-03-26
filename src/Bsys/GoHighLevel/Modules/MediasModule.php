<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class MediasModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'fetchMediaContent' => [
                'method' => 'GET',
                'path' => '/medias/files',
                'operationId' => 'fetch-media-content',
                'summary' => 'Get List of Files/ Folders',
            ],
            'uploadMediaContent' => [
                'method' => 'POST',
                'path' => '/medias/upload-file',
                'operationId' => 'upload-media-content',
                'summary' => 'Upload File into Media Library',
            ],
            'deleteMediaContent' => [
                'method' => 'DELETE',
                'path' => '/medias/{id}',
                'operationId' => 'delete-media-content',
                'summary' => 'Delete File or Folder',
            ],
            'updateMediaObject' => [
                'method' => 'POST',
                'path' => '/medias/{id}',
                'operationId' => 'update-media-object',
                'summary' => 'Update File/ Folder',
            ],
            'createMediaFolder' => [
                'method' => 'POST',
                'path' => '/medias/folder',
                'operationId' => 'create-media-folder',
                'summary' => 'Create Folder',
            ],
            'bulkUpdateMediaObjects' => [
                'method' => 'PUT',
                'path' => '/medias/update-files',
                'operationId' => 'bulk-update-media-objects',
                'summary' => 'Bulk Update Files/ Folders',
            ],
            'bulkDeleteMediaObjects' => [
                'method' => 'PUT',
                'path' => '/medias/delete-files',
                'operationId' => 'bulk-delete-media-objects',
                'summary' => 'Bulk Delete / Trash Files or Folders',
            ],
        ];
    }

    /**
     * Get List of Files/ Folders
     *
     * OperationId: fetch-media-content
     * GET /medias/files
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchMediaContent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchMediaContent', $pathParams, $query, $body, $headers);
    }

    /**
     * Upload File into Media Library
     *
     * OperationId: upload-media-content
     * POST /medias/upload-file
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uploadMediaContent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uploadMediaContent', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete File or Folder
     *
     * OperationId: delete-media-content
     * DELETE /medias/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteMediaContent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteMediaContent', $pathParams, $query, $body, $headers);
    }

    /**
     * Update File/ Folder
     *
     * OperationId: update-media-object
     * POST /medias/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateMediaObject(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateMediaObject', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Folder
     *
     * OperationId: create-media-folder
     * POST /medias/folder
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createMediaFolder(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createMediaFolder', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Update Files/ Folders
     *
     * OperationId: bulk-update-media-objects
     * PUT /medias/update-files
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkUpdateMediaObjects(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkUpdateMediaObjects', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Delete / Trash Files or Folders
     *
     * OperationId: bulk-delete-media-objects
     * PUT /medias/delete-files
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkDeleteMediaObjects(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkDeleteMediaObjects', $pathParams, $query, $body, $headers);
    }
}