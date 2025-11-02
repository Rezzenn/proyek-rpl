<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "data_siswa"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
