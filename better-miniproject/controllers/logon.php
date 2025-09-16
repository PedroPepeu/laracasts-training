<?php 
    $validator = new \Core\Validator();
    
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

        if ($validator->validate([$name, $password, $password_confirmation])) {
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