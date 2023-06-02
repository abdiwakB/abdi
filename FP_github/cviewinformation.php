<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
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
<div id="all">
       <div id="banner"><img  height="638" width="960"src="aflg.jpg"></div>
      <div id="header" ><?php include("openpage.php");?></div>

	    <div id="main_container">
			    <div><?php echo "You are here<b>:</b><a href=\"home.php\"><font color='green'>Home</a></font> <b>:</b><font color='green'> clieant information</font><b>:</b><font color='red'>view clieant information</font>"?></div>
                   <div   style="margin-top:1.0cm;"  id="left_content">
						 <form  action="file:///D|/IT 4th/idustrial pro/finalproject/BRC[1]/UpdateDisplayServer.php" method="POST" onSubmit="MM_validateForm('textfield','','R','textfield2','','R','id','','R');return document.MM_returnValue">
										  <fieldset class="loginField">
										  </fieldset>
						               <fieldset class="loginField"> 
									 
										<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
										<tr><td colspan='2'align="center"><?php if(isset($_GET['notfound'])) echo "<font color='red'>Wrong Resrvation id Please try Again</font>";?>
									 <?php if(isset($_GET['update'])) echo "<font color='green'><blink><h1>You are sucessfully view your information</h1></blink></font>";?></td></tr>
									  <tr>
									    <td>Enter  Id</td>
									    <td><input type="password" name="id"></td></tr>
									  <tr><td align="center" colspan="2"><p>Fname
									    <label>
									    <input type="text" name="textfield">
									    </label>
									  </p>
									      <p>Lname
									        <label>
									        <input type="text" name="textfield2">
									        </label>
									      </p>
									      <p>
									        <input type="submit" class="submit" value="view information">
							            </p>
									      <p>&nbsp;</p>
									      <p>&nbsp;</p>
									      <p>&nbsp; </p></td></tr>
									  </table>
									    <p>&nbsp;</p>
									    <p>&nbsp;</p>
						               </fieldset>
					 </form>
 </div>
        <div id="right_content">
		   <fieldset class="loginField"> 
		 <a href=""> <center><b>INERNAL LINKS</b></center></a>
		   </fieldset>
	       <fieldset class="loginField"> 
		 <a href="Searchdoctors.php"> <center>find available doctors</center></a>
		   </fieldset>
		      <fieldset class="loginField"> 
		  <a href="Reservation2.php"><center>make apointment</center></a>
		   </fieldset>
		      <fieldset class="loginField"> 
		   <a href="cviewinformation.php"><center>view information</center></a>
		   </fieldset>
		     <fieldset class="loginField"> 
		 <a href="CancelReservation.php"> <center>cancel apointment</center></a>
		   </fieldset>
		    <fieldset class="loginField"> 
		   <a href="updatereservation.php"><center>Update apointment</center></a>
		   </fieldset>
  	      </div> 
	</div> 
<div id="footer" ><center><font color="white">CopyRight@aflagat hospital</font></center></div>
</div>
</body>
</html>