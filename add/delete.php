<<?php 
require 'db.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('location:http://localhost/core_php2/login/login_form.php');
}else{
    echo $_SESSION['login'];

}


$id=$_GET['id'];


$sql="DELETE FROM students WHERE id=$id";
$result=$conn->query($sql);
if($result){
	session_start();
	$_SESSION['msg']="Delete Successfully";
	header('location:http://localhost/core_php2/protected.php');
}
 ?>