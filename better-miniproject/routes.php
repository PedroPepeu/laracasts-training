<?php 
    $router->get('/', 'controllers/login.php');
    $router->post('/', 'controllers/login.php');

    $router->get('/logon', 'controllers/logon.php');
    $router->post('/logon', 'controllers/logon.php');

    $router->post('/home', 'controllers/home.php');
    $router->get('/home', 'controllers/home.php');

    $router->post('/logoff', 'controllers/logoff.php');

    // dd($router->routes);
?>