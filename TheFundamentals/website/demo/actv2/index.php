<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $name = "Dark Matter";
                $read = true;
                if ($read) {
                    $message = "You have read $name";
                } else {
                    $message = "You have not read $name";
                }
                echo $message;
            ?>
        </h1>
    </body>
</html>