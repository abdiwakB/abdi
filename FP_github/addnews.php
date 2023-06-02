

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
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','tel','','RisNum','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">

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
<form action="addnewsserv.php" method="post" enctype="multipart/form-data onSubmit=" MM_validateForm('id','','R','fname','','R','mname','','R','lname','','R','uname','','R','city','','R','tel','','NisNum','email','','R','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">
 

<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
 
<tr>
  <td colspan="2"><?php if(isset($_GET['reserve'])) echo "<center><font color=\"green\">You are Sucessfully make apointment</font></center>";?><strong>Add news form </strong></td>
</tr>
   <tr><td align="right">Title</td>
      <td> <input type="text" name="title" pattern="\D{4,100}" required x-moz-errormessage="Please Enter Letter Only Above 4 characters" title="Please Enter Letter Only Above 4 characters "   value="" size='20%' id="txt_fname" placeholder='title'></td></tr>   	  
 <tr><td align="right">Body</td>
      <td> <textarea name="body" rows="10" cols="40"  pattern="[a-zA-Z0-9]+" required x-moz-errormessage="Please add news  " title="Please add news  "   size='20%'  id="sem" value='' placeholder='add news'></textarea></td></tr> 
 <tr><td align="right">Author</td>
      <td> <input type="text" name="author" pattern="\D{4,100}" required x-moz-errormessage="Please Enter Letter Only Above 4 characters" title="Please Enter Letter Only Above 4 characters "   value="" size='20%' id="txt_fname" placeholder='author'></td></tr> 
	   <tr>
  <td align="right">Posted date <div align="right"></td>
  <td>
  <select name="bday" title="select date" required>
      <?php  echo "<option value=\"\">SelectDate</option>";  for($i=1;$i<=31;$i++) echo "<option value=\"$i\">$i</option>"; ?>
       </select>
  <select name="bmonth" title="select month" required>
      <?php 
      $month=array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
      echo "<option value=\"\">SelectMonth</option>";for($i=0;$i<=11;$i++) echo "<option value=\"$month[$i]\">$month[$i]</option>"; 
        ?> 
 </select>
 <select name="byear"title="select year" required>
    <?php echo "<option value=\"\">SelectYear</option>";for($i=2016;$i<=2030;$i++) echo "<option value=\"$i\">$i</option>"; ?>
  </select>
 </td>
  </tr> 
	<tr><td align="right">Picture</td><td><input  type="file" name="file"title="select file" required></td></tr>  	  	 
   <!-- pick up date-->
   <tr><td colspan="2"><?php if(isset($_GET['unbalanceddate'])) echo "<center><font color=\"red\">curent date nmust be less than apointment    date </font></center>";?> </td></tr>
   
   
  </label></td>
 
  </table>
  <table cellspacing="30" align="center">
 <tr><td  align="center"> <input size="100"type="submit" class="submit" value="Post"/></td>
 <td align="center"> <input size="100"type="reset" class="submit" value="Clear"/></td></tr>
  </table>
</fieldset>                  
</form>
	</div>
 
	   
</div>

</div>
</body>
</html>