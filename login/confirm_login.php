<?php 
require 'db.php';


$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT * FROM admin WHERE email='$email' AND password='$password' ";
$result=$conn->query($sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount== 1) {
	session_start();
	$_SESSION['login']="login successfully";
	header('location:http://localhost/core_php2/protected.php');
}else{
	echo "Not login";
}


 ?>