<?php
session_start();
if(isset($_SESSION['username'])) {
    header('location:index.php'); }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css_2/style-1.css');?>">
    <meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<body>

<div id="login">
    <div class="center" style="margin-top:5%">

        <h2>Daftar</h2>

        <form class="fl" action="<?php echo site_url('Disa_kerja/tambah_data');?>" method="post" >
            <input class="itpw" type="text" name="nama" placeholder="Masukkan Nama"><br>
            <input class="itpw" type="text" name="alamat" placeholder="Masukkan alamat"><br>
            <input class="itpw" type="password" name="password" placeholder="Masukkan Password"><br>
            <input class="itpw" type="password" name="re-password" placeholder="Ulangi password"><br>
            <input class="itpw" type="text" name="email" placeholder="Masukkan email"><br>
            <input class="itpw" type="text" name="no" placeholder="Masukkan Nomor Hp"><br>
            <input class="its" type="submit" name="registrasi" value="registrasi">
        </form>

        <p> Sudah memiliki akun? <a href="<?php echo site_url('disa_kerja/login');?>">Masuk kesini</a></p>

    </div>
</div>

</body>
</html>