

<?php session_start();//include("menu.php");?>
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
      <script type="text/javascript">
      <!--
	   var image1=new Image()
      image1.src="ch1.jpg"
      var image2=new Image()
      image2.src="ch3.jpg"
      var image3=new Image()
      image3.src="ch3.jpg"
      var image4=new Image()
      image4.src="ch3.jpg"
      var image5=new Image()
      image5.src="ch1.jpg"
      var image6=new Image()
      image6.src="ch1.jpg"
      var image7=new Image()
      image7.src="ch1.jpg"
      var image8=new Image()
      image8.src="ch1.jpg"
      <!--var image7=new Image()
      <!--image7.src="bd1.jpg"
      //-->
      </script>
</head>
<title>customer information</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
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
    <div id="header">
	<?php include('managerpage.php');?>
	</div>
	<h2 align=" center" >Applicant information</h2>
	
<div id="content">
<div id="maincolumn">
 <?php
$con = mysql_connect("localhost","root","root");
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("giza", $con);
$result = mysql_query("SELECT * FROM custreg order by kebele ASC");
//$rslt=mysql_query($sql,$con);
 echo"<table border='1' width=2% cellspacing=10 bgcolor=white>
 <tr>
 <td ><strong>Customer ID</strong></td>
        <td ><strong>First Name</strong></td>
        <td ><strong>Father name</strong></td>
		<td ><strong>Gender</strong></td>
        <td ><strong>Age</strong></td>
	    <td ><strong>Kebele</strong></td>
		<td ><strong>Phone Number</strong></td>
		<td ><strong> House Number</strong></td>
       <td ><strong>Photo</strong></td> 
	   <td ><strong> 1</strong></td>
	   <td ><strong>2</strong></td>
</tr>";
while($row = mysql_fetch_array($result)){
echo"<tr>";
echo"<td>".$row[0]."</td>";
echo"<td>".$row[1]."</td>";
echo"<td>".$row[2]."</td>";
echo"<td>".$row[3]."</td>";
echo"<td>".$row[4]."</td>";
echo"<td>".$row[5]."</td>";
echo"<td>".$row[6]."</td>";
echo"<td>".$row[7]."</td>";

echo"<td>".$row[8]."</td> <td>";?>
<form action="aprov.php" method="POST"><input type="hidden" name="id" value="<?php echo $row[0]; ?>">
<input type="submit" value="aprove" > </td>
<td><a href="delcust.php">Delete</a></td></form>
<?php

echo"</tr>";
}
echo"</table>";
?>
</div>
</div>

	   	
	   <?php //include('login.php');?>
</div>
<div id="content">
<div id="maincolumn">
<div id="main_container">
	<div> <fieldset class="loginField"> 
	   <table>
<table align="center" width="30" height= "5%" border="0" cellspacing="50">

</table>
</table>
		      </fieldset  > </div>


	   <div style="margin-top:2cm;" id="right_content">
	   	  <fieldset class="loginField">
<table>
<tr><td class="submit" width="300">wellcome</td></tr>
  <tr><td> <fieldset class="loginField">
		  <div>
<?php include('anounce4.php');?>
         </div>
	   	 </fieldset >
		 	  <div> 
			    <fieldset class="loginField"> 
	   <table bgcolor="#ECE9D8">
	   <img height="272" width="598"src="ch1.jpg"/>
		   
	    </table>
</fieldset  > </div>
<div> <fieldset class="loginField"> 
	   <table>

	   	   <tr><td><h1>&nbsp;</h1>
	   	   <td></tr>
							<?php
									$t=time();
									//echo($t . "<br />");
									echo(date("D F d Y",$t));
								?>
	    </table>
		      </fieldset  > </div>
</div> 
	</div>
	<div id="footer" ><center><font color="white">CopyRight@2016</font></center></div>
</div>
</body>
</html>
		  
	      <p>&nbsp;</p>
		  </fieldset>
          </form>
		     
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
        </div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content--> 
    
	
</div><!--close main-->


 
  
</body>

</html>
		  
		  
		  
		  
		  
		  
		  
		  