

<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style type="text/css">
<!--
.style1 {color: #0066FF}
-->
  </style>
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="960"src="aflg.jpg"></div>
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();

                   // <form  name="form" method="post" action="">
                    
                    
                    
                  //  <div style="background-color: #999999">
                          
                                // <fieldset style="width:50%" style="border-color:#008000">
//music
// <legend><b>database</b></legend><br />
//<?php
	        
if(isset($_POST['submit']))
{
$a=$_POST['rd'];
$b=$_POST['r'];
$c=$_POST['ams'];
$d=$_POST['amt'];
$e=$_POST['apd'];
$con=mysql_connect("localhost","root","root");
if(!$con)
die("unable to connect");
mysql_select_db("brc",$con);
$sql="insert into rport values('$a','$b','$c','$d',,'$d')";
$result=mysql_query($sql);
if(!$result)
{
die("unable to insert".mysql_error());
}
else  
echo "you have stored successfully ";
mysql_close($con);
}
else {
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset>
<p><font color="blue"></font><center>
  <h4><span class="style1">Proggresive</span> <font color="blue">Report of Drug Infotmation :</font></h4>
</center></p>
<table>
<b><h1> Generate Report  Form</h1></b>
<tr><td></td><td></td><td><b>Reported date:</b></td><td><input type="text" name="rd"></td></tr>
<tr> </tr>
<tr><td><b>Report reported by:</b></td><td><input type="text" name="r"></td><td></td><td></td></tr>
<tr> </tr>
<tr><td height="28">
<b>Drug Amount in stor:</b><td><select name="ams">

<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
<option value="6">6
<option value="7">7
<option value="8">8
<option value="9">9
<option value="10">10
<option value="11">11
<option value="12">12
</select>
</td><td></td><td></td></tr>
<tr><td>
<b>Amount of prscrived Drug:</b>
  <td><select name="amt">
    <option value="1">1
      <option value="2">2
        <option value="3">3
          <option value="4">4
          <option value="5">5
          <option value="6">6
          <option value="7">7
          <option value="8">8
          <option value="9">9
          <option value="10">10
          <option value="11">11
          <option value="12">12
      </select></td>
  <td></td><td></td></tr>
<tr><td><b>Approved By:</b></td><td><input type="text" name="apd"></td><td></td><td></td></tr>

<tr> </tr>
<tr><td></td><td><input type="submit" name="submit" value="Report"/></td></tr>
</table>
</fieldset>
</form>
<?php   }   echo"<a href='searchr.php'>Back</a>"; ?>