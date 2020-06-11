<?php
  include 'ceklogin.php';
  include 'function.php';

  // Cek Tombol
  if ( isset($_POST["daftar"]) ) {

      if ( daftaradmin($_POST) > 0 ) {
      echo "
        <script>
          alert('Admin Berhasil Ditambahkan!');
          window.location = 'tambahadmin.php';
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
            <li class="breadcrumb-item active">Tambah Admin</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Tambah Admin</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="" method="post">
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap" required autocomplete="off">
                      </div>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="username" placeholder="Masukkan Username (max.16 karakter)" required autocomplete="off" maxlength="16">
                      </div>
                      <div class="col-sm-10">
                        <input class="form-control" type="password" name="password" placeholder="Masukkan Password (max.16 karakter)" required autocomplete="off" maxlength="16">
                      </div>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" placeholder="Masukkan Email" required autocomplete="off">
                      </div>
                      <div class="col-sm-10">
                        <select name="jenis_kelamin">
                          <option value="laki-laki">Laki-Laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                      </div>
                  </form>
                </div>
              </div>
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