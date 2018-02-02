-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Feb 2018 pada 13.14
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uptd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bak`
--

CREATE TABLE `bak` (
  `id_peti` varchar(11) NOT NULL,
  `nama_peti` varchar(50) NOT NULL,
  `id_penyewa` varchar(50) NOT NULL,
  `id_blok` varchar(50) NOT NULL,
  `ukuran` varchar(25) NOT NULL,
  `harga_sewa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bak`
--

INSERT INTO `bak` (`id_peti`, `nama_peti`, `id_penyewa`, `id_blok`, `ukuran`, `harga_sewa`) VALUES
('E01', 'Romeo', 'muhammad    ', 'A/01', '2x2', '16.000'),
('E02', 'abs', 'muhammad ', 'A/02', '4x2', '16.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id_blok` varchar(11) NOT NULL,
  `nama_blok` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id_blok`, `nama_blok`) VALUES
('01', 'A/01'),
('02', 'A/02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
('J01', 'Kebersihan'),
('J02', 'Lahan Parkir'),
('J03', 'WC Umum'),
('J04', 'Ketertiban'),
('J05', 'Harian Umum Toko'),
('J06', 'Pelataran Pasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jpfp`
--

CREATE TABLE `jpfp` (
  `id_jpfp` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `retribusi` varchar(15) NOT NULL,
  `denda` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jpfp`
--

INSERT INTO `jpfp` (`id_jpfp`, `tgl`, `jenis`, `bulan`, `retribusi`, `denda`, `total`) VALUES
('01', '2018-02-01', 'Harian Umum Toko', 'Feb', '100000', '', '111500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jpftu`
--

CREATE TABLE `jpftu` (
  `id` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `jenis_jpftu` varchar(25) NOT NULL,
  `id_` varchar(11) NOT NULL,
  `idindeks` varchar(11) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `retribusi` varchar(15) NOT NULL,
  `denda` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jpftu`
--

INSERT INTO `jpftu` (`id`, `tgl`, `jenis_jpftu`, `id_`, `idindeks`, `bulan`, `retribusi`, `denda`, `total`) VALUES
('01', '2018-01-31', 'toko', 'T01', 'A/01', 'Jan', '100000', '6000', '116000'),
('02', '2018-01-31', 'toko', 'T04', 'B/02', 'Jan', '100000', '6000', '116000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `los`
--

CREATE TABLE `los` (
  `id_los` varchar(11) NOT NULL,
  `nama_los` varchar(255) NOT NULL,
  `id_penyewa` varchar(11) NOT NULL,
  `id_blok` varchar(11) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga_sewa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `los`
--

INSERT INTO `los` (`id_los`, `nama_los`, `id_penyewa`, `id_blok`, `ukuran`, `harga_sewa`) VALUES
('L01', 'Los1', 'muhammad  ', 'A/01', '4x2', '20.000'),
('L02', 'NU', 'ahmad', 'A/01', '4x4', '200.000'),
('L03', 'Kios Abdi', 'ahmad', 'A/03', '2x2', '16.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` varchar(11) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `ktp` varchar(16) NOT NULL,
  `alamat_penyewa` varchar(250) NOT NULL,
  `telpon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nama_penyewa`, `ktp`, `alamat_penyewa`, `telpon`) VALUES
('P01', 'muhammad ', '456', 'jln.basuki rahmat', '0897'),
('P02', 'ahmad', '1234577890', 'hikun', '0852341234'),
('P03', 'm.rasyid', '1234', 'banjar', '0897');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_petugas` varchar(15) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `tempat`, `tanggal`, `jabatan`, `alamat`, `status_petugas`, `user`, `password`) VALUES
('01', 'Hakki', 'bjb', '2018-01-02', 'saya', 'ane', 'admin', 'bagus', '17b38fc02fd7e92f3edeb6318e3066d8'),
('02', 'Rangga Orvie', 'Sulingan', '2018-01-29', 'Staff', 'jln.basuki rahmat', 'petugas', 'rangga', '863c2a4b6bff5e22294081e376fc1f51'),
('03', 'Ahmad Baihaqi', 'Banua Lawas', '2018-01-30', 'Staff', 'asfdsfdf', 'admin', 'baihaqi', 'd1652902023eb117cd6ddf04eddf11e0'),
('04', 'Ridha', 'kandangan', '1990-02-14', 'Staff', 'jln.banjar', 'petugas', 'ridha', '81dc9bdb52d04dc20036dbd8313ed055'),
('05', 'Hudha', 'mantri 4', '1993-06-03', 'Staff', 'jln mm', 'admin', 'huda', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` varchar(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `id_penyewa` varchar(20) NOT NULL,
  `id_blok` varchar(11) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga_sewa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `id_penyewa`, `id_blok`, `ukuran`, `harga_sewa`) VALUES
('T01', 'Sinar Mas', 'muhammad         ', 'A/01', '4x6', '200.000'),
('T02', 'baru', 'muhammad ', 'A/02', '4x4', '200.000'),
('T04', 'cahaya', 'm.rasyid ', 'B/02', '4x4', '200000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bak`
--
ALTER TABLE `bak`
  ADD PRIMARY KEY (`id_peti`);

--
-- Indexes for table `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jpfp`
--
ALTER TABLE `jpfp`
  ADD PRIMARY KEY (`id_jpfp`);

--
-- Indexes for table `jpftu`
--
ALTER TABLE `jpftu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `los`
--
ALTER TABLE `los`
  ADD PRIMARY KEY (`id_los`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
