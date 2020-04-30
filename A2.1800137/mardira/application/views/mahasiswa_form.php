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
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap4/css/bootstrap.min.css") ?>" >
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="<?= base_url('home') ?>">Home</a>
      <a class="nav-item nav-link active" href="<?= base_url('mhs') ?>">Mahasiswa</a>
      <a class="nav-item nav-link " href="<?= base_url('prodi') ?>">Prodi</a>
      <a class="nav-item nav-link " href="<?= base_url('gambar') ?>">Gambar</a>
    </div>
  </div>

    <div class="navbar-nav">
      <a class="nav-item nav-link bg-danger text-white" href="<?= base_url('auth/logout') ?>">Logout</a>
    </div>
</nav>

<div class="container-fluid">

    <div class="d-sm-flex justify-content-center">
        <h3>Tambah Data</h3>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <?= $form_open ?>
            <div class="form-group">
                <?= $label_nim ?>
                <?= $input_nim ?>
                <?= $error_nim ?>
            </div>

            <div class="form-group">
                <?= $label_nama ?>
                <?= $input_nama ?>
                <?= $error_nama ?>
            </div>

            <div class="form-group">
                <?= $label_prodi ?>
                <?= $dropdown_prodi ?>
            </div>

            <?= $form_submit ?>
            <a href="<?= base_url('mhs') ?>" class="btn btn-danger btn-lg btn-block">Batal</a>

            <?= form_close() ?>
        </div>
    </div>

</div>
    
</body>
</html>