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

    <div id="banner"> <img  height="638" width="960"src="aflg.jpg"></div>
                                                            <div id="header" ><?php include("openpage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$uname=$_POST['uname'];
$con=mysql_connect("localhost","root","root");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select * from appointment where UniqueName='$uname';";
$res=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="cinfoupdateserver.php" method="post" class="style1">

<fieldset class="loginField">
<label><em><strong><font face="Arial, Helvetica, sans-serif">INFORMATION ABOUT CLIEANTS APOINTMENT</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="uname" value="<?php echo $row['UniqueName'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="text" name="fname" value="<?php echo $row['FirstName'];  ?>" />
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" value="<?php echo $row['LastName'];  ?>" />
<br />

&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sex" value="<?php echo $row['Sex'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="phone" value="<?php echo $row['Telphone'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="email" value="<?php echo $row['Email'];?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="country" value="<?php echo $row['Country'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;DateOfBirth :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="PMonth" value="<?php echo $row['DateOfBirth'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="age" value="<?php echo $row['Age'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppointmentTime:&nbsp;
<input type="text" name="pickup_hr" value="<?php echo $row['AppointmentTime'];  ?>" />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppoinmentDate:&nbsp;
<input type="text" name="ReMonth" value="<?php echo $row['AppoinmentDate'];?>" />
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
?>
                                                             </span><span class="loginVerticalPanel">                                                             </span>
</body>
</html>