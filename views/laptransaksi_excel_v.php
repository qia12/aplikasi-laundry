<?php 
Header("Content-Type: application/vnd-ms-excel");
Header("Content-Disposition: attachment; filename=DataTransaksi.xls");
?>
<table Border="1" width="100%">
    <tr Align="center">
        <td colspan="12"><h1>Laporan Data Transaksi Berdasarkan <?php echo $filter; ?></h1></td>
    </tr>
    <tr Align="center">
        <td>Kode Transaksi</td>
        <td>Kode Karyawan</td>
        <td>Kode Konsumen</td>
        <td>Kode Jenis</td>
        <td>Berat</td>
        <td>Satuan</td>
        <td>Tanggal Transaksi</td>
        <td>Tanggal Ambil</td>
        <td>Diskon</td>
        <td>Tanggal Bayar</td>
        <td>Mata Uang</td>
        <td>Nama Pengguna</td>
    </tr>
    <?php 
        foreach($laporan->result() as $dt){
    ?>
        <tr>
            <td><?php echo $dt->kd_transaksi; ?></td>
            <td><?php echo $dt->kd_karyawan; ?></td>
            <td><?php echo $dt->kd_konsumen; ?></td>
            <td><?php echo $dt->kd_jenis; ?></td>
            <td><?php echo $dt->berat; ?></td>
            <td><?php echo $dt->satuan; ?></td>
            <td><?php echo $dt->tgl_transaksi; ?></td>
            <td><?php echo $dt->tgl_ambil; ?></td>
            <td><?php echo $dt->diskon; ?></td>
            <td><?php echo $dt->tgl_bayar; ?></td>
            <td><?php echo $dt->mata_uang; ?></td>
            <td><?php echo $dt->nama_pengguna; ?></td>
        </tr>
    <?php
        }
    ?>  
</table>