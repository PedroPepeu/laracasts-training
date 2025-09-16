<?php 
    function base_path(string $path = ''): string
    {
        return rtrim(BASE_PATH, '/\\') . '/' . ltrim($path, '/\\');
    }

    function dd(...$values): void
    {
        echo '<pre>';
        foreach ($values as $value) {
            var_dump($value);
            echo "\n";
        }
        echo '</pre>';
        die();
    }
?>