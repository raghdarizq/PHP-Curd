<?php
// session_start();//جلسة جديدة أو تستكمل الجلسة الحالية بناء على مُعرف الجلسة المُمرر بواسطة الطلبية GET و POST أو عبر ملفات تعريف الارتباط.
// if(!isset($_SESSION["name"])) {
//     header("location: index.php");
//     //echo $_SESSION["loggedin"];
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <style>
        body {
            direction: rtl;
        }
    </style>
</head>
<body>

    <h1>اضافة مستخدم جديد</h1>
    <span style="font-size: 1rem; font-weight: bold; color: red;">
    <?php
     if (isset($_GET['error'])) echo $_GET['error'];
    ?>
</span>
    <form action="add.php" method="post">
        <label>اسم المستخدم</label>
        <input type="text" name="username">
        <br>
        <br>
        <label>كلمة المرور</label>
        <input type="password" name="pass">
        <br>
        <br>
        <input type="submit" value="اضافة">
    </form>
    

</body>
</html>

