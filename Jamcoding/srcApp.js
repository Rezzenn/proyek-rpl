// Menunggu sampai seluruh konten HTML selesai dimuat sebelum menjalankan JavaScript
document.addEventListener('DOMContentLoaded', function() {

    // Langkah 1: Simpan semua data siswa dalam sebuah array of objects.
    // Ini memisahkan data dari tampilan, membuatnya lebih mudah dikelola.
    const dataSiswa = [
        {
            nama: 'Reza Panji Pratama',
            kelas: 'X RPL',
            tinggi: '165 cm',
            gambarUrl: 'asset/reza.png'
        },
        {
            nama: 'M.Aqmal Fadhilah',
            kelas: 'X PM 1',
            tinggi: '???',
            gambarUrl: 'asset/aqmal.png'
        },
        {
            nama: 'Zhariif Khayran Aqil',
            kelas: 'X PPLG',
            tinggi: '100 cm',
            gambarUrl: 'asset/zharif2.png'
        }
    ];

    // Langkah 2: Temukan elemen "wadah" di HTML tempat kita akan menaruh kartu.
    const container = document.querySelector('.container');

    // Langkah 3: Kosongkan container terlebih dahulu untuk memastikan tidak ada data duplikat.
    container.innerHTML = '';

    // Langkah 4: Ulangi (loop) setiap item di dalam array dataSiswa.
    dataSiswa.forEach(siswa => {
        // Untuk setiap siswa, buat sebuah string HTML untuk kartunya.
        // Kita menggunakan backtick (`) agar bisa memasukkan variabel langsung ke dalam string.
        const kartuHTML = `
            <div class="kartu-siswa">
                <div class="foto-profil">
                    <img src="${siswa.gambarUrl}" alt="Foto ${siswa.nama}">
                </div>
                <div class="info-siswa">
                    <p class="nama">${siswa.nama}</p>
                    <p><strong>Kelas:</strong> ${siswa.kelas}</p>
                    <p><strong>Tinggi:</strong> ${siswa.tinggi}</p>
                </div>
            </div>
        `;

        // Langkah 5: Masukkan string HTML yang baru dibuat ke dalam container.
        container.insertAdjacentHTML('beforeend', kartuHTML);
    });

    // (Opsional) Menambahkan sedikit interaktivitas
    // Beri event listener pada setiap kartu yang baru dibuat
    const semuaKartu = document.querySelectorAll('.kartu-siswa');
    semuaKartu.forEach(kartu => {
        kartu.addEventListener('click', function() {
            // Ambil nama dari elemen <p class="nama"> di dalam kartu yang diklik
            const namaSiswa = kartu.querySelector('.nama').textContent;
            alert(`Kamu mengklik kartu milik: ${namaSiswa}`);
        });
    });

});