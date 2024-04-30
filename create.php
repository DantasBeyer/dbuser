<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "phpuser";
//
//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//$fname= 'SELECT ';
//$lname= 'Trump';
//$email= 'donald@trump.de';
//
//$sql ="INSERT INTO user (fname, lname, email) VALUES (:fname, :lname, :email)";
//
//$stmt = $conn->prepare($sql);
//$stmt->bindParam(":fname",$fname);
//$stmt->bindParam(":lname",$lname);
//$stmt->bindParam(":email",$email);
//
//$stmt->execute();
//
//$fname= "Alice";
//$lname= "bill";
//$email= "alice@bill,de";
//
//$stmt->execute();

?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


<form method='post' action='create.php'>
    <div class="form-floating  mb-3">
        <input type="text" class="form-control" id="fname" placeholder="Vorname">
        <label for="fname">Vorname</label>
    </div>
    <div class="form-floating  mb-3">
        <input type="text" class="form-control" id="lname" placeholder="Nachname">
        <label for="lname">Nachname</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <input type='button' value='Save' class="btn btn-dark">
</form>
</body>
</html>
