<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Register Administrasi Laundry</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script>
</head>
<script type="text/javascript">
    function submitregister(){
        document.getElementById('formregister').submit();
    }
</script>
<body>
    <form id="formregister" name="formregister" method="post" action="<?php echo base_url(); ?>Register/proses_register">
    <div style="margin:20px 0;"></div>
    <div class="easyui-panel" title="Daftar Manajemen Laundry" style="width:100%;max-width:400px;padding:30px 60px;">
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" id="username" name="username" label="Nama Pengguna" labelPosition="top" data-options="prompt:'Masukan Nama Pengguna..',validType:''" style="width:100%;">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-passwordbox" id="password" name="password" label="Kata Sandi:" labelPosition="top"
            data-options="prompt:'Masukan Kata Sandi.. ',validType:''" style="width:100%;">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" id="alamat" name="alamat" label="Alamat:" labelPosition="top" data-options="prompt:'Masukan Alamat..',validType:''" style="width:100%;">
        </div>
        <div style="margin-bottom:20px">
        <input class="easyui-textbox" id="email" name="email" label="Email:" labelPosition="top" data-options="prompt:'Masukan alamat email...',validType:'email'" style="width:100%;">
        </div>    
        <div>
            <a href="#" class="easyui-linkbutton" onClick="submitregister()" iconCls="icon-ok" style="width:100%;height:32px">Register</a>
        </div>
    </div>
</form>
</body>
</html>
