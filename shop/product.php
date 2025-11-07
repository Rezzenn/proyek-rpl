<?php include 'inc/header.php'; include 'config/koneksi.php'; ?>
<section class="produk-container">
  <h2>Daftar Produk</h2>
  <div class="produk-list">
    <?php
    $data = $koneksi->query("SELECT * FROM produk");
    while($row = $data->fetch_assoc()):
    ?>
    <div class="produk-card">
      <img src="assets/img/<?= $row['gambar']; ?>" alt="<?= $row['nama']; ?>">
      <h3><?= $row['nama']; ?></h3>
      <p><?= $row['deskripsi']; ?></p>
      <strong>Rp <?= number_format($row['harga']); ?></strong>
      <a href="add_to_cart.php?id=<?= $row['id']; ?>" class="btn">Tambah ke Keranjang</a>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php include 'inc/footer.php'; ?>
