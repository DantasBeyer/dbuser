<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "DELETE FROM user where id=:id";

$id = 1;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();

