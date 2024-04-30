<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql ="INSERT INTO user (fname, lname, email) VALUES ('Donald', 'Trump', 'donald@trump.de')";

$conn->exec($sql);