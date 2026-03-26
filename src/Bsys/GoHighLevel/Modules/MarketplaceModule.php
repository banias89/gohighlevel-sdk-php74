<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class MarketplaceModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'charge' => [
                'method' => 'POST',
                'path' => '/marketplace/billing/charges',
                'operationId' => 'charge',
                'summary' => 'Create a new wallet charge',
            ],
            'getcharges' => [
                'method' => 'GET',
                'path' => '/marketplace/billing/charges',
                'operationId' => 'getCharges',
                'summary' => 'Get all wallet charges',
            ],
            'deletecharge' => [
                'method' => 'DELETE',
                'path' => '/marketplace/billing/charges/{chargeId}',
                'operationId' => 'deleteCharge',
                'summary' => 'Delete a wallet charge',
            ],
            'getspecificcharge' => [
                'method' => 'GET',
                'path' => '/marketplace/billing/charges/{chargeId}',
                'operationId' => 'getSpecificCharge',
                'summary' => 'Get specific wallet charge details',
            ],
            'hasfunds' => [
                'method' => 'GET',
                'path' => '/marketplace/billing/charges/has-funds',
                'operationId' => 'hasFunds',
                'summary' => 'Check if account has sufficient funds',
            ],
            'uninstallApplication' => [
                'method' => 'DELETE',
                'path' => '/marketplace/app/{appId}/installations',
                'operationId' => 'uninstall-application',
                'summary' => 'Uninstall an application',
            ],
            'getInstallerDetails' => [
                'method' => 'GET',
                'path' => '/marketplace/app/{appId}/installations',
                'operationId' => 'get-installer-details',
                'summary' => 'Get Installer Details',
            ],
        ];
    }

    /**
     * Create a new wallet charge
     *
     * OperationId: charge
     * POST /marketplace/billing/charges
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function charge(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('charge', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all wallet charges
     *
     * OperationId: getCharges
     * GET /marketplace/billing/charges
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getcharges(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getcharges', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete a wallet charge
     *
     * OperationId: deleteCharge
     * DELETE /marketplace/billing/charges/{chargeId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deletecharge(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deletecharge', $pathParams, $query, $body, $headers);
    }

    /**
     * Get specific wallet charge details
     *
     * OperationId: getSpecificCharge
     * GET /marketplace/billing/charges/{chargeId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getspecificcharge(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getspecificcharge', $pathParams, $query, $body, $headers);
    }

    /**
     * Check if account has sufficient funds
     *
     * OperationId: hasFunds
     * GET /marketplace/billing/charges/has-funds
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function hasfunds(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('hasfunds', $pathParams, $query, $body, $headers);
    }

    /**
     * Uninstall an application
     *
     * OperationId: uninstall-application
     * DELETE /marketplace/app/{appId}/installations
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uninstallApplication(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uninstallApplication', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Installer Details
     *
     * OperationId: get-installer-details
     * GET /marketplace/app/{appId}/installations
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getInstallerDetails(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getInstallerDetails', $pathParams, $query, $body, $headers);
    }
}