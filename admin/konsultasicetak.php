<?php
//include connection file 
require 'pdf/fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=epsikolog','root','');
 
class myPDF extends FPDF
{
    function header(){
        $this -> Image('pdf/logo.png',10,6);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,"Data Konsultasi",0,0,'C');
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
        $this -> Cell(25,10,'ID Anggota',1,0,'C');
        $this -> Cell(40,10,'Nama',1,0,'C');
        $this -> Cell(30,10,'Username',1,0,'C');
        $this -> Cell(55,10,'Email',1,0,'C');
        $this -> Cell(80,10,'Keluhan',1,0,'C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
        $stmt = $db -> query('SELECT k.id, k.id_anggota, a.nama, a.username, a.email, k.keluhan FROM konsultasi k JOIN anggota a ON k.id_anggota = a.id;');
        $no = 1;
        while($data = $stmt -> fetch(PDO::FETCH_OBJ)){
            $this -> Cell(10,10,$no,1,0,'C');
            $this -> Cell(25,10,$data -> id_anggota,1,0,'L');
            $this -> Cell(40,10,$data -> nama,1,0,'L');
            $this -> Cell(30,10,$data -> username,1,0,'L');
            $this -> Cell(55,10,$data -> email,1,0,'L');
            $this -> Cell(80,10,$data -> keluhan,1,0,'L');
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