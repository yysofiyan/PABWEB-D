<?php 
  $user = $_SESSION["datauser"];
  $queryuser = mysqli_query($conn, "SELECT * FROM tbluser WHERE username = '$user'");
  $datauser = mysqli_fetch_array($queryuser);
  $statusakun = $datauser["status"];

  if ( $statusakun === 'Pending' ) {
    echo "
      <script>
        alert('Akun anda belum aktif! Minta pengelola perpus untuk mengaktifkannya!');
      </script>
    ";
    session_destroy();
    echo "
      <script>
        window.location = 'login.php';
      </script>
    ";
  }
?>
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="img/avatar/<?= $datauser["pict"]; ?>" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5"><?= $datauser["nama"]; ?></h2><span><?= $datauser["username"] ?></span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo">
        <img src="img/avatar/<?= $datauser["pict"]; ?>" alt="person" class="img-fluid rounded-circle brand-small">
      </div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="index.php"> <i class="fa fa-home"></i>Beranda</a></li>
        <li><a href="listbuku.php"> <i class="fa fa-book"></i>List Buku</a></li>
        <li><a href="#peminjaman" data-toggle="collapse"> <i class="fa fa-info"></i>List Peminjaman</a>
          <ul id="peminjaman" class="list-unstyled collapse" style="">
            <li><a href="listpeminjaman.php">Peminjaman</a></li>
            <li><a href="historipeminjaman.php">Histori</a></li>
          </ul>
        </li>
        <li><a href="#konfigurasiakun" data-toggle="collapse"><i class="fa fa-edit"></i>Konfigurasi Akun</a>
          <ul id="konfigurasiakun" class="list-unstyled collapse" style="">
            <li><a href="changeinformation.php">Ganti Informasi Akun</a></li>
            <li><a href="changephoto.php">Ganti Foto Profil</a></li>
          </ul>
        </li>
    </div>

    <?php if ( $datauser["lvl"] === 'Admin' ) : ?>
      <div class="admin-menu">
        <h5 class="sidenav-heading">Admin menu</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
          <li> <a href="#manajemenuser" data-toggle="collapse"> <i class="icon-screen"> </i>Manajemen User</a>
            <ul id="manajemenuser" class="list-unstyled collapse" style="">
              <li><a href="useraktif.php">User Aktif</a></li>
              <li><a href="userpending.php">User Pending</a></li>
              <li><a href="tambahadmin.php">Tambah Admin</a></li>
            </ul>
          </li>
          <li> <a href="managebuku.php"> <i class="icon-screen"> </i>Manajemen Buku</li></a>
          <li><a href="#listpeminjaman"  data-toggle="collapse"><i class="icon-screen"></i>List Peminjam</a>
            <ul id="listpeminjaman" class="list-unstyled collapse" style="">
              <li><a href="peminjam.php">Peminjam Buku</a></li>
              <li><a href="pengembalian.php">Pending Pengembalian</a></li>
            </ul>
          </li>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</nav>