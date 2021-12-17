

<?php 
require 'db.php';


$roll=$_POST['roll'];
$age=$_POST['age'];


$sql="SELECT * FROM students WHERE roll=$roll AND age=$age ";
$result=$conn->query($sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount == 1) {
	session_start();
	$_SESSION['login']="login successfully";
	header('location:http://localhost/core_php2/protected.php');
}else{
	echo "Not login";
}


 ?>