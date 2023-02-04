<?php

// session_start();
// if(!isset($_SESSION["name"])) {
//     header("location: index.php");
//     //echo $_SESSION["loggedin"];
//     exit;
// }

include "conn.php";
$username = $_POST["username"];
$pass = $_POST["pass"];
$user_id = $_POST["user_id"];

$sql = "UPDATE user SET username='$username', pass='$pass' WHERE user_id=$user_id";

if ($conn->query($sql) === TRUE) {
    header("Location: Show.php");
} else {
    $msg_err = "Error: " . $conn->error;
    header("Location: addPage.php?error=" . $msg_err);
}

$conn->close();
