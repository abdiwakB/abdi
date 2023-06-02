 
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

<title>Background</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />

</head>
<body>
<div id="all">
     <!-- <img src="chh.JPG" name="slide" width="1002" height="638" /> -->


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
	<?php include('openpage.php');?>
	</div>
	

  <section id="backg">
    <div class="back">
      <h2>Blood is the gift of life that only we can give.<br>
    Join us in donating blood and making a difference</h2>
      
  </section>

  <section class="mv1">
    
  
   <div class="miss">
      <h2>   Background of the organization </h2>
    
      <p>
   In Ethiopia blood bank service introduced in 1969 on yikatet12 hospitals. Ethiopia blood bank supported by FMOH and CDC Separated from ERCS since 2004. Blood bank system in Ethiopia has one main bank in Addis Ababa and 26 sub branch around all Ethiopia. Harar blood bank is one of 26 blood bank branches Harar bank was established by federal government and Harari regional state since in 2006 E.C. this organization was begin giving small capacity of blood service. The aim of the organization is to provide efficient service to user, to increase the capacity to provide blood for the recipient, to increases the number blood donors by teaching the society and facilitating blood donating service for the blood donors.</p>
    </div>
   
 
    </section>

<section class ="vm">

	<div class="mi" >   	
   <h2>Mission</h2>
     <p>Our mission is to serve our community by meeting the needs of patients, hospitals, and members for safe, high quality blood products and related services.
             and public health services including research activities according the
         organizational values and principles.

	  </p>
    </div>
  
    <div class="visi">
      <h2>Vision</h2>
      <p>
      The vision of our blood bank is to ensure a world where no life is lost due to a shortage of safe and accessible blood. We envision a society where every individual in need of blood or blood products can readily receive them, regardless of their location, economic status, or medical condition.   </p>
    </div>
  </section>

 
 
					      
	   	 </div>   
	</div>
	<div>    <?php include('footer.php');?>	</div> 	
</body>
</html>