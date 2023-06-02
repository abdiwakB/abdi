<?php
$con = mysqli_connect("localhost","root","","brc");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"brc");



//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'noticehome.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
//include('init.php');
?>
