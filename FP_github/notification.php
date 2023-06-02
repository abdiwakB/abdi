<?php  
if(!session_id())
session_start();
if($_SESSION['sid']!=session_id() || $_SESSION['status']!="approval team" || !isset($_SESSION['status']))
 {  
 header("location:../common/index1.php");  
 }
?>
	
	
	<script>

$(document).ready(function(){
	
	<?php
	$alerts = mysql_query("SELECT * FROM dnreq WHERE Reg_no='$id'");
	$full=mysql_fetch_assoc($alerts);
	if(($row=mysql_num_rows($alerts))>0)
	echo '
		var post = "";
		
		
		
		$("#loader").fadeIn(400).html(\'<img src="loader.gif" align="absmiddle">&nbsp;<span class="loading">sending</span>\');
		
		
		
		$.ajax({
			
			type:"POST",
			url:"../approve/alerts.php",
			data:"",
			cache:false,
			success:function(msg){
				
				
				$("#loader").hide();
				$("#alertbox").fadeIn("slow").prepend(msg);
				
				$("#alerts").delay(5000).fadeOut("slow");
				
			}
			
		});
		
		
	
					
});

';?>
</script>




<body id="opr">

<div id="alertbox">

</div>
