<!DOCTYPE html>
<html class="h-full bg-white">
    <?php 
        require 'partials/Header.php';
    ?>
    <body>
        <h1>Home</h1>
        <textarea name="notepad" placeholder="Type your notes here..." rows="10" cols="50"></textarea>
        <button name="button" type="submit">Submit</button>

        <?php 
            $notepads = $db->fetchAll('SELECT * FROM notepads');
            foreach ($notepads as $notepad): ?>
                <li><?= $notepad['content'] ?></li>
            <?php endforeach;
        ?>
    </body>
</html>