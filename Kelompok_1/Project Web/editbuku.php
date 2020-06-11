<?php
	include 'ceklogin.php';
	include 'function.php';
	
	$id = $_GET["id"];
	$data = query("SELECT * FROM tblbuku WHERE id = $id ")[0];
	$kode = $data["kode"];
	$judul = $data["judul"];
	$penerbit = $data["penerbit"];
	$jumlah = $data["jumlah"];
	$jenis = $data["jenis"];



	if ( !isset($_GET["id"]) ) {
		header('location: managebuku.php');
	} else {
		if ( isset($_POST["submit"]) ) {
			if ( ubahbuku($_POST) > 0 ) {
				echo "
				<script>
				  alert('Buku Berhasil Diubah!');
				  window.location = 'managebuku.php';
				</script>
				";
			} else {
				echo "
					<script>
					  alert('Buku Gagal Diubah!');
					  window.location  = 'managebuku.php';
					</script>
				";
			}
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
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="managebuku.php">Manajemen Buku</a></li>
            <li class="breadcrumb-item active"> Edit Informasi Buku </li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <form class="form-horizontal" method="post" action="">
            	<input type="text" name="id" value="<?= $id; ?>" readonly class="form-control form-control-success">
            	<br>
	            <div class="form-group row">
	              <label class="col-sm-4" for="kode">Kode Buku</label>
	              <div class="col-sm-8">
	                <input id="kode" type="text" class="form-control form-control-success" name="kode" value="<?= $kode; ?>" readonly>
	              </div>
	            </div>
	            <div class="form-group row">
	              <label class="col-sm-4" for="judul">Judul Buku</label>
	              <div class="col-sm-8">
	                <input id="judul" type="text" class="form-control form-control-success" name="judul" value="<?= $judul; ?>" required autocomplete="off">
	              </div>
	            </div>
	            <div class="form-group row">
	              <label class="col-sm-4" for="penerbit">Penerbit Buku</label>
	              <div class="col-sm-8">
	                <input id="penerbit" type="text" class="form-control form-control-success" name="penerbit" value="<?= $penerbit; ?>" required autocomplete="off">
	              </div>
	            </div>
	            <div class="form-group row">
	              <label class="col-sm-4" for="jumlah">Jumlah Buku</label>
	              <div class="col-sm-8">
	                <input id="jumlah" type="text" class="form-control form-control-success" name="jumlah" value="<?= $jumlah; ?>" required autocomplete="off">
	              </div>
	            </div>
	            <div class="form-group row">
	              <label class="col-sm-4" for="jenis">Jenis Buku</label>
	              <div class="col-sm-8">
	                <input id="jenis" type="text" class="form-control form-control-success" name="jenis" value="<?= $jenis; ?>" required autocomplete="off">
	              </div>
	            </div>
	            <div class="form-group row">
	            	<button type="Submit" name="submit" class="btn btn-primary">Ganti!</button>
	            </div>
          	</form>
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