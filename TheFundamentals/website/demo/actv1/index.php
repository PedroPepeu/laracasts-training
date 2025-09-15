<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
    </head>
    <body>
        <h1>
            <?php
                $greeting = "hello";
                echo $greeting . " " . "world";
                echo "$greeting world";
                echo '$greeting world';
                // the one above will not work in reason of simple quotes
            ?>
        </h1>
    </body>
</html>