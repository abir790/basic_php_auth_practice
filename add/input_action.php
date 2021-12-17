<a href="input.php">Go to Input</a>


<?php 
require 'db.php';
/*
$conn=new mysqli('localhost','root','','core_php2');
if ($conn) {
	echo "Data Base Connected<br>";
}*/



$name=$_POST['name'];
$roll=$_POST['roll'];
$age=$_POST['age'];
$address=$_POST['address'];

//echo "$name";


$sql="INSERT INTO students VALUES (NULL,'$name',$roll,$age,'$address')";
$result=$conn->query($sql);


if($result){
	session_start();
	$_SESSION['msg']="Input Success";
	header('location:http://localhost/core_php2/protected.php');
}else{
	session_start();
	$_SESSION['msg']="Input Failed";
	header('location:input.php');
}





 ?>