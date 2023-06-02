<?php
 $id=$_POST['paw'];			
include('Db_Cconnection.php');
$sql="delete from abld
 where Reg_id ='$id';";
$res=mysql_query($sql) or die("query error".mysql_error());
echo "successfully deleted";
mysql_close($con);
?>