<?php 
    session_start();
    require 'tools/database.php';

    $config = require 'config.php';
    $db = new Database($config);

    $routes = [
        '/' => 'views/index.view.php',
        '/home' => 'views/home.view.php',
    ];

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        http_response_code(404);
        require 'views/404.php';
        exit;
    }
?>