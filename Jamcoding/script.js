// Fungsi untuk mengupdate jam
function updateClocks() {
    const now = new Date();
    const timeOptions = {
        hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false
    };

    // Definisikan elemen-elemen jam
    const localTimeEl = document.getElementById('local-time');
    const tokyoTimeEl = document.getElementById('tokyo-time');
    const londonTimeEl = document.getElementById('london-time');
    const newyorkTimeEl = document.getElementById('newyork-time');
    const makkahTimeEl = document.getElementById('makkah-time');

    // Cek apakah elemen ada sebelum mengubah isinya
    // Ini mencegah error di halaman lain yang tidak punya elemen jam
    if (localTimeEl) {
        localTimeEl.textContent = now.toLocaleTimeString('en-GB', { ...timeOptions, timeZone: 'Asia/Makassar' });
    }
    if (tokyoTimeEl) {
        tokyoTimeEl.textContent = now.toLocaleTimeString('en-GB', { ...timeOptions, timeZone: 'Asia/Tokyo' });
    }
    if (londonTimeEl) {
        londonTimeEl.textContent = now.toLocaleTimeString('en-GB', { ...timeOptions, timeZone: 'Europe/London' });
    }
    if (newyorkTimeEl) {
        newyorkTimeEl.textContent = now.toLocaleTimeString('en-GB', { ...timeOptions, timeZone: 'America/New_York' });
    }
    if (makkahTimeEl) {
        makkahTimeEl.textContent = now.toLocaleTimeString('en-GB', { ...timeOptions, timeZone: 'Asia/Riyadh' });
    }
}

// Jalankan fungsi updateClocks setiap 1 detik
setInterval(updateClocks, 1000);

// Panggil sekali saat halaman dimuat
updateClocks();