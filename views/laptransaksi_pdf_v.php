<?php
require('assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $data, $filter)
{
    // Header
    $this->Cell(16.5*12,6,"Laporan Data Transaksi Berdasarkan ".$filter,1,0,"C");
    $this->Ln();
    foreach($header as $col)
        $this->Cell(16.5,6,$col,1,0,"C");
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col){
            $this->Cell(16.5,6,$col,1);
        }
        $this->Ln();
    }
}
}

$pdf = new PDF();
// Column headings
$header = array('Kode Transaksi', 'Kode Karyawan', 'Kode Konsumen', 'Kode Jenis','Berat','Satuan','Tanggal Transaksi','Tanggal Ambil','Diskon','Tanggal Bayar','Mata Uang','Nama Pengguna');
// Data loading
$data = $laporan->result();
$pdf->SetFont('Arial','',6);
$pdf->AddPage();
$pdf->BasicTable($header,$data,$filter);
$pdf->AddPage();
$pdf->Output();
?>