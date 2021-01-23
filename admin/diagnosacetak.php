<?php
//include connection file 
require 'pdf/fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=epsikolog','root','');
 
class myPDF extends FPDF
{
    function header(){
        $this -> Image('pdf/logo.png',10,6);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,"Data Diagnosa",0,0,'C');
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
        $this -> Cell(25,10,'ID Konsultasi',1,0,'C');
        $this -> Cell(40,10,'Nama',1,0,'C');
        $this -> Cell(200,10,'Diagnosa',1,0,'C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
        $stmt = $db -> query('SELECT d.id, d.id_konsultasi, a.nama, a.username, a.email, d.diagnosa FROM diagnosa d JOIN konsultasi k ON d.id_konsultasi = k.id JOIN anggota a ON k.id_anggota = a.id;');
        $no = 1;
        while($data = $stmt -> fetch(PDO::FETCH_OBJ)){
            $this -> Cell(10,10,$no,1,0,'C');
            $this -> Cell(25,10,$data -> id_konsultasi,1,0,'L');
            $this -> Cell(40,10,$data -> nama,1,0,'L');
            $this -> Cell(200,10,$data -> diagnosa,1,0,'L');
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