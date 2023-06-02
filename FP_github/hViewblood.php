
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
                                                            <div id="header" ><?php include("Hospitalpage.php");?></div>
                                                             <div id="main_container">
																									 <div style=" margin-left:170px ;"id="left_content">
																									 <h2 align=" center" >Available blood</h2>
																									<?php
																									session_start();

$con=mysqli_connect("localhost","root","","brc");
if(!$con){
	die("unable to connect :".mysqli_error());
}

mysqli_select_db($con,"brc");
$sql="select *from abld";
$result=mysqli_query($con,$sql) or die("query error".mysqli_error());
if(!$result)
	die("Unable to query:");
	
	echo  "<table border=1> ";
	echo  "<tr><th>Reg_Id<th>Pack_number<th>blood_group<th>amount<th>date<th>status</th></tr>";
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
</fieldset>
</form>
</div>  
</div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>
</html>

