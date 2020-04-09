<?php
date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "root";
$password = "";
$database = "dtb_sekolah";

//koneksi database
$db = mysqli_connect($server, $username, $password, $database);

//cek koneksi
if (!$db) {

    die('koneksi database gagal : '.mysqli_connect_error());

}
?>