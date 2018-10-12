-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 12 Okt 2018 pada 11.34
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgizi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `balita_id` int(11) NOT NULL,
  `kel_id` int(11) DEFAULT NULL,
  `posyandu_id` int(11) DEFAULT NULL,
  `balita_nik` varchar(20) NOT NULL,
  `balita_nama` varchar(100) NOT NULL,
  `balita_anak_ke` tinyint(4) DEFAULT NULL,
  `balita_anak_dari` tinyint(4) DEFAULT NULL,
  `balita_jk` char(1) DEFAULT NULL,
  `balita_tgl_lahir` date DEFAULT NULL,
  `balita_berat_lahir` float DEFAULT NULL,
  `balita_ortu_nama` varchar(100) DEFAULT NULL,
  `balita_ortu_nik` varchar(15) DEFAULT NULL,
  `balita_alamat` text,
  `balita_rt` char(3) DEFAULT NULL,
  `balita_rw` char(3) DEFAULT NULL,
  `balita_tlpn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`balita_id`, `kel_id`, `posyandu_id`, `balita_nik`, `balita_nama`, `balita_anak_ke`, `balita_anak_dari`, `balita_jk`, `balita_tgl_lahir`, `balita_berat_lahir`, `balita_ortu_nama`, `balita_ortu_nik`, `balita_alamat`, `balita_rt`, `balita_rw`, `balita_tlpn`) VALUES
(1, 2, 1, '090909', 'Agus', 1, 1, NULL, '0000-00-00', NULL, 'Margareta', NULL, 'Jl. Mars Timur No.90', '006', '001', '081320009091');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidan`
--

CREATE TABLE `bidan` (
  `bidan_id` int(11) NOT NULL,
  `puskesmas_id` int(11) DEFAULT NULL,
  `bidan_nama` varchar(100) NOT NULL,
  `bidan_nip` varchar(15) DEFAULT NULL,
  `bian_alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `posyandu_id` int(11) DEFAULT NULL,
  `jadwal_bulan` varchar(4) NOT NULL,
  `jadwal_tahun` varchar(4) NOT NULL,
  `jadwal_tgl` date NOT NULL,
  `jadwal_waktu` time DEFAULT NULL,
  `jadwal_kegiatan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `posyandu_id`, `jadwal_bulan`, `jadwal_tahun`, `jadwal_tgl`, `jadwal_waktu`, `jadwal_kegiatan`) VALUES
(1, 1, 'Octo', '2018', '2018-10-10', '03:30:00', 'a'),
(2, 2, 'Octo', '2018', '1970-01-01', '03:45:00', 'ab'),
(3, 1, 'Octo', '2018', '2018-10-09', '03:45:00', 'f'),
(4, 1, 'Octo', '2018', '2018-10-17', '03:30:00', 'd'),
(5, 1, 'Octo', '2018', '2018-10-16', '04:45:00', 's'),
(6, 2, 'July', '2018', '2018-07-03', '03:45:00', 'g');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pmt`
--

CREATE TABLE `jadwal_pmt` (
  `jadwal_pmt_id` int(11) NOT NULL,
  `jadwal_id` int(11) DEFAULT NULL,
  `pmt_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kader`
--

CREATE TABLE `kader` (
  `kader_id` int(11) NOT NULL,
  `posyandu_id` int(11) DEFAULT NULL,
  `kader_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kec_id` int(11) NOT NULL,
  `kec_kode` varchar(8) DEFAULT NULL,
  `kec_nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`kec_id`, `kec_kode`, `kec_nama`) VALUES
