<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$fname= 'SELECT ';
$lname= 'Trump';
$email= 'donald@trump.de';

$sql ="INSERT INTO user (fname, lname, email) VALUES (:fname, :lname, :email)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":fname",$fname);
$stmt->bindParam(":lname",$lname);
$stmt->bindParam(":email",$email);

$stmt->execute();

$fname= "Alice";
$lname= "bill";
$email= "alice@bill,de";

$stmt->execute();