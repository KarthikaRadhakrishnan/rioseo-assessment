<?php
use Psr\Container\ContainerInterface as Container;
use App\Utility\ErrorHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Slim\Handlers\NotFound;
use Slim\Views\Twig;
use App\Service\User\Auth;
use App\Repository\EmployeeRepository;
use App\Repository\LocationRepository;
use App\Repository\RoleRepository;
use Slim\Flash\Messages;
use Odan\Slim\Session\Session;
use Odan\Slim\Session\Adapter\PhpSessionAdapter;
use Palanik\CorsSlim\CorsSlim;


/* 
** @var \Slim\App 
** $container 
*/
$container = $app->getContainer();

$container['pdo'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

/** @var \PDO $pdo */
$pdo = $container->get('pdo');
$pdo->prepare("SHOW GLOBAL VARIABLES LIKE '%innodb_log%'");

// -----------------------------------------------------------------------------
// Handle PHP Exceptions
// -----------------------------------------------------------------------------
// Handle PHP Exceptions
$container['errorHandler'] = function (Container $container) {
    $displayErrorDetails = $container->get('settings')['displayErrorDetails'];
    $logger = $container->get(LoggerInterface::class);

    return new ErrorHandler((bool)$displayErrorDetails, $logger);
};

$container['phpErrorHandler'] = function (Container $container) {
    return $container->get('errorHandler');
};

$container['notFoundHandler'] = function (Container $container) {
    $logger = $container->get(LoggerInterface::class);
    $logger->error('Error 404: Not found.', ['server' => $_SERVER]);

    return new NotFound();
};

// -----------------------------------------------------------------------------
// Handle Eloquent
// -----------------------------------------------------------------------------
$dbSettings = $container->get('settings')['eloquentDB'];
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($dbSettings);
$capsule->bootEloquent();
$capsule->setAsGlobal();

// -----------------------------------------------------------------------------
// Custom definitions
// -----------------------------------------------------------------------------
$container[LoggerInterface::class] = function ($c) {
    $loggerSettings = $c['settings'];
    $logger = new Logger($loggerSettings['logger']['name']);
    
    $level = $loggerSettings['logger']['level'];
    if (!isset($level)) {
        $level = Logger::ERROR;
    }
    $logFile = $loggerSettings['logger']['file'];
    $handler = new RotatingFileHandler($logFile, 0, $level, true, 0777);
    $logger->pushHandler($handler);
    
    return $logger;
};

// -----------------------------------------------------------------------------
// Register Classes in Container
// -----------------------------------------------------------------------------
$container['Home'] = function ($container) {
    return new App\Controller\HomeController($container);
};

$container['Login'] = function ($container) {
    return new App\Controller\LoginController($container);
};

$container['Admin'] = function ($container) {
    return new App\Controller\Admin\AdminController($container);
};

$container['AdminLogin'] = function ($container) {
    return new App\Controller\Admin\AdminLoginController($container);
};

$container['Employee'] = function ($container) {
    return new App\Controller\Admin\EmployeeController($container);
};

$container['Location'] = function ($container) {
    return new App\Controller\Admin\LocationController($container);
};

$container['Role'] = function ($container) {
    return new App\Controller\Admin\RoleController($container);
};

// ------------------------------------------------------------------------------
// REST API 
// ------------------------------------------------------------------------------
$container['EmployeeApi'] = function ($container) {
    return new App\Controller\Api\Employee($container);
};
$container['LocationApi'] = function ($container) {
    return new App\Controller\Api\Location($container);
};

// -----------------------------------------------------------------------------
// Templates 
// -----------------------------------------------------------------------------
$container[Twig::class] = function (Container $container) {
    $settings = $container->get('settings');
    $viewPath = $settings['twig']['path'];
    $twig = new Twig($viewPath, [
         'debug' => true,
        'cache' => $settings['twig']['cache_enabled'] ? $settings['twig']['cache_path'] : false
    ]);
	
    // Add CSRF token as global template variable
    /*$csrfToken = $container->get(CsrfMiddleware::class)->getToken();
    $twig->getEnvironment()->addGlobal('csrf_token', $csrfToken);*/
	
    
    // Add Slim specific extensions
    $router = $container->get('router');
    $containerEnvironment = $container->get('environment');
    $uri = \Slim\Http\Uri::createFromEnvironment($containerEnvironment);
    $posIndex = strpos( $_SERVER['PHP_SELF'], '/index.php');
    $url = substr( $_SERVER['PHP_SELF'], 0, $posIndex);
    $posAppIndex = strpos( $url, '/html');
    $baseUrl = substr( $url, 0, $posAppIndex);
    $twig->getEnvironment()->addGlobal('baseRootUrl', $baseUrl);
        
        /** @var Twig_Loader_Filesystem $loader */
    $loader = $twig->getLoader();
    if ($loader instanceof Twig_Loader_Filesystem) {
        $loader->addPath($settings['public'], "public");
    }
    
    $twig->addExtension(new \Slim\Views\TwigExtension($router, $baseUrl));
    $twig->addExtension(new \Odan\Twig\TwigAssetsExtension($twig->getEnvironment(), (array)$settings['assets']));
    $twig->addExtension(new \Twig_Extension_Debug());
    return $twig;
};

$container[Session::class] = function ($container) {
    return new \Adbar\Session(
        $container->get('settings')['session']['namespace']
    );
};

$container[Auth::class] = function (Container $container) {
    return new Auth($container->get(Session::class), $container->get('pdo'));
};

$container[Messages::class] = function ($container) {
    return new \Slim\Flash\Messages();
};

$container[EmployeeRepository::class] = function (Container $container) {
    return new EmployeeRepository();
};

$container[LocationRepository::class] = function (Container $container) {
    return new LocationRepository();
};

$container[RoleRepository::class] = function (Container $container) {
    return new RoleRepository();
};

/*$container[CorsSlim::class] = function (Container $container) {
    
    $corsOptions = array(
    "origin" => "http:\\localhost",
    "exposeHeaders" => array("X-My-Custom-Header", "X-Another-Custom-Header"),
    "maxAge" => 1728000,
    "allowCredentials" => True,
    "allowMethods" => array("POST, GET, PUT, DELETE"),
    "allowHeaders" => array("X-PINGOTHER"),
    );
    
    return new \Palanik\CorsSlim\CorsSlim($corsOptions);
};*/

return $container;