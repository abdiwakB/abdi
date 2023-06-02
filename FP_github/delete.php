<?php
function time_ago($time){
$time_ago=strtotime($time);
$current_time=time();
$time_diff=$current_time-$time_ago;
$second=$time_diff;
$five_days=round($second/432000);
//echo $five_days;
if($five_days>=1){
return true;//echo "true";;
}else{
return false;//echo "false";
}
}

time_ago("2016-06-11 03:25:32pm");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gondar Printing Enterprise</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<!--css style -->
		<style>
	  .form-control , .btn{
		border-radius:1px;
		}
	
		.navbar-nav{
		margin-left:200px;
		}
		.jumbotron{
		padding:5px;
		}
		
		
		</style>
		
	</head>
	<body>
	<?php
require('db_files/connect.php');
?><div class="content">
	<img src="11.jpg" alt="company logo" width="100%" height="100">
	<!--navigation bar -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">Call Us Anytime: 0581111730</a>
			</div>
			<div>
			  <ul class="nav navbar-nav">
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="aboutus.html">about us</a></li>
				<li><a href="order.php">Order Printing</a></li>
				<li><a href="service.html">Services</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contact</a></li>
				
			  </ul>
			</div>
		  </div>
		</nav>
	<!--navigation bar end here
	<img src="tree.PNG" alt="company logo" width="100%" height="300">-->
	<div class="row">
	
	<div class="col-md-4">
	<nav class="main-nav">
	      <ul class="main-nav-ul">
	           <li><a href="delete.php">DELETE ORDER<span class="sub-arrow"></span></a>
	              <li><a href="service.php">service</a></li>  
	       <li><a href="receipt.php">RECEIPT</a></li>
		   <li><a href="new1.php">See feedback</a></li>
	</ul>
	</nav>
	</div>
	<div class="col-md-4" style="margin-top:15px;">
            <div class="panel panel-default">
				<div class="panel-body">
					<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="form-group">
						  <label for="pwd">order_id:</label>
						  <input type="number" class="form-control" name="order_id" id="order_id"  required x-moz-errormessage="Please Enter valid order_id and must be number" title="order_id must be number."  >
						</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block" name="delete">Delete</button>
					</form>
				</div>	
			</div><!--col-sm-offset-1-->
	<div class="col-md-4 col-sm-offset-2">
	<table class="table table-striped" align="center" border="1" cellspacing="0" width="">


<tbody>
<tr>
<th>order_id</th>
<th>number</th>
<th>Quantity</th>
<th>Job Name</th>
<th>Email</th>
<th>Color Option</th>
<th>Size</th>
<th>RECEIPT</th>
<th>file</th>
<th>total price</th>
<th>account number</th>
<th>Payment Status</th>
</tr>
<?php
require('db_files/connect.php');
$query="SELECT * FROM `gondar`.`order`";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
$pay = $row['pay_status'];
echo '<tr>';
echo '<td>'.$row['order_id'].'</td>';
echo '<td>'.$row['oname'].'</td>';
echo '<td>'.$row['quantity'].'</td>';
echo '<td>'.$row['jobname'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['color'].'</td>';
echo '<td>'.$row['size'].'</td>';
echo '<td><a href="receipt.php?id='.$row['order_id'].'">receipt </td>';
echo'<td>';?> <a href="<?php echo $row['file']?>">dowmload</a> <?php echo'</td>';
echo '<td>'.$row['total_price'].'</td>';
echo '<td>'.$row['account_num'].'</td>';
if($pay == 1){
echo "<td> Payied </td>";
}else
echo "<td> notPayied</td>";

echo '</tr>';
		  }
?>
</tbody>
</table>
</div>
<table>

<tr>
<th>id</th>
<th>Order name</th>
</tr>

	<?php
require_once('db_files/connect.php');
	$sql = "SELECT * FROM `order` WHERE `pay_status` = 0";
	$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
if(time_ago($row['date']))
{
echo '<tr>';
echo '<td>'.$row['order_id'].'</td>';
echo '<td>'.$row['oname'].'</td>';
echo '</tr>';
}

}	
	
	
	
	
	?>	
	
</table>	
		<?php


if(isset($_POST['delete']))
{ 
    
	 $order_id= $_POST['order_id'];
	 
	 $query= "DELETE FROM`gondar`.`order` where order_id = '$order_id'";
	   $result=mysqli_query($con,$query)
			         or die(mysqli_error($con));
					 if(!$result)
					 {
					 die(mysqli_error($con));
					 }
					 echo "Successfully delated!!!!!!";
					// header("location: home1.php");
					 }

?>
		

		</div>
</div>
<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<div id="footer">
 &copy; Gondar 2016 Printing EnterPrise System .
</div>
	</body>
</html>