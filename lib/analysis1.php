<?php

$Gender = trim(filter_var($_POST['gender'], FILTER_SANITIZE_SPECIAL_CHARS));
$Age = trim(filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS));

//DB
require 'db.php';

//SQL

$Login1 = $_COOKIE['login'];
echo $Login1;
$sql = ("UPDATE users SET Gender = '" . $Gender . "', Age = '" . $Age . "'  WHERE Email = '" . $Login1 . "'");

$query = $pdo->prepare($sql);
$query->execute();
header('Location: /analysis2.php');