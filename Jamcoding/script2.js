// JavaScript untuk logika pergerakan jam

// Memilih elemen jarum jam dari HTML
const hourHand = document.querySelector('.hour-hand');
const minHand = document.querySelector('.min-hand');
const secondHand = document.querySelector('.second-hand');

function setDate() {
    // Mengambil waktu saat ini
    const now = new Date();

    // Mengambil detik, menit, dan jam
    const seconds = now.getSeconds();
    const minutes = now.getMinutes();
    const hours = now.getHours();

    // Menghitung derajat perputaran untuk setiap jarum
    // 360 derajat / 60 detik = 6 derajat per detik
    const secondsDegrees = ((seconds / 60) * 360) + 90; 
    
    // 360 derajat / 60 menit = 6 derajat per menit
    const minutesDegrees = ((minutes / 60) * 360) + ((seconds / 60) * 6) + 90;
    
    // 360 derajat / 12 jam = 30 derajat per jam
    const hoursDegrees = ((hours / 12) * 360) + ((minutes / 60) * 30) + 90;

    // Menerapkan rotasi ke elemen jarum jam menggunakan CSS transform
    secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
    minHand.style.transform = `rotate(${minutesDegrees}deg)`;
    hourHand.style.transform = `rotate(${hoursDegrees}deg)`;
}

// Menjalankan fungsi setDate setiap 1 detik (1000 milidetik)
setInterval(setDate, 1000);

// Menjalankan fungsi saat pertama kali halaman dimuat
setDate();