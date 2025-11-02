<?php
include 'config/koneksi.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', nisn='$nisn', jurusan='$jurusan' WHERE id='$id'");
    header("Location: tampil.php");
}
?>
