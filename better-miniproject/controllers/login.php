<?php 
    $session = new \Core\Session('session');
    if ($session->get('user_id')) {
        header('Location: /home');
    }

    if ($session->hasFlash('name')) {
        $name = $session->getFlash('name');
        $session->deleteFlash('name');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $password = $_POST['password'] ?? '';
        
        if (!empty($name) && !empty($password)) {
            if($database->checkUserExists([$name, $password])) {
                $session->set('user_id', $database->getUserId([$name, $password]));
                header('Location: /home');
            } else {
                // use flash to send the name
                $session->flash('name', $name);
                header('Location: /logon');
            }
        } else {
            $errors = [
                'name' => 'Name is required',
                'password' => 'Password is required',
            ];
        }
    }

    require base_path('views/login.view.php');
?>