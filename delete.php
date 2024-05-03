<?php
include "User.php";
$user = User::findOneById($_GET['id']) ;
$user->delete($user);
echo 'deleted';
header( "refresh:5;url=index.php" );
exit();


