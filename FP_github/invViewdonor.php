
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
      <script type="text/javascript">
      <!--
	  var image1=new Image()
      image1.src="logo.png"
      var image2=new Image()
      image2.src="4.png"
      var image3=new Image()
      image3.src="5.jpg"
      var image4=new Image()
      image4.src="6.jpg"
      var image5=new Image()
      image5.src="8.jpg"
      var image6=new Image()
      image6.src="9.jpg"
      var image7=new Image()
      image7.src="ch66.jpg"
      var image8=new Image()
      image8.src="ch11.jpg"
      <!--var image7=new Image()
      <!--image7.src="bd1.jpg"
      //-->
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
<fieldset>
<div id="all">

   <img src="chh.JPG" name="slide" width="1002" height="638" />
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
                                                            <div id="header" ><?php include("Inventorypage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

$con=mysql_connect("localhost","root","root");
if(!$con){
	die("unable to connect :".mysql_error());
}

mysql_select_db("brc",$con);
$sql="select *from drreg";
$result=mysql_query($sql) or die("query error".mysql_error());
if(!$result)
	die("Unable to query:");
	
	echo  "<table border=1> ";
	echo  "<tr><th>donor_Id<th>fname<th>mname<th>lname<th>Username<th>password </th><th>sex<th>Date_Of_Birth 
	<th>zone<th>city<th>mobile<th>email </th><th>woreda<th>kebele<th>bloodgroup</th></tr>";
while($row=mysql_fetch_row($result)){
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
</fieldset>
</form>
</body>
</html>

