

<?php session_start();//include("menu.php");?>
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
<title>view comment</title>
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
    <div id="header">
	<?php include('hospitalpage.php');?>
	</div>
	<div id="main_container">
	<div style=" margin-left:70px ;"id="left_content">
	<h2 align=" center" >Approved requests</h2>
	
<div id="content">
<div id="maincolumn">
 <?php
$con = mysqli_connect("localhost","root","","brc");
if (!$con){
  die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"brc");
$result = mysqli_query($con,"SELECT * FROM aprovedhreq");
//$rslt=mysql_query($sql,$con);
 echo"<table border='1' width=2% cellspacing=10 bgcolor=>
 <tr>
        
		<td ><strong>First Name</strong></td>
        <td ><strong>Middle name</strong></td>
		<td ><strong>Last name</strong></td>
		<td ><strong>Sex</strong></td>
        <td ><strong>Age</strong></td>
         
	    <td ><strong>Hospital name</strong></td>
		<td ><strong>Phone</strong></td>
		<td ><strong>Email</strong></td>
		<td ><strong>R.blood</strong></td>
		<td ><strong>Amount</strong></td>
</tr>";
while($row = mysqli_fetch_array($result)){
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";
echo"<td>".$row[6]."</td>";
echo"<td>".$row[7]."</td>";
echo"<td>".$row[8]."</td>";
echo"<td>".$row[9]."</td>";
?>
<?php

echo"</tr>";
}
echo"</table>";
?>
</div>
</div>

	   	
	   
</div>
	   </div>
<div id="content">
<div id="maincolumn">
</div>
	
</div>
</body>
</html>
		  
	      