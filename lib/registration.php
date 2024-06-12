<?php
$Email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
$Password2 = trim(filter_var($_POST['password2'], FILTER_SANITIZE_SPECIAL_CHARS));


if ($Password ==  $Password2 && isset($_POST['UA']) && $_POST['UA'] == 'Yes') { 


    //Password
    $salt = 'dsfs76*$$%dfwesf';
    $Password = md5($salt.$Password);   

    //DB
    $pdo = new PDO('mysql:host=localhost;dbname=sleepfix1;port=3306','root','root');

    //INSERT
    $sql = 'INSERT INTO users(Email, Password) VALUES(?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$Email,$Password]);

    header('Location: /');
}
else {
    echo'Ошибка данных';
}


