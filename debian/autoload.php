<?php
// autoload.php for EaseTWB4Widgets

require_once '/usr/share/php/EaseHtml/autoload.php';

// Register the autoloader for the EaseTWB4Witdgets library
spl_autoload_register(function ($class) {
    // Only autoload classes from the Ease\\TWB4\\Widgets namespace
    $prefix = 'Ease\\TWB4\\Widgets\\';
    if (strpos($class, $prefix) === 0) {
        $baseDir = __DIR__ . '/';
        $relativeClass = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});
