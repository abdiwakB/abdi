
<?php require_once('Db_Cconnection.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view feedback</title>
 <style type="text/css">
 body {
	background-image: url(image/bodybg.jpg);
	background-color: #CC9999;
}
 .style2 {color: #CC0099}
 </style>
</head>
<body>
<?php
mysql_select_db($brc, $con);
$uploadDir = 'C:/wamp/www/';
if(isset($_POST['upload']))
{
$fileName = $_FILES['userfile']['name'];
//echo  $fileName ;
$tmpName = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
?>
<?php

//include '../library/opendb.php';

if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);
$filePath = addslashes($filePath);
} 

$query = "INSERT INTO upload(name, size, type, path ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$filePath')";

mysql_query($query) or die('Error, query failed : ' . mysql_error()); 

//include '../library/closedb.php';

echo "<br>Files uploaded<br>";
echo $fileName;



// get the file extension first
$ext = substr(strrchr($fileName, "."), 1); 

// make the random file name
$randName = md5(rand() * time());

// and now we have the unique file name for the upload file
$filePath = $uploadDir . $randName . '.' . $ext;

$result = move_uploaded_file($tmpName, $filePath);


// ... same code as before
}
?>
      <form method="post" enctype="multipart/form-data">
        <pre><table width="300" align="center" background="image/1.jpg"  class="ed" bgcolor="skyblue">
    <tr align="center">
      <td colspan="3"><p><input type="hidden" name="MAX_FILE_SIZE" value="20000000000000000000000">
Select the file  to upload:<input name="userfile" type="file" class="ed" id="userfile"></p><p>
</p><input name="upload" type="submit" class="ed" id="upload" value=" Upload "><h1 class="style2">&nbsp;</h1></td></tr>
    
  </table><p>
    <input type="hidden" name="MM_insert" value="login">
</p></pre>
      </form>
<?php
//include 'library/opendb.php';

$query = "SELECT name FROM upload";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($name) = mysql_fetch_array($result))
{
?>
     <a href="<?php echo"$name";?>"> 
      <?php echo " $name";?></a> <br> 
      <?php 
}
}
//include 'library/closedb.php';

?>

                          </div>
                      </div>
 
           
</body>
</html>
