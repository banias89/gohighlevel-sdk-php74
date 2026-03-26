<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class WorkflowsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getWorkflow' => [
                'method' => 'GET',
                'path' => '/workflows/',
                'operationId' => 'get-workflow',
                'summary' => 'Get Workflow',
            ],
        ];
    }

    /**
     * Get Workflow
     *
     * OperationId: get-workflow
     * GET /workflows/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getWorkflow(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getWorkflow', $pathParams, $query, $body, $headers);
    }
}