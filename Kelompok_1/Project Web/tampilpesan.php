<?php
  include 'function.php';
  include 'ceklogin.php';

  if ( !isset($_GET['show']) ) {
    header('location: index.php');
  } elseif ( !isset($_GET['id']) ) {
    header('location: index.php');
  }

  // Cek Tombol Hapus
  if ( isset($_GET['hapus']) ) {
    if ( hapuspesan($_GET) > 0 ) {
      echo "
        <script>
          alert('Pesan berhasil dihapus!');
          window.location = 'index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Pesan gagal dihapus!');
          window.location = 'index.php';
        </script>
      ";
    }
  }

  // Cek Tombol Kirim
  if ( isset($_POST['kirim']) ) {
    if ( kirimpesan($_POST) > 0 ) {
      echo "
        <script>
          alert('Berhasil mengirim pesan!');
          window.location = 'index.php';
        </script>
      ";
    } else {
      echo "
        <script>
          alert('Gagal Mengirim Pesan!');
          window.location = 'index.php';
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

      <?php 
        $id = $_GET['id'];
        $myuname = $datauser["username"];
        $kueri = mysqli_query($conn, "SELECT * FROM tblpesan WHERE id= $id AND penerima = '$myuname'");
        $data = mysqli_fetch_array($kueri);

        $judul = $data['judul'];
        $pengirim = $data['pengirim'];
        $unamepengirim = $data['username'];
        $isi = $data['isi'];
      ?>

      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header align-items-center">
                  <h2><?= $judul ?></h2>
                  <small><?= $pengirim; ?> - <?= $unamepengirim; ?></small><br>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Balas</a>
                  <a href="?hapus=&id=<?= $id; ?>" class="btn btn-danger" onclick="return confirm('Apakah pesan ini akan dihapus ?');">Hapus</a>
                </div>
                <div class="card-body">
                  <?= $isi; ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- MODAL BALAS PESAN -->

      <div id="myModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Balas Pesan <?= $_GET['uname']; ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <input type="text" name="nama" value="<?= $datauser['nama']; ?>" hidden>
                  <input type="text" name="username" value="<?= $datauser['username']; ?>" hidden>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul Pesan" required autocomplete="off">
                    </div>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" name="penerima" readonly required value="<?= $_GET['uname']; ?>">
                    </div>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="pesan"></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" name="kirim">Kirim</button>
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