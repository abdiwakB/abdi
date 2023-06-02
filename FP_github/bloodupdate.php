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

    
                                                            <div id="header" ><?php include("Inventorypage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$id=$_POST['select'];
$con=mysqli_connect("localhost","root","","brc");
if(!$con){
	die("unable to connect :".mysqli_error());
}
mysqli_select_db($con,"brc");
$sql="select * from abld where Reg_id='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
while($row=mysqli_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="blooddeleteupdate.php" method="post" class="style1">


<label><em><strong>The Information  About blood is</strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="hidden" name="paw" value="<?php echo $row['Reg_id'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pack.no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="pno" value="<?php echo $row['pack_number'];  ?>"/><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Blood group :&nbsp;
<input type="text" name="bgrp" value="<?php echo $row['blood_group'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date :&nbsp;&nbsp;
<input type="text" name="date" value="<?php echo $row['date'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="Update" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
															
</body>
</html>