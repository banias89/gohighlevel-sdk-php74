<?php

declare(strict_types=1);

const ALLOWED_HTTP_METHODS = ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'];
const RESERVED_METHOD_NAMES = [
    '__construct', '__destruct', '__call', '__callStatic', '__get', '__set', '__isset', '__unset', '__sleep', '__wakeup',
    '__serialize', '__unserialize', '__toString', '__invoke', '__set_state', '__clone', '__debugInfo',
    'list', 'array', 'string', 'int', 'float', 'bool', 'object', 'mixed', 'interface', 'trait',
];

$sourceDir = $argv[1] ?? __DIR__ . '/../tmp/specs';
$modulesDir = $argv[2] ?? __DIR__ . '/../src/Bsys/GoHighLevel/Modules';
$clientPath = $argv[3] ?? __DIR__ . '/../src/Bsys/GoHighLevel/Core/GhlClient.php';

if (!is_dir($sourceDir)) {
    fwrite(STDERR, "Source dir not found: {$sourceDir}\n");
    exit(1);
}

if (!is_dir($modulesDir)) {
    fwrite(STDERR, "Modules dir not found: {$modulesDir}\n");
    exit(1);
}

$files = glob(rtrim($sourceDir, '/') . '/*.json');
if ($files === false) {
    fwrite(STDERR, "Cannot scan source dir: {$sourceDir}\n");
    exit(1);
}

sort($files);

$moduleClassNames = [];
$generatedModuleFiles = [];
$totalEndpoints = 0;

foreach ($files as $file) {
    $slug = basename($file, '.json');
    if ($slug === 'oauth') {
        continue;
    }

    $raw = file_get_contents($file);
    if ($raw === false) {
        fwrite(STDERR, "Cannot read file: {$file}\n");
        exit(1);
    }

    $spec = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
    $paths = $spec['paths'] ?? [];
    if (!is_array($paths) || $paths === []) {
        continue;
    }

    $classBase = slugToPascalCase($slug);
    $className = $classBase . 'Module';
    $moduleClassNames[] = $className;

    $definitions = [];
    $methodNames = [];

    foreach ($paths as $path => $operations) {
        if (!is_array($operations)) {
            continue;
        }

        foreach ($operations as $httpMethod => $operation) {
            if (!in_array(strtolower((string) $httpMethod), ALLOWED_HTTP_METHODS, true)) {
                continue;
            }

            if (!is_array($operation)) {
                $operation = [];
            }

            $operationId = trim((string) ($operation['operationId'] ?? ''));
            $summary = trim((string) ($operation['summary'] ?? ''));

            if ($operationId === '') {
                $operationId = buildFallbackOperationId((string) $httpMethod, (string) $path);
            }

            $candidateMethodName = toCamelCase($operationId);
            if ($candidateMethodName === '') {
                $candidateMethodName = toCamelCase(buildFallbackOperationId((string) $httpMethod, (string) $path));
            }

            if (is_numeric($candidateMethodName[0] ?? '')) {
                $candidateMethodName = 'op' . ucfirst($candidateMethodName);
            }

            if (in_array(strtolower($candidateMethodName), RESERVED_METHOD_NAMES, true)) {
                $candidateMethodName .= 'Endpoint';
            }

            $methodName = uniqueMethodName($candidateMethodName, $methodNames);
            $methodNames[] = $methodName;

            $definitions[$methodName] = [
                'method' => strtoupper((string) $httpMethod),
                'path' => (string) $path,
                'operationId' => $operationId,
                'summary' => $summary,
            ];

            $totalEndpoints++;
        }
    }

    if ($definitions === []) {
        continue;
    }

    $modulePhp = buildModuleClassPhp($className, $definitions);
    $modulePath = rtrim($modulesDir, '/') . '/' . $className . '.php';
    file_put_contents($modulePath, $modulePhp);
    $generatedModuleFiles[] = $modulePath;
}

sort($moduleClassNames);
$clientPhp = buildClientPhp($moduleClassNames);
file_put_contents($clientPath, $clientPhp);

