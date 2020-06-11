<?php
  include 'function.php';
  include 'ceklogin.php';

  if ( isset($_POST["ganti"]) ) {
    if ( uploadfoto($_POST) > 0 ) {
      echo "
        <script>
          alert('Foto Profil Berhasil Diterapkan!');
          window.location = 'changephoto.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Foto Profil Gagal Diterapkan!');
          window.location = 'changephoto.php';
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
    <div class="page">
      <?php include 'header.php'; ?>
      <!-- Breadcrumbs -->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"> Konfigurasi Akun </li>
            <li class="breadcrumb-item active">Ganti Foto Profil</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Ganti Foto Profil</h4>
                </div>
                <div class="card-body">
                  <img class="fotoprofil" src="img/avatar/<?= $datauser["pict"]; ?>" width="100px" height="100px">
                  <form method="post" action="" class="inline-form" enctype="multipart/form-data">
                    <input type="text" hidden="true" name="id" value="<?= $datauser["id"]; ?>">
                    <small>Maksimal ukuran gambar 2.000.000byte | Disarankan menggunakan gambar 520x520 atau 1:1</small><br>
                    <input type="file" name="pict">
                    <button type="submit" name="ganti" class="btn btn-primary">Ganti!</button>
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