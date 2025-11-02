<?php
session_start(); // WAJIB di atas sebelum HTML apapun
include 'config/koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil data dari tabel siswa
$result = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <p style="text-align:right;">Halo, <?= $_SESSION['username']; ?> | <a href="logout.php">Logout</a></p>
    <h2>📚 Data Siswa Terdaftar</h2>

    <table border="1" cellspacing="0" cellpadding="8" width="100%">
        <tr style="background-color: #f2f2f2;">
            <th>No</th>
            <th>Nama</th>
            <th>NISN</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$no++."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['nisn']."</td>
                        <td>".$row['jurusan']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                            <a href='hapus.php?id=".$row['id']."' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align:center;'>Belum ada data siswa</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php" class="btn-kembali">+ Tambah Data Baru</a>
</body>
</html>