$report = [
    'modules' => count($moduleClassNames),
    'endpoints' => $totalEndpoints,
    'client' => $clientPath,
    'moduleFiles' => $generatedModuleFiles,
];

fwrite(STDOUT, json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL);

function buildModuleClassPhp(string $className, array $definitions): string
{
    $definitionLines = [];
    foreach ($definitions as $methodName => $definition) {
        $definitionLines[] = "            '" . escapeSingle($methodName) . "' => [";
        $definitionLines[] = "                'method' => '" . escapeSingle($definition['method']) . "',";
        $definitionLines[] = "                'path' => '" . escapeSingle($definition['path']) . "',";
        $definitionLines[] = "                'operationId' => '" . escapeSingle($definition['operationId']) . "',";
        $definitionLines[] = "                'summary' => '" . escapeSingle($definition['summary']) . "',";
        $definitionLines[] = '            ],';
    }

    $methodBlocks = [];
    foreach ($definitions as $methodName => $definition) {
        $summary = $definition['summary'] !== '' ? $definition['summary'] : 'No summary provided';
        $methodBlocks[] = "    /**";
        $methodBlocks[] = "     * " . escapeDoc($summary);
        $methodBlocks[] = "     *";
        $methodBlocks[] = "     * OperationId: " . escapeDoc($definition['operationId']);
        $methodBlocks[] = "     * " . $definition['method'] . ' ' . escapeDoc($definition['path']);
        $methodBlocks[] = "     *";
        $methodBlocks[] = "     * @param array<string, scalar> \$pathParams";
        $methodBlocks[] = "     * @param array<string, scalar|array<int, scalar>> \$query";
        $methodBlocks[] = "     * @param array<string, mixed>|string|null \$body";
        $methodBlocks[] = "     * @param array<string, scalar> \$headers";
        $methodBlocks[] = "     */";
        $methodBlocks[] = "    public function {$methodName}(";
        $methodBlocks[] = "        array \$pathParams = [],";
        $methodBlocks[] = "        array \$query = [],";
        $methodBlocks[] = "        \$body = null,";
        $methodBlocks[] = "        array \$headers = []";
        $methodBlocks[] = "    ): HttpResponse {";
        $methodBlocks[] = "        return \$this->sendByKey('" . escapeSingle($methodName) . "', \$pathParams, \$query, \$body, \$headers);";
        $methodBlocks[] = "    }";
        $methodBlocks[] = '';
    }

    $definitionBlock = implode(PHP_EOL, $definitionLines);
    $methodsBlock = rtrim(implode(PHP_EOL, $methodBlocks));

    return <<<PHP
<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Modules;

use Bsys\GoHighLevel\Core\Http\HttpResponse;

final class {$className} extends AbstractModule
{
    /**
     * @return array<string, array{method: string, path: string, operationId: string, summary: string}>
     */
    protected static function definitions(): array
    {
        return [
{$definitionBlock}
        ];
    }

{$methodsBlock}
}
PHP;
}

