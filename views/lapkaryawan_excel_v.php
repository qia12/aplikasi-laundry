<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataKaryawan.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="5"><h1>Laporan Data Karyawan Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Karyawan</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamain</td>
        <td>Jabatan</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_karyawan; ?></td>
            <td><?php echo $dt->nm_karyawan; ?></td>
            <td><?php echo $dt->alamat; ?></td>
            <td><?php echo $dt->jns_kelamin; ?></td>
            <td><?php echo $dt->jabatan; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>