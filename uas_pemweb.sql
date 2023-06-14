-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2023 pada 06.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$d/yunDh.u8IDpiIS.KmqSeS35Q2h7qbfhGMkpeNkN/dd4N1LR6mC2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'Sayur'),
(4, 'Buah'),
(5, 'Sembako'),
(6, 'Obat'),
(7, 'Bumbu'),
(8, 'Perlengkapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `code`
--

CREATE TABLE `code` (
  `id_code` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `claim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `code`
--

INSERT INTO `code` (`id_code`, `code`, `id_transaction`, `claim`) VALUES
(1, '12345', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qt` int(11) NOT NULL,
  `product_uom` int(11) NOT NULL,
  `product_category` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `toko_id`, `name`, `price`, `qt`, `product_uom`, `product_category`, `image`, `description`) VALUES
(1, 1, 'Kopi Susu', 5000, 50, 2, 2, 'Kopi Susu_0.34102300 1686641825.jpeg', 'Segelas kopi susu yang sedap memancarkan pesona yang tak tertandingi. Dalam setiap tegukan, harmoni antara cita rasa kopi yang kuat dan kelembutan susu terpadu dengan sempurna. Aroma kopi yang kaya menggoda indra penciuman, sementara rasa pahit yang halus meluncur di lidah.'),
(3, 1, 'Es Coklat', 10000, 50, 2, 2, 'Es Coklat_0.12898100 1686541343.jpeg', 'Es Coklat yang enak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_uom`
--

CREATE TABLE `product_uom` (
  `id_product_uom` int(11) NOT NULL,
  `uom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_uom`
--

INSERT INTO `product_uom` (`id_product_uom`, `uom`) VALUES
(1, 'Kg'),
(2, 'Pcs'),
(3, 'Ons');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seller`
--

INSERT INTO `seller` (`id_seller`, `username`, `name`, `email`, `password`) VALUES
(1, 'aldam', 'aldama', 'fihrisaldama015@gmail.com', '$2y$10$8gbVb7A9EAZjlpFh/XzA/.LHm6dJzDhKwzhooA12pTjrXcV2XevgS'),
(2, 'aldam', 'aldama', 'fihrisaldama06@gmail.com', '$2y$10$Iuye9/BtsbOEBdZAJsYxze05BbjK0DfAZp8ABdyYUDj1jMgGbPDDq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `star`
--

CREATE TABLE `star` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `star`
--

INSERT INTO `star` (`id`, `id_product`, `star`) VALUES
(1, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `toko_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `owner` int(11) NOT NULL,
  `image_profile` text NOT NULL,
  `status` int(11) NOT NULL,
  `pendapatan_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`toko_id`, `name`, `alamat`, `owner`, `image_profile`, `status`, `pendapatan_total`) VALUES
(1, 'aldamtoko', 'jl medayu', 1, 'aldamtoko_0.70212000 1686635923.png', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `toko_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `delivery_type` enum('Cash On Delivery','Diambil Di Toko','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `name`, `alamat`, `contact`, `status`, `toko_id`, `date`, `delivery_type`) VALUES
(1, 'pembeli 1', 'Jl. Rungkut Madya', '081222333444', 0, 1, '2023-06-11 07:47:21', 'Cash On Delivery');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id_transaction_detail` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_transaction` int(11) NOT NULL,
  `qt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaction_detail`
--

INSERT INTO `transaction_detail` (`id_transaction_detail`, `id_product`, `id_transaction`, `qt`) VALUES
(1, 1, 1, 1),
(2, 3, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id_code`),
  ADD KEY `fk_code_transaction` (`id_transaction`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_toko` (`toko_id`),
  ADD KEY `fk_product_puom` (`product_uom`),
  ADD KEY `fk_product_category` (`product_category`);

--
-- Indeks untuk tabel `product_uom`
--
ALTER TABLE `product_uom`
  ADD PRIMARY KEY (`id_product_uom`);

--
-- Indeks untuk tabel `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`);

--
-- Indeks untuk tabel `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_star_product` (`id_product`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`toko_id`),
  ADD KEY `fk_toko_owner` (`owner`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `fk_transaction_toko` (`toko_id`);

--
-- Indeks untuk tabel `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id_transaction_detail`),
  ADD KEY `fk_detail_transaction` (`id_transaction`),
  ADD KEY `fk_detail_product` (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `code`
--
ALTER TABLE `code`
  MODIFY `id_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686668476;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `product_uom`
--
ALTER TABLE `product_uom`
  MODIFY `id_product_uom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `star`
--
ALTER TABLE `star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `toko_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686668476;

--
-- AUTO_INCREMENT untuk tabel `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id_transaction_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686668476;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `fk_code_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`product_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_puom` FOREIGN KEY (`product_uom`) REFERENCES `product_uom` (`id_product_uom`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`toko_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `star`
--
ALTER TABLE `star`
  ADD CONSTRAINT `fk_star_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `fk_toko_owner` FOREIGN KEY (`owner`) REFERENCES `seller` (`id_seller`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_toko` FOREIGN KEY (`toko_id`) REFERENCES `toko` (`toko_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD CONSTRAINT `fk_detail_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_detail_transaction` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id_transaction`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
