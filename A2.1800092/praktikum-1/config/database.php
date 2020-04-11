<?php
date_default_timezone_set("ASIA/JAKARTA");
$server="localhost";
$username="id13154483_rizki";
$password="Hahahaaha1@";
$database="id13154483_mh";

$db=mysqli_connect($server, $username, $password, $database);

if(!$db){

    die('koneksi database gagal :'.mysqli_connect_error());
}
?>