<?php
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h2>Form Registrasi</h2>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="register">Daftar</button>
    </form>

    <p style="text-align:center;">Sudah punya akun? <a href="login.php">Login di sini</a></p>

    <?php
    if (isset($_POST['register'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Hash password agar aman
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Cek apakah username sudah digunakan
        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

        if (mysqli_num_rows($cek) > 0) {
            echo "<p style='color:red;text-align:center;'>❌ Username sudah digunakan!</p>";
        } else {
            // Simpan ke database
            $insert = mysqli_query($koneksi, "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')");
            
            if ($insert) {
                echo "<p style='color:green;text-align:center;'>✅ Akun berhasil dibuat! Silakan <a href='login.php'>login</a>.</p>";
            } else {
                echo "<p style='color:red;text-align:center;'>⚠️ Terjadi kesalahan saat menyimpan data.</p>";
            }
        }
    }
    ?>
</body>
</html>
