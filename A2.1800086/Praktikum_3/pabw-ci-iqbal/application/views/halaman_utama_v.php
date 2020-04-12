<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
<h1>Menu Utama</h1>
<ul>
    <li><?php echo anchor('mhs', 'Data Mahasiswa')?></li>
    <li><?php echo anchor('prodi', 'Data Program Studi')?></li>
</ul>
<p>
    <?php 
    $nama_lengkap = $this->session->userdata('nama_lengkap');
    echo "Selamat Datang {$nama_lengkap} !";
    ?>
</p>
<p>
    <?php echo anchor('auth/hapus_session', 'Hapus Session Nama Lengkap')?>
</p>
<?php echo anchor('logout', 'Logout')?>
</body>
</html>