
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

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
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<style type="text/css">
<script src="validator.js"></script>
 input{
 width:300px;
 height:40px;
 }
</style>
</head>

<body>
<div id= "all">

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

 <?php
if (!isset($_SESSION)) {
  session_start();
}
?>
  <div id="header">
  	<?php include('openpage.php');?>

	 </div>
	
    
 <div id="main_container">
   
	<div id="center_content">	   
		  <h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Password remmember field form </h3>  
 
 <form  method="post" action="rememberpassword.php" onSubmit="MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','tel','','NisNum','EHEECE','','R','CGPA','','NisNum','Disablity','','R','age','','R','paw','','R');return document.MM_returnValue">
<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
<tr>
         <td>User Name</td>
      <td> <input type="text" name="uname"pattern="[A-Za-z]+" required="required" placeholder='username' required x-moz-errormessage="Please Enter comment " title="Username"></td></tr>
  </table>
<table cellspacing="30" align="center">
 <tr><td  align="center"> <input size="100"type="submit" class="submit" value="Remember"/></td>
 <td align="center"> <input size="100"type="reset" class="submit" value="Clear"/></td></tr>
  </table>                 
</form>                                                     
	</div>
     
</body>
</html>
