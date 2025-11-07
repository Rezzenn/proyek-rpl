<?php include 'inc/header.php'; ?>
<section class="checkout">
  <h2>Checkout</h2>
  <form action="order_success.php" method="POST" class="checkout-form">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="text" name="alamat" placeholder="Alamat Lengkap" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" class="btn">Kirim Pesanan</button>
  </form>
</section>
<?php include 'inc/footer.php'; ?>
