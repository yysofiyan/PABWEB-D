<?php
  include 'ceklogin.php';
  include 'function.php';

  // Kirim Pesan
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



  // Menampilkan Informasi Buku di Perpustakaan
  $judulbuku = mysqli_query($conn, "SELECT * FROM tblbuku");
  $resultjudulbuku = mysqli_num_rows($judulbuku);

  $jumlahbuku = mysqli_query($conn, "SELECT SUM(jumlah) AS TOTAL FROM tblbuku ");
  $resultjumlahbuku = mysqli_fetch_array($jumlahbuku)[0];

  $jenisbuku = mysqli_query($conn, "SELECT COUNT(DISTINCT jenis) AS jenis FROM tblbuku");
  $resultjenisbuku = mysqli_fetch_array($jenisbuku)[0];

  $pinjambuku = mysqli_query($conn, "SELECT * FROM tblpinjam WHERE status = 'Pending' OR status = 'Dibaca'");
  $resultpinjambuku = mysqli_num_rows($pinjambuku);
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
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Buku</strong>
                  <div class="count-number"><?= $resultjumlahbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Judul Buku</strong>
                  <div class="count-number"><?= $resultjudulbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Jenis Buku</strong>
                  <div class="count-number"><?= $resultjenisbuku; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-3 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-paper-airplane"></i></div>
                <div class="name"><strong class="text-uppercase">Dipinjam</strong>
                  <div class="count-number"><?= $resultpinjambuku; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php 
        $myuname = $datauser["username"];
        $kueri = query("SELECT * FROM tblpesan WHERE penerima = '$myuname' ORDER BY id DESC");
      ?>

      <div class="container-fluid">
          <div class="row">
            <!-- Pesan -->
            <div class="col-lg-6">
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Pesan</a></h2>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box">
                    <ul class="feed-elements list-unstyled">
                      <!-- List-->
                      <?php foreach ($kueri as $data) : ?>
                        <?php
                          $id = $data['id'];
                          $judul = $data['judul'];
                          $pengirim = $data['pengirim'];
                          $userpengirim = $data['username'];

                          $queryfoto = mysqli_query($conn, "SELECT * FROM tbluser WHERE username = '$userpengirim'");
                          $foto = mysqli_fetch_array($queryfoto);
                          $fotoprofil = $foto['pict'];
                        ?>
                        <li class="clearfix">
                          <div class="feed d-flex justify-content-between">
                            <div class="feed-body d-flex justify-content-between">
                              <a href="tampilpesan.php?show=&id=<?= $id; ?>&uname=<?= $userpengirim; ?>" class="feed-profile"><img src="img/avatar/<?= $fotoprofil; ?>" alt="person" class="img-fluid rounded-circle"></a>
                              <div class="content">
                                <a href="tampilpesan.php?show=&id=<?= $id; ?>&uname=<?= $userpengirim; ?>"><?= $judul; ?></a>
                                <small><?= $pengirim; ?> - <?= $userpengirim; ?> </small>
                              </div>
                            </div>
                          </div>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tulis Pesan -->
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Kirim Pesan</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="" method="post" class="regi">
                    <input type="text" name="nama" value="<?= $datauser['nama']; ?>" hidden>
                    <input type="text" name="username" value="<?= $datauser['username']; ?>" hidden>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="judul" placeholder="Masukkan Judul Pesan" required autocomplete="off">
                      </div>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="penerima" placeholder="Masukkan Username Penerima Pesan" required autocomplete="off">
                      </div>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="pesan"></textarea>
                      </div>
                    </div>
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
                      </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
             s</div>
            <div class="col-sm-6 text-right">
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