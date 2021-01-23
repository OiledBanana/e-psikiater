<?php
//include connection file 
require 'pdf/fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=epsikolog','root','');
 
class myPDF extends FPDF
{
    function header(){
        $this -> Image('pdf/logo.png',10,6);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,"Data Obat",0,0,'C');
        $this -> Ln();
        $this -> SetFont('Times','',12);
        $this -> Cell(276,10,'e-psikiater',0,0,'C');
        $this -> Ln(20);
    }
    function footer(){
        $this -> SetY(-15);
        $this -> SetFont('Arial','',8);
        $this -> Cell(0,10,'Hal. '.$this -> PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this -> SetFont('Times','B',12);
        $this -> Cell(10,10,'No',1,0,'C');
        $this -> Cell(25,10,'ID Diagnosa',1,0,'C');
        $this -> Cell(40,10,'Nama',1,0,'C');
        $this -> Cell(40,10,'Nama Obat',1,0,'C');
        $this -> Cell(40,10,'Harga Obat',1,0,'C');
        $this -> Cell(40,10,'Dosis',1,0,'C');
        $this -> Cell(40,10,'Total Harga',1,0,'C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
        $stmt = $db -> query("SELECT b.id, d.id 'id_diagnosa', a.nama, j.id 'id_obat', j.nama_obat, j.harga_obat, b.jumlah 'butuh', SUM(b.jumlah*j.harga_obat) 'total' FROM beli_obat b join diagnosa d ON b.id_diagnosa = d.id JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id JOIN jenis_obat j ON b.id_obat = j.id GROUP BY b.id;");
        $no = 1;
        while($data = $stmt -> fetch(PDO::FETCH_OBJ)){
            $this -> Cell(10,10,$no,1,0,'C');
            $this -> Cell(25,10,$data -> id_diagnosa,1,0,'L');
            $this -> Cell(40,10,$data -> nama,1,0,'L');
            $this -> Cell(40,10,$data -> nama_obat,1,0,'L');
            $this -> Cell(40,10,$data -> harga_obat,1,0,'L');
            $this -> Cell(40,10,$data -> butuh,1,0,'L');
            $this -> Cell(40,10,$data -> total,1,0,'L');
            $this -> Ln();
            $no++;
        }
    }
}

$pdf = new myPDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('L','A4',0);
$pdf -> headerTable();
$pdf -> viewTable($db);
$pdf -> Output();
?>