

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

   
                                                            <div id="header" ><?php include("InventoryPage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

                   
			$pno=$_POST['pno'];
			$bgrp=$_POST['bgrp'];
			$aneed=$_POST['aneed'];
		    
			$date=date("Y-m-d h:i:sa");
			include('Db_Cconnection.php');
/*$sql1 = "SELECT `amount` FROM `abld` WHERE `blood_group`='$bgrp'";
			$result1=mysql_query($sql1) or die("query error".mysql_error()); 
			while($row1=mysql_fetch_array($result1)){
			$amount=$row1['amount'];
            $check1=$amount+$aneed;*/

			 $save="INSERT INTO abld(pack_number,blood_group,amount,date) VALUES ('$pno','$bgrp','$aneed','$date')";		
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die (mysqli_error($con));}
			 else {
			echo " you have sucsfully added, Your Id is="; 	
$select="select Reg_id from abld where  date='$date'";
$result=mysqli_query($con,$select);
if(!$result) die (mysqli_error());
while($row=mysqli_fetch_array($result)) {
echo "$row[Reg_id]";
}
			 
			
			 }
/*else{
include('Db_Cconnection.php');
$sql2 = "UPDATE `abld` SET `amount`='$check1' WHERE blood_group='$bgrp';";
$res=mysql_query($sql2) or die("query error".mysql_error());
echo "You are ";

			 }*/
 
			exit();	
							
	
?>
    
</fieldset>
</fieldset>
<fieldset class="loginField">
<table>
<tr><td><a href="file:///D|/IT 4th/idustrial pro/final industrial project  slide presentation/midprogress/dani4/updatereservation.php">Update Reservation</a></td></tr>
</table>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>




