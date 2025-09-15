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
                function filter(array $items, callable $callback)
                {
                    $filteredItems = [];
                    foreach ($items as $item) {
                        if ($callback($item))
                        {
                            $filteredItems[] = $item;
                        }
                    }
                    return $filteredItems;
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
                
                $filteredBooks = filter($books, function ($book) { return $book['releaseYear'] >= 2000; });
                foreach ($filteredBooks as $book): ?>
                    <li>
                        <?= $book['name'] ?> by <?= $book['author'] ?>
                        <a href="<?= $book['purchaseUrl'] ?>">Buy here</a>
                    </li>
                <?php endforeach;
                /*
                    PHP provides this array filtering as build-in function
                    $filteredBooks = array_filter($books, function($book) { return $book['aurhot'] === 'Andy Weir'; });

                    The function (build_in) does exactly the same as the filter command I created here
                */
            ?>
        </h1>
    </body>
</html>