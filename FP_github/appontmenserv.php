<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="960"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("openpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

                   // <form  name="form" method="post" action="">
                    
                    
                    
                  //  <div style="background-color: #999999">
                          
                                // <fieldset style="width:50%" style="border-color:#008000">
//music
// <legend><b>database</b></legend><br />
//<?php

	         $fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$uname=$_POST['uname'];
			
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$country=$_POST['country'];
			$PMonth=$_POST['PMonth'];
			$Pday=$_POST['Pday'];
			$Pyear=$_POST['Pyear'];
			$age=$_POST['age'];
			$pickup_hr=$_POST['pickup_hr'];
			$pickup_min=$_POST['pickup_min'];
			
			$ReMonth=$_POST['ReMonth'];
			$ReDay=$_POST['ReDay'];
			$ReYear=$_POST['ReYear'];
			
			include_once('Db_Cconnection.php');
			
			$save="INSERT INTO appointment (FirstName,LastName,UniqueName,Sex,Telphone,Email,Country,DateOfBirth,Age,AppointmentTime,AppoinmentDate ) VALUES ('$fname','$lname','$uname','$sex','$phone','$email','$country','$PMonth.$Pday.$Pyear','$age','$pickup_hr.$pickup_min','$ReMonth.$ReDay.ReYear')";
			
			 $result=mysql_query($save);
			 if(!$result)
			 { 
			 die(mysql_error());
			
			//header("location: upload_vacancy.php");
			}
			else {
			
			echo "thank you. seccusfully make apointment";
		
			}
			exit();	
							
	
?>
    
</fieldset>
<table>
<tr><td><a href="file:///D|/IT 4th/idustrial pro/final industrial project  slide presentation/midprogress/dani4/cancelreservation.php">Cancel Reservation</a></td></tr>
</table>
</fieldset>
<fieldset class="loginField">
<table>
<tr><td><a href="file:///D|/IT 4th/idustrial pro/final industrial project  slide presentation/midprogress/dani4/updatereservation.php">Update Reservation</a></td></tr>
</table>
<div id="footer" ><center><font color="white">CopyRight@aflagat general hospital</font></center></div>
</div>
</body>
