-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 02:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_blog`
--

CREATE TABLE `image_blog` (
  `id` int(3) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `user_id` varchar(6) NOT NULL,
  `file_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_blog`
--

INSERT INTO `image_blog` (`id`, `title`, `content`, `user_id`, `file_image`) VALUES
(14, 'MANFAAT TIDUR', 'Manfaat tidur cukup bagi kesehatan selanjutnya adalah dapat smempertajam ingatan. Kurang istirahat dan tidur diduga bisa membuat cepat pikun. Salah satu penelitian menunjukkan bahwa ketika tidur, otak memroses, memperkuat, dan menggabungkan ingatan dari sepanjang hari. Jika kurang tidur, ingatan-ingatan tersebut tidak bisa disimpan dengan benar dalam otak dan bisa hilang.  Tidur selama tujuh sampai delapan jam dapat membuat kamu mengalami semua tahap tidur. Dua fase tidur, yaitu fase REM dan slow wave sleep dapat melancarkan proses mengingat dan berpikir kreatif.', 'U002', '5fc245f695541.jpg'),
(15, 'MANFAAT MEMBACA', 'Membaca bagaikan senam mental untuk otak. Penelitian terbaru mengungkapkan bahwa membaca dapat memengaruhi proses pemikiran dan mengaktifkan kinerja otak kita. Melalui membaca, Anda bisa memosisikan diri Anda dengan posisi orang lain sesuai dengan karakter tertentu pada buku yang Anda baca. Lewat membaca, Anda bisa membayangkan beragam kondisi atau situasi, dan ini merupakan tantangan yang baik untuk kesehatan otak.  Selain mendapat pengetahuan, dengan membaca Anda bisa belajar dan mengetahui situasi emosional agar menjadi lebih baik lagi. Hal ini berguna untuk anak-anak, remaja, dewasa, dan juga lansia. Dengan demikian, hobi membaca sepanjang waktu memiliki manfaat terkait kecerdasan sosial Anda. Selain itu, membaca juga bisa meminimalkan risiko terkena demensia pada lansia.  Penelitian mengungkapkan, orang yang tumbuh di rumah yang memiliki banyak buku lebih mungkin untuk mencapai pendidikan tinggi, memperoleh pendapatan yang lebih besar, dan memiliki fungsi kognitif yang baik di masa depan.', 'U001', '5fc2483036db5.jpg'),
(16, 'KUNCI SUKSES', 'Tentu saja, keberanian saja tidak cukup. Kita juga perlu memperhitungkan hal hal lainnya. Keberanian tanpa perhitungan, ibarat seorang tentara terjun ke medan perang, tapi dengan senjata tidak dilengkapi dengan peluru, atau memiliki busur tanpa anak panah. Rekan tadi berani melakukan â€˜dealâ€™, karena setelah melakukan sedikit survey, ia yakin akan banyak orang lain yang berminat, jika ia membangun rumah di atas lahan tersebut. Dan perhitungannya ternyata tepat.', 'U003', '5fc248b954cd6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `id_users` varchar(6) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_users`, `name`, `email`) VALUES
(1, 'U002', 'M iqbal deffa N', 'iqbaldeffa221197@gmail.com'),
(2, 'U001', 'Andhiniee', 'andhinie@gmail.com'),
(3, 'U003', 'Lazuardi', 'lazuardi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_blog`
--
ALTER TABLE `image_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_blog`
--
ALTER TABLE `image_blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
