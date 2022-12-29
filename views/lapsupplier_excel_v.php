<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataSupplier.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="3"><h1>Laporan Data Supplier Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Supplier</td>
        <td>Nama</td>
        <td>Alamat</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_supplier; ?></td>
            <td><?php echo $dt->nm_supplier; ?></td>
            <td><?php echo $dt->alamat; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>