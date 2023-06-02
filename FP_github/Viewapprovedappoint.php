
<html>
<head>
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
  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>
<form>

<div id="all">

   <!-- <img src="chh.JPG" name="slide" width="1002" height="638" /> -->
	  <script>
      <!--
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
      //-->
      </script>
                                                            <div id="header" ><?php include("openpage.php");?></div>
                                                             <div id="main_container">
																									 <div style=" margin-left:170px ;"id="left_content">
																									 <h2 align=" left" >Approved Appointments</h2>
																									<?php
																									//session_start();

$con=mysqli_connect("localhost","root","","brc");
if(!$con){
	die("unable to connect :".mysqli_error());
}

mysqli_select_db($con,"brc");
$sql="select *from approveappoint";
$result=mysqli_query($con,$sql) or die("query error".mysql_error());
if(!$result)
	die("Unable to query:");
	
	echo  "<table border=1> ";
	echo  "<tr><th>Firstname<th>Middlename<th>Sex<th>Phone</th></tr>";
while($row=mysqli_fetch_row($result)){
echo  "<tr>";
	for($i=0;$i<count($row);$i++)
	{
   echo  "<td>$row[$i]</td> ";
	
		}
		echo  "</tr> ";
	 }
	 echo "</table>";
		
	echo"<a href='link.html'></a>"; 
?>
</form>
</div></div>

</body>
</html>

