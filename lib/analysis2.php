<?php

$Gender = trim(filter_var($_POST['gender'], FILTER_SANITIZE_SPECIAL_CHARS));
$Age = trim(filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS));
$Simptoms =
    $Simptom1 = $_POST['question1'] . ',' .
    $Simptom2 = $_POST['question2'] . ',' .
    $Simptom3 = $_POST['question3'] . ',' .
    $Simptom4 = $_POST['question4'] . ',' .
    $Simptom5 = $_POST['question5'] . ',' .
    $Simptom6 = $_POST['question6'] . ',' .
    $Simptom7 = $_POST['question7'] . ',' .
    $Simptom8 = $_POST['question8'] . ',' .
    $Simptom9 = $_POST['question9'] . ',' .
    $Simptom10 = $_POST['question10'] . ',' .
    $Simptom11 = $_POST['question11'] . ',' .
    $Simptom12 = $_POST['question12'] . ',' .
    $Simptom13 = $_POST['question13'] . ',' .
    $Simptom14 = $_POST['question14'];

setcookie('Simptoms', $Simptoms, time() + 1 * 24 * 60 * 60, '/');
//DB
require 'db.php';


$Login1 = $_COOKIE['login'];
$sql = ("UPDATE users SET Simptoms = '" . $Simptoms . "' WHERE Email = '" . $Login1 . "'");

$query = $pdo->prepare($sql);
$query->execute();

header('Location: /result.php');