<?php
$servername = "localhost";
$username = "root";
$password = "";


$dsn = "mysql:dbname=to-do;host=$servername";
$pdo = new PDO($dsn, $username, $password);