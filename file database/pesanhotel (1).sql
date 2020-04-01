-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Apr 2020 pada 15.18
-- Versi server: 8.0.18
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesanhotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(255) NOT NULL,
  `jenis_kamar` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `jenis_kamar`, `harga`, `image`) VALUES
(9, 'Mawar', 'VVIP', 300000, ''),
(10, 'MawarMelati', 'VVIP2', 250000, ''),
(11, 'Cemara 2', 'VVIP', 4000000, ''),
(39, 'Hall', 'PUBLIC', 4000000, ''),
(42, 'wewewew', 'PUBLICS', 30, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`id_penyewa`, `nama_penyewa`, `no_hp`, `jenis_kelamin`) VALUES
(7, 'Septianda Reza Maulana', '082257125415', 'Laki-Laki'),
(8, 'Mirza Zarqani', '082230913815', 'Laki-Laki'),
(9, 'Alfan Naufal', '085624328309', 'Laki-Laki'),
(10, 'Mambaul Setyo Pangestu', '082233960827', 'Laki-Laki'),
(11, 'Ainur Hasan M', '085607664151', 'Laki-Laki'),
(21, 'Ainur Hasan M', '12', 'Laki-Laki'),
(22, 'awwwww', '123', 'Laki-Laki'),
(23, 'sudin', '44', 'Laki-Laki'),
(24, 'Alfan Ganteng', '123456', 'Laki-Laki'),
(25, 'Aouio', '12345', 'Laki-Laki'),
(26, 'alfannnnnn', '1234567', 'Laki-Laki'),
(27, 'AlfanGantenk', '123456', 'Laki-Laki'),
(28, 'Alfannnnnn', '3435', 'Laki-Laki'),
(29, 'Alfan Noufal Nasruddddddin', '12345', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_kamar`, `id_penyewa`, `tgl_sewa`, `tgl_checkout`, `status`) VALUES
(28, 10, 7, '2020-03-13', '2020-03-14', 'Ready'),
(29, 10, 9, '2020-03-13', '2020-03-13', 'Booked'),
(31, 11, 11, '2020-03-16', '2020-03-17', 'Ready'),
(33, 11, 10, '2020-03-16', '2020-03-16', 'Booked'),
(34, 10, 11, '2020-03-30', '2020-04-12', 'free'),
(35, 9, 9, '2020-03-31', '2020-04-04', 'Ready'),
(36, 9, 22, '2020-04-01', '2020-04-01', 'Booked'),
(37, 39, 9, '2020-04-01', '2020-04-01', 'Booked'),
(38, 9, 23, '2020-04-01', '2020-04-01', 'Booked'),
(39, 10, 9, '2020-04-01', '2020-04-01', 'Booked'),
(40, 9, 24, '2020-04-01', '2020-04-01', 'Booked'),
(41, 42, 9, '2020-04-01', '2020-04-01', 'Booked'),
(42, 39, 25, '2020-04-01', '2020-04-01', 'Booked'),
(43, 39, 26, '2020-04-01', '2020-04-01', 'Booked'),
(44, 39, 27, '2020-04-01', '2020-04-01', 'Booked'),
(45, 39, 28, '2020-04-01', '2020-04-01', 'Booked'),
(46, 39, 29, '2020-04-01', '2020-04-01', 'Booked');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `level`, `status`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin', 'Aktif'),
(3, 'Septianda Reza', 'septiandareza', 'septiandareza07@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'Aktif'),
(4, 'Alfan Nouval', 'alfan', 'alfan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'Aktif'),
(7, 'violet', 'violet', 'violet@gmail.com', '7856aa3caa7958278f743812441e1e83', 'user', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `id_penyewa` (`id_penyewa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
