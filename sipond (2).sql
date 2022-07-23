-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 11:16 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipond`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `dom_guru` text NOT NULL,
  `nope_guru` varchar(15) NOT NULL,
  `status` enum('Guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `dom_guru`, `nope_guru`, `status`) VALUES
(38, 'NAHRUDIN', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '081359117009', 'Guru'),
(39, 'KHOIRUDIN', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '085746452313', 'Guru'),
(40, 'MIFTAKHUL HUDI A., A.Md.Pd', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '089505338663', 'Guru'),
(41, 'YUSCHA', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '085857260285', 'Guru'),
(42, 'IBNU MAULANA', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '085745796313', 'Guru'),
(43, 'ALDI RIDHO', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '085857308560', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `history_kelas`
--

CREATE TABLE `history_kelas` (
  `id_historykelas` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_kelas`
--

INSERT INTO `history_kelas` (`id_historykelas`, `id_santri`, `id_kelas`, `tahun`) VALUES
(1, 14, 1, 2019),
(2, 14, 2, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_user`) VALUES
(1, 'Bacaan', 33),
(2, 'Lambatan', 34),
(3, 'Cepatan', 35);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `nama_mapel` text NOT NULL,
  `nilai_ratarata` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_kelas`, `nama_mapel`, `nilai_ratarata`) VALUES
(1, 1, 'Bacaan', 70),
(2, 2, 'kimia', 90),
(3, 3, 'Bacaan', 70);

-- --------------------------------------------------------

--
-- Table structure for table `pembina`
--

