-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 01:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `idkelas` int(4) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `nominalspp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`idkelas`, `kelas`, `nominalspp`) VALUES
(1, 'X', 300000),
(2, 'XI', 350000),
(3, 'XII', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `nip` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nip`, `nama`, `alamat`, `notelp`, `level`, `password`) VALUES
(1000, 'Gede Kaliana Baranaya', 'Jalan Pulau Roti', '081009013090', 'admin', 'admin'),
(5645, 'Dek Ariee', 'Jl. Pulau Roti', '081245368265', 'petugas', 'petugasbaranaya'),
(6550, 'Suryadana', 'Jalan Sidakarya', '081240018711', 'petugas', 'petugasbaranaya'),
(6780, 'Ida Bagus Keenan Nandyatha', 'Jalan Pulau Roti', '081988199056', 'petugas', 'petugasbaranaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `idkelas` int(4) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `idkelas`, `alamat`, `notelp`, `level`, `password`) VALUES
(5000, 'Alita Ayuning Tyassss', 1, 'Jalan Panjer', '081979720188', 'siswa', 'siswabaranaya'),
(5001, 'Rizky Ryan Sahadha', 1, 'Jalan Pulau Moyo', '081771810091', 'siswa', 'siswabaranaya'),
(5002, 'Kadek Ryan Wiranatha', 1, 'Jalan Sesetan Kelod', '089176661509', 'siswa', 'siswabaranaya'),
(5003, 'Zidan Abraham', 1, 'Jalan Pulau Saelus No 4', '081783450901', 'siswa', 'siswabaranaya'),
(5004, 'Dewa Krsna Prema Yana', 1, 'Jalan Akasia Dauh Puri', '081665408176', 'siswa', 'siswabaranaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spp`
--

CREATE TABLE `tb_spp` (
  `id` int(10) NOT NULL,
  `nis` int(4) NOT NULL,
  `petugas` varchar(25) DEFAULT NULL,
  `bulan` varchar(20) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `totaltagihan` double NOT NULL,
  `totalbayar` double DEFAULT NULL,
  `tglbayar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_spp`
--

INSERT INTO `tb_spp` (`id`, `nis`, `petugas`, `bulan`, `angkatan`, `totaltagihan`, `totalbayar`, `tglbayar`) VALUES
(433, 5000, 'Suryadana', 'Juni 2023', 'I', 0, 300000, '2023-02-25 22:47:44'),
(434, 5000, 'Ida Bagus Keenan Nandyath', 'Juli 2023', 'I', 0, 300000, '2023-02-26 09:12:17'),
(435, 5000, 'Suryadana', 'Agustus 2023', 'I', 0, 300000, '2023-02-26 17:22:17'),
(436, 5000, 'Suryadana', 'September 2023', 'I', 0, 300000, '2023-02-27 16:25:44'),
(437, 5000, 'Ida Bagus Keenan Nandyath', 'Oktober 2023', 'I', 0, 300000, '2023-02-27 17:04:56'),
(438, 5000, 'Ida Bagus Keenan Nandyath', 'November 2023', 'I', 0, 300000, '2023-02-28 07:35:47'),
(439, 5000, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(440, 5000, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(441, 5000, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(442, 5000, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(443, 5000, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(444, 5000, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(445, 5000, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(446, 5000, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(447, 5000, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(448, 5000, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(449, 5000, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(450, 5000, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(451, 5000, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(452, 5000, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(453, 5000, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(454, 5000, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(455, 5000, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(456, 5000, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(457, 5000, '', 'Juni 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(458, 5000, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(459, 5000, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(460, 5000, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(461, 5000, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(462, 5000, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(463, 5000, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(464, 5000, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(465, 5000, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(466, 5000, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(467, 5000, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(468, 5000, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(469, 5001, 'Suryadana', 'Juni 2023', 'I', 0, 300000, '2023-02-27 08:51:36'),
(470, 5001, 'Suryadana', 'Juli 2023', 'I', 0, 300000, '2023-02-27 16:25:54'),
(471, 5001, '', 'Agustus 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(472, 5001, '', 'September 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(473, 5001, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(474, 5001, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(475, 5001, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(476, 5001, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(477, 5001, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(478, 5001, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(479, 5001, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(480, 5001, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(481, 5001, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(482, 5001, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(483, 5001, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(484, 5001, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(485, 5001, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(486, 5001, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(487, 5001, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(488, 5001, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(489, 5001, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(490, 5001, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(491, 5001, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(492, 5001, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(493, 5001, '', 'Juni 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(494, 5001, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(495, 5001, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(496, 5001, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(497, 5001, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(498, 5001, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(499, 5001, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(500, 5001, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(501, 5001, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(502, 5001, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(503, 5001, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(504, 5001, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(505, 5002, 'Gede Kaliana Baranaya', 'Juni 2023', 'I', 0, 0, '2023-03-01 07:41:22'),
(506, 5002, 'Gede Kaliana Baranaya', 'Juli 2023', 'I', 0, 0, '2023-03-01 07:42:13'),
(507, 5002, 'Gede Kaliana Baranaya', 'Agustus 2023', 'I', 0, 300000, '2023-03-01 07:42:45'),
(508, 5002, '', 'September 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(509, 5002, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(510, 5002, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(511, 5002, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(512, 5002, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(513, 5002, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(514, 5002, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(515, 5002, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(516, 5002, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(517, 5002, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(518, 5002, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(519, 5002, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(520, 5002, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(521, 5002, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(522, 5002, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(523, 5002, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(524, 5002, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(525, 5002, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(526, 5002, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(527, 5002, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(528, 5002, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(529, 5002, 'Gede Kaliana Baranaya', 'Juni 2025', 'III', 0, 0, '2023-03-01 07:40:50'),
(530, 5002, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(531, 5002, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(532, 5002, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(533, 5002, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(534, 5002, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(535, 5002, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(536, 5002, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(537, 5002, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(538, 5002, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(539, 5002, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(540, 5002, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(541, 5003, '', 'Juni 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(542, 5003, '', 'Juli 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(543, 5003, '', 'Agustus 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(544, 5003, '', 'September 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(545, 5003, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(546, 5003, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(547, 5003, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(548, 5003, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(549, 5003, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(550, 5003, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(551, 5003, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(552, 5003, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(553, 5003, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(554, 5003, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(555, 5003, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(556, 5003, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(557, 5003, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(558, 5003, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(559, 5003, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(560, 5003, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(561, 5003, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(562, 5003, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(563, 5003, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(564, 5003, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(565, 5003, '', 'Juni 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(566, 5003, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(567, 5003, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(568, 5003, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(569, 5003, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(570, 5003, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(571, 5003, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(572, 5003, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(573, 5003, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(574, 5003, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(575, 5003, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(576, 5003, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(577, 5004, 'Ida Bagus Keenan Nandyath', 'Juni 2023', 'I', 0, 300000, '2023-02-27 17:07:54'),
(578, 5004, 'Ida Bagus Keenan Nandyath', 'Juli 2023', 'I', 0, 300000, '2023-02-27 17:07:58'),
(579, 5004, 'Gede Kaliana Baranaya', 'Agustus 2023', 'I', 0, 300000, '2023-02-28 09:13:31'),
(580, 5004, 'Gede Kaliana Baranaya', 'September 2023', 'I', 0, 300000, '2023-02-28 09:13:37'),
(581, 5004, '', 'Oktober 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(582, 5004, '', 'November 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(583, 5004, '', 'Desember 2023', 'I', 300000, 0, '0000-00-00 00:00:00'),
(584, 5004, '', 'Januari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(585, 5004, '', 'Februari 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(586, 5004, '', 'Maret 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(587, 5004, '', 'April 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(588, 5004, '', 'Mei 2024', 'I', 300000, 0, '0000-00-00 00:00:00'),
(589, 5004, '', 'Juni 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(590, 5004, '', 'Juli 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(591, 5004, '', 'Agustus 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(592, 5004, '', 'September 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(593, 5004, '', 'Oktober 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(594, 5004, '', 'November 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(595, 5004, '', 'Desember 2024', 'II', 350000, 0, '0000-00-00 00:00:00'),
(596, 5004, '', 'Januari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(597, 5004, '', 'Februari 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(598, 5004, '', 'Maret 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(599, 5004, '', 'April 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(600, 5004, '', 'Mei 2025', 'II', 350000, 0, '0000-00-00 00:00:00'),
(601, 5004, '', 'Juni 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(602, 5004, '', 'Juli 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(603, 5004, '', 'Agustus 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(604, 5004, '', 'September 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(605, 5004, '', 'Oktober 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(606, 5004, '', 'November 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(607, 5004, '', 'Desember 2025', 'III', 400000, 0, '0000-00-00 00:00:00'),
(608, 5004, '', 'Januari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(609, 5004, '', 'Februari 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(610, 5004, '', 'Maret 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(611, 5004, '', 'April 2026', 'III', 400000, 0, '0000-00-00 00:00:00'),
(612, 5004, '', 'Mei 2026', 'III', 400000, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(4) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `level`) VALUES
(1, 'admin'),
(2, 'petugas'),
(3, 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `fk_level_petugas` (`level`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_level_siswa` (`level`),
  ADD KEY `fk_kelas` (`idkelas`);

--
-- Indexes for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nis_spp` (`nis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `idkelas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_spp`
--
ALTER TABLE `tb_spp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `fk_level_petugas` FOREIGN KEY (`level`) REFERENCES `tb_user` (`level`);

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`idkelas`) REFERENCES `tb_kelas` (`idkelas`),
  ADD CONSTRAINT `fk_level_siswa` FOREIGN KEY (`level`) REFERENCES `tb_user` (`level`);

--
-- Constraints for table `tb_spp`
--
ALTER TABLE `tb_spp`
  ADD CONSTRAINT `fk_nis_spp` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
