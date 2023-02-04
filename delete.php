<?php


include "conn.php";

$delete_id = $_GET["user_id"];

// sql to delete a record
$sql = "DELETE FROM user WHERE user_id = $delete_id";

if ($conn->query($sql) === TRUE) {
    header("Location: Show.php");
} else {
    header("Location: Show.php");
}

$conn->close();


?>