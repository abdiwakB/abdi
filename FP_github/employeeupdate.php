


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

  
                                                            <div id="header" ><?php include("amanagerpage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();



              $id=$_POST['paw'];
			$fname=$_POST['firstname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];			
			$sex=$_POST['sex'];
			$age=$_POST['age'];
			$country=$_POST['country'];
			$city=$_POST['city'];
			$tel=$_POST['tel'];
			$email=$_POST['email'];
			$sal=$_POST['sal'];
			$dpt=$_POST['dpt'];
			$specfic=$_POST['specfic'];
			$marridge=$_POST['marridge'];
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update employee set Empolyy_Id='$id',E_fname='$fname',mname='$mname',lname='$lname',sex='$sex',
Age='$age',
country='$country',city='$city',mobile='$tel',email='$email',salary='$sal',responsiblity='$dpt',Specialization='$specfic',status='$marridge' where Empolyy_Id ='$id';";
   $res=mysqli_query($con,$sql) or die("query error".mysqli_error());
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from employee
 where Empolyy_Id ='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
echo "successfully deleted";
}
mysqli_close($con);
?>
</div>
</div>

</div>