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
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$id=$_POST['select'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select * from addnews where Title='$title';";
$res=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="blooddeleteupdate.php" method="post" class="style1">

<fieldset class="loginField">
<label><em><strong><font face="Arial, Helvetica, sans-serif">The Information is</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>

<input type="text" name="title" value="<?php echo $row['Title'];?>" /><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pack.no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="body" value="<?php echo $row['Body'];  ?>"/><br>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;Blood group :&nbsp;
<input type="text" name="author" value="<?php echo $row['author'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Collected date:
<input type="text" name="byear" value="<?php echo $row['Posted_date'];  ?>"/><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Expired date :&nbsp;&nbsp;
<input type="submit" name="update" value="Update" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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