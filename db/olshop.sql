-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Pakaian Pria'),
(2, 'Pakaian Wanita'),
(3, 'Bawahan Pria'),
(4, 'Bawahan Wanita'),
(5, 'Topi'),
(6, 'Hoodie'),
(7, 'Totebag');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(1, 1, 'T-SHIRT MUHAMMAD ALI', 79000, 'rj5mza9wd3ktovrhc4jd.png', 'T-shirt Muhammad Ali adalah pernyataan gaya yang menghadirkan semangat juara di setiap helainya. Dengan gambar ikonik The Greatest dan kutipan inspiratif, busana ini merayakan keberanian dan ketangguhan. Sebuah penghormatan kepada legenda tinju yang melekat dalam sejarah dan keberanian yang tak tergoyahkan.', 'tersedia'),
(2, 1, 'T-SHIRT BAND NIRVANA', 79000, 'xzzttr1hg5ugx3zmyhdt.png', 'T-shirt Nirvana merayakan estetika grunge dengan desain ikonik smiley face. Simboliknya mencerminkan perlawanan dan kreativitas revolusioner, mengabadikan warisan musik alternatif dan ikonik Kurt Cobain. Garmen ini adalah penghormatan terhadap semangat tak terkendali dan kebebasan artistik dalam sejarah musik.', 'tersedia'),
(3, 1, 'T-SHIRT BAND AC/DC', 79000, 'bx8ace1me3u95zrvgp0d.png', 'T-shirt band AC/DC adalah simbol gaya rok klasik yang tak lekang oleh waktu. Dengan desain ikonik berlogo petir dan gaya retro, seragam hitam ini memancarkan energi yang menggelegar, mencerminkan kegaharan musik rock legendaris. Busana ini adalah penghormatan kepada ikon musik yang tak tergantikan.', 'tersedia'),
(4, 1, 'T-SHIRT BAND MISFITS', 79000, 'qpbjynv4mmgi6i6mp0dd.png', 'T-shirt Misfits memancarkan aura punk dan gothic dengan logo tengkorak khasnya. Desainnya menciptakan atmosfer gelap dan pemberontakan, mencerminkan identitas unik band. Seragam hitam ini adalah penghormatan kepada ikon kultus musik alternatif, merayakan kegelapan dan keberanian dalam era punk rock.', 'tersedia'),
(5, 4, 'CARGO PANTS', 199000, 'geqhf9pg9jgu3baeyzqg.png', 'Cargo pants adalah simbol kenyamanan dan fungsionalitas. Dengan potongan yang longgar dan serangkaian kantong yang berguna, celana ini memadukan gaya dan kepraktisan. Cocok untuk petualangan sehari-hari, memberikan sentuhan utilitarian dalam mode dengan desain yang trendi dan nyaman.', 'tersedia'),
(6, 6, 'HOODIE JAKET Y2K SPIDERMAN', 199000, 'yr8tyu50eyys6nlx33rd.png', 'Hoodie adalah pilihan pakaian yang stylish dan nyaman. Dengan capuchon yang memberikan kesan kasual, busana ini memberikan kehangatan dan gaya modern. Cocok untuk segala cuaca, hoodie menjadi simbol kebebasan ekspresi dan kenyamanan yang tak lekang oleh waktu.', 'tersedia'),
(7, 5, 'OZYC 2018 Unisex Baseball', 268000, 'pg4ktzhi7d77f1xqnydk.png', 'Topi adalah sentuhan gaya yang tak tergantikan. Dengan desain yang beragam, topi menambahkan sentuhan aksen pada penampilan. Fungsional dan modis, topi melambangkan kepribadian dan memberikan perlindungan yang trendi dari sinar matahari atau cuaca.', 'tersedia'),
(8, 6, 'SHEIN Coolane Letter Graphic Zip Up hermal Lined Hoodie', 300000, '5bkfjhmsvfmx6xxaot41.png', 'Hoodie adalah pilihan pakaian yang stylish dan nyaman. Dengan capuchon yang memberikan kesan kasual, busana ini memberikan kehangatan dan gaya modern. Cocok untuk segala cuaca, hoodie menjadi simbol kebebasan ekspresi dan kenyamanan yang tak lekang oleh waktu.', 'tersedia'),
(9, 5, 'NEW YORK HAT ', 100000, 'ql48zz7fhdjli7zjfjj4.png', 'Topi adalah sentuhan gaya yang tak tergantikan. Dengan desain yang beragam, topi menambahkan sentuhan aksen pada penampilan. Fungsional dan modis, topi melambangkan kepribadian dan memberikan perlindungan yang trendi dari sinar matahari atau cuaca.', 'tersedia'),
(10, 6, 'Sweaters Japanese Cartoon Vintage Space', 464836, 'zgbz9dx3eufzs9b60rva.png', 'Hoodie adalah pilihan pakaian yang stylish dan nyaman. Dengan capuchon yang memberikan kesan kasual, busana ini memberikan kehangatan dan gaya modern. Cocok untuk segala cuaca, hoodie menjadi simbol kebebasan ekspresi dan kenyamanan yang tak lekang oleh waktu.', 'tersedia'),
(11, 6, 'Faceless Skull Premium Hoodie', 574000, 'lnhxajswnmcjr1i2i2ep.png', 'Hoodie adalah pilihan pakaian yang stylish dan nyaman. Dengan capuchon yang memberikan kesan kasual, busana ini memberikan kehangatan dan gaya modern. Cocok untuk segala cuaca, hoodie menjadi simbol kebebasan ekspresi dan kenyamanan yang tak lekang oleh waktu.', 'tersedia'),
(12, 6, 'reworked nike flow hoodie', 2328450, 'n1widg8xsrpo84536p0m.png', 'Hoodie adalah pilihan pakaian yang stylish dan nyaman. Dengan capuchon yang memberikan kesan kasual, busana ini memberikan kehangatan dan gaya modern. Cocok untuk segala cuaca, hoodie menjadi simbol kebebasan ekspresi dan kenyamanan yang tak lekang oleh waktu.', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(0, 'admin', 'fairuzdzakiyya20@gmail.com', '*E73C4CFCE59D2060652B7A2D69758ADEC96E6D34'),
(1, 'admin', 'anjas@gmail.com', 'hebat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
