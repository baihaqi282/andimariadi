-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2018 pada 15.10
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
('E01', 'Romeo', 'muhammad    ', 'A/01', '2x2', '16.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id_blok` varchar(11) NOT NULL,
  `nama_blok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id_blok`, `nama_blok`) VALUES
('B01', 'A/01');

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
  `id` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `pokok` varchar(15) NOT NULL,
  `ppn` varchar(15) NOT NULL,
  `administrasi` varchar(15) NOT NULL,
  `denda` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ppn` varchar(15) NOT NULL,
  `denda` varchar(15) NOT NULL,
  `total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('L01', 'Los1', 'muhammad  ', 'A/01', '4x2', '20.000');

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
('P01', 'muhammad ', '456', 'jln.basuki rahmat', '0897');

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
  `id_jenis` varchar(11) NOT NULL,
  `level` varchar(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `tempat`, `tanggal`, `jabatan`, `alamat`, `id_jenis`, `level`, `user`, `password`, `jk`) VALUES
('1', 'Admin', '1', '2018-01-01', 'admin', 'jln basuki', '1', '1', 'admin', '202cb962ac59075b964b07152d234b70', '1');

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
('T01', 'Sinar Mas', 'muhammad       ', 'A/01', '4x6', '200.000');

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
  ADD PRIMARY KEY (`id`);

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
