-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 07:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_bangunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin_unik` int(11) NOT NULL,
  `sippt` varchar(225) NOT NULL,
  `luas_tanah` varchar(9) NOT NULL,
  `kmb` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `id_user`, `id_admin_unik`, `sippt`, `luas_tanah`, `kmb`, `created_at`) VALUES
(1, 121, 0, '1,2018-12-16', '1', '11,2018-12-19', '2018-12-16 21:47:48'),
(2, 1, 0, '2323,2018-12-12', '232', '22,2018-12-17', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `data_air`
--

CREATE TABLE `data_air` (
  `id_air` int(11) NOT NULL,
  `id_air_unik` int(11) NOT NULL,
  `konsumsi_air` varchar(225) NOT NULL,
  `konsumsi_bulan` tinyint(4) NOT NULL,
  `rata_konsumsi` varchar(225) NOT NULL,
  `air_bersih` varchar(225) NOT NULL,
  `sistem_water` varchar(225) NOT NULL,
  `kapasitas_bersih` varchar(225) NOT NULL,
  `air_hujan` varchar(225) NOT NULL,
  `jml_hujan` varchar(225) NOT NULL,
  `kapasitas_hujan` varchar(225) NOT NULL,
  `air_bekas` varchar(225) NOT NULL,
  `kapasitas_bekas` varchar(225) NOT NULL,
  `air_limbah` varchar(225) NOT NULL,
  `kapasitas_limbah` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_air`
--

