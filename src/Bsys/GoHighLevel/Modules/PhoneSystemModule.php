<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class PhoneSystemModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getnumberpoollist' => [
                'method' => 'GET',
                'path' => '/phone-system/number-pools',
                'operationId' => 'getNumberPoolList',
                'summary' => 'List Number Pools',
            ],
            'activeNumbers' => [
                'method' => 'GET',
                'path' => '/phone-system/numbers/location/{locationId}',
                'operationId' => 'active-numbers',
                'summary' => 'List active numbers',
            ],
        ];
    }

    /**
     * List Number Pools
     *
     * OperationId: getNumberPoolList
     * GET /phone-system/number-pools
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getnumberpoollist(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getnumberpoollist', $pathParams, $query, $body, $headers);
    }

    /**
     * List active numbers
     *
     * OperationId: active-numbers
     * GET /phone-system/numbers/location/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function activeNumbers(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('activeNumbers', $pathParams, $query, $body, $headers);
    }
}