<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataPembelian.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="7"><h1>Laporan Data Pembelian Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Pembelian</td>
        <td>Kode Supplier</td>
        <td>Qty</td>
        <td>Total Pembayaran</td>
        <td>Mata Uang</td>
        <td>Tanggal Pembelian</td>
        <td>Kode Barang</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_pembelian; ?></td>
            <td><?php echo $dt->kd_supplier; ?></td>
            <td><?php echo $dt->qty; ?></td>
            <td><?php echo $dt->total_pembayaran; ?></td>
            <td><?php echo $dt->mata_uang; ?></td>
            <td><?php echo $dt->tgl_pembelian; ?></td>
            <td><?php echo $dt->kd_barang; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>