CREATE TABLE `pembina` (
  `id_pembina` int(11) NOT NULL,
  `nama_pembina` varchar(100) NOT NULL,
  `dom_pembina` text NOT NULL,
  `nope_pembina` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id_pembina`, `nama_pembina`, `dom_pembina`, `nope_pembina`, `status`) VALUES
(20, 'KH. M SAHIDUN', 'Ds. Patihan, Kec.Karangrejo, Kab. Magetan', '085860516091', 'PEMBINA PONDOK'),
(21, 'H. TATANG KUSDIANTO, S.H', 'Ds. Karangsono, Kec. Barat, Kab. Magetan', '082328298485', 'PEMBINA PONDOK 2'),
(22, 'M. ROSIDI, S.H', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '-', 'PEMBINA PONDOK 3'),
(23, 'GATOT TRISULO HADI, S.Pd', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '085851897354', 'PINISEPUH PONDOK'),
(24, 'DARSONO', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '-', 'KETUA PONDOK'),
(25, 'FATKHUR ROHMAN', 'KOMPLEK PONDOK Al Maghfiroh RT 2 Rw 2 Ds Karas Kec Karas Magetan', '082141626360', 'BIDANG PERIZINAN');

-- --------------------------------------------------------

--
-- Table structure for table `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(2) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `id_mapel` int(1) NOT NULL,
  `nilai` int(3) NOT NULL,
  `tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rapor`
--

INSERT INTO `rapor` (`id_rapor`, `id_santri`, `id_kelas`, `id_mapel`, `nilai`, `tahun`) VALUES
(11, 14, 1, 1, 87, 2019),
(12, 14, 1, 2, 90, 2019),
(13, 14, 1, 3, 78, 2019),
(14, 14, 1, 24, 98, 2019),
(15, 14, 1, 25, 78, 2019),
(16, 14, 1, 26, 78, 2019),
(17, 14, 1, 27, 78, 2019),
(19, 14, 2, 3, 78, 2020),
(20, 14, 2, 24, 80, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `gender` enum('Putra','Putri') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_santri` text NOT NULL,
  `status_santri` enum('Kiriman','Person') NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `nope_ortu` int(20) NOT NULL,
  `tahun_masuk` varchar(10) NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `id_kelas`, `nis`, `nama_santri`, `gender`, `tempat_lahir`, `tanggal_lahir`, `alamat_santri`, `status_santri`, `tgl_masuk`, `nama_ortu`, `alamat_ortu`, `nope_ortu`, `tahun_masuk`, `tgl_keluar`) VALUES
(14, 1, 0, 'MUHAMMAD NUR MUDAKIR', 'Putra', 'Magetan', '2000-06-23', 'Ds Maospati , Maospati, Magetan', 'Kiriman', '2018-12-03', 'Joko Widodo', 'Ds Maospati , Maospati, Magetan', 0, '2018', '0000-00-00'),
(15, 1, 0, 'YONI WIBOWO', 'Putra', 'Pekalongan', '1999-09-22', 'Pekalongan', 'Person', '2019-06-18', 'Rohim', 'Pekalongan', 0, '2019', '0000-00-00'),
(16, 1, 0, 'ABDUL ROVEK MUHAIMIN ', 'Putra', 'Magetan', '1999-08-18', 'Ds Soco, Bendo,Magetan ', 'Kiriman', '2020-11-02', 'Parno', 'Ds Soco, Bendo,Magetan ', 0, '', '0000-00-00'),
(17, 1, 0, 'YUSTIANA', 'Putra', 'Blora', '2001-04-14', 'Ds Ketringan Timur, Jiken, Blora', 'Kiriman', '2020-08-18', 'Lasemo ', 'Ds Ketringan Timur, Jiken, Blora', 0, '0', '0000-00-00'),
(18, 1, 0, 'BALU MUGHNI', 'Putra', 'Magetan', '2003-04-08', 'Ds Singgahan 2', 'Kiriman', '2021-06-03', 'Mahrup', 'Ds Singgahan 2', 0, '0', '0000-00-00'),
(19, 1, 0, 'JILDAN AHMAD AKBAR', 'Putra', 'Magetan', '2003-11-24', 'Ds. Blaran', 'Kiriman', '2021-08-05', 'Susilo', 'Ds. Blaran', 0, '0', '0000-00-00'),
(20, 1, 0, 'DIMAS MOHAMAD SYAIKH', 'Putra', 'Magetan', '2002-12-09', 'Ds. Jeruk', 'Kiriman', '2021-10-25', 'Sudono', 'Ds. Jeruk', 0, '0', '0000-00-00'),
(21, 1, 0, 'RIDWAN  HANDIKA SAPUTRA', 'Putra', 'Magetan', '2003-04-28', 'Ds Ngumpul ', 'Kiriman', '2021-11-04', 'Suprianto ', 'Ds Ngumpul ', 0, '0', '0000-00-00'),
(22, 1, 0, 'EKO MURDANI ', 'Putra', 'Magetan', '2001-12-18', 'Ds Blaran 2', 'Kiriman', '2021-11-04', 'Hasani', 'Ds Blaran 2', 0, '0', '0000-00-00'),
(23, 1, 0, ' REIHAN DWI MEGANTARA', 'Putra', 'Madiun', '2005-03-24', 'Ds Soco, Bendo, Magetan ', 'Kiriman', '2021-06-26', 'Anang', 'Ds Soco, Bendo, Magetan ', 0, '0', '0000-00-00'),
(24, 1, 0, 'M SHOHIH ABDI W', 'Putra', 'Magetan', '2005-10-30', 'Ds. Malang', 'Kiriman', '2021-08-23', 'Y.B  Jomo Riyanto', 'Ds. Malang', 0, '0', '0000-00-00'),
(25, 1, 0, 'ARUNA OKTARIO ', 'Putra', 'Tangerang', '1998-10-31', 'Ds. Blaran 2', 'Kiriman', '2021-09-15', 'Samit', 'Ds. Blaran 2', 0, '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('admin','walikelas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(33, 'NAHRUDIN', 'nahrudin@gmail.com', '206bc1f0b77184008f7f75532749cc94', 'walikelas'),
(34, 'YUSCHA', 'yuscha@gmail.com', 'cf0f5ac85cd8b9ca0a7485dd80e7ca79', 'walikelas'),
(35, 'IBNU MAULANA', 'ibnu@gmail.com', 'ef62f2002b65a59526c39e5ce976e9ee', 'walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(2) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `id_kelas`, `id_user`) VALUES
(1, 1, 3),
(2, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `history_kelas`
--
ALTER TABLE `history_kelas`
  ADD PRIMARY KEY (`id_historykelas`),
  ADD KEY `id_santri` (`id_santri`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
  ADD PRIMARY KEY (`id_pembina`);

--
-- Indexes for table `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `history_kelas`
--
ALTER TABLE `history_kelas`
  MODIFY `id_historykelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rapor`
--
ALTER TABLE `rapor`
  MODIFY `id_rapor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_kelas`
--
ALTER TABLE `history_kelas`
  ADD CONSTRAINT `id_santri` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mapel`
--
ALTER TABLE `mapel`
  ADD CONSTRAINT `id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
