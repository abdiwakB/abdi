<?php 
						session_start();
						include_once('Db_Cconnection.php');
						$bgrp=$_POST["bgrp"];
						mysql_select_db("brc", $con);
					 $sql = "SELECT * from abld where blood_group ='$bgrp'";
						$check = mysql_query($sql,$con);
						if(mysql_num_rows($check)!=1){
						header("Location: hrequest.php?fail");
							//session_destroy();
						}
						else {

						while($row = mysql_fetch_array($check))
											  {
											  
								$previlage=$row['blood_group'];
													  
							
								$_SESSION['blood_group']=$bgrp;
								//echo  $_SESSION['user_name'];
								//$_SESSION['E_fname']=$user_name;
														
								if($previlage=='$bgrp'){
														
								header("Location: hrequestserv.php");
														break;
														}														
														
											}
						}
						 mysql_close();

?>