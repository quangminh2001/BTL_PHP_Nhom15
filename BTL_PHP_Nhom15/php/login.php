<?php
include 'config.php';

$u = $_POST["username"];
$p = $_POST["password"];

$sql = "select * from user where username ='$u' and password = '$p'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    header("Location: ../layouts/index.html");
}else{
    header("Location: ../layouts/login.html");
}
mysqli_close($conn);
?>
