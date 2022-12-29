<?php
require('assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $data, $filter)
{
    // Header
    $this->Cell(25*7,10,"Laporan Data Pembelian Berdasarkan ".$filter,1,0,"C");
    $this->Ln();
    foreach($header as $col)
        $this->Cell(25,10,$col,1,0,"C");
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col){
            $this->Cell(25,6,$col,1);
        }
        $this->Ln();
    }
}
}

$pdf = new PDF();
// Column headings
$header = array('Kode Pembelian', 'Kode Supplier', 'qty', 'total_pembayaran','mata_uang','tgl_pembelian','kd_barang');
// Data loading
$data = $laporan->result();
$pdf->SetFont('Arial','',8);
$pdf->AddPage();
$pdf->BasicTable($header,$data,$filter);
$pdf->AddPage();
$pdf->Output();
?>