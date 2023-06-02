


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("nursepage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

              
             $uname=$_POST['uname'];
             $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$pickup_hr=$_POST['pickup_hr'];
			$ReMonth=$_POST['ReMonth'];
			
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update client_appointment set First_Name ='$fname',Last_Name ='$lname',Sex='$sex',Teelphone ='$phone',Appointment_Time ='$pickup_hr',
       Appointment_Date ='$ReMonth' where Cilent_Id ='$uname';";
   $res=mysql_query($sql) or die("query error".mysql_error());
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from client_appointment  where Cilent_Id='$uname';";
$res=mysql_query($sql) or die("query error".mysql_error());
echo "successfully deleted";
}
mysql_close($con);
?>