

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
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
			$age=$_POST['age'];			
			$dbyear=$_POST['dbyear'];
			$dbmonth=$_POST['dbmonth'];
			$dbday=$_POST['dbday'];
			$zone=$_POST['zone'];
			$city=$_POST['city'];
			$tel=$_POST['tel'];
			$email=$_POST['email'];
			$woreda=$_POST['woreda'];
			$kbl=$_POST['kbl'];
			$bgrp=$_POST['bgrp'];			
			include('Db_Cconnection.php');
			
			$save="INSERT INTO drreg(fname,mname,lname,sex,Age,Date,zone,city,mobile,email,woreda,kebele,bloodgroup) VALUES ('$fname','$mname','$lname','$sex','$age','$dbday.$dbmonth.$dbyear','$zone','$city','$tel','$email','$woreda','$kbl','$bgrp')";
			
			
			
			
			 $result=mysql_query($save);
			 if(!$result)
			 { 
			 die(mysql_error());
			
			//header("location: upload_vacancy.php");
			}
			else {			
			echo "  successfully Registered"; 	
$select="select Donor_id from drreg where Date='$dbmonth.$dbday.$dbyear'";
$result=mysql_query($select);
if(!$result) die (mysql_error());
while($row=mysql_fetch_array($result)) {
echo "$row[Donor_id]";
echo ", dont forget it!!";
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
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>




