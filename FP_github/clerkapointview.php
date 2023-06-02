<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
      <script type="text/javascript">
      <!--
	  var image1=new Image()
      image1.src="chh.jpg"
      var image2=new Image()
      image2.src="ch66.jpg"
      var image3=new Image()
      image3.src="dddd.jpg"
      var image4=new Image()
      image4.src="ch33.jpg"
      var image5=new Image()
      image5.src="ch88.jpg"
      var image6=new Image()
      image6.src="ch66.jpg"
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
  <style type="text/css">
<!--
.style1 {font-size: large}
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
                                                            <div id="header" ><?php include("NursePage.php");?></div>
															
                                                             <span class="loginVerticalPanel style1">
																									 <div id="main_container">
																									 <div id="left_content">
																								    <?php
																									session_start();
//<?php
$uname=$_POST['select'];
$con=mysql_connect("localhost","root","");
if(!$con){
	die("unable to connect :".mysql_error());
}
mysql_select_db("brc",$con);
$sql="select * from client_appointment where Cilent_Id ='$uname';";
$res=mysql_query($sql) or die("query error".mysql_error());
while($row=mysql_fetch_array($res)){
?>
                                                             <span>
<table border=1 bgcolor=red>
<form action="clerkviewserver.php" method="post" >
<fieldset class="loginField">
<label><em><strong><font face="Arial, Helvetica, sans-serif">INFORMATION ABOUT CLIEANTS APOINTMENT</font></strong></em> </label>

<span class="loginVerticalPanel">
<table cellspaccolspan="2"><?php if(isset($_GET['delete'])) echo "<font color=\"red\"><center> error</center></font>";?></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Client_id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="uname" value="<?php echo $row['Cilent_Id'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fname" value="<?php echo $row['First_Name'];  ?>" /><br>
<br/>

&nbsp;&nbsp;&nbsp;&nbsp;Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="lname" value="<?php echo $row['Last_Name'];  ?>" /><br>
<br />

&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="sex" value="<?php echo $row['Sex'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;Telephone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="phone" value="<?php echo $row['Teelphone'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppointmentTime:&nbsp;
<input type="text" name="pickup_hr" value="<?php echo $row['Appointment_Time'];  ?>" /><br>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;AppoinmentDate:&nbsp;&nbsp;&nbsp;
<input type="text" name="ReMonth" value="<?php echo $row['Appointment_Date'];?>" /><br>
<br />
<input type="submit" name="insaert" value="Update upointment" /><br>

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