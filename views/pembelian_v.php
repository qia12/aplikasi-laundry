<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/config.js"></script>
    
    <table id="dg" title="Data Pembelian" class="easyui-datagrid" style="width:100%;height:550px"
            url="<?php echo base_url(); ?>Pembelian/getpembelian"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="kd_pembelian" width="50">Kode Pembelian</th>
                <th field="kd_supplier" width="50">Kode Supplier</th>
                <th field="qty" width="50">Qty</th>
                <th field="total_pembayaran" width="50">Total Pembayaran</th>
                <th field="mata_uang" width="50">Mata Uang</th>
                <th field="tgl_pembelian" width="50">Tanggal Pembelian</th>
                <th field="kd_barang" width="50">Kode Barang</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="<?php echo base_url(); ?>Formpembelian" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="">Tambah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editPembelian()">Ubah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapusPembelian()">Hapus Data</a>
        <a href="<?php echo base_url(); ?>Searchpembelian">Cari Data</a>
       
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3></h3>
            <div style="margin-bottom:10px">
                <input name="kd_pembelian" class="easyui-textbox" required="true" label="Kode Pembelian: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="kd_supplier" class="easyui-textbox" required="true" label="Kode Supplier: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="qty" class="easyui-textbox" required="true" label="Qty: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="total_pembayaran" class="easyui-textbox" required="true" validType="" label="Total Pembayaran: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="mata_uang" class="easyui-textbox" required="true" validType="" label="Mata Uang " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="tgl_pembelian" class="easyui-textbox" required="true" validType="" label="Tanggal Pembelian: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="kd_barang" class="easyui-textbox" required="true" validType="" label="Kode Barang: " style="width:100%">
            </div>
        </form>
    </div>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="savePembelian()" style="width:90px">Simpan</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Batal</a>
    </div>
    <script type="text/javascript">
        var url;
        function newPembelian(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Tambah Data Pembelian');
            $('#fm').form('clear');
            url = '<?php echo base_url(); ?>Pembelian/SimpanData';
        }
        function savePembelian(){
            $('#fm').form('submit',{
                url: url,
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        alert(result.Konfirmasi);
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function editPembelian(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Data Pembelian');
                $('#fm').form('load',row);
                url = '<?php echo base_url(); ?>Pembelian/UpdateData?id_kd_pembelian='+row.kd_pembelian;
            }
        }
        function hapusPembelian(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Apakah Anda Yakin Ingin Menghapus Data Ini?',function(r){
                    if (r){
                        $.post('<?php echo base_url() ?>Pembelian/HapusData',{kd_pembelian:row.kd_pembelian},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
