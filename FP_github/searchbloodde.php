<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style3 {color: #400040}
-->
</style>
</head>
<body bgcolor="">
<script type="text/javascript">
<!--
var image1=new Image()
image1.src="logo1.jpg"
var image2=new Image()
image2.src="logo6.jpg"
var image3=new Image()
image3.src="logo7.jpg"      
</script>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
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
<div id="all">
  <div id="header"><?php include("InventoryPage.php");?></div>
  <div id="main_container">
    <div id="left_content">
      <?php
      session_start();
      $con = mysqli_connect("localhost","root","","brc");
      if(!$con){
        die("unable to connect :".mysqli_error());
      }
      mysqli_select_db($con,"brc");
      $sql="select Reg_Id from abld";
      $res=mysqli_query($con,$sql) or die("query error".mysqli_error($con));
      ?>
      <form action="blooddelete.php" method="post">
        <p>
          <tr>
            <td bordercolor="#993366" bgcolor="#9900CC">
              <label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="style1">
                  <span class="style3">Search blood</span>&nbsp;&nbsp;
                </span>
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                &nbsp;&nbsp; &nbsp;
                <span class="style1">&nbsp;<span class="style3">Reg.Id</span></span>
              </label>
              <span class="style1">
                <select name="select">
                  <?php
                  while($row=mysqli_fetch_array($res)){
                    echo "<option value=".$row['Reg_Id'].">".$row['Reg_Id']."</option>";
                  }
                  ?>
                </select>
              </span>
            </td>
            <p>
              <input name="Submit" type="submit" align="center" class="style1" value="Search">
            </p>
          </tr>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
