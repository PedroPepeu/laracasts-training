<?php 
    $session = new \Core\Session('session');
    $config = require base_path('config.php');
    $database = new \Core\Database($config);

    if (!$session->get('user_id')) {
        header('Location: /');
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $content = $_POST['content'];
        $database->createNote([$session->get('user_id'), $content]);
    }

    $username = $database->getUserName([$session->get('user_id')]);

    require base_path('views/home.view.php');
?>