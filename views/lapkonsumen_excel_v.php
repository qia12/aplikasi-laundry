<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataKonsumen.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="3"><h1>Laporan Data Konsumen Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Konsumen</td>
        <td>Nama</td>
        <td>Alamat</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_konsumen; ?></td>
            <td><?php echo $dt->nm_konsumen; ?></td>
            <td><?php echo $dt->alamat; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>