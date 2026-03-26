<?php

declare(strict_types=1);

spl_autoload_register(static function (string $class): void {
    $prefix = 'Bsys\\';
    if (strpos($class, $prefix) !== 0) {
        return;
    }

    $relativeClass = substr($class, strlen($prefix));
    if ($relativeClass === false) {
        return;
    }

    $file = __DIR__ . '/src/Bsys/' . str_replace('\\', '/', $relativeClass) . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});
