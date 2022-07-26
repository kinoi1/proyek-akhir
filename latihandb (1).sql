-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 12:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_pengajuan`
--

CREATE TABLE `sub_pengajuan` (
  `id_sub` int(11) NOT NULL,
  `nama_pengajuan` varchar(40) NOT NULL,
  `sub_pengajuan` int(40) NOT NULL,
  `biaya` int(20) NOT NULL,
  `jenis_pengajuan` enum('akademik','non-akademik','','') NOT NULL,
  `tgl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggaran_proposal`
--

CREATE TABLE `tb_anggaran_proposal` (
  `id` int(11) NOT NULL,
  `biaya` varchar(128) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `nominal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggaran_proposal`
--

INSERT INTO `tb_anggaran_proposal` (`id`, `biaya`, `satuan`, `nominal`) VALUES
(1, 'ee', 'ee', 'ee'),
(2, 'yang 1', 'hjk', 'jki'),
(3, 'nmj', 'mmm', 'mmm'),
(4, 'mm', 'ml', 'nkj'),
(5, 'kn', 'ouo', 'oiuy'),
(6, 'mmm', 'iioo', 'lkoj'),
(7, 'b', 'b', 'nkj'),
(8, 'mnc', 'bjh', 'klji'),
(9, 'as', 'as', 'as'),
(10, 'dd', 'ddd', 'dd'),
(11, 'dd', 'ddd', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approval`
--

