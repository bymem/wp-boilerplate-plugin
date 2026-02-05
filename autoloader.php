<?php
/**
 * Autoloader for the Boilerplate plugin
 *
 * @package    Boilerplate
 */

spl_autoload_register(function ($class) {

    // Project-specific namespace prefix
    $prefix = 'Boilerplate\\';

    // Base directories for class files
    $base_dirs = [
        __DIR__ . '/includes/',
    ];

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return; // not our class
    }

    // Get the relative class name
    $relative_class = substr($class, $len);

    // Replace namespace separators with directory separators, append .php
    $relative_path = str_replace('\\', '/', $relative_class) . '.php';

    // Attempt to load class file from all base dirs
    foreach ($base_dirs as $base_dir) {
        $file = $base_dir . $relative_path;
        if (file_exists($file)) {
            require $file;
            return;
        } else {
            // Log the error if the file does not exist
            error_log("Autoloader: File not found - $file");
        }
    }
});

// Fallback to Composer's autoloader (optional)
$composer_autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
}
