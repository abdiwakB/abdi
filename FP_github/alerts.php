<?php  
if(!session_id())
session_start();
if($_SESSION['sid']!=session_id() || $_SESSION['status']!="approval team" || !isset($_SESSION['status']))
 {  
 header("location:../common/index1.php");  
 }
?>

	<?php
include('../connect.php');

$alerts = mysql_query("SELECT * FROM dnreq WHERE Reg_no='$id'");
	$full=mysql_fetch_assoc($alerts);
	if(($row=mysql_num_rows($alerts))>0)
	{
	mysql_query("UPDATE requisition SET active = 1 WHERE active = '0'") or die(mysql_error());
	}

//include('reciv.php');
?>
<div id="alerts">

<audio id="audioplayer" autoplay=true>
    <source src="../common/sound/ping.mp3" type="audio/mpeg">
   <source src="../common/sound/ping.ogg" type="audio/ogg">
  Your browser does not support the audio element. </audio>
<li>

<img src="../common/icons/i.jpg" align="top" style="float:left; margin-right:2px;" />

<div><?php echo "you have ".mysql_num_rows($alerts)." new requests."?></div>
</li>
</div>
<?php //echo substr($full['message'],0,10)?>