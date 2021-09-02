<?php
session_start();
session_unset();
include("conction.php");

header('location:login.php');



?>