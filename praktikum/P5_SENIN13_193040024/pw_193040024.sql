-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 07.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040024`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `cara_permainan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `nama_alat`, `merk`, `cara_permainan`, `harga`, `gambar`) VALUES
(1, 'Gitar', 'Yamaha', 'Petik', 'Rp.700.000', 'gitar.png'),
(2, 'Bass', 'Fender', 'Petik', 'Rp.1.300.000', 'bass.jpg'),
(3, 'Drum', 'Rolling', 'pukul', 'Rp.1.500.000', 'drum.png'),
(4, 'Pianika', 'Marvel', 'Tiup', 'Rp.100.000', 'pianika.jpg'),
(5, 'Piano', 'Yamaha', 'Tekan', 'Rp.2.900.000', 'piano.jfif'),
(6, 'Trumpet', 'Marchingband', 'Tiup', 'Rp.2.350.000', 'terompet.jfif'),
(7, 'Jimbe', 'Maxtone', 'Pukul', 'Rp.250.000', 'jimbe.jpg'),
(8, 'Kecapi', 'Siter', 'Petik', 'Rp.500.000', 'kecapi.jpg'),
(9, 'Suling', 'Yamaha', 'Tiup', 'Rp.155.000', 'suling.jpg'),
(10, 'Biola', 'Vienna', 'Gesek', 'Rp.1.100.000', 'biola.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
