

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

                   // <form  name="form" method="post" action="">
                    
                    
                    
                  //  <div style="background-color: #999999">
                          
                                // <fieldset style="width:50%" style="border-color:#008000">
//music
// <legend><b>database</b></legend><br />
//<?php
	         
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];			
			$sex=$_POST['sex'];
			$age=$_POST['age'];			
			$country=$_POST['country'];
			$city=$_POST['city'];
			$tel=$_POST['tel'];
			$email=$_POST['email'];
			$salary=$_POST['salary'];
			$dpt=$_POST['dpt'];
			$specfic=$_POST['specfic'];
			$marridge=$_POST['marridge'];
			include('Db_Cconnection.php');
			
			$save="INSERT INTO employee(E_fname,mname,lname,sex,Age,country ,city,mobile ,email,salary,responsiblity,specialization,status ) VALUES ('$fname','$mname','$lname','$sex','$age','$country','$city','$tel','$email','$salary','$dpt','$specfic','$marridge')";
			
			
			
			
			 $result=mysqli_query($con,$save);
			 if(!$result)
			 { 
			 die(mysql_error());
			
			//header("location: upload_vacancy.php");
			}
			else {
			
			echo "seccusfully regestered";
		
			}
			exit();	
							
	
?>
    
</fieldset>

</div>
</body>




