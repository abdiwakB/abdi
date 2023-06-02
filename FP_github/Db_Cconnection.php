
<?php
$con = mysqli_connect("localhost","root","","brc");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
  mysqli_select_db($con,"brc");
  ?>