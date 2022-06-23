-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `item_code` text NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id`, `item_code`, `item_name`, `price`, `stock`, `gambar`, `status`) VALUES
(1, 'jl.ngeksigondo.no17', 'Gudeg Bu wardoyo', 600, 15000, 'https://img-global.cpcdn.com/recipes/8155c8b195ee70be/1200x630cq70/photo.jpg', ''),
(4, 'jl. Magelang. km6', 'Ayam Woku pak mardigu', 1000, 20000, 'https://asset.kompas.com/crops/s37VgXeLUuLGr6k9-7kfrfMWZf4=/32x0:1000x645/780x390/data/photo/2022/02/11/62062e047e908.jpg', ''),
(5, 'jl. imogiri km3,2', 'Tongseng kambing mas biring', 3000, 40000, 'https://cdn-2.tstatic.net/tribunnews/foto/bank/images/tongsengsolooo.jpg', ''),
(10, 'pilahan no  6. kotagede', 'Mie Jawa Mas Tawa', 1000, 19000, 'https://www.masakapahariini.com/wp-content/uploads/2019/02/mie-rebus-jawa-780x440.jpg', ''),
(11, 'jl. brebah km8', 'nasi uduk mbak Donyuk', 1500, 12000, 'https://asset.kompas.com/crops/UAJklFFzp6OLWaRpyllh5H-Jq0A=/0x0:1000x667/780x390/data/photo/2021/02/21/6032066dc88e0.jpg', ''),
(13, 'jl. pemalang. no8', 'Soto Lamongan mas Jagan', 1300, 14000, 'https://www.masakapahariini.com/wp-content/uploads/2019/11/shutterstock_1469046305-780x440.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
