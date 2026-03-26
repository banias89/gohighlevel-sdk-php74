<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class SurveysModule extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
            'getSurveysSubmissions' => [
                'method' => 'GET',
                'path' => '/surveys/submissions',
                'operationId' => 'get-surveys-submissions',
                'summary' => 'Get Surveys Submissions',
            ],
            'getSurveys' => [
                'method' => 'GET',
                'path' => '/surveys/',
                'operationId' => 'get-surveys',
                'summary' => 'Get Surveys',
            ],
        ];
    }

    /**
     * Get Surveys Submissions
     *
     * OperationId: get-surveys-submissions
     * GET /surveys/submissions
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSurveysSubmissions(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSurveysSubmissions', $pathParams, $query, $body, $headers);
    }

    /**
     * Get Surveys
     *
     * OperationId: get-surveys
     * GET /surveys/
     *
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    public function getSurveys(
        array $pathParams = [],
        array $query = [],
        $body = null,
        array $headers = []
    ): HttpResponse {
        return $this->sendByKey('getSurveys', $pathParams, $query, $body, $headers);
    }
}