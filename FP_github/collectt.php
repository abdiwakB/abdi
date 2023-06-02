

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
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
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
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','tel','','RisNum','email','','RisEmail','pno','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">

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
    <div id="header" ><?php include("nursepage.php");?></div>	
<div id="main_container">
   <div id="left_content"  >
<form action="collectserv.php" method="post" onSubmit="MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','tel','','NisNum','email','','R','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">
<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
 
<tr>
  <td colspan="2"><?php if(isset($_GET['reserve'])) echo "<center><font color=\"green\">You are Sucessfully make apointment</font></center>";?><strong>Collect  Blood Form </strong></td>
</tr>
<tr>
  <td align="right">First  Name</td>
  <td   colspan=""> <input  type="text" name="fname" pattern="[a-zA-Z]{3,100}" required x-spar-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_fname" placeholder='fname' /><label></label></td></tr>
  <tr><td align="right">Middle  Name</td><td> <input type="text" name="mname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title=" Please Enter Letter Only Above 3 characters"  value="" size='20%' id="txt_fname" placeholder='mname'></td></tr>
  <tr>
      <td align="right">Last Name</td>
      <td> <input type="text" name="lname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title=" Please Enter Letter Only Above 3 characters"  value="" size='20%' id="txt_fname" placeholder='lname'></td></tr>    	  	  
  <tr><td align="right">Sex</td><td><label>
    <select name="sex" required title="select Sex">
      <option>Male</option>
      <option>Female</option>
    </select>
  </label>
   <tr>
      <td align="right">Pack no</td>
      <td> <input type="text" name="pno"  placeholder='pack.no' pattern="[D]{1}[O]{1}[N]{1}[/]{1}[0-9]{4}[/]{1}[0-9]{2}" title=" Pack no must be number" required></td></tr>   
  </td>
  <tr>
  <td align="right">Amount</td>
  <td   colspan=""> <input type="text" name="wht" min="1"  placeholder='amount' pattern="[0-9]{1,10}" title="Amount" required /><label></label></td></tr>
  <tr><td align="right">blood group</td><td><select name="bgrp" title=" select blood group " required>
   <option value="">-Select your bloodgroup-</option>
   <option value="A+">A+</option>
   <option value="A1+">A1+</option>
   <option value="A2+">A2+</option>
   <option value="B+">B+</option>
   <option value="A1B+">A1B+</option>
   <option value="A2B+">A2B+</option>
   <option value="AB+">AB+</option><option value="O+">O+</option>
   <option value="A-">A-</option><option value="A1-">A1-</option>
   <option value="A2-">A2-</option><option value="B-">B-</option>
   <option value="A1B-">A1B-</option><option value="A2B-">A2B-</option>
   <option value="AB-">AB-</option>
   <option value="O-">O-</option></select></td></tr>
	<tr>
      <td align="right">Collected by</td>
      <td> <input type="text" name="cname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_fname" placeholder='nursename'></td></tr>  
  
<tr><td align="right"> Collected date </td>
	<td><input type="date" name="cdate" pattern="[date]" required="required" class="rdepartment" title="date value is number only"></td></tr>
   
  </label></td>
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