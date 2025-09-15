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
                $filteredBooks = filter($books, function ($book) { return $book['releaseYear'] >= 2000; });
                foreach ($filteredBooks as $book): ?>
                    <li>
                        <?= $book['name'] ?> by <?= $book['author'] ?>
                        <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
                    </li>
                <?php endforeach;
            ?>
        </h1>
    </body>
</html>
