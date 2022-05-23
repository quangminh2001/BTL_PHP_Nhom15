<?php
    include 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $check = false;
    if($username != '' && $password != '' && $fullname != '' && $email != ''){
        $sql = "INSERT INTO `user`(`id_User`, `username`, `password`, `fullname`, `email`) VALUES ('','$username','$password','$fullname','$email')";
        mysqli_query($conn,$sql);
        $check = true;
    }
    if($check == true){
        echo "<h1  style='text-align: center; color: green;'>Registration Success</h1>";
        require_once '../layouts/register.html';
    }else{
        echo "<h1  style='text-align: center; color: red;'>Registration Failed</h1>";
        require_once '../layouts/register.html';
    }
?>