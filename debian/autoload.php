<?php
// autoload.php for EaseTWB4Witgets

// Register the autoloader for the EaseTWB4 library
spl_autoload_register(function ($class) {
    // Only autoload classes from the Ease namespace
    if (strpos($class, 'Ease\\') === 0) {
        // Adjust baseDir for deployed location
        $baseDir = '/usr/share/php/EaseTWB4Widgets/Ease/';
        $relativeClass = substr($class, strlen('Ease\\'));
        $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});
