<?php
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// $image = mysqli_real_escape_string($conn, $_POST['image']);


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE  email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "this $email already exist!";
        }
    } else {
        echo "$email is not a valid email";
    }
} else {
    echo "All inputs field area required";
}
