<?php 
require 'db.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('location:http://localhost/core_php2/login/login_form.php');
}



$id=$_GET['id'];

$sql="SELECT * FROM students WHERE id=$id";
$result=$conn->query($sql);




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Single Data view</title>
 	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Data page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 </head>
 

 <body>
    <a href="http://localhost/core_php2/protected.php">Go to Students List</a>

	<?php if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-primary" role="alert">
         <?php echo $_SESSION['msg']; ?>

     </div>


	<?php } ?>

 	<table data-toggle="table">
        <?php foreach ($result as $resu) { ?>
 	<thead>
 	<tr>
 	<th>ID :</th>
 	<td><?php echo $resu['id'] ?></td>
 
 	 </tr>

     <tr>
 	 <th>Name :</th>
 	<td><?php echo $resu['name'] ?></td>
 	</tr>
 	
 	<th>Roll :</th>
 	<td><?php echo $resu['roll'] ?></td>
 	</tr>
 	<th>Age :</th>
 	<td><?php echo $resu['age'] ?></td>
     </tr>
     <tr>	
 	<th>Address :</th>
 	<td><?php echo $resu['address'] ?></td>
 	</th>
 	</tr>
 	 </thead>
 	 <?php } ?>
 	</table>



    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
 </body>
 </html>