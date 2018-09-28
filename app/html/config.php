<?php
// Path Configuration
$config['root'] = dirname(__DIR__);
$config['temp'] = $config['root'] . '/tmp';
$config['public'] = $config['root'] . '/public';

require $config['root'].'/vendor/autoload.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

// -----------------------------------------------------------------------------
// Env Settings
// -----------------------------------------------------------------------------
$container['environment'] = function () {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $_SERVER['REAL_SCRIPT_NAME'] = $scriptName;
    $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
    return new Slim\Http\Environment($_SERVER);
};

// -----------------------------------------------------------------------------
//  Logger settings
// -----------------------------------------------------------------------------
$logDate = new DateTime();
$config['logger'] = [
    'name' => 'app',
    'file' => $config['temp'] . "/\logs\/" . $logDate->format('Y-m-d') .'-app.log',
    'level' => \Monolog\Logger::ERROR,
];

// -----------------------------------------------------------------------------
// DB settings
// -----------------------------------------------------------------------------
$config['db']['host']   = 'localhost';
$config['db']['user']   = 'root';
$config['db']['pass']   = '';
$config['db']['dbname'] = 'project';

// ------------------------------------------------------------------------------
// eloquent DB settings
// -------------------------------------------------------------------------------
$config["eloquentDB"] = [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'project',
            'username' => 'root',
            'password' => '',
            'collation' => 'utf8_general_ci',
            'charset' => 'utf8',
            'prefix' => ''
];

// ------------------------------------------------------------------------------
// View settings
// -------------------------------------------------------------------------------
$config['twig'] = [
    'path' => $config['root'] . '/templates',
    'cache_enabled' => true,
    'cache_path' => $config['temp'] . '/twig-cache',
];

// ------------------------------------------------------------------------------
// Assets
// -------------------------------------------------------------------------------
$config['assets'] = [
    // Public assets cache directory
    'path' => $config['public'] . '\cache',
    // Cache settings
    'cache_enabled' => true,
    'cache_path' => $config['temp'],
    'cache_name' => 'assets-cache',
    // Enable JavaScript and CSS compression
    'minify' => 1,
];

// -----------------------------------------------------------------------------------
// Session
// ------------------------------------------------------------------------------------
$config['session'] = [
        // Session cookie settings
        'name'           => 'slim_session',
        'lifetime'       => 24,
        'path'           => '/',
        'domain'         => null,
        'secure'         => false,
        'httponly'       => true,

        // Set session cookie path, domain and secure automatically
        'cookie_autoset' => true,

        // Path where session files are stored, PHP's default path will be used if set null
        'save_path'      => null,

        // Session cache limiter
        'cache_limiter'  => 'nocache',

        // Extend session lifetime after each user activity
        'autorefresh'    => false,

        // Encrypt session data if string is set
        'encryption_key' => null,

        // Session namespace
        'namespace'      => 'slim_app'
];

return $config;
