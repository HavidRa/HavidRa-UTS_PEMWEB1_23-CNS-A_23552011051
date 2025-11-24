CREATE DATABASE IF NOT EXISTS techsolution_db;
USE techsolution_db;

CREATE TABLE IF NOT EXISTS informasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    gambar VARCHAR(255),
    konten TEXT NOT NULL,
    tanggal_publikasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    penulis VARCHAR(100) DEFAULT 'Admin',
    status ENUM('active', 'inactive') DEFAULT 'active'
);

INSERT INTO informasi (judul, gambar, konten, penulis) VALUES
(
    'TechSolution Raih Penghargaan Inovasi Digital 2023',
    'https://via.placeholder.com/800x400',
    'TechSolution dengan bangga mengumumkan bahwa perusahaan kami telah meraih penghargaan Inovasi Digital 2023 untuk kategori Solusi AI Terbaik.',
    'Havid Restu Afyantara'
),
(
    'Workshop Teknologi Blockchain untuk UMKM',
    'https://via.placeholder.com/800x400', 
    'TechSolution akan menyelenggarakan workshop gratis tentang pemanfaatan teknologi blockchain untuk Usaha Mikro, Kecil, dan Menengah (UMKM).',
    'Sarah Johnson'
),
(
    'Rilis Produk Baru: SmartOffice Suite',
    'https://via.placeholder.com/800x400',
    'TechSolution dengan bangga mengumumkan peluncuran SmartOffice Suite, solusi all-in-one untuk produktivitas kantor modern.',
    'Michael Chen'
);