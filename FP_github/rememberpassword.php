<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title> change password</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
      <script type="text/javascript">
      <!--
	  var image1=new Image()
      image1.src="logo1.jpg"
      var image2=new Image()
      image2.src="logo6.jpg"
      var image3=new Image()
      image3.src="logo7.jpg"      
      </script>
</head>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<script src="validator.js"></script>
 <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
<body>
<div id= "all">
<img src="chh.JPG" name="slide" width="1002" height="638" />
<script>
      
      //variable that will increment through the images
      var step=1
      function slideit(){
      //if browser does not support the image object, exit.
      if (!document.images)
      return
      document.images.slide.src=eval("image"+step+".src")
      if (step<6)
      step++
      else
      step=1
      //call function "slideit()" every 2.5 seconds
      setTimeout("slideit()",3000)
      }
      slideit()
      
      </script>

 <?php
if (!isset($_SESSION)) {
  session_start();
}
?>
  <div id="header">
  	<?php include('openpage.php');?>

	 </div>
	
    
 <div id="main_container">
   
	<div style=" margin-left:170px ;"id="left_content">
 <h2 align="left" >Your password is:</h2>	
		<?php
$uname=$_POST['uname'];
$con=mysqlI_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysqlI_select_db($con,"brc");
$sql = "SELECT `Password` FROM `account` WHERE Username='$uname';";
$res=mysqlI_query($con,$sql) or die("query error".mysqlI_error());
if(!$res)
die("Unable to query:");
	
	echo  "<table border=3> ";
while($row=mysqlI_fetch_row($res)){
 echo  "<tr>";
	for($i=0;$i<count($row);$i++)
	{
   echo  "<td> Your Password .$row[$i]</td> ";
	
		}
		echo  "</tr> ";
	 }
	 echo "</table>";
			 
?>                                                              
	</div>
      </div>
    
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
	 </div> 
  
</body>
</html>
