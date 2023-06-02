

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
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
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
<div id="all" onfocus="MM_validateForm('id','','R','fname','','R','mname','','R','uname','','R','city','','R','tel','','RisNum','email','','RisEmail','salary','','NisNum','dpt','','R','specfic','','R','paw','','R');return document.MM_returnValue">

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
    <div id="header" ><?php include("InventoryPage.php");?></div>	
<div id="main_container">
   <div id="left_content"  >
<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">
 
<tr>
  <strong> Blood Distribution Form </strong></td>
</tr>
  <tr><td align="right">Patient Name</td><td> <input type="text" name="pname" pattern="[a-zA-Z]{3,10}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters" title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_pname" placeholder='pname'></td></tr>
  <tr><td align="right">Sex</td><td><label>
    <select name="sex" title="select sex" required>
      <option>Male</option>
      <option>Female</option>
    </select>
  </label></td></tr>
  <tr><td align="right">P.blood group</td><td><select name="bgrp" title="select blood group" required>
   <option value="">-Select your bloodgroup-</option>
   <option value="A+">A+</option>
   <option value="A1+">A1+</option>
   <option value="A2+">A2+</option>
   <option value="B+">B+</option>
   <option value="A1B+">A1B+</option>
   <option value="A2B+">A2B+</option>
   <option value="AB+">AB+</option><option value="O+">O+</option>
   <option value="A-">A-</option><option value="A1-">A1-</option>
   <option value="A2-">A2-</option><option value="B-">B-</option>
   <option value="A1B-">A1B-</option><option value="A2B-">A2B-</option>
   <option value="AB-">AB-</option>
   <option value="O-">O-</option></select></td></tr>
   <?php if(isset($_GET['fail'])) echo "<font color=\"red\"><center>This blood type is not available in the stock</center></font>";?>
   <tr><td>R.blood group</td><td><select name="rbgrp" title="select blood group" required>
   <option value="">-Select your bloodgroup-</option>
   <option value="A+">A+</option>
   <option value="A1+">A1+</option>
   <option value="A2+">A2+</option>
   <option value="B+">B+</option>
   <option value="A1B+">A1B+</option>
   <option value="A2B+">A2B+</option>
   <option value="AB+">AB+</option><option value="O+">O+</option>
   <option value="A-">A-</option><option value="A1-">A1-</option>
   <option value="A2-">A2-</option><option value="B-">B-</option>
   <option value="A1B-">A1B-</option><option value="A2B-">A2B-</option>
   <option value="AB-">AB-</option>
   <option value="O-">O-</option></select></td></tr>
   <tr><td align="right">Amount from</td><td> <input type="text" name="acn" min="1" pattern="[0-9]{1,10}[m]{1}[l]{1}" placeholder='amount' required title=""></td></tr>
   <tr><td align="right">Amount</td><td> <input type="text" name="amt" min="1" pattern="[0-9]{1,10}[m]{1}[l]{1}" placeholder='amount' required title=""></td></tr>
   <tr><td align="right">Amount to</td><td> <input type="text" name="to" min="1" pattern="[0-9]{1,10}[m]{1}[l]{1}" value="this" placeholder='amount' required title=""></td></tr>
 <tr><td align="right">Admitted day</td>
	<td ali><input type="date" name="adate" pattern="[date]" required="required" class="rdepartment" title="date value is number only"></td></tr>
		<button type="submit" class="btn btn-primary btn-block" name="submit">transfer</button></form>
		<?php 
if(isset($_POST['submit']))
{
include("Db_Cconnection.php");
$brgp=$_POST['bgrp'];
$from=$_POST['acn'];
$amount = $_POST['amt'];
$to=$_POST['to'];
$price = null;
$pay = null; 
        $select="SELECT * FROM `abld` WHERE amount=$from ";
         $fromm = mysqli_query($con1,$select);
        while($row = mysqli_fetch_array($fromm)){
            $moneyfrom = $row['amount'];  
        }
        
        $select1="SELECT * FROM `abld` WHERE amount=$to ";
       $too = mysqli_query($con1,$select1);
        while($row = mysqli_fetch_array($too)){
            $moneyto = $row['amount'];  
        }

   if($pay == 0) {
       $accnumber = $from;
	   $status = 1;
    if($moneyfrom - $amount >= 1){
     
        if($amount == $price){
            
        $amount1=($moneyfrom - $amount);	

        $amount2=($moneyto + $amount);
        
        include("Db_Cconnection.php");
        
        $result=mysqli_query($con1,"UPDATE `abld` SET amount='$amount1' WHERE amount=$from");
        $result2=mysqli_query($con1,"UPDATE `abld` SET amount='$amount2' WHERE amount=$to");
        
       
		include("db_files/connect.php");
		        $result3=mysqli_query($con,"UPDATE `gondar`.`order` SET account_num='$accnumber',pay_status = $status WHERE order_id=$order_id");
        echo "You have transfer ".$amount." birr to the company" ;
		}else {
		echo "the amount u enter is not much with price";
		}
		}else if {
		echo "insufficient  much with price";
		}
		}else if {
		echo "already distributed";
		}
		}elseif {
		echo "the blood group u enter is not found";
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