 <?php
 	require "fpdf.php";
 	include "process/require/dataconf.php";
 	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',26);
	$pdf->Cell(189,20,'EAS Customs',0,1,'C');
 	$id = $_GET['id'];
 	$sql = "SELECT chargeinvoice.id as id, vehicles.plateNumber as platenumber, vehicles.make as make, vehicles.series as series, personalInfo.firstName,personalInfo.lastName, scopeName, spareparts.name, spareparts.price, chargeinvoice.date, TotalPrice FROM chargeinvoice join vehicles on chargeinvoice.vehicleId = vehicles.id join personalInfo on chargeinvoice.personalId = personalInfo.personalId join spareparts on chargeinvoice.sparePartsId = spareparts.id where chargeinvoice.id = $id";
	$stmt = $connection->prepare($sql); 
	$stmt->execute(); 
	$ci = $stmt -> get_result();
	foreach($ci as $chargeInvoice):
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(59,5,"",0,1);
	$pdf->Cell(130,5,"Sales Invoice",0,0);
	$pdf->Cell(59,5,"Sales Invoice ID : ".$chargeInvoice['id']."",0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->Cell(130,5,"Vehicle Owner : ".$chargeInvoice['firstName']." ".$chargeInvoice['lastName']."",0,0);
	$pdf->Cell(59,5,"Platenumber : ".$chargeInvoice['platenumber']."" ,0,1);
	$pdf->Cell(130,5,"Series : ".$chargeInvoice['series']."",0,0);
	$pdf->Cell(59,5,"Platenumber : ".$chargeInvoice['make']."" ,0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->Cell(189,5,"Release Date : ".$chargeInvoice['date']."",0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(63,20,'',0,0);
	$pdf->Cell(63,20,'Scope Of Work',0,0,'C');
	$pdf->Cell(63,20,'',0,1);
	$pdf->SetFont('Arial','',12);
	$scope = explode(",",$chargeInvoice['scopeName']);
	for ($i = 0; $i < count($scope); $i++){
		$pdf->Cell(63,5,"".$scope[$i]."",0,1);
		$pdf->Cell(63,3,"",0,1);
	}
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(63,20,'',0,0);
	$pdf->Cell(63,20,'Spare Parts',0,0,'C');
	$pdf->Cell(63,20,'',0,1);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(63,5,"".$chargeInvoice['name']."",0,1);
	$pdf->Cell(63,20,"",0,1);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(30,5,"Total :" ,0,0);
	$pdf->SetFont('Arial','U',12);
	$pdf->Cell(29,5,"PHP ".$chargeInvoice['TotalPrice']."" ,0,0);


	endforeach;

	



	$pdf->Output();
 	?>





