<?php
include 'config/koneksi.php';
if (!isset($_SESSION['login'])) { header("Location: login.php"); exit; }

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
        <label>NISN:</label>
        <input type="text" name="nisn" value="<?= $data['nisn'] ?>" required>
        <label>Jurusan:</label>
        <select name="jurusan" required>
            <option><?= $data['jurusan'] ?></option>
            <option>BDP</option>
            <option>AKL</option>
            <option>MPLB</option>
            <option>TKJ</option>
            <option>Kuliner</option>
            <option>Perhotelan</option>
            <option>RPL</option>
            <option>DPIB</option>
            <option>Logam</option>
        </select>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
