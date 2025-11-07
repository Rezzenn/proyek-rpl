// assets/js/app.js
(function () {
  // === Fungsi inisialisasi utama ===
  window.appInit = function () {
    // Efek klik tombol
    document.querySelectorAll(".btn, .add-to-cart").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        btn.classList.add("clicked");
        setTimeout(() => btn.classList.remove("clicked"), 320);
      });
    });

    // === Toggle Mode Malam/Terang ===
    const toggleBtn = document.getElementById("modeToggle");
    const body = document.body;

    if (toggleBtn) {
      // Cek mode tersimpan di localStorage
      const savedMode = localStorage.getItem("theme");
      if (savedMode === "dark") {
        body.classList.add("dark-mode");
        toggleBtn.textContent = "☀️ Mode Terang";
      }

      // Event klik tombol
      toggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        if (body.classList.contains("dark-mode")) {
          toggleBtn.textContent = "☀️ Mode Terang";
          localStorage.setItem("theme", "dark");
        } else {
          toggleBtn.textContent = "🌙 Mode Malam";
          localStorage.setItem("theme", "light");
        }
      });
    }
  };

  // === Saat halaman dimuat ===
  document.addEventListener("DOMContentLoaded", function () {
    // Jalankan inisialisasi global
    if (typeof window.appInit === "function") window.appInit();

    // Efek fade-in pada seluruh halaman
    document.body.style.opacity = 0;
    setTimeout(() => {
      document.body.style.transition = "opacity 0.6s ease";
      document.body.style.opacity = 1;
    }, 50);
  });
})();
