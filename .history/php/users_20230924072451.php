<?php
session_start();
include_once "config.php";
$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";

if(mysqli_num_rows($sql) == 1){
    $output .= "NO users are available to chat";
}
elseif(mysqli_num_rows($sql) > 1){
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="">
        <div class="content">
            <img src="images/124374760.jpg" alt="">
            <div class="details">
                <span>Omar essam</span>
                <p>This is test message</p>
            </div>
        </div>
        <div class="status-dot"><i class="fas fa-circle"></i></div>
    </a>'
    }
}