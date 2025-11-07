<?php
session_start();
session_destroy();
include 'inc/header.php';
?>
<section class="success">
  <h2>Pesanan Berhasil!</h2>
  <p>Terima kasih telah berbelanja di Toko Online.</p>
  <a href="index.php" class="btn">Kembali ke Beranda</a>
</section>
<?php include 'inc/footer.php'; ?>
