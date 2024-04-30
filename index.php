<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpuser";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM user ";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(2);

?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class='row'>
    <?php
    foreach ($result as $row) {
//        echo "<div style='margin: 20px; border: red solid ;background-color: #7979ea; display: inline-block' >";
//        echo "<p> Vorname:" . $row['fname'] . "</p>";
//        echo "<p> Nachname:" . $row['lname'] . "</p>";
//        echo "<p> email:" . $row['email'] . "</p>";
//        echo "<a href='delete.php'><button>Delete</button></a>";
//        echo "<a href='create.php'><button>Create</button></a>";
//        echo '</div>';
//
?>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
          <?php
        echo '<h5 class="card-title">'.$row["fname"]." ".$row["lname"].' </h5>';
        echo '<p class="card-text">'.$row["email"].'</p>';
        ?>
        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
<?php
    }
    ?>

</div>
<div>
    <a href="create.php" class="btn btn-primary">Create</a>
</div>

</body>
</html>