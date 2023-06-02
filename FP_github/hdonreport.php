<?php
session_start();
 if(!isset($_SESSION['user_id']))
	{
	header("Location:home.php");
	  }
?>
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
<style type="text/css">
 input{
 width:200px;
 height:30px;
 }
</style>
<link rel="stylesheet" type="text/css" href="CSS/cs.css" />
<link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
<title>report</title>
</head>
<body>	
<div id="all">
 <img src="chh.JPG" name="slide" width="1002" height="638" />


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
	
		<?php include('hospitalpage.php');?>
  </div>
	<div id="main_container">
																								 <div style=" margin-left:170px ;"id="left_content">
																								 
																						
																						 <?php
require('fpdf.php');
include("conection.php");

//most of the entries here are self explanatory, PHP advance scripting knowledge preferred. If any doubts please let us know through your comments in http://mistonline.in/wp/export-mysql-database-table-to-pdf-using-php-2/
$d=date('d_m_Y');
class PDF extends FPDF
{

function Header()
{
	
	$name="List Of registered donors";
    $this->SetFont('Arial','B',15);
    $this->Cell(80);
	$this->SetFont('Arial','B',18);
	$this->Cell(120,10,"Report Generated on ".date('d-m-Y'),0,0,'C');
	
	$this->SetFont('Arial','B',10);
    $this->Ln(5);
}
function Footer()
{
   $this->Cell(130);
   $this->SetFont('Arial','B',8);
   $this->Cell(40,40,"Signature: --------------------------- ");  
   $this->Ln(6);
   $this->Cell(130);
   $this->Cell(40,40,"Date: ---------------------------------- ");  
   $this->Ln(30);
   $this->Cell(30);
   $this->Cell(70,10,"Report Genereated By Gondar blood bank management system on ".date('F-jS-Y , H:i'),0,0,'C');
}
//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 
 $this->Cell(20);
$this->SetFillColor(25,190,10);
$this->SetDrawColor(108,0,0);
$w=array(15,15,15,15,15,25,15,15,15,15,15,15);

	//Header
   
	 $this->Cell(40);
	$this->Cell(30,20,"List of registered donors",0,0,'C');
	$this->Ln(18);
	//Header
	 $this->Cell(20);
	for($i=0;$i<count($header);$i++)
     $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	//Data
	foreach ($data as $eachResult) 
	{ //width 
 	 	 	 $this->Cell(20);				 	
		
		$this->Cell(15,6,$eachResult["fname"],1);
		$this->Cell(15,6,$eachResult["mname"],1);
		$this->Cell(15,6,$eachResult["lname"],1);		
		$this->Cell(15,6,$eachResult["sex"],1);
		$this->Cell(15,6,$eachResult["Age"],1);			
		$this->Cell(25,6,$eachResult["Date"],1);
		$this->Cell(15,6,$eachResult["zone"],1);
		$this->Cell(15,6,$eachResult["city"],1);         
		$this->Cell(15,6,$eachResult["woreda"],1);
		$this->Cell(15,6,$eachResult["kebele"],1);
		$this->Cell(15,6,$eachResult["bloodgroup"],1);
		$this->Ln();
		 	 	 	 	
	}
}


}
 

$pdf=new PDF();
$header=array('fname','mname','lname','Sex','Age ','Date','zone','city','woreda','kebele','bloodgroup');
//Data loading
//*** Load MySQL Data ***//
$objConnect = mysqli_connect("localhost","root","","brc") or die("Error:Please check your database username & password");
$objDB = mysqli_select_db($objConnect,"brc");
$strSQL = "SELECT * FROM drreg";
$objQuery = mysqli_query($objConnect,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);
}
//************************//

function forme()

{
$d=date('d_m_Y');
echo "Download it here <a href=".$d.".pdf>DOWNLOAD</a>";
}

$pdf->SetFont('Arial','',6);

//*** Table 1 ***//
$pdf->AddPage();
$pdf->Image('ch66.jpg',10,8,33);
$pdf->Cell(150);
$pdf->Ln(35);
$pdf->BasicTable($header,$resultData);
forme();
$pdf->Output("$d.pdf","F");?>


																						</div>
	   
	</div>
	<div id="footer" ><center>
	  <font color="white">Copyright &copy; 2016 Gondar Blood Bank </font>
	</center></div>
</div>

  </body>
</html>