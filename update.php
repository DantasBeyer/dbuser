<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "UPDATE User SET fname=:fname where id=:id ";

$fname = "Barack";
$id= 5;
$stmt = $conn->prepare($sql);
$stmt->bindParam(":fname",$fname);
$stmt->bindParam(":id",$id);
$stmt->execute();



