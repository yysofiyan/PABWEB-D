<?php
//SET DEFAULT TIME ZONE
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server = "localhost";		// server database, default "localhost" atau "127.0.0.1"
$username = "";		// database, default "root"
$password = "";				// Paswword database, default kosong
$database = "";	// memilih database yang akan digunakan

// koneksi database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if(!$db) {
	// cek koneksi gagal, tampilkan pesan gagal
	die('Koneksi Database Gagal :'.mysqli_connect_error());
}
?>