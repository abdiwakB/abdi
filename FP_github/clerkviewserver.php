


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

    <div id="banner"> <img  height="638" width="960"src="aflg.jpg"></div>
                                                            <div id="header" ><?php include("NursePage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();
    if(isset($_POST['insaert'])){
             $uname=$_POST['uname'];
             $fname=$_POST['fname'];
			 $lname=$_POST['lname'];
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$pickup_hr=$_POST['pickup_hr'];
			$ReMonth=$_POST['ReMonth'];

	
include('Db_Cconnection.php');
$sql="Insert into veiwupdateappointment (Cilent_Id, First_Name,Last_Name,Sex,Teelphone,Appointment_Time ,
       Appointment_Date) 
	   values('$uname','$fname','$lname','$sex','$phone','$pickup_hr','$ReMonth')";
     $result=mysql_query($sql);
if(!$result)
{
die("unable to insert".mysql_error());
}else 
 {
echo" <font color=blue align=center> You have registered successfully </font>";
}

mysql_close($con);
}

?>

																						</div>
	   
	</div>
	<div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
 </div>
  </body>
</html>