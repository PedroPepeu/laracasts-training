<?php 
    function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    function dd($var)
    {
        echo '<pre>'; var_dump($var); echo '</pre>';
        die();
    }
?>