INSERT INTO `data_air` (`id_air`, `id_air_unik`, `konsumsi_air`, `konsumsi_bulan`, `rata_konsumsi`, `air_bersih`, `sistem_water`, `kapasitas_bersih`, `air_hujan`, `jml_hujan`, `kapasitas_hujan`, `air_bekas`, `kapasitas_bekas`, `air_limbah`, `kapasitas_limbah`, `created_at`) VALUES
(1, 112121, '0', 0, ',', 'Water Treatment Plant,', '1', '1,', 'Sumur Resapan,Kolam Resapan,Water Trap', '1,1', '1,1', 'Water Treatment Plant,', '1,', 'IPAL/Sewage Treatment Plant (STP),PD PAL', '1,1', '2018-12-16 21:47:48'),
(2, 1, '0', 0, ',', 'Water Treatment Plant,', '1', '1,', 'Sumur Resapan,Kolam Resapan,', '1,1', '1,1', 'Water Treatment Plant,', '1,', 'IPAL/Sewage Treatment Plant (STP),PD PAL', '1,1', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `data_imb`
--

CREATE TABLE `data_imb` (
  `id_imb` int(11) NOT NULL,
  `id_admin_imb` int(11) NOT NULL,
  `no_imb` varchar(225) NOT NULL,
  `tanggal_imb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_imb`
--

INSERT INTO `data_imb` (`id_imb`, `id_admin_imb`, `no_imb`, `tanggal_imb`) VALUES
(3, 0, '232', '2018-12-11'),
(4, 0, '232', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `data_konsumsi`
--

CREATE TABLE `data_konsumsi` (
  `id_konsumsi` int(11) NOT NULL,
  `id_data_air` int(11) NOT NULL,
  `januari` varchar(50) NOT NULL,
  `febuari` varchar(50) NOT NULL,
  `maret` varchar(50) NOT NULL,
  `april` varchar(50) NOT NULL,
  `mei` varchar(50) NOT NULL,
  `juni` varchar(50) NOT NULL,
  `juli` varchar(50) NOT NULL,
  `agustus` varchar(50) NOT NULL,
  `september` varchar(50) NOT NULL,
  `oktober` varchar(50) NOT NULL,
  `november` varchar(50) NOT NULL,
  `desember` varchar(50) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_konsumsi`
--

INSERT INTO `data_konsumsi` (`id_konsumsi`, `id_data_air`, `januari`, `febuari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `total`) VALUES
(1, 2, '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1', '1,1,1,1');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemilik`
--

CREATE TABLE `data_pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_info_unik` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_kantor` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggung_jawab` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `no_jabatan` tinyint(15) NOT NULL,
  `telp_jabatan` tinyint(15) NOT NULL,
  `email_jabatan` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemilik`
--

INSERT INTO `data_pemilik` (`id_pemilik`, `id_user`, `id_info_unik`, `nama_pemilik`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `provinsi`, `no_kantor`, `no_hp`, `email`, `tanggung_jawab`, `jabatan`, `no_jabatan`, `telp_jabatan`, `email_jabatan`, `created_at`) VALUES
(1, 3, 0, '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'fauzifahmi55@gmail.com', '1', '1', 1, 1, 'fauzifahmi55@gmail.com', '2018-12-16 21:47:48'),
(2, 1, 2, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'fauzifahmi55@gmail.com', '1', '1', 1, 1, 'fauzifahmi55@gmail.com', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengelola`
--

CREATE TABLE `data_pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_peng_unik` int(11) NOT NULL,
  `kategori_pengelola` varchar(225) NOT NULL,
  `pengelola` varchar(225) NOT NULL,
  `tanggung_jawab` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `rt` tinyint(4) NOT NULL,
  `rw` tinyint(4) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_rumah` varchar(15) NOT NULL,
  `no_kantor` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengelola`
--

INSERT INTO `data_pengelola` (`id_pengelola`, `id_users`, `id_peng_unik`, `kategori_pengelola`, `pengelola`, `tanggung_jawab`, `jabatan`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `provinsi`, `no_rumah`, `no_kantor`, `no_hp`, `email`, `created_at`) VALUES
(1, 12121, 0, '', '																				1', '																				1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '', '1', '1', 'fauzifahmi55@gmail.com', '2018-12-16 21:47:48'),
(2, 1, 2, 'on', '										1', '										1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '', '1', '1', 'fauzifahmi55@gmail.com', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `data_sumur`
--

CREATE TABLE `data_sumur` (
  `id_sumur` int(11) NOT NULL,
  `id_data_sumur` int(11) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `unit` varchar(9) DEFAULT NULL,
  `sipa` varchar(225) NOT NULL,
  `tanggal` date NOT NULL,
  `kapasitas` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_teknis`
--

CREATE TABLE `data_teknis` (
  `id_teknis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_teknis_unik` int(11) NOT NULL,
  `jumlah_tower` tinyint(9) NOT NULL,
  `jumlah_unit` tinyint(9) NOT NULL,
  `ketinggian` varchar(9) NOT NULL,
  `luas_lantai` varchar(9) NOT NULL,
  `luas_total` varchar(9) NOT NULL,
  `tingkat_okupansi` varchar(9) NOT NULL,
  `ket_okupansi` varchar(50) DEFAULT NULL,
  `operasional_gedung` varchar(20) NOT NULL,
  `peng_bangunan` varchar(225) NOT NULL,
  `total_penghuni` tinyint(9) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_teknis`
--

INSERT INTO `data_teknis` (`id_teknis`, `id_user`, `id_teknis_unik`, `jumlah_tower`, `jumlah_unit`, `ketinggian`, `luas_lantai`, `luas_total`, `tingkat_okupansi`, `ket_okupansi`, `operasional_gedung`, `peng_bangunan`, `total_penghuni`, `created_at`) VALUES
(1, 1212121, 0, 1, 1, '1,1', 'perkantor', '1', '1', NULL, '1,1,1,1', '1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,', 1, '0000-00-00 00:00:00'),
(2, 1, 0, 22, 2, '2,2', '2', '2', '2', 'Apabila berbentuk gedung', '2,2,2,2', '22,112,12,1,1,1,1,1,1,1,1,1,1,1,39,118', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `info_bangunan`
--

CREATE TABLE `info_bangunan` (
  `id_info` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_bangunan` varchar(225) NOT NULL,
  `lokasi` text NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kode_pos` varchar(9) NOT NULL,
  `NOP` varchar(225) NOT NULL,
  `mulai_operasi` varchar(9) NOT NULL,
  `type_bangunan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_bangunan`
--

INSERT INTO `info_bangunan` (`id_info`, `id_user`, `nama_bangunan`, `lokasi`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`, `NOP`, `mulai_operasi`, `type_bangunan`, `created_at`) VALUES
(1, 1212, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1970', '', '2018-12-16 21:47:48'),
(2, 1, '12', '12', '1', '1', '1', '1', '1', '1', '1', '2018', '', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bangunan`
--

CREATE TABLE `jenis_bangunan` (
  `id_jenis` int(11) NOT NULL,
  `id_admin_teknis` int(11) NOT NULL,
  `perkantoran` varchar(100) DEFAULT NULL,
  `apartemen` varchar(100) DEFAULT NULL,
  `hunian` varchar(100) DEFAULT NULL,
  `hotel` varchar(100) DEFAULT NULL,
  `sarana_kesehatan` varchar(100) DEFAULT NULL,
  `sarana_perdagangan` varchar(100) DEFAULT NULL,
  `lainnya` varchar(225) DEFAULT NULL,
  `lainnya2` varchar(225) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_bangunan`
--

INSERT INTO `jenis_bangunan` (`id_jenis`, `id_admin_teknis`, `perkantoran`, `apartemen`, `hunian`, `hotel`, `sarana_kesehatan`, `sarana_perdagangan`, `lainnya`, `lainnya2`, `created_at`) VALUES
(2, 2, 'perkantoran', NULL, 'hunian', 'on', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `penggunan_bangunan`
--

CREATE TABLE `penggunan_bangunan` (
  `id_penggunaan` int(11) NOT NULL,
  `id_join` int(11) NOT NULL,
  `senin` varchar(9) NOT NULL,
  `selasa` varchar(9) NOT NULL,
  `rabu` varchar(9) NOT NULL,
  `kamis` varchar(9) NOT NULL,
  `jumat` varchar(9) NOT NULL,
  `sabtu` varchar(9) NOT NULL,
  `minggu` varchar(9) NOT NULL,
  `total` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunan_bangunan`
--

INSERT INTO `penggunan_bangunan` (`id_penggunaan`, `id_join`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `total`) VALUES
(1, 0, '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,'),
(2, 0, '22,112', '12,1', '1,1', '1,1', '1,1', '1,1', '1,1', '39,118');

-- --------------------------------------------------------

--
-- Table structure for table `permasalahan`
--

CREATE TABLE `permasalahan` (
  `id_masalah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_unik_masalah` int(11) NOT NULL,
  `sumur_resapan` text NOT NULL,
  `sumur_dalam` text NOT NULL,
  `pengelolaan_limbah` text NOT NULL,
  `persetujuan` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permasalahan`
--

INSERT INTO `permasalahan` (`id_masalah`, `id_user`, `id_unik_masalah`, `sumur_resapan`, `sumur_dalam`, `pengelolaan_limbah`, `persetujuan`, `created_at`) VALUES
(1, 121, 0, '1', 'qwqwqqw', '1', 1, '2018-12-16 21:47:48'),
(2, 1, 0, '1', '23232', '2322', 1, '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `sketsa_lokasi`
--

CREATE TABLE `sketsa_lokasi` (
  `id_sketsa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sketsa_unik` int(11) NOT NULL,
  `nama_bangunan` varchar(225) NOT NULL,
  `lokasi` text NOT NULL,
  `file_sketsa` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sketsa_lokasi`
--

INSERT INTO `sketsa_lokasi` (`id_sketsa`, `id_user`, `id_sketsa_unik`, `nama_bangunan`, `lokasi`, `file_sketsa`, `created_at`) VALUES
(1, 1121, 0, '1', '1', '', '2018-12-16 21:47:48'),
(2, 1, 0, '1', '1', '1.jpg', '2018-12-16 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_air`
--

CREATE TABLE `sumber_air` (
  `id_sumber` int(11) NOT NULL,
  `id_sumber_air` int(11) NOT NULL,
  `pdam` varchar(225) NOT NULL,
  `bor` varchar(225) NOT NULL,
  `pantek` varchar(225) NOT NULL,
  `air_sendiri` varchar(225) NOT NULL,
  `lainnya` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_air`
--

INSERT INTO `sumber_air` (`id_sumber`, `id_sumber_air`, `pdam`, `bor`, `pantek`, `air_sendiri`, `lainnya`) VALUES
(1, 1, '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_air`
--
ALTER TABLE `data_air`
  ADD PRIMARY KEY (`id_air`);

--
-- Indexes for table `data_imb`
--
ALTER TABLE `data_imb`
  ADD PRIMARY KEY (`id_imb`);

--
-- Indexes for table `data_konsumsi`
--
ALTER TABLE `data_konsumsi`
  ADD PRIMARY KEY (`id_konsumsi`);

--
-- Indexes for table `data_pemilik`
--
ALTER TABLE `data_pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `data_pengelola`
--
ALTER TABLE `data_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `data_sumur`
--
ALTER TABLE `data_sumur`
  ADD PRIMARY KEY (`id_sumur`);

--
-- Indexes for table `data_teknis`
--
ALTER TABLE `data_teknis`
  ADD PRIMARY KEY (`id_teknis`);

--
-- Indexes for table `info_bangunan`
--
ALTER TABLE `info_bangunan`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jenis_bangunan`
--
ALTER TABLE `jenis_bangunan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `penggunan_bangunan`
--
ALTER TABLE `penggunan_bangunan`
  ADD PRIMARY KEY (`id_penggunaan`);

--
-- Indexes for table `permasalahan`
--
ALTER TABLE `permasalahan`
  ADD PRIMARY KEY (`id_masalah`);

--
-- Indexes for table `sketsa_lokasi`
--
ALTER TABLE `sketsa_lokasi`
  ADD PRIMARY KEY (`id_sketsa`);

--
-- Indexes for table `sumber_air`
--
ALTER TABLE `sumber_air`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_air`
--
ALTER TABLE `data_air`
  MODIFY `id_air` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_imb`
--
ALTER TABLE `data_imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_konsumsi`
--
ALTER TABLE `data_konsumsi`
  MODIFY `id_konsumsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_pemilik`
--
ALTER TABLE `data_pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_pengelola`
--
ALTER TABLE `data_pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_sumur`
--
ALTER TABLE `data_sumur`
  MODIFY `id_sumur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_teknis`
--
ALTER TABLE `data_teknis`
  MODIFY `id_teknis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `info_bangunan`
--
ALTER TABLE `info_bangunan`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_bangunan`
--
ALTER TABLE `jenis_bangunan`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penggunan_bangunan`
--
ALTER TABLE `penggunan_bangunan`
  MODIFY `id_penggunaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permasalahan`
--
ALTER TABLE `permasalahan`
  MODIFY `id_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sketsa_lokasi`
--
ALTER TABLE `sketsa_lokasi`
  MODIFY `id_sketsa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sumber_air`
--
ALTER TABLE `sumber_air`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
