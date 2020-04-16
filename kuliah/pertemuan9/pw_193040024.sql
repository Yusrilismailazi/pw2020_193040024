-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 16.33
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
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Muhammad Rizky Fauzan', '193040014', '193040014.muhammad@mail.unpas.ac.id', 'Teknik Informatika', 'Ijoy.jpg'),
(2, 'Ilham Akmal Rafi', '193040038', '19300038.ilham@mail.unpas.ac.id', 'Teknik Informatika', 'Ilham.jpg'),
(3, 'Aji Fattah', '193040012', '193040012.aji@mail.unpas.ac.id', 'Teknik Informatika', 'Aji.jpg'),
(4, 'Yusril Ismail Azi', '193040024', '193040024.yusril@mail.unpas.ac.id', 'Teknik Informatika', 'Yusril.jpg'),
(5, 'Alwi Ramadhan', '193040029', '193040029.alwi@mail.unpas.ac.id', 'Teknik Informatika', 'Alwi.jpg'),
(6, 'Agung Gumelar', '193040008', '193040008.agung@mail.unpas.ac.id', 'Teknik Informatika', 'Agung.jpg'),
(7, 'Daffa', '193040036', '193040036.daffa@mail.unpas.ac.id', 'Teknik Informatika', 'Daffa.jpg'),
(8, 'Taufik Hidayat ', '193040019', '193040019.taufik@mail.unpas.ac.id', 'Teknik Informatika', 'Taufik.jpg'),
(9, 'Mohammad Rizki Ramdani', '193040016', '193040016.mohammad@mail.unpas.ac.id', 'Teknik Informatika', 'kiki.jpg'),
(10, 'Zahra Dwi Amelliar', '193040027', '193040027.zahra@mail.unpas.ac.id', 'Teknik Informatika', 'Zahra.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
