-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 14.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warmoed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `katagori`
--

CREATE TABLE `katagori` (
  `id_katagori` int(11) NOT NULL,
  `nama_katagori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katagori`
--

INSERT INTO `katagori` (`id_katagori`, `nama_katagori`) VALUES
(1, 'Nasi Liwet'),
(2, 'Lontong Opor'),
(3, 'Minuman'),
(4, 'Menu Catering'),
(5, 'Nasi Goreng'),
(6, 'Kekinian'),
(7, 'Paket'),
(8, 'Catering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `date_created` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_produk`, `id_user`, `jumlah`, `total_harga`, `status`, `date_created`) VALUES
(31, 1, 1, 2, '40000', 0, 1618229605),
(32, 2, 1, 1, '20000', 0, 1618229614);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kategori` int(100) NOT NULL,
  `sub_katagori` int(50) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `min_order` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `gambar_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `kategori`, `sub_katagori`, `nama_menu`, `keterangan`, `harga`, `min_order`, `stok`, `gambar_menu`) VALUES
(1, 7, 0, 'Paket Nasi Liwet', 'Nasi liwet dan Es Teh', '20000', 1, 1, 'ayamsaus.jpg'),
(2, 6, 0, 'Nasi Box Ayam Sambel Oseng Mercon', 'Nasi + Ayam Tepung + menu box', '20000', 1, 1, 'ayambbq.jpg'),
(3, 8, 0, 'Pesan Skala Catering / Untuk Acara', 'Minimal Pemesanan adalah 15 box makanan.\r\nHarga spesial untuk pemesanan >= 15 box yaitu Rp 18.500 / box nya.\r\n\r\nUntuk wadah makanannya menggunakan Paper lunch box ( seperti biasanya ).\r\n\r\nuntuk informasi lainnya bisa hubungi admin.', '18500', 15, 1, 'nasgorspesial.jpg'),
(6, 6, 0, 'Nasi Goreng Spesial', 'Nasi Goreng Spesial', '20000', 1, 1, 'nasgorspesial.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesanan` text NOT NULL,
  `alamat` text NOT NULL,
  `gambar_payment` varchar(255) NOT NULL,
  `date_created` int(255) NOT NULL,
  `status` int(20) NOT NULL,
  `mode_pengiriman` varchar(255) NOT NULL,
  `date_pengiriman` int(255) NOT NULL,
  `date_diterima` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `nama`, `pesanan`, `alamat`, `gambar_payment`, `date_created`, `status`, `mode_pengiriman`, `date_pengiriman`, `date_diterima`) VALUES
(8, 1, 'Nico Fernades', 'null', '0', '0', 1609334031, 0, 'Go-Send', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `long` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `notlpn` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `is_active` int(2) NOT NULL,
  `role_id` int(2) NOT NULL,
  `tgl_gabung` int(255) NOT NULL,
  `kode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `kota`, `kecamatan`, `alamat`, `long`, `lat`, `notlpn`, `gambar`, `is_active`, `role_id`, `tgl_gabung`, `kode`) VALUES
(1, 'Nico F', 'nico231737@gmail.com', '$2y$10$/NMukeMHUr69KHk6IGv8tuCl.ZWn2giwCb3lt76/pBZh5PKnI9MNC', 'Semarang', 'Banyumanik, Semarang', 'Jl Jati Cerah No 22, Kelurahan Pedalangan. ', '', '', '082136844295', 'default.png', 1, 2, 1609173145, ''),
(13, 'Raras MD', 'raraschoki144@gmail.com', '$2y$10$OMz7jMRJvIXVgXWCLbqhMu4P2ta6Hi7gdR6iysMKGRGRN.hS3Q/1O', '', 'Gendingan', 'Jl Pandansari V no 385', '', '', '08234619945', 'default.png', 1, 2, 0, '6886'),
(37, 'Hahaha', 'mabakampus@gmail.com', '$2y$10$XWUsNMYuqRk1ngtNuFiUPeEh3/x2OZTSFxkroen8nca0kTxrHYqpm', '', '', '', '', '', '0821399487', 'default.png', 1, 2, 1609485728, '4713'),
(38, 'Raras Nakal', 'mabastanid@gmail.com', '$2y$10$1a5/NrLPWJZwUqxjzixmEOY2.zdS.hiBwEnMNz2OB7o9Ca9HzYWBi', '', '', '', '', '', '08213697573', 'default.png', 1, 2, 1609486549, '7075');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` int(255) NOT NULL,
  `date_created` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'nico231737@gmail.com', 0, 1609173145),
(2, 'raraschoki144@gmail.com', 0, 1609217511);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `katagori`
--
ALTER TABLE `katagori`
  ADD PRIMARY KEY (`id_katagori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `katagori`
--
ALTER TABLE `katagori`
  MODIFY `id_katagori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
