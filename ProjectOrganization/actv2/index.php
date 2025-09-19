<?php
function view(string $path, array $data = [])
{
    extract($data);
    require basePath("views/{$path}");
}

// spl_autoload_register(function ($class) {
//     dd($class):
// }); to load only the classes that are needed
?>