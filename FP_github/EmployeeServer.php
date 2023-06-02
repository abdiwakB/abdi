 
 <?php
 session_start();
include("Db_Cconnection.php");
 mysql_select_db("brc", $con);
 $fname=$_POST["fname"];$_SESSION['fname']=$fname;
$mname=$_POST["mname"];$_SESSION['mname']=$mname;
$lname=$_POST["lname"];$_SESSION['lname']=$lname;
$username=$_POST["username"];$_SESSION['username']=$username;
$age=$_POST['age'];$_SESSION['age']=$age;
$city=$_POST["city"];$_SESSION['city']=$city;
$nationality=$_POST['nationality'];$_SESSION['nationality']=$nationality;
$home=$_POST["home"];$_SESSION['home']=$home;
$mobile=$_POST["mobile"];$_SESSION['mobile']=$mobile;
$email=$_POST["email"];$_SESSION['email']=$email;
$salary=$_POST["salary"];$_SESSION['salary']=$salary;
$pass=$_POST['pass'];
$sex=$_POST['sex'];
$country=$_POST["country"];
$Responsiblity=$_POST['responsiblity']; 

         if(($fname==null)||($mname==null)||($lname==null)||($mobile==null)||($email==null)||($age==null)||
        ($city==null)||($nationality==null)||($salary==null)||($home==null)||($username==null)||($pass==null))
		 header("Location:Employee2.php?emptyy");
		                 else{
						   //validate name
	                      $fname = preg_replace('/[\s]+/is', ' ',$fname);
		                  $mname = preg_replace('/[\s]+/is', ' ',$mname);
		                  $lname = preg_replace('/[\s]+/is', ' ',$lname);
		
                           $fname = trim($fname);
		                   $mname = trim($mname);
		                   $lname = trim($lname);
		                   // validating names
                            if(!preg_match('/^[a-z\s]+$/i', $fname)||!preg_match('/^[a-z\s]+$/i', $mname)||!preg_match('/^[a-z\s]+$/i', $lname)) 
		                      header("Location:employee2.php?name");
		                           else{
								   // to check user name is exist or not 
								       $query = "SELECT COUNT(username) FROM  employee where username='$username'";
                                        $result = mysql_query($query) or die(mysql_error());
                                        $row = mysql_fetch_row($result);
                                        // echo $row[0];
										if($row[0]>=1)
										 header("Location:employee2.php?exist2");
										   else
										  {
                                            	//checking existance of employee id									  
										 // $query = "SELECT COUNT(Emp_id) FROM  employee where Emp_id='$id'";
                                     //  $result = mysql_query($query) or die(mysql_error());
                                      //  $row = mysql_fetch_row($result);
                                      // echo $row[0];
										//if($row[0]>=1)
										/// header("Location:employee2.php?exist");
										  // else
										//  {
										  // validating nationality
										  
										      $city = preg_replace('/[\s]+/is', ' ',$city);
		                                      $nationality = preg_replace('/[\s]+/is', ' ',$nationality);
		                                            
		                                           $city = trim($city);
		                                           $nationality = trim($nationality);
		                                          // validating names
                                                   if(!preg_match('/^[a-z\s]+$/i', $city)||!preg_match('/^[a-z\s]+$/i', $nationality)) 
		                                                  header("Location:employee2.php?city");
													     else{
														       if(!is_numeric($age))
															           header("Location:employee2.php?age");
																	    else{
																		     if(!is_numeric($home))
															           header("Location:employee2.php?home");
																	        else{
																			    //check the phone number
	                                                                                if(!preg_match("/^[+]{1}[0-9]{3}-[0-9]{3}-[0-9]{6}$/", $mobile))header("Location:employee2.php?mobile");
                                                                                      else{ 
																					           //  to validate email
			                                                                             $pattern = "/^[-_a-z0-9\'+*$^&%=~!?{}]++(?:\.[-_a-z0-9\'+*
                                                                                         $^&%=~!?{}]+)*+@(?:(?![-.])[-a-z0-9.]+(?<![-.])\.[a-z]{2,3}|\d{1,3}(?:\.\d{1,3}){3})(?::\d++)?$/iD";
                                                                                            if(!preg_match($pattern, $email)){
                                                                                                  header("Location:employee2.php?email");
                                                                                                        }
					                                                                                      else{
																										        if(!is_numeric($salary))
															                                                   header("Location:employee2.php?salary");
																											      else{
									             	                                            // insertin data in to data base
																								$uname=$_SESSION['user_name'];
                                                                                              $insert="INSERT INTO employee(E_fname,mname,lname,username,password,sex,age,country,city,nationality,
                                                                                              homephonenumber,mobile,email,salary,responsiblity,Managedby)VALUES('$fname','$mname','$lname','$username','$pass','$sex','$age','$country','$city','$nationality',
                                                                                             '$home','$mobile','$email','$salary','$Responsiblity','$uname')";
																							 echo $Responsiblity;
                                                                                              if (!mysql_query($insert,$con))
                                                                                                 {
                                                                                                 die('Error: ' . mysql_error());
                                                                                                  }
                                                                                               header("Location:Employee2.php?employee");
                                                                                   //	 }
																					 }//validating salary
																					}// validating email																      
																			  }//validating mobile number
																			 } //validating home phone number
																		 }//validating age
														    }//for city and nationality
						                 }//check user name exist or not
						             }//end of name
					 }// end of empty check 
				   	
  ?>