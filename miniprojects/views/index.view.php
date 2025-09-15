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
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $password = $_POST['password'] ?? '';
            
            if (!empty($name) && !empty($password)) {
                $query = "SELECT * FROM users WHERE name = ? AND password = ?";
                $results = $db->query($query, [$name, $password]);
                
                if (!$results) {
                    echo "<p>User not found. Creating new account...</p>";
                    // create the account and redirect to home.view.php
                    $query = "INSERT INTO users (name, password) VALUES (?, ?)";
                    $useradd = $db->query($query, [$name, $password]);
                } else { echo "<p>User found.</p>"; }
                
                // Redirect to home page after login/registration
                header('Location: /home');
                exit;
            } else {
                echo "<p>Please fill in both name and password.</p>";
            }
        }
        ?>
    </body>
</html>