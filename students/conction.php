<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Babar";

$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection){
	
}
else
{
	die ("connection failed because " .mysqli_connect_error());
}
?>