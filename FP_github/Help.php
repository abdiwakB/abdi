
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
<title>Help</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">
      <!--<img src="chh.JPG" name="slide" width="1002" height="638" /> -->

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
	
	<div id="main_container">
	<div><?php echo "</b><a href=\"home.php\"><font color='green'>Home</a></font> <b>:</b><font color='red'>help center</font>"?></div>
	<div id="left_content" style="border: none;">
	  
	 <table>
	 <tr><td><H2>How do I can use my site?</H2>
 <blockquote>
<p>
<strong>Login.</strong>
The admin enter username and password and select login option, then the system display home page for dedicated user.<br>
<strong>Manage account.</strong>
First admin must login into the system and the system display admin page then the admin select one of the listed links, for example if he wants to create new account click to create account link and system displays create account form then the admin fill correctly needed information and then the system displays account successfully created message.<br>
<strong>Post info.</strong>
First the admin must login into the system and the system displays admin page then admin select add info menu and the system display rich text box form when the admin fill the form and select submit button, then the system display successfully added message.
<br><strong>Hospital Registration.</strong>
First the admin must login into the system and the system displays admin page then admin select hospital registration menu and the system display registration form when the admin fill the form and select register button, then the system display hospital successfully registered message.
<br>
<strong>Donation request.</strong>
First donor login into the system and the system display donor page, donor select donation request link and the system display donation request form the donor fill the donation request form and select send button then the system generate successfully send message. 
<br>
<strong>Distribution.</strong>
First inventory manager must login into the system and the system display inventory manager page, the manager select distribution link and the system display distribution form and manager search the matched blood if exist distribute and select distribute button then the system generate successfully distributed message.
<br>
<strong>Manage stock.</strong>
First inventory manager must login into the system and the system display inventory manager page, the manager select manage stock link and the system display manage stock form and manager select update, register or discard blood link if the manager want to discard the expired blood select it by its pack number and select discard button then the system generate blood is successfully discarded message.
<br><strong>donor registration.</strong>
First Nurse must login into the system and system display nurse page, the nurse select donor registration link and the system display registration form then nurse fill donor  information, the system check the filled info and if it is correct it generate the donor is successfully registered message. 

</p> 
 </font>
<blockquote>
  
</td></tr>
 	 </table>
	  	 </fieldset>
	  </div>
	   <div id="left_conten" style="border: none;">
	   	
	 <table>
	 <tr><td> 
 <blockquote>
 <font color="000000"><p><h2>How do I can use my site?</h2>
<p><strong>View report.</strong>
First the system users must login into the system and the system display admin page then admin select view report menu the system display view report form and admin enters report date and select submit button then the system displays viewed report message.
<br>
<strong>Approve.</strong>
First the admin must login into the system and the system display admin page then admin select approve request menu and the system display requested information and check the requested information and if it is correct the system generate successfully approved message. 
<strong>View comment.</strong>
First the system user must login into the system select view comment menu then the system display the feedback given by the customer. 
<br><strong>Give comment.</strong>
The system display user page and the user select comment the system link
then the system display the contact us page with feedback form, when the customer or the visitor fill the required field select submit after that the system display thanks for give us comment message. 
<br><strong>blood request.</strong>
First the hospital admin must login into the system and system display hospital page, hospital admin select blood request link and the system display request form and admin fill request form and select send button then the system generate your request is successfully sent message.
<br><strong>collect blood.</strong>
First Nurse must login into the system and system display nurse page, the nurse select collect blood link and the system display collect blood form then nurse fill collected blood information, the system check the filled info and if it is correct it generate the blood is successfully recorded message. 


</p> 
 </font>
<blockquote>
  
</td></tr>
 	 </table>
	  	
	  </div>			   
	</div>
		
</div>
<div> <?php include('footer.php');?>	</div> <div>
</body>
</html>
