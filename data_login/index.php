<?php
session_start(); // WAJIB di paling atas sebelum HTML
include 'config/koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

    <div class="container">
        <p style="text-align:right;">Halo, <?= $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>
        <h2>📝 Tambah Data Siswa</h2>

        <form action="simpan.php" method="POST">
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

            <label>NISN:</label>
            <input type="text" name="nisn" placeholder="Masukkan NISN siswa" required>

            <label>Jurusan:</label>
            <select name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="BDP">BDP (Bisnis Daring dan Pemasaran)</option>
                <option value="AKL">AKL (Akuntansi dan Keuangan Lembaga)</option>
                <option value="MPLB">MPLB (Manajemen Perkantoran)</option>
                <option value="TKJ">TKJ (Teknik Komputer dan Jaringan)</option>
                <option value="Kuliner">Kuliner</option>
                <option value="Perhotelan">Perhotelan</option>
                <option value="RPL">RPL (Rekayasa Perangkat Lunak)</option>
                <option value="DPIB">DPIB (Desain Permodelan dan Informasi Bangunan)</option>
                <option value="Logam">Logam</option>
            </select>

            <button type="submit" name="simpan">💾 Simpan</button>
        </form>

        <a href="tampil.php" class="btn-kembali">📋 Lihat Data Siswa</a>
    </div>

</body>
</html>
