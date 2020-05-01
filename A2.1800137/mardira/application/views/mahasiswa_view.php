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
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap4/css/bootstrap.min.css") ?>">
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

<div class="d-sm-flex justify-content-between">
<h3>Data Mahasiswa</h3>
<a href="<?= base_url("mahasiswa/tambah_data") ?>" class="btn btn-success mb-3"> Tambah Data </a>
</div>

<div class="row">

    <div class="col-lg-12">
    <?php
    if($this->session->flashdata('pesan')){
        $pesan = '<div class="alert alert-success" role="alert">'.$this->session->flashdata('pesan').'</div>';
        echo $pesan;
    }
    ?>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?= $no++ ?>.</td>
                    <td><?= $row->nim ?></td>
                    <td><?= $row->nama_mhs ?></td>
                    <td><?= $row->nama_prodi ?></td>
                    <td>
                        <a href="<?= base_url("mahasiswa/edit/{$row->id_mahasiswa}") ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url("mahasiswa/hapus/{$row->id_mahasiswa}") ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>

</div>


    
</body>
</html>


