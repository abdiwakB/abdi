 
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

<title>Background</title>
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
	<?php include('Inventorypage.php');?>
	</div>
	
	<div id="main_container">

	   <div id="left_content" style="border: none;">
	   	<fieldset class="oginField">
	 <table>
	 <tr><td>
 	 <font color="red"><b>Background of the organization</b></font><br>
	 <p>In Ethiopia blood bank service introduced in 1969 on yikatet12 hospitals. 
Ethiopia blood bank supported by FMOH and CDC Separated from ERCS since 2004.

Blood bank system in Ethiopia has one main bank in Addis Ababa and 26 sub branch around all Ethiopia.  Gondar blood bank is one of 26 blood bank branches

       Gondar blood bank was established by federal government and Amhara regional state since  in 2006 E.C. this organization was begin giving small capacity of blood  service. The aim of the organization is to provide efficient service to user, to increase the capacity to provide blood for the recipient, to increases the number blood donors by teaching the society and facilitating blood donating service for the blood donors. From time to time the capacity of it is increasing but the organization was working with manual system. Since the organization is using manual system this makes the employee to fail with data redundancy and erroneous data storing. Generally this organization was established to save the life of people who are affected by these problem like accidents, cancer, sickle cell, premature and surgery.</p> 
        </td></tr>
        </table>
	  	 </fieldset>
	  </div>
		 
			   <div id="right_content" Style="border:none">
	       	   <fieldset class="loginField"> 
		 <a href=""> <center><b>INERNAL LINKS</b></center></a>
		   </fieldset>
	       <fieldset class="loginField"> 
		 <a href="viewblood.php"> <center> available blood</center></a>
		   </fieldset>		      	      
		     <fieldset class="loginField"> 
		 <a href="invViewdonor.php"> <center>view donor information</center></a>
		   </fieldset>
	   	 </div>   
	</div>
	<div id="footer" ><center>
	  <font color="white">Copyright &copy; 2016 Gondar Blood Bank </font>
	</center></div>
</div>
</body>
</html>