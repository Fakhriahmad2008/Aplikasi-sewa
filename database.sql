DROP DATABASE IF EXISTS sewa_elektronik;

CREATE DATABASE sewa_elektronik;

USE sewa_elektronik;

CREATE TABLE penyewaan (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nama_penyewa VARCHAR(100) NOT NULL,

    no_telepon VARCHAR(20) NOT NULL,

    barang TEXT NOT NULL,

    hari INT NOT NULL,

    total_harga INT NOT NULL,

    gambar TEXT NOT NULL,

    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

INSERT INTO penyewaan
(
    nama_penyewa,
    no_telepon,
    barang,
    hari,
    total_harga,
    gambar
)

VALUES

(
    'Fakhri',
    '081234567890',
    'Canon Kamera, Samsung',
    3,
    810000,
    'img/canon.jpg'
),

(
    'Budi',
    '089876543210',
    'Asus',
    2,
    500000,
    'img/asus.jpg'
),

(
    'Rina',
    '082211223344',
    'Samsung',
    5,
    600000,
    'img/samsung.jpg'
);