# Sistem Informasi Data Siswa

Aplikasi web PHP sederhana untuk manajemen data siswa dengan fitur login dan CRUD (Create, Read, Update, Delete).
Dibuat oleh Reza Panji Pratama dengan bantuan AI.

## Tahap 1: Persiapan Database

1. Buka phpMyAdmin (http://localhost/phpmyadmin)
2. Buat database baru dengan nama `data_siswa`
3. Import file `database/data_login.sql` yang berisi struktur tabel:
   - Tabel `users` untuk autentikasi
   - Tabel `siswa` untuk data siswa

```sql
-- Struktur Database
CREATE DATABASE data_siswa;
USE data_siswa;

-- Tabel users untuk login
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Tabel siswa untuk CRUD
CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nisn VARCHAR(20) NOT NULL UNIQUE,
    jurusan VARCHAR(50) NOT NULL
);
```

## Tahap 2: Struktur File

```
📁 data_login/
├── 📄 index.php          # Halaman tambah data (protected)
├── 📄 login.php          # Halaman login
├── 📄 logout.php         # Proses logout
├── 📄 register.php       # Halaman registrasi
├── 📄 tampil.php         # Menampilkan data siswa
├── 📄 simpan.php         # Proses simpan data
├── 📄 edit.php           # Form edit data
├── 📄 update.php         # Proses update data
├── 📄 hapus.php          # Proses hapus data
├── 📁 config/
│   └── 📄 koneksi.php    # Konfigurasi database
├── 📁 asset/
│   └── 📁 css/
│       └── 📄 style.css  # File CSS
└── 📁 database/
    └── 📄 data_login.sql # Backup database
```

## Tahap 3: Implementasi Fitur

### 3.1 Koneksi Database (`config/koneksi.php`)
- Konfigurasi koneksi MySQL menggunakan mysqli
- Parameter: host, username, password, nama database

### 3.2 Sistem Autentikasi
- **Login (`login.php`)**
  - Form login dengan username dan password
  - Validasi credentials terhadap tabel `users`
  - Membuat session setelah login berhasil

- **Logout (`logout.php`)**
  - Menghapus session
  - Redirect ke halaman login

### 3.3 Manajemen Data Siswa (CRUD)
- **Create (`index.php`, `simpan.php`)**
  - Form input data siswa
  - Validasi input
  - Penyimpanan ke database

- **Read (`tampil.php`)**
  - Menampilkan data dalam bentuk tabel
  - Tombol aksi (Edit/Hapus)
  - Paginasi (opsional)

- **Update (`edit.php`, `update.php`)**
  - Form edit data
  - Validasi input
  - Update data di database

- **Delete (`hapus.php`)**
  - Konfirmasi penghapusan
  - Penghapusan data dari database

## Tahap 4: Keamanan

1. **Session Management**
   - Validasi session di setiap halaman protected
   - Timeout session
   - Secure session configuration

2. **Input Validation**
   - Sanitasi input user
   - Prepared statements untuk query
   - Validasi tipe data

3. **Password Security**
   - Hashing password (menggunakan password_hash)
   - Validasi password yang aman

## Tahap 5: Styling (CSS)

File `asset/css/style.css` berisi:
- Layout responsif
- Desain form
- Tabel data
- Tombol dan elemen UI lainnya

## Cara Penggunaan

1. **Setup Database**
   ```sql
   -- Buat database
   CREATE DATABASE data_siswa;
   
   -- Import struktur tabel
   mysql -u root -p data_siswa < database/data_login.sql
   ```

2. **Konfigurasi Koneksi**
   - Edit file `config/koneksi.php`
   - Sesuaikan parameter database

3. **Jalankan Aplikasi**
   - Akses melalui browser: `http://localhost/data_login`
   - Login dengan akun yang sudah terdaftar
   - Mulai mengelola data siswa

## Fitur Tambahan (Opsional)

1. Export data ke Excel/PDF
2. Upload foto siswa
3. Filter data berdasarkan jurusan
4. Pencarian data siswa
5. Reset password
6. Log aktivitas user

## Troubleshooting

1. **Masalah Koneksi Database**
   - Periksa parameter di `koneksi.php`
   - Pastikan service MySQL berjalan
   - Cek hak akses user database

2. **Error Session**
   - Pastikan `session_start()` di awal file
   - Cek konfigurasi PHP untuk session

3. **Masalah Upload**
   - Periksa permission folder
   - Pastikan setting `upload_max_filesize` di php.ini