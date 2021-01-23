<?php
require('pdf/fpdf.php');
include 'fungsi/keamanan.php';

//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'epsikolog');

//get invoices data
$query = mysqli_query($con,"SELECT b.id, now() 'sekarang' , CONCAT('I-','EP-',d.id) 'id_diagnosa', CONCAT('A-','EP-',a.id) 'id_anggota' ,a.nama, a.username, a.email, j.id 'id_obat', j.nama_obat, j.harga_obat, b.jumlah 'butuh', SUM(b.jumlah*j.harga_obat) 'total' FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id WHERE username = '".$_SESSION['username']."' GROUP BY b.id;");
$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'E-PSIKIATER',0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'107B Babakan Ciamis',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Bandung, Jawa Barat 40257',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,$invoice['sekarang'],0,1);//end of line

$pdf->Cell(130	,5,'Phone : +628817819040',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,$invoice['id_diagnosa'],0,1);//end of line

$pdf->Cell(130	,5,'Email  : cs@epsikiater.org',0,0);
$pdf->Cell(25	,5,'Customer ID',0,0);
$pdf->Cell(34	,5,$invoice['id_anggota'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['nama'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['username'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['email'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Nama Obat',1,0);
$pdf->Cell(25	,5,'Butuh',1,0);
$pdf->Cell(34	,5,'Total',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query = mysqli_query($con," SELECT j.id 'id_obat', j.nama_obat, j.harga_obat, b.jumlah 'butuh', SUM(b.jumlah*j.harga_obat) 'total' FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id WHERE username = '".$_SESSION['username']."' GROUP BY b.id ; ");
$tax = 0; //total tax
$amount = 0; //total amount

//display the items
while($item = mysqli_fetch_array($query)){
	$pdf->Cell(130	,5,$item['nama_obat'],1,0);
	//add thousand separator using number_format function
	$pdf->Cell(25	,5,number_format($item['butuh']),1,0);
	$pdf->Cell(34	,5,number_format($item['total']),1,1,'R');//end of line
	//accumulate tax and amount
	$tax += $item['butuh'];
	$amount += $item['total'];
}

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total Due',0,0);
$pdf->Cell(10	,5,'IDR.',1,0);
$pdf->Cell(24	,5,number_format($amount),1,1,'R');//end of line





















$pdf->Output();
?>