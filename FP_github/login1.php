<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
</head>
<body>
<div id="header">
    <?php include("openpage.php");?>
  </div>
  
   <section class="ss">
   <div class="hero-text1">
    <h1>Give the gift of life to others</h1>
    <p>Donate blood, save lives!</p>
  </div>
      <div class="ss1">
         
 	  	 <form method="post" action="LoginServer.php">
<?php if(isset($_GET['fail'])) echo "<font color=\"red\"><center>login error</center></font>";?>
<p> Username</P><input type="text" name="usernamee">
<P>Password</p><input type="password" name="password">
 
<?php if(isset($_GET['select'])) echo "<font color=\"green\">please select privlage</font>";?>
<div class="ran">
<input type="Submit" class="submit" value="Login"/>
<input type="reset" class="submiti" value="clear"/>
</div>
   <h5 align ="center"> <a href="forgotpassword.php">Forgot password?</a></h5>

</form>
</div>
</section>
<div>
    <?php include('footer.php');?>
  </div>
 	 </body>
</html>





