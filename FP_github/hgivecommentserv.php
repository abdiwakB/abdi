

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    
                                                            <div id="header" ><?php include("Hospitalpage.php");?></div>
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
			$name=$_POST['name'];
			$email=$_POST['email'];
			$comment=$_POST['comment'];			
			include('Db_Cconnection.php');			
			$save="INSERT INTO cmnt(Name,Email,Comment) VALUES ('$name','$email','$comment')";							
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die(mysqli_error());
			}
			else {
			
			echo " you have sucsfully sent";
			}						
			exit();	
							
	
?>	
	
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




