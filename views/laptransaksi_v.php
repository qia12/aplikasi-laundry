<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script> 

    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:false,modal:true,border:'thin',buttons:'#dlg-buttons'" title="Laporan Transaksi">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <div style="margin-bottom:10px">
                <p><input name="filter"
                id="kode" type="radio" checked="checked">Berdasarkan Kode  Transaksi: </p>
                <input name="kd_transaksi" id="kd_transaksi" class="easyui-textbox" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <p><input name="filter"
                id="tanggal" type="radio">Berdasarkan Tanggal: </p>
                <input name="tgl_transaksi" id="tgl_transaksi" class="easyui-textbox" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-excel" onclick="Laporan('excel')">Cetak Excel</a>
        
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-pdf" onclick="Laporan('pdf')">Cetak PDF</a>
    </div>
    <script type="text/javascript">
        function Laporan(ket){
            if(document.getElementById('kode').checked==true){
                var datalaporan="filter=kode&kd_transaksi="+document.getElementById('kd_transaksi').value;
            }
            if(document.getElementById('tanggal').checked==true){
                var datalaporan="filter=tanggal&tgl_transaksi="+document.getElementById('tgl_transaksi').value;
            }
            if(ket=='excel'){
                window.open('<?php echo base_url(); ?>Laptransaksi/cetakexcel?'+datalaporan);
            }else{
                window.open('<?php echo base_url(); ?>Laptransaksi/cetakpdf?'+datalaporan);
            }
        }
    </script>