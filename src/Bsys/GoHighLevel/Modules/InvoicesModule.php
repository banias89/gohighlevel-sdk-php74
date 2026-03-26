<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class InvoicesModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'createInvoiceTemplate' => [
                'method' => 'POST',
                'path' => '/invoices/template',
                'operationId' => 'create-invoice-template',
                'summary' => 'Create template',
            ],
            'listInvoiceTemplates' => [
                'method' => 'GET',
                'path' => '/invoices/template',
                'operationId' => 'list-invoice-templates',
                'summary' => 'List templates',
            ],
            'getInvoiceTemplate' => [
                'method' => 'GET',
                'path' => '/invoices/template/{templateId}',
                'operationId' => 'get-invoice-template',
                'summary' => 'Get an template',
            ],
            'updateInvoiceTemplate' => [
                'method' => 'PUT',
                'path' => '/invoices/template/{templateId}',
                'operationId' => 'update-invoice-template',
                'summary' => 'Update template',
            ],
            'deleteInvoiceTemplate' => [
                'method' => 'DELETE',
                'path' => '/invoices/template/{templateId}',
                'operationId' => 'delete-invoice-template',
                'summary' => 'Delete template',
            ],
            'updateInvoiceTemplateLateFeesConfiguration' => [
                'method' => 'PATCH',
                'path' => '/invoices/template/{templateId}/late-fees-configuration',
                'operationId' => 'update-invoice-template-late-fees-configuration',
                'summary' => 'Update template late fees configuration',
            ],
            'updateInvoicePaymentMethodsConfiguration' => [
                'method' => 'PATCH',
                'path' => '/invoices/template/{templateId}/payment-methods-configuration',
                'operationId' => 'update-invoice-payment-methods-configuration',
                'summary' => 'Update template late fees configuration',
            ],
            'createInvoiceSchedule' => [
                'method' => 'POST',
                'path' => '/invoices/schedule',
                'operationId' => 'create-invoice-schedule',
                'summary' => 'Create Invoice Schedule',
            ],
            'listInvoiceSchedules' => [
                'method' => 'GET',
                'path' => '/invoices/schedule',
                'operationId' => 'list-invoice-schedules',
                'summary' => 'List schedules',
            ],
            'getInvoiceSchedule' => [
                'method' => 'GET',
                'path' => '/invoices/schedule/{scheduleId}',
                'operationId' => 'get-invoice-schedule',
                'summary' => 'Get an schedule',
            ],
            'updateInvoiceSchedule' => [
                'method' => 'PUT',
                'path' => '/invoices/schedule/{scheduleId}',
                'operationId' => 'update-invoice-schedule',
                'summary' => 'Update schedule',
            ],
            'deleteInvoiceSchedule' => [
                'method' => 'DELETE',
                'path' => '/invoices/schedule/{scheduleId}',
                'operationId' => 'delete-invoice-schedule',
                'summary' => 'Delete schedule',
            ],
            'updateAndScheduleInvoiceSchedule' => [
                'method' => 'POST',
                'path' => '/invoices/schedule/{scheduleId}/updateAndSchedule',
                'operationId' => 'update-and-schedule-invoice-schedule',
                'summary' => 'Update scheduled recurring invoice',
            ],
            'scheduleInvoiceSchedule' => [
                'method' => 'POST',
                'path' => '/invoices/schedule/{scheduleId}/schedule',
                'operationId' => 'schedule-invoice-schedule',
                'summary' => 'Schedule an schedule invoice',
            ],
            'autoPaymentInvoiceSchedule' => [
                'method' => 'POST',
                'path' => '/invoices/schedule/{scheduleId}/auto-payment',
                'operationId' => 'auto-payment-invoice-schedule',
                'summary' => 'Manage Auto payment for an schedule invoice',
            ],
            'cancelInvoiceSchedule' => [
                'method' => 'POST',
                'path' => '/invoices/schedule/{scheduleId}/cancel',
                'operationId' => 'cancel-invoice-schedule',
                'summary' => 'Cancel an scheduled invoice',
            ],
            'text2payInvoice' => [
                'method' => 'POST',
                'path' => '/invoices/text2pay',
                'operationId' => 'text2pay-invoice',
                'summary' => 'Create & Send',
            ],
            'generateInvoiceNumber' => [
                'method' => 'GET',
                'path' => '/invoices/generate-invoice-number',
                'operationId' => 'generate-invoice-number',
                'summary' => 'Generate Invoice Number',
            ],
            'getInvoice' => [
                'method' => 'GET',
                'path' => '/invoices/{invoiceId}',
                'operationId' => 'get-invoice',
                'summary' => 'Get invoice',
            ],
            'updateInvoice' => [
                'method' => 'PUT',
                'path' => '/invoices/{invoiceId}',
                'operationId' => 'update-invoice',
                'summary' => 'Update invoice',
            ],
            'deleteInvoice' => [
                'method' => 'DELETE',
                'path' => '/invoices/{invoiceId}',
                'operationId' => 'delete-invoice',
                'summary' => 'Delete invoice',
            ],
            'updateInvoiceLateFeesConfiguration' => [
                'method' => 'PATCH',
                'path' => '/invoices/{invoiceId}/late-fees-configuration',
                'operationId' => 'update-invoice-late-fees-configuration',
                'summary' => 'Update invoice late fees configuration',
            ],
            'voidInvoice' => [
                'method' => 'POST',
                'path' => '/invoices/{invoiceId}/void',
                'operationId' => 'void-invoice',
                'summary' => 'Void invoice',
            ],
            'sendInvoice' => [
                'method' => 'POST',
                'path' => '/invoices/{invoiceId}/send',
                'operationId' => 'send-invoice',
                'summary' => 'Send invoice',
            ],
            'recordInvoice' => [
                'method' => 'POST',
                'path' => '/invoices/{invoiceId}/record-payment',
                'operationId' => 'record-invoice',
                'summary' => 'Record a manual payment for an invoice',
            ],
            'updateInvoiceLastVisitedAt' => [
                'method' => 'PATCH',
                'path' => '/invoices/stats/last-visited-at',
                'operationId' => 'update-invoice-last-visited-at',
                'summary' => 'Update invoice last visited at',
            ],
            'createNewEstimate' => [
                'method' => 'POST',
                'path' => '/invoices/estimate',
                'operationId' => 'create-new-estimate',
                'summary' => 'Create New Estimate',
            ],
            'updateEstimate' => [
                'method' => 'PUT',
                'path' => '/invoices/estimate/{estimateId}',
                'operationId' => 'update-estimate',
                'summary' => 'Update Estimate',
            ],
            'deleteEstimate' => [
                'method' => 'DELETE',
                'path' => '/invoices/estimate/{estimateId}',
                'operationId' => 'delete-estimate',
                'summary' => 'Delete Estimate',
            ],
            'generateEstimateNumber' => [
                'method' => 'GET',
                'path' => '/invoices/estimate/number/generate',
                'operationId' => 'generate-estimate-number',
                'summary' => 'Generate Estimate Number',
            ],
            'sendEstimate' => [
                'method' => 'POST',
                'path' => '/invoices/estimate/{estimateId}/send',
                'operationId' => 'send-estimate',
                'summary' => 'Send Estimate',
            ],
            'createInvoiceFromEstimate' => [
                'method' => 'POST',
                'path' => '/invoices/estimate/{estimateId}/invoice',
                'operationId' => 'create-invoice-from-estimate',
                'summary' => 'Create Invoice from Estimate',
            ],
            'listEstimates' => [
                'method' => 'GET',
                'path' => '/invoices/estimate/list',
                'operationId' => 'list-estimates',
                'summary' => 'List Estimates',
            ],
            'updateEstimateLastVisitedAt' => [
                'method' => 'PATCH',
                'path' => '/invoices/estimate/stats/last-visited-at',
                'operationId' => 'update-estimate-last-visited-at',
                'summary' => 'Update estimate last visited at',
            ],
            'listEstimateTemplates' => [
                'method' => 'GET',
                'path' => '/invoices/estimate/template',
                'operationId' => 'list-estimate-templates',
                'summary' => 'List Estimate Templates',
            ],
            'createEstimateTemplate' => [
                'method' => 'POST',
                'path' => '/invoices/estimate/template',
                'operationId' => 'create-estimate-template',
                'summary' => 'Create Estimate Template',
            ],
            'updateEstimateTemplate' => [
                'method' => 'PUT',
                'path' => '/invoices/estimate/template/{templateId}',
                'operationId' => 'update-estimate-template',
                'summary' => 'Update Estimate Template',
            ],
            'deleteEstimateTemplate' => [
                'method' => 'DELETE',
                'path' => '/invoices/estimate/template/{templateId}',
                'operationId' => 'delete-estimate-template',
                'summary' => 'Delete Estimate Template',
            ],
            'previewEstimateTemplate' => [
                'method' => 'GET',
                'path' => '/invoices/estimate/template/preview',
                'operationId' => 'preview-estimate-template',
                'summary' => 'Preview Estimate Template',
            ],
            'createInvoice' => [
                'method' => 'POST',
                'path' => '/invoices/',
                'operationId' => 'create-invoice',
                'summary' => 'Create Invoice',
            ],
            'listInvoices' => [
                'method' => 'GET',
                'path' => '/invoices/',
                'operationId' => 'list-invoices',
                'summary' => 'List invoices',
            ],
        ];
    }

    /**
     * Create template
     *
     * OperationId: create-invoice-template
     * POST /invoices/template
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createInvoiceTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createInvoiceTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * List templates
     *
     * OperationId: list-invoice-templates
     * GET /invoices/template
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listInvoiceTemplates(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listInvoiceTemplates', $pathParams, $query, $body, $headers);
    }

    /**
     * Get an template
     *
     * OperationId: get-invoice-template
     * GET /invoices/template/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getInvoiceTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getInvoiceTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Update template
     *
     * OperationId: update-invoice-template
     * PUT /invoices/template/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoiceTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoiceTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete template
     *
     * OperationId: delete-invoice-template
     * DELETE /invoices/template/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteInvoiceTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteInvoiceTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Update template late fees configuration
     *
     * OperationId: update-invoice-template-late-fees-configuration
     * PATCH /invoices/template/{templateId}/late-fees-configuration
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoiceTemplateLateFeesConfiguration(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoiceTemplateLateFeesConfiguration', $pathParams, $query, $body, $headers);
    }

    /**
     * Update template late fees configuration
     *
     * OperationId: update-invoice-payment-methods-configuration
     * PATCH /invoices/template/{templateId}/payment-methods-configuration
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoicePaymentMethodsConfiguration(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoicePaymentMethodsConfiguration', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Invoice Schedule
     *
     * OperationId: create-invoice-schedule
     * POST /invoices/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * List schedules
     *
     * OperationId: list-invoice-schedules
     * GET /invoices/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listInvoiceSchedules(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listInvoiceSchedules', $pathParams, $query, $body, $headers);
    }

    /**
     * Get an schedule
     *
     * OperationId: get-invoice-schedule
     * GET /invoices/schedule/{scheduleId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Update schedule
     *
     * OperationId: update-invoice-schedule
     * PUT /invoices/schedule/{scheduleId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete schedule
     *
     * OperationId: delete-invoice-schedule
     * DELETE /invoices/schedule/{scheduleId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Update scheduled recurring invoice
     *
     * OperationId: update-and-schedule-invoice-schedule
     * POST /invoices/schedule/{scheduleId}/updateAndSchedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateAndScheduleInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateAndScheduleInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Schedule an schedule invoice
     *
     * OperationId: schedule-invoice-schedule
     * POST /invoices/schedule/{scheduleId}/schedule
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function scheduleInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('scheduleInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Manage Auto payment for an schedule invoice
     *
     * OperationId: auto-payment-invoice-schedule
     * POST /invoices/schedule/{scheduleId}/auto-payment
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function autoPaymentInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('autoPaymentInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Cancel an scheduled invoice
     *
     * OperationId: cancel-invoice-schedule
     * POST /invoices/schedule/{scheduleId}/cancel
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function cancelInvoiceSchedule(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('cancelInvoiceSchedule', $pathParams, $query, $body, $headers);
    }

    /**
     * Create & Send
     *
     * OperationId: text2pay-invoice
     * POST /invoices/text2pay
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function text2payInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('text2payInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Generate Invoice Number
     *
     * OperationId: generate-invoice-number
     * GET /invoices/generate-invoice-number
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function generateInvoiceNumber(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('generateInvoiceNumber', $pathParams, $query, $body, $headers);
    }

    /**
     * Get invoice
     *
     * OperationId: get-invoice
     * GET /invoices/{invoiceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Update invoice
     *
     * OperationId: update-invoice
     * PUT /invoices/{invoiceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete invoice
     *
     * OperationId: delete-invoice
     * DELETE /invoices/{invoiceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Update invoice late fees configuration
     *
     * OperationId: update-invoice-late-fees-configuration
     * PATCH /invoices/{invoiceId}/late-fees-configuration
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoiceLateFeesConfiguration(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoiceLateFeesConfiguration', $pathParams, $query, $body, $headers);
    }

    /**
     * Void invoice
     *
     * OperationId: void-invoice
     * POST /invoices/{invoiceId}/void
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function voidInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('voidInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Send invoice
     *
     * OperationId: send-invoice
     * POST /invoices/{invoiceId}/send
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function sendInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('sendInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Record a manual payment for an invoice
     *
     * OperationId: record-invoice
     * POST /invoices/{invoiceId}/record-payment
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function recordInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('recordInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * Update invoice last visited at
     *
     * OperationId: update-invoice-last-visited-at
     * PATCH /invoices/stats/last-visited-at
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInvoiceLastVisitedAt(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInvoiceLastVisitedAt', $pathParams, $query, $body, $headers);
    }

    /**
     * Create New Estimate
     *
     * OperationId: create-new-estimate
     * POST /invoices/estimate
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createNewEstimate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createNewEstimate', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Estimate
     *
     * OperationId: update-estimate
     * PUT /invoices/estimate/{estimateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateEstimate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateEstimate', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Estimate
     *
     * OperationId: delete-estimate
     * DELETE /invoices/estimate/{estimateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteEstimate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteEstimate', $pathParams, $query, $body, $headers);
    }

    /**
     * Generate Estimate Number
     *
     * OperationId: generate-estimate-number
     * GET /invoices/estimate/number/generate
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function generateEstimateNumber(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('generateEstimateNumber', $pathParams, $query, $body, $headers);
    }

    /**
     * Send Estimate
     *
     * OperationId: send-estimate
     * POST /invoices/estimate/{estimateId}/send
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function sendEstimate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('sendEstimate', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Invoice from Estimate
     *
     * OperationId: create-invoice-from-estimate
     * POST /invoices/estimate/{estimateId}/invoice
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createInvoiceFromEstimate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createInvoiceFromEstimate', $pathParams, $query, $body, $headers);
    }

    /**
     * List Estimates
     *
     * OperationId: list-estimates
     * GET /invoices/estimate/list
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listEstimates(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listEstimates', $pathParams, $query, $body, $headers);
    }

    /**
     * Update estimate last visited at
     *
     * OperationId: update-estimate-last-visited-at
     * PATCH /invoices/estimate/stats/last-visited-at
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateEstimateLastVisitedAt(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateEstimateLastVisitedAt', $pathParams, $query, $body, $headers);
    }

    /**
     * List Estimate Templates
     *
     * OperationId: list-estimate-templates
     * GET /invoices/estimate/template
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listEstimateTemplates(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listEstimateTemplates', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Estimate Template
     *
     * OperationId: create-estimate-template
     * POST /invoices/estimate/template
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createEstimateTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createEstimateTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Estimate Template
     *
     * OperationId: update-estimate-template
     * PUT /invoices/estimate/template/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateEstimateTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateEstimateTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Estimate Template
     *
     * OperationId: delete-estimate-template
     * DELETE /invoices/estimate/template/{templateId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteEstimateTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteEstimateTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Preview Estimate Template
     *
     * OperationId: preview-estimate-template
     * GET /invoices/estimate/template/preview
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function previewEstimateTemplate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('previewEstimateTemplate', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Invoice
     *
     * OperationId: create-invoice
     * POST /invoices/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createInvoice(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createInvoice', $pathParams, $query, $body, $headers);
    }

    /**
     * List invoices
     *
     * OperationId: list-invoices
     * GET /invoices/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listInvoices(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listInvoices', $pathParams, $query, $body, $headers);
    }
}