<!--Main Css-->
<link rel="stylesheet" type="text/css" href="css/design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>



<?php

include("conction.php");



$stid = $_GET['sid'];
$query = "DELETE FROM studentsdata WHERE StudentId ='$stid' ";
$data=mysqli_query($connection,$query);
 if($data)
{
	echo "<div class='alert alert-danger'>Record was delted</div>";
	?>
	<meta http-equiv="Refresh" content="0; URL=http://localhost/students/display.php" >
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