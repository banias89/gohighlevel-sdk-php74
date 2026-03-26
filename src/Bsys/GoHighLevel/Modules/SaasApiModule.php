<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class SaasApiModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'locationsDeprecated' => [
                'method' => 'GET',
                'path' => '/saas-api/public-api/locations',
                'operationId' => 'locations-deprecated',
                'summary' => 'Get locations by stripeId with companyId',
            ],
            'updateSaasSubscriptionDeprecated' => [
                'method' => 'PUT',
                'path' => '/saas-api/public-api/update-saas-subscription/{locationId}',
                'operationId' => 'update-saas-subscription-deprecated',
                'summary' => 'Update SaaS subscription',
            ],
            'bulkDisableSaasDeprecated' => [
                'method' => 'POST',
                'path' => '/saas-api/public-api/bulk-disable-saas/{companyId}',
                'operationId' => 'bulk-disable-saas-deprecated',
                'summary' => 'Disable SaaS for locations',
            ],
            'enableSaasLocationDeprecated' => [
                'method' => 'POST',
                'path' => '/saas-api/public-api/enable-saas/{locationId}',
                'operationId' => 'enable-saas-location-deprecated',
                'summary' => 'Enable SaaS for Sub-Account (Formerly Location)',
            ],
            'pauseLocationDeprecated' => [
                'method' => 'POST',
                'path' => '/saas-api/public-api/pause/{locationId}',
                'operationId' => 'pause-location-deprecated',
                'summary' => 'Pause location',
            ],
            'updateRebillingDeprecated' => [
                'method' => 'POST',
                'path' => '/saas-api/public-api/update-rebilling/{companyId}',
                'operationId' => 'update-rebilling-deprecated',
                'summary' => 'Update Rebilling',
            ],
            'getAgencyPlansDeprecated' => [
                'method' => 'GET',
                'path' => '/saas-api/public-api/agency-plans/{companyId}',
                'operationId' => 'get-agency-plans-deprecated',
                'summary' => 'Get Agency Plans',
            ],
            'getLocationSubscriptionDeprecated' => [
                'method' => 'GET',
                'path' => '/saas-api/public-api/get-saas-subscription/{locationId}',
                'operationId' => 'get-location-subscription-deprecated',
                'summary' => 'Get Location Subscription Details',
            ],
            'bulkEnableSaasDeprecated' => [
                'method' => 'POST',
                'path' => '/saas-api/public-api/bulk-enable-saas/{companyId}',
                'operationId' => 'bulk-enable-saas-deprecated',
                'summary' => 'Bulk Enable SaaS',
            ],
            'getSaasLocationsDeprecated' => [
                'method' => 'GET',
                'path' => '/saas-api/public-api/saas-locations/{companyId}',
                'operationId' => 'get-saas-locations-deprecated',
                'summary' => 'Get SaaS Locations',
            ],
            'getSaasPlanDeprecated' => [
                'method' => 'GET',
                'path' => '/saas-api/public-api/saas-plan/{planId}',
                'operationId' => 'get-saas-plan-deprecated',
                'summary' => 'Get SaaS Plan',
            ],
            'locations' => [
                'method' => 'GET',
                'path' => '/saas/locations',
                'operationId' => 'locations',
                'summary' => 'Get locations by stripeId with companyId',
            ],
            'generatePaymentLink' => [
                'method' => 'PUT',
                'path' => '/saas/update-saas-subscription/{locationId}',
                'operationId' => 'generate-payment-link',
                'summary' => 'Update SaaS subscription',
            ],
            'bulkDisableSaas' => [
                'method' => 'POST',
                'path' => '/saas/bulk-disable-saas/{companyId}',
                'operationId' => 'bulk-disable-saas',
                'summary' => 'Disable SaaS for locations',
            ],
            'enableSaasLocation' => [
                'method' => 'POST',
                'path' => '/saas/enable-saas/{locationId}',
                'operationId' => 'enable-saas-location',
                'summary' => 'Enable SaaS for Sub-Account (Formerly Location)',
            ],
            'pauseLocation' => [
                'method' => 'POST',
                'path' => '/saas/pause/{locationId}',
                'operationId' => 'pause-location',
                'summary' => 'Pause location',
            ],
            'updateRebilling' => [
                'method' => 'POST',
                'path' => '/saas/update-rebilling/{companyId}',
                'operationId' => 'update-rebilling',
                'summary' => 'Update Rebilling',
            ],
            'getAgencyPlans' => [
                'method' => 'GET',
                'path' => '/saas/agency-plans/{companyId}',
                'operationId' => 'get-agency-plans',
                'summary' => 'Get Agency Plans',
            ],
            'getLocationSubscription' => [
                'method' => 'GET',
                'path' => '/saas/get-saas-subscription/{locationId}',
                'operationId' => 'get-location-subscription',
                'summary' => 'Get Location Subscription Details',
            ],
            'bulkEnableSaas' => [
                'method' => 'POST',
                'path' => '/saas/bulk-enable-saas/{companyId}',
                'operationId' => 'bulk-enable-saas',
                'summary' => 'Bulk Enable SaaS',
            ],
            'getSaasLocations' => [
                'method' => 'GET',
                'path' => '/saas/saas-locations/{companyId}',
                'operationId' => 'get-saas-locations',
                'summary' => 'Get SaaS Locations',
            ],
            'getSaasPlan' => [
                'method' => 'GET',
                'path' => '/saas/saas-plan/{planId}',
                'operationId' => 'get-saas-plan',
                'summary' => 'Get SaaS Plan',
            ],
        ];
    }

    /**
     * Get locations by stripeId with companyId
     *
     * OperationId: locations-deprecated
     * GET /saas-api/public-api/locations
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function locationsDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('locationsDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Update SaaS subscription
     *
     * OperationId: update-saas-subscription-deprecated
     * PUT /saas-api/public-api/update-saas-subscription/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateSaasSubscriptionDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateSaasSubscriptionDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Disable SaaS for locations
     *
     * OperationId: bulk-disable-saas-deprecated
     * POST /saas-api/public-api/bulk-disable-saas/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkDisableSaasDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkDisableSaasDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Enable SaaS for Sub-Account (Formerly Location)
     *
     * OperationId: enable-saas-location-deprecated
     * POST /saas-api/public-api/enable-saas/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function enableSaasLocationDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('enableSaasLocationDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Pause location
     *
     * OperationId: pause-location-deprecated
     * POST /saas-api/public-api/pause/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function pauseLocationDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('pauseLocationDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Rebilling
     *
     * OperationId: update-rebilling-deprecated
     * POST /saas-api/public-api/update-rebilling/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateRebillingDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateRebillingDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Agency Plans
     *
     * OperationId: get-agency-plans-deprecated
     * GET /saas-api/public-api/agency-plans/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAgencyPlansDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAgencyPlansDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Location Subscription Details
     *
     * OperationId: get-location-subscription-deprecated
     * GET /saas-api/public-api/get-saas-subscription/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLocationSubscriptionDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLocationSubscriptionDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Enable SaaS
     *
     * OperationId: bulk-enable-saas-deprecated
     * POST /saas-api/public-api/bulk-enable-saas/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkEnableSaasDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkEnableSaasDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Get SaaS Locations
     *
     * OperationId: get-saas-locations-deprecated
     * GET /saas-api/public-api/saas-locations/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSaasLocationsDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSaasLocationsDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Get SaaS Plan
     *
     * OperationId: get-saas-plan-deprecated
     * GET /saas-api/public-api/saas-plan/{planId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSaasPlanDeprecated(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSaasPlanDeprecated', $pathParams, $query, $body, $headers);
    }

    /**
     * Get locations by stripeId with companyId
     *
     * OperationId: locations
     * GET /saas/locations
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function locations(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('locations', $pathParams, $query, $body, $headers);
    }

    /**
     * Update SaaS subscription
     *
     * OperationId: generate-payment-link
     * PUT /saas/update-saas-subscription/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function generatePaymentLink(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('generatePaymentLink', $pathParams, $query, $body, $headers);
    }

    /**
     * Disable SaaS for locations
     *
     * OperationId: bulk-disable-saas
     * POST /saas/bulk-disable-saas/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkDisableSaas(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkDisableSaas', $pathParams, $query, $body, $headers);
    }

    /**
     * Enable SaaS for Sub-Account (Formerly Location)
     *
     * OperationId: enable-saas-location
     * POST /saas/enable-saas/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function enableSaasLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('enableSaasLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Pause location
     *
     * OperationId: pause-location
     * POST /saas/pause/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function pauseLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('pauseLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Rebilling
     *
     * OperationId: update-rebilling
     * POST /saas/update-rebilling/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateRebilling(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateRebilling', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Agency Plans
     *
     * OperationId: get-agency-plans
     * GET /saas/agency-plans/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAgencyPlans(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAgencyPlans', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Location Subscription Details
     *
     * OperationId: get-location-subscription
     * GET /saas/get-saas-subscription/{locationId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLocationSubscription(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLocationSubscription', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Enable SaaS
     *
     * OperationId: bulk-enable-saas
     * POST /saas/bulk-enable-saas/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkEnableSaas(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkEnableSaas', $pathParams, $query, $body, $headers);
    }

    /**
     * Get SaaS Locations
     *
     * OperationId: get-saas-locations
     * GET /saas/saas-locations/{companyId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSaasLocations(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSaasLocations', $pathParams, $query, $body, $headers);
    }

    /**
     * Get SaaS Plan
     *
     * OperationId: get-saas-plan
     * GET /saas/saas-plan/{planId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSaasPlan(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSaasPlan', $pathParams, $query, $body, $headers);
    }
}