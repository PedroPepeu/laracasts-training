<?php 
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'core/functions.php';

    spl_autoload_register(function ($class)
    {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $class = preg_replace('#^Core/#', 'core/', $class);

        require base_path($class . '.php');
    });

    $session = new \Core\Session('session');

    $config = require base_path('config.php');
    $database = new \Core\Database($config);

    $router = new \Core\Router();

    $routes = require base_path('routes.php');
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $method = $_SERVER['REQUEST_METHOD'];
    $router->route($uri, $method);
?>