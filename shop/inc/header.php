<?php
// inc/header.php
// Pastikan ini dipanggil dari root project 'shop/' (mis. include 'inc/header.php')
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Toko Online</title>

  <!-- CSS utama -->
  <link rel="stylesheet" href="/shop/assets/css/style.css"> <!-- jika di localhost/root gunakan tanpa /shop/ sesuai lokasi -->
  <!-- Jika kamu meletakkan folder project langsung di htdocs/xampp: -->
  <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->

  <!-- Script utama (defer agar tidak block rendering) -->
  <script src="/shop/assets/js/app.js" defer></script>
</head>
<body>
  <header class="navbar">
    <div class="navbar">
  <div class="logo-container">
    <img src="assets/img/RPL.png" alt="Logo" class="logo">
    <h2>Toko Online</h2>
  </div>
  <nav class="nav-links">
  <a href="/shop/index.php">Home</a>
  <a href="/shop/product.php">Produk</a>
  <a href="/shop/cart.php">Keranjang</a>
  <button id="modeToggle" class="mode-toggle">🌙 Mode Malam</button>
</nav>
</div>


    <nav class="nav-links">
      <a href="/shop/index.php">Home</a>
      <a href="/shop/product.php">Produk</a>
      <a href="/shop/cart.php">Keranjang</a>
    </nav>
  </header>

  <main class="main-container">