CREATE TABLE `tb_approval` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `nama_unit` varchar(128) NOT NULL,
  `kajur` varchar(128) DEFAULT NULL,
  `status_kajur` varchar(128) DEFAULT NULL,
  `kemahasiswaan` varchar(128) DEFAULT NULL,
  `status_kemahasiswaan` varchar(128) DEFAULT NULL,
  `ppspm` varchar(128) DEFAULT NULL,
  `status_ppspm` varchar(128) NOT NULL,
  `ppk` varchar(128) DEFAULT NULL,
  `status_ppk` varchar(128) DEFAULT NULL,
  `status_validasi` enum('disetujui','revisi','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_approval`
--

INSERT INTO `tb_approval` (`id`, `id_pengajuan`, `nama_unit`, `kajur`, `status_kajur`, `kemahasiswaan`, `status_kemahasiswaan`, `ppspm`, `status_ppspm`, `ppk`, `status_ppk`, `status_validasi`) VALUES
(1, 1, 'MI', 'Nunu Nugraha', 'disetujui', NULL, '0', NULL, '', NULL, '0', NULL),
(2, 3, 'MI', 'Nunu Nugraha', '0', NULL, '0', NULL, '', NULL, '0', NULL),
(3, 4, 'MI', 'Nunu Nugraha', '0', NULL, '0', NULL, '', NULL, '0', NULL),
(7, 6, 'MI', 'hkh', '0', NULL, '0', 'sadf', '', 'ppp', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `kode` varchar(128) NOT NULL,
  `komponen_kegiatan` varchar(128) NOT NULL,
  `jumlah_biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`kode`, `komponen_kegiatan`, `jumlah_biaya`) VALUES
('521119', 'Belanja Barang Operasional Lainnya', 216128000),
('521213', 'Belanja Honor Output Kegiatan', 29400000),
('521811', 'Belanja Barang Persediaan Barang Konsumsi', 200000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `jenis_pengajuan` varchar(128) NOT NULL,
  `nama_unit` varchar(20) NOT NULL,
  `nama_pengajuan` varchar(50) NOT NULL,
  `status` enum('diajukan','ditolak','revisi','') NOT NULL DEFAULT 'diajukan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `jenis_pengajuan`, `nama_unit`, `nama_pengajuan`, `status`) VALUES
(1, '', 'MI', 'ATK', 'diajukan'),
(2, '', 'TPPM', 'Jurusan', 'diajukan'),
(3, 'akademik', 'MI', 'TES', 'diajukan'),
(4, 'non-akademik', 'MI', 'nodojdos', 'diajukan'),
(5, 'yyy', 'hh', 'jhk', 'diajukan'),
(6, 'akademik', 'MI', 'dda', 'diajukan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id_proposal` int(11) NOT NULL,
  `file_proposal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_proposal`
--

INSERT INTO `tb_proposal` (`id_proposal`, `file_proposal`) VALUES
(6, 'tes26.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rab`
--

CREATE TABLE `tb_rab` (
  `id_rab` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `rincianbiaya` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `jumlah` text NOT NULL,
  `satuandua` int(11) NOT NULL,
  `total` text NOT NULL,
  `satukur` varchar(128) NOT NULL,
  `biaya_satuan` varchar(128) NOT NULL,
  `total_biaya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rab`
--

INSERT INTO `tb_rab` (`id_rab`, `id_pengajuan`, `kode`, `rincianbiaya`, `volume`, `satuan`, `jumlah`, `satuandua`, `total`, `satukur`, `biaya_satuan`, `total_biaya`) VALUES
(1, 6, 12, 0, 1, 'OH', '1233', 0, '121', 'OH', '', 'da');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nama_satuan` varchar(128) NOT NULL,
  `singkatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nama_satuan`, `singkatan`) VALUES
(1, 'Orang / Jam', 'OJ'),
(2, 'Orang / Hari', 'OH'),
(3, 'Orang / Bulan', 'OB'),
(4, 'Orang / Tahun', 'OT'),
(5, 'Orang / Paket', 'OP'),
(6, 'Orang / Kegiatan', 'OK'),
(7, 'Orang / Responden', 'OR'),
(8, 'Orang / Terbitan', 'Oter'),
(9, 'Orang / Jam Pelajaran', 'OJP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sbm`
--

CREATE TABLE `tb_sbm` (
  `id_SBM` int(11) NOT NULL,
  `kode_sbm` varchar(20) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `sub_kategori` varchar(128) NOT NULL,
  `nama_sbm` varchar(128) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sbm`
--

INSERT INTO `tb_sbm` (`id_SBM`, `kode_sbm`, `kategori`, `sub_kategori`, `nama_sbm`, `satuan`, `nominal`) VALUES
(1, '132', 'Honorarium Dosen Penyelenggaraan kegiatan Akademik dan Kemahasiswaan', 'Program Diploma, Sarjana dan Profesi', 'Penguji Proposal / Tugas Akhir', 'SKS / Hadir', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tor`
--

CREATE TABLE `tb_tor` (
  `id` int(11) NOT NULL,
  `kementrian` text NOT NULL,
  `uniteselon` varchar(128) NOT NULL,
  `hasil` int(11) NOT NULL,
  `kegiatan_tor` text NOT NULL,
  `indikator` text NOT NULL,
  `keluaran` text NOT NULL,
  `volume` int(11) NOT NULL,
  `kegiatanpembelajaran` text NOT NULL,
  `latarbelakang_tor` text NOT NULL,
  `dasarhukum` text NOT NULL,
  `gambaranumum` varchar(128) NOT NULL,
  `penerimamanfaat` varchar(128) NOT NULL,
  `pencapaian` text NOT NULL,
  `tahapan` varchar(128) NOT NULL,
  `waktu_tor` varchar(128) NOT NULL,
  `tempat_pelaksanaan` text NOT NULL,
  `biayator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tor`
--

INSERT INTO `tb_tor` (`id`, `kementrian`, `uniteselon`, `hasil`, `kegiatan_tor`, `indikator`, `keluaran`, `volume`, `kegiatanpembelajaran`, `latarbelakang_tor`, `dasarhukum`, `gambaranumum`, `penerimamanfaat`, `pencapaian`, `tahapan`, `waktu_tor`, `tempat_pelaksanaan`, `biayator`) VALUES
(4, 'adaf', 'asfwq', 0, 'dda', 'das', 'fwf', 0, 'mm', 'ssss', 'mmm', 'mmm', 'mmm', 'mm', 'mmmm', 'mmmm', 'ssnns', 'nsnsn');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usulan`
--

CREATE TABLE `tb_usulan` (
  `id_usulan` int(11) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `program_kegiatan` varchar(128) NOT NULL,
  `volume` int(11) NOT NULL,
  `satuan` varchar(128) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jenis_kegiatan` enum('Akademik','Non-Akademik','','') NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_usulan` varchar(40) NOT NULL,
  `fileusulan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_usulan`
--

INSERT INTO `tb_usulan` (`id_usulan`, `kode`, `program_kegiatan`, `volume`, `satuan`, `harga_satuan`, `total`, `jenis_kegiatan`, `tanggal`, `status_usulan`, `fileusulan`) VALUES
(1, '521119', 'Wisuda', 2, 'ORG', 20000, 40000, 'Akademik', '06/30/2022', 'Tes', ''),
(2, '521119', 'tess', 1, 'ORG', 100000, 100000, 'Akademik', '06/30/2022', '', ''),
(3, '521213', 'kdjadk', 0, '', 0, 0, 'Akademik', '08/10/2022', 'Diusulkan', ''),
(4, '521811', 'tess', 0, '', 0, 0, 'Non-Akademik', '06/25/2022', 'Diusulkan', ''),
(5, '521811', 'asadad', 0, '', 0, 0, 'Non-Akademik', '06/16/2022', 'Diusulkan', ''),
(6, '13312', 'adf', 11, 'OG', 40000, 440000, 'Akademik', '06/12/2022', '', 'tes8.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'user@gmail.com', '$2y$10$jw9q39/BMNoPXAYQHiWFlOg3WBgdA3U1iDuxVokoJqZVzyrD.v4e6', 'admin'),
(2, 'bagkeuangan', 'bagkeuangan@gmail.com', '$2y$10$jw9q39/BMNoPXAYQHiWFlOg3WBgdA3U1iDuxVokoJqZVzyrD.v4e6', 'bagkeuangan'),
(3, 'MI', 'unit@gmail.com', '$2y$10$jw9q39/BMNoPXAYQHiWFlOg3WBgdA3U1iDuxVokoJqZVzyrD.v4e6', 'unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_pengajuan`
--
ALTER TABLE `sub_pengajuan`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tb_anggaran_proposal`
--
ALTER TABLE `tb_anggaran_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_approval`
--
ALTER TABLE `tb_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_rab`
--
ALTER TABLE `tb_rab`
  ADD PRIMARY KEY (`id_rab`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_sbm`
--
ALTER TABLE `tb_sbm`
  ADD PRIMARY KEY (`id_SBM`);

--
-- Indexes for table `tb_tor`
--
ALTER TABLE `tb_tor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usulan`
--
ALTER TABLE `tb_usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_pengajuan`
--
ALTER TABLE `sub_pengajuan`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_anggaran_proposal`
--
ALTER TABLE `tb_anggaran_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_approval`
--
ALTER TABLE `tb_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rab`
--
ALTER TABLE `tb_rab`
  MODIFY `id_rab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_sbm`
--
ALTER TABLE `tb_sbm`
  MODIFY `id_SBM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tb_tor`
--
ALTER TABLE `tb_tor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_usulan`
--
ALTER TABLE `tb_usulan`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
