<?php
    if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }
    if (empty($_SESSION['user'])) { header('Location: /'); exit; }
    $notepad_owner = is_array($_SESSION['user']) ? $_SESSION['user']['id'] : $_SESSION['user'];
?>
<!DOCTYPE html>
<html class="h-full bg-white">
    <?php 
        require 'partials/Header.php';
    ?>
    <body>
        <h1>Home</h1>
        <form method="POST">
            <textarea name="notepad" placeholder="Type your notes here..." rows="10" cols="50"></textarea>
            <button name="button" type="submit">Submit</button>
        </form>
        <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $notepad = $_POST['notepad'] ?? '';
                $query = "INSERT INTO notepads (notepad_owner, text) VALUES (?, ?)";
                $db->query($query, [$notepad_owner, $notepad]);
            }
        ?>
    </body>
</html>