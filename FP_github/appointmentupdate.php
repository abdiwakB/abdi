<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
<!--
.style1 {font-size: large}
-->
  </style>
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="1000"src="logo1.jpg"></div>
                                                            <div id="header" ><?php include("nursepage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$uname=$_POST['luname'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select * from client_appointment  where Client_Id ='$uname';";
$res=mysql_query($sql) or die("query error".mysql_error());
if($row=mysql_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="nrfoupdateserver.php" method="post" class="style1">
<label><em><strong><font face="Arial, Helvetica, sans-serif">Information about donation appointment</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="uname" value="<?php echo $row['Cilent_Id'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fname" value="<?php echo $row['First_Name'];  ?>" /><br>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" value="<?php echo $row['Last_Name'];  ?>" /><br>
<br />

&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sex" value="<?php echo $row['Sex'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="phone" value="<?php echo $row['Teelphone'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppointmentTime:
<input type="text" name="pickup_hr" value="<?php echo $row['Appointment_Time'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppoinmentDate:&nbsp;&nbsp;
<input type="text" name="ReMonth" value="<?php echo $row['Appointment_Date'];?>" /><br>
<br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Update upointment" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="cancel apointment" />
</span>



</fieldset >	
</form>
</table>
                                                             <span class="loginVerticalPanel style1">
                                                             <?php
}
else{
echo"<fieldset>please Make Apponitment to view your information</fieldset>";
}
?>
                                                             </span><span class="loginVerticalPanel">  
															 </span>
															 </div></div>
															 <div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div></div>
</body>
</html>