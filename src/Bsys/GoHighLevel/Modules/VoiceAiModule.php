<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class VoiceAiModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createAgent' => [
                'method' => 'POST',
                'path' => '/voice-ai/agents',
                'operationId' => 'create-agent',
                'summary' => 'Create Agent',
            ],
            'getAgents' => [
                'method' => 'GET',
                'path' => '/voice-ai/agents',
                'operationId' => 'get-agents',
                'summary' => 'List Agents',
            ],
            'patchAgent' => [
                'method' => 'PATCH',
                'path' => '/voice-ai/agents/{agentId}',
                'operationId' => 'patch-agent',
                'summary' => 'Patch Agent',
            ],
            'getAgent' => [
                'method' => 'GET',
                'path' => '/voice-ai/agents/{agentId}',
                'operationId' => 'get-agent',
                'summary' => 'Get Agent',
            ],
            'deleteAgent' => [
                'method' => 'DELETE',
                'path' => '/voice-ai/agents/{agentId}',
                'operationId' => 'delete-agent',
                'summary' => 'Delete Agent',
            ],
            'getCallLogs' => [
                'method' => 'GET',
                'path' => '/voice-ai/dashboard/call-logs',
                'operationId' => 'get-call-logs',
                'summary' => 'List Call Logs',
            ],
            'getcalllog' => [
                'method' => 'GET',
                'path' => '/voice-ai/dashboard/call-logs/{callId}',
                'operationId' => 'getCallLog',
                'summary' => 'Get Call Log',
            ],
            'createAction' => [
                'method' => 'POST',
                'path' => '/voice-ai/actions',
                'operationId' => 'create-action',
                'summary' => 'Create Agent Action',
            ],
            'updateAction' => [
                'method' => 'PUT',
                'path' => '/voice-ai/actions/{actionId}',
                'operationId' => 'update-action',
                'summary' => 'Update Agent Action',
            ],
            'getAction' => [
                'method' => 'GET',
                'path' => '/voice-ai/actions/{actionId}',
                'operationId' => 'get-action',
                'summary' => 'Get Agent Action',
            ],
            'deleteAction' => [
                'method' => 'DELETE',
                'path' => '/voice-ai/actions/{actionId}',
                'operationId' => 'delete-action',
                'summary' => 'Delete Agent Action',
            ],
        ];
    }

    /**
     * Create Agent
     *
     * OperationId: create-agent
     * POST /voice-ai/agents
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAgent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAgent', $pathParams, $query, $body, $headers);
    }

    /**
     * List Agents
     *
     * OperationId: get-agents
     * GET /voice-ai/agents
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAgents(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAgents', $pathParams, $query, $body, $headers);
    }

    /**
     * Patch Agent
     *
     * OperationId: patch-agent
     * PATCH /voice-ai/agents/{agentId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function patchAgent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('patchAgent', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Agent
     *
     * OperationId: get-agent
     * GET /voice-ai/agents/{agentId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAgent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAgent', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Agent
     *
     * OperationId: delete-agent
     * DELETE /voice-ai/agents/{agentId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAgent(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAgent', $pathParams, $query, $body, $headers);
    }

    /**
     * List Call Logs
     *
     * OperationId: get-call-logs
     * GET /voice-ai/dashboard/call-logs
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCallLogs(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCallLogs', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Call Log
     *
     * OperationId: getCallLog
     * GET /voice-ai/dashboard/call-logs/{callId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getcalllog(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getcalllog', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Agent Action
     *
     * OperationId: create-action
     * POST /voice-ai/actions
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAction(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAction', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Agent Action
     *
     * OperationId: update-action
     * PUT /voice-ai/actions/{actionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateAction(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateAction', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Agent Action
     *
     * OperationId: get-action
     * GET /voice-ai/actions/{actionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAction(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAction', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Agent Action
     *
     * OperationId: delete-action
     * DELETE /voice-ai/actions/{actionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAction(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAction', $pathParams, $query, $body, $headers);
    }
}