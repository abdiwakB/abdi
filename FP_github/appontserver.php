<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

  
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
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$time=$_POST['time'];
			$adate=$_POST['adate'];
			
			include_once('Db_Cconnection.php');
			
			$save="INSERT INTO client_appointment  (First_Name,Last_Name,Sex,Teelphone,Appointment_Time,Appointment_Date ) VALUES     ('$fname','$lname','$sex','$phone','$time','$adate')";
			
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die(mysqli_error());
			
			//header("location: upload_vacancy.php");
			}
			else {
			
	echo " you have sucsfully make an appointment, Your appointment Id is="; 	
$select="select Client_Id from client_appointment where  Appointment_Date='$adate'";
$result=mysqli_query($con,$select);
if(!$result) die (mysqli_error());
while($row=mysqli_fetch_array($result)) {
echo "$row[Client_Id]";
echo ", dont forget it!!  it uses to view  your appointment information and appointment date.";
}
			}
			exit();
							
	
?>
    
</fieldset>

</div>
</body>
