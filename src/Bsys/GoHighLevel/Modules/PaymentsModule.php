<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class PaymentsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createIntegrationProvider' => [
                'method' => 'POST',
                'path' => '/payments/integrations/provider/whitelabel',
                'operationId' => 'create-integration provider',
                'summary' => 'Create White-label Integration Provider',
            ],
            'listIntegrationProviders' => [
                'method' => 'GET',
                'path' => '/payments/integrations/provider/whitelabel',
                'operationId' => 'list-integration-providers',
                'summary' => 'List White-label Integration Providers',
            ],
            'listOrders' => [
                'method' => 'GET',
                'path' => '/payments/orders',
                'operationId' => 'list-orders',
                'summary' => 'List Orders',
            ],
            'getOrderById' => [
                'method' => 'GET',
                'path' => '/payments/orders/{orderId}',
                'operationId' => 'get-order-by-id',
                'summary' => 'Get Order by ID',
            ],
            'recordOrderPayment' => [
                'method' => 'POST',
                'path' => '/payments/orders/{orderId}/record-payment',
                'operationId' => 'record-order-payment',
                'summary' => 'Record Order Payment',
            ],
            'postMigrateOrderPaymentStatus' => [
                'method' => 'POST',
                'path' => '/payments/orders/migrate-order-ps',
                'operationId' => 'post-migrate-order-payment-status',
                'summary' => 'migration Endpoint for Order Payment Status',
            ],
            'createOrderFulfillment' => [
                'method' => 'POST',
                'path' => '/payments/orders/{orderId}/fulfillments',
                'operationId' => 'create-order-fulfillment',
                'summary' => 'Create order fulfillment',
            ],
            'listOrderFulfillment' => [
                'method' => 'GET',
                'path' => '/payments/orders/{orderId}/fulfillments',
                'operationId' => 'list-order-fulfillment',
                'summary' => 'List fulfillment',
            ],
            'listOrderNotes' => [
                'method' => 'GET',
                'path' => '/payments/orders/{orderId}/notes',
                'operationId' => 'list-order-notes',
                'summary' => 'List Order Notes',
            ],
            'listTransactions' => [
                'method' => 'GET',
                'path' => '/payments/transactions',
                'operationId' => 'list-transactions',
                'summary' => 'List Transactions',
            ],
            'getTransactionById' => [
                'method' => 'GET',
                'path' => '/payments/transactions/{transactionId}',
                'operationId' => 'get-transaction-by-id',
                'summary' => 'Get Transaction by ID',
            ],
            'listSubscriptions' => [
                'method' => 'GET',
                'path' => '/payments/subscriptions',
                'operationId' => 'list-subscriptions',
                'summary' => 'List Subscriptions',
            ],
            'getSubscriptionById' => [
                'method' => 'GET',
                'path' => '/payments/subscriptions/{subscriptionId}',
                'operationId' => 'get-subscription-by-id',
                'summary' => 'Get Subscription by ID',
            ],
            'listCoupons' => [
                'method' => 'GET',
                'path' => '/payments/coupon/list',
                'operationId' => 'list-coupons',
                'summary' => 'List Coupons',
            ],
            'createCoupon' => [
                'method' => 'POST',
                'path' => '/payments/coupon',
                'operationId' => 'create-coupon',
                'summary' => 'Create Coupon',
            ],
            'updateCoupon' => [
                'method' => 'PUT',
                'path' => '/payments/coupon',
                'operationId' => 'update-coupon',
                'summary' => 'Update Coupon',
            ],
            'deleteCoupon' => [
                'method' => 'DELETE',
                'path' => '/payments/coupon',
                'operationId' => 'delete-coupon',
                'summary' => 'Delete Coupon',
            ],
            'getCoupon' => [
                'method' => 'GET',
                'path' => '/payments/coupon',
                'operationId' => 'get-coupon',
                'summary' => 'Fetch Coupon',
            ],
            'createIntegration' => [
                'method' => 'POST',
                'path' => '/payments/custom-provider/provider',
                'operationId' => 'create-integration',
                'summary' => 'Create new integration',
            ],
            'deleteIntegration' => [
                'method' => 'DELETE',
                'path' => '/payments/custom-provider/provider',
                'operationId' => 'delete-integration',
                'summary' => 'Deleting an existing integration',
            ],
            'fetchConfig' => [
                'method' => 'GET',
                'path' => '/payments/custom-provider/connect',
                'operationId' => 'fetch-config',
                'summary' => 'Fetch given provider config',
            ],
            'createConfig' => [
                'method' => 'POST',
                'path' => '/payments/custom-provider/connect',
                'operationId' => 'create-config',
                'summary' => 'Create new provider config',
            ],
            'disconnectConfig' => [
                'method' => 'POST',
                'path' => '/payments/custom-provider/disconnect',
                'operationId' => 'disconnect-config',
                'summary' => 'Disconnect existing provider config',
            ],
            'customProviderMarketplaceAppUpdateCapabilities' => [
                'method' => 'PUT',
                'path' => '/payments/custom-provider/capabilities',
                'operationId' => 'custom-provider-marketplace-app-update-capabilities',
                'summary' => 'Custom-provider marketplace app update capabilities',
            ],
        ];
    }

    /**
     * Create White-label Integration Provider
     *
     * OperationId: create-integration provider
     * POST /payments/integrations/provider/whitelabel
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createIntegrationProvider(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createIntegrationProvider', $pathParams, $query, $body, $headers);
    }

    /**
     * List White-label Integration Providers
     *
     * OperationId: list-integration-providers
     * GET /payments/integrations/provider/whitelabel
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listIntegrationProviders(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listIntegrationProviders', $pathParams, $query, $body, $headers);
    }

    /**
     * List Orders
     *
     * OperationId: list-orders
     * GET /payments/orders
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listOrders(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listOrders', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Order by ID
     *
     * OperationId: get-order-by-id
     * GET /payments/orders/{orderId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getOrderById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getOrderById', $pathParams, $query, $body, $headers);
    }

    /**
     * Record Order Payment
     *
     * OperationId: record-order-payment
     * POST /payments/orders/{orderId}/record-payment
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function recordOrderPayment(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('recordOrderPayment', $pathParams, $query, $body, $headers);
    }

    /**
     * migration Endpoint for Order Payment Status
     *
     * OperationId: post-migrate-order-payment-status
     * POST /payments/orders/migrate-order-ps
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function postMigrateOrderPaymentStatus(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('postMigrateOrderPaymentStatus', $pathParams, $query, $body, $headers);
    }

    /**
     * Create order fulfillment
     *
     * OperationId: create-order-fulfillment
     * POST /payments/orders/{orderId}/fulfillments
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createOrderFulfillment(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createOrderFulfillment', $pathParams, $query, $body, $headers);
    }

    /**
     * List fulfillment
     *
     * OperationId: list-order-fulfillment
     * GET /payments/orders/{orderId}/fulfillments
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listOrderFulfillment(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listOrderFulfillment', $pathParams, $query, $body, $headers);
    }

    /**
     * List Order Notes
     *
     * OperationId: list-order-notes
     * GET /payments/orders/{orderId}/notes
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listOrderNotes(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listOrderNotes', $pathParams, $query, $body, $headers);
    }

    /**
     * List Transactions
     *
     * OperationId: list-transactions
     * GET /payments/transactions
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listTransactions(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listTransactions', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Transaction by ID
     *
     * OperationId: get-transaction-by-id
     * GET /payments/transactions/{transactionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTransactionById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTransactionById', $pathParams, $query, $body, $headers);
    }

    /**
     * List Subscriptions
     *
     * OperationId: list-subscriptions
     * GET /payments/subscriptions
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listSubscriptions(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listSubscriptions', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Subscription by ID
     *
     * OperationId: get-subscription-by-id
     * GET /payments/subscriptions/{subscriptionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSubscriptionById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSubscriptionById', $pathParams, $query, $body, $headers);
    }

    /**
     * List Coupons
     *
     * OperationId: list-coupons
     * GET /payments/coupon/list
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listCoupons(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listCoupons', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Coupon
     *
     * OperationId: create-coupon
     * POST /payments/coupon
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createCoupon(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createCoupon', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Coupon
     *
     * OperationId: update-coupon
     * PUT /payments/coupon
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateCoupon(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateCoupon', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Coupon
     *
     * OperationId: delete-coupon
     * DELETE /payments/coupon
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCoupon(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCoupon', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Coupon
     *
     * OperationId: get-coupon
     * GET /payments/coupon
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCoupon(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCoupon', $pathParams, $query, $body, $headers);
    }

    /**
     * Create new integration
     *
     * OperationId: create-integration
     * POST /payments/custom-provider/provider
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createIntegration(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createIntegration', $pathParams, $query, $body, $headers);
    }

    /**
     * Deleting an existing integration
     *
     * OperationId: delete-integration
     * DELETE /payments/custom-provider/provider
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteIntegration(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteIntegration', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch given provider config
     *
     * OperationId: fetch-config
     * GET /payments/custom-provider/connect
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function fetchConfig(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('fetchConfig', $pathParams, $query, $body, $headers);
    }

    /**
     * Create new provider config
     *
     * OperationId: create-config
     * POST /payments/custom-provider/connect
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createConfig(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createConfig', $pathParams, $query, $body, $headers);
    }

    /**
     * Disconnect existing provider config
     *
     * OperationId: disconnect-config
     * POST /payments/custom-provider/disconnect
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function disconnectConfig(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('disconnectConfig', $pathParams, $query, $body, $headers);
    }

    /**
     * Custom-provider marketplace app update capabilities
     *
     * OperationId: custom-provider-marketplace-app-update-capabilities
     * PUT /payments/custom-provider/capabilities
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function customProviderMarketplaceAppUpdateCapabilities(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('customProviderMarketplaceAppUpdateCapabilities', $pathParams, $query, $body, $headers);
    }
}