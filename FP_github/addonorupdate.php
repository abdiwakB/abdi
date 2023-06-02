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
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$id=$_POST['select'];
$con=mysql_connect("localhost","root","root");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select * from drreg where Donor_Id='$id';";
$res=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="addonordeleteupdate.php" method="post" class="style1">


<label><em><strong><font face="Arial, Helvetica, sans-serif">The Information  About The Donor is</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="hidden" name="paw" value="<?php echo $row['Donor_id'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fname" value="<?php echo $row['fname'];  ?>"/><br>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:&nbsp;
<input type="text" name="mname" value="<?php echo $row['mname'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Last Name :&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" value="<?php echo $row['lname'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sex" value="<?php echo $row['sex'];?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="age" value="<?php echo $row['Age'];?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="dbyear" value="<?php echo $row['Date'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Zone :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="zone" value="<?php echo $row['zone'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="city" value="<?php echo $row['city'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="tel" value="<?php echo $row['mobile'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="email" value="<?php echo $row['email'];?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Woreda :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="woreda" value="<?php echo $row['woreda'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Kebele :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="kbl" value="<?php echo $row['kebele'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;Bloodgroup:&nbsp;&nbsp;&nbsp;
<input type="text" name="bgrp" value="<?php echo $row['bloodgroup'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Update" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete" value="delete" />
</span>



</fieldset >	
</form>
</table>
                                                             <span class="loginVerticalPanel style1">
                                                             <?php
}
?>
                                                             </span><span class="loginVerticalPanel">
                                                             </span>
															 </div></div>
															 <div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
															 </div>
</body>
</html>