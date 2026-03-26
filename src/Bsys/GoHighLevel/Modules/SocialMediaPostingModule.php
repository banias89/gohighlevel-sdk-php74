<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class SocialMediaPostingModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'startGoogleOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/google/start',
                'operationId' => 'start-google-oauth',
                'summary' => 'Starts OAuth For Google Account',
            ],
            'getGoogleLocations' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/google/locations/{accountId}',
                'operationId' => 'get-google-locations',
                'summary' => 'Get google business locations',
            ],
            'setGoogleLocations' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/google/locations/{accountId}',
                'operationId' => 'set-google-locations',
                'summary' => 'Set google business locations',
            ],
            'getPosts' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/posts/list',
                'operationId' => 'get-posts',
                'summary' => 'Get posts',
            ],
            'createPost' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/posts',
                'operationId' => 'create-post',
                'summary' => 'Create post',
            ],
            'getPost' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/posts/{id}',
                'operationId' => 'get-post',
                'summary' => 'Get post',
            ],
            'editPost' => [
                'method' => 'PUT',
                'path' => '/social-media-posting/{locationId}/posts/{id}',
                'operationId' => 'edit-post',
                'summary' => 'Edit post',
            ],
            'deletePost' => [
                'method' => 'DELETE',
                'path' => '/social-media-posting/{locationId}/posts/{id}',
                'operationId' => 'delete-post',
                'summary' => 'Delete Post',
            ],
            'bulkDeleteSocialPlannerPosts' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/posts/bulk-delete',
                'operationId' => 'bulk-delete-social-planner-posts',
                'summary' => 'Bulk Delete Social Planner Posts',
            ],
            'getAccount' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/accounts',
                'operationId' => 'get-account',
                'summary' => 'Get Accounts',
            ],
            'deleteAccount' => [
                'method' => 'DELETE',
                'path' => '/social-media-posting/{locationId}/accounts/{id}',
                'operationId' => 'delete-account',
                'summary' => 'Delete Account',
            ],
            'startFacebookOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/facebook/start',
                'operationId' => 'start-facebook-oauth',
                'summary' => 'Starts OAuth For Facebook Account',
            ],
            'getFacebookPageGroup' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}',
                'operationId' => 'get-facebook-page-group',
                'summary' => 'Get facebook pages',
            ],
            'attachFacebookPageGroup' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}',
                'operationId' => 'attach-facebook-page-group',
                'summary' => 'Attach facebook pages',
            ],
            'startInstagramOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/instagram/start',
                'operationId' => 'start-instagram-oauth',
                'summary' => 'Starts OAuth For Instagram Account',
            ],
            'getInstagramPageGroup' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}',
                'operationId' => 'get-instagram-page-group',
                'summary' => 'Get Instagram Professional Accounts',
            ],
            'attachInstagramPageGroup' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}',
                'operationId' => 'attach-instagram-page-group',
                'summary' => 'Attach Instagram Professional Accounts',
            ],
            'startLinkedinOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/linkedin/start',
                'operationId' => 'start-linkedin-oauth',
                'summary' => 'Starts OAuth For LinkedIn Account',
            ],
            'getLinkedinPageProfile' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}',
                'operationId' => 'get-linkedin-page-profile',
                'summary' => 'Get Linkedin pages and profile',
            ],
            'attachLinkedinPageProfile' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}',
                'operationId' => 'attach-linkedin-page-profile',
                'summary' => 'Attach linkedin pages and profile',
            ],
            'startTwitterOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/twitter/start',
                'operationId' => 'start-twitter-oauth',
                'summary' => 'Starts OAuth For Twitter Account',
            ],
            'getTwitterProfile' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}',
                'operationId' => 'get-twitter-profile',
                'summary' => 'Get Twitter profile',
            ],
            'attachTwitterProfile' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}',
                'operationId' => 'attach-twitter-profile',
                'summary' => 'Attach Twitter profile',
            ],
            'uploadCsv' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/csv',
                'operationId' => 'upload-csv',
                'summary' => 'Upload CSV',
            ],
            'getUploadStatus' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/csv',
                'operationId' => 'get-upload-status',
                'summary' => 'Get Upload Status',
            ],
            'setAccounts' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/set-accounts',
                'operationId' => 'set-accounts',
                'summary' => 'Set Accounts',
            ],
            'getCsvPost' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/csv/{id}',
                'operationId' => 'get-csv-post',
                'summary' => 'Get CSV Post',
            ],
            'startCsvFinalize' => [
                'method' => 'PATCH',
                'path' => '/social-media-posting/{locationId}/csv/{id}',
                'operationId' => 'start-csv-finalize',
                'summary' => 'Start CSV Finalize',
            ],
            'deleteCsv' => [
                'method' => 'DELETE',
                'path' => '/social-media-posting/{locationId}/csv/{id}',
                'operationId' => 'delete-csv',
                'summary' => 'Delete CSV',
            ],
            'deleteCsvPost' => [
                'method' => 'DELETE',
                'path' => '/social-media-posting/{locationId}/csv/{csvId}/post/{postId}',
                'operationId' => 'delete-csv-post',
                'summary' => 'Delete CSV Post',
            ],
            'startTiktokOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/tiktok/start',
                'operationId' => 'start-tiktok-oauth',
                'summary' => 'Starts OAuth For Tiktok Account',
            ],
            'getTiktokProfile' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}',
                'operationId' => 'get-tiktok-profile',
                'summary' => 'Get Tiktok profile',
            ],
            'attachTiktokProfile' => [
                'method' => 'POST',
                'path' => '/social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}',
                'operationId' => 'attach-tiktok-profile',
                'summary' => 'Attach Tiktok profile',
            ],
            'startTiktokBusinessOauth' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/tiktok-business/start',
                'operationId' => 'start-tiktok-business-oauth',
                'summary' => 'Starts OAuth For Tiktok Business Account',
            ],
            'getTiktokBusinessProfile' => [
                'method' => 'GET',
                'path' => '/social-media-posting/oauth/{locationId}/tiktok-business/accounts/{accountId}',
                'operationId' => 'get-tiktok-business-profile',
                'summary' => 'Get Tiktok Business profile',
            ],
            'getCategoriesLocationId' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/categories',
                'operationId' => 'get-categories-location-id',
                'summary' => 'Get categories by location id',
            ],
            'getCategoriesId' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/categories/{id}',
                'operationId' => 'get-categories-id',
                'summary' => 'Get categories by id',
            ],
            'getTagsLocationId' => [
                'method' => 'GET',
                'path' => '/social-media-posting/{locationId}/tags',
                'operationId' => 'get-tags-location-id',
                'summary' => 'Get tags by location id',
            ],
            'getTagsByIds' => [
                'method' => 'POST',
                'path' => '/social-media-posting/{locationId}/tags/details',
                'operationId' => 'get-tags-by-ids',
                'summary' => 'Get tags by ids',
            ],
            'getSocialMediaStatistics' => [
                'method' => 'POST',
                'path' => '/social-media-posting/statistics',
                'operationId' => 'get-social-media-statistics',
                'summary' => 'Get Social Media Statistics',
            ],
        ];
    }

    /**
     * Starts OAuth For Google Account
     *
     * OperationId: start-google-oauth
     * GET /social-media-posting/oauth/google/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startGoogleOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startGoogleOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get google business locations
     *
     * OperationId: get-google-locations
     * GET /social-media-posting/oauth/{locationId}/google/locations/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getGoogleLocations(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getGoogleLocations', $pathParams, $query, $body, $headers);
    }

    /**
     * Set google business locations
     *
     * OperationId: set-google-locations
     * POST /social-media-posting/oauth/{locationId}/google/locations/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function setGoogleLocations(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('setGoogleLocations', $pathParams, $query, $body, $headers);
    }

    /**
     * Get posts
     *
     * OperationId: get-posts
     * POST /social-media-posting/{locationId}/posts/list
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getPosts(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getPosts', $pathParams, $query, $body, $headers);
    }

    /**
     * Create post
     *
     * OperationId: create-post
     * POST /social-media-posting/{locationId}/posts
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createPost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Get post
     *
     * OperationId: get-post
     * GET /social-media-posting/{locationId}/posts/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getPost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Edit post
     *
     * OperationId: edit-post
     * PUT /social-media-posting/{locationId}/posts/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function editPost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('editPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Post
     *
     * OperationId: delete-post
     * DELETE /social-media-posting/{locationId}/posts/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deletePost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deletePost', $pathParams, $query, $body, $headers);
    }

    /**
     * Bulk Delete Social Planner Posts
     *
     * OperationId: bulk-delete-social-planner-posts
     * POST /social-media-posting/{locationId}/posts/bulk-delete
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function bulkDeleteSocialPlannerPosts(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('bulkDeleteSocialPlannerPosts', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Accounts
     *
     * OperationId: get-account
     * GET /social-media-posting/{locationId}/accounts
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAccount(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAccount', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete Account
     *
     * OperationId: delete-account
     * DELETE /social-media-posting/{locationId}/accounts/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteAccount(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteAccount', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For Facebook Account
     *
     * OperationId: start-facebook-oauth
     * GET /social-media-posting/oauth/facebook/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startFacebookOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startFacebookOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get facebook pages
     *
     * OperationId: get-facebook-page-group
     * GET /social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getFacebookPageGroup(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getFacebookPageGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Attach facebook pages
     *
     * OperationId: attach-facebook-page-group
     * POST /social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function attachFacebookPageGroup(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('attachFacebookPageGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For Instagram Account
     *
     * OperationId: start-instagram-oauth
     * GET /social-media-posting/oauth/instagram/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startInstagramOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startInstagramOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Instagram Professional Accounts
     *
     * OperationId: get-instagram-page-group
     * GET /social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getInstagramPageGroup(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getInstagramPageGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Attach Instagram Professional Accounts
     *
     * OperationId: attach-instagram-page-group
     * POST /social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function attachInstagramPageGroup(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('attachInstagramPageGroup', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For LinkedIn Account
     *
     * OperationId: start-linkedin-oauth
     * GET /social-media-posting/oauth/linkedin/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startLinkedinOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startLinkedinOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Linkedin pages and profile
     *
     * OperationId: get-linkedin-page-profile
     * GET /social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getLinkedinPageProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getLinkedinPageProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Attach linkedin pages and profile
     *
     * OperationId: attach-linkedin-page-profile
     * POST /social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function attachLinkedinPageProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('attachLinkedinPageProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For Twitter Account
     *
     * OperationId: start-twitter-oauth
     * GET /social-media-posting/oauth/twitter/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startTwitterOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startTwitterOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Twitter profile
     *
     * OperationId: get-twitter-profile
     * GET /social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTwitterProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTwitterProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Attach Twitter profile
     *
     * OperationId: attach-twitter-profile
     * POST /social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function attachTwitterProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('attachTwitterProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Upload CSV
     *
     * OperationId: upload-csv
     * POST /social-media-posting/{locationId}/csv
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function uploadCsv(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('uploadCsv', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Upload Status
     *
     * OperationId: get-upload-status
     * GET /social-media-posting/{locationId}/csv
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getUploadStatus(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getUploadStatus', $pathParams, $query, $body, $headers);
    }

    /**
     * Set Accounts
     *
     * OperationId: set-accounts
     * POST /social-media-posting/{locationId}/set-accounts
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function setAccounts(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('setAccounts', $pathParams, $query, $body, $headers);
    }

    /**
     * Get CSV Post
     *
     * OperationId: get-csv-post
     * GET /social-media-posting/{locationId}/csv/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCsvPost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCsvPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Start CSV Finalize
     *
     * OperationId: start-csv-finalize
     * PATCH /social-media-posting/{locationId}/csv/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startCsvFinalize(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startCsvFinalize', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete CSV
     *
     * OperationId: delete-csv
     * DELETE /social-media-posting/{locationId}/csv/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCsv(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCsv', $pathParams, $query, $body, $headers);
    }

    /**
     * Delete CSV Post
     *
     * OperationId: delete-csv-post
     * DELETE /social-media-posting/{locationId}/csv/{csvId}/post/{postId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function deleteCsvPost(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('deleteCsvPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For Tiktok Account
     *
     * OperationId: start-tiktok-oauth
     * GET /social-media-posting/oauth/tiktok/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startTiktokOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startTiktokOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Tiktok profile
     *
     * OperationId: get-tiktok-profile
     * GET /social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTiktokProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTiktokProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Attach Tiktok profile
     *
     * OperationId: attach-tiktok-profile
     * POST /social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function attachTiktokProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('attachTiktokProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Starts OAuth For Tiktok Business Account
     *
     * OperationId: start-tiktok-business-oauth
     * GET /social-media-posting/oauth/tiktok-business/start
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function startTiktokBusinessOauth(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('startTiktokBusinessOauth', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Tiktok Business profile
     *
     * OperationId: get-tiktok-business-profile
     * GET /social-media-posting/oauth/{locationId}/tiktok-business/accounts/{accountId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTiktokBusinessProfile(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTiktokBusinessProfile', $pathParams, $query, $body, $headers);
    }

    /**
     * Get categories by location id
     *
     * OperationId: get-categories-location-id
     * GET /social-media-posting/{locationId}/categories
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCategoriesLocationId(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCategoriesLocationId', $pathParams, $query, $body, $headers);
    }

    /**
     * Get categories by id
     *
     * OperationId: get-categories-id
     * GET /social-media-posting/{locationId}/categories/{id}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getCategoriesId(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getCategoriesId', $pathParams, $query, $body, $headers);
    }

    /**
     * Get tags by location id
     *
     * OperationId: get-tags-location-id
     * GET /social-media-posting/{locationId}/tags
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTagsLocationId(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTagsLocationId', $pathParams, $query, $body, $headers);
    }

    /**
     * Get tags by ids
     *
     * OperationId: get-tags-by-ids
     * POST /social-media-posting/{locationId}/tags/details
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getTagsByIds(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getTagsByIds', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Social Media Statistics
     *
     * OperationId: get-social-media-statistics
     * POST /social-media-posting/statistics
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSocialMediaStatistics(
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSocialMediaStatistics', $pathParams, $query, $body, $headers);
    }
}