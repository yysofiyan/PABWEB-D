<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13156699_siti";
$password="Sitilatifa1@";
$database="id13156699_mh";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>