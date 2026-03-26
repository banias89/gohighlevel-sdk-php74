<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class CoursesModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'importCourses' => [
                'method' => 'POST',
                'path' => '/courses/courses-exporter/public/import',
                'operationId' => 'import-courses',
                'summary' => 'Import Courses',
            ],
        ];
    }

    /**
     * Import Courses
     *
     * OperationId: import-courses
     * POST /courses/courses-exporter/public/import
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function importCourses(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('importCourses', $pathParams, $query, $body, $headers);
    }
}