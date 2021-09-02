
<!DOCTYPE html>
<html>
<head>
	<title>User Login
	</title>



	<meta charset="utf-8">
	<meta name="viewport" content="=width=device-width,initial-scale=1.0">
	<title>Project</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--Main Css-->
<link rel="stylesheet" type="text/css" href="design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style>

.loginform{
position: absolute;
top:20%;
left:40%;

}

	
body{
	background: url('img/bg.jpg');
	background-size: cover;
	height: 100vh;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	color: white;
}

	</style>
</head>
<body>





<div class="container-fluid">
<header class="bg-primary ">

		<h1 class=" text-center">The School Management System</h1>
</header>
	<div class="row loginform">
		<div class="col-sm-12">
			<form action="" method="POST" class="">
		<h1>Login user </h1>
		<div class="form-group">
			<label for="username">User name</label>
			<input type="text" name="username" placeholder="Name" class="form-control ">
		</div>

		<div class="form-group" >
			<label for="username ">Password</label>
			<input type="password" name="password" placeholder="password" class="form-control">
		</div>

		<input type="submit" name="submit" value="Login" class="btn btn-success text-center w-100">
	</form>
		</div>
	</div>
	
</div>


<!--jquery-->
<script src="js/jquery-3.5.0.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--font awesome -->
<script src="js/all.js"></script>
<!---main javascript---->
<script src="js/script.js"></script>
</body>
</body>
</html>


<?php
session_start();
include("conction.php");

if(isset($_POST['submit'])){
	$user =   $_POST['username'];
	$ps   =   $_POST['password'];
 
$query = "SELECT * FROM studentsdata Where username='$user' && password='$ps'";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);

	
	if($total==true){
		$_SESSION['user_name']=$user;
		header('location:index.php');
	}
	else{
		echo "<div class='text-center' style='position: absolute; top: 65%;left:40%;text-align:center'>Incorrect Password</div>";
	}


	}
?>

