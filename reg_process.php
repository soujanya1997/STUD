<?php
include"config.php";
$full_name=$_POST['full_name'];
$user_name=$_POST['u_name'];
$pass=$_POST['reg_password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
$hash =  md5( rand(0,1000) );

$query="INSERT INTO `users`(`username`, `name`, `pass`, `hash`) VALUES ('$user_name','$full_name','$password','$hash')";
$result=mysqli_query($db,$query);
header('Location: http://localhost/stud/index.html');
?>