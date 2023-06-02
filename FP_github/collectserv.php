

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

                   // <form  name="form" method="post" action="">
                    
                    
                    
                  //  <div style="background-color: #999999">
                          
                                // <fieldset style="width:50%" style="border-color:#008000">
//music
// <legend><b>database</b></legend><br />
//<?php
	        $fname=$_POST['fname'];
			$mname=$_POST['mname'];	
			$lname=$_POST['lname'];
			$sex=$_POST['sex'];
			$pno=$_POST['pno'];
			$wht=$_POST['wht'];
			$bgrp=$_POST['bgrp'];
			$cname=$_POST['cname'];
			$cdate=$_POST['cdate'];	
			include('Db_Cconnection.php');
			
			$save="INSERT INTO cbld(fname,mname,lname,sex,pack_number,amount,blood_group,collectedby,collected_date) VALUES ('$fname','$mname','$lname','$sex','$pno','$wht','$bgrp','$cname','$cdate')";
			
			
			
			
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 echo"Pack number is already exist";
			
			//header("location: upload_vacancy.php");
			}
			else {
			echo " you have successfully collected, Your Id is="; 	
$select="select Reg_id from cbld where  collected_Date='$cdate'";
$result=mysqli_query($con,$select);
if(!$result) die (mysqli_error());
while($row=mysqli_fetch_array($result)) {
echo "$row[Reg_id]";
echo ", dont forget it!!  it uses to to search collected blood.";
}
		
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

</div>
</body>




