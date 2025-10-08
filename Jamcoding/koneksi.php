<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sekolah"; // Ganti dengan nama database Anda

// Buat Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek Koneksi
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
?>