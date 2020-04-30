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
    <title>Contoh URl</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap4/css/bootstrap.min.css") ?>">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="<?= base_url('home') ?>">Home</a>
      <a class="nav-item nav-link " href="<?= base_url('mhs') ?>">Mahasiswa</a>
      <a class="nav-item nav-link " href="<?= base_url('prodi') ?>">Prodi</a>
      <a class="nav-item nav-link active" href="<?= base_url('gambar') ?>">Gambar</a>
    </div>
  </div>

    <div class="navbar-nav">
      <a class="nav-item nav-link bg-danger text-white" href="<?= base_url('auth/logout') ?>">Logout</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="d-sm-flex justify-content-center mb-4">
        <h1>Gambar</h1>
    </div>

    <div class="d-sm-flex justify-content-center mb-2">
        <img src="<?= base_url("assets/widi.jpg") ?>" style="border-radius:10px" alt="widi" height="200">
    </div>

    <div class="d-sm-flex justify-content-center">
        <h3>Widi Priansyah</h3>
    </div>

</div>

</body>

</html>