-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 02, 2026 at 02:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crveni_vitez`
--

-- --------------------------------------------------------

--
-- Table structure for table `igraci`
--

CREATE TABLE `igraci` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `godine` int(11) NOT NULL,
  `pozicija` varchar(50) NOT NULL,
  `visina` varchar(20) NOT NULL,
  `iskustvo` varchar(50) NOT NULL,
  `tim` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `igraci`
--

INSERT INTO `igraci` (`id`, `ime`, `prezime`, `godine`, `pozicija`, `visina`, `iskustvo`, `tim`, `status`) VALUES
(1, 'Marko', 'Marković', 20, 'Golman', '188 cm', '6 godina', 'Prvi tim', 'Prijavljen'),
(2, 'Nemanja', 'Jovanović', 18, 'Golman', '185 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(3, 'Nikola', 'Nikolić', 22, 'Odbrana', '186 cm', '7 godina', 'Prvi tim', 'Prijavljen'),
(4, 'Luka', 'Jovanović', 21, 'Odbrana', '183 cm', '5 godina', 'Prvi tim', 'Prijavljen'),
(5, 'Ognjen', 'Stanković', 23, 'Odbrana', '187 cm', '7 godina', 'Prvi tim', 'Prijavljen'),
(6, 'Uroš', 'Marković', 19, 'Odbrana', '182 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(7, 'Vladimir', 'Ilić', 18, 'Odbrana', '180 cm', '2 godine', 'Drugi tim', 'Prijavljen'),
(8, 'Jakov', 'Đorđević', 18, 'Odbrana', '184 cm', '2 godine', 'Drugi tim', 'Prijavljen'),
(9, 'Petar', 'Petrović', 23, 'Vezni', '179 cm', '8 godina', 'Prvi tim', 'Prijavljen'),
(10, 'Stefan', 'Ilić', 20, 'Vezni', '181 cm', '5 godina', 'Prvi tim', 'Prijavljen'),
(11, 'Dušan', 'Pavlović', 20, 'Vezni', '177 cm', '5 godina', 'Prvi tim', 'Prijavljen'),
(12, 'Danilo', 'Petrović', 19, 'Vezni', '178 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(13, 'Viktor', 'Savić', 18, 'Vezni', '176 cm', '2 godine', 'Drugi tim', 'Prijavljen'),
(14, 'Matej', 'Kovačević', 20, 'Vezni', '180 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(15, 'Miloš', 'Stojanović', 24, 'Krilo', '178 cm', '7 godina', 'Prvi tim', 'Prijavljen'),
(16, 'Vuk', 'Pavlović', 21, 'Krilo', '180 cm', '6 godina', 'Prvi tim', 'Prijavljen'),
(17, 'Matija', 'Stojanović', 20, 'Krilo', '177 cm', '4 godine', 'Drugi tim', 'Prijavljen'),
(18, 'Vanja', 'Nikolić', 19, 'Krilo', '179 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(19, 'Andrej', 'Simić', 22, 'Napadač', '184 cm', '6 godina', 'Prvi tim', 'Prijavljen'),
(20, 'Filip', 'Nikolić', 19, 'Napadač', '182 cm', '4 godine', 'Prvi tim', 'Prijavljen'),
(21, 'Relja', 'Janković', 18, 'Napadač', '181 cm', '3 godine', 'Drugi tim', 'Prijavljen'),
(22, 'Ivan', 'Ristić', 19, 'Napadač', '183 cm', '4 godine', 'Drugi tim', 'Prijavljen'),
(23, 'Lazar', 'Vukelić', 22, 'Napad', '1.78cm', '6 godina', 'Drugi tim', 'Prijavljen'),
(24, 'Bogdan', 'Marković', 24, 'Napadač', '183cm', '5', 'Drugi tim', 'Prijavljen'),
(25, 'Filip', 'Vukanović', 22, 'Vezni', '180 cm', '6 godina', 'Drugi tim', 'Prijavljen'),
(26, 'Marko', 'Petrovic', 24, 'Odbrana', '180 cm', '8 godina', 'Drugi tim', 'Prijavljen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igraci`
--
ALTER TABLE `igraci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igraci`
--
ALTER TABLE `igraci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
