<?php 
    if (!$session->get('user_id')) {
        header('Location: /');
    }

    require base_path('views/home.view.php');
?>