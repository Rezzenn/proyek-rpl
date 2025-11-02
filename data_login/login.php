<?php
session_start();
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <p style="text-align:center;">Belum punya akun? <a href="register.php">Daftar di sini</a></p>

    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // 🔧 Ganti nama tabel dari 'user' jadi 'users'
        $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
        $data = mysqli_fetch_assoc($cek);

        // ✅ Cek apakah user ditemukan dan password cocok
        if ($data && password_verify($password, $data['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $data['username'];
            header("Location: tampil.php");
            exit;
        } else {
            echo "<p style='color:red;text-align:center;'>❌ Username atau password salah!</p>";
        }
    }
    ?>
</body>
</html>
