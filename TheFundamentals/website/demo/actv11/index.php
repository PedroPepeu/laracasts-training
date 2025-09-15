<?php
    // $variable = ['hello', 'world'];

    // function dd($value)
    // {
    //     echo '<pre>';
    //     var_dump($value);
    //     echo '</pre>';
    //     die();
    // }

    // echo '<pre>';
    // var_dump($variable);
    // echo '</pre>';

    // dd($variable);

    // echo $_SERVER['REQUEST_URI'];
    function isCurrentPage($uri) {
        return $_SERVER['REQUEST_URI'] === $uri;
    }
    require 'view/index.view.php';
?>