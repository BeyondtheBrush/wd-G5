-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2025 at 01:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE `paintings` (
  `id` int(11) NOT NULL,
  `paintingName` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paintings`
--

INSERT INTO `paintings` (`id`, `paintingName`, `author`, `image`, `details`) VALUES
(1, 'Spoliarium', 'Juan Luna', 'art1.jpg', 'The Spoliarium is a painting by Filipino painter Juan Luna. Luna, working on canvas, spent eight months completing the painting which depicts dying gladiators. The painting was submitted by Luna to the Exposición Nacional de Bellas Artes in 1884 in Madrid, where it garnered the first gold medal.'),
(2, 'Granadean Arabesque\r\n', 'Jose Joya', 'art2.jpg', 'The “Granadean Arabesque,” is a staple of the Philippine art world, created by the well-known Filipino painter and Artist Jose Joya.\r\n'),
(3, 'Las Virgenes Cristianas Expuestas al Populacho', 'Félix Resurrección Hidalgo\r\n', 'art3.jpg', 'Las Virgenes Cristianas Expuestas al Populacho or The Christian Virgins Exposed to the Populace is a famous 1884 history painting by Filipino painter, reformist, and propagandist Félix Resurrección Hidalgo\r\n'),
(4, 'The Blood Compact', 'Juan Luna', 'art4.jpg', 'The Blood Compact is an “historic and historical” painting by Filipino painter Juan Luna. The scene painted by the artist portrays the 1565 Sandugo (blood compact ritual) between Datu Sikatuna of Bohol and Miguel López de Legazpi, surrounded by other conquistadores. Datu Sikatuna was described to be ‘being crowded out of the picture by Miguel López de Legazpi and his fellow conquistadores’. This is one of the last paintings created by Luna.'),
(5, 'Bayanihan', 'Carlos “Botong” Francisco', 'art5.jpg', 'Bayanihan by Carlos “Botong” Francisco exemplifies one of the famous cultures in the Philippines which is Bayanihan that has a root word of “Bayani” which simply means “Hero”. With this, this painting shows a hero to one another. During early times, people would carry houses to change places to relocate a neighbor because of a natural calamity or simply to move places. According to Pinoy Art Hub (2018), this is done by gathering enough people from the same neighborhood to carry a Bahay Kubo or a nipa hut'),
(6, 'Planting Rice', 'Fernando Amorsolo', 'art6.jpg', '\"Planting Rice\" is a famous oil painting by Filipino artist Fernando Amorsolo, known for his idyllic and realistic depictions of Philippine rural life. The painting typically features farmers, often working together, planting rice in a sun-drenched field, sometimes with Mount Mayon in the background.');

-- --------------------------------------------------------

--
-- Table structure for table `photographies`
--

CREATE TABLE `photographies` (
  `id` int(11) NOT NULL,
  `photographer` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographies`
--

INSERT INTO `photographies` (`id`, `photographer`, `image`, `details`) VALUES
(1, 'Xyza Cruz Bacani', 'photo5.jpg', ' a Filipina Street and Documentary Photographer based in Hong Kong. Having worked as a second-generation migrant domestic worker in the city, she used photography to raise awareness about under-reported stories, focusing on the intersections of labour and human rights'),
(2, 'Ezra Acayan', 'photo4.jpg', 'Ezra Acayan is a documentary photographer based in Manila whose work primarily focuses on social issues and human rights. Currently, he is working on a documentary reportage on the suffering and abuse experienced by communities under the Philippine governments war on drugs.'),
(3, 'Shaira Luna', 'photo3.jpg', 'A professional fashion and advertising photographer. Her photos outside of the commercial stuff are heavily inspired by decades past.'),
(4, 'Manny Librodo', 'photo2.jpg', 'is a highly decorated photographer. Specialising in travel and people, glamour and fashion photography, his popularity among photographers and photography fans is evident through more than 27 million hits in his Pbase account alone'),
(5, 'BJ Pascual', 'photo1.jpg', 'is one of Manilas biggest names. Hes the citys go-to celebrity fashion photographer whose work has featured on countless magazine covers (including this one), high profile advertising campaigns and popular pan-continental TV show, Asias Next Top Model.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'user1', 'user123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographies`
--
ALTER TABLE `photographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photographies`
--
ALTER TABLE `photographies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
