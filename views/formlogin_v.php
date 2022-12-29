<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Login Administrasi Laundry</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/easyui/demo/demo.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/easyui/jquery.easyui.min.js"></script>
</head>
<script type="text/javascript">
    function submitlogin() {
        document.getElementById('formlogin').submit();
    }
</script>
<body>
    <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url(); ?>Login/ceklogin">
    <div style="margin:100px;"></div>
    <div class="easyui-panel" title="Masuk Manejemen Laundry" style="width:100%;max-width:400px;padding:30px 60px;">
        <div style="margin-bottom:10px">
            <input class="easyui-textbox" id="username" name="username" style="width:100%;height:40px;padding:12px" data-options="prompt:'Nama Pengguna',iconCls:'icon-man',iconWidth:38">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" id="password" name="password" type="password" style="width:100%;height:40px;padding:12px" data-options="prompt:'Kata Sandi',iconCls:'icon-lock',iconWidth:38">
        </div>
        <div style="margin-bottom:20px">
            <input type="checkbox" checked="checked">
            <span>Remember me</span>
        </div>
        <div>
            <a href="#" class="easyui-linkbutton" onclick="submitlogin()" data-options="iconCls:'icon-ok'" style="padding:5px 0px;width:100%;">
                <span style="font-size:14px;">Login</span>
            </a>
        </div>
        <div class="modal-footer" style="text-align:right;">
          <p>Bukan Anggota? <a href="<?php echo base_url('Register') ?>">Daftar</a></p>
      <!--     <p>Forgot <a href="#">Password?</a></p> -->
        </div>
    </div>
    </form>
</body>
</html>