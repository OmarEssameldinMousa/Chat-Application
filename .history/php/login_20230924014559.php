<?php
session_start();
include_once "config.php";

// Get user input
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)) {
    // Create a prepared statement
    $stmt = mysqli_prepare($conn, "SELECT unique_id FROM users WHERE email = ? AND password = ?");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Bind the result to a variable
    mysqli_stmt_bind_result($stmt, $unique_id);

    // Fetch the result
    mysqli_stmt_fetch($stmt);

    // Check if a row was found
    if ($unique_id) {
        $_SESSION['unique_id'] = $unique_id;
        echo 'success';
    } else {
        echo "Email or Password is incorrect!";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "All input fields are required!";
}

// Close the database connection
mysqli_close($conn);