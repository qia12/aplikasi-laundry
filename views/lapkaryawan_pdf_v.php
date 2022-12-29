<?php
require('assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $data, $filter)
{
    // Header
    $this->Cell(35*5,7,"Laporan Data Karyawan Berdasarkan ".$filter,1,0,"C");
    $this->Ln();
    foreach($header as $col)
        $this->Cell(35,7,$col,1,0,"C");
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col){
            $this->Cell(35,6,$col,1);
        }
        $this->Ln();
    }
}
}

$pdf = new PDF();
// Column headings
$header = array('Kode Karyawan', 'Nama', 'Alamat', 'Jenis Kelamin', 'Jabatan');
// Data loading
$data = $laporan->result();
$pdf->SetFont('Arial','',10);
$pdf->AddPage();
$pdf->BasicTable($header,$data,$filter);
$pdf->AddPage();
$pdf->Output();
?>