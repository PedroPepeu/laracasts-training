<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <!-- <?php if ($_SERVER['REQUEST_URI'] === '/'): ?>
            class="bg-gray-900 text-white"
        <?php else: ?>
            class="text-gray-300 hover:bg-gray-700 hover:text-white"
        <?php endif; ?> -->

        <!-- <?= ($_SERVER['REQUEST_URI'] === '/')
            ? 'class="bg-gray-900 text-white"'
            : 'class="text-gray-300 hover:bg-gray-700 hover:text-white"' 
        ?> -->

        <?= isCurrentPage('/')
            ? 'class="bg-gray-900 text-white"'
            : 'class="text-gray-300 hover:bg-gray-700 hover:text-white"' 
        ?>
    </body>
</html>
