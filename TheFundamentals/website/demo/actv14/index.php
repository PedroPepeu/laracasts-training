<?php 
    /*
    PDO (PHP Data Objects) to connect to MySQL 
    DSN -> Data Source Name*/

    $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
    $username = "root";
    $password = "";

    $pdo = new PDO($dsn, $username, $password);

    // Prepare and execute queries
    $stmt = $pdo->prepare('SELECT * FROM posts');
    $stmt->execute();
    // Fetch all results as an associative array;
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /* To display the results (in the view.php) (field title from the posts table)
    foreach ($posts as $post)
    {
        echo "<li>{$post['title']}</li>";
    } 
    */
    
    // require 'index.view.php';
?>