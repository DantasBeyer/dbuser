<?php
include "User.php";
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "phpuser";
//
//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//$sql = "DELETE FROM user where id=:id";

$user = User::findOneById($_GET['id']) ;
$user->delete($user);
//$stmt = $conn->prepare($sql);
//$stmt->bindParam(':id',$id);
//$stmt->execute();
echo 'deleted';
header( "refresh:5;url=index.php" );
exit();
?>

