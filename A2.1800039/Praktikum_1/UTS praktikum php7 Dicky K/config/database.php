<?php
date_default_timezone_set("ASIA/JAKARTA");

$server = "localhost";
$username = "id12839268_root";
$passwoard = "qazxcdews";
$database = "id12839268_db_sekolah";

$db = mysqli_connect($server,$username,$passwoard,$database);

 if (!$db){
     die('koneksi database gagal :'.mysqli_connect_error());
 }
 ?>