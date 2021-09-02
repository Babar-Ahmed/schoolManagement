<?php

include("conction.php");
error_reporting(0)



?>
<!DOCTYPE html>
<html>
<head>
	<title>Udate Data</title>

	<meta charset="utf-8">
		<meta name="viewport" content="=width=device-width,initial-scale=1.0">
	<title>Project</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--Main Css-->
<link rel="stylesheet" type="text/css" href="design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


<style>
		.my1{
			color:white;
			text-shadow: 0 0 10px black;
			
		}
		.container{border-radius: 50px;}
		.bg-info{color:white;border-radius:50px;}
		.navbar-light .nav-link{
	color: white!important;
	font-size: 20px;
	display:inline-block;
	width: 200px;
	margin-left: 20px;
	}
	input[type='text']{
		font-weight: bold;
		font-size: 20px;
	}

	</style>
</head>
<body>

<div class="container">

</div>

					<div class="container">				
				 <form action='' method='Get' class='form-group'>
	
		<label><b>Student ID <i class='far fa-id-card'></i></b></label>
		<input type='text' name='studentid' placeholder='Student ID' class='form-control  w-75' value='<?php echo $_GET["sid"];?>'>

		<label><b>Student Name  <i class='fas fa-user-check'></i></b></label>
		<input type='text' name='studentName' placeholder='Student Name' class='form-control w-75' value='<?php echo $_GET["sn"];?>'>



		<label><strong>Father Name: <i class='fas fa-user-shield'></i></strong></label>
		<input type='text' name='studentfather' placeholder='Father name' class='form-control  w-75' value='<?php echo $_GET["sf"];?>' >

		<label><b>Age <i class='fas fa-user-clock'></i></b></label>
		<input type='text' name='studentAge' placeholder='Student Age' class='form-control  w-75' value='<?php echo $_GET["sage"];?>'>

		<label><b> Course <i class='fas fa-user-graduate'></i></b></label>
		<input type="text" name="studentcourse" value='<?php echo $_GET["scr"];?>' class="form-control w-75">
	
			<input type="submit" class="btn btn-primary w-75 mt-2" name='submit'><br><br>
			<a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-circle-left"></i> Back </a>
			

		</form>
		

		<!--jquery-->
<script src="js/jquery-3.5.0.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--font awesome -->
<script src="js/all.js"></script>
<!---main javascript---->
<script src="js/script.js"></script>
</body>
</html>
<?php


if($_GET['submit']){

$stid = $_GET['studentid'];
$sname = $_GET['studentName'];
$sfahter = $_GET['studentfather'];
$stage = $_GET['studentAge'];
$scourse= $_GET['studentcourse'];

$query="UPDATE studentsdata SET StudentName ='$sname',  StudentFather ='$sfahter', StudentAge ='$stage', StudentCourse='$scourse' WHERE StudentId='$stid'";

$data = mysqli_query($connection, $query);
	if($data)
	{
		echo "<div class='alert alert-success m-2 w-75 text-center'><h3>Data has been UpDated</h3></div>";
	}
	else
	{
		echo "<div class='alert alert-danger m-2 w-75 text-center'><h3>!Data is not UpDate</h3></div>";
	}
}
?>