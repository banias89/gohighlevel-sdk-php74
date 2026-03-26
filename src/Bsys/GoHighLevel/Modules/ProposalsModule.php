<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class ProposalsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'listDocumentsContracts' => [
                'method' => 'GET',
                'path' => '/proposals/document',
                'operationId' => 'list-documents-contracts',
                'summary' => 'List documents',
            ],
            'sendDocumentsContracts' => [
                'method' => 'POST',
                'path' => '/proposals/document/send',
                'operationId' => 'send-documents-contracts',
                'summary' => 'Send document',
            ],
            'listDocumentsContractsTemplates' => [
                'method' => 'GET',
                'path' => '/proposals/templates',
                'operationId' => 'list-documents-contracts-templates',
                'summary' => 'List templates',
            ],
            'sendDocumentsContractsTemplate' => [
                'method' => 'POST',
                'path' => '/proposals/templates/send',
                'operationId' => 'send-documents-contracts-template',
                'summary' => 'Send template',
            ],
        ];
    }

    /**
     * List documents
     *
     * OperationId: list-documents-contracts
     * GET /proposals/document
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listDocumentsContracts(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listDocumentsContracts', $pathParams, $query, $body, $headers);
    }

    /**
     * Send document
     *
     * OperationId: send-documents-contracts
     * POST /proposals/document/send
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function sendDocumentsContracts(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('sendDocumentsContracts', $pathParams, $query, $body, $headers);
    }

    /**
     * List templates
     *
     * OperationId: list-documents-contracts-templates
     * GET /proposals/templates
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listDocumentsContractsTemplates(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listDocumentsContractsTemplates', $pathParams, $query, $body, $headers);
    }

    /**
     * Send template
     *
     * OperationId: send-documents-contracts-template
     * POST /proposals/templates/send
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function sendDocumentsContractsTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('sendDocumentsContractsTemplate', $pathParams, $query, $body, $headers);
    }
}