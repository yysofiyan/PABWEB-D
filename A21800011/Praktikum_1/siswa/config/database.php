<?php 
// adalah tag pembuka php

date_default_timezone_set("ASIA/JAKARTA");
// adalah pengaturan default timezone

// mendeklarasikan parameter koneksi database
$server      = "localhost";
$username    = "root";
$password    = "root";
$database    = "db_sekolah";

// mengkoneksikan database
$db = mysql_connect($server, $username, $password, $database);

// mengecek koneksi
if(!$db) {
    
    // cek koneksi gagal, menampilkan pesann gagal
    die('Koneksi database gagal : '.mysql_connect_error());
}

// di bawah ini adalah tag penutup sintak php
?>
