

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
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','te','','','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">

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
    <div id="header" ><?php include("amanagerpage.php");?></div>
	
<div id="main_container">
   <div id="left_content"  >
<form action="hregistrationserv.php" method="post" onSubmit="MM_validateForm('id','','R','hname','','R','mname','','R','lname','','R','uname','','R','city','','R','','','NisNum','email','','RisEmail','woreda','','NisNum','kbl','','R','bgrp','','R','paw','','R');return document.MM_returnValue">
<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
 
<tr>
  <td colspan="2"><?php if(isset($_GET['reserve'])) echo "<center><font color=\"green\">You are Sucessfully make apointment</font></center>";?><strong> Hospital Registration Form </strong></td>
</tr>
<tr><td align="right">Hospital Name</td><td> <select name="hname" required x-moz-errormessage="Please select hospital name" title="Please select hospital name"> 
<option value="" selected="selected">Select Hospital</option> 
<option value="Gondar university referal hospital">Hiwote Fan hospital</option> 
<option value="Metema hospital">aaaaaaa hospital</option> 
<option value="Debark hospital">bbbbbbb hospital</option> 
<option value="MSF hospital">cccccc hospital</option> 
<option value="Delgi hospital">kkkkkk hospital</option> 
<option value="Kolladiba hospital">uuuuuuu hospital</option> 
<option value="Arbajira hospital">lllllll hospital</option> 
<option value="Sanja hospital">ttttttt hospital</option> 
<option value="Janamora hospital">jjjjjjj hospital</option> 
<option value="Gohala hospital">eeeee hospital</option> 
 
</select></td></tr>
   <tr><td align="right">telephone</td><td> <input type="text" name="tel" pattern="[+]{1}[2]{1}[5]{1}[1]{1}-[5]{1}[8]{1}[0-9]{1}-[0-9]{6}" title="Please Enter valid phone number  " placeholder='phone' required x-moz-errormessage="Please Enter valid phone number"></td></tr>
   <tr><td align="right">Email</td><td> <input type="email" name="email" pattern="[a-zA-Z0-9]{3,19}[@]{1}[g]{1}[m]{1}[a]{1}[i]{1}[l]{1}[.]{1}[c]{1}[o]{1}[m]" placeholder='email' required x-moz-errormessage="Please Enter valid email address" title="Please Enter valid email address"></td></tr>
   <tr><td align="right">Location</td><td> <input type="text" name="loc" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters"   value="" size='20%' id="txt_lname" placeholder='location'></td></tr>
  </table>
  <table cellspacing="30" align="center">
 <tr><td  align="center"> <input size="100"type="submit" class="submit" value="Register"/></td>
 <td align="center"> <input size="100"type="reset" class="submit" value="Clear"/></td></tr>
  </table>
</fieldset>                  
</form>
	</div>
	   
</div>

</div>
</body>
</html>