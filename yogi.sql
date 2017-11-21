-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21 Nov 2017 pada 09.59
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(100) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `kategori`, `stok`, `satuan`) VALUES
(2, 'Paracetamol', 'obat generik', '40', 'Box');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id_faktur` int(100) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `pasien` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_obat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_keluar`
--

INSERT INTO `obat_keluar` (`id_faktur`, `tanggal`, `pasien`, `keterangan`, `id_obat`) VALUES
(8, '25-05-2017', 'Osman', 'pusing', 2),
(9, '25-05-2017', 'Ade', 'Demam', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id_faktur` int(100) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_supplier` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat_masuk`
--

INSERT INTO `obat_masuk` (`id_faktur`, `tanggal`, `keterangan`, `id_supplier`) VALUES
(7, '21-04-2017', 'obat paracetamol', 2),
(8, '22-04-2017', 'Bodrex', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(100) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat`, `kota`, `telepon`) VALUES
(2, 'Dinas Kesehatan', 'Jl. Melur No. 103', 'Pekanbaru', '(0761)23213'),
(3, 'Bayer', 'Jl. Jendral Sudirman Kav. 10-11', 'Jakarta', '+62215703661');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('admin', 'admin', 'admin'),
('owner', 'owner', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id_faktur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id_faktur` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD CONSTRAINT `obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`);

--
-- Ketidakleluasaan untuk tabel `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD CONSTRAINT `supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
