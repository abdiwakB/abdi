<?php session_start();//include("menu.php");?>
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
<style type="text/css">
<script src="validator.js"></script>
 input{
 width:300px;
 height:40px;
 }
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@'&&'.com');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<div id="all">
    <img src="1.JPG" name="slide" width="1002" height="638" />
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
    <div id="header" ><?php include("openpage.php");?></div>
	
<div id="main_container">
   <div id="left_content"  >
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onSubmit="MM_validateForm('fname','','R','lname','','R','uname','','R','phon','','RisNum','email','','R','age','','RisNum');return document.MM_returnValue">

	<div class="row">
		<div class="col-md-4 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-body animated shake">
					<form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<div class="form-group">
						  <label for="email">hic:</label>
						  <input type="number" class="form-control"  name="hic" id="id"  placeholder="Enter user id">
						</div>
					 <div class="form-group">
						  <label for="email">Reg_id:</label>
						  <input type="number" class="form-control"  name="Reg_id" id="id"  placeholder="Enter order id">
						</div>
						<div class="form-group">
						  <label for="acn">from blood:</label>
						  <input type="text" class="form-control" name="acn" id="accnumber"  placeholder="Enter account number">
						</div>
						<div class="form-group">
						  <label for="amt">Amount:</label>
						  <input type="number" class="form-control" name="amt"id="amt"   placeholder="Enter amount">
						</div>
						<div class="form-group">
						  <label for="acn">to blood:</label>
						  <input type="number" class="form-control" name="to" id="to" value="10" placeholder="Enter account number">
						</div>
						<button type="submit" class="btn btn-primary btn-block" name="submit">transfer</button>
					</form>
			 	</div>	
			</div><!--col-sm-offset-1-->
		</div>
		
		<?php 
if(isset($_POST['submit']))
{
include("Db_Cconnection.php");
$id=$_POST['hic'];
$order_id=$_POST['Reg_id'];
$from=$_POST['acn'];
$amount = $_POST['amt'];
$to=$_POST['to'];
$amount = null;
$pay = null;
$query1 = "SELECT * FROM `brc`.`bldis` WHERE hic='$id'";

$run1 = mysql_query($query1);

$num1 = mysql_num_rows($run1);
    if($num1 != 0 ){
	
$query = "SELECT * FROM `brc`.`abld` WHERE Reg_id='$order_id'";

$run = mysql_query($query);

$num = mysql_num_rows($run);
    if($num != 0 ){
 while ($row = mysql_fetch_array($run)) {
     
      $amount = $row['amount'];
	  $pay = $row['status'];
	  }
   include("conn.php"); 
        $select="SELECT * FROM `bank`.`bank_account` WHERE blood_group=$from ";
         $fromm = mysql_query($select);
        while($row = mysql_fetch_array($fromm)){
            $moneyfrom = $row['balance'];  
        }
        
        $select1="SELECT * FROM `bank`.`bank_account` WHERE blood_group=$to ";
       $too = mysql_query($select1);
        while($row = mysql_fetch_array($too)){
            $moneyto = $row['balance'];  
        }

   if($pay == 0) {
       $accnumber = $from;
	   $status = 1;
    if($moneyfrom - $amount >= 1){
     
        if($amount == $amount){
            
        $amount1=($moneyfrom - $amount);	

        $amount2=($moneyto + $amount);
        
        include("conn.php");
        
        $result=mysql_query("UPDATE `bank`.`bank_account` SET balance='$amount1' WHERE blood_group=$from");
        $result2=mysql_query("UPDATE `bank`.`bank_account` SET balance='$amount2' WHERE blood_group=$to");
        
       
		include("Db_Cconnection.php");
		        $result3=mysql_query($con,"UPDATE `brc`.`abld` SET blood='$accnumber',status = $status WHERE Reg_id=$order_id");
        echo "You have transfer ".$amount." birr to the company" ;
		}else {
		echo "the amount u enter is not much with price";
		}
		}else {
		echo "insufficient balance much with price";
		}
		}else {
		echo "already payed";
		}
		}else {
		echo "the order u enter is not found";
		}
		}else {
		echo "there is not costumer found with hic :".$id;
		}
		}
		?>
		
		</div>
		</div>
<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<div id="footer">
 copy write &copy; Gondar Printing EnterPrise System 2016.
</div>
	</body>
</html>