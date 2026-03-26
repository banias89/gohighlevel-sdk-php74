<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class AssociationsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createRelation' => [
                'method' => 'POST',
                'path' => '/associations/relations',
                'operationId' => 'create-relation',
                'summary' => 'Create Relation for you associated entities.',
            ],
            'getRelationsByRecordId' => [
                'method' => 'GET',
                'path' => '/associations/relations/{recordId}',
                'operationId' => 'get-relations-by-record-id',
                'summary' => 'Get all relations By record Id',
            ],
            'deleteRelation' => [
                'method' => 'DELETE',
                'path' => '/associations/relations/{relationId}',
                'operationId' => 'delete-relation',
                'summary' => 'Delete Relation',
            ],
            'getAssociationKeyByKeyName' => [
                'method' => 'GET',
                'path' => '/associations/key/{key_name}',
                'operationId' => 'get-association-key-by-key-name',
                'summary' => 'Get association key by key name',
            ],
            'getAssociationByObjectKeys' => [
                'method' => 'GET',
                'path' => '/associations/objectKey/{objectKey}',
                'operationId' => 'get-association-by-object-keys',
                'summary' => 'Get association by object keys',
            ],
            'updateAssociation' => [
                'method' => 'PUT',
                'path' => '/associations/{associationId}',
                'operationId' => 'update-association',
                'summary' => 'Update Association By Id',
            ],
            'deleteAssociation' => [
                'method' => 'DELETE',
                'path' => '/associations/{associationId}',
                'operationId' => 'delete-association',
                'summary' => 'Delete Association',
            ],
            'getAssociationById' => [
                'method' => 'GET',
                'path' => '/associations/{associationId}',
                'operationId' => 'get-association-by-ID',
                'summary' => 'Get association by ID',
            ],
            'createAssociation' => [
                'method' => 'POST',
                'path' => '/associations/',
                'operationId' => 'create-association',
                'summary' => 'Create Association',
            ],
            'findAssociations' => [
                'method' => 'GET',
                'path' => '/associations/',
                'operationId' => 'find-associations',
                'summary' => 'Get all associations for a sub-account / location',
            ],
        ];
    }

    /**
     * Create Relation for you associated entities.
     *
     * OperationId: create-relation
     * POST /associations/relations
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createRelation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createRelation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all relations By record Id
     *
     * OperationId: get-relations-by-record-id
     * GET /associations/relations/{recordId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getRelationsByRecordId(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getRelationsByRecordId', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Relation
     *
     * OperationId: delete-relation
     * DELETE /associations/relations/{relationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteRelation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteRelation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get association key by key name
     *
     * OperationId: get-association-key-by-key-name
     * GET /associations/key/{key_name}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAssociationKeyByKeyName(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAssociationKeyByKeyName', $pathParams, $query, $body, $headers);
    }

    /**
     * Get association by object keys
     *
     * OperationId: get-association-by-object-keys
     * GET /associations/objectKey/{objectKey}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAssociationByObjectKeys(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAssociationByObjectKeys', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Association By Id
     *
     * OperationId: update-association
     * PUT /associations/{associationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateAssociation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateAssociation', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Association
     *
     * OperationId: delete-association
     * DELETE /associations/{associationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAssociation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAssociation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get association by ID
     *
     * OperationId: get-association-by-ID
     * GET /associations/{associationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAssociationById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAssociationById', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Association
     *
     * OperationId: create-association
     * POST /associations/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createAssociation(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createAssociation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all associations for a sub-account / location
     *
     * OperationId: find-associations
     * GET /associations/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function findAssociations(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('findAssociations', $pathParams, $query, $body, $headers);
    }
}