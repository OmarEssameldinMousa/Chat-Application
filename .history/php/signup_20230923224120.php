<?php
$user_id = 0;
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// $image = mysqli_real_escape_string($conn, $_POST['image']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) { // if all data is readey for the usage
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // checking if the email is valid or not
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE  email = '{$email}'");
        // check if the email already exist or not!
        if (mysqli_num_rows($sql) > 0) {
            echo "this $email already exist!";
        } else {
            // checking whether the file image uploaded or not
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name']; // tmeporary name is used to save/move file in our folder


                // explode the image
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ['png', 'jpeg', 'jpg'];
                if (in_array($img_ext, $extensions) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "../images/" . $new_img_name)) {
                        $status = "Active now";
                        $random_id  = rand(time(), 10000000);

                        // inserting the data into inside the adata base
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname,lname,email,password,img,status)
                                                VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo 'success';
                            }
                        }
                    }
                } else {
                    echo "Please select an Image file - jpeg, jpg, png!";
                }
            } else {
                echo "please select an image file!";
            }
        }
    } else {
        echo "$email is not a valid email";
    }
} else {
    echo "All inputs field area required";
}
