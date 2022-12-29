<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script> 

    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:false,modal:true,border:'thin',buttons:'#dlg-buttons'" title="Laporan Supplier">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <div style="margin-bottom:10px">
                <p><input name="filter"
                id="kode" type="radio" checked="checked">Berdasarkan Kode Supplier: </p>
                <input name="kd_supplier" id="kd_supplier" class="easyui-textbox" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <p><input name="filter"
                id="nama" type="radio">Berdasarkan Nama Supplier: </p>
                <input name="nm_supplier" id="nm_supplier" class="easyui-textbox" style="width:100%">
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
                var datalaporan="filter=kode&kd_supplier="+document.getElementById('kd_supplier').value;
            }
            if(document.getElementById('nama').checked==true){
                var datalaporan="filter=nama&nm_supplier="+document.getElementById('nm_supplier').value;
            }
            if(ket=='excel'){
                window.open('<?php echo base_url(); ?>Lapsupplier/cetakexcel?'+datalaporan);
            }else{
                window.open('<?php echo base_url(); ?>Lapsupplier/cetakpdf?'+datalaporan);
            }
        }
    </script>