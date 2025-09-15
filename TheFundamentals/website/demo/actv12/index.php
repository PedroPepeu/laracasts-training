<?php
    // $variable = ['hello', 'world'];

    function dd($value)
    {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
        die();
    }

    function isCurrentPage($uri) {
        return $_SERVER['REQUEST_URI'] === $uri;
    }

    // echo '<pre>';
    // var_dump($variable);
    // echo '</pre>';

    dd($_SERVER['REQUEST_URI']);
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // Parse url is an build in func that extract the path from the url

    if ($uri === '/') {
        require 'view/index.view.php';
    } elseif ($uri === '/about') {
        require 'view/about.view.php';
    } else { /* 404 Error */
        http_response_code(404);
        require 'view/404.php';
        exit;
    }

    /*
        Instead of using too many ifs statements, do an refactoring
        
        $routes = [
            '/' => 'controllers/index.php',
            '/about' => 'controllers/about.php',
            '/contact' => 'controllers/contact.php',
        ];

        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            http_response_code(404);
            require 'views/404.php';
            exit;
        }
    */

    // require_once 'functions.php';
    // Since I am not using functions, I will not declarate, but this require_once is used to avoid redeclaration
    require 'view/index.view.php';
?>