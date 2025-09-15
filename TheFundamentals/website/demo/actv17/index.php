<?php 
    // Require 'Functions.php';
    // Require 'Database.php';

    // $config = require ('config.php');
    // $db = new Database($config['database']);

    // To receive data from the link but do not be expose to SQL injection

    $id = $_GET['id']; // To receive the id from the link
    // $query = "SELECT * FROM posts WHERE id = {$id}"; // This is not safe
    $query = "SELECT * FROM posts WHERE id = ?;"; // This is safe

    $posts = $db->query($query, [$id])->fetch();

    dd($posts);
?>