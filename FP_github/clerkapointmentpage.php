<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

                                                           <div id="banner"> <img height="100%"width="100%"src="banner.JPG"></div>
                                                            <div id="header" ><?php include("openpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();
																									include("Db_Cconnection.php");
																									 //for pick up date
																									$phr=$_POST["pickup_hr"];
																									$pmn=$_POST["pickup_min"];
																																													
																									 $pMonth=$_POST["PMonth"];
																									$pDate=$_POST["PDay"];
																									$pYear=$_POST["PYear"];
																									$changed1=date('m', strtotime($pMonth));
                                                                                                      $rhr=$_POST["return_hr"];
																								     $rmn=$_POST["return_min"];
																									//echo $rhr;
																									//echo $rmn;
																									$reMonth=$_POST["ReMonth"];
																									$reDate=$_POST["ReDay"];
																									$reYear=$_POST["ReYear"];
																									$changed=date('m', strtotime($reMonth));

																									$name=$_POST["name"];
																									$phone=$_POST["phone"];
																									$email=$_POST["email"];
																									$country=$_POST["country"];

																									$_SESSION['name']=$name;
																									$_SESSION['phone']=$phone;
																									$_SESSION['email']=$email;
																									  
																									$_SESSION['pMonth']=$pMonth;
																									$_SESSION['pDate']=$pDate;
																									$_SESSION['pYear']=$pYear;

																									$_SESSION['reMonth']=$reMonth;
																									$_SESSION['reDate']=$reDate;
																									$_SESSION['reYear']=$reYear;
                                                                                                          
																										  //check whether the field is empty or not
																										 if(($name==null)||($phone==null)||($email==null)||($country=="SelectCountry")||
																										($pMonth=="SelectMonth")||($pDate=="SelectDate")||($pYear=="SelectYear")||
																										($reMonth=="SelectMonth")||($reDate=="SelectDate")||($reYear=="SelectYear")) header("Location:reservation.php?emptyy");
																										  else{
																											 //validate name
																											$name = preg_replace('/[\s]+/is', ' ',$name);
																											$name = trim($name);
																											if(!preg_match('/^[a-z\s]+$/i', $name))header("Location:reservation.php?name");
																											 else{
																											 //check the phone number
																											  if(!preg_match("/^[+]{1}[0-9]{3}-[0-9]{3}-[0-9]{6}$/", $phone))header("Location:reservation.php?phone");
																											 else{
																											 //here concatenate date month and year for pick up date 
																											  //  2012-06-19 14:35:06
																											$pickup=$pYear."-".$changed1."-".$pDate." ".$phr.":".$pmn.":"."00";
																											//here concatenate date month and year for return date 
																											  
																											$returndate=$reYear."-".$changed."-".$reDate." ".$rhr.":".$rmn.":"."00";
																											//echo $returndate;
																										   //to generate reservation id 
																											$reservationid="R/".$pYear."/"."$name";
																											//validate email
																											//..............................................................
																									 
																												 $pattern = "/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*
																												$^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,3}|\d{1,3}(?:\.\d{1,3}){3})(?::\d++)?$/iD";
																												 if(!preg_match($pattern, $email)){
																												  header("Location:reservation.php?email");
																												  }
																												else{
																										   // check pick update and return date
																											//..............................................................
																														  if($pickup>$returndate )header("Location:reservation.php?unbalanceddate");
																														   else{
																														         $current= date("Y-m-d");
																														           if(strtotime($pickup) < strtotime($current) )
																																 header("Location:reservation.php?no");
																																     else{
																														  mysql_select_db("brc",$con);
																														 $platenumber= $_SESSION['plate_number'];
																														 //echo "tttttttttttttttttttttttttttttttttttttttttt";
																														 $insert="INSERT INTO  reservation(ReservationID,fullname,phone,email,
																														 country,pickupdate,returndate,platenumber)VALUES
																														   ('$reservationid','$name','$phone','$email','$country','$pickup','$returndate','$platenumber')";
																														   
																														 $ChangeStatus="UPDATE vehicle SET status=\"inactive\"  WHERE  platenumber='$platenumber'";
																															  $reservationid="R/".$pYear."/"."$name";
																															  
																															 if (!mysql_query($insert,$con)||!mysql_query($ChangeStatus,$con))
																															  {
																															 die('Error: ' . mysql_error());
																																}
																															 else{
																															 //...............................................................................................................................................................
																															 //  count resrvation
																															// $up="UPDATE count set countreservation=countreservation+1";
																															/// if (!mysql_query($up,$con))
																															///   {
																															/// die('Error: ' . mysql_error());
																															//	}
																															 $_SESSION['name'] =null;
																														     $_SESSION['phone'] =null;
																														     $_SESSION['email']=null ;
																													//	echo $phone;
																										 //	include_once("sms.php");	
																											 //  sms();
																														 $gatewayURL = 'http://localhost:9333/ozeki?';
																														$request = 'login=admin';
																														$request .= '&password=abc123';
																														$request .= '&action=sendMessage';
																														$request .= '&messageType=SMS:text';
																														//$phone='+251-913-878542';
																														$request .= '&recepient='.urlencode($phone);
																														$request .= '&messageData='.urlencode("your reservation id is  ".$reservationid." from brc car rental ");
																													
																														$url = $gatewayURL . $request;
																														//Open the URL to send the message
																														file($url);	
	                                                                                                               //echo "SUCESSFULLY SENT";																														
																														echo "<fieldset class=\"loginField\">
																														  <table>
																														 <tr><td>You are sucessfully reserved! Your Reservation id is=<font color=\"red\">$reservationid</font></td></tr>
																														  <tr><td><font color=\"red\">Attention</font></td></tr>
																														  <tr><td>Donot forget your<font color=\"red\"> reservation id</font> it is necessary during rent,for update reservation and Cancel reservation unless we cannot serve you!</td></tr>
																														   <tr><td>Fore more information you can get this reservation id or confrimation number on your email or mobile</td></tr>
																														 </table>
																															 </fieldset>";
																											 
																															      }
																															   }
																													   }//date end
																										 }//email end
																										 }//phone end
																										 }//name end
																										 }//empty check end
																									//header("Location:Reservation.php?reserve");
																									 ?>
																									 <!--links for cancel and update reservation-->
																									 </div>
<div id="right_content">
<fieldset class="loginField">
<table>
<tr><td><a href="cancelreservation.php">Cancel Reservation</a></td></tr>
</table>
</fieldset>
<fieldset class="loginField">
<table>
<tr><td><a href="updatereservation.php">Update Reservation</a></td></tr>
</table>
</fieldset>
	   </div> 
	   </div>
<div id="footer" ><center><font color="white">CopyRight@BRC Car Rental  and Online Reservation</font></center></div>
</div>
</body>
</html>