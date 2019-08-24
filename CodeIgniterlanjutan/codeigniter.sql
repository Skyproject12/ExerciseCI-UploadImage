-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 08:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_post`
--

CREATE TABLE `create_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskription` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `hastag` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_post`
--

INSERT INTO `create_post` (`id`, `title`, `deskription`, `gambar`, `hastag`, `create_at`) VALUES
(2, 'Apa Itu PHP ', '<p>Pada awalnya PHP merupakan kependekan dari Personal Home Page (Situs personal). PHP pertama kali dibuat oleh Rasmus Lerdorf pada tahun 1995. Pada waktu itu PHP masih bernama Form Interpreted (FI), yang wujudnya berupa sekumpulan skrip yang digunakan untuk mengolah data formulir dari web.</p>\r\n\r\n<p>Selanjutnya Rasmus merilis kode sumber tersebut untuk umum dan menamakannya PHP/FI. Dengan perilisan kode sumber ini menjadi sumber terbuka, maka banyak pemrogram yang tertarik untuk ikut mengembangkan PHP.</p>\r\n\r\n\r\n<h4><b>Perkembangan PHP</b></h4><br>\r\n\r\n\r\n<p>Pada Juni 2004, Zend merilis PHP 5.0. Dalam versi ini, inti dari interpreter PHP mengalami perubahan besar. Versi ini juga memasukkan model pemrograman berorientasi objek ke dalam PHP untuk menjawab perkembangan bahasa pemrograman ke arah paradigma berorientasi objek. Server web bawaan ditambahkan pada versi 5.4 untuk mempermudah pengembang menjalankan kode PHP tanpa menginstall software server.</p>\r\n\r\n<p>Versi terbaru dan stabil dari bahasa pemograman PHP saat ini adalah versi 7.0.16 dan 7.1.2 yang resmi dirilis pada tanggal 17 Februari 2017.</p>\r\n', 'pengertianphp.png', 'php', '2018-09-07 06:23:48'),
(3, 'Apa Itu HTML', '<p><em><strong>Hypertext Markup Language</strong></em> (HTML) adalah sebuah <em><a href="https://id.wikipedia.org/wiki/Bahasa_markah">bahasa markah</a></em> membuat sebuah halaman web, menampilkan berbagai  <a href="https://id.wikipedia.org/wiki/Penjelajah_web">penjelajah web</a> Internet dan pemformatan hiperteks sederhana yang ditulis dalam berkas format ASCII agar dapat menghasilkan tampilan wujud yang terintegerasi. Dengan kata lain, berkas yang dibuat dalam perangkat lunak pengolah kata dan disimpan dalam format <a href="https://id.wikipedia.org/wiki/ASCII">ASCII</a> normal sehingga menjadi <a href="https://id.wikipedia.org/wiki/Halaman_web">halaman web</a> </p>\r\n', 'pengertianhtml.png', 'html', '2018-09-07 06:37:44'),
(4, 'Apa Itu Csharp ', '<p>C# atau yang dibaca C sharp adalah bahasa pemrograman sederhana yang digunakan untuk tujuan umum, dalam artian bahasa pemrograman ini dapat digunakan untuk berbagai fungsi misalnya untuk pemrograman server-side pada website, membangun aplikasi desktop ataupun mobile, pemrograman game dan sebagainya. Selain itu C# juga bahasa <a href="https://id.wikipedia.org/wiki/Pemrograman_berorientasi_objek" target="_blank">pemrograman yang berorientasi objek</a>, jadi C# juga mengusung konsep objek seperti <em>inheritance, class, polymorphism</em> dan <em>encapsulation</em>.</p>\r\n', 'pengertiancsharp.png', 'csharp', '2018-09-07 06:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `judul`, `gambar`, `post`) VALUES
(1, 'Pengantar Design Web', 'pdw.jpg', 'Pengantar design web merupakan suatu pelajaran dalam teknik informatika berbasis web dimana kalian akan di ajarkan apa itu html dan lainnya '),
(2, 'Implementasi Algoritma', 'ima.jpg', 'implementasi algoritma merupakan suatu pelajaran dalam teknik informatika diamana kalian akan diajarkan berkaitan dengan pengimplementasian algoritma '),
(3, 'Program Web', 'progweb.jpg', 'merupakan pemrograman yang menggunakna beberapa bahasa yang mungkin kalian bisa pelajari pemrograman dalam kehidupan sehari hari');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `username`, `password`) VALUES
(1, 'skylightlight12@gmail.com', 's', 's'),
(2, 'skylightlight12@gmail.com', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `konfirmasi` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `email`, `username`, `password`, `konfirmasi`, `pendidikan`) VALUES
(13, 'sumendrakadek108@gmail.com', 'sky', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'SMP'),
(14, 'skylightlight12@gmail.com', 's', '03c7c0ace395d80182db07ae2c30f034', 's', 'SMP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_post`
--
ALTER TABLE `create_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_post`
--
ALTER TABLE `create_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
