<?php

session_start();
 if(!isset($_SESSION['user_id']))
	  {
	header("Location:home.php");
	  }
?>
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
 <head><link rel="stylesheet" type="text/css" href="CSS/cs.css" /></head>
 <head><link rel="stylesheet" type="text/css" href="CSS/cs2.css" /></head>
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
					<?php include('Hospitalpage.php');?>
			</div>
					<div id="main_container">
																				  <div style=" margin-left:170px ;"id="left_content">
																							 <fieldset class="loginField">
																							 <table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
																							 
																							 
																							 <tr><td color="green">You can change your Password</td></tr>
																						     </table>
																							 </fieldset>
																							 <form action="A_AcountSettingServer.php" method="POST">
																							 <fieldset class="loginField">
																							 <table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
																							   <tr><td align='center' colspan='2'><?php if(isset($_GET['length'])) echo " <tr><td align='center' colspan='2'><font color='red'> Password length must be greater than 5</font></br> ";?>
																							   </td></tr>
																							   
																							   <tr><td align='center' colspan='2'><?php if(isset($_GET['emptyy'])) echo " <tr><td align='center' colspan='2'><font color='red'> Both fields are required</font></br> ";?>
																							   </td></tr>
																							   
																							    
																							   <tr><td align='center' colspan='2'><?php if(isset($_GET['no'])) echo " <tr><td align='center' colspan='2'><font color='red'>The two field values must be the same</font></br> ";?>
																							   </td></tr>
																							   
																							   	   <tr><td align='center' colspan='2'><?php if(isset($_GET['yes'])) echo " <tr><td align='center' colspan='2'><font color='green'>You are sucesfully changed</font></br> ";?>
																							   </td></tr>
																							   
																							  <tr><td>New Password</td><td><input type="password" name="pass"/></td></tr>
																								 <tr><td>Retype New password</td><td> <input type="password" name="pass1"/></td></tr>
																								 <tr><td align='center' colspan='2'><input class="submit"type="submit" Value="update"/></tr>
																							 </table>
																							 </fieldset>
																							 </form>
																			 </div>
 
	</div>

	<div id="footer" ><center><font color="white">CopyRight@aflagat general hospital</font></center></div>
 </div>
   </body>
   
</html>
