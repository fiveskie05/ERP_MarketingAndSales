<?php 
require('fpdf/fpdf.php');
 include 'myfunctions.php'; 

    date_default_timezone_set("Asia/Manila");
    $date = date("Y-m-d");
    //D B        C O N N E C T I O N
	$link = connection();

// D A I L Y 

if (isset($_POST['submit'])) {

// (width, height, value , border , break , text align)
		 $query = "select date(r_date) as date,DAYNAME(r_date) as dayname,SUM(Product_price) as total from recenttransaction group by date desc";
		 $result = mysqli_query($link,$query) or die(mysqli_error($link));
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('ct_logo.jpg',73,10,70,"C");

$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,7,"",0,1,10);
$pdf->setFont("ARIAL","",11.5);
$pdf->Cell(195,5,"Nasugbu, Batangas",0,1,"C");
$pdf->Cell(195,5,"Call 0922 622 9222",0,1,"C");
$pdf->setFont("ARIAL","",22);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(195,5,"Daily Report",0,1,"C");
$pdf->setFont("ARIAL","",14);
$pdf->Cell(0,7,"",0,1,10);
$pdf->Cell(0,10,"Date: ".$date,0,1,"R");

$pdf->Cell(0,10,"",0,1,10); // PANG BREAK

$pdf->setFont("ARIAL","B",14);
$pdf->Cell(130,10,"Date",1,0,"C");
$pdf->Cell(60,10,"Total Price",1,1,"C");

$pdf->setFont("ARIAL","",14);
	while ($row = mysqli_fetch_array($result)) {
							$date = $row['date'];
							$dayname = $row['dayname'];
							$total = $row['total'];
						 
	$pdf->Cell(130,10,$date,1,0,"C");
	$pdf->Cell(60,10,"Php ".$total.".00",1,1,"C");

	}
$pdf->output();
}





// W E E K L Y     R E P O R T
if (isset($_POST['submit1'])) {

// (width, height, value , border , break , text align)

		 $query = "select year(r_date) as year,month(r_date) as month,WEEKOFYEAR(r_date) as week_num,SUM(Product_price) as total from recenttransaction group by week_num";
		 $result = mysqli_query($link,$query) or die(mysqli_error($link));
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('ct_logo.jpg',73,10,70,"C");

$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,7,"",0,1,10);
$pdf->setFont("ARIAL","",11.5);
$pdf->Cell(195,5,"Nasugbu, Batangas",0,1,"C");
$pdf->Cell(195,5,"Call 0922 622 9222",0,1,"C");
$pdf->setFont("ARIAL","",22);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(195,5,"Weekly Report",0,1,"C");
$pdf->setFont("ARIAL","",14);
$pdf->Cell(0,7,"",0,1,10);
$pdf->Cell(0,10,"Date: ".$date,0,1,"R");

$pdf->Cell(0,10,"",0,1,10); // PANG BREAK

$pdf->setFont("ARIAL","B",14);
$pdf->Cell(130,10,"Week No.",1,0,"C");
$pdf->Cell(60,10,"Total Price",1,1,"C");

$pdf->setFont("ARIAL","",14);
	while ($row = mysqli_fetch_array($result)) {
						$week = $row['week_num'];
						$total = $row['total'];		 
	$pdf->Cell(130,10,$week,1,0,"C");
	$pdf->Cell(60,10,"Php ".$total.".00",1,1,"C");

	}
$pdf->output();
}



// M O N T H L Y     R E P O R T 
if (isset($_POST['submit2'])) {

// (width, height, value , border , break , text align)

	$query1 = "select year(r_date) as year,monthname(r_date) as month, SUM(Product_price) as total1 from recenttransaction group by concat(year,month)";
	
	$result = mysqli_query($link,$query1) or die(mysqli_error($link));
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('ct_logo.jpg',73,10,70,"C");

$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(0,7,"",0,1,10);
$pdf->setFont("ARIAL","",11.5);
$pdf->Cell(195,5,"Nasugbu, Batangas",0,1,"C");
$pdf->Cell(195,5,"Call 0922 622 9222",0,1,"C");
$pdf->setFont("ARIAL","",22);
$pdf->Cell(0,10,"",0,1,10);
$pdf->Cell(195,5,"Monthly Report",0,1,"C");
$pdf->setFont("ARIAL","",14);
$pdf->Cell(0,7,"",0,1,10);
$pdf->Cell(0,10,"Date: ".$date,0,1,"R");

$pdf->Cell(0,10,"",0,1,10); // PANG BREAK

$pdf->setFont("ARIAL","B",14);
$pdf->Cell(130,10,"Date",1,0,"C");
$pdf->Cell(60,10,"Total Price",1,1,"C");

$pdf->setFont("ARIAL","",14);
	 while ($row = mysqli_fetch_array($result)) {
					$date = $row['month']."-".$row['year'];
					$total1 = $row['total1'];	 
	$pdf->Cell(130,10,$date,1,0,"C");
	$pdf->Cell(60,10,"Php ".$total1.".00",1,1,"C");

	}
$pdf->output();
}




// WAIVER
if (isset($_POST['save'])) {
	$pdf = new FPDF();
	$pdf->AddPage();

	$pdf->Image('ct_logo.jpg',73,10,70,"C");

	$pdf->Cell(0,10,"",0,1,10);
	$pdf->Cell(0,10,"",0,1,10);

}



 ?>
