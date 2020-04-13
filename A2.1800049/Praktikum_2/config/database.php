<?php      //pembuka syntaq php
//set default timezone 
date_default_timezone_set("ASIA/JAKARTA");

// Deklarasi Koneksi Database
$server 	= "localhost";			//server database, default "localhost" atau "127.0.0.1"
$username 	= "root";				//username database, default "root"
$password 	= "";					//password, default password kosong
$database 	= "db_sekolah";			//database yang akan dipakai

//koneksi database
$db = mysqli_connect($server, $username, $password, $database);

//cek koneksi
if (!$db) {
	//cek koneksi gagal, tampilkan pesan gagal
	die('Koneksi Database Gagal :	'.mysqli_connect_error());
}
?>		<!-- tag penutupan syntaq php -->
