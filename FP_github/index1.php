<?php
require('fpdf.php');
//most of the entries here are self explanatory, PHP advance scripting knowledge preferred. If any doubts please let us know through your comments in http://mistonline.in/wp/export-mysql-database-table-to-pdf-using-php-2/
$d=date('d_m_Y');
//Modified by mistonline team

class PDF extends FPDF
{

function Header()
{
    //Logo
	
	$name="List Of ALkan University College User";
    $this->SetFont('Arial','B',15);
    //Move to the rightecho"</center>";
    $this->Cell(80);
    //Title
	$this->Cell(30,60,"List Of ALkan University College User",0,0,'C');
	//$this->Cell(150);
		$this->SetFont('Arial','B',10);
	   $this->Cell(120,10,"Report Generated on ".date('d-m-Y'),0,0,'C');
	
	$this->SetFont('Arial','B',10);
	//$this->Cell(10,60,"Test Place 1",0,0,'C');
	//$this->Cell(-10,70,"Test Place 2",0,0,'C');
    //Line break
    $this->Ln(20);
}

//Page footer
function Footer()
{
   $this->Cell(130);
   $this->SetFont('Arial','B',8);
     //$name="ALkan University College";
    // $this->Cell(40,40,"Data Generated For $name on ".date('d-m-Y'),0,0,'C');  
	    $this->Cell(40,40,"Signature: --------------------------- ");  
	    $this->Ln(6);
		$this->Cell(130);
	    $this->Cell(40,40,"Date: ---------------------------------- ");  
		
		    $this->Ln(30);
		$this->Cell(30);

	 $this->Cell(70,10,"Report Genereated By Alkan Student Information Mangement System on ".date('F-jS-Y , H:i'),0,0,'C');
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
 $this->Cell(40);
$this->SetFillColor(25,190,10);
$this->SetDrawColor(108,0,0);
$w=array(25,15,25,15,15,10,10,10,15,15,15,15,15);

	//Header
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	//Data
	foreach ($data as $eachResult) 
	{ //width 
 	 	 	 $this->Cell(40);				 	
		$this->Cell(25,6,$eachResult["full_name"],1);
		$this->Cell(15,6,$eachResult["user_name"],1);
		$this->Cell(25,6,$eachResult["user_email"],1);
		$this->Cell(15,6,$eachResult["address"],1);
		$this->Cell(15,6,$eachResult["country"],1);

		$this->Ln();
		 	 	 	 	
	}
}


}
echo"</center>";

$pdf=new PDF();
$header=array('Full Name','User Name','User Email','Address','Country');
$header2=array('cccccFull Name','ccccUser Name','ccccUser Email','cccAddress','ccccCountry');

//Data loading
//*** Load MySQL Data ***//
$objConnect = mysql_connect("localhost","root","") or die("Error:Please check your database username & password");
$objDB = mysql_select_db("bdu");
$strSQL = "SELECT * FROM users ";
$strSQL2 = "SELECT * FROM course ";
$objQuery = mysql_query($strSQL);
$objQuery2 = mysql_query($strSQL2);
$resultData = array();
$resultData2 = array();
for ($i=0;$i<mysql_num_rows($objQuery);$i++) 
{
	$result = mysql_fetch_array($objQuery);
	array_push($resultData,$result);
}
for ($i=0;$i<mysql_num_rows($objQuery2);$i++) 
{
	$result = mysql_fetch_array($objQuery2);
	array_push($resultData2,$result);
}
//************************//


function forme()

{
$d=date('d_m_Y');
echo "Data generated succesfully. Download it here <a href=".$d.".pdf>DOWNLOAD</a>";
}


$pdf->SetFont('Arial','',6);

//*** Table 1 ***//
$pdf->AddPage();
$pdf->Image('logo.jpeg',10,8,33);
$pdf->Cell(150);
$pdf->Ln(35);
$pdf->BasicTable($header,$resultData);
$pdf->BasicTable($header2,$resultData2);
$pdf->BasicTable($header,$resultData);
$pdf->BasicTable($header2,$resultData2);
$pdf->BasicTable($header,$resultData);



forme();
$pdf->Output("$d.pdf","F");?>

