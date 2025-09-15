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
        "purchaseUrl" => "https://example.com/androids-dream",
        "releaseYear" => 1968
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchaseUrl" => "https://example.com/hail-mary",
        "releaseYear" => 2021
    ]
];
require 'index.view.php';
// Put the require below the code, asking for the view to be rendered
// Otherwise, the view will not be able to 'ask' for variables and functions now declared
?>