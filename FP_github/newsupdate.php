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
$sql="select * from addnews where Rec_id='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
while($row=mysqli_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="newsdeleteupdate.php" method="post" class="style1">


<label><em><strong><font face="Arial, Helvetica, sans-serif">The Information is</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="hidden" name="paw" value="<?php echo $row['Rec_id'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="title" value="<?php echo $row['Title'];  ?>"/><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Body :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="body" value="<?php echo $row['Body'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="author" value="<?php echo $row['Author'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Posted_date :&nbsp;&nbsp;
<input type="text" name="byear" value="<?php echo $row['Posted_date'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Picture :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="picture" value="<?php echo $row['Picture'];  ?>"/><br>
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