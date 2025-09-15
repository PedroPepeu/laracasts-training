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
                    [
                        "name" => "Do Androids Dream of Electric Sheep?",
                        "author" => "Philip K. Dick",
                        "purchaseUrl" => "https://example.com/androids-dream"
                    ],
                    [
                        "name" => "Project Hail Mary",
                        "author" => "Andy Weir",
                        "purchaseUrl" => "https://example.com/hail-mary"
                    ]
                ];
                foreach ($books as $book): ?>
                    <li>
                        <?= $book['name'] ?> by <?= $book['author'] ?>
                        <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
                    </li>
                <?php endforeach;
            ?>
        </h1>
    </body>
</html>