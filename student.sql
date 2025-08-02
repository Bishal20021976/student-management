-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2025 at 02:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `photo` varchar(630) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `email`, `password`, `course`, `photo`, `timestamp`) VALUES
(3, 'Mohan Roy', 'mohan@gmail.com', '$2y$10$a/TH2n6Xv1/qAWXj8TCNAeSpDiNF9wuBOdIL0pWXv9Dn7hmZjG/y.', 'webdev', 'Header_bp1920_1.webp', '2025-03-02 09:26:48'),
(4, 'Bishal Roy', 'bishal@gmail.com', '$2y$10$BjFCvs7IA02LNY6ZHpDqUeocT75RZ65FgGanhAgdvrgjceu1G1NIe', 'webdev', 'H4sIAAAAAAAAAFvzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHsCEtzEwF-SlMwJZKUycmbmJ6an6QD4_I3taTmV-aUkxO0grT6IZW1LM5FXvttkx5OyX3LxWaWLSLgZWoC7GeUCCWQhI8KUBCU5VBjAJMm8-iLAD8ZksmRkYWCuAjEgGEODjKy3KKUgsSszVK89MKckQ1DAgEgizu7iGOHr6BAMA.png', '2025-03-02 15:26:35'),
(5, 'Sachin Verma', 'sachin123@gmail.com', '$2y$10$NXgU./1XxUGu4rQwbd1BCeXhXupbX1qFqmiADiEOBYLjx7mYtwga2', 'ai', 'H4sIAAAAAAAAAFvzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHsCEtzEwF-SlMwJZKUycmbmJ6an6QD4_I3taTmV-aUkxO0grT6IZW1LM5FXvttkx5OyX3LxWaWLSLgZWoC7GeUCCWQhI8KUBCU5VBjAJMm8-iLAD8ZksmRkYWCuAjEgGEODjKy3KKUgsSszVK89MKckQ1DAgEgizu7iGOHr6BAMA.png', '2025-03-03 08:59:10'),
(6, 'Arindam Roy', 'arindam123@gmail.com', '$2y$10$igaUAEwjHDfBzZIE4WOXG.6wL.6BXV3mN.mySBSID.5lKeVlp6bMq', 'data', 'H4sIAAAAAAAAAFvzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHsCEtzEwF-SlMwJZKUycmbmJ6an6QD4_I3taTmV-aUkxO0grT6IZW1LM5FXvttkx5OyX3LxWaWLSLgZWoC7GeUCCWQhI8KUBCU5VBjAJMm8-iLAD8ZksmRkYWCuAjEgGEODjKy3KKUgsSszVK89MKckQ1DAgEgizu7iGOHr6BAMA.png', '2025-03-04 21:44:53'),
(7, 'Harry Potter', 'harry@gmail.com', '$2y$10$287g4TnjNFCz/llc.EX31ODsSKeku0FM3Wmny3YTSqmiaMIdTXcty', 'webdev', '360_F_77711294_BA5QTjtgGPmLKCXGdtbAgZciL4kEwCnx.jpg', '2025-08-02 18:24:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
