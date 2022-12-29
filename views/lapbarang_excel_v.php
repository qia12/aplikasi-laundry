<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataBarang.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="4"><h1>Laporan Data Barang Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Barang</td>
        <td>Nama</td>
        <td>Jumlah Stok</td>
        <td>Satuan</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_barang; ?></td>
            <td><?php echo $dt->nm_barang; ?></td>
            <td><?php echo $dt->jml_stok; ?></td>
            <td><?php echo $dt->satuan; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>