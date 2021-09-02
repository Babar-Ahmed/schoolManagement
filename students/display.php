<?php
include("conction.php");
$query = "SELECT * FROM studentsdata";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);


if($total != 0){

?>
<div class="container">
<h1 class="text-center bg-light p-5  m-3">Find Student</h1>
</div>
	<!--serach box---->
	<div class="row">
<div class="col-10 mx-auto col-md-6 mt-5">
	<form>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text serach-box" id="serach-icon"><i class="fas fa-search"></i></span>
			</div>
			</label><input type="text" name="" class="form-control" placeholder="Search..." id="search-item">
		</div>
	</form>
	</div>
</div>
<div class="container">

		<div class="container bg-warning p-2">
		<h3 class=" my1 text-center">All Students Data</h3>
	</div>
<table class='table table-hover table-sm table-bordered'>
		<thead class="thead-dark text-center">
			<tr>
			<th>Student ID</th>
		<th>Student Name</th>
		<th>Student Father's</th>
			<th>Student age</th>
			<th>Student Subject</th>
			<th>Details</th>
			<th colspan="2">Operations</th>

		</tr>
			</thead>
<?php
	while ($result=mysqli_fetch_assoc($data)) {
		# code...

		echo "

	<tr class='text-center'>
		<td>".$result['StudentId']."</td>
		<td>".$result['StudentName']."</td>
		<td>".$result['StudentFather']."</td>
		<td>".$result['StudentAge']."</td>
		<td>".$result['StudentCourse']."</td>
		
		<td><button class='btn btn-info' data-toggle='modal' data-target='#mymodal'>Details <i class='fas fa-user'></i></button></td>
	<td><a href='edit.php?sid=$result[StudentId] & sn=$result[StudentName] & sf=$result[StudentFather] & sage=$result[StudentAge] & scr=$result[StudentCourse]' class='btn btn-primary'>Edit<i class='fas fa-user-edit'></a></i></td>
	<td><a href='delete.php? sid=$result[StudentId]' onclick='return checkdelete()'class='btn btn-danger' >Delete <i class='fas fa-trash'></i></a>
	<a href='#' class='btn btn-warning'>Download PDF</a>
	</td>

</tr>";
	}
}
else{

}

?>



<?php

include("conction.php");



?>

	

</table>
<a href="form.php" class="btn btn-secondary"><i class="fas fa-arrow-circle-left"></i> Back </a>
<a href="index.php" class="btn btn-success float-right"><i class="fas fa-arrow-circle-right"></i> More Option </a>

 <script>
 
function checkdelete(){
	return confirm("are you sure to dlete this record");
}

	

	

	


 </script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>



<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--Main Css-->
<link rel="stylesheet" type="text/css" href="design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style>
		.my1{
			color:white;
			
			font-size: 50px;
			
		}
		.container{}
		.bg-dark{color:white;}
		.navbar-light .nav-link{
	color: white!important;
	font-size: 20px;
	display:inline-block;
	width: 200px;
	margin-left: 20px;
	}
	table td{
		font-size: 18px;
		font-weight: bold;
	}
	</style>
</head>
<body>

	








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



