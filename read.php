<?php
include 'User.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM user ";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(2);

var_dump($result);
