<?php 
    $router->get('/', 'controllers/login.php');
    $router->post('/', 'controllers/login.php');
    $router->get('/logon', 'controllers/logon.php');
    $router->get('/home', 'controllers/home.php');

    // dd($router->routes);
?>