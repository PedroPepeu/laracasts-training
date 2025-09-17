<?php 
    $session = new \Core\Session('session');
    $session->destroy();
    header('Location: /');
?>