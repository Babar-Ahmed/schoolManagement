<?php
session_start();

echo "WellCome ".$_SESSION['user_name'];
$userprofile=$_SESSION['user_name'];
include("conction.php");
error_reporting(0);


if($userprofile==true){

}
else{
	header('location:login.php');
}

?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="=width=device-width,initial-scale=1.0">
	<title>Project</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--Main Css-->
<link rel="stylesheet" type="text/css" href="design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
		<div class="container">
			<a href="index.html" class="navbar-brand">Students portal</a>
			<div class="collapse navbar-collapse" id="main-nav">

			<ul class="navbar-nav">
				<li class="nav-item"><a href="" class="nav-link active">Dashboard</a></li>
				<li class="nav-item"><a href="form.php" class="nav-link ">Add new Student <i class="fas fa-plus"></i></a></li>
				<li class="nav-item"><a href="" class="nav-link">Delete</a></li>
				<li class="nav-item"><a href="" class="nav-link">Edit</a></li>
				<li class="nav-item"><a href="display.php" class="nav-link ">View Data <i class="fas fa-tv"></i></a></li>
				<li class="nav-item"><a href="" class="nav-link">Users</a></li>

			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown mr-3">
					<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<i  class="fas fa-user"></i> WellCome Babar
					</a>

					<div class="dropdown-menu">
						<a href="" class="dropdown-item"><i class="fas fa-user-circle"></i> Profile</a>
						<a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a>
					</div>
				</li>
				<li class="nav-item">
				<a href="logout.php" class="nav-link"><i class="fas fa-cog"></i> logout</a>
				</li>
			</ul>
		</div>
		</div>
	</nav><!--end top navbar-->



	


<header id="header" class="bg-primary py-2 text-white">
	<div class="container">
		<div class="row">
			 <div class="col-md-6">
			 	<h1><i class="fas fa-cog"></i> Dashboard</h1>
			 </div>
		</div>
	</div>
</header>

<section id="action" class="py-4 mb-4 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#addstudent">					<i class="fas fa-plus"></i> Add Student
				</a>
				
			</div>
			<div class="col-md-3">
				<a href="" class="btn btn-info btn-block" data-toggle="modal" data-target="#showstudent">
					<i class="fas fa-plus"></i> Show Students
				</a>
				
			</div>
			<div class="col-md-3">
				<a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#">
					<i class="fas fa-plus"></i> Edit Students data
				</a>
				
			</div>

			<div class="col-md-3">
				<a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#showstudent">
					<i class="fas fa-plus"></i> Delete Data
				</a>
				
			</div>
		</div>
	</div>
	
</section>
<div class="container">
<div class="row  py-4 mb-4 bg-light">
		<div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Teachers</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i> 6
              </h4>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
           </div>
           	<div class="col-md-3">
          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Attendance</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i> 4
              </h4>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          </div>
          	<div class="col-md-3">
          <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
              <h3>Today Classes</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 4
              </h4>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          </div>

          <div class="col-md-3">
          <div class="card text-center bg-info text-white mb-3">
            <div class="card-body">
              <h3>Course Material</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> 4
              </h4>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
          </div>
       
	</div>
