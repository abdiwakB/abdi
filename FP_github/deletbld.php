
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
<title>aprove</title>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<fiedset>
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
    <div id="header">
	<?php include('inventorypage.php');?>
	</div>
	<div id="main_container">
	 
		
		<form action="deletbld.php" method="POST"><input type="hidden" name="id" value="<?php echo $row[0]; ?>"> 
		  <?php
$id=$_POST['id'];
$con = mysqli_connect("localhost","root","","brc");
if (!$con){
  die('Could not connect: ' . mysqli_error());
}
mysqli_select_db( $con,"brc");
$result = mysqli_query( $con,"SELECT * FROM abld WHERE Reg_id='$id'");
$row = mysqli_fetch_array($result);
?>
<div class="wrapper">
<div> 	   
<?php
	     
       if(isset($_POST['select'])){
       include('Db_Cconnection.php');				
       $id=$_POST['id'];
       $fname=$_POST['bgrp'];
         {   		
       $sql="delete from abld where Reg_id='$id';";
       $result=mysqli_query( $con,$sql);
       if(!$result)
       die("unable to insert values".mysqli_error());
       echo "<h2 align=center>Successfully deleted!!</h2>";
       }	
         }else{
   ?>    

<form name="f" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<h3 align="center"> delete form</h3>
<table width="500"  cellspacing="3" cellpadding="6" class="loginVerticalPanel" align="center">
<tr>
  <td align="right">Reg_id</td>
<td><input type="text"name="id" value="<?php echo $row[0];?>" readonly bgcolor="yellow"></td>
</tr>
<tr>
  <td align="right">blood_group</td>
<td><input type="text"name="bgrp" value="<?php echo $row[2];?>"></td>
</tr>
     <tr align="center"/>
<td colspan="3"/>
 <input type="submit" name="select"value="delete"onclick="return as();">

</td>
</tr>
</table>
 </form>
 <?php } ?>
</div>
		  
	 </div></div>
														
</body>
</html>
