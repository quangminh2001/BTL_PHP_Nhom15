<?php
$servername = "localhost";
$username = "root";
$password = "Minh2001@";
$u = $_POST["username"];
$p = $_POST["password"];
$conn = mysqli_connect($servername,$username,$password,"thegioididong");
if(!$conn){
    die("Lỗi kết nối: ".mysqli_connect_error());
}