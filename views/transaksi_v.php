<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/config.js"></script>
    
    <table id="dg" title="Data Transaksi" class="easyui-datagrid" style="width:100%;height:550px"
            url="<?php echo base_url(); ?>Transaksi/gettransaksi"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="kd_transaksi" width="85">Kode Transaksi</th>
                <th field="kd_karyawan" width="80">Kode Karyawan</th>
                <th field="kd_konsumen" width="80">Kode Konsumen</th>
                <th field="kd_jenis" width="60">Kode Jenis</th>
                <th field="berat" width="50">Berat</th>
                <th field="satuan" width="50">Satuan</th>
                <th field="tgl_transaksi" width="85">Tanggal Transaksi</th>
                <th field="tgl_ambil" width="85">Tanggal Ambil</th>
                <th field="diskon" width="50">Diskon</th>
                <th field="tgl_bayar" width="85">Tanggal Bayar</th>
                <th field="mata_uang" width="90">Mata Uang</th>
                <th field="nama_pengguna" width="85">Nama Pengguna</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="<?php echo base_url(); ?>Formtransaksi" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="">Tambah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editTransaksi()">Ubah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapusTransaksi()">Hapus Data</a>
        <a href="<?php echo base_url(); ?>Searchtransaksi">Cari Data</a>
       
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3></h3>
            <div style="margin-bottom:10px">
                <input name="kd_transaksi" class="easyui-textbox" required="true" label="Kode Transaksi: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="kd_karyawan" class="easyui-textbox" required="true" label="Kode Karyawan: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="kd_konsumen" class="easyui-textbox" required="true" label="Kode Konsumen: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="kd_jenis" class="easyui-textbox" required="true" label="Kode Jenis: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="berat" class="easyui-textbox" required="true" label="Berat: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="satuan" class="easyui-textbox" required="true" label="Satuan: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="tgl_transaksi" class="easyui-textbox" required="true" validType="" label="Tanggal Transaksi: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="tgl_ambil" class="easyui-textbox" required="true" validType="" label="Tanggal Ambil: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="diskon" class="easyui-textbox" required="true" validType="" label="Diskon: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="tgl_bayar" class="easyui-textbox" required="true" validType="" label="Tanggal Bayar: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="mata_uang" class="easyui-textbox" required="true" validType="" label="Mata Uang: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="nama_pengguna" class="easyui-textbox" required="true" validType="" label="Nama Pengguna: " style="width:100%">
            </div>
        </form>
    </div>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveTransaksi()" style="width:90px">Simpan</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Batal</a>
    </div>
    <script type="text/javascript">
        var url;
        function newTransaksi(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Tambah Data Transaksi');
            $('#fm').form('clear');
            url = '<?php echo base_url(); ?>Transaksi/SimpanData';
        }
        function saveTransaksi(){
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
        function editTransaksi(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Data Pembelian');
                $('#fm').form('load',row);
                url = '<?php echo base_url(); ?>Transaksi/UpdateData?id_kd_transaksi='+row.kd_transaksi;
            }
        }
        function hapusTransaksi(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Apakah Anda Yakin Ingin Menghapus Data Ini?',function(r){
                    if (r){
                        $.post('<?php echo base_url() ?>Transaksi/HapusData',{kd_transaksi:row.kd_transaksi},function(result){
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
