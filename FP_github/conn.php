
<?php
$con1 = mysqli_connect("localhost","root","","brc");
if (!$con1)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("bank",$con1);
  ?>