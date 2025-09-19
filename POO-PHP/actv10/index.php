<?php 
    $root = __DIR__ . '/storage';
    $file = 'text.txt';
    $contents = 'Hello World';

    $savePath = $root . '/' . $file;

    if (!is_dir(dirname($savePath))) {
        mkdir(dirname($savePath), 0777, true);
    }

    file_put_contents($savePath, $contents);
?>