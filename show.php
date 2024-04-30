<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM user where id= :id";
$id = $_GET['id'];
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$result = $stmt->fetch(2);
var_dump($result);