function buildClientPhp(array $moduleClassNames): string
{
    $useLines = [
        'use Bsys\\GoHighLevel\\Core\\Http\\CurlHttpClient;',
        'use Bsys\\GoHighLevel\\Core\\Http\\HttpResponse;',
        'use Bsys\\GoHighLevel\\Modules\\AbstractModule;',
    ];

    foreach ($moduleClassNames as $moduleClassName) {
        $useLines[] = 'use Bsys\\GoHighLevel\\Modules\\' . $moduleClassName . ';';
    }

    $accessors = [];
    foreach ($moduleClassNames as $moduleClassName) {
        $base = preg_replace('/Module$/', '', $moduleClassName) ?: $moduleClassName;
        $methodName = lcfirst($base);

        $accessors[] = "    public function {$methodName}(): {$moduleClassName}";
        $accessors[] = "    {";
        $accessors[] = "        /** @var {$moduleClassName} \$module */";
        $accessors[] = "        \$module = \$this->module({$moduleClassName}::class);";
        $accessors[] = "";
        $accessors[] = "        return \$module;";
        $accessors[] = "    }";
        $accessors[] = '';
    }

    $useBlock = implode(PHP_EOL, $useLines);
    $accessorBlock = rtrim(implode(PHP_EOL, $accessors));

    return <<<PHP
<?php

declare(strict_types=1);

namespace Bsys\GoHighLevel\Core;

{$useBlock}

final class GhlClient
{
    /**
     * @var array<class-string<AbstractModule>, AbstractModule>
     */
    private array \$moduleCache = [];

    private CurlHttpClient \$httpClient;

    public function __construct(CurlHttpClient \$httpClient)
    {
        \$this->httpClient = \$httpClient;
    }

    public static function withAccessToken(
        string \$accessToken,
        string \$baseUrl = 'https://services.leadconnectorhq.com',
        ?string \$version = '2021-07-28',
        int \$timeoutSeconds = 30,
        int \$connectTimeoutSeconds = 10,
        string \$userAgent = 'Bsys-GoHighLevel-SDK/1.0.0',
        string \$authHeaderName = 'Authorization',
        ?string \$authScheme = 'Bearer'
    ): self {
        return new self(new CurlHttpClient(
            \$accessToken,
            \$baseUrl,
            \$version,
            \$timeoutSeconds,
            \$connectTimeoutSeconds,
            \$userAgent,
            \$authHeaderName,
            \$authScheme
        ));
    }

    public function httpClient(): CurlHttpClient
    {
        return \$this->httpClient;
    }

    /**
     * Low-level raw request when you need an endpoint not yet modeled.
     *
     * @param array<string, scalar|array<int, scalar>> \$query
     * @param array<string, mixed>|string|null \$body
     * @param array<string, scalar> \$headers
     */
    public function request(
        string \$method,
        string \$path,
        array \$query = [],
        \$body = null,
        array \$headers = []
    ): HttpResponse {
        return \$this->httpClient->request(\$method, \$path, \$query, \$body, \$headers);
    }

{$accessorBlock}

    /**
     * @template T of AbstractModule
     * @param class-string<T> \$moduleClass
     * @return T
     */
    private function module(string \$moduleClass): AbstractModule
    {
        if (!isset(\$this->moduleCache[\$moduleClass])) {
            \$this->moduleCache[\$moduleClass] = new \$moduleClass(\$this->httpClient);
        }

        /** @var T \$module */
        \$module = \$this->moduleCache[\$moduleClass];

        return \$module;
    }
}
PHP;
}

function slugToPascalCase(string $slug): string
{
    $parts = preg_split('/[^a-zA-Z0-9]+/', $slug) ?: [];
    $parts = array_filter($parts, static fn (string $part): bool => $part !== '');

    $words = array_map(static function (string $part): string {
        $part = strtolower($part);

        return ucfirst($part);
    }, $parts);

    return implode('', $words);
}

function buildFallbackOperationId(string $httpMethod, string $path): string
{
    $normalizedPath = trim($path, '/');
    if ($normalizedPath === '') {
        $normalizedPath = 'root';
    }

    $normalizedPath = preg_replace('/\{[^}]+\}/', 'by-param', $normalizedPath) ?? $normalizedPath;

    return strtolower($httpMethod) . '-' . str_replace('/', '-', $normalizedPath);
}

function toCamelCase(string $value): string
{
    $clean = preg_replace('/[^a-zA-Z0-9]+/', ' ', $value) ?? '';
    $words = preg_split('/\s+/', trim($clean)) ?: [];

    if ($words === []) {
        return '';
    }

    $camel = strtolower(array_shift($words));
    foreach ($words as $word) {
        $camel .= ucfirst(strtolower($word));
    }

    return $camel;
}

function uniqueMethodName(string $candidate, array $existing): string
{
    if (!in_array($candidate, $existing, true)) {
        return $candidate;
    }

    $counter = 2;
    while (in_array($candidate . $counter, $existing, true)) {
        $counter++;
    }

    return $candidate . $counter;
}

function escapeSingle(string $value): string
{
    return str_replace(['\\', "'"], ['\\\\', "\\'"], $value);
}

function escapeDoc(string $value): string
{
    return str_replace('*/', '* /', $value);
}
