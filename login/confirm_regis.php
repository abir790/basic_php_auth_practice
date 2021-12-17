<?php 

require 'db.php';
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$con_pass=$_POST['con_pass'];

$sql1="SELECT * FROM admin WHERE email='$email' " ;
$rr=$conn->query($sql1);
$rowcount=mysqli_num_rows($rr);
if ($rowcount==1) {
	$_SESSION['m']='Email already exist';
	header('location:registration.php');
	
}else if ($password != $con_pass) {
	
	$_SESSION['m']='confirm password not match';
	header('location:registration.php');
}else{
$sql="INSERT INTO admin VALUES(NULL,'$name','$email','$password')"; ///// akhane 3 tai if else er moddhe rakhte hobe ta na hole alada a                                                                        //alada condition sob gulo check kore code nicher dike asbe 
$result=$conn->query($sql);

//$rowcount=mysqli_num_rows($result);

if ($result) {
	//session_start();
	$_SESSION['msg']='Registration Suc';
	header('location:login_form.php');
}else{
	echo "Not Registration";
}



}








 ?>


 






 