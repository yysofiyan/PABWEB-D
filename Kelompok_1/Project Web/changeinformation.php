<?php
  include 'function.php';
  include 'ceklogin.php';


  // Update User

  if ( isset($_POST["submitinfo"]) ) {
    $id = $_POST["id"];
    $data = query("SELECT * FROM tbluser WHERE id = $id")[0];
    $nama = $data["nama"];
    $email = $data["email"];
    $password = $data["password"];

    if ( password_verify($_POST["password"],$data["password"]) ) {
      if ( edituser($_POST) > 0 ) {
        echo "
        <script>
          alert('Profil Telah diterapkan!');
          window.location = 'index.php';
        </script>
        ";
      } else {
        echo "
          <script>
            alert('Profil Gagal diterapkan!');
            window.location  = 'changeinformation.php';
          </script>
        ";
      }
    } else {
      echo "
        <script>
          alert('Password Salah!');
          window.location = 'changeinformation.php';
        </script>
        ";
    }
  }

  // Update Password User
  if ( isset($_POST["submitpassword"]) ) {
    $id = $_POST["id"];
    $passlama = $_POST["passlama"];
    $passbaru = $_POST["passbaru"];
    $data = query("SELECT * FROM tbluser WHERE id = $id")[0];
    $nama = $data["nama"];
    $email = $data["email"];
    $password = $data["password"];

    if ( password_verify($passlama,$password) ) {
      if ( editpassworduser($_POST) > 0 ) {
        echo "
        <script>
          alert('Password Telah Diubah!');
          window.location = 'index.php';
        </script>
        ";
      } else {
        echo "
          <script>
            alert('Password Gagal Diubah!');
            window.location  = 'changeinformation.php';
          </script>
        ";
      }
    } else {
      echo "
        <script>
          alert('Password Salah!');
          window.location = 'changeinformation.php';
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
            <li class="breadcrumb-item">Konfigurasi Akun</li>
            <li class="breadcrumb-item active">Ganti Informasi Akun</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Ganti Informasi Akun</h4>
                </div>
                <div class="card-body">
                  <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Ganti Password</button>
                  <form class="form-horizontal" action="" method="post">
                    <div class="form-group row">

                      <input class="form-control" name="id" value="<?= $datauser["id"]; ?>" hidden>

                      <label class="col-sm-2 form-control-label" for="nama">Nama</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" id="nama" name="nama" required autocomplete="off" value="<?= $datauser["nama"]; ?>">
                      </div>

                      <label class="col-sm-2 form-control-label" for="email">Email</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" id="email" name="email" required autocomplete="off" value="<?= $datauser["email"]; ?>">
                      </div>

                      <label class="col-sm-2 form-control-label" for="password">Password (Sekarang)</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="password" id="password" name="password">
                      </div>

                      <label class="col-sm-2 form-control-label" for="email">Foto Profil</label>
                      <div class="col-sm-10">
                        <img src="img/avatar/<?= $datauser["pict"]; ?>" width="100px" height="100px"><br>
                        <a href="changephoto.php">Ganti Foto Profil</a>
                      </div>

                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="submit" class="btn btn-primary" name="submitinfo">Apply</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- MODAL GANTI PASSWORD -->

      <div id="myModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Ganti Password <?= $datauser['username']; ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <input type="text" name="id" value="<?= $datauser['id']; ?>" hidden>
                  <div class="form-group">
                    <label for="passlama">Password Lama</label>
                    <input placeholder="Password Lama" class="form-control" id="passlama" type="password" name="passlama" autocomplete="off" required>
                    <label for="passbaru">Password Baru</label>
                    <input placeholder="Password Baru" class="form-control" id="passbaru" type="password" name="passbaru" autocomplete="off" required>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" name="submitpassword">Submit</button>
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

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