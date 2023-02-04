<?php
include "conn.php";
$edit_id = $_GET["user_id"];
$sql = "SELECT user_id, username, pass FROM user WHERE user_id = $edit_id ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <h1>Edit Page</h1>
    <h1>تعديل بيانات مستخدم</h1>
    <span style="font-size: 1rem; font-weight: bold; color: red;"><?php if (isset($_GET['error'])) echo $_GET['error']; ?></span>

    <form action="Edit.php" method="post">
        <label>اسم المستخدم</label>
        <input type="text" name="username" value="<?php echo $row["username"]; ?>">
        <br>
        <br>
        <br>
        <label>كلمة المرور</label>
        <input type="text" name="pass" value="<?php echo $row["pass"]; ?>">
        <input type="hidden" name="user_id" value="<?php echo $row["user_id"]; ?>">
        <br>
        <br>
        <input type="submit" value="تعديل">
    </form>
    

</body>
</html>