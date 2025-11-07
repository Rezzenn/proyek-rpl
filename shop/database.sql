CREATE DATABASE toko_online;
USE toko_online;

CREATE TABLE produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  harga DECIMAL(10,2),
  gambar VARCHAR(255),
  deskripsi TEXT
);

INSERT INTO produk (nama, harga, gambar, deskripsi) VALUES
('Sepatu Sneakers', 350000, 'sepatu.png', 'Sepatu nyaman untuk aktivitas harian.'),
('Tas Ransel', 200000, 'tas.png', 'Tas elegan cocok untuk sekolah dan kerja.'),
('Jam Tangan', 150000, 'jam.png', 'Jam tangan bergaya modern dan minimalis.');
