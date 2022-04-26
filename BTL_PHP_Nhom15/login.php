<?php
include 'config.php';
$sql = "select * from user where username ='$u' and password = '$p'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    header("Location: adminpage.html");
}else{
    header("Location: login.html");
}
mysqli_close($conn);
?>
