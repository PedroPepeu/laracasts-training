<?php 
    $session = new \Core\Session('session');
    $config = require base_path('config.php');
    $database = new \Core\Database($config);
    $validator = new \Core\Validator($database);
    
    if ($session->get('user_id')) {
        header('Location: /home');
    }

    if ($session->hasFlash('name')) {
        $name = $session->getFlash('name');
        $session->deleteFlash('name');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];

        if ($validator->validate(['name' => $name, 'password' => $password, 'password_confirmation' => $password_confirmation])) {
            $database->createUser([$name, $password]);
            // send flash message with the username
            $session->flash('name', $name);
            header('Location: /');
        } else {
            $errors = $validator->errors;
        }
    }

    require base_path('views/logon.view.php');
?>