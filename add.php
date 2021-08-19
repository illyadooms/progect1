<?php

$task = $_POST['task'];


if ($task == '') {
    echo "<h1>Введіть завдання Шеф!</h1>";
    exit();
}

require_once 'configBD.php';

$servername = "localhost";
$username = "root";
$password = "";

$dsn = "mysql:host=$servername;dbname=to-do";
$pdo = new PDO($dsn, $username, $password);


$sql = "INSERT task (task) VALUES (:task)";

//це прямий метод звертання до БД "на пряму"
//$sql = "INSERT task (task) VALUES ('{$task}')";
//$query = $pdo->exec($sql);


$query = $pdo->prepare($sql); //підготовлюємо запит
$query->execute(['task' => $task]);

$query = null;

// Можна дані вводити у запит через асоціативний массив
//нариклад
//$param = [
//    'n' => $name,
//    'age' => $age,
//    'l' => $login
//];
//$query->execute($param);

header('Location: /');
