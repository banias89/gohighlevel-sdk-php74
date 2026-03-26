<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class StoreModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createShippingZone' => [
                'method' => 'POST',
                'path' => '/store/shipping-zone',
                'operationId' => 'create-shipping-zone',
                'summary' => 'Create Shipping Zone',
            ],
            'listShippingZones' => [
                'method' => 'GET',
                'path' => '/store/shipping-zone',
                'operationId' => 'list-shipping-zones',
                'summary' => 'List Shipping Zones',
            ],
            'getShippingZones' => [
                'method' => 'GET',
                'path' => '/store/shipping-zone/{shippingZoneId}',
                'operationId' => 'get-shipping-zones',
                'summary' => 'Get Shipping Zone',
            ],
            'updateShippingZone' => [
                'method' => 'PUT',
                'path' => '/store/shipping-zone/{shippingZoneId}',
                'operationId' => 'update-shipping-zone',
                'summary' => 'Update Shipping Zone',
            ],
            'deleteShippingZone' => [
                'method' => 'DELETE',
                'path' => '/store/shipping-zone/{shippingZoneId}',
                'operationId' => 'delete-shipping-zone',
                'summary' => 'Delete shipping zone',
            ],
            'getAvailableShippingZones' => [
                'method' => 'POST',
                'path' => '/store/shipping-zone/shipping-rates',
                'operationId' => 'get-available-shipping-zones',
                'summary' => 'Get available shipping rates',
            ],
            'createShippingRate' => [
                'method' => 'POST',
                'path' => '/store/shipping-zone/{shippingZoneId}/shipping-rate',
                'operationId' => 'create-shipping-rate',
                'summary' => 'Create Shipping Rate',
            ],
            'listShippingRates' => [
                'method' => 'GET',
                'path' => '/store/shipping-zone/{shippingZoneId}/shipping-rate',
                'operationId' => 'list-shipping-rates',
                'summary' => 'List Shipping Rates',
            ],
            'getShippingRates' => [
                'method' => 'GET',
                'path' => '/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}',
                'operationId' => 'get-shipping-rates',
                'summary' => 'Get Shipping Rate',
            ],
            'updateShippingRate' => [
                'method' => 'PUT',
                'path' => '/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}',
                'operationId' => 'update-shipping-rate',
                'summary' => 'Update Shipping Rate',
            ],
            'deleteShippingRate' => [
                'method' => 'DELETE',
                'path' => '/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}',
                'operationId' => 'delete-shipping-rate',
                'summary' => 'Delete shipping rate',
            ],
            'createShippingCarrier' => [
                'method' => 'POST',
                'path' => '/store/shipping-carrier',
                'operationId' => 'create-shipping-carrier',
                'summary' => 'Create Shipping Carrier',
            ],
            'listShippingCarriers' => [
                'method' => 'GET',
                'path' => '/store/shipping-carrier',
                'operationId' => 'list-shipping-carriers',
                'summary' => 'List Shipping Carriers',
            ],
            'getShippingCarriers' => [
                'method' => 'GET',
                'path' => '/store/shipping-carrier/{shippingCarrierId}',
                'operationId' => 'get-shipping-carriers',
                'summary' => 'Get Shipping Carrier',
            ],
            'updateShippingCarrier' => [
                'method' => 'PUT',
                'path' => '/store/shipping-carrier/{shippingCarrierId}',
                'operationId' => 'update-shipping-carrier',
                'summary' => 'Update Shipping Carrier',
            ],
            'deleteShippingCarrier' => [
                'method' => 'DELETE',
                'path' => '/store/shipping-carrier/{shippingCarrierId}',
                'operationId' => 'delete-shipping-carrier',
                'summary' => 'Delete shipping carrier',
            ],
            'createStoreSetting' => [
                'method' => 'POST',
                'path' => '/store/store-setting',
                'operationId' => 'create-store-setting',
                'summary' => 'Create/Update Store Settings',
            ],
            'getStoreSettings' => [
                'method' => 'GET',
                'path' => '/store/store-setting',
                'operationId' => 'get-store-settings',
                'summary' => 'Get Store Settings',
            ],
        ];
    }

    /**
     * Create Shipping Zone
     *
     * OperationId: create-shipping-zone
     * POST /store/shipping-zone
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createShippingZone(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createShippingZone', $pathParams, $query, $body, $headers);
    }

    /**
     * List Shipping Zones
     *
     * OperationId: list-shipping-zones
     * GET /store/shipping-zone
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listShippingZones(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listShippingZones', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Shipping Zone
     *
     * OperationId: get-shipping-zones
     * GET /store/shipping-zone/{shippingZoneId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getShippingZones(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getShippingZones', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Shipping Zone
     *
     * OperationId: update-shipping-zone
     * PUT /store/shipping-zone/{shippingZoneId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateShippingZone(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateShippingZone', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete shipping zone
     *
     * OperationId: delete-shipping-zone
     * DELETE /store/shipping-zone/{shippingZoneId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteShippingZone(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteShippingZone', $pathParams, $query, $body, $headers);
    }

    /**
     * Get available shipping rates
     *
     * OperationId: get-available-shipping-zones
     * POST /store/shipping-zone/shipping-rates
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAvailableShippingZones(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAvailableShippingZones', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Shipping Rate
     *
     * OperationId: create-shipping-rate
     * POST /store/shipping-zone/{shippingZoneId}/shipping-rate
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createShippingRate(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createShippingRate', $pathParams, $query, $body, $headers);
    }

    /**
     * List Shipping Rates
     *
     * OperationId: list-shipping-rates
     * GET /store/shipping-zone/{shippingZoneId}/shipping-rate
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listShippingRates(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listShippingRates', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Shipping Rate
     *
     * OperationId: get-shipping-rates
     * GET /store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getShippingRates(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getShippingRates', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Shipping Rate
     *
     * OperationId: update-shipping-rate
     * PUT /store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateShippingRate(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateShippingRate', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete shipping rate
     *
     * OperationId: delete-shipping-rate
     * DELETE /store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteShippingRate(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteShippingRate', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Shipping Carrier
     *
     * OperationId: create-shipping-carrier
     * POST /store/shipping-carrier
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createShippingCarrier(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createShippingCarrier', $pathParams, $query, $body, $headers);
    }

    /**
     * List Shipping Carriers
     *
     * OperationId: list-shipping-carriers
     * GET /store/shipping-carrier
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listShippingCarriers(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listShippingCarriers', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Shipping Carrier
     *
     * OperationId: get-shipping-carriers
     * GET /store/shipping-carrier/{shippingCarrierId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getShippingCarriers(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getShippingCarriers', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Shipping Carrier
     *
     * OperationId: update-shipping-carrier
     * PUT /store/shipping-carrier/{shippingCarrierId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateShippingCarrier(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateShippingCarrier', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete shipping carrier
     *
     * OperationId: delete-shipping-carrier
     * DELETE /store/shipping-carrier/{shippingCarrierId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteShippingCarrier(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteShippingCarrier', $pathParams, $query, $body, $headers);
    }

    /**
     * Create/Update Store Settings
     *
     * OperationId: create-store-setting
     * POST /store/store-setting
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createStoreSetting(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createStoreSetting', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Store Settings
     *
     * OperationId: get-store-settings
     * GET /store/store-setting
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getStoreSettings(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getStoreSettings', $pathParams, $query, $body, $headers);
    }
}