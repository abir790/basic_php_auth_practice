<?php 
require 'db.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('location:http://localhost/core_php2/login/login_form.php');
}else{
    echo $_SESSION['login'];

}


$id=$_GET['id'];


$sql="SELECT * FROM students WHERE id=$id";
$result=$conn->query($sql);

$name=$_POST['name'];
$roll=$_POST['roll'];
$age=$_POST['age'];
$address=$_POST['address'];

$sql="UPDATE students SET name='$name',roll=$roll,age=$age,address='$address' WHERE id=$id";
$update=$conn->query($sql);
if ($update) {
	session_start();
	$_SESSION['msg']="Update Successfully";
	header('location:view.php?id='.$id);


}else{
	echo "Not Updated";
}




 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>


	<br>
	<a href=" ">Go </a>
	<?php foreach ($result as $r) { ?>

	<form action="edit.php?id=<?php echo $r['id']?> " method="POST">
		Name<input type="text" value="<?php echo $r['name']  ?>" name="name">
		<br>
		Roll<input type="text" value="<?php echo $r['roll']  ?> " name="roll">
		<br>
		Age<input type="text" value="<?php echo $r['age']  ?> " name="age">
		<br>
		Address<input type="text" value="<?php echo $r['address']  ?> " name="address">
		<input type="submit" value="submit">


	</form>
<?php } ?>

</body>
</html>