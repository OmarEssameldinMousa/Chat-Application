<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";

if (mysqli_num_rows($sql) == 1) {
    $output .= "NO users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include_once "data.php";
}
echo $output;
