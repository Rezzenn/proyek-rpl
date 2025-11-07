<?php
// inc/footer.php
?>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>&copy; <?= date('Y') ?> Toko Online. All rights reserved.</p>
    </div>
  </footer>

  <!-- Jika butuh inline script akhir atau inisialisasi kecil -->
  <script>
    // memastikan app.js sudah dimuat (jika butuh fallback)
    if (typeof window.appInit === 'function') window.appInit();
  </script>
</body>
</html>
