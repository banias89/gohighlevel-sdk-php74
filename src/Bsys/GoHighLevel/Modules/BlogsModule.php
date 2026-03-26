<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class BlogsModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'checkUrlSlugExists' => [
                'method' => 'GET',
                'path' => '/blogs/posts/url-slug-exists',
                'operationId' => 'check-url-slug-exists',
                'summary' => 'Check url slug',
            ],
            'updateBlogPost' => [
                'method' => 'PUT',
                'path' => '/blogs/posts/{postId}',
                'operationId' => 'update-blog-post',
                'summary' => 'Update Blog Post',
            ],
            'createBlogPost' => [
                'method' => 'POST',
                'path' => '/blogs/posts',
                'operationId' => 'create-blog-post',
                'summary' => 'Create Blog Post',
            ],
            'getAllBlogAuthorsByLocation' => [
                'method' => 'GET',
                'path' => '/blogs/authors',
                'operationId' => 'get-all-blog-authors-by-location',
                'summary' => 'Get all authors',
            ],
            'getAllCategoriesByLocation' => [
                'method' => 'GET',
                'path' => '/blogs/categories',
                'operationId' => 'get-all-categories-by-location',
                'summary' => 'Get all categories',
            ],
            'getBlogPost' => [
                'method' => 'GET',
                'path' => '/blogs/posts/all',
                'operationId' => 'get-blog-post',
                'summary' => 'Get Blog posts by Blog ID',
            ],
            'getBlogs' => [
                'method' => 'GET',
                'path' => '/blogs/site/all',
                'operationId' => 'get-blogs',
                'summary' => 'Get Blogs by Location ID',
            ],
        ];
    }

    /**
     * Check url slug
     *
     * OperationId: check-url-slug-exists
     * GET /blogs/posts/url-slug-exists
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function checkUrlSlugExists(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('checkUrlSlugExists', $pathParams, $query, $body, $headers);
    }

    /**
     * Update Blog Post
     *
     * OperationId: update-blog-post
     * PUT /blogs/posts/{postId}
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function updateBlogPost(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('updateBlogPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Create Blog Post
     *
     * OperationId: create-blog-post
     * POST /blogs/posts
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function createBlogPost(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('createBlogPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all authors
     *
     * OperationId: get-all-blog-authors-by-location
     * GET /blogs/authors
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAllBlogAuthorsByLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAllBlogAuthorsByLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get all categories
     *
     * OperationId: get-all-categories-by-location
     * GET /blogs/categories
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getAllCategoriesByLocation(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getAllCategoriesByLocation', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Blog posts by Blog ID
     *
     * OperationId: get-blog-post
     * GET /blogs/posts/all
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getBlogPost(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getBlogPost', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Blogs by Location ID
     *
     * OperationId: get-blogs
     * GET /blogs/site/all
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getBlogs(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getBlogs', $pathParams, $query, $body, $headers);
    }
}