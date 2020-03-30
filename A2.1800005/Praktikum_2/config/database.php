<?php // tag pembuka syntax PHP
 // set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server = "localhost";
$username = "root";
$password = "";
$database = "db_sekolah";

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
	// cek koneksi gagal, tampilkan pesan gagal
die('Koneksi Database Gagal : '.mysqli_connect_error());
}
?>