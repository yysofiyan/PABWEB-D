<?php
  include 'ceklogin.php';
  include 'function.php';
  $kueri = query("SELECT * FROM tblrequestkembali ORDER BY id DESC");

  // Cek Tombol Search
  if ( isset($_GET["cari"]) ) {
    $kueri = pencarianuser($_GET["keyword"]);
  }

  // Cek Konfirmasi
  if ( isset($_GET["konfirmasi"]) ) {

      if ( konfirmasikembalibuku($_GET) > 0 ) {
      echo "
        <script>
          alert('Buku Telah Di Konfirmasi!');
          window.location = 'pengembalian.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Gagal!');
        </script>
      ";
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <?php include 'head.php'; ?>
  </head>
  <body>
    <!-- Side Navbar -->
    <?php include 'navbar.php'; ?>
    
    <?php 
      if ( $datauser['lvl'] === 'User' ) {
         header('location: index.php');
      }
    ?>

    <div class="page">
      <?php include 'header.php'; ?>
      <!-- Breadcrumbs -->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">List Peminjam</li>
            <li class="breadcrumb-item active">Pengembalian Buku</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="form-group">
              <form class="input-group" method="get" action="">
                <input type="text" class="form-control" name="keyword" placeholder="Cari user Berdasarkan nama" autocomplete="off">
                <button type="submit" class="btn btn-primary input-group-append" name="cari">Cari</button>
              </form>
            </div>
            <div class="table-responsive">
              <table class="table table-stripped tabble-sm">
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Judul Buku</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $kueri as $data ) : ?>
                    <?php
                      $kode = $data["kode"];
                      $judul = $data["judul"];
                      $nama = $data["nama"];
                      $tanggalpinjam = $data["tanggalpinjam"];
                      $tanggalkembalikan = $data["tanggalkembalikan"];
                    ?>
                    <tr>
                    <td><?= $kode; ?></td>
                    <td><?= $judul; ?></td>
                    <td><?= $nama; ?></td>
                    <td><?= $tanggalpinjam; ?></td>
                    <td><?= $tanggalkembalikan; ?></td>
                    <td>
                      <a href="?konfirmasi=&kode=<?= $kode; ?>&nama=<?= $nama; ?>&tanggalpinjam=<?= $tanggalpinjam; ?>&tanggalkembalikan=<?= $tanggalkembalikan; ?>">Konfirmasi</a>
                    </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <div class="container-fluid">
          <div class="row">
            <!-- BOTTOM -->
          </div>
        </div>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Back End by <a href="http://instagram.com/dimasfirmansyxx">Dimas Firmansyah</a> &copy; <span id="year-cred"></span></p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Awesome Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>