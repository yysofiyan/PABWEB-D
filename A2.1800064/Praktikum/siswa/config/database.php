<?php
date_default_timezone_set("ASIA/JAKARTA");

$server   = 'localhost';
$username = 'id13163520_riza_suparman';
$password = 'ob>~!i2[L<(!o>qM';
$database = 'id13163520_db_sekolah';

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die(mysqli_connect_error());
}