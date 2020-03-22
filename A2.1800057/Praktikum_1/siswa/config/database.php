<?php

//setting zona waktu
date_default_timezone_set("ASIA/JAKARTA");

//parameter koneksi database
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "db_sekolah";

//koneksi database
$db = mysqli_connect($server, $username, $password, $database);

//cek koneksi
if (!$db) {
    //cek koneksi gagal tampilkan pesan
    die('Teu Konek euy ka database : '.mysqli_connect_error());
}
?>