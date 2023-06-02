<?php
function time_ago($time){
$time_ago=strtotime($time);
$current_time=time();
$time_diff=$current_time-$time_ago;
$second=$time_diff;
$month=round($second/5270400);
//echo $five_days;
if($month>=1){
return true;//echo "true";;
}else{
return false;//echo "false";
}
}

time_ago("2016-05-11 03:25:32pm");

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
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>
<form>

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
                                                            <div id="header" ><?php include("inventorypage.php");?></div>
                                                             <div id="main_container">
																									 <div style=" margin-left:170px ;"id="left_content">
							 <br><br><h2>Expired Blood</h2> </p>
						
						
							<table >

<tr>
<th>Reg_id</th>
<th>Blood group</th>
<th>1</th>

</tr>
<?php
include('Db_Cconnection.php');
	$sql = "SELECT * FROM `abld` WHERE `status` = 0";
	$result=mysqli_query( $con,$sql);
while($row=mysqli_fetch_array($result)){
if(time_ago($row['date']))
{
echo '<tr>';
echo '<td>'.$row['Reg_id'].'</td>';
echo '<td>'.$row['blood_group'].'</td>';
 ?>
<form action="deletbld.php" method="POST"><input type="hidden" name="id" value="<?php echo $row[0]; ?>">
<td><input type="submit" value="delete" > </td>
</form>
<?php
echo '</tr>';
}

}	
echo '</table>';
	
	echo '<br>';

	
	
	?>	<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
if(isset($_POST['delete']))
{ 
    include('Db_Cconnection.php');

	 $Reg_id= $_POST['Reg_id'];
	 
	 $query= "DELETE FROM `brc`.`abld` where Reg_id = '$Reg_id'";
	   $result=mysqli_query( $con,$query)
			         or die(mysqli_error());
					 if(!$result)
					 {
					 die(mysqli_error());
					 }
					 else{
					 echo "Successfully deleted!!!!!!";}
					// header("location: home1.php");
					 }
}
?>
<p align="left"><h2 align="left" >Screened blood</h2></p>
																									<?php
																									//session_start();

$con=mysqli_connect("localhost","root","","brc");
if(!$con){
	die("unable to connect :".mysqli_error());
}

mysqli_select_db( $con,"brc");
$sql="select *from abld";
$result=mysqli_query( $con,$sql) or die("query error".mysqli_error());
if(!$result)
	die("Unable to query:");
	
	echo  "<table border=1> ";
	echo  "<tr><th>Reg_id<th>Pack_number<th>blood_group<th>amount<th>date<th>status</th></tr>";
while($row=mysqli_fetch_row($result)){
echo  "<tr>";
	for($i=0;$i<count($row);$i++)
	{
   echo  "<td>$row[$i]</td> ";
	
		}
		echo  "</tr> ";
	 }
	 echo "</table>";
		
	echo"<a href='link.html'></a>"; 
?></div>
</body>
</table>
</div>

</fieldset>
</form>
</div></div>

</div>
</body>
</html>

