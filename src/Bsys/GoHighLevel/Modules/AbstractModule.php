<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\CurlHttpClient;
use Bsys\GoHighLevel\Core\Http\HttpResponse;
use InvalidArgumentException;

abstract class AbstractModule
{
    public function __construct(
        protected readonly CurlHttpClient $httpClient
    ) {
    }

    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    abstract protected static function definitions(): array;

    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    public static function endpointMap(): array
    {
        return static::definitions();
    }

    /**
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    protected function sendByKey(
        string $key,
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        $definition = static::definitions()[$key] ?? null;
        if ($definition === null) {
            throw new InvalidArgumentException(sprintf('Unknown endpoint key "%s" in module %s.', $key, static::class));
        }

        return $this->send(
            $definition['method'],
            $definition['path'],
            $pathParams,
            $query,
            $body,
            $headers
        );
    }

    /**
     * @param array<string, scalar> $pathParams
     * @param array<string, scalar|array<int, scalar>> $query
     * @param array<string, mixed>|string|null $body
     * @param array<string, scalar> $headers
     */
    protected function send(
        string $method,
        string $pathTemplate,
        array $pathParams = [],
        array $query = [],
        array|string|null $body = null,
        array $headers = []
    ): HttpResponse {
        $path = $this->interpolatePath($pathTemplate, $pathParams);

        return $this->httpClient->request($method, $path, $query, $body, $headers);
    }

    /**
     * @param array<string, scalar> $pathParams
     */
    private function interpolatePath(string $pathTemplate, array $pathParams): string
    {
        preg_match_all('/\{([^}]+)\}/', $pathTemplate, $matches);
        $requiredParams = $matches[1] ?? [];

        foreach ($requiredParams as $param) {
            if (!array_key_exists($param, $pathParams)) {
                throw new InvalidArgumentException(sprintf('Missing path parameter "%s" for endpoint "%s".', $param, $pathTemplate));
            }

            $value = rawurlencode((string) $pathParams[$param]);
            $pathTemplate = str_replace('{' . $param . '}', $value, $pathTemplate);
        }

        return $pathTemplate;
    }
}
