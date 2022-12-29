<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/color.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/config.js"></script>
    
    <table id="dg" title="Data Karyawan" class="easyui-datagrid" style="width:100%;height:550px"
            url="<?php echo base_url(); ?>Karyawan/getkaryawan"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="kd_karyawan" width="50">Kode Karyawan</th>
                <th field="nm_karyawan" width="50">Nama</th>
                <th field="alamat" width="50">Alamat</th>
                <th field="jns_kelamin" width="50">Jenis Kelamin</th>
                <th field="jabatan" width="50">Jabatan</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="<?php echo base_url(); ?>Formkaryawan" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="">Tambah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editKaryawan()">Ubah Data</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="hapusKaryawan()">Hapus Data</a>
        <a href="<?php echo base_url(); ?>Searchkaryawan">Cari Data</a>
       
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3></h3>
            <div style="margin-bottom:10px">
                <input name="kd_karyawan" class="easyui-textbox" required="true" label="Kode Karyawan: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="nm_karyawan" class="easyui-textbox" required="true" label="Nama: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="alamat" class="easyui-textbox" required="true" label="Alamat: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="jns_kelamin" class="easyui-textbox" required="true" validType="" label="Jenis Kelamin: " style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="jabatan" class="easyui-textbox" required="true" validType="" label="Jabatan: " style="width:100%">
            </div>
        </form>
    </div>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveKaryawan()" style="width:90px">Simpan</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Batal</a>
    </div>
    <script type="text/javascript">
        var url;
        function newKaryawan(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','Tambah Data Karyawan');
            $('#fm').form('clear');
            url = '<?php echo base_url(); ?>Karyawan/SimpanData';
        }
        function saveKaryawan(){
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
        function editKaryawan(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Data Karyawan');
                $('#fm').form('load',row);
                url = '<?php echo base_url(); ?>Karyawan/UpdateData?id_kd_karyawan='+row.kd_karyawan;
            }
        }
        function hapusKaryawan(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Apakah Anda Yakin Ingin Menghapus Data Ini?',function(r){
                    if (r){
                        $.post('<?php echo base_url() ?>Karyawan/HapusData',{kd_karyawan:row.kd_karyawan},function(result){
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
