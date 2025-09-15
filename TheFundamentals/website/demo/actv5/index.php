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
                function filterByAuthor($books)
                {
                    $filteredBooks = [];
                    foreach ($books as $book) {
                        if ($book['author'] === 'Andy Weir')
                        {
                            $filteredBooks[] = $book;
                        }
                    }
                    return $filteredBooks;
                }

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
                
                $andyBooks = filterByAuthor($books, 'Andy Weir');
                foreach ($andyBooks as $book): ?>
                    <li>
                        <?= $book['name'] ?> by <?= $book['author'] ?>
                        <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
                    </li>
                <?php endforeach;
            ?>
        </h1>
    </body>
</html>