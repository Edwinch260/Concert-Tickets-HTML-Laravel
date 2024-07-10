-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailkonser`
--

CREATE TABLE `detailkonser` (
  `ID` int(11) NOT NULL,
  `Tipe` varchar(30) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `KonserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailkonser`
--

INSERT INTO `detailkonser` (`ID`, `Tipe`, `Jumlah`, `Harga`, `KonserID`) VALUES
(2, 'VIP', 30, 10000000, 4),
(3, 'VVIPS', 30, 20000000, 4),
(5, 'CAT-5', 300, 2500000, 3),
(6, 'CAT-1', 100, 5500000, 3),
(7, 'CAT-4', 250, 3000000, 3),
(8, 'CAT-3', 250, 3500000, 3),
(9, 'CAT-2', 150, 4000000, 3),
(10, 'VIP', 50, 11000000, 3),
(11, 'CAT-5', 400, 1850000, 4),
(12, 'CAT-4', 450, 2500000, 4),
(13, 'CAT-3', 300, 3000000, 4),
(14, 'CAT-2', 300, 3500000, 4),
(15, 'CAT-1', 250, 4500000, 4),
(16, 'CAT-5', 500, 2500000, 5),
(17, 'CAT-4', 400, 3500000, 5),
(18, 'CAT-3', 350, 4000000, 5),
(19, 'CAT-2', 250, 4750000, 5),
(20, 'CAT-1', 250, 5500000, 5),
(21, 'VIP', 50, 10000000, 5),
(22, 'VVIPS', 50, 15000000, 5),
(23, 'CAT-5', 150, 1500000, 6),
(24, 'CAT-4', 200, 2000000, 6),
(25, 'CAT-3', 250, 2500000, 6),
(26, 'CAT-2', 300, 3000000, 6),
(27, 'CAT-1', 150, 3500000, 6),
(28, 'VIP', 50, 4500000, 6),
(29, 'VVIPS', 50, 5500000, 6),
(30, 'CAT-5', 400, 2000000, 7),
(31, 'CAT-4', 300, 3000000, 7),
(32, 'CAT-3', 300, 3750000, 7),
(33, 'CAT-2', 200, 4500000, 7),
(34, 'CAT-1', 200, 5000000, 7),
(35, 'VIP', 100, 7500000, 7),
(36, 'VVIPS', 50, 10000000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `ID` int(11) NOT NULL,
  `Deskripsi` text NOT NULL,
  `JamMulai` time NOT NULL,
  `Tanggal` date NOT NULL,
  `JamBerakhir` time NOT NULL,
  `Gambar` varchar(200) NOT NULL,
  `Nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`ID`, `Deskripsi`, `JamMulai`, `Tanggal`, `JamBerakhir`, `Gambar`, `Nama`) VALUES
