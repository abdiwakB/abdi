

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
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','tl','','RisNum','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">
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
    <div id="header" ><?php include("amanagerpage.php");?></div>
	
<div id="main_container">
   <div id="left_content"  >
<form action="donregstrationserv.php" method="post" onSubmit="MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','tl','','NisNum','email','','RisEmail','woreda','','R','kbl','','R','bgrp','','R','paw','','R');return document.MM_returnValue">
<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
 
<tr>
  <td colspan="2"><?php if(isset($_GET['reserve'])) echo "<center><font color=\"green\">You are Sucessfully make apointment</font></center>";?><strong> Donor Regestration Form </strong></td>
</tr>
<tr>
  <td align="right">First  Name</td>
  <td   colspan=""> <input type="text" name="fname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_fname" placeholder='fname' /><label></label></td></tr>
  <tr><td align="right">Middle  Name</td><td> <input type="text" name="mname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_fname" placeholder='mname'></td></tr>
  <tr>
      <td align="right">Last Name</td>
      <td> <input type="text" name="lname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters"   value="" size='20%' id="txt_fname" placeholder='lname'></td></tr> 	  
  <tr><td align="right">Sex</td><td><label>
    <select name="sex" required title="Select sex" >
      <option>Male</option>
      <option>Female</option>
    </select></tr>
  </label></td>
  <tr>
      <td align="right">Age</td>
      <td> <input type="number" name="age" max="60" min="18" placeholder='age' required x-moz-errormessage="Please Enter valid age and must be number" title="Age must be number and between 18 and 60 "></td></tr>
  <tr>
  <td align="right">Date <div align="right"></td>
  
  <td>
  
 <select name="dbday" required x-moz-errormessage="Please Enter date" title="select date ">
 
      <?php  echo "<option value=\"\">SelectDate</option>";  for($i=1;$i<=31;$i++) echo "<option value=\"$i\">$i</option>"; ?>
       </select>
	   <select name="dbmonth" required x-moz-errormessage="Please Enter month" title="select month ">
  
      <?php 
      $month=array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
      echo "<option value=\"\">SelectMonth</option>";for($i=0;$i<=11;$i++) echo "<option value=\"$month[$i]\">$month[$i]</option>"; 
        ?> 
 </select>
	  <select name="dbyear" required x-moz-errormessage="Please Enter year" title="select year">
    <?php echo "<option value=\"\">SelectYear</option>";for($i=2016;$i<=2030;$i++) echo "<option value=\"$i\">$i</option>"; ?>
  </select> 
	   </td>
  </tr> 
<tr><td align="right">Zone</td><td> <select name="zone" required x-moz-errormessage="Please Enter zone" title="select zone"> 
<option value="" selected="selected">Select zone</option> 
<option value="North Gondar">North Gondar</option> 
<option value="South Gondar">South Gondar</option> 
</select></td></tr>      
   <tr><td align="right">city</td><td> <input type="text" name="city"pattern="[a-zA-Z]{4,100}" required x-moz-errormessage="Please Enter Letter Only Above 4 characters" title="Please Enter Letter Only Above 4 characters "   value="" size='20%' id="txt_fname" placeholder='city'></td></tr>
   <tr><td align="right">telephone</td><td> <input type="text" name="tel"   pattern="[+]{1}[2]{1}[5]{1}[1]{1}-[9]{1}[0-9]{2}-[0-9]{6}"  placeholder='telephone' required x-moz-errormessage="Please Enter valid phone number" title="Please Enter valid phone number"></td></tr>
   <tr><td align="right">Email</td><td> <input type="email" name="email" placeholder='email' required x-moz-errormessage="Please Enter valid email address" title="Please Enter valid Email"></td></tr>
   <tr><td align="right">Woreda</td><td> <input type="text" name="woreda" pattern="[a-zA-Z]{4,10}" required x-moz-errormessage="Please Enter Letter Only Above 4 characters" title="Please Enter Letter Only Above 4 characters "   value="" size='20%' id="txt_fname" placeholder='woreda'></td></tr>
   <tr><td align="right">Kebele</td><td> <input type="number" name="kbl" min="1" placeholder='kebele' required x-moz-errormessage="Please Enter valid entry and must be number" title="Please Enter valid entry and must be number "></td></tr>
   <tr><td align="right">Blood group</td><td><select name="bgrp" required x-moz-errormessage="Please Enter blood group" title="select blood group">
   <option value="">Select your bloodgroup</option>
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
  </table>
  <table cellspacing="30" align="center">
 <tr><td  align="center"> <input size="100"type="submit" class="submit" value="Register"/></td>
 <td align="center"> <input size="100"type="reset" class="submit" value="Clear"/></td></tr>
  </table>
</fieldset>                  
</form>
	</div>
	   
</div>
<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>
</html>