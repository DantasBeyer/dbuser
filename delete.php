<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "DELETE FROM user where id=:id";

$id = $_GET['id'];

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();

?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
</head>
<body>
Geloescht

<a  href='index.php'>Zurueck</a>
</body>
</html>
