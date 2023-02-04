<?php
include "conn.php";
$show_id = $_GET["user_id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Show By Id </h1>
    <?php
        $sql = "SELECT user_id, username, pass FROM user WHERE user_id = $show_id";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
        ?>
    <div class="card" style="width: 18rem; border:solid 2px black">
  <div class="card-body">
    <span><mark><?php echo $row["user_id"]; ?></mark></span>
    <h5 class="card-title"><?php echo $row["username"]; ?></h5>
    <p class="card-text"><?php echo $row["pass"]; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        <?php
        }
        ?>

</body>
</html>