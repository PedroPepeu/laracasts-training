<!DOCTYPE html>
<html class="h-full bg-white">
    <head>
        <title>Demo</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="h-full">
        <h1>
            <?php
                $db = new Database();
                $posts = $db->query('SELECT * FROM posts'); // receive the fetch of the data gave by the command 
            ?>
        </h1>
    </body>
</html>
