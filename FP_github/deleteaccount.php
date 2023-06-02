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

   
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
															
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
$sql="select * from account where Reg_id='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
while($row=mysqli_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="accountdeleteupdate.php" method="post" class="style1">


<label><em><strong><font face="Arial, Helvetica, sans-serif"></font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="hidden" name="paw" value="<?php echo $row['Reg_id'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username:&nbsp;
<input type="text" name="uname" value="<?php echo $row['Username'];  ?>"/><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Password :&nbsp;
<input type="text" name="pass" value="<?php echo $row['Password'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Role :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="role" value="<?php echo $row['Role'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
															 
															 </div>
</body>
</html>