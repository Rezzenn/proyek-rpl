<?php
include 'config/koneksi.php';
session_start();

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO siswa (nama, nisn, jurusan) VALUES ('$nama', '$nisn', '$jurusan')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil disimpan!');
                window.location.href='tampil.php';
              </script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
