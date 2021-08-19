<?php

require_once 'configBD.php';

$id = $_GET['id'];

$dsn = "mysql:host=$servername;dbname=to-do";
$pdo = new PDO($dsn, $username, $password);


$sql = "DELETE FROM task WHERE id = ?";
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: /');