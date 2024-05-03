<?php
include 'User.php';
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "phpuser";
//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$id = $_GET['id'] ?? $_POST["id"];
$user = User::findOneById($id);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    var_dump($_POST);
//    $sql = "UPDATE User SET fname=:fname , lname=:lname, email=:email where id=:id ";\

    $user->setFname($_POST['fname']);
    $user->setLname($_POST['lname']);
    $user->setEmail($_POST['email']);

//    $stmt = $conn->prepare($sql);
//    $stmt->bindParam(":fname",$fname);
//    $stmt->bindParam(":lname",$lname);
//    $stmt->bindParam(":email",$email);
//    $stmt->bindParam(":id",$id);
//    $stmt->execute();
    echo 'update';
    header( "refresh:5;url=index.php" );
    exit();
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {

//    $sql = "SELECT * FROM user where id=:id";
//    $id = $_GET['id'];
//    $stmt = $conn->prepare($sql);
//    $stmt->bindParam(':id', $id);
//    $stmt->execute();
//    $result = $stmt->fetch(2);
//    var_dump($result);


    ?>
    <!doctype html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport'
              content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
              crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <div class='pb-10'>
        <div class='container ml-20 shadow-lg pt-10 p-3 my-5 bg-body-tertiary rounded'>
            <form method='post' action='update.php' class='mb-10 '>
                <div class="form-floating  mb-3 mt-5">
                    <input type="text" class="form-control" id="fname" name='fname' placeholder=""
                           value='<?php echo $user->getFname() ?>'>
                    <label for="fname">Vorname</label>
                </div>
                <div class="form-floating  mb-3">
                    <input type="text" class="form-control" id="lname" name='lname' placeholder="Nachname"
                           value='<?php echo $user->getLname() ?>'>
                    <label for="lname">Nachname</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name='email' placeholder="name@example.com"
                           value='<?php echo $user->getEmail() ?>'>
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3 ml-10">
                    <input type='submit' value='Save' class="btn btn-dark ">
                </div>
                <div>
                    <input class="form-control" type='hidden' id='id' name='id' value='<?php echo $user->getId() ?>'>
                </div>
            </form>
        </div>
    </div>
    </body>
    </html>
    <?php

}
















