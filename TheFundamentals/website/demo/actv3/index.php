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
                $name = "John Doe";
                $age = 25;
                $books = [
                    "Do Androids Dream of Electric Sheep?",
                    "The Langoliers",
                    "Project Hail Mary"
                ];
                foreach ($books as $book) { ?>
                    <li><?php echo $book ?></li>
                <?php }
            ?>
            <?= "{$books[2]}" ?>
        </h1>
    </body>
</html>