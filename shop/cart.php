<?php
session_start();
include 'config/koneksi.php';
include 'inc/header.php';
?>

<section class="cart-container">
  <h2>Keranjang Belanja</h2>

  <table>
    <tr>
      <th>Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th>
    </tr>

    <?php
    $grandTotal = 0;

    if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $id => $qty) {
        // Pastikan $qty adalah angka
        $qty = (int)$qty;

        // Ambil data produk
        $stmt = $koneksi->prepare("SELECT nama, harga FROM produk WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $p = $result->fetch_assoc();

        if ($p) {
          // Pastikan harga adalah angka
          $harga = (int)$p['harga'];
          $total = $harga * $qty;
          $grandTotal += $total;

          echo "<tr>
                  <td>{$p['nama']}</td>
                  <td>{$qty}</td>
                  <td>Rp " . number_format($harga, 0, ',', '.') . "</td>
                  <td>Rp " . number_format($total, 0, ',', '.') . "</td>
                </tr>";
        }

        $stmt->close();
      }
    } else {
      echo "<tr><td colspan='4' style='text-align:center;'>Keranjang kosong.</td></tr>";
    }
    ?>
  </table>

  <h3>Total Belanja: Rp <?= number_format($grandTotal, 0, ',', '.'); ?></h3>

  <?php if ($grandTotal > 0): ?>
    <a href="checkout.php" class="btn">Checkout</a>
  <?php else: ?>
    <a href="index.php" class="btn">Belanja Sekarang</a>
  <?php endif; ?>
</section>

<?php include 'inc/footer.php'; ?>