</div>
<div class="modal fade" id="addstudent"> 
	<div class="modal-dialog modal-lg">
		 <div class="modal-content">
		 	<div class="modal-header bg-primary text-white">
		 		
		 		<h5 class="modal-titel ">Add Students</h5>
		 		<button class="close" data-dismiss="modal">
		 			<span>&times;</span>
		 		</button>
		 	</div>
		 	<div class="modal-body">
		 		 <form action="" method="Get" class="form-group" >
	
		<label><b>Student ID</b> <i class="far fa-id-card"></i></label>
		<input type="text" name="StudentId" placeholder="Student ID" class="form-control  " id="sid">

		<label><b>Student Name</b>  <i class="fas fa-user-check"></i></label>
		<input type="text" name="StudentName" placeholder="Student Name" class="form-control "id="snama">



		<label><strong>Father Name: <i class="fas fa-user-shield"></i></strong></label>
		<input type="text" name="StudentFather" placeholder="Father name" class="form-control">

		<label><b>Age <i class="fas fa-user-clock"></i></b></label>
		<input type="text" name="StudentAge" placeholder="Student Age" class="form-control">

		<label><b>Select Course </b><i class="fas fa-user-graduate"></i></label>
		<select class="form-control  " name="StudentCourse">
			<option></option>
			<option  value="Graphic Design">Graphic Design</option>
			<option  value="Web Development">Web Development</option>
			<option  value="Web Design">Web Design</option>
			<option  value ="Programing Python">Programing in Python</option>
			<option  value="Programming">Programming</option>

		</select>
	
		<input type="submit" name="submit" value="Submit Form" class="btn btn-primary btn-lg w-100 mt-4 mb-5">
	</form>

		 		<div class="modal0-footer">
		 			<button class="btn btn-danger" data-dismiss="modal">Close</button>
		 		</div>
		 	</div>
		 </div>
	</div>
</div><!--end add student modal-->
<!---add student--->
<?php

if($_GET['submit']){


$sid  = $_GET['StudentId'];
$sname = $_GET['StudentName'];
$sfather = $_GET['StudentFather'];
$sage = $_GET['StudentAge'];
$scourse = $_GET['StudentCourse'];

	if($sid!="" && $sname!="" && $sfather!="" && $sage!="" && $scourse!="")
	{


			$query = "INSERT INTO studentsdata VALUES ('$sid','$sname','$sfather','$sage','$scourse')";
			$data=mysqli_query($connection,$query);

		if($data){

						echo "<div class='container'><div class='alert alert-success text-center'>Your Data has been sent</div>";

				}
			else
			{
				
				echo "<div class='container alert alert-danger text-center '>Data Doest sent</div>";
			}


	}
	else{
	     echo "<div class='container alert alert-danger  text-center'>All Feilds are Required</div>";
}
}

?>



<!---display data-->

<?php
include("conction.php");
$query = "SELECT * FROM studentsdata";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);


if($total != 0){

?>

		 		

<div class="container ">

		<div class="container bg-warning p-2">
		<h3 class=" my1 text-center">All Students Data</h3>
	</div>
<table class='table table-hover table-lg table-bordered'>
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

	<tr class='text-center' w-100>
		<td>".$result['StudentId']."</td>
		<td>".$result['StudentName']."</td>
		<td>".$result['StudentFather']."</td>
		<td>".$result['StudentAge']."</td>
		<td>".$result['StudentCourse']."</td>
		
		<td><button class='btn btn-info' data-toggle='modal' data-target='#mymodal'>Details <i class='fas fa-user'></i></button></td>
	<td><a href='edit.php?sid=$result[StudentId] & sn=$result[StudentName] & sf=$result[StudentFather] & sage=$result[StudentAge] & scr=$result[StudentCourse]' class='btn btn-primary'>Edit<i class='fas fa-user-edit'></a></i></td>
	<td><a href='index.php? sid=$result[StudentId]' onclick='return checkdelete()'class='btn btn-danger' >Delete <i class='fas fa-trash'></i></a>
	
	</td>

</tr>";
	}
}
else{

}


?>
</div><!--dispaly modal end--->







 <script>
 
function checkdelete(){
	return confirm("are you sure to dlete this record");
}
 </script>



<!--delete --->
<?php

include("conction.php");
$stid = $_GET['sid'];
$query = "DELETE FROM studentsdata WHERE StudentId ='$stid' ";
$data=mysqli_query($connection,$query);
 if($data)
{
	

	?>
	<meta http-equiv="Refresh" content="; URL=http://localhost/students/index.php" >
	<?php
}
else
{
	echo "<div class='alert aler-danger'>Record not  Deleted</div>";
}

?>













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