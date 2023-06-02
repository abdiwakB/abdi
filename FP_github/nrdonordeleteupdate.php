


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    
                                                            <div id="header" ><?php include("nursepage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();



              $id=$_POST['paw'];
			$fname=$_POST['firstname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];			
			$sex=$_POST['sex'];
			$age=$_POST['age'];			
			$dbyear=$_POST['dbyear'];
			$zone=$_POST['zone'];
			$city=$_POST['city'];
			$tel=$_POST['tel'];
			$email=$_POST['email'];
			$woreda=$_POST['woreda'];
			$kbl=$_POST['kbl'];
			$bgrp=$_POST['bgrp'];			
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update drreg set Donor_id='$id',fname='$fname',mname='$mname',lname='$lname',sex='$sex',age='$age',Date='$dbyear',zone='$zone',city='$city',mobile='$tel',email='$email',woreda='$woreda',kebele='$kbl',bloodgroup='$bgrp' where Donor_id ='$id';";
   $res=mysqli_query($con,$sql) or die("query error".mysqli_error());
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from drreg
 where Donor_id ='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
echo "successfully deleted";
}
mysqli_close($con);
?>
</div></div>
