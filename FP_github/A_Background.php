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
	 	<fieldset class="loginField">
	 <table>
	 <tr><td>
 	 <pre><font color="red"><b>Background of the organization</b></font>
        Aflagat hospital is found in the Amhara regional state<br> capital city of  Bahir Dar town which is located near to Ethiopian<br> Telecommunication Corporation building. The name of company is <br>ETHIO AFLAGAT GENERAL BUSINESS SHARE COMPANY that established within<br> 100 peoples in 1999.   It functionally started from <br>2001.Now the numbers of share sales are <br>increase to 260 peoples and also the hospital have more than 50 workers currently.<br>  Before 2003 there were small number of workers .Then time to time the hospital <br>grows and number of workers increase proportionally. <br>Around 2002 and 2003 the performance of the organization in terms of giving<br> service to clients (customers) was 60% .The organization <br>have gradually increase the services and need of the client for the service<br> have been developed. 
        </pre>
        </td></tr>
        </table>
	  	 </fieldset>
		 
	   	 </div>
		
	  <!-- <div id="right_content" Style="border:none">
	          kdfgfjghfkghfkhjfkghfkhjfkhjfk
	   	 </div>-->   
	</div>
		<div id="footer" ><center><font color="white">CopyRight@aflagat general hospital</font></center></div>
</div>
	</body>
</html>