<?php
session_start();
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Gunakan prepared statement untuk keamanan
    $sql = "SELECT id, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password yang di-hash
        if (password_verify($password, $user['password'])) {
            // Password benar, login berhasil
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $user['email'];
            header("Location: dashboard.php"); // Arahkan ke halaman dashboard
            exit;
        }
    }

    // Jika email tidak ditemukan atau password salah
    $_SESSION['error_message'] = "Email atau Password salah.";
    header("Location: login.php");
    exit;
}
?>