(3, 'The Renaissance World Tour was the ninth concert tour by American singer-songwriter Beyoncé. Her highest-grossing tour to date, it was announced on February 1, 2023, in support of her seventh studio album, Renaissance (2022). The concert run began on May 10, 2023, in Stockholm, Sweden, and concluded on October 1, 2023, in Kansas City, Missouri. It was her first solo tour since the The Formation World Tour in 2016.\r\n\r\nThe concert lasted between two and a half and three hours and was split into six or seven acts, with Beyoncé performing the tracks of Renaissance in order, interspersed with songs from across her discography. The stage consisted of a giant screen with a large \"portal\" in its center, and featured sculptures, robotic arms and ultraviolet technology.', '20:00:00', '2024-01-27', '23:30:00', '1702741784.jpg', 'RENNAISANCE WORLD TOUR'),
(4, 'The Music of the Spheres World Tour is the ongoing eighth concert tour undertaken by British rock band Coldplay. It was announced on 14 October 2021 in support of their ninth studio album, Music of the Spheres, which marked a return to live performances following the COVID-19 pandemic. The band had not toured for their previous record, Everyday Life (2019), because they wanted to establish an environmentally friendly approach. According to the plan they devised over two years with specialists, CO2 emissions are meant to be reduced by 50% in comparison to the A Head Full of Dreams Tour (2016–17).\r\n\r\nSimilarly to the Mylo Xyloto Tour (2011–12), the concert run featured extensive use of pyrotechnic and confetti visuals. However, they were adapted to mitigate carbon footprint. Other ideas included developing the first mobile rechargeable show battery in the world with BMW and planting a tree for every ticket sold. The tour began at Costa Rica\'s Estadio Nacional on 18 March 2022 and Coldplay were met with widespread acclaim from music critics, who praised their stage presence, joyful performance and production value, while also describing the shows as triumphant, immersive and intimate.', '20:00:00', '2024-01-31', '22:00:00', '1702741834.jpg', 'Music of The Spheres - Coldplay'),
(5, 'The Eras Tour is the ongoing, sixth concert tour by the American singer-songwriter Taylor Swift, who described it as a journey through all of her musical \"eras\". An homage to her albums, the Eras Tour is her most expansive tour yet, with 151 shows across five continents. It is the highest-grossing tour of all time and the first tour to surpass $1 billion in revenue.\r\n\r\nAnnounced after the release of her tenth studio album, Midnights (2022), the Eras Tour is Swift\'s second all-stadium tour after the 2018 Reputation Stadium Tour. It commenced on March 17, 2023, in Glendale, United States, and is set to conclude on December 8, 2024, in Vancouver, Canada. The show spans over 3.5 hours, with a set list of 44 songs divided into 10 distinct acts that portray the albums conceptually. It received rave reviews from critics, who emphasized its concept, production, aesthetics and immersive ambience, as well as Swift\'s musicianship, stage presence and versatility.', '20:30:00', '2024-03-07', '23:50:00', '1702741844.jpg', 'The Eras Tour'),
(6, 'The Scarlet Tour is the ongoing second concert tour and debut arena tour by American rapper and singer Doja Cat. It is her first arena tour, in support of her fourth studio album, Scarlet (2023). The supporting acts are American rappers Ice Spice and Doechii. The North American leg of the tour commenced on October 31, 2023, at Chase Center in San Francisco and is scheduled to end on December 13, 2023, at United Center in Chicago. The European leg of the tour is set to commence on June 11, 2024, at the OVO Hydro in Glasgow, Scotland and is scheduled to end on July 12, 2024 at the Les Ardentes festival in Liège, Belgium.', '20:00:00', '2024-01-26', '21:50:00', '1702741862.jpg', 'The Scarlet Tour'),
(7, 'The After Hours Til Dawn Stadium Tour, previously titled The After Hours Tour, is the ongoing seventh concert tour by Canadian singer the Weeknd, in support of his fourth and fifth studio albums, After Hours (2020) and Dawn FM (2022). The tour, which primarily visits stadiums, commenced its first leg on July 14, 2022, at Lincoln Financial Field in Philadelphia. The tour visited North America, Europe and Latin America between 2022 and 2023 and is set to visit Oceania in 2024.\r\n\r\nThe tour was originally only in support of After Hours, set to take place in arenas, and set to begin on June 11, 2020, in Vancouver and to conclude on November 16 in London. However, due to concerns from the ongoing COVID-19 pandemic, all of the original dates were postponed twice (first to 2021 and then to early 2022) before being cancelled in favor of an all-stadium tour due to arena constraints.', '20:00:00', '2024-02-09', '22:00:00', '1702741871.jpeg', 'After Hours til Dawn Tour');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `role` enum('Pengguna','Admin','','') NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email`, `nama`, `role`, `password`, `alamat`, `telepon`) VALUES
('1231111', 'Andre Jubila', '', '124', '', ''),
('421115', 'Lila Sudiro', '', '415', '', ''),
('user1@gmail.com', 'Ahmad Yusuf Abdillah', 'Admin', 'user1', '', ''),
('user2@gmail.com', 'Riski Andriyanto', 'Pengguna', 'user2', '', ''),
('user3@gmail.com', 'Dynud Gilar Ramadhan', 'Pengguna', '456', '', ''),
('user4@gmail.com', 'abc', 'Pengguna', '123', 'aaa', '12313');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID` int(11) NOT NULL,
  `PenggunaEmail` varchar(100) NOT NULL,
  `DetailKonserID` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`ID`, `PenggunaEmail`, `DetailKonserID`, `Jumlah`, `Tanggal`) VALUES
(2, 'user2@gmail.com', 6, 4, '2023-12-14 07:23:33'),
(3, 'user2@gmail.com', 6, 5, '2023-12-14 07:37:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailkonser`
--
ALTER TABLE `detailkonser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailkonser`
--
ALTER TABLE `detailkonser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `konser`
--
ALTER TABLE `konser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
