<?php 

if (!$this->session->has_userdata('status') == 'Login') {
    redirect('login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap4/css/bootstrap.min.css") ?>" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?= base_url('home') ?>">Home</a>
      <a class="nav-item nav-link " href="<?= base_url('mhs') ?>">Mahasiswa</a>
      <a class="nav-item nav-link " href="<?= base_url('prodi') ?>">Prodi</a>
      <a class="nav-item nav-link " href="<?= base_url('gambar') ?>">Gambar</a>
    </div>
  </div>

    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?= base_url('auth/hapus_session') ?>">Hapus Session</a>
      <a class="nav-item nav-link bg-danger text-white" href="<?= base_url('auth/logout') ?>">Logout</a>
    </div>
</nav>

<div class="container-fluid">

<h1>Menu Utama</h1>
<p>
    <?php
    $nama_lengkap = $this->session->userdata('nama_lengkap');
    echo "Selamat Datang $nama_lengkap !";
    ?>
</p>


</div>

</body>
</html>
