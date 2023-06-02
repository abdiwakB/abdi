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
  <style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style3 {color: #400040}
-->
  </style>
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
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									//session_start();
																								
																									

//$id=$_POST['select'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select Donor_Id from drreg";
$res=mysql_query($sql) or die("query error".mysql_error());

?>
<form action="addonorupdate.php" method="post">
	
  <p>
  
  <tr><td bordercolor="#993366" bgcolor="#9900CC"><label>&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1"> <span class="style3"> Search Donor Information </span>&nbsp;&nbsp; </span><br>
        <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
  &nbsp;&nbsp; &nbsp;<span class="style1">&nbsp;<span class="style3"> Dononr Id</span></span></label>
      <span class="style1">
      <select name="select">
          <?php
while($row=mysql_fetch_array($res)){

echo "<option value=".$row['Donor_Id'].">".$row['Donor_Id']."</option>";
}
?>
          </select>
      </span>
  
  <p>
  
    <input name="Submit" type="submit" align ="center" class="style1" value="search">
  </p>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
  </fieldset>
</form>
</div>
</div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>