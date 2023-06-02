<?php 
						session_start();
						include_once('Db_Cconnection.php');
						$user_name=$_POST["usernamee"];
						$pass=$_POST["password"];
						 
						mysqli_select_db( $con,"brc");
					 	$sql = "SELECT * from account where Username ='$user_name' and Password ='$pass'";
						$check = mysqli_query($con,$sql);
						if(mysqli_num_rows($check)!=1){
						header("Location: home.php?fail");
							//session_destroy();
						}
						else {

						while($row = mysqli_fetch_array($check))
											  {
											  
								$previlage=$row['Role'];
													  
								$_SESSION['user_id']=$pass;
								$_SESSION['user_name']=$user_name;
								//echo  $_SESSION['user_name'];
								//$_SESSION['E_fname']=$user_name;
														
								if($previlage=='Hospital'){
														
								header("Location: Hospitalhome.php");
														break;
														}														
								else if($previlage=='Administrator'){
								header("Location: adminp.php");
														break;
														}
								else if($previlage=='Inventory'){
														header("Location: Inventoryhome.php");
														break;
														}
														else if($previlage=='Nurse'){
														header("Location:NurseHomePage.php");
														break;
														} 
											}
						}
						 mysqli_close();

?>