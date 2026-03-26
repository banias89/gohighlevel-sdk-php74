<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class SnapshotsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getCustomSnapshots' => [
                'method' => 'GET',
                'path' => '/snapshots/',
                'operationId' => 'get-custom-snapshots',
                'summary' => 'Get Snapshots',
            ],
            'createSnapshotShareLink' => [
                'method' => 'POST',
                'path' => '/snapshots/share/link',
                'operationId' => 'create-snapshot-share-link',
                'summary' => 'Create Snapshot Share Link',
            ],
            'getSnapshotPush' => [
                'method' => 'GET',
                'path' => '/snapshots/snapshot-status/{snapshotId}',
                'operationId' => 'get-snapshot-push',
                'summary' => 'Get Snapshot Push between Dates',
            ],
            'getLatestSnapshotPush' => [
                'method' => 'GET',
                'path' => '/snapshots/snapshot-status/{snapshotId}/location/{locationId}',
                'operationId' => 'get-latest-snapshot-push',
                'summary' => 'Get Last Snapshot Push',
            ],
        ];
    }

    /**
     * Get Snapshots
     *
     * OperationId: get-custom-snapshots
     * GET /snapshots/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCustomSnapshots(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCustomSnapshots', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Snapshot Share Link
     *
     * OperationId: create-snapshot-share-link
     * POST /snapshots/share/link
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createSnapshotShareLink(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createSnapshotShareLink', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Snapshot Push between Dates
     *
     * OperationId: get-snapshot-push
     * GET /snapshots/snapshot-status/{snapshotId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSnapshotPush(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSnapshotPush', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Last Snapshot Push
     *
     * OperationId: get-latest-snapshot-push
     * GET /snapshots/snapshot-status/{snapshotId}/location/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLatestSnapshotPush(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLatestSnapshotPush', $pathParams, $query, $body, $headers);
    }
}