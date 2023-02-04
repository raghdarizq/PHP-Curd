<?php
        include "conn.php";
        // $show_id = $_GET["user_id"];
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
    <h1>Show</h1>
    <div class="container">
    <a href="AddPage.php" class="btn btn-primary">Add New User</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>user_id</th>
        <th>username</th>
        <th>pass</th>
        <th>Processes</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $count = 0;
        $sql = "SELECT user_id, username, pass FROM user";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $count++;
        
        ?>
      <tr>
        <td><?php echo $row["user_id"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["pass"]; ?></td>
        <td>      
            <a href="EditPage.php?user_id=<?php echo $row["user_id"] ?>" class="btn btn-info">Edit</a>
            <a href="delete.php?user_id=<?php echo $row["user_id"] ?>  " onclick="alert('AreYouSure?')" class="btn btn-danger">delete</a>
            <a  href="Card.php?user_id=<?php echo $row["user_id"] ?>" class="btn btn-success">Show</a></td>
      </tr>
      <?php
        }
        ?>
    </tbody>
  </table>
</div>
</body>
<script>
  const AreYouSure=()=>{
    aleart("AreYouSure?")
  }
</script>
</html>