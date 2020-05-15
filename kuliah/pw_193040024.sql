-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2020 pada 14.37
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
(9, 'Suling', 'Yamaha', 'Tiup', 'Rp.155.000', 'suling.png'),
(10, 'Biola', 'Vienna', 'Gesek', 'Rp.1.100.000', 'biola.jpg');

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
(1, 'Muhammad Rizky Fauzan', '193040014', '193040014.muhammad@mail.unpas.ac.id', 'Teknik Informatika', 'Ijoy.jpeg'),
(2, 'Ilham Akmal Rafi', '193040038', '19300038.ilham@mail.unpas.ac.id', 'Teknik Informatika', 'Ilham.jpeg'),
(3, 'Aji Fattah', '193040012', '193040012.aji@mail.unpas.ac.id', 'Teknik Informatika', 'Aji.jpeg'),
(4, 'Yusril Ismail Azi', '193040024', '193040024.yusril@mail.unpas.ac.id', 'Teknik Informatika', 'Yusril.jpeg'),
(5, 'Alwi Ramadhan', '193040029', '193040029.alwi@mail.unpas.ac.id', 'Teknik Informatika', 'Alwi.jpeg'),
(6, 'Agung Gumelar', '193040008', '193040008.agung@mail.unpas.ac.id', 'Teknik Informatika', 'Agung.jpeg'),
(7, 'Daffa', '193040036', '193040036.daffa@mail.unpas.ac.id', 'Teknik Informatika', 'Daffa.jpeg'),
(8, 'Taufik Hidayat ', '193040019', '193040019.taufik@mail.unpas.ac.id', 'Teknik Informatika', 'Opik.jpeg'),
(9, 'Mohammad Rizki Ramdani', '193040016', '193040016.mohammad@mail.unpas.ac.id', 'Teknik Informatika', 'kiki.jpeg'),
(10, 'Zahra Dwi Amelliar', '193040027', '193040027.zahra@mail.unpas.ac.id', 'Teknik Informatika', 'Zahra.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'yusril30', '$2y$10$DmS4q/saxy8J22nk.gSjQuCrXNULRjQciijtCFn38fwR4V9wKtj2K'),
(4, '', '$2y$10$5aDBAIcaFQdd.v4grPUNfeIVHrqvOYR6GdfVCuJVB180k/0vMpzlq'),
(5, 'yusrilazi', '$2y$10$y0V5uOnwvLJGvXFDzMBfQO.u1SKKNCYWUab/YUHzsofUOVGrsrF/u'),
(6, 'yusrilzi', '$2y$10$EF5DvkHKe1JCyi7IIryjCu2mySG/DSAYAnH.0HLym3F1017LRvlKG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_musik`
--
ALTER TABLE `alat_musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
