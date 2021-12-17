<?php 
//require 'db/db.php';
require 'db.php';

session_start();

if (!isset($_SESSION['login'])) {
    header('location:http://localhost/core_php2/login/login_form.php');
}else{
    echo $_SESSION['login'];

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>
	<?php if(isset($_SESSION['msg'])) { ?>

		<?php echo $_SESSION['msg']; ?>

	<?php } ?>


	<br>
	<a href="input_action.php">Go to Input_action</a>
	<form action="input_action.php" method="POST">
		Name<input type="text" name="name">
		<br>
		Roll<input type="text" name="roll">
		<br>
		Age<input type="text" name="age">
		<br>
		Address<input type="text" name="address">
		<input type="submit" value="submit">


	</form>

</body>
</html>
