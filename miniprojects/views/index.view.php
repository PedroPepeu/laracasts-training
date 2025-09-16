<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (!empty($name) && !empty($password)) {
        $query = "SELECT * FROM users WHERE name = ? AND password = ?";
        $results = $db->query($query, [$name, $password]);
        
        if (!$results) {
            // create the account then redirect
            $query = "INSERT INTO users (name, password) VALUES (?, ?)";
            $useradd = $db->query($query, [$name, $password]);
        }
        $_SESSION['user'] = $db->getUserId([$name, $password]);
        header('Location: /home');
        exit;
    } else {
        echo "<p>Please fill in both name and password.</p>";
    }
}
?>

<!DOCTYPE html>
<html class="h-full bg-white">
    <?php 
        require 'partials/Header.php';
    ?>
    <body>
        <form method="POST" action="/">
            <input type="text" name="name" placeholder="Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>