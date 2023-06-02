

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

<style type="text/css">
<script src="validator.js"></script>
 input{
 width:300px;
 height:40px;
 }
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@'&&'.com');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','tel','','RisNum','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">
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

    <div id="header" ><?php include("openpage.php");?></div>	
    <section id="backg1">
    <div class="back">
      <h2>Donate Blood <br>
   and make difference</h2>
      
    </div>
    <div class="loo">
  <div class="lo">
    <form action="hogivecommentserv.php" method="post" onSubmit="MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','tel','','NisNum','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">
      <?php if(isset($_GET['reserve'])) echo "<center><font color=\"green\">You are Successfully make an appointment</font></center>";?>
      <strong>Comment form </strong>
      <p>  Name </p>
      
      <input type="text" class="ll" name="name" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please enter letters only (3 or more characters)" title="Please enter letters only (3 or more characters)" value="" size="20%" id="txt_lname" placeholder="Name">
      <p> Email </P>
      <input type="email" class="ll" name="email" placeholder="Email" required x-moz-errormessage="Please enter a valid email address" title="Please enter a valid email address">
      <p> Comment </p>
      <textarea name="comment" rows="5" cols="40" pattern="[a-zA-Z0-9]" required x-moz-errormessage="Please enter a comment" title="Please enter a comment" size="20%" id="sem" value="" placeholder="Comment"></textarea>
      
      <?php if(isset($_GET['unbalanceddate'])) echo "<center><font color=\"red\">Current date must be less than the appointment date</font></center>";?>
      <div>
      <input size="100" type="submit" class="submit" value="Send"/>
      <input size="100" type="reset" class="submiti" value="Clear"/>
    </div>
    </form>
    <div class="feedback-message"></div>
  </div>
 
    </div>
  </section>

  
  <div>    <?php include('footer.php');?>	</div> 	

</div>
</body>
</html>