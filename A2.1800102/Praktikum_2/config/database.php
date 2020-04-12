<?php

date_default_timezone_set("ASIA/JAKARTA");

$hostname = "localhost";
$username = "id13228631_root
";
$password = "jhlYJU?}h*Nq0EoL";
$database = "id13228631_db_sekolah";

$db = mysqli_connect($hostname, $username, $password, $database);

if (!$db) {

	die('Koneksi Database Gagal : '.mysqli_connect_error());


}
?>