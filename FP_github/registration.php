

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
<form action="regstrationserv.php" method="post" onSubmit="MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','te','','NisNum','email','','RisEmail','salary','','NisNum','dpt','','R','county','','R','specfic','','R','paw','','R');return document.MM_returnValue"><table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
<tr>
  <td colspan="2"><strong> Employee Regestration Form </strong></td>
</tr>

<tr>
  <td align="right">First  Name</td>
  <td   colspan=""> <input  type="text" name="fname" pattern="[a-zA-Z]{3,10}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_fname" placeholder='fname'/></td></tr>
  <tr><td align="right">Middle  Name</td><td> <input type="text" name="mname"pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters"   value="" size='20%' id="txt_mname" placeholder='mname'></td></tr>
  <tr>
      <td align="right">Last Name</td>
      <td> <input type="text" name="lname" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_lname" placeholder='lname'></td></tr>    
  <tr><td align="right">Sex</td><td><label>
    <select name="sex" title="select sex" required>
      <option>Male</option>
      <option>Female</option>
    </select>
  </label></td>
 <tr>
      <td align="right">Age</td>
      <td> <input type="number" name="age" max="60" min="18" placeholder='age' required x-moz-errormessage="Please Enter valid age and must be number" title="Age must be number and between 18 and 60"></td></tr>
<tr><td align="right">country</td><td><select name="country" required x-moz-errormessage="Please Enter country" title="select country">
   <option value="">Select country</option>
<option value="Congo, The Democratic Republic of The">Congo</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Kenya">Kenya</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated </option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
</select></td></tr>
   
   <!-- pick up date-->
   <tr><td colspan="2"><?php if(isset($_GET['unbalanceddate'])) echo "<center><font color=\"red\">curent date nmust be less than apointment   date </font></center>";?> </td></tr>
   
   <tr><td align="right">city</td><td> <input type="text" name="city" pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_mname" placeholder='city'></td></tr>
   <tr><td align="right">telephone</td><td> <input type="text" name="tel"  pattern="[+]{1}[2]{1}[5]{1}[1]{1}-[9]{1}[0-9]{2}-[0-9]{6}" title="Please Enter valid phone number" placeholder='phone' required x-moz-errormessage="Please Enter valia phone number" ></td></tr>
   <tr><td align="right">Email</td><td> <input type="email" name="email" title="Please Enter valid email address" placeholder='Email' required x-moz-errormessage="Please Enter valid email address"></td></tr>
   <tr><td align="right">salary</td><td> <input type="text" name="salary" pattern="[0-9]{4,5}" placeholder='salary' required x-moz-errormessage="Please Enter number only" title="Please Enter number only"></td></tr>
   <tr><td align="right">department</td><td> <input type="text" name="dpt"pattern="[a-zA-Z]{2,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 2 characters "   value="" size='20%' id="txt_mname" placeholder='department'></td></tr>
   <tr><td align="right">specialization</td><td> <input type="text" name="specfic"pattern="[a-zA-Z]{3,100}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_mname" placeholder='specialization'></td></tr> 
   <tr><td align="right">mardge status</td><td><label>
    <select name="marridge" required x-moz-errormessage="Please Enter status" title="select status ">
      <option>single </option>
      <option>marridge</option>
	  <option>divorced</option>
    </select>
  </label></td></tr>
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