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
<title>Contact Us</title>
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
	<?php include('AdministratorPage.php');?>
	</div>
	<div id="main_container">

	  <div style=" margin-left:170px ;"id="left_content">
	  
     <table>
	  <tr><td colspan="3"><img src="ph.jpg" width="575" height="224"/> </td>
	  </tr>
	   
	 </table>	
	  	<fieldset class="loginField">
	 <table>
	  <tr><td><b><h2>Contact Us</h2></b></td></tr>
	  <tr><td>Tel: </td>
	  <td> +09136630951</td>
	  </tr>
	  <tr><td>Mob: </td><td> +251920135021</td></tr>
	  <tr><td>Fax: </td><td> +215582221280</td></tr>
	    <tr><td><b><h2>Location</h2></b></td></tr>
		 <tr><td><b>
		 <h2>kebele 14 infront of kiyamed medical college </h2>
		 </b></td></tr>
	 </table>
  	    </fieldset>
   	  </div>
		
	   <!--<div id="right_content" Style="border:none">
	         MAJESTY
	   	 </div> -->  
	</div>
	<div id="footer" ><center><font color="white">CopyRight@aflagat general hospital</font></center></div>
	
</div>
</body>
</html> 