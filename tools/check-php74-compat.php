<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$paths = [
    $root . '/src',
    $root . '/examples',
    $root . '/tools',
];

$forbiddenPatterns = [
    'readonly keyword' => '/\breadonly\b/',
    'mixed type-hint' => '/\):\s*mixed|\bmixed\s+\$/',
    'union type-hint' => '/\barray\|string\|null\s+\$|\barray\|string\s+\$/',
    'nullsafe operator' => '/\?->/',
    'match expression' => '/\bmatch\s*\(/',
    'enum keyword' => '/\benum\b/',
    'php8 string helpers' => '/\bstr_contains\s*\(|\bstr_starts_with\s*\(/',
];

$violations = [];

foreach ($paths as $basePath) {
    if (!is_dir($basePath)) {
        continue;
    }

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($basePath));
    foreach ($iterator as $fileInfo) {
        if (!$fileInfo->isFile()) {
            continue;
        }

        $path = $fileInfo->getPathname();
        if (substr($path, -4) !== '.php') {
            continue;
        }

        $contents = file_get_contents($path);
        if ($contents === false) {
            $violations[] = [
                'file' => $path,
                'kind' => 'read error',
                'line' => 0,
                'match' => 'unable to read file',
            ];
            continue;
        }

        $codeOnly = '';
        $tokens = token_get_all($contents);

        foreach ($tokens as $token) {
            if (!is_array($token)) {
                $codeOnly .= $token;
                continue;
            }

            $id = $token[0];
            $text = $token[1];

            if ($id === T_COMMENT || $id === T_DOC_COMMENT || $id === T_CONSTANT_ENCAPSED_STRING || $id === T_ENCAPSED_AND_WHITESPACE) {
                continue;
            }

            $codeOnly .= $text;
        }

        foreach ($forbiddenPatterns as $kind => $pattern) {
            if (!preg_match_all($pattern, $codeOnly, $matches, PREG_OFFSET_CAPTURE)) {
                continue;
            }

            foreach ($matches[0] as $entry) {
                $matched = $entry[0];
                $offset = $entry[1];
                $line = substr_count(substr($codeOnly, 0, $offset), "\n") + 1;

                $violations[] = [
                    'file' => $path,
                    'kind' => $kind,
                    'line' => $line,
                    'match' => $matched,
                ];
            }
        }
    }
}

if ($violations === []) {
    fwrite(STDOUT, "OK: no PHP 8-only syntax patterns found in src/, examples/, tools/.\n");
    exit(0);
}

fwrite(STDERR, "Found potential PHP 7.4 compatibility issues:\n");
foreach ($violations as $violation) {
    $relative = str_replace($root . '/', '', $violation['file']);
    fwrite(
        STDERR,
        sprintf(
            "- %s:%d [%s] %s\n",
            $relative,
            $violation['line'],
            $violation['kind'],
            $violation['match']
        )
    );
}

exit(1);
