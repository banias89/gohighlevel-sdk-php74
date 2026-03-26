<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class ProductsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'bulkupdate' => [
                'method' => 'POST',
                'path' => '/products/bulk-update',
                'operationId' => 'bulkUpdate',
                'summary' => 'Bulk Update Products',
            ],
            'bulkedit' => [
                'method' => 'POST',
                'path' => '/products/bulk-update/edit',
                'operationId' => 'bulkEdit',
                'summary' => 'Bulk Edit Products and Prices',
            ],
            'createPriceForProduct' => [
                'method' => 'POST',
                'path' => '/products/{productId}/price',
                'operationId' => 'create-price-for-product',
                'summary' => 'Create Price for a Product',
            ],
            'listPricesForProduct' => [
                'method' => 'GET',
                'path' => '/products/{productId}/price',
                'operationId' => 'list-prices-for-product',
                'summary' => 'List Prices for a Product',
            ],
            'getListInventory' => [
                'method' => 'GET',
                'path' => '/products/inventory',
                'operationId' => 'get-list-inventory',
                'summary' => 'List Inventory',
            ],
            'updateInventory' => [
                'method' => 'POST',
                'path' => '/products/inventory',
                'operationId' => 'update-inventory',
                'summary' => 'Update Inventory',
            ],
            'getPriceByIdForProduct' => [
                'method' => 'GET',
                'path' => '/products/{productId}/price/{priceId}',
                'operationId' => 'get-price-by-id-for-product',
                'summary' => 'Get Price by ID for a Product',
            ],
            'updatePriceByIdForProduct' => [
                'method' => 'PUT',
                'path' => '/products/{productId}/price/{priceId}',
                'operationId' => 'update-price-by-id-for-product',
                'summary' => 'Update Price by ID for a Product',
            ],
            'deletePriceByIdForProduct' => [
                'method' => 'DELETE',
                'path' => '/products/{productId}/price/{priceId}',
                'operationId' => 'delete-price-by-id-for-product',
                'summary' => 'Delete Price by ID for a Product',
            ],
            'getProductStoreStats' => [
                'method' => 'GET',
                'path' => '/products/store/{storeId}/stats',
                'operationId' => 'get-product-store-stats',
                'summary' => 'Fetch Product Store Stats',
            ],
            'updateStoreStatus' => [
                'method' => 'POST',
                'path' => '/products/store/{storeId}',
                'operationId' => 'update-store-status',
                'summary' => 'Action to include/exclude the product in store',
            ],
            'updateDisplayPriority' => [
                'method' => 'POST',
                'path' => '/products/store/{storeId}/priority',
                'operationId' => 'update-display-priority',
                'summary' => 'Update product display priorities in store',
            ],
            'getProductCollection' => [
                'method' => 'GET',
                'path' => '/products/collections',
                'operationId' => 'get-product-collection',
                'summary' => 'Fetch Product Collections',
            ],
            'createProductCollection' => [
                'method' => 'POST',
                'path' => '/products/collections',
                'operationId' => 'create-product-collection',
                'summary' => 'Create Product Collection',
            ],
            'getProductCollectionId' => [
                'method' => 'GET',
                'path' => '/products/collections/{collectionId}',
                'operationId' => 'get-product-collection-id',
                'summary' => 'Get Details about individual product collection',
            ],
            'updateProductCollection' => [
                'method' => 'PUT',
                'path' => '/products/collections/{collectionId}',
                'operationId' => 'update-product-collection',
                'summary' => 'Update Product Collection',
            ],
            'deleteProductCollection' => [
                'method' => 'DELETE',
                'path' => '/products/collections/{collectionId}',
                'operationId' => 'delete-product-collection',
                'summary' => 'Delete Product Collection',
            ],
            'getProductReviews' => [
                'method' => 'GET',
                'path' => '/products/reviews',
                'operationId' => 'get-product-reviews',
                'summary' => 'Fetch Product Reviews',
            ],
            'getReviewsCount' => [
                'method' => 'GET',
                'path' => '/products/reviews/count',
                'operationId' => 'get-reviews-count',
                'summary' => 'Fetch Review Count as per status',
            ],
            'updateProductReview' => [
                'method' => 'PUT',
                'path' => '/products/reviews/{reviewId}',
                'operationId' => 'update-product-review',
                'summary' => 'Update Product Reviews',
            ],
            'deleteProductReview' => [
                'method' => 'DELETE',
                'path' => '/products/reviews/{reviewId}',
                'operationId' => 'delete-product-review',
                'summary' => 'Delete Product Review',
            ],
            'bulkUpdateProductReview' => [
                'method' => 'POST',
                'path' => '/products/reviews/bulk-update',
                'operationId' => 'bulk-update-product-review',
                'summary' => 'Update Product Reviews',
            ],
            'getProductById' => [
                'method' => 'GET',
                'path' => '/products/{productId}',
                'operationId' => 'get-product-by-id',
                'summary' => 'Get Product by ID',
            ],
            'deleteProductById' => [
                'method' => 'DELETE',
                'path' => '/products/{productId}',
                'operationId' => 'delete-product-by-id',
                'summary' => 'Delete Product by ID',
            ],
            'updateProductById' => [
                'method' => 'PUT',
                'path' => '/products/{productId}',
                'operationId' => 'update-product-by-id',
                'summary' => 'Update Product by ID',
            ],
            'createProduct' => [
                'method' => 'POST',
                'path' => '/products/',
                'operationId' => 'create-product',
                'summary' => 'Create Product',
            ],
            'listInvoices' => [
                'method' => 'GET',
                'path' => '/products/',
                'operationId' => 'list-invoices',
                'summary' => 'List Products',
            ],
        ];
    }

    /**
     * Bulk Update Products
     *
     * OperationId: bulkUpdate
     * POST /products/bulk-update
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkupdate(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkupdate', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Edit Products and Prices
     *
     * OperationId: bulkEdit
     * POST /products/bulk-update/edit
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkedit(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkedit', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Price for a Product
     *
     * OperationId: create-price-for-product
     * POST /products/{productId}/price
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createPriceForProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createPriceForProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * List Prices for a Product
     *
     * OperationId: list-prices-for-product
     * GET /products/{productId}/price
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function listPricesForProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('listPricesForProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * List Inventory
     *
     * OperationId: get-list-inventory
     * GET /products/inventory
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getListInventory(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getListInventory', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Inventory
     *
     * OperationId: update-inventory
     * POST /products/inventory
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateInventory(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateInventory', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Price by ID for a Product
     *
     * OperationId: get-price-by-id-for-product
     * GET /products/{productId}/price/{priceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getPriceByIdForProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getPriceByIdForProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Price by ID for a Product
     *
     * OperationId: update-price-by-id-for-product
     * PUT /products/{productId}/price/{priceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updatePriceByIdForProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updatePriceByIdForProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Price by ID for a Product
     *
     * OperationId: delete-price-by-id-for-product
     * DELETE /products/{productId}/price/{priceId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deletePriceByIdForProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deletePriceByIdForProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Product Store Stats
     *
     * OperationId: get-product-store-stats
     * GET /products/store/{storeId}/stats
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getProductStoreStats(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getProductStoreStats', $pathParams, $query, $body, $headers);
    }

    /**
     * Action to include/exclude the product in store
     *
     * OperationId: update-store-status
     * POST /products/store/{storeId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateStoreStatus(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateStoreStatus', $pathParams, $query, $body, $headers);
    }

    /**
     * Update product display priorities in store
     *
     * OperationId: update-display-priority
     * POST /products/store/{storeId}/priority
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateDisplayPriority(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateDisplayPriority', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Product Collections
     *
     * OperationId: get-product-collection
     * GET /products/collections
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getProductCollection(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getProductCollection', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Product Collection
     *
     * OperationId: create-product-collection
     * POST /products/collections
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createProductCollection(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createProductCollection', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Details about individual product collection
     *
     * OperationId: get-product-collection-id
     * GET /products/collections/{collectionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getProductCollectionId(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getProductCollectionId', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Product Collection
     *
     * OperationId: update-product-collection
     * PUT /products/collections/{collectionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateProductCollection(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateProductCollection', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Product Collection
     *
     * OperationId: delete-product-collection
     * DELETE /products/collections/{collectionId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteProductCollection(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteProductCollection', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Product Reviews
     *
     * OperationId: get-product-reviews
     * GET /products/reviews
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getProductReviews(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getProductReviews', $pathParams, $query, $body, $headers);
    }

    /**
     * Fetch Review Count as per status
     *
     * OperationId: get-reviews-count
     * GET /products/reviews/count
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getReviewsCount(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getReviewsCount', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Product Reviews
     *
     * OperationId: update-product-review
     * PUT /products/reviews/{reviewId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateProductReview(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateProductReview', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Product Review
     *
     * OperationId: delete-product-review
     * DELETE /products/reviews/{reviewId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteProductReview(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteProductReview', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Product Reviews
     *
     * OperationId: bulk-update-product-review
     * POST /products/reviews/bulk-update
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkUpdateProductReview(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkUpdateProductReview', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Product by ID
     *
     * OperationId: get-product-by-id
     * GET /products/{productId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getProductById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getProductById', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Product by ID
     *
     * OperationId: delete-product-by-id
     * DELETE /products/{productId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteProductById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteProductById', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Product by ID
     *
     * OperationId: update-product-by-id
     * PUT /products/{productId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateProductById(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateProductById', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Product
     *
     * OperationId: create-product
     * POST /products/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createProduct(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createProduct', $pathParams, $query, $body, $headers);
    }

    /**
     * List Products
     *
     * OperationId: list-invoices
     * GET /products/
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