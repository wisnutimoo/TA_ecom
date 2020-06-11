-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 15.54
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(2, 'Handphone', 'Iphone 11 Pro ', 'hp', 19000000, 4, 'hp1.jpg'),
(5, 'Kamera', 'Kamera Fujifilm X-A01', 'Kamera', 12000000, 4, 'kamera1.jpg'),
(8, 'Laptop', 'Laptop Asus VivoBook', 'Elektronik', 8000000, 14, 'laptop1.jpg'),
(11, 'Kamera Canon', 'Kamera DSLR Canon', 'Kamera', 5000000, 9, 'canon1.jpg'),
(12, 'Tongsis ', 'Tongsis Gurita', 'Aksesoris', 50000, 10, 'tongsis1.jpg'),
(13, 'Mixer', 'Mixer Portable', 'Elektronik', 4500000, 9, 'mixer2.jpg'),
(14, 'HP ', 'HP Samsung A50', 'Hp', 3500000, 5, 'hpsamsung1.jpg'),
(15, 'HP ', 'HP Xiaomi Redmi Note 7', 'Hp', 1850000, 15, 'hp21.jpg'),
(16, 'TV Panasonic', 'TV LED Panasonnic', 'Elektronik', 4500000, 5, 'tvpanasonic1.jpg'),
(17, 'Blender', 'Blender Pink Cantik', 'Elektronik', 350000, 4, 'blender1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Arvita', 'Semarang', '2020-04-03 11:00:53', '2020-04-04 11:00:53'),
(3, 'bambang', 'Semarang', '2020-04-03 11:42:59', '2020-04-04 11:42:59'),
(4, '', '', '2020-04-04 20:24:29', '2020-04-05 20:24:29'),
(5, '', '', '2020-04-04 20:24:55', '2020-04-05 20:24:55'),
(6, 'Arvita', 'Jakarta Barat', '2020-04-08 01:41:28', '2020-04-09 01:41:28'),
(7, 'Arvita', 'Jakarta Barat', '2020-04-08 01:42:06', '2020-04-09 01:42:06'),
(8, 'Arvita', 'Jakarta Barat', '2020-04-08 01:43:39', '2020-04-09 01:43:39'),
(9, 'Arvita', 'Jakarta Barat', '2020-04-08 01:44:06', '2020-04-09 01:44:06'),
(10, 'Arvita', 'Jakarta Barat', '2020-04-08 01:44:27', '2020-04-09 01:44:27'),
(11, '', '', '2020-04-08 01:49:54', '2020-04-09 01:49:54'),
(12, '', '', '2020-04-08 01:49:55', '2020-04-09 01:49:55'),
(13, '', '', '2020-04-08 01:49:55', '2020-04-09 01:49:55'),
(14, '', '', '2020-04-08 01:56:21', '2020-04-09 01:56:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(2, 1, 3, 'Jam', 1, 15000000, ''),
(3, 0, 3, 'Jam', 1, 15000000, ''),
(4, 3, 5, 'Kamera', 1, 12000000, ''),
(5, 4, 2, 'Handphone', 1, 19000000, ''),
(6, 4, 13, 'Mixer', 1, 4500000, ''),
(7, 5, 2, 'Handphone', 1, 19000000, ''),
(8, 6, 8, 'Laptop', 1, 8000000, ''),
(9, 11, 11, 'Kamera Canon', 1, 5000000, ''),
(10, 14, 5, 'Kamera', 1, 12000000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg =NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
