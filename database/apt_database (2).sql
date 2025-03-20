-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2025 pada 17.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apt_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`, `waktu`) VALUES
(1, 'Bayu Patrio', 'bayupatrio178@gmail.com', 'saya', '2025-01-11 13:52:36'),
(2, 'Bayu Patrio', 'bayupatrio178@gmail.com', 'saya', '2025-01-11 13:53:49'),
(3, 'Yuu', 'bayupatrio178@gmail.com', 'saya', '2025-01-11 13:56:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `judul_materi` varchar(255) DEFAULT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `pertemuan_ke` int(11) DEFAULT NULL,
  `file_ppt` varchar(255) DEFAULT NULL,
  `file_doc` varchar(255) DEFAULT NULL,
  `file_buku` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `judul_materi`, `nama_guru`, `tanggal`, `pertemuan_ke`, `file_ppt`, `file_doc`, `file_buku`) VALUES
(1, 'Komponen-Komponen Komputer', 'Bayu Patrio', '2025-01-16 18:39:00', 6, 'uploads/sistem operasi kelompok 2.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `benefit` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `benefit`, `description`, `price`, `image_url`) VALUES
(1, 'Vitamin C 1000mg', 'Meningkatkan daya tahan tubuh, membantu regenerasi kulit, dan melindungi tubuh dari radikal bebas.', 'Vitamin C adalah suplemen yang membantu tubuh memenuhi kebutuhan antioksidan harian.', 50000.00, 'vitamin_c.jpg'),
(2, 'Paracetamol', 'Meredakan demam dan sakit kepala ringan hingga sedang.', 'Paracetamol merupakan obat analgesik dan antipiretik yang dapat digunakan oleh hampir semua golongan usia.', 20000.00, 'paracetamol.jpg'),
(3, 'Minyak Kayu Putih', 'Menghangatkan tubuh, meredakan perut kembung, dan melegakan pernapasan.', 'Minyak kayu putih memiliki sifat antimikroba alami yang membantu mencegah infeksi ringan pada kulit.', 30000.00, 'minyak_kayu_putih.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_entries`
--

CREATE TABLE `product_entries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `benefit` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product_entries`
--

INSERT INTO `product_entries` (`id`, `name`, `benefit`, `description`, `price`, `image_url`, `created_at`) VALUES
(1, '', '', '', 0.00, '', '2025-01-11 18:24:27'),
(2, 'Yuu', 's', 's', 200.00, '', '2025-01-11 18:27:20'),
(3, 'uq', 'd', '2', 12.00, '', '2025-01-11 18:31:52'),
(4, 'Yuu', 'a', 'a', 200.00, '', '2025-01-11 18:33:23'),
(5, 'Yuu', 'q', 'w', 200.00, '', '2025-01-11 18:47:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `waktu_kirim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `nama_siswa`, `kelas`, `file_path`, `waktu_kirim`) VALUES
(1, 'bayu patrio', '10', 'uploads/1736932597_sistem operasi kelompok 2.docx', '2025-01-15 09:16:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(2, 'Cesper', 'bayupatrio178@gmail.com', '$2y$10$9hbdR0ZPvpxahvbZcVPPZuSek.0KzE4MGwex6eZwIjFxQTb.arriu', 'admin', '2025-01-11 09:29:39'),
(3, 'yuu', 'bayupatrio@gmail.com', '$2y$10$dmVterPFY/HPcrF5pFrK6eS.KnLdx1Nqu3pTtBzioDN6gag7N.wle', 'admin', '2025-01-11 10:25:39'),
(4, 'yuu', 'bayupatrio@gmail.com', '$2y$10$1wn2p6olAQnMNr43WcZTOOx2PTSxIzmcRvyCFBuKyhcRJpD9QBuoO', 'admin', '2025-01-11 10:27:26'),
(5, 'Cesper', 'bayupatrio178@gmail.com', '$2y$10$GtYxFqU05agWxWgt3Pip.OP372S04MxiOh91jnnnPa7Fl59lSP6oO', 'admin', '2025-01-11 10:27:47'),
(6, 'admin', 'baru@gmail.com', 'admin123', 'admin', '2025-01-11 11:46:16'),
(8, 'user', 'user@gmail.com', '$2y$10$WpUPfEG8ZtOvLbrzbsJ/R.yAA.9f18YHBKmh7gP337xHDS6KEqyNu', 'user', '2025-01-11 12:31:33'),
(9, 'bayu', 'bayupatrio178@gmail.com', '$2y$10$OV1xEIh7AT1JgGyVzFUFquclbhZNd/XKWf1XJz8x4tDEdOcQmnn1q', 'user', '2025-01-11 12:35:19'),
(10, 'bayu', 'bayupatrio@gmail.com', '$2y$10$XP2VHcSe5vubkOmIbHy0YeN.wbW4KBSV0FOZwYK/j03.40dztRx0.', 'user', '2025-01-20 14:49:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_entries`
--
ALTER TABLE `product_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `product_entries`
--
ALTER TABLE `product_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
