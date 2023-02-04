<?php
include "conn.php";
$username = $_POST["username"];
$pass = $_POST["pass"];
$sql = "INSERT INTO user (username, pass) VALUES ('$username',  '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: Show.php");
} else {
    $msg_err = "Error: " . $conn->error;
    header("Location: addPage.php?error=" . $msg_err);
}


$conn->close();