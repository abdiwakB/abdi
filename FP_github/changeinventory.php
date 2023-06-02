<?php

session_start();
 if(!isset($_SESSION['user_id']))
	  {
	header("Location:inventoryPage.php");
	  }
?>
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
 <head><link rel="stylesheet" type="text/css" href="CSS/cs.css" /></head>
 <head><link rel="stylesheet" type="text/css" href="CSS/cs2.css" /></head>
 <body>
 <div id="all">
  


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
					<?php include("inventorypage.php");?>
			</div>
					<div id="main_container">
																				  <div id="center_content">
																							 
																							<head>

<script>
function validatePassword() {
var old,password,confirmpass,output = true;

old = document.frmChange.old;
password = document.frmChange.password;
confirmpass = document.frmChange.confirmpass;


return output;
}
</script>

 <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
          {
            alert("Please!Enter only numbers");
            return false;
          }
         return true;
      }
   </SCRIPT>
</head>

 <body >
 <div id= "all">
    <?php require_once('Db_Cconnection.php'); ?>
    <?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
 mysql_select_db("brc", $con);
$query_stufogotpass = "SELECT password FROM account WHERE password='".$_POST['code']."'";
$stufogotpass = mysql_query($query_stufogotpass, $con) or die(mysql_error());
$row_stufogotpass= mysql_fetch_assoc($stufogotpass);
$totalRows_stufogotpass = mysql_num_rows($stufogotpass);
mysql_free_result($stufogotpass);
if($totalRows_stufogotpass>0){
if($_POST['password'] == $_POST['confirmpass']){
	mysql_query("UPDATE account set password='". $_POST['confirmpass']."' WHERE password='" . $_POST['code'] . "'");
	echo "<strong><font color=#004000>Your password is successfully changed.</font></strong>";
	
	}
	else{
		echo "<strong><font color=#FF0000 >Password does not mach.</font></strong>";
	}}
	else {
	echo "<strong><font color=#FF0000 >Incorrect old password.</font></strong>";	
	}
}
?>
<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST" onSubmit="returnValidatePassword()">
    <?php if(isset($message)) { echo $message; } ?>
  <table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
  <tr align="center">
    <td colspan="3"><h4 class="style2"> change Password  Form </h4></td>
  </tr>
  <tr>
    <td align="right"><b>old password </td>
    <td><input type="password" name="code" class="ed" pattern="[a-zA-Z0-9]{6,12}" required x-moz-errormessage="Please Enter password" title="Please Enter password"   size='20%'  id="sem" value='' placeholder='old password' onkeypress="return isNmberKey(event)"/></td>
    <br />
  </tr>
  <tr>
    <td align="right"><b>New password </b></td>
    <td><input type="password" name="password" class="ed" pattern="[a-zA-Z0-9]{6,12}" required x-moz-errormessage="Please Enter password" title="Please Enter password"   size='20%'  id="sem" value='' placeholder='new password'></td>
    <br />
  </tr>
  <tr>
    <td align="right"><b>Confirm</b></td>
    <td><input type="password"  class="ed" name="confirmpass" pattern="[a-zA-Z0-9]{6,12}" required x-moz-errormessage="Please Enter password" title="Please Enter password"   size='20%'  id="sem" value='' placeholder='comfirm password'></td>
    <br />
  </tr>
</table>
<table cellspacing="30" align="center">
 <tr><td  align="center"> <input size="100"type="submit" class="submit" value="Change"/></td>
 <td align="center"> <input size="100"type="reset" class="submit" value="Clear"/></td>
 <td> <input type="hidden" name="MM_insert" value="form1" class="ed" /></td></tr>
  </table>
</form>
																			 </div>
 
	</div>
 </div>
	
 </div>
   </body>
</html>
