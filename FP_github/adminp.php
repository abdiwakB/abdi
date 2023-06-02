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
<title> </title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<?php
 
 if(!isset($_SESSION['user_id']))
	  {
	header("Location:home.php");
	  }
?>
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
	<?php include('amanagerpage.php');?>
	</div>
	<div id="main_container">
	<div class="inve"> 
	   
	   	   <h2>>
	   	   WELL COME TO ADMINISTRATOR PAGE
	   	   </h2>
    
		       </div>
	   <div  style="margin-top:2cm;"id="left_content">
	    
	   <?php //include('login.php');?>
      </div>
	   
	 
	 
	
	   
	   </div> 
	</div>
	
</div>
</body>
</html>