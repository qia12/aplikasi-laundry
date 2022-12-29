<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataJenis.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="4"><h1>Laporan Data Jenis Paket Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Jenis</td>
        <td>Nama</td>
        <td>Tarif</td>
        <td>Mata Uang</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_jenis; ?></td>
            <td><?php echo $dt->nm_jenis; ?></td>
            <td><?php echo $dt->tarif; ?></td>
            <td><?php echo $dt->mata_uang; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>