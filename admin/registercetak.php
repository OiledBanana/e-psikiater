<?php
//include connection file 
require 'pdf/fpdf.php';
$db = new PDO('mysql:host=localhost;dbname=epsikolog','root','');
 
class myPDF extends FPDF
{
    function header(){
        $this -> Image('pdf/logo.png',10,6);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,"Data Admin",0,0,'C');
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
        $this -> Cell(20,10,'No',1,0,'C');
        $this -> Cell(40,10,'ID Admin',1,0,'C');
        $this -> Cell(40,10,'Username',1,0,'C');
        $this -> Cell(80,10,'Email',1,0,'C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
        $stmt = $db -> query('select * from admin_register');
        $no = 1;
        while($data = $stmt -> fetch(PDO::FETCH_OBJ)){
            $this -> Cell(20,10,$no,1,0,'C');
            $this -> Cell(40,10,$data -> id,1,0,'L');
            $this -> Cell(40,10,$data -> username,1,0,'L');
            $this -> Cell(80,10,$data -> email,1,0,'L');
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