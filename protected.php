<?php 
$conn=new mysqli('localhost','root','','core_php2');
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login/login_form.php');
}else{
    echo $_SESSION['login'];

}


/*
if (!isset($_SESSION['login'])) {
    header('location:login/login_form2.php');
}else{
    echo $_SESSION['login'];

}*/


$sql="SELECT * FROM students";
$result=$conn->query($sql);




  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student list</title>
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Data page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 </head>
 <body>
        <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-primary" role="alert">
        <?php echo $_SESSION['msg']; ?>

        </div>

    <?php } ?>

     

 	<a href="add/input.php">ADD NEW STUDENT</a>
 	<table data-toggle="table">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Name</th>
 			<th>Roll</th>
 			<th>Age</th>
 			<th>Address</th>
 		</tr>
 	</thead>
 	<?php foreach ($result as $res) { ?>
 	<tbody>
 		<tr>
 			<td><?php echo $res['id']  ?> </td>
 			<td><?php echo $res['name']  ?>  </td>
 			<td><?php echo $res['roll']  ?>  </td>
 			<td><?php echo $res['age']  ?>  </td>
 			<td><?php echo $res['address']  ?>  </td>
 			<td>
 				<a href="add/view.php?id=<?php echo $res['id']?>">View</a>
 				<a href="add/edit.php?id=<?php echo $res['id']?> ">Edit</a>
 				<a href="add/delete.php?id=<?php echo $res['id']?> ">Delete</a>
 			</td>
 		</tr>
 	</tbody>
 	<?php  } ?>

 	</table>
 
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
 </body>
 <a href="login/logout.php">Logout</a>
 </html>