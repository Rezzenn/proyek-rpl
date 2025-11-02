<?php
include 'config/koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id'");
header("Location: tampil.php");
?>
