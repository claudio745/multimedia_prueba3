<?php

require ('fpdf/fpdf.php');

class PDF extends FPDF{
    
    function Header()
    {
        $this->Image('C:\xampp\htdocs\multimedia_prueba3\img\FrikiLuko.png',10,8,35);
        $this->SetFont('Arial', 'B', 20);
        $this->Cell(80);
        $this->Cell(30, 8, 'Ficha medica', 0, 0, 'C', 0);
        $this->Ln(20);
        $this->SetFont('Times', '', 12);
        $this->Cell(35, 18, 'Nombre completo: ', 0, 0, 'C', 0);
        $this->Ln(20);
        $this->Cell(12, 2, 'Rut: ', 0, 0, 'C', 0);
    }

    function Footer()
    {
        $this->Image('C:\xampp\htdocs\multimedia_prueba3\img\logo.png',5,270,35);
    }
}

require_once('conexionCodigo.php');

//Consulta
$consulta = "SELECT * FROM usuario WHERE rut = $Rut LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

$pdf = new PDF();
$pdf->AddPage();
$pdf->Cell(90,-22,$fila['nombres'].' '.$fila['apellido1'].' '.$fila['apellido2'],0,0,'C',0);
$pdf->Ln(10);
$pdf->Cell(45,-18,$fila['rut'],0,0,'C',0);
$pdf->OutPut('fichaMedica.PDF', 'I');
?>