(1, '3273090', 'Buahbatu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `kel_id` int(11) NOT NULL,
  `kec_id` int(11) DEFAULT NULL,
  `kel_kode` varchar(8) DEFAULT NULL,
  `kel_nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`kel_id`, `kec_id`, `kel_kode`, `kel_nama`) VALUES
(1, 1, '32730900', 'CIJAURA'),
(2, 1, '32730900', 'MARGASARI'),
(3, 1, '32730900', 'SEKEJATI'),
(4, 1, '32730900', 'JATISARI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengukuran`
--

CREATE TABLE `pengukuran` (
  `ukur_id` int(11) NOT NULL,
  `jadwal_id` int(11) DEFAULT NULL,
  `balita_id` int(11) DEFAULT NULL,
  `ukur_usia` tinyint(4) DEFAULT NULL,
  `ukur_bb` float DEFAULT NULL,
  `ukur_tb` tinyint(4) DEFAULT NULL,
  `ukur_cara_ukur_tb` tinyint(4) DEFAULT NULL,
  `ukur_vitamin` char(1) DEFAULT NULL,
  `ukur_pmt_sts` char(1) DEFAULT NULL,
  `ukur_pmt_uraian` text,
  `ukur_catatan` text,
  `ukur_status_gizi` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pmt`
--

CREATE TABLE `pmt` (
  `pmt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posyandu`
--

CREATE TABLE `posyandu` (
  `posyandu_id` int(11) NOT NULL,
  `kel_id` int(11) DEFAULT NULL,
  `puskesmas_id` int(11) DEFAULT NULL,
  `posyandu_nama` varchar(100) NOT NULL,
  `posyandu_alamat` text,
  `posyandu_rt` char(3) DEFAULT NULL,
  `posyandu_rw` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posyandu`
--

INSERT INTO `posyandu` (`posyandu_id`, `kel_id`, `puskesmas_id`, `posyandu_nama`, `posyandu_alamat`, `posyandu_rt`, `posyandu_rw`) VALUES
(1, 2, 1, 'Posyandu RW I', 'Jl. Pluto No. 90', '002', '001'),
(2, 2, 1, 'Posyandu RW II', 'Jl. Saturnus No. 78', '009', '002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `puskesmas_id` int(11) NOT NULL,
  `kec_id` int(11) DEFAULT NULL,
  `puskesmas_nama` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `puskesmas`
--

INSERT INTO `puskesmas` (`puskesmas_id`, `kec_id`, `puskesmas_nama`) VALUES
(1, 1, 'UPT MARGAHAYU RAYA'),
(2, 1, 'SEKEJATI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `status`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y', 'Ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`balita_id`),
  ADD KEY `fk_relationship_14` (`posyandu_id`),
  ADD KEY `fk_relationship_8` (`kel_id`);

--
-- Indexes for table `bidan`
--
ALTER TABLE `bidan`
  ADD PRIMARY KEY (`bidan_id`),
  ADD KEY `fk_relationship_12` (`puskesmas_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`),
  ADD KEY `fk_relationship_10` (`posyandu_id`);

--
-- Indexes for table `jadwal_pmt`
--
ALTER TABLE `jadwal_pmt`
  ADD PRIMARY KEY (`jadwal_pmt_id`),
  ADD KEY `fk_relationship_2` (`pmt_id`),
  ADD KEY `fk_relationship_3` (`jadwal_id`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`kader_id`),
  ADD KEY `fk_relationship_11` (`posyandu_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kec_id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`kel_id`),
  ADD KEY `fk_relationship_7` (`kec_id`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`ukur_id`),
  ADD KEY `fk_relationship_1` (`balita_id`),
  ADD KEY `fk_relationship_4` (`jadwal_id`);

--
-- Indexes for table `pmt`
--
ALTER TABLE `pmt`
  ADD PRIMARY KEY (`pmt_id`);

--
-- Indexes for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`posyandu_id`),
  ADD KEY `fk_relationship_15` (`kel_id`),
  ADD KEY `fk_relationship_9` (`puskesmas_id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`puskesmas_id`),
  ADD KEY `fk_relationship_13` (`kec_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `balita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidan`
--
ALTER TABLE `bidan`
  MODIFY `bidan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_pmt`
--
ALTER TABLE `jadwal_pmt`
  MODIFY `jadwal_pmt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `kader_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `kel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `ukur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pmt`
--
ALTER TABLE `pmt`
  MODIFY `pmt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `posyandu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `puskesmas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `fk_relationship_14` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`),
  ADD CONSTRAINT `fk_relationship_8` FOREIGN KEY (`kel_id`) REFERENCES `kelurahan` (`kel_id`);

--
-- Ketidakleluasaan untuk tabel `bidan`
--
ALTER TABLE `bidan`
  ADD CONSTRAINT `fk_relationship_12` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`puskesmas_id`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_relationship_10` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`);

--
-- Ketidakleluasaan untuk tabel `jadwal_pmt`
--
ALTER TABLE `jadwal_pmt`
  ADD CONSTRAINT `fk_relationship_2` FOREIGN KEY (`pmt_id`) REFERENCES `pmt` (`pmt_id`),
  ADD CONSTRAINT `fk_relationship_3` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`jadwal_id`);

--
-- Ketidakleluasaan untuk tabel `kader`
--
ALTER TABLE `kader`
  ADD CONSTRAINT `fk_relationship_11` FOREIGN KEY (`posyandu_id`) REFERENCES `posyandu` (`posyandu_id`);

--
-- Ketidakleluasaan untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `fk_relationship_7` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`kec_id`);

--
-- Ketidakleluasaan untuk tabel `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD CONSTRAINT `fk_relationship_1` FOREIGN KEY (`balita_id`) REFERENCES `balita` (`balita_id`),
  ADD CONSTRAINT `fk_relationship_4` FOREIGN KEY (`jadwal_id`) REFERENCES `jadwal` (`jadwal_id`);

--
-- Ketidakleluasaan untuk tabel `posyandu`
--
ALTER TABLE `posyandu`
  ADD CONSTRAINT `fk_relationship_15` FOREIGN KEY (`kel_id`) REFERENCES `kelurahan` (`kel_id`),
  ADD CONSTRAINT `fk_relationship_9` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`puskesmas_id`);

--
-- Ketidakleluasaan untuk tabel `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD CONSTRAINT `fk_relationship_13` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`kec_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;