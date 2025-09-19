<?php

$db->query(
    'INSERT INTO users (email, password) VALUES (:email, :password)',
    [
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
    ]
);

?>