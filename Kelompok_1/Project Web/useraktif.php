<?php
  include 'ceklogin.php';
  include 'function.php';
  $kueri = query("SELECT * FROM tbluser WHERE status = 'Active' AND lvl = 'User'");

  $tanggal = Date("Y-m-d");

  // Cek tombol submit pencarian
  if ( isset($_GET["cari"]) ) {
    $kueri = cariuser($_GET["keyword"]);
  }

  // Cek aksi hapus
  if ( isset($_GET["hapus"]) ) {

      if ( hapususer($_GET) > 0 ) {
      echo "
        <script>
          alert('User sudah dihapus');
          window.location = 'useraktif.php';
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

  // Cek aksi block
  if ( isset($_GET["block"]) ) {

      if ( blockuser($_GET) > 0 ) {
      echo "
        <script>
          alert('User sudah di block. Untuk unblock silahkan buka menu User Pending di Manajemen User.');
          window.location = 'useraktif.php';
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
            <li class="breadcrumb-item">Manajemen User</li>
            <li class="breadcrumb-item active">User Aktif</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="form-group">
              <form class="input-group" method="get" action="">
                <input type="text" class="form-control" name="keyword" placeholder="Cari User Berdasarkan Nama" autocomplete="off">
                <button type="submit" class="btn btn-primary input-group-append" name="cari">Cari</button>
              </form>
            </div>
            <div class="table-responsive">
              <a href="useraktif.php" class="btn btn-primary">Tampilkan Semua User</a>
              <table class="table table-stripped tabble-sm">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ( $kueri as $data ) : ?>
                    <?php
                      $id = $data["id"];
                      $nama = $data["nama"];
                      $username = $data["username"];
                      $email = $data["email"];
                      $jenis_kelamin = $data["jenis_kelamin"];
                    ?>
                    <tr>
                    <td><?= $nama; ?></td>
                    <td><?= $username; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $jenis_kelamin; ?></td>
                    <td>
                      <a href="?hapus=&id=<?= $id; ?>" onclick="return confirm('Apakah user ini akan dihapus ?');">Hapus</a>
                      |
                      <a href="?block=&id=<?= $id; ?>" onclick="return confirm('Apakah user ini akan di block ?');">Block</a>
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