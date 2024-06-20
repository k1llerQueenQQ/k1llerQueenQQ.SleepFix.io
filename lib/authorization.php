<?php
$Email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

//Password
$salt = 'dsfs76*$$%dfwesf';
$Password = md5($salt . $Password);

//DB
require 'db.php';

//Auth user
$sql = 'SELECT Id FROM users WHERE Email = ? AND Password = ?';
$query = $pdo->prepare($sql);
$query->execute([$Email, $Password]);

if ($query->rowCount() == 0) {
    echo 'Данные введены не верно';
} else {
    setcookie('login', $Email, time() + 1 * 24 * 60 * 60, '/');
    header('Location: /user.php');
}


