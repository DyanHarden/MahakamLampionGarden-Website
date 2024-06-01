-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 15.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lampiongardensmd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_akun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `password`, `role_akun`) VALUES
(1, 'rayhan', 'ray123', 'ray@gmail.com', '$2y$10$8Jp1ZcmoxXkhLhhc4gwJieiy8rp7A0mxfwff/jhDPIbmS0jFyNZLa', 'admin'),
(2, 'Abdullah Faiz', 'faizges', 'faiz1@gmail.com', '$2y$10$qKtijSXpAGKm0DvDKWcSiuETxDNNmR.z7GyRZoMhQ1iQ5deG67A4S', 'user'),
(3, 'Rikad Anggoro', 'rikad1', 'rikadomilos@gmail.com', '$2y$10$pntdW5MUVXW5jn5wEqgy1uyNZf.ZhIgkNadu8Yc8eZLEh3zXm97Si', 'user'),
(4, 'Dian Nurdiansyah', 'dian12ar', 'mhddiansyah@gmail.com', '$2y$10$j3lB7BXZrhdTNlQ12AU6r.DvSjNhuSp7yYGuMcWhARP1pWtYbHVSC', 'user'),
(5, 'Fauzan GH', 'fauzan1', 'fauzan@yahoo.com', '$2y$10$.6TOFSo9mz48mmMtLD18hutoer6qp.db0ENrNjkD6DLF0BmyJcNea', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` enum('Menunggu','Disetujui','Ditolak') NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `status`, `id_akun`) VALUES
(39, 'Promo Kuliner Spesial di Mahakam Lampion Garden', '<div>Mahakam Lampion Garden di Samarinda terkenal dengan keindahan lampionnya yang mempesona dan suasananya <em>Riversidenya</em>. Namun, kali ini ada yang lebih istimewa yang bisa dinikmati pengunjung selain pemandangan indah dan spot foto yang instagramable. Selama bulan ini, Mahakam Lampion Garden mengadakan Promo Kuliner Spesial yang sayang untuk dilewatkan!&nbsp;<br><br></div><div><strong>Menu Spesial yang Menggoda</strong></div><div>Dalam rangka promo ini, Mahakam Lampion Garden bekerja sama dengan beberapa restoran lokal terbaik di Samarinda untuk menyajikan berbagai hidangan spesial. Pengunjung dapat menikmati:<br><br></div><ul><li><strong>Nasi Kuning Mahakam</strong> - Hidangan khas Samarinda yang disajikan dengan sentuhan spesial dari koki terbaik, membuatnya semakin nikmat disantap di bawah cahaya lampion.</li><li><strong>Sate Ayam Samarinda</strong> - Potongan daging ayam yang juicy dan bumbu kacang yang kaya rasa, sempurna untuk menghangatkan malam yang sejuk.</li><li><strong>Pisang Gapit</strong> - Camilan manis khas Kalimantan yang disajikan dengan saus karamel yang lezat, cocok sebagai penutup yang manis.</li><li><strong>Es Kelapa Muda Lampion</strong> - Minuman segar dengan es kelapa muda, disajikan dalam kelapa asli dan dihiasi dengan potongan buah segar.</li></ul><div><strong>Kejutan Setiap Malam</strong></div><div>Setiap malam, ada kejutan spesial untuk pengunjung. Dari diskon besar-besaran hingga hadiah menarik bagi mereka yang beruntung. Misalnya, setiap pembelian minimal Rp100.000, pengunjung berkesempatan untuk mengikuti undian berhadiah tiket masuk gratis atau voucher makan malam untuk dua orang di restoran mitra.<br><br></div><div><strong>Pengalaman yang Berkesan</strong></div><div>Selama promo ini, setiap sudut Mahakam Lampion Garden dipenuhi dengan aroma makanan yang menggugah selera, suara tawa, dan keceriaan pengunjung yang menikmati malam mereka. Suara alunan musik tradisional samar dari kejauhan menambah suasana malam menjadi lebih indah.&nbsp;<br><br></div><div><strong>Ayo, Jangan Sampai Ketinggalan!</strong></div><div>Promo Kuliner Spesial ini hanya berlangsung selama satu bulan. Jadi, jangan sampai ketinggalan! Ajak keluarga, teman, atau pasangan Anda untuk menikmati malam yang penuh dengan keajaiban dan kelezatan di Mahakam Lampion Garden. Kami tunggu kehadiran Anda!&nbsp;</div>', '6656e360b8d91.jpg', 'Disetujui', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `fk_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
