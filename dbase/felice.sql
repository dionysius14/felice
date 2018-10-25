-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 07:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `felice`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` smallint(6) NOT NULL,
  `link_fb` varchar(255) NOT NULL,
  `link_ig` varchar(255) NOT NULL,
  `link_youtube` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `about_tgl_input` date NOT NULL,
  `about_ket` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `link_fb`, `link_ig`, `link_youtube`, `link_twitter`, `about_tgl_input`, `about_ket`, `phone`, `alamat`, `latitude`, `longitude`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'https://www.facebook.com/SouvenirPernikahanMurahMeriah/', 'https://www.instagram.com/agnes.souvenir/?hl=id', 'https://www.youtube.com/', 'https://twitter.com/', '2018-10-25', '</br></br>\r\nAgnes Parcel n Souvenir merupakan salah satu produsen dan suplier souvenir untuk berbagai acara yang meliputi souvenir pernikahan, souvenir kelahiran, souvenir ulang tahun, souvenir promosi perusahaan, parcel untuk event-event tertentu , dll\r\n</br></br>\r\nKami menyediakan banyak pilihan barang dengan harga yang kompetitif dan kualitas barang yang terbaik.\r\n</br></br>\r\nAgnes Parcel n Souvenir ada sejak Juli 2010.Kami berada di Jl.Daha Royal Park 15 Magelang.Lokasi yang strategis memudahkan Anda untuk dapat mengunjungi Toko Kami :)\r\n</br></br>\r\nAgnes Souvenir selalu berusaha mengerti keinginan konsumen dengan memberikan berbagai alternatif pilihan souvenir sesuai selera dan budget konsumen. Kami selalu mengutamakan pelayanan yang terbaik kepada konsumen kami.\r\n</br></br>\r\nDapatkan Parcel dan Souvenir yang berkesan di Hari Spesial Anda bersama Kami...\r\n</br></br></br></br><b>Agnes Parcel n Souvenir</b>\r\n</br></br>Jl. Daha Ruko Royal Park No. 15 Magelang - Jawa Tengah\r\n</br></br>Phone/WA : <a href=\"https://api.whatsapp.com/send?\r\n\r\nphone=6281903872662&text=Halo \r\n\r\nwww.agnessouvenir.com\">081903872662,</a><a href=\"https://api.whatsapp.com/send?phone=6282242256874&text=Halo www.agnessouvenir.com\">082242256874</a> \r\n</br></br>Website : http://www.agnessouvenir.com\r\n\r\n ', '<a href=\"https://api.whatsapp.com/send?phone=6281903872662&text=Halo www.agnessouvenir.com\">081903872662,</a><a href=\"https://api.whatsapp.com/send?phone=6282242256874&text=Halo www.agnessouvenir.com\">082242256874</a> ', 'Jl. Daha Ruko Royal Park No. 15 Magelang - Jawa Tengah', '-7.4819733', '110.2186036', '2018-10-24 23:05:31', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('08e18f8f4cfd71f48147ba6dd7b4e6eaa5cd63da', '127.0.0.1', 1540486404, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438363237303b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31323a22486f7720746f204f72646572223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333637323b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('0ec425596c10ff012231f3e531154c6bf280c930', '127.0.0.1', 1540484729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438343530323b6c6173745f75726c7c733a31313a2274657374696d6f6e69616c223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31363a2244617461204c696e6b20536f6369616c223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333636303b),
('58b6024ff7fb562051b8050ebe9c9a8935ef2ff0', '127.0.0.1', 1540485891, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438353632393b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31373a22446174612050726f64756b20446574696c223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333636383b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('5dc1a4f01fa0675b7aeb95c7e7f13dcd0a8ef9d3', '127.0.0.1', 1540487524, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438373530323b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31323a22486f7720746f204f72646572223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333637323b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('6c64ea5a9f8f3c0b3f415fc019534d5718c73c7a', '127.0.0.1', 1540485849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438353634323b),
('70b48b4c7d85fab1e2506501c4e10b285081384c', '127.0.0.1', 1540485281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438353135373b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31373a22446174612050726f64756b20446574696c223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333636383b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('741b79fe5b2eaf0d8215f5312e3a6050cd87a4e2', '127.0.0.1', 1540486717, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438363731373b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31323a22486f7720746f204f72646572223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333637323b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('c194d9df0af2b7af3a8cbf09266efa8bb79267f1', '127.0.0.1', 1540486076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438353933303b6c6173745f75726c7c733a343a22686f6d65223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31323a22486f7720746f204f72646572223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333636393b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313930223b),
('c7135fc45e945b4713828387573513bb091dc015', '127.0.0.1', 1540485125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438343833343b6c6173745f75726c7c733a31313a2274657374696d6f6e69616c223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31373a22446174612050726f64756b20446574696c223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333636353b6b6579776f72647c733a343a2262616c6c223b616b7365735f706173735f69647c733a343a2275736572223b70726f64756b5f69647c733a333a22313737223b),
('cbe540efd4144d20cf9bf22df34fbb31792643a5', '127.0.0.1', 1540484397, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438343136373b6c6173745f75726c7c733a31313a2274657374696d6f6e69616c223b7469746c657c733a32333a2241676e65732050617263656c276e20536f7576656e6972223b7375627469746c657c733a31363a2244617461204c696e6b20536f6369616c223b757365725f69647c733a313a2231223b726f6c655f69647c733a313a2231223b757365725f6e616d657c733a353a2261646d696e223b616b7365737c733a313a2231223b616b7365735f696e736572747c733a313a2231223b616b7365735f656469747c733a313a2231223b616b7365735f64656c6574657c733a313a2231223b616b7365735f69647c733a303a22223b6c6173745f69647c693a333635393b),
('db312683839d53db3c400f45317bf423815b4dca', '127.0.0.1', 1540487120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438363837333b6c6173745f75726c7c733a343a226e657773223b),
('db8da4ecc93a9a45fc118318ed0e1b3302fdfa79', '127.0.0.1', 1540487332, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534303438373137363b6c6173745f75726c7c733a343a226e657773223b);

-- --------------------------------------------------------

--
-- Table structure for table `data_news`
--

CREATE TABLE `data_news` (
  `news_id` int(11) NOT NULL,
  `news_foto` varchar(255) NOT NULL,
  `news_judul` varchar(255) NOT NULL,
  `news_konten` text NOT NULL,
  `news_date` date NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_news`
--

INSERT INTO `data_news` (`news_id`, `news_foto`, `news_judul`, `news_konten`, `news_date`, `is_delete`) VALUES
(1, '22102018130214vi1.jpg', 'Undangan hingga Souvenir, 10 Dekorasi Vintage Ini Bisa Dibuat Sendiri', 'Mendambakan pernikahan bertema vintage? Gak perlu pusing memikirkan dekorasinya, kamu bisa bikin sendiri dengan memanfaatkan barang-barang yang ada lho. Selain mudah dibuat, kamu juga bisa menghemat pengeluaran deh.', '2018-09-28', 0),
(2, '22102018130201vi2.jpg', '8 Inspirasi Souvenir Sederhana untuk Rustic Wedding Theme', 'Pernikahan merupakan momen sakral bagi sepasang pengantin. Berbagai persiapan mereka lakukan untuk membuat pestanya sempurna dan seindah mungkin. Salah satu tema yang belakangan ini dipilih untuk merayakan pesta pernikahan adalah rustic wedding. Konsep pernikahan ini mengusung tema \'nature\'. Biasanya dirayakan di luar ruangan dengan dekorasi berbau alam seperti, bunga-bunga liar, kayu maupun ranting, batuan dan pernak pernik berwarna pastel serta memiliki kesan jadul. Salah satu pernak pernik yang biasanya ada dalam pernikahan yaitu souvenir. Supaya para kerabat, rekan dan tamu undanganmu terkesan, berikut ini souvenir yang bisa kamu berikan di hari istimewa. Block note dilengkapi dengan pensil yang dibalut dengan warna coklat muda bisa menjadi salah satu pilihan souvenir. Block note bisa dibuat dari kertas daur ulang sehingga lebih ramah lingkungan. Simpel, bermanfaat dam ramah lingkungan. Lilin aroma terapi bisa memberikan efek rileks dengan aroma lembut seperti bunga lavender atau buah. Selain itu, bisa dimanfaatkan sebagai penerangan saat listrik padam. Satu lagi souvenir yang bisa kamu berikan, pouch. Kamu bisa membuatnya sendiri hanya dengan kain dan resleting. Bahkan, bisa memanfaatkan kain perca sebagai bahan dan dikombinasikan sesukamu. Selain pouch, kamu juga bisa membuat dompet, drawstring, tote bag maupun sling bag.', '2018-09-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `pegawai_kode` varchar(20) NOT NULL,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_alamat` varchar(50) NOT NULL,
  `pegawai_telepon` varchar(20) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `produk_id` smallint(6) NOT NULL,
  `kategori_id` smallint(6) NOT NULL,
  `produk_foto` varchar(255) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_deskripsi` varchar(255) NOT NULL,
  `produk_tgl_input` date NOT NULL,
  `produk_ket` varchar(255) NOT NULL,
  `produk_harga` decimal(15,2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`produk_id`, `kategori_id`, `produk_foto`, `produk_nama`, `produk_deskripsi`, `produk_tgl_input`, `produk_ket`, `produk_harga`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(177, 1, '22102018174322asbak.jpg', 'Asbak Kotak', 'Harga sudah termasuk sablon 4 sisi 2 warna 2 klise\r\n\r\nBelum termasuk packing\r\n\r\nUkuran 11,5x11,5 cm tinggi 3 cm\r\n\r\nLama pengerjaan 2 minggu stelah acc design', '2018-10-22', '', '15000.00', '2018-10-22 02:16:15', 1, 0, 0),
(178, 2, '22102018174406ballpoint_cabai.jpg', 'Ballpoint Cabai', 'Harga sudah termasuk print nama , belum packing\r\n</br>Minimal 500 pcs\r\n</br>\r\nWarna dapat request\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-23', '', '2500.00', '2018-10-23 02:04:14', 1, 0, 0),
(179, 2, '22102018174457tali1.jpg', 'Ballpoint Tali', 'Harga sudah termasuk print nama , belum packing\r\n</br>\r\nMinimal 500 pcs\r\n</br>\r\nWarna dapat request\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-22', '', '0.00', '2018-10-22 10:59:21', 1, 0, 0),
(180, 2, '22102018174558CLAY1.jpg', 'Ballpoint Clay', 'Harga sudah termasuk print nama , belum packing\r\n</br>\r\nMinimal 500 pcs\r\n</br>\r\nWarna dapat request\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-22', '', '0.00', '2018-10-22 10:59:39', 1, 0, 0),
(181, 3, '22102018174902PERSEGI1.jpg', 'Bantal Persegi', 'Harga sudah termasuk bordir nama, belum packing\r\n</br>\r\nUk.30x30 cm\r\n</br>\r\nTidak pakai bulu harga Rp 26.000,-\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-22', '', '0.00', '2018-10-22 11:00:08', 1, 0, 0),
(182, 3, '22102018174933LOVE1.jpg', 'Bantal Love', 'Harga sudah termasuk bordir nama, belum packing\r\n</br>\r\nUk.30x30 cm\r\n</br>\r\nTidak pakai keliling bulu harga Rp 24.500,-\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-22', '', '0.00', '2018-10-22 10:57:55', 1, 0, 0),
(183, 4, '23102018102147clay1.jpg', 'Clay Gantungan Kunci ', 'Harga sudah termasuk packing plastik pita dan kartu\r\n</br>\r\nBisa request bentuk\r\n</br>\r\nLama pembuatan kurang lebih 4 minggu', '2018-10-23', '', '7500.00', '2018-10-23 03:21:47', 1, 0, 0),
(184, 4, '23102018103009mika1.jpg', 'Clay Couple Mika', 'Harga sudah termasuk card di dalam dan packing mika pita\r\n</br>\r\nLama pengerjaan 4 minggu', '2018-10-23', '', '10000.00', '2018-10-23 03:30:09', 1, 0, 0),
(185, 5, '23102018103258dompet1.jpg', 'Dompet Pouch Minions', 'Harga belum termasuk packing dan isi\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '32500.00', '2018-10-23 03:32:58', 1, 0, 0),
(186, 5, '23102018103449dompet3.jpg', 'Dompet Batik Medium', 'Harga belum termasuk packing\r\n</br>\r\nUkuran panjang 18 cm lebar 9 cm\r\n</br>\r\nMinimal order 300 pcs\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '4500.00', '2018-10-23 03:34:49', 1, 0, 0),
(187, 6, '23102018103618drawer1.jpg', 'Drawer Pororo', 'Harga sudah termasuk cetak full colour, belum termasuk packing\r\n</br>\r\nPacking plastik   pita & kartu   Rp 5.000,-\r\n</br>\r\nUkuran 30cm x 20cm x 12cm\r\n</br>\r\nUkuran dan design dapat menyesuaikan\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-23', '', '32500.00', '2018-10-23 03:36:18', 1, 0, 0),
(188, 6, '23102018103842drawe2.jpg', 'Drawer Box', 'Harga sudah termasuk cetak full colour, belum termasuk packing\r\n</br>\r\nUkuran 30cm x 20cm x 12cm\r\n</br>\r\nUkuran dan design dapat menyesuaikan\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '35000.00', '2018-10-23 03:38:42', 1, 0, 0),
(189, 7, '23102018104127laser1.jpg', 'Flashdisk Laser Grafir', 'Harga sudah termasuk grafir nama\r\n\r\nFlashdisk 4 G\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '70000.00', '2018-10-23 03:41:27', 1, 0, 0),
(190, 7, '23102018104312fd1.jpg', 'Flashdisk Ballpoint', 'Harga sudah termasuk pad print nama\r\n</br>\r\nFlashdisk 4 G\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '70000.00', '2018-10-23 03:43:12', 1, 0, 0),
(191, 8, '23102018104504ACR1.jpg', 'Gantungan Kunci Acrylic', 'Harga tergantung ukuran, design dan jumlah\r\n</br>\r\nLama pengerjaan 3 minggu setelah acc design\r\n', '2018-10-23', '', '4000.00', '2018-10-23 03:45:04', 1, 0, 0),
(192, 8, '23102018104809FLA1.jpg', 'Gantungan Kunci Flanel', 'Harga sudah termasuk pack plastik\r\n</br>\r\nBentuk dapat menyesuaikan keinginan\r\n</br>\r\nLama pengerjaan 4 minggu setelah acc design\r\n', '2018-10-23', '', '5500.00', '2018-10-23 03:48:09', 1, 0, 0),
(193, 9, '23102018120623SLOKI.jpg', 'Gelas Sloky Lengkung', 'Ukuran diameter 6 cm tinggi 11 cm\r\n\r\nHarga sudah termasuk sablon 1 warna,frozz warna,\r\n</br>Lama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '4500.00', '2018-10-23 05:06:23', 1, 0, 0),
(194, 9, '23102018120832ge1.jpg', 'Gelas Wine', 'Ukuran diameter 6,5 cm  tinggi 16 cm\r\n\r\nHarga sudah termasuk sablon 1 warna, belum packing, </br>Lama pengerjaan 2 mingu setelah acc design\r\n', '2018-10-23', '', '10000.00', '2018-10-23 05:08:32', 1, 0, 0),
(195, 10, '23102018121024GER1.jpg', 'Gerabah Pembatas Buku Rumah', 'Harga sudah termasuk packing plastik\r\n</br>\r\nMinimal order 300 pcs\r\n</br>\r\nLama pengerjaan 4 minggu setelah acc design\r\n', '2018-10-23', '', '3000.00', '2018-10-23 05:10:24', 1, 0, 0),
(196, 10, '23102018121146tm1.jpg', 'Tempat Pensil Rumah', 'Harga sudah termasuk packing plastik\r\n</br>\r\nMinimal order 300 pcs\r\n</br>\r\nLama pengerjaan 4 minggu setelah acc design\r\n', '2018-10-23', '', '3000.00', '2018-10-23 05:11:46', 1, 0, 0),
(197, 11, '23102018121420gu1.jpg', 'Guling', ' Harga sudah termasuk bordir, belum packing\r\n</br>\r\nPacking tas kertas   Rp 3000,-\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '33000.00', '2018-10-23 05:14:20', 1, 0, 0),
(198, 13, '23102018121724ha1.jpg', 'Handuk Kupu', ' Handuk berukuran 50x100,warna handuk campur\r\n</br>\r\nHarga sudah termasuk bordir, hias bentuk kupu dan packing mika\r\n</br>\r\nLama pengerjaan 3 minggu\r\n', '2018-10-23', '', '38000.00', '2018-10-23 05:17:24', 1, 0, 0),
(199, 13, '23102018121942ha2.jpg', 'Handuk Tanggung', 'Handuk berukuran 50x100\r\n</br>\r\nHarga sudah termasuk bordir,belum termasuk packing\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '25000.00', '2018-10-23 05:19:42', 1, 0, 0),
(200, 14, '23102018122141hanta1.jpg', 'Hantaran Makanan Mika', ' Harga tergantung dari besar kecilnya, bahan yang digunakan\r\n</br>\r\nJasa hias mulai dari Rp 35.000,-', '2018-10-23', '', '0.00', '2018-10-23 05:21:41', 1, 0, 0),
(201, 14, '23102018122255hant2.jpg', 'Hantaran Makanan Dus', ' Harga tergantung dari besar kecilnya, bahan yang digunakan\r\n</br>\r\nJasa hias mulai dari Rp 35.000,-\r\n', '2018-10-23', '', '0.00', '2018-10-23 05:22:55', 1, 0, 0),
(202, 15, '23102018122526jam.jpg', 'Jam Dinding On Time', 'Harga sudah termasuk sablon 3 warna\r\n<br>\r\nDiameter 28 cm\r\n<br>\r\nWarna bingkai campur\r\n<br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '27000.00', '2018-10-23 05:25:26', 1, 0, 0),
(203, 15, '23102018122643jam3.jpg', 'Jam Dinding Motif Kayu', ' Harga sudah termasuk sablon 3 warna\r\n</br>\r\nDiameter 30 cm\r\n</br>\r\nWarna bingkai campur\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-23', '', '78500.00', '2018-10-23 05:26:43', 1, 0, 0),
(204, 16, '23102018122738kaos1.jpg', 'Kaos Kerah Bordir', 'Harga sudah termasuk bordir dada kiri\r\n</br>\r\nDapat menyesuaikan design\r\n</br>\r\nUkuran S,M,L,XXL,XXXL\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '80000.00', '2018-10-23 05:27:38', 1, 0, 0),
(205, 16, '23102018122847ke1.jpg', 'Kemeja Promosi', 'Harga sudah termasuk bordir (menyesuaikan)\r\n</br>\r\nUkuran dapat menyesuaikan S,M,L,XXL dll\r\n</br>\r\nLama pengerjaan tergantung dari jumlah pesanan', '2018-10-23', '', '125000.00', '2018-10-23 05:28:47', 1, 0, 0),
(206, 17, '23102018123018kayu1.jpg', 'Spatula Kayu', 'Harga belum termasuk packing\r\n</br>\r\nMinimal order 500 pcs\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n</br>\r\nPack tile   600\r\n', '2018-10-23', '', '2200.00', '2018-10-23 05:30:18', 1, 0, 0),
(207, 17, '23102018123131ka2.jpg', 'Centong Batok', 'Harga belum termasuk packing\r\n</br>\r\nMinimal order 500 pcs\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n</br>\r\nPack tile   600\r\n', '2018-10-23', '', '2100.00', '2018-10-23 05:31:31', 1, 0, 0),
(208, 18, '23102018124146ki1.jpg', 'Kipas Jepang', ' Harga sudah termasuk sablon pack tile   700\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-23', '', '3500.00', '2018-10-23 05:41:46', 1, 0, 0),
(209, 18, '23102018124301cen1.jpg', 'Kipas Cendana', ' Harga sudah termasuk sablon 1 warna\r\n</br>\r\nPack tile   700\r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design\r\n', '2018-10-23', '', '4500.00', '2018-10-23 05:43:01', 1, 0, 0),
(210, 19, '23102018124449speaker.jpg', 'Speaker Bluetooth', ' Harga sudah termasuk pad print 1 warna  \r\n</br>\r\nLama pengerjaan 2 minggu setelah acc design', '2018-10-23', '', '130000.00', '2018-10-23 05:44:49', 1, 0, 0),
(211, 19, '23102018124913tana.jpg', 'Tanaman Hias', ' Harga sudah termasuk packing mika pita\r\n</br>\r\nLama pengerjaan 3 bulan\r\n', '2018-10-23', '', '15000.00', '2018-10-23 05:49:13', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_produk_detail`
--

CREATE TABLE `data_produk_detail` (
  `produk_detail_id` smallint(6) NOT NULL,
  `produk_id` smallint(6) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produk_detail`
--

INSERT INTO `data_produk_detail` (`produk_detail_id`, `produk_id`, `foto`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(2, 16, '04102018170546Sidu_500_1447210066688.jpg', '2018-10-04 15:06:44', 1, 1, 0),
(3, 16, '04102018170651Sidu_32_1447210415310.jpg', '2018-10-09 08:08:09', 1, 1, 0),
(4, 16, '04102018170658Tipe_X_1447210347245.jpg', '2018-10-09 08:08:12', 1, 1, 0),
(5, 16, '04102018170706Sidu_500_1447210066688.jpg', '2018-10-09 08:08:15', 1, 1, 0),
(6, 16, '0910201810083204122015052045Acrylic_Gantungan.jpg', '2018-10-09 03:08:32', 1, 0, 0),
(7, 16, '0910201810083804122015052233Baby_Born.jpg', '2018-10-09 03:08:38', 1, 0, 0),
(8, 16, '0910201810084404122015052406Acrylic_Gantungan.jpg', '2018-10-09 03:08:44', 1, 0, 0),
(9, 16, '0910201810091004122015052447Bantal_30x30_2.jpg', '2018-10-09 03:09:10', 1, 0, 0),
(10, 16, '0910201810091704122015052406Acrylic_Gantungan.jpg', '2018-10-09 03:09:17', 1, 0, 0),
(11, 16, '0910201810092504122015052538Handuk_50x100.jpg', '2018-10-09 03:09:25', 1, 0, 0),
(12, 24, '22102018172911tali2.jpg', '2018-10-21 22:29:11', 1, 0, 0),
(13, 24, '22102018172918tali3.jpg', '2018-10-21 22:29:18', 1, 0, 0),
(14, 24, '22102018172924tali4.jpg', '2018-10-21 22:29:24', 1, 0, 0),
(15, 17, '22102018173330ballpoint_cabai.jpg', '2018-10-21 22:33:30', 1, 0, 0),
(16, 28, '22102018173919CLAY1.jpg', '2018-10-21 22:39:19', 1, 0, 0),
(17, 28, '22102018173926CLAY2.jpg', '2018-10-21 22:39:26', 1, 0, 0),
(18, 28, '22102018173932CLAY3.jpg', '2018-10-21 22:39:32', 1, 0, 0),
(19, 28, '22102018173942CLAY4.jpg', '2018-10-21 22:39:42', 1, 0, 0),
(20, 177, '22102018174334asbak.jpg', '2018-10-21 22:43:34', 1, 0, 0),
(21, 178, '22102018174434ballpoint_cabai.jpg', '2018-10-21 22:44:34', 1, 0, 0),
(22, 179, '22102018174518tali1.jpg', '2018-10-21 22:45:18', 1, 0, 0),
(23, 179, '22102018174525tali2.jpg', '2018-10-21 22:45:25', 1, 0, 0),
(24, 179, '22102018174531tali3.jpg', '2018-10-21 22:45:31', 1, 0, 0),
(25, 179, '22102018174539tali4.jpg', '2018-10-21 22:45:39', 1, 0, 0),
(26, 180, '22102018174617CLAY1.jpg', '2018-10-21 22:46:17', 1, 0, 0),
(27, 180, '22102018174645CLAY2.jpg', '2018-10-21 22:46:45', 1, 0, 0),
(28, 180, '22102018174705CLAY3.jpg', '2018-10-21 22:47:05', 1, 0, 0),
(29, 180, '22102018174733CLAY4.jpg', '2018-10-21 22:47:33', 1, 0, 0),
(30, 181, '22102018174952PERSEGI1.jpg', '2018-10-21 22:49:52', 1, 0, 0),
(31, 181, '22102018175009PERSEGI2.jpg', '2018-10-21 22:50:09', 1, 0, 0),
(32, 182, '22102018175704LOVE1.jpg', '2018-10-21 22:57:04', 1, 0, 0),
(33, 184, '23102018103055mika1.jpg', '2018-10-23 03:30:55', 1, 0, 0),
(34, 184, '23102018103101mika2.jpg', '2018-10-23 03:31:01', 1, 0, 0),
(35, 184, '23102018103107mika3.jpg', '2018-10-23 03:31:07', 1, 0, 0),
(36, 185, '23102018103337dompet1.jpg', '2018-10-23 03:33:37', 1, 0, 0),
(37, 185, '23102018103343dompet2.jpg', '2018-10-23 03:33:43', 1, 0, 0),
(38, 186, '23102018103502dompet3.jpg', '2018-10-23 03:35:02', 1, 0, 0),
(39, 187, '23102018103633drawer1.jpg', '2018-10-23 03:36:33', 1, 0, 0),
(40, 188, '23102018103855drawe2.jpg', '2018-10-23 03:38:55', 1, 0, 0),
(41, 188, '23102018103900drawe3.jpg', '2018-10-23 03:39:00', 1, 0, 0),
(42, 189, '23102018104141laser1.jpg', '2018-10-23 03:41:41', 1, 0, 0),
(43, 189, '23102018104147laser2.jpg', '2018-10-23 03:41:47', 1, 0, 0),
(44, 189, '23102018104153laser3.jpg', '2018-10-23 03:41:53', 1, 0, 0),
(45, 190, '23102018104325fd1.jpg', '2018-10-23 03:43:25', 1, 0, 0),
(46, 190, '23102018104331fd2.jpg', '2018-10-23 03:43:31', 1, 0, 0),
(47, 190, '23102018104336fd3.jpg', '2018-10-23 03:43:36', 1, 0, 0),
(48, 190, '23102018104341fd4.jpg', '2018-10-23 03:43:41', 1, 0, 0),
(49, 191, '23102018104522ACR1.jpg', '2018-10-23 03:45:22', 1, 0, 0),
(50, 191, '23102018104534ACR2.jpg', '2018-10-23 03:45:34', 1, 0, 0),
(51, 191, '23102018104543ACR4.jpg', '2018-10-23 03:45:43', 1, 0, 0),
(52, 193, '23102018120851SLOKI.jpg', '2018-10-23 05:08:51', 1, 0, 0),
(53, 194, '23102018120907ge1.jpg', '2018-10-23 05:09:07', 1, 0, 0),
(54, 194, '23102018120913ge2.jpg', '2018-10-23 05:09:13', 1, 0, 0),
(55, 194, '23102018120918ge3.jpg', '2018-10-23 05:09:18', 1, 0, 0),
(56, 195, '23102018121035GER1.jpg', '2018-10-23 05:10:35', 1, 0, 0),
(57, 197, '23102018121434gu1.jpg', '2018-10-23 05:14:34', 1, 0, 0),
(58, 197, '23102018121439gu2.jpg', '2018-10-23 05:14:39', 1, 0, 0),
(59, 198, '23102018121736ha1.jpg', '2018-10-23 05:17:36', 1, 0, 0),
(60, 199, '23102018122006ha2.jpg', '2018-10-23 05:20:06', 1, 0, 0),
(61, 199, '23102018122013ha3.jpg', '2018-10-23 05:20:13', 1, 0, 0),
(62, 199, '23102018122019ha4.jpg', '2018-10-23 05:20:19', 1, 0, 0),
(63, 199, '23102018122025ha5.jpg', '2018-10-23 05:20:25', 1, 0, 0),
(64, 199, '23102018122033ha6.jpg', '2018-10-23 05:20:33', 1, 0, 0),
(65, 201, '23102018122308hant2.jpg', '2018-10-23 05:23:08', 1, 0, 0),
(66, 201, '23102018122315hanta3.jpg', '2018-10-23 05:23:15', 1, 0, 0),
(67, 201, '23102018122359hanta4.jpg', '2018-10-23 05:23:59', 1, 0, 0),
(68, 201, '23102018122404hanta5.jpg', '2018-10-23 05:24:04', 1, 0, 0),
(69, 201, '23102018122409hanta6.jpg', '2018-10-23 05:24:09', 1, 0, 0),
(70, 201, '23102018122415hanta6.jpg', '2018-10-23 05:24:15', 1, 0, 0),
(71, 201, '23102018122420hanta7.jpg', '2018-10-23 05:24:20', 1, 0, 0),
(72, 202, '23102018122538jam.jpg', '2018-10-23 05:25:38', 1, 0, 0),
(73, 202, '23102018122544jam2.jpg', '2018-10-23 05:25:44', 1, 0, 0),
(74, 205, '23102018122858ke1.jpg', '2018-10-23 05:28:58', 1, 0, 0),
(75, 205, '23102018122906ke2.jpg', '2018-10-23 05:29:06', 1, 0, 0),
(76, 205, '23102018122911ke3.jpg', '2018-10-23 05:29:11', 1, 0, 0),
(77, 205, '23102018122917ke4.jpg', '2018-10-23 05:29:17', 1, 0, 0),
(78, 206, '23102018123031kayu1.jpg', '2018-10-23 05:30:31', 1, 0, 0),
(79, 207, '23102018123141ka2.jpg', '2018-10-23 05:31:41', 1, 0, 0),
(80, 207, '23102018123146ka3.jpg', '2018-10-23 05:31:46', 1, 0, 0),
(81, 208, '23102018124200ki1.jpg', '2018-10-23 05:42:00', 1, 0, 0),
(82, 208, '23102018124205ki2.jpg', '2018-10-23 05:42:05', 1, 0, 0),
(83, 209, '23102018124318cen1.jpg', '2018-10-23 05:43:18', 1, 0, 0),
(84, 209, '23102018124330cen2.jpg', '2018-10-23 05:43:30', 1, 0, 0),
(85, 210, '23102018124747speaker.jpg', '2018-10-23 05:47:47', 1, 0, 0),
(86, 211, '23102018124924tana.jpg', '2018-10-23 05:49:24', 1, 0, 0),
(87, 211, '23102018124929tana2.jpg', '2018-10-23 05:49:29', 1, 0, 0),
(88, 211, '23102018124935tana3.jpg', '2018-10-23 05:49:35', 1, 0, 0),
(89, 211, '23102018124939tana4.jpg', '2018-10-23 05:49:39', 1, 0, 0),
(90, 211, '23102018124945tana5.jpg', '2018-10-23 05:49:45', 1, 0, 0),
(91, 177, '2510201818320404122015101156Tumbler_New.jpg', '2018-10-24 23:32:04', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_role`
--

CREATE TABLE `data_role` (
  `role_id` smallint(6) NOT NULL,
  `role_nama` varchar(30) NOT NULL,
  `role_keterangan` varchar(50) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_role`
--

INSERT INTO `data_role` (`role_id`, `role_nama`, `role_keterangan`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'Administrator', '', '2015-10-01 17:00:00', 1, 0, 1),
(4, 'Manager', '', '2015-12-04 03:06:22', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `user_id` smallint(6) NOT NULL,
  `role_id` smallint(6) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `last_logout` timestamp NULL DEFAULT NULL,
  `is_aktif` tinyint(1) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`user_id`, `role_id`, `user_name`, `user_password`, `last_login`, `last_logout`, `is_aktif`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-24 23:19:50', '2018-01-15 21:24:12', 1, '2018-10-24 23:19:50', 1, 0, 1),
(15, 4, 'Manager', '1d0258c2440a8d19e716292b231e3190', NULL, NULL, 0, '2015-12-04 03:39:11', 1, 0, 0),
(16, 1, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', NULL, NULL, 0, '2016-11-29 01:13:41', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` smallint(6) NOT NULL,
  `faq_ask` text NOT NULL,
  `faq_answer` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `faq_ask`, `faq_answer`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(2, 'Apakah ada minimal order?', 'Pembelian minimal 100pcs. Dibawah 100pcs sd 50 pcs harga  1000/pcs\r\nDibawah 50pcs sd 36pcs harga  2000/pcs.\r\nNamun, tidak semua barang bisa order di bawah minimal.', '2018-10-24 22:32:48', 1, 0, 0),
(3, 'Bagaimana cara kami memesan produk Anda?', 'Website Agnes Parcel n Souvenir hanya merupakan catalog produk souvenir kami. Bagi pelanggan yang ingin memesan dan membeli produk kami silahkan menghubungi atau mengunjungi toko kami untuk proses transaksi lebih lanjut. \r\n ', '2018-10-21 19:12:22', 1, 0, 0),
(4, 'Dimanakah letak toko Anda ?', 'Anda dapat mengunjungi toko kami di Jl. Daha Ruko Royal Park No. 15 Magelang.', '2018-10-21 19:13:09', 1, 0, 0),
(5, 'Bisakah kami menggunakan design sendiri?', 'Design bisa bawa sendiri. \r\nKami juga menyediakan free design untuk Anda.', '2018-10-24 22:32:22', 1, 0, 0),
(6, ' Bagaimana ketentuan pembayaran pesanan di Agnes Parcel n Souvenir?', ' Pembelian secara online : Full Payment di depan.\r\nPembelian ke toko DP min 50% \r\nUntuk info lebih lanjut dapat menghubungi kami melalui WA: <a href=\"https://api.whatsapp.com/send?\r\nphone=6281903872662&text=Halo www.agnessouvenir.com\">081903872662,</a><a href=\"https://api.whatsapp.com/send?phone=6282242256874&text=Halo www.agnessouvenir.com\">082242256874</a> ', '2018-10-25 11:09:17', 1, 0, 0),
(7, ' Apakah bisa mengirimkan pesanan ke luar kota/luar pulau?', ' Bisa. Kami melayani pengiriman pesanan ke seluruh wilayah Indonesia.', '2018-10-24 22:34:07', 1, 0, 0),
(8, 'Bagaimana dengan ongkos kirim pesanan? ', ' Ongkos kirim ditanggung oleh customer. Customer dapat memilih jasa ekspedisi yang diinginkan', '2018-10-24 22:34:23', 1, 0, 0),
(9, ' Bagaimana pengemasan barang pecah belah?', ' Untuk barang pecah belah, kami mengemas secara double pack sehingga dipastikan aman sampai tujuan.\r\n', '2018-10-24 22:34:35', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `howto`
--

CREATE TABLE `howto` (
  `howto_id` smallint(6) NOT NULL,
  `howto_sort` int(11) NOT NULL,
  `howto_step` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `howto`
--

INSERT INTO `howto` (`howto_id`, `howto_sort`, `howto_step`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 1, 'Pilih barang yang Anda inginkan di website kami http://www.agnessouvenir.com', '2018-10-25 16:51:35', 1, 0, 0),
(7, 2, ' Hubungi CS kami melalui telepon/WA : <a href=\"https://api.whatsapp.com/send? phone=6281903872662&text=Halo www.agnessouvenir.com\">081903872662,</a><a href=\"https://api.whatsapp.com/send?phone=6282242256874&text=Halo www.agnessouvenir.com\">082242256874</a> 4 untuk informasi produk dan ongkos kirim', '2018-10-25 16:51:37', 1, 0, 0),
(8, 3, ' Setelah terjadi kesepakatan, lakukan pembayaran melalui transfer bank atau datang ke toko. Account bank akan diinfokan oleh CS kami.', '2018-10-25 16:51:40', 1, 0, 0),
(9, 4, ' Konfirmasikan pembayaran Anda kepada CS kami.', '2018-10-25 16:51:43', 1, 0, 0),
(10, 5, ' Setelah pembayaran kami terima, kami akan memproses design.', '2018-10-25 16:51:46', 1, 0, 0),
(11, 6, ' Setelah design diACC, kami akan mulai proses pengerjaan pesanan Anda.', '2018-10-25 16:51:49', 1, 0, 0),
(12, 7, ' Pengerjaan kurang lebih 2 minggu hari kerja setelah ACC design.', '2018-10-25 16:51:52', 1, 0, 0),
(13, 8, ' Barang jadi bisa diambil di toko atau akan kami kirimkan ke alamat Anda sesuai jasa ekspedisi yang telah Anda pilih.', '2018-10-25 16:53:22', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` smallint(6) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_ket` varchar(255) NOT NULL,
  `kategori_tgl_input` date NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_ket`, `kategori_tgl_input`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'Asbak', '', '2015-12-03', '2018-10-22 10:07:31', 1, 0, 0),
(2, 'Ballpoint', '', '2015-12-03', '2018-10-22 10:07:41', 0, 0, 0),
(3, 'Bantal', '', '2015-12-03', '2018-10-22 10:07:45', 0, 0, 0),
(4, 'Clay', '', '2015-12-03', '2018-10-22 10:07:54', 0, 0, 0),
(5, 'Dompet', '', '2015-12-03', '2018-10-22 10:07:59', 0, 0, 0),
(6, 'Drawer', '', '2015-12-03', '2018-10-22 10:08:03', 0, 0, 0),
(7, 'Flashdisk', '', '2015-12-03', '2018-10-22 10:08:13', 0, 0, 0),
(8, 'Gantungan Kunci', '', '2015-12-03', '2018-10-22 10:08:18', 0, 0, 0),
(9, 'Gelas', '', '2015-12-03', '2018-10-22 10:08:30', 0, 0, 0),
(10, 'Gerabah', '', '2015-12-03', '2018-10-22 10:08:34', 0, 0, 0),
(11, 'Guling', '', '2015-12-03', '2018-10-22 10:08:40', 0, 0, 0),
(12, 'Gunting Kuku', '', '2015-12-03', '2018-10-22 10:08:50', 0, 0, 0),
(13, 'Handuk', '', '2015-12-03', '2018-10-22 10:08:54', 0, 0, 0),
(14, 'Hantaran', '', '2015-12-03', '2018-10-22 10:09:06', 0, 0, 0),
(15, 'Jam', '', '2015-12-03', '2018-10-22 10:09:11', 0, 0, 0),
(16, 'Kaos Promosi', '', '2015-12-03', '2018-10-22 10:09:16', 0, 0, 0),
(17, 'Kayu', '', '2015-12-03', '2018-10-22 10:09:24', 0, 0, 0),
(18, 'Kipas', '', '2015-12-03', '2018-10-22 10:09:29', 0, 0, 0),
(19, 'Lain-Lain', '', '2015-12-03', '2018-10-22 10:09:34', 0, 0, 0),
(20, 'Lilin', '', '2015-12-03', '2018-10-22 10:09:41', 0, 0, 0),
(21, 'Mahar Uang', '', '2015-12-16', '2018-10-22 10:09:47', 0, 0, 0),
(22, 'Mangkok Piring', '', '0000-00-00', '2018-10-21 22:14:23', 1, 0, 0),
(23, 'Memo', ' ', '0000-00-00', '2018-10-22 10:14:51', 1, 0, 0),
(24, 'Mug', ' ', '0000-00-00', '2018-10-22 10:10:26', 0, 0, 0),
(25, 'Name Tag', ' ', '0000-00-00', '2018-10-22 10:10:39', 0, 0, 0),
(26, 'Organiser', ' ', '0000-00-00', '2018-10-22 10:10:45', 0, 0, 0),
(27, 'Parcel', ' ', '0000-00-00', '2018-10-22 10:10:53', 0, 0, 0),
(28, 'Payung', ' ', '0000-00-00', '2018-10-22 10:10:59', 0, 0, 0),
(29, 'Pembuka Botol', ' ', '0000-00-00', '2018-10-22 10:11:09', 0, 0, 0),
(30, 'Penjepit Memo', ' ', '0000-00-00', '2018-10-22 10:11:20', 0, 0, 0),
(31, 'Pigura', ' ', '0000-00-00', '2018-10-22 10:11:27', 0, 0, 0),
(32, 'Pin', ' ', '0000-00-00', '2018-10-22 10:11:32', 0, 0, 0),
(33, 'Pitcher', ' ', '0000-00-00', '2018-10-22 10:11:40', 0, 0, 0),
(34, 'Rotan', ' ', '0000-00-00', '2018-10-22 10:11:45', 0, 0, 0),
(35, 'Selimut', ' ', '0000-00-00', '2018-10-22 10:11:49', 0, 0, 0),
(36, 'Sendok Garpu', ' ', '0000-00-00', '2018-10-22 10:11:59', 0, 0, 0),
(37, 'Senter', ' ', '0000-00-00', '2018-10-22 10:12:04', 0, 0, 0),
(38, 'Stabilo', ' ', '0000-00-00', '2018-10-22 10:12:10', 0, 0, 0),
(39, 'Talenan', ' ', '0000-00-00', '2018-10-22 10:12:20', 0, 0, 0),
(40, 'Tas', ' ', '0000-00-00', '2018-10-22 10:12:25', 0, 0, 0),
(41, 'Tempat Kartu Nama', ' ', '0000-00-00', '2018-10-22 10:12:32', 0, 0, 0),
(42, 'Tempat Lada Garam', ' ', '0000-00-00', '2018-10-22 10:12:43', 0, 0, 0),
(43, 'Tempat Makan', ' ', '0000-00-00', '2018-10-22 10:12:49', 0, 0, 0),
(44, 'Tempat Perhiasan', ' ', '0000-00-00', '2018-10-22 10:12:59', 0, 0, 0),
(45, 'Tempat Pensil', ' ', '0000-00-00', '2018-10-22 10:13:06', 0, 0, 0),
(46, 'Tempat Tissue', ' ', '0000-00-00', '2018-10-22 10:13:18', 0, 0, 0),
(47, 'Tempelan Kulkas', ' ', '0000-00-00', '2018-10-22 10:13:25', 0, 0, 0),
(48, 'Tumbler', ' ', '0000-00-00', '2018-10-22 10:13:33', 0, 0, 0),
(49, 'Tin', ' ', '0000-00-00', '2018-10-22 10:13:37', 0, 0, 0),
(50, 'Tong Sampah', ' ', '0000-00-00', '2018-10-22 10:15:03', 0, 0, 0),
(51, 'Topi', ' ', '0000-00-00', '2018-10-22 10:13:54', 0, 0, 0),
(52, 'Toples', ' ', '0000-00-00', '2018-10-22 10:13:59', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` smallint(6) NOT NULL,
  `kontak_nama` varchar(255) NOT NULL,
  `kontak_telepon` varchar(30) NOT NULL,
  `kontak_email` varchar(255) NOT NULL,
  `kontak_pesan` varchar(255) NOT NULL,
  `kontak_tgl_input` date NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `kontak_nama`, `kontak_telepon`, `kontak_email`, `kontak_pesan`, `kontak_tgl_input`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'dionysius', '098987589', 'damaragatedionysius@gmail.com', 'test', '2015-12-04', '2015-12-04 02:00:09', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` bigint(20) NOT NULL,
  `log_action` varchar(20) NOT NULL,
  `log_menu` varchar(50) NOT NULL,
  `log_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_keterangan` text NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `log_action`, `log_menu`, `log_tanggal`, `log_keterangan`, `last_update`, `last_user_id`, `is_delete`) VALUES
(2104, 'Lihat', 'Data Role', '2015-12-03 20:39:18', 'User admin Lihat data menu Data Role', '2015-12-03 20:39:18', 1, 0),
(2105, 'Lihat', 'Data Role', '2015-12-03 20:39:48', 'User admin Lihat data menu Data Role', '2015-12-03 20:39:48', 1, 0),
(2106, 'Lihat', 'Data Role', '2015-12-03 20:39:57', 'User admin Lihat data menu Data Role', '2015-12-03 20:39:57', 1, 0),
(2107, 'Lihat', 'Data User', '2015-12-03 20:40:03', 'User admin Lihat data menu Data User', '2015-12-03 20:40:03', 1, 0),
(2108, 'Lihat', 'Data Pesan', '2015-12-03 20:40:31', 'User admin Lihat data menu Data Pesan', '2015-12-03 20:40:31', 1, 0),
(2109, 'Lihat', 'Data User', '2015-12-03 20:40:34', 'User admin Lihat data menu Data User', '2015-12-03 20:40:34', 1, 0),
(2110, 'Lihat', 'Data Produk', '2015-12-03 20:40:44', 'User admin Lihat data menu Data Produk', '2015-12-03 20:40:44', 1, 0),
(2111, 'Lihat', 'Data User', '2015-12-03 20:40:48', 'User admin Lihat data menu Data User', '2015-12-03 20:40:48', 1, 0),
(2112, 'Lihat', 'Data Produk', '2015-12-03 20:40:52', 'User admin Lihat data menu Data Produk', '2015-12-03 20:40:52', 1, 0),
(2113, 'Lihat', 'Data Kategori', '2015-12-03 20:41:13', 'User admin Lihat data menu Data Kategori', '2015-12-03 20:41:13', 1, 0),
(2114, 'Lihat', 'Data Pesan', '2015-12-03 20:41:46', 'User admin Lihat data menu Data Pesan', '2015-12-03 20:41:46', 1, 0),
(2115, 'Lihat', 'Data Kategori', '2015-12-03 20:42:08', 'User admin Lihat data menu Data Kategori', '2015-12-03 20:42:08', 1, 0),
(2116, 'Lihat', 'Data Produk', '2015-12-03 20:42:15', 'User admin Lihat data menu Data Produk', '2015-12-03 20:42:15', 1, 0),
(2117, 'Lihat', 'Data Produk', '2015-12-03 20:42:44', 'User admin Lihat data menu Data Produk', '2015-12-03 20:42:44', 1, 0),
(2118, 'Lihat', 'Data Link Social', '2015-12-03 20:42:53', 'User admin Lihat data menu Data Link Social', '2015-12-03 20:42:53', 1, 0),
(2119, 'Lihat', 'Data Link Social', '2015-12-03 20:45:32', 'User admin Lihat data menu Data Link Social', '2015-12-03 20:45:32', 1, 0),
(2120, 'Lihat', 'Data Link Social', '2015-12-03 20:47:53', 'User admin Lihat data menu Data Link Social', '2015-12-03 20:47:53', 1, 0),
(2121, 'Lihat', 'Data Role', '2015-12-03 20:49:36', 'User admin Lihat data menu Data Role', '2015-12-03 20:49:36', 1, 0),
(2122, 'Lihat', 'Data Produk', '2015-12-03 20:49:51', 'User admin Lihat data menu Data Produk', '2015-12-03 20:49:51', 1, 0),
(2123, 'Lihat', 'Data Produk', '2015-12-03 20:50:08', 'User admin Lihat data menu Data Produk', '2015-12-03 20:50:08', 1, 0),
(2124, 'Lihat', 'Data Role', '2015-12-03 20:50:20', 'User admin Lihat data menu Data Role', '2015-12-03 20:50:20', 1, 0),
(2125, 'Lihat', 'Data Role', '2015-12-03 20:51:06', 'User admin Lihat data menu Data Role', '2015-12-03 20:51:06', 1, 0),
(2126, 'Lihat', 'Data Role', '2015-12-03 20:51:36', 'User admin Lihat data menu Data Role', '2015-12-03 20:51:36', 1, 0),
(2127, 'Lihat', 'Data Role', '2015-12-03 20:51:57', 'User admin Lihat data menu Data Role', '2015-12-03 20:51:57', 1, 0),
(2128, 'Lihat', 'Data Role', '2015-12-03 20:52:52', 'User admin Lihat data menu Data Role', '2015-12-03 20:52:52', 1, 0),
(2129, 'Lihat', 'Data Link Social', '2015-12-03 21:00:39', 'User admin Lihat data menu Data Link Social', '2015-12-03 21:00:39', 1, 0),
(2130, 'Lihat', 'Data User', '2015-12-03 21:00:47', 'User admin Lihat data menu Data User', '2015-12-03 21:00:47', 1, 0),
(2131, 'Lihat', 'Data Role', '2015-12-03 21:01:04', 'User admin Lihat data menu Data Role', '2015-12-03 21:01:04', 1, 0),
(2132, 'Lihat', 'Data Kategori', '2015-12-03 21:02:50', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:02:50', 1, 0),
(2133, 'Lihat', 'Data Produk', '2015-12-03 21:03:04', 'User admin Lihat data menu Data Produk', '2015-12-03 21:03:04', 1, 0),
(2134, 'Lihat', 'Data Link Social', '2015-12-03 21:04:12', 'User admin Lihat data menu Data Link Social', '2015-12-03 21:04:12', 1, 0),
(2135, 'Lihat', 'Data Pesan', '2015-12-03 21:06:41', 'User admin Lihat data menu Data Pesan', '2015-12-03 21:06:41', 1, 0),
(2136, 'Lihat', 'Data Produk', '2015-12-03 21:12:13', 'User admin Lihat data menu Data Produk', '2015-12-03 21:12:13', 1, 0),
(2137, 'Lihat', 'Data Produk', '2015-12-03 21:13:33', 'User admin Lihat data menu Data Produk', '2015-12-03 21:13:33', 1, 0),
(2138, 'Lihat', 'Data Produk', '2015-12-03 21:15:27', 'User admin Lihat data menu Data Produk', '2015-12-03 21:15:27', 1, 0),
(2139, 'Lihat', 'Data Produk', '2015-12-03 21:24:10', 'User admin Lihat data menu Data Produk', '2015-12-03 21:24:10', 1, 0),
(2140, 'Tambah', 'Data Produk', '2015-12-03 21:24:17', 'User admin Tambah data menu Data Produk', '2015-12-03 21:24:17', 1, 0),
(2141, 'Tambah', 'Data Produk', '2015-12-03 21:24:27', 'User admin Tambah data menu Data Produk', '2015-12-03 21:24:27', 1, 0),
(2142, 'Lihat', 'Data Produk', '2015-12-03 21:24:28', 'User admin Lihat data menu Data Produk', '2015-12-03 21:24:28', 1, 0),
(2143, 'Lihat', 'Data Produk', '2015-12-03 21:27:00', 'User admin Lihat data menu Data Produk', '2015-12-03 21:27:00', 1, 0),
(2144, 'Lihat', 'Data Produk', '2015-12-03 21:33:58', 'User admin Lihat data menu Data Produk', '2015-12-03 21:33:58', 1, 0),
(2145, 'Lihat', 'Data Produk', '2015-12-03 21:34:19', 'User admin Lihat data menu Data Produk', '2015-12-03 21:34:19', 1, 0),
(2146, 'Lihat', 'Data Produk', '2015-12-03 21:36:01', 'User admin Lihat data menu Data Produk', '2015-12-03 21:36:01', 1, 0),
(2147, 'Lihat', 'Data Produk', '2015-12-03 21:37:06', 'User admin Lihat data menu Data Produk', '2015-12-03 21:37:06', 1, 0),
(2148, 'Lihat', 'Data Produk', '2015-12-03 21:37:53', 'User admin Lihat data menu Data Produk', '2015-12-03 21:37:53', 1, 0),
(2149, 'Lihat', 'Data Produk', '2015-12-03 21:38:11', 'User admin Lihat data menu Data Produk', '2015-12-03 21:38:11', 1, 0),
(2150, 'Lihat', 'Data Produk', '2015-12-03 21:40:39', 'User admin Lihat data menu Data Produk', '2015-12-03 21:40:39', 1, 0),
(2151, 'Lihat', 'Data Produk', '2015-12-03 21:40:53', 'User admin Lihat data menu Data Produk', '2015-12-03 21:40:53', 1, 0),
(2152, 'Lihat', 'Data Produk', '2015-12-03 21:42:10', 'User admin Lihat data menu Data Produk', '2015-12-03 21:42:10', 1, 0),
(2153, 'Lihat', 'Data Pesan', '2015-12-03 21:42:14', 'User admin Lihat data menu Data Pesan', '2015-12-03 21:42:14', 1, 0),
(2154, 'Lihat', 'Data Produk', '2015-12-03 21:42:21', 'User admin Lihat data menu Data Produk', '2015-12-03 21:42:21', 1, 0),
(2155, 'Lihat', 'Data Pesan', '2015-12-03 21:42:52', 'User admin Lihat data menu Data Pesan', '2015-12-03 21:42:52', 1, 0),
(2156, 'Lihat', 'Data User', '2015-12-03 21:43:09', 'User admin Lihat data menu Data User', '2015-12-03 21:43:09', 1, 0),
(2157, 'Lihat', 'Data Kategori', '2015-12-03 21:43:14', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:43:14', 1, 0),
(2158, 'Lihat', 'Data Produk', '2015-12-03 21:44:05', 'User admin Lihat data menu Data Produk', '2015-12-03 21:44:05', 1, 0),
(2159, 'Lihat', 'Data Produk', '2015-12-03 21:44:17', 'User admin Lihat data menu Data Produk', '2015-12-03 21:44:17', 1, 0),
(2160, 'Lihat', 'Data Produk', '2015-12-03 21:45:32', 'User admin Lihat data menu Data Produk', '2015-12-03 21:45:32', 1, 0),
(2161, 'Lihat', 'Data Kategori', '2015-12-03 21:47:38', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:47:38', 1, 0),
(2162, 'Lihat', 'Data Kategori', '2015-12-03 21:49:26', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:49:26', 1, 0),
(2163, 'Lihat', 'Data Kategori', '2015-12-03 21:49:51', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:49:51', 1, 0),
(2164, 'Lihat', 'Data Produk', '2015-12-03 21:50:23', 'User admin Lihat data menu Data Produk', '2015-12-03 21:50:23', 1, 0),
(2165, 'Lihat', 'Data Produk', '2015-12-03 21:50:31', 'User admin Lihat data menu Data Produk', '2015-12-03 21:50:31', 1, 0),
(2166, 'Lihat', 'Data Produk', '2015-12-03 21:50:53', 'User admin Lihat data menu Data Produk', '2015-12-03 21:50:53', 1, 0),
(2167, 'Lihat', 'Data Kategori', '2015-12-03 21:51:03', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:51:03', 1, 0),
(2168, 'Lihat', 'Data Kategori', '2015-12-03 21:53:09', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:53:09', 1, 0),
(2169, 'Lihat', 'Data Role', '2015-12-03 21:53:29', 'User admin Lihat data menu Data Role', '2015-12-03 21:53:29', 1, 0),
(2170, 'Lihat', 'Data User', '2015-12-03 21:53:34', 'User admin Lihat data menu Data User', '2015-12-03 21:53:34', 1, 0),
(2171, 'Lihat', 'Data Role', '2015-12-03 21:54:25', 'User admin Lihat data menu Data Role', '2015-12-03 21:54:25', 1, 0),
(2172, 'Lihat', 'Data Produk', '2015-12-03 21:55:18', 'User admin Lihat data menu Data Produk', '2015-12-03 21:55:18', 1, 0),
(2173, 'Lihat', 'Data User', '2015-12-03 21:55:25', 'User admin Lihat data menu Data User', '2015-12-03 21:55:25', 1, 0),
(2174, 'Lihat', 'Data Kategori', '2015-12-03 21:56:27', 'User admin Lihat data menu Data Kategori', '2015-12-03 21:56:27', 1, 0),
(2175, 'Lihat', 'Data Produk', '2015-12-03 21:57:44', 'User admin Lihat data menu Data Produk', '2015-12-03 21:57:44', 1, 0),
(2176, 'Lihat', 'Data Produk', '2015-12-03 21:57:53', 'User admin Lihat data menu Data Produk', '2015-12-03 21:57:53', 1, 0),
(2177, 'Lihat', 'Data User', '2015-12-03 21:59:28', 'User admin Lihat data menu Data User', '2015-12-03 21:59:28', 1, 0),
(2178, 'Lihat', 'Data Kategori', '2015-12-03 22:01:53', 'User admin Lihat data menu Data Kategori', '2015-12-03 22:01:53', 1, 0),
(2179, 'Lihat', 'Data Produk', '2015-12-03 22:02:00', 'User admin Lihat data menu Data Produk', '2015-12-03 22:02:00', 1, 0),
(2180, 'Lihat', 'Data Link Social', '2015-12-03 22:03:06', 'User admin Lihat data menu Data Link Social', '2015-12-03 22:03:06', 1, 0),
(2181, 'Tambah', 'Data Produk', '2015-12-03 22:03:20', 'User admin Tambah data menu Data Produk', '2015-12-03 22:03:20', 1, 0),
(2182, 'Lihat', 'Data Produk', '2015-12-03 22:03:21', 'User admin Lihat data menu Data Produk', '2015-12-03 22:03:21', 1, 0),
(2183, 'Lihat', 'Data Pesan', '2015-12-03 22:03:30', 'User admin Lihat data menu Data Pesan', '2015-12-03 22:03:30', 1, 0),
(2184, 'Tambah', 'Data Produk', '2015-12-03 22:04:00', 'User admin Tambah data menu Data Produk', '2015-12-03 22:04:00', 1, 0),
(2185, 'Lihat', 'Data Produk', '2015-12-03 22:04:01', 'User admin Lihat data menu Data Produk', '2015-12-03 22:04:01', 1, 0),
(2186, 'Lihat', 'Data Produk', '2015-12-03 22:05:51', 'User admin Lihat data menu Data Produk', '2015-12-03 22:05:51', 1, 0),
(2187, 'Hapus', 'Data Produk', '2015-12-03 22:05:56', 'User admin Hapus data menu Data Produk', '2015-12-03 22:05:56', 1, 0),
(2188, 'Lihat', 'Data Produk', '2015-12-03 22:05:57', 'User admin Lihat data menu Data Produk', '2015-12-03 22:05:57', 1, 0),
(2189, 'Hapus', 'Data Produk', '2015-12-03 22:06:01', 'User admin Hapus data menu Data Produk', '2015-12-03 22:06:01', 1, 0),
(2190, 'Lihat', 'Data Produk', '2015-12-03 22:06:02', 'User admin Lihat data menu Data Produk', '2015-12-03 22:06:02', 1, 0),
(2191, 'Hapus', 'Data Produk', '2015-12-03 22:06:06', 'User admin Hapus data menu Data Produk', '2015-12-03 22:06:06', 1, 0),
(2192, 'Lihat', 'Data Produk', '2015-12-03 22:06:08', 'User admin Lihat data menu Data Produk', '2015-12-03 22:06:08', 1, 0),
(2193, 'Tambah', 'Data Produk', '2015-12-03 22:06:37', 'User admin Tambah data menu Data Produk', '2015-12-03 22:06:37', 1, 0),
(2194, 'Lihat', 'Data Produk', '2015-12-03 22:06:38', 'User admin Lihat data menu Data Produk', '2015-12-03 22:06:38', 1, 0),
(2195, 'Lihat', 'Data Produk', '2015-12-03 22:10:34', 'User admin Lihat data menu Data Produk', '2015-12-03 22:10:34', 1, 0),
(2196, 'Tambah', 'Data Produk', '2015-12-03 22:10:44', 'User admin Tambah data menu Data Produk', '2015-12-03 22:10:44', 1, 0),
(2197, 'Lihat', 'Data Produk', '2015-12-03 22:10:45', 'User admin Lihat data menu Data Produk', '2015-12-03 22:10:45', 1, 0),
(2198, 'Lihat', 'Data Pesan', '2015-12-03 22:11:43', 'User admin Lihat data menu Data Pesan', '2015-12-03 22:11:43', 1, 0),
(2199, 'Lihat', 'Data Produk', '2015-12-03 22:13:58', 'User admin Lihat data menu Data Produk', '2015-12-03 22:13:58', 1, 0),
(2200, 'Tambah', 'Data Produk', '2015-12-03 22:14:08', 'User admin Tambah data menu Data Produk', '2015-12-03 22:14:08', 1, 0),
(2201, 'Lihat', 'Data Produk', '2015-12-03 22:14:09', 'User admin Lihat data menu Data Produk', '2015-12-03 22:14:09', 1, 0),
(2202, 'Lihat', 'Data Pesan', '2015-12-03 22:14:43', 'User admin Lihat data menu Data Pesan', '2015-12-03 22:14:43', 1, 0),
(2203, 'Lihat', 'Data Produk', '2015-12-03 22:14:48', 'User admin Lihat data menu Data Produk', '2015-12-03 22:14:48', 1, 0),
(2204, 'Tambah', 'Data Produk', '2015-12-03 22:14:56', 'User admin Tambah data menu Data Produk', '2015-12-03 22:14:56', 1, 0),
(2205, 'Lihat', 'Data Produk', '2015-12-03 22:14:57', 'User admin Lihat data menu Data Produk', '2015-12-03 22:14:57', 1, 0),
(2206, 'Lihat', 'Data Produk', '2015-12-03 22:16:16', 'User admin Lihat data menu Data Produk', '2015-12-03 22:16:16', 1, 0),
(2207, 'Tambah', 'Data Produk', '2015-12-03 22:16:26', 'User admin Tambah data menu Data Produk', '2015-12-03 22:16:26', 1, 0),
(2208, 'Lihat', 'Data Produk', '2015-12-03 22:16:27', 'User admin Lihat data menu Data Produk', '2015-12-03 22:16:27', 1, 0),
(2209, 'Lihat', 'Data Pesan', '2015-12-03 22:18:22', 'User admin Lihat data menu Data Pesan', '2015-12-03 22:18:22', 1, 0),
(2210, 'Lihat', 'Data Produk', '2015-12-03 22:20:31', 'User admin Lihat data menu Data Produk', '2015-12-03 22:20:31', 1, 0),
(2211, 'Tambah', 'Data Produk', '2015-12-03 22:20:45', 'User admin Tambah data menu Data Produk', '2015-12-03 22:20:45', 1, 0),
(2212, 'Lihat', 'Data Produk', '2015-12-03 22:20:46', 'User admin Lihat data menu Data Produk', '2015-12-03 22:20:46', 1, 0),
(2213, 'Lihat', 'Data Produk', '2015-12-03 22:22:17', 'User admin Lihat data menu Data Produk', '2015-12-03 22:22:17', 1, 0),
(2214, 'Tambah', 'Data Produk', '2015-12-03 22:22:33', 'User admin Tambah data menu Data Produk', '2015-12-03 22:22:33', 1, 0),
(2215, 'Lihat', 'Data Produk', '2015-12-03 22:22:34', 'User admin Lihat data menu Data Produk', '2015-12-03 22:22:34', 1, 0),
(2216, 'Lihat', 'Data Produk', '2015-12-03 22:23:28', 'User admin Lihat data menu Data Produk', '2015-12-03 22:23:28', 1, 0),
(2217, 'Lihat', 'Data Role', '2015-12-03 22:23:31', 'User admin Lihat data menu Data Role', '2015-12-03 22:23:31', 1, 0),
(2218, 'Lihat', 'Data User', '2015-12-03 22:23:39', 'User admin Lihat data menu Data User', '2015-12-03 22:23:39', 1, 0),
(2219, 'Lihat', 'Data Kategori', '2015-12-03 22:23:43', 'User admin Lihat data menu Data Kategori', '2015-12-03 22:23:43', 1, 0),
(2220, 'Tambah', 'Data Produk', '2015-12-03 22:24:06', 'User admin Tambah data menu Data Produk', '2015-12-03 22:24:06', 1, 0),
(2221, 'Lihat', 'Data Produk', '2015-12-03 22:24:08', 'User admin Lihat data menu Data Produk', '2015-12-03 22:24:08', 1, 0),
(2222, 'Tambah', 'Data Produk', '2015-12-03 22:24:47', 'User admin Tambah data menu Data Produk', '2015-12-03 22:24:47', 1, 0),
(2223, 'Lihat', 'Data Produk', '2015-12-03 22:24:48', 'User admin Lihat data menu Data Produk', '2015-12-03 22:24:48', 1, 0),
(2224, 'Lihat', 'Data User', '2015-12-03 22:25:31', 'User admin Lihat data menu Data User', '2015-12-03 22:25:31', 1, 0),
(2225, 'Lihat', 'Data Role', '2015-12-03 22:25:36', 'User admin Lihat data menu Data Role', '2015-12-03 22:25:36', 1, 0),
(2226, 'Tambah', 'Data Produk', '2015-12-03 22:25:38', 'User admin Tambah data menu Data Produk', '2015-12-03 22:25:38', 1, 0),
(2227, 'Lihat', 'Data Produk', '2015-12-03 22:25:39', 'User admin Lihat data menu Data Produk', '2015-12-03 22:25:39', 1, 0),
(2228, 'Lihat', 'Data Role', '2015-12-03 22:26:24', 'User admin Lihat data menu Data Role', '2015-12-03 22:26:24', 1, 0),
(2229, 'Lihat', 'Data Produk', '2015-12-03 22:26:29', 'User admin Lihat data menu Data Produk', '2015-12-03 22:26:29', 1, 0),
(2230, 'Lihat', 'Data User', '2015-12-03 22:26:31', 'User admin Lihat data menu Data User', '2015-12-03 22:26:31', 1, 0),
(2231, 'Lihat', 'Data User', '2015-12-03 22:26:49', 'User admin Lihat data menu Data User', '2015-12-03 22:26:49', 1, 0),
(2232, 'Lihat', 'Data Kategori', '2015-12-03 22:26:53', 'User admin Lihat data menu Data Kategori', '2015-12-03 22:26:53', 1, 0),
(2233, 'Lihat', 'Data Produk', '2015-12-03 22:27:29', 'User admin Lihat data menu Data Produk', '2015-12-03 22:27:29', 1, 0),
(2234, 'Lihat', 'Data Produk', '2015-12-03 22:32:49', 'User admin Lihat data menu Data Produk', '2015-12-03 22:32:49', 1, 0),
(2235, 'Lihat', 'Data Produk', '2015-12-03 22:39:15', 'User admin Lihat data menu Data Produk', '2015-12-03 22:39:15', 1, 0),
(2236, 'Lihat', 'Data Produk', '2015-12-03 22:41:11', 'User admin Lihat data menu Data Produk', '2015-12-03 22:41:11', 1, 0),
(2237, 'Lihat', 'Data Produk', '2015-12-03 22:42:15', 'User admin Lihat data menu Data Produk', '2015-12-03 22:42:15', 1, 0),
(2238, 'Lihat', 'Data Produk', '2015-12-03 22:42:40', 'User admin Lihat data menu Data Produk', '2015-12-03 22:42:40', 1, 0),
(2239, 'Lihat', 'Data Produk', '2015-12-03 22:43:31', 'User admin Lihat data menu Data Produk', '2015-12-03 22:43:31', 1, 0),
(2240, 'Lihat', 'Data Produk', '2015-12-03 22:44:17', 'User admin Lihat data menu Data Produk', '2015-12-03 22:44:17', 1, 0),
(2241, 'Tambah', 'Data Produk', '2015-12-03 22:44:47', 'User admin Tambah data menu Data Produk', '2015-12-03 22:44:47', 1, 0),
(2242, 'Lihat', 'Data Produk', '2015-12-03 22:44:48', 'User admin Lihat data menu Data Produk', '2015-12-03 22:44:48', 1, 0),
(2243, 'Lihat', 'Data Produk', '2015-12-03 22:45:26', 'User admin Lihat data menu Data Produk', '2015-12-03 22:45:26', 1, 0),
(2244, 'Tambah', 'Data Produk', '2015-12-03 22:46:22', 'User admin Tambah data menu Data Produk', '2015-12-03 22:46:22', 1, 0),
(2245, 'Lihat', 'Data Produk', '2015-12-03 22:46:23', 'User admin Lihat data menu Data Produk', '2015-12-03 22:46:23', 1, 0),
(2246, 'Tambah', 'Data Produk', '2015-12-03 22:46:47', 'User admin Tambah data menu Data Produk', '2015-12-03 22:46:47', 1, 0),
(2247, 'Lihat', 'Data Produk', '2015-12-03 22:46:48', 'User admin Lihat data menu Data Produk', '2015-12-03 22:46:48', 1, 0),
(2248, 'Lihat', 'Data Produk', '2015-12-03 22:47:34', 'User admin Lihat data menu Data Produk', '2015-12-03 22:47:34', 1, 0),
(2249, 'Lihat', 'Data Produk', '2015-12-03 22:47:42', 'User admin Lihat data menu Data Produk', '2015-12-03 22:47:42', 1, 0),
(2250, 'Lihat', 'Data Produk', '2015-12-03 22:48:22', 'User admin Lihat data menu Data Produk', '2015-12-03 22:48:22', 1, 0),
(2251, 'Lihat', 'Data Produk', '2015-12-03 22:48:34', 'User admin Lihat data menu Data Produk', '2015-12-03 22:48:34', 1, 0),
(2252, 'Lihat', 'Data Produk', '2015-12-03 22:48:48', 'User admin Lihat data menu Data Produk', '2015-12-03 22:48:48', 1, 0),
(2253, 'Lihat', 'Data Produk', '2015-12-03 22:49:16', 'User admin Lihat data menu Data Produk', '2015-12-03 22:49:16', 1, 0),
(2254, 'Lihat', 'Data Produk', '2015-12-03 22:49:45', 'User admin Lihat data menu Data Produk', '2015-12-03 22:49:45', 1, 0),
(2255, 'Tambah', 'Data Produk', '2015-12-03 22:49:46', 'User admin Tambah data menu Data Produk', '2015-12-03 22:49:46', 1, 0),
(2256, 'Lihat', 'Data Produk', '2015-12-03 22:49:47', 'User admin Lihat data menu Data Produk', '2015-12-03 22:49:47', 1, 0),
(2257, 'Tambah', 'Data Produk', '2015-12-03 22:51:08', 'User admin Tambah data menu Data Produk', '2015-12-03 22:51:08', 1, 0),
(2258, 'Lihat', 'Data Produk', '2015-12-03 22:51:09', 'User admin Lihat data menu Data Produk', '2015-12-03 22:51:09', 1, 0),
(2259, 'Lihat', 'Data Produk', '2015-12-03 22:52:06', 'User admin Lihat data menu Data Produk', '2015-12-03 22:52:06', 1, 0),
(2260, 'Ubah', 'Data Produk', '2015-12-03 22:52:38', 'User admin Ubah data menu Data Produk', '2015-12-03 22:52:38', 1, 0),
(2261, 'Lihat', 'Data Produk', '2015-12-03 22:52:39', 'User admin Lihat data menu Data Produk', '2015-12-03 22:52:39', 1, 0),
(2262, 'Tambah', 'Data Produk', '2015-12-03 22:56:01', 'User admin Tambah data menu Data Produk', '2015-12-03 22:56:01', 1, 0),
(2263, 'Lihat', 'Data Produk', '2015-12-03 22:56:03', 'User admin Lihat data menu Data Produk', '2015-12-03 22:56:03', 1, 0),
(2264, 'Tambah', 'Data Produk', '2015-12-03 22:56:50', 'User admin Tambah data menu Data Produk', '2015-12-03 22:56:50', 1, 0),
(2265, 'Lihat', 'Data Produk', '2015-12-03 22:56:51', 'User admin Lihat data menu Data Produk', '2015-12-03 22:56:51', 1, 0),
(2266, 'Tambah', 'Data Produk', '2015-12-03 22:58:15', 'User admin Tambah data menu Data Produk', '2015-12-03 22:58:15', 1, 0),
(2267, 'Lihat', 'Data Produk', '2015-12-03 22:58:16', 'User admin Lihat data menu Data Produk', '2015-12-03 22:58:16', 1, 0),
(2268, 'Tambah', 'Data Produk', '2015-12-03 22:59:07', 'User admin Tambah data menu Data Produk', '2015-12-03 22:59:07', 1, 0),
(2269, 'Lihat', 'Data Produk', '2015-12-03 22:59:08', 'User admin Lihat data menu Data Produk', '2015-12-03 22:59:08', 1, 0),
(2270, 'Lihat', 'Data Produk', '2015-12-03 23:00:36', 'User admin Lihat data menu Data Produk', '2015-12-03 23:00:36', 1, 0),
(2271, 'Tambah', 'Data Produk', '2015-12-03 23:01:11', 'User admin Tambah data menu Data Produk', '2015-12-03 23:01:11', 1, 0),
(2272, 'Lihat', 'Data Produk', '2015-12-03 23:01:12', 'User admin Lihat data menu Data Produk', '2015-12-03 23:01:12', 1, 0),
(2273, 'Tambah', 'Data Produk', '2015-12-03 23:02:33', 'User admin Tambah data menu Data Produk', '2015-12-03 23:02:33', 1, 0),
(2274, 'Lihat', 'Data Produk', '2015-12-03 23:02:34', 'User admin Lihat data menu Data Produk', '2015-12-03 23:02:34', 1, 0),
(2275, 'Ubah', 'Data Produk', '2015-12-03 23:03:52', 'User admin Ubah data menu Data Produk', '2015-12-03 23:03:52', 1, 0),
(2276, 'Lihat', 'Data Produk', '2015-12-03 23:03:53', 'User admin Lihat data menu Data Produk', '2015-12-03 23:03:53', 1, 0),
(2277, 'Tambah', 'Data Produk', '2015-12-03 23:06:45', 'User admin Tambah data menu Data Produk', '2015-12-03 23:06:45', 1, 0),
(2278, 'Lihat', 'Data Produk', '2015-12-03 23:06:46', 'User admin Lihat data menu Data Produk', '2015-12-03 23:06:46', 1, 0),
(2279, 'Lihat', 'Data Link Social', '2015-12-03 23:22:23', 'User admin Lihat data menu Data Link Social', '2015-12-03 23:22:23', 1, 0),
(2280, 'Lihat', 'Data Role', '2015-12-03 23:22:53', 'User admin Lihat data menu Data Role', '2015-12-03 23:22:53', 1, 0),
(2281, 'Lihat', 'Data User', '2015-12-03 23:22:58', 'User admin Lihat data menu Data User', '2015-12-03 23:22:58', 1, 0),
(2282, 'Tambah', 'Data User', '2015-12-03 23:23:08', 'User admin Tambah data menu Data User', '2015-12-03 23:23:08', 1, 0),
(2283, 'Lihat', 'Data User', '2015-12-03 23:23:09', 'User admin Lihat data menu Data User', '2015-12-03 23:23:09', 1, 0),
(2284, 'Tambah', 'Data Produk', '2015-12-04 00:16:59', 'User admin Tambah data menu Data Produk', '2015-12-04 00:16:59', 1, 0),
(2285, 'Lihat', 'Data Produk', '2015-12-04 00:17:00', 'User admin Lihat data menu Data Produk', '2015-12-04 00:17:00', 1, 0),
(2286, 'Tambah', 'Data Produk', '2015-12-04 00:17:48', 'User admin Tambah data menu Data Produk', '2015-12-04 00:17:48', 1, 0),
(2287, 'Lihat', 'Data Produk', '2015-12-04 00:17:49', 'User admin Lihat data menu Data Produk', '2015-12-04 00:17:49', 1, 0),
(2288, 'Tambah', 'Data Produk', '2015-12-04 00:25:12', 'User admin Tambah data menu Data Produk', '2015-12-04 00:25:12', 1, 0),
(2289, 'Lihat', 'Data Produk', '2015-12-04 00:25:13', 'User admin Lihat data menu Data Produk', '2015-12-04 00:25:13', 1, 0),
(2290, 'Tambah', 'Data Produk', '2015-12-04 00:28:01', 'User admin Tambah data menu Data Produk', '2015-12-04 00:28:01', 1, 0),
(2291, 'Lihat', 'Data Produk', '2015-12-04 00:28:03', 'User admin Lihat data menu Data Produk', '2015-12-04 00:28:03', 1, 0),
(2292, 'Tambah', 'Data Produk', '2015-12-04 00:28:52', 'User admin Tambah data menu Data Produk', '2015-12-04 00:28:52', 1, 0),
(2293, 'Lihat', 'Data Produk', '2015-12-04 00:28:54', 'User admin Lihat data menu Data Produk', '2015-12-04 00:28:54', 1, 0),
(2294, 'Tambah', 'Data Produk', '2015-12-04 00:29:35', 'User admin Tambah data menu Data Produk', '2015-12-04 00:29:35', 1, 0),
(2295, 'Lihat', 'Data Produk', '2015-12-04 00:29:37', 'User admin Lihat data menu Data Produk', '2015-12-04 00:29:37', 1, 0),
(2296, 'Tambah', 'Data Produk', '2015-12-04 00:31:02', 'User admin Tambah data menu Data Produk', '2015-12-04 00:31:02', 1, 0),
(2297, 'Lihat', 'Data Produk', '2015-12-04 00:31:03', 'User admin Lihat data menu Data Produk', '2015-12-04 00:31:03', 1, 0),
(2298, 'Tambah', 'Data Produk', '2015-12-04 00:32:05', 'User admin Tambah data menu Data Produk', '2015-12-04 00:32:05', 1, 0),
(2299, 'Lihat', 'Data Produk', '2015-12-04 00:32:06', 'User admin Lihat data menu Data Produk', '2015-12-04 00:32:06', 1, 0),
(2300, 'Lihat', 'Data Pesan', '2015-12-04 00:32:23', 'User admin Lihat data menu Data Pesan', '2015-12-04 00:32:23', 1, 0),
(2301, 'Lihat', 'Data Link Social', '2015-12-04 00:33:00', 'User admin Lihat data menu Data Link Social', '2015-12-04 00:33:00', 1, 0),
(2302, 'Tambah', 'Data Produk', '2015-12-04 00:33:01', 'User admin Tambah data menu Data Produk', '2015-12-04 00:33:01', 1, 0),
(2303, 'Lihat', 'Data Produk', '2015-12-04 00:33:02', 'User admin Lihat data menu Data Produk', '2015-12-04 00:33:02', 1, 0),
(2304, 'Lihat', 'Data Produk', '2015-12-04 00:33:33', 'User admin Lihat data menu Data Produk', '2015-12-04 00:33:33', 1, 0),
(2305, 'Lihat', 'Data Kategori', '2015-12-04 00:34:18', 'User admin Lihat data menu Data Kategori', '2015-12-04 00:34:18', 1, 0),
(2306, 'Tambah', 'Data Produk', '2015-12-04 00:35:57', 'User admin Tambah data menu Data Produk', '2015-12-04 00:35:57', 1, 0),
(2307, 'Lihat', 'Data Produk', '2015-12-04 00:35:58', 'User admin Lihat data menu Data Produk', '2015-12-04 00:35:58', 1, 0),
(2308, 'Tambah', 'Data Produk', '2015-12-04 00:36:45', 'User admin Tambah data menu Data Produk', '2015-12-04 00:36:45', 1, 0),
(2309, 'Lihat', 'Data Produk', '2015-12-04 00:36:47', 'User admin Lihat data menu Data Produk', '2015-12-04 00:36:47', 1, 0),
(2310, 'Tambah', 'Data Produk', '2015-12-04 00:37:42', 'User admin Tambah data menu Data Produk', '2015-12-04 00:37:42', 1, 0),
(2311, 'Lihat', 'Data Produk', '2015-12-04 00:37:43', 'User admin Lihat data menu Data Produk', '2015-12-04 00:37:43', 1, 0),
(2312, 'Tambah', 'Data Produk', '2015-12-04 00:39:42', 'User admin Tambah data menu Data Produk', '2015-12-04 00:39:42', 1, 0),
(2313, 'Lihat', 'Data Produk', '2015-12-04 00:39:44', 'User admin Lihat data menu Data Produk', '2015-12-04 00:39:44', 1, 0),
(2314, 'Tambah', 'Data Produk', '2015-12-04 00:41:22', 'User admin Tambah data menu Data Produk', '2015-12-04 00:41:22', 1, 0),
(2315, 'Lihat', 'Data Produk', '2015-12-04 00:41:23', 'User admin Lihat data menu Data Produk', '2015-12-04 00:41:23', 1, 0),
(2316, 'Tambah', 'Data Produk', '2015-12-04 00:42:00', 'User admin Tambah data menu Data Produk', '2015-12-04 00:42:00', 1, 0),
(2317, 'Lihat', 'Data Produk', '2015-12-04 00:42:02', 'User admin Lihat data menu Data Produk', '2015-12-04 00:42:02', 1, 0),
(2318, 'Tambah', 'Data Produk', '2015-12-04 00:42:34', 'User admin Tambah data menu Data Produk', '2015-12-04 00:42:34', 1, 0),
(2319, 'Lihat', 'Data Produk', '2015-12-04 00:42:35', 'User admin Lihat data menu Data Produk', '2015-12-04 00:42:35', 1, 0),
(2320, 'Tambah', 'Data Produk', '2015-12-04 00:43:23', 'User admin Tambah data menu Data Produk', '2015-12-04 00:43:23', 1, 0),
(2321, 'Lihat', 'Data Produk', '2015-12-04 00:43:24', 'User admin Lihat data menu Data Produk', '2015-12-04 00:43:24', 1, 0),
(2322, 'Lihat', 'Data Produk', '2015-12-04 00:49:00', 'User admin Lihat data menu Data Produk', '2015-12-04 00:49:00', 1, 0),
(2323, 'Lihat', 'Data User', '2015-12-04 00:49:29', 'User admin Lihat data menu Data User', '2015-12-04 00:49:29', 1, 0),
(2324, 'Tambah', 'Data User', '2015-12-04 00:49:39', 'User admin Tambah data menu Data User', '2015-12-04 00:49:39', 1, 0),
(2325, 'Lihat', 'Data User', '2015-12-04 00:49:41', 'User admin Lihat data menu Data User', '2015-12-04 00:49:41', 1, 0),
(2326, 'Lihat', 'Data Produk', '2015-12-04 00:56:37', 'User admin Lihat data menu Data Produk', '2015-12-04 00:56:37', 1, 0),
(2327, 'Tambah', 'Data Produk', '2015-12-04 00:58:22', 'User admin Tambah data menu Data Produk', '2015-12-04 00:58:22', 1, 0),
(2328, 'Lihat', 'Data Produk', '2015-12-04 00:58:23', 'User admin Lihat data menu Data Produk', '2015-12-04 00:58:23', 1, 0),
(2329, 'Tambah', 'Data Produk', '2015-12-04 00:59:11', 'User admin Tambah data menu Data Produk', '2015-12-04 00:59:11', 1, 0),
(2330, 'Lihat', 'Data Produk', '2015-12-04 00:59:12', 'User admin Lihat data menu Data Produk', '2015-12-04 00:59:12', 1, 0),
(2331, 'Tambah', 'Data Produk', '2015-12-04 00:59:48', 'User admin Tambah data menu Data Produk', '2015-12-04 00:59:48', 1, 0),
(2332, 'Lihat', 'Data Produk', '2015-12-04 00:59:49', 'User admin Lihat data menu Data Produk', '2015-12-04 00:59:49', 1, 0),
(2333, 'Tambah', 'Data Produk', '2015-12-04 01:00:18', 'User admin Tambah data menu Data Produk', '2015-12-04 01:00:18', 1, 0),
(2334, 'Lihat', 'Data Produk', '2015-12-04 01:00:19', 'User admin Lihat data menu Data Produk', '2015-12-04 01:00:19', 1, 0),
(2335, 'Tambah', 'Data Produk', '2015-12-04 01:01:04', 'User admin Tambah data menu Data Produk', '2015-12-04 01:01:04', 1, 0),
(2336, 'Lihat', 'Data Produk', '2015-12-04 01:01:05', 'User admin Lihat data menu Data Produk', '2015-12-04 01:01:05', 1, 0),
(2337, 'Tambah', 'Data Produk', '2015-12-04 01:03:15', 'User admin Tambah data menu Data Produk', '2015-12-04 01:03:15', 1, 0),
(2338, 'Lihat', 'Data Produk', '2015-12-04 01:03:17', 'User admin Lihat data menu Data Produk', '2015-12-04 01:03:17', 1, 0),
(2339, 'Tambah', 'Data Produk', '2015-12-04 01:04:55', 'User admin Tambah data menu Data Produk', '2015-12-04 01:04:55', 1, 0),
(2340, 'Lihat', 'Data Produk', '2015-12-04 01:04:56', 'User admin Lihat data menu Data Produk', '2015-12-04 01:04:56', 1, 0),
(2341, 'Tambah', 'Data Produk', '2015-12-04 01:11:02', 'User admin Tambah data menu Data Produk', '2015-12-04 01:11:02', 1, 0),
(2342, 'Lihat', 'Data Produk', '2015-12-04 01:11:03', 'User admin Lihat data menu Data Produk', '2015-12-04 01:11:03', 1, 0),
(2343, 'Tambah', 'Data Produk', '2015-12-04 01:11:52', 'User admin Tambah data menu Data Produk', '2015-12-04 01:11:52', 1, 0),
(2344, 'Lihat', 'Data Produk', '2015-12-04 01:11:54', 'User admin Lihat data menu Data Produk', '2015-12-04 01:11:54', 1, 0),
(2345, 'Tambah', 'Data Produk', '2015-12-04 01:12:34', 'User admin Tambah data menu Data Produk', '2015-12-04 01:12:34', 1, 0),
(2346, 'Lihat', 'Data Produk', '2015-12-04 01:12:35', 'User admin Lihat data menu Data Produk', '2015-12-04 01:12:35', 1, 0),
(2347, 'Tambah', 'Data Produk', '2015-12-04 01:15:04', 'User admin Tambah data menu Data Produk', '2015-12-04 01:15:04', 1, 0),
(2348, 'Lihat', 'Data Produk', '2015-12-04 01:15:05', 'User admin Lihat data menu Data Produk', '2015-12-04 01:15:05', 1, 0),
(2349, 'Tambah', 'Data Produk', '2015-12-04 01:15:47', 'User admin Tambah data menu Data Produk', '2015-12-04 01:15:47', 1, 0),
(2350, 'Lihat', 'Data Produk', '2015-12-04 01:15:48', 'User admin Lihat data menu Data Produk', '2015-12-04 01:15:48', 1, 0),
(2351, 'Tambah', 'Data Produk', '2015-12-04 01:16:51', 'User admin Tambah data menu Data Produk', '2015-12-04 01:16:51', 1, 0),
(2352, 'Lihat', 'Data Produk', '2015-12-04 01:16:52', 'User admin Lihat data menu Data Produk', '2015-12-04 01:16:52', 1, 0),
(2353, 'Tambah', 'Data Produk', '2015-12-04 01:17:18', 'User admin Tambah data menu Data Produk', '2015-12-04 01:17:18', 1, 0),
(2354, 'Lihat', 'Data Produk', '2015-12-04 01:17:20', 'User admin Lihat data menu Data Produk', '2015-12-04 01:17:20', 1, 0),
(2355, 'Tambah', 'Data Produk', '2015-12-04 01:17:56', 'User admin Tambah data menu Data Produk', '2015-12-04 01:17:56', 1, 0),
(2356, 'Lihat', 'Data Produk', '2015-12-04 01:17:57', 'User admin Lihat data menu Data Produk', '2015-12-04 01:17:57', 1, 0),
(2357, 'Tambah', 'Data Produk', '2015-12-04 01:18:36', 'User admin Tambah data menu Data Produk', '2015-12-04 01:18:36', 1, 0),
(2358, 'Lihat', 'Data Produk', '2015-12-04 01:18:37', 'User admin Lihat data menu Data Produk', '2015-12-04 01:18:37', 1, 0),
(2359, 'Tambah', 'Data Produk', '2015-12-04 01:19:57', 'User admin Tambah data menu Data Produk', '2015-12-04 01:19:57', 1, 0),
(2360, 'Lihat', 'Data Produk', '2015-12-04 01:19:58', 'User admin Lihat data menu Data Produk', '2015-12-04 01:19:58', 1, 0),
(2361, 'Tambah', 'Data Produk', '2015-12-04 01:21:06', 'User admin Tambah data menu Data Produk', '2015-12-04 01:21:06', 1, 0),
(2362, 'Lihat', 'Data Produk', '2015-12-04 01:21:08', 'User admin Lihat data menu Data Produk', '2015-12-04 01:21:08', 1, 0),
(2363, 'Tambah', 'Data Produk', '2015-12-04 01:21:53', 'User admin Tambah data menu Data Produk', '2015-12-04 01:21:53', 1, 0),
(2364, 'Lihat', 'Data Produk', '2015-12-04 01:21:54', 'User admin Lihat data menu Data Produk', '2015-12-04 01:21:54', 1, 0),
(2365, 'Tambah', 'Data Produk', '2015-12-04 01:22:20', 'User admin Tambah data menu Data Produk', '2015-12-04 01:22:20', 1, 0),
(2366, 'Lihat', 'Data Produk', '2015-12-04 01:22:22', 'User admin Lihat data menu Data Produk', '2015-12-04 01:22:22', 1, 0),
(2367, 'Tambah', 'Data Produk', '2015-12-04 01:23:02', 'User admin Tambah data menu Data Produk', '2015-12-04 01:23:02', 1, 0),
(2368, 'Lihat', 'Data Produk', '2015-12-04 01:23:03', 'User admin Lihat data menu Data Produk', '2015-12-04 01:23:03', 1, 0),
(2369, 'Tambah', 'Data Produk', '2015-12-04 01:28:03', 'User admin Tambah data menu Data Produk', '2015-12-04 01:28:03', 1, 0),
(2370, 'Lihat', 'Data Produk', '2015-12-04 01:28:04', 'User admin Lihat data menu Data Produk', '2015-12-04 01:28:04', 1, 0),
(2371, 'Tambah', 'Data Produk', '2015-12-04 01:28:35', 'User admin Tambah data menu Data Produk', '2015-12-04 01:28:35', 1, 0),
(2372, 'Lihat', 'Data Produk', '2015-12-04 01:28:36', 'User admin Lihat data menu Data Produk', '2015-12-04 01:28:36', 1, 0),
(2373, 'Tambah', 'Data Produk', '2015-12-04 01:30:31', 'User admin Tambah data menu Data Produk', '2015-12-04 01:30:31', 1, 0),
(2374, 'Lihat', 'Data Produk', '2015-12-04 01:30:32', 'User admin Lihat data menu Data Produk', '2015-12-04 01:30:32', 1, 0),
(2375, 'Tambah', 'Data Produk', '2015-12-04 01:31:07', 'User admin Tambah data menu Data Produk', '2015-12-04 01:31:07', 1, 0),
(2376, 'Lihat', 'Data Produk', '2015-12-04 01:31:09', 'User admin Lihat data menu Data Produk', '2015-12-04 01:31:09', 1, 0),
(2377, 'Tambah', 'Data Produk', '2015-12-04 01:31:49', 'User admin Tambah data menu Data Produk', '2015-12-04 01:31:49', 1, 0),
(2378, 'Lihat', 'Data Produk', '2015-12-04 01:31:50', 'User admin Lihat data menu Data Produk', '2015-12-04 01:31:50', 1, 0),
(2379, 'Tambah', 'Data Produk', '2015-12-04 01:32:18', 'User admin Tambah data menu Data Produk', '2015-12-04 01:32:18', 1, 0),
(2380, 'Lihat', 'Data Produk', '2015-12-04 01:32:20', 'User admin Lihat data menu Data Produk', '2015-12-04 01:32:20', 1, 0),
(2381, 'Tambah', 'Data Produk', '2015-12-04 01:34:44', 'User admin Tambah data menu Data Produk', '2015-12-04 01:34:44', 1, 0),
(2382, 'Lihat', 'Data Produk', '2015-12-04 01:34:46', 'User admin Lihat data menu Data Produk', '2015-12-04 01:34:46', 1, 0),
(2383, 'Tambah', 'Data Produk', '2015-12-04 01:36:08', 'User admin Tambah data menu Data Produk', '2015-12-04 01:36:08', 1, 0),
(2384, 'Lihat', 'Data Produk', '2015-12-04 01:36:09', 'User admin Lihat data menu Data Produk', '2015-12-04 01:36:09', 1, 0),
(2385, 'Tambah', 'Data Produk', '2015-12-04 01:38:51', 'User admin Tambah data menu Data Produk', '2015-12-04 01:38:51', 1, 0),
(2386, 'Lihat', 'Data Produk', '2015-12-04 01:38:52', 'User admin Lihat data menu Data Produk', '2015-12-04 01:38:52', 1, 0),
(2387, 'Tambah', 'Data Produk', '2015-12-04 01:40:34', 'User admin Tambah data menu Data Produk', '2015-12-04 01:40:34', 1, 0),
(2388, 'Lihat', 'Data Produk', '2015-12-04 01:40:35', 'User admin Lihat data menu Data Produk', '2015-12-04 01:40:35', 1, 0),
(2389, 'Tambah', 'Data Produk', '2015-12-04 01:42:57', 'User admin Tambah data menu Data Produk', '2015-12-04 01:42:57', 1, 0),
(2390, 'Lihat', 'Data Produk', '2015-12-04 01:42:58', 'User admin Lihat data menu Data Produk', '2015-12-04 01:42:58', 1, 0),
(2391, 'Tambah', 'Data Produk', '2015-12-04 01:43:40', 'User admin Tambah data menu Data Produk', '2015-12-04 01:43:40', 1, 0),
(2392, 'Lihat', 'Data Produk', '2015-12-04 01:43:41', 'User admin Lihat data menu Data Produk', '2015-12-04 01:43:41', 1, 0),
(2393, 'Tambah', 'Data Produk', '2015-12-04 01:44:05', 'User admin Tambah data menu Data Produk', '2015-12-04 01:44:05', 1, 0),
(2394, 'Lihat', 'Data Produk', '2015-12-04 01:44:07', 'User admin Lihat data menu Data Produk', '2015-12-04 01:44:07', 1, 0),
(2395, 'Tambah', 'Data Produk', '2015-12-04 01:47:58', 'User admin Tambah data menu Data Produk', '2015-12-04 01:47:58', 1, 0),
(2396, 'Lihat', 'Data Produk', '2015-12-04 01:47:59', 'User admin Lihat data menu Data Produk', '2015-12-04 01:47:59', 1, 0),
(2397, 'Tambah', 'Data Produk', '2015-12-04 01:48:29', 'User admin Tambah data menu Data Produk', '2015-12-04 01:48:29', 1, 0),
(2398, 'Lihat', 'Data Produk', '2015-12-04 01:48:31', 'User admin Lihat data menu Data Produk', '2015-12-04 01:48:31', 1, 0),
(2399, 'Tambah', 'Data Produk', '2015-12-04 01:48:58', 'User admin Tambah data menu Data Produk', '2015-12-04 01:48:58', 1, 0),
(2400, 'Lihat', 'Data Produk', '2015-12-04 01:48:59', 'User admin Lihat data menu Data Produk', '2015-12-04 01:48:59', 1, 0),
(2401, 'Tambah', 'Data Produk', '2015-12-04 01:49:50', 'User admin Tambah data menu Data Produk', '2015-12-04 01:49:50', 1, 0),
(2402, 'Lihat', 'Data Produk', '2015-12-04 01:49:51', 'User admin Lihat data menu Data Produk', '2015-12-04 01:49:51', 1, 0),
(2403, 'Tambah', 'Data Produk', '2015-12-04 01:50:16', 'User admin Tambah data menu Data Produk', '2015-12-04 01:50:16', 1, 0),
(2404, 'Lihat', 'Data Produk', '2015-12-04 01:50:18', 'User admin Lihat data menu Data Produk', '2015-12-04 01:50:18', 1, 0),
(2405, 'Tambah', 'Data Produk', '2015-12-04 01:52:26', 'User admin Tambah data menu Data Produk', '2015-12-04 01:52:26', 1, 0),
(2406, 'Lihat', 'Data Produk', '2015-12-04 01:52:27', 'User admin Lihat data menu Data Produk', '2015-12-04 01:52:27', 1, 0),
(2407, 'Tambah', 'Data Produk', '2015-12-04 01:52:58', 'User admin Tambah data menu Data Produk', '2015-12-04 01:52:58', 1, 0),
(2408, 'Lihat', 'Data Produk', '2015-12-04 01:52:59', 'User admin Lihat data menu Data Produk', '2015-12-04 01:52:59', 1, 0),
(2409, 'Tambah', 'Data Produk', '2015-12-04 01:54:22', 'User admin Tambah data menu Data Produk', '2015-12-04 01:54:22', 1, 0),
(2410, 'Lihat', 'Data Produk', '2015-12-04 01:54:23', 'User admin Lihat data menu Data Produk', '2015-12-04 01:54:23', 1, 0),
(2411, 'Tambah', 'Data Produk', '2015-12-04 01:54:53', 'User admin Tambah data menu Data Produk', '2015-12-04 01:54:53', 1, 0),
(2412, 'Lihat', 'Data Produk', '2015-12-04 01:54:54', 'User admin Lihat data menu Data Produk', '2015-12-04 01:54:54', 1, 0),
(2413, 'Tambah', 'Data Produk', '2015-12-04 01:55:28', 'User admin Tambah data menu Data Produk', '2015-12-04 01:55:28', 1, 0),
(2414, 'Lihat', 'Data Produk', '2015-12-04 01:55:30', 'User admin Lihat data menu Data Produk', '2015-12-04 01:55:30', 1, 0),
(2415, 'Tambah', 'Data Produk', '2015-12-04 01:55:57', 'User admin Tambah data menu Data Produk', '2015-12-04 01:55:57', 1, 0),
(2416, 'Lihat', 'Data Produk', '2015-12-04 01:55:58', 'User admin Lihat data menu Data Produk', '2015-12-04 01:55:58', 1, 0),
(2417, 'Tambah', 'Data Produk', '2015-12-04 01:58:27', 'User admin Tambah data menu Data Produk', '2015-12-04 01:58:27', 1, 0),
(2418, 'Lihat', 'Data Produk', '2015-12-04 01:58:29', 'User admin Lihat data menu Data Produk', '2015-12-04 01:58:29', 1, 0),
(2419, 'Tambah', 'Data Produk', '2015-12-04 02:01:34', 'User admin Tambah data menu Data Produk', '2015-12-04 02:01:34', 1, 0),
(2420, 'Lihat', 'Data Produk', '2015-12-04 02:01:35', 'User admin Lihat data menu Data Produk', '2015-12-04 02:01:35', 1, 0),
(2421, 'Tambah', 'Data Produk', '2015-12-04 02:04:24', 'User admin Tambah data menu Data Produk', '2015-12-04 02:04:24', 1, 0),
(2422, 'Lihat', 'Data Produk', '2015-12-04 02:04:26', 'User admin Lihat data menu Data Produk', '2015-12-04 02:04:26', 1, 0),
(2423, 'Tambah', 'Data Produk', '2015-12-04 02:05:19', 'User admin Tambah data menu Data Produk', '2015-12-04 02:05:19', 1, 0),
(2424, 'Lihat', 'Data Produk', '2015-12-04 02:05:20', 'User admin Lihat data menu Data Produk', '2015-12-04 02:05:20', 1, 0),
(2425, 'Tambah', 'Data Produk', '2015-12-04 02:06:10', 'User admin Tambah data menu Data Produk', '2015-12-04 02:06:10', 1, 0),
(2426, 'Lihat', 'Data Produk', '2015-12-04 02:06:11', 'User admin Lihat data menu Data Produk', '2015-12-04 02:06:11', 1, 0),
(2427, 'Tambah', 'Data Produk', '2015-12-04 02:06:35', 'User admin Tambah data menu Data Produk', '2015-12-04 02:06:35', 1, 0),
(2428, 'Lihat', 'Data Produk', '2015-12-04 02:06:36', 'User admin Lihat data menu Data Produk', '2015-12-04 02:06:36', 1, 0),
(2429, 'Tambah', 'Data Produk', '2015-12-04 02:07:04', 'User admin Tambah data menu Data Produk', '2015-12-04 02:07:04', 1, 0),
(2430, 'Lihat', 'Data Produk', '2015-12-04 02:07:05', 'User admin Lihat data menu Data Produk', '2015-12-04 02:07:05', 1, 0),
(2431, 'Tambah', 'Data Produk', '2015-12-04 02:07:33', 'User admin Tambah data menu Data Produk', '2015-12-04 02:07:33', 1, 0),
(2432, 'Lihat', 'Data Produk', '2015-12-04 02:07:34', 'User admin Lihat data menu Data Produk', '2015-12-04 02:07:34', 1, 0),
(2433, 'Tambah', 'Data Produk', '2015-12-04 02:08:42', 'User admin Tambah data menu Data Produk', '2015-12-04 02:08:42', 1, 0),
(2434, 'Lihat', 'Data Produk', '2015-12-04 02:08:43', 'User admin Lihat data menu Data Produk', '2015-12-04 02:08:43', 1, 0),
(2435, 'Tambah', 'Data Produk', '2015-12-04 02:11:11', 'User admin Tambah data menu Data Produk', '2015-12-04 02:11:11', 1, 0),
(2436, 'Lihat', 'Data Produk', '2015-12-04 02:11:12', 'User admin Lihat data menu Data Produk', '2015-12-04 02:11:12', 1, 0),
(2437, 'Tambah', 'Data Produk', '2015-12-04 02:11:43', 'User admin Tambah data menu Data Produk', '2015-12-04 02:11:43', 1, 0),
(2438, 'Lihat', 'Data Produk', '2015-12-04 02:11:44', 'User admin Lihat data menu Data Produk', '2015-12-04 02:11:44', 1, 0),
(2439, 'Tambah', 'Data Produk', '2015-12-04 02:12:32', 'User admin Tambah data menu Data Produk', '2015-12-04 02:12:32', 1, 0),
(2440, 'Lihat', 'Data Produk', '2015-12-04 02:12:33', 'User admin Lihat data menu Data Produk', '2015-12-04 02:12:33', 1, 0),
(2441, 'Tambah', 'Data Produk', '2015-12-04 02:14:00', 'User admin Tambah data menu Data Produk', '2015-12-04 02:14:00', 1, 0),
(2442, 'Lihat', 'Data Produk', '2015-12-04 02:14:01', 'User admin Lihat data menu Data Produk', '2015-12-04 02:14:01', 1, 0),
(2443, 'Tambah', 'Data Produk', '2015-12-04 02:15:39', 'User admin Tambah data menu Data Produk', '2015-12-04 02:15:39', 1, 0),
(2444, 'Lihat', 'Data Produk', '2015-12-04 02:15:40', 'User admin Lihat data menu Data Produk', '2015-12-04 02:15:40', 1, 0),
(2445, 'Tambah', 'Data Produk', '2015-12-04 02:16:17', 'User admin Tambah data menu Data Produk', '2015-12-04 02:16:17', 1, 0),
(2446, 'Lihat', 'Data Produk', '2015-12-04 02:16:19', 'User admin Lihat data menu Data Produk', '2015-12-04 02:16:19', 1, 0),
(2447, 'Tambah', 'Data Produk', '2015-12-04 02:17:02', 'User admin Tambah data menu Data Produk', '2015-12-04 02:17:02', 1, 0),
(2448, 'Lihat', 'Data Produk', '2015-12-04 02:17:03', 'User admin Lihat data menu Data Produk', '2015-12-04 02:17:03', 1, 0),
(2449, 'Tambah', 'Data Produk', '2015-12-04 02:17:34', 'User admin Tambah data menu Data Produk', '2015-12-04 02:17:34', 1, 0),
(2450, 'Lihat', 'Data Produk', '2015-12-04 02:17:35', 'User admin Lihat data menu Data Produk', '2015-12-04 02:17:35', 1, 0),
(2451, 'Tambah', 'Data Produk', '2015-12-04 02:18:03', 'User admin Tambah data menu Data Produk', '2015-12-04 02:18:03', 1, 0),
(2452, 'Lihat', 'Data Produk', '2015-12-04 02:18:04', 'User admin Lihat data menu Data Produk', '2015-12-04 02:18:04', 1, 0),
(2453, 'Tambah', 'Data Produk', '2015-12-04 02:18:31', 'User admin Tambah data menu Data Produk', '2015-12-04 02:18:31', 1, 0),
(2454, 'Lihat', 'Data Produk', '2015-12-04 02:18:32', 'User admin Lihat data menu Data Produk', '2015-12-04 02:18:32', 1, 0),
(2455, 'Tambah', 'Data Produk', '2015-12-04 02:19:07', 'User admin Tambah data menu Data Produk', '2015-12-04 02:19:07', 1, 0),
(2456, 'Lihat', 'Data Produk', '2015-12-04 02:19:08', 'User admin Lihat data menu Data Produk', '2015-12-04 02:19:08', 1, 0),
(2457, 'Tambah', 'Data Produk', '2015-12-04 02:19:35', 'User admin Tambah data menu Data Produk', '2015-12-04 02:19:35', 1, 0),
(2458, 'Lihat', 'Data Produk', '2015-12-04 02:19:36', 'User admin Lihat data menu Data Produk', '2015-12-04 02:19:36', 1, 0),
(2459, 'Lihat', 'Data Produk', '2015-12-04 02:19:51', 'User admin Lihat data menu Data Produk', '2015-12-04 02:19:51', 1, 0),
(2460, 'Tambah', 'Data Produk', '2015-12-04 02:19:58', 'User admin Tambah data menu Data Produk', '2015-12-04 02:19:58', 1, 0),
(2461, 'Lihat', 'Data Produk', '2015-12-04 02:19:59', 'User admin Lihat data menu Data Produk', '2015-12-04 02:19:59', 1, 0),
(2462, 'Tambah', 'Data Produk', '2015-12-04 02:20:38', 'User admin Tambah data menu Data Produk', '2015-12-04 02:20:38', 1, 0),
(2463, 'Lihat', 'Data Produk', '2015-12-04 02:20:39', 'User admin Lihat data menu Data Produk', '2015-12-04 02:20:39', 1, 0),
(2464, 'Tambah', 'Data Produk', '2015-12-04 02:21:09', 'User admin Tambah data menu Data Produk', '2015-12-04 02:21:09', 1, 0),
(2465, 'Lihat', 'Data Produk', '2015-12-04 02:21:10', 'User admin Lihat data menu Data Produk', '2015-12-04 02:21:10', 1, 0),
(2466, 'Tambah', 'Data Produk', '2015-12-04 02:21:46', 'User admin Tambah data menu Data Produk', '2015-12-04 02:21:46', 1, 0),
(2467, 'Lihat', 'Data Produk', '2015-12-04 02:21:47', 'User admin Lihat data menu Data Produk', '2015-12-04 02:21:47', 1, 0),
(2468, 'Tambah', 'Data Produk', '2015-12-04 02:22:04', 'User admin Tambah data menu Data Produk', '2015-12-04 02:22:04', 1, 0),
(2469, 'Lihat', 'Data Produk', '2015-12-04 02:22:05', 'User admin Lihat data menu Data Produk', '2015-12-04 02:22:05', 1, 0),
(2470, 'Tambah', 'Data Produk', '2015-12-04 02:22:27', 'User admin Tambah data menu Data Produk', '2015-12-04 02:22:27', 1, 0),
(2471, 'Lihat', 'Data Produk', '2015-12-04 02:22:29', 'User admin Lihat data menu Data Produk', '2015-12-04 02:22:29', 1, 0),
(2472, 'Tambah', 'Data Produk', '2015-12-04 02:24:14', 'User admin Tambah data menu Data Produk', '2015-12-04 02:24:14', 1, 0),
(2473, 'Lihat', 'Data Produk', '2015-12-04 02:24:15', 'User admin Lihat data menu Data Produk', '2015-12-04 02:24:15', 1, 0),
(2474, 'Tambah', 'Data Produk', '2015-12-04 02:24:32', 'User admin Tambah data menu Data Produk', '2015-12-04 02:24:32', 1, 0),
(2475, 'Lihat', 'Data Produk', '2015-12-04 02:24:33', 'User admin Lihat data menu Data Produk', '2015-12-04 02:24:33', 1, 0),
(2476, 'Tambah', 'Data Produk', '2015-12-04 02:29:37', 'User admin Tambah data menu Data Produk', '2015-12-04 02:29:37', 1, 0),
(2477, 'Lihat', 'Data Produk', '2015-12-04 02:29:38', 'User admin Lihat data menu Data Produk', '2015-12-04 02:29:38', 1, 0),
(2478, 'Lihat', 'Data Produk', '2015-12-04 02:30:20', 'User admin Lihat data menu Data Produk', '2015-12-04 02:30:20', 1, 0),
(2479, 'Tambah', 'Data Produk', '2015-12-04 02:34:20', 'User admin Tambah data menu Data Produk', '2015-12-04 02:34:20', 1, 0),
(2480, 'Lihat', 'Data Produk', '2015-12-04 02:34:22', 'User admin Lihat data menu Data Produk', '2015-12-04 02:34:22', 1, 0),
(2481, 'Tambah', 'Data Produk', '2015-12-04 02:34:55', 'User admin Tambah data menu Data Produk', '2015-12-04 02:34:55', 1, 0),
(2482, 'Lihat', 'Data Produk', '2015-12-04 02:34:56', 'User admin Lihat data menu Data Produk', '2015-12-04 02:34:56', 1, 0),
(2483, 'Tambah', 'Data Produk', '2015-12-04 02:36:43', 'User admin Tambah data menu Data Produk', '2015-12-04 02:36:43', 1, 0),
(2484, 'Lihat', 'Data Produk', '2015-12-04 02:36:44', 'User admin Lihat data menu Data Produk', '2015-12-04 02:36:44', 1, 0),
(2485, 'Tambah', 'Data Produk', '2015-12-04 02:41:04', 'User admin Tambah data menu Data Produk', '2015-12-04 02:41:04', 1, 0),
(2486, 'Lihat', 'Data Produk', '2015-12-04 02:41:05', 'User admin Lihat data menu Data Produk', '2015-12-04 02:41:05', 1, 0),
(2487, 'Tambah', 'Data Produk', '2015-12-04 02:42:09', 'User admin Tambah data menu Data Produk', '2015-12-04 02:42:09', 1, 0),
(2488, 'Lihat', 'Data Produk', '2015-12-04 02:42:10', 'User admin Lihat data menu Data Produk', '2015-12-04 02:42:10', 1, 0),
(2489, 'Tambah', 'Data Produk', '2015-12-04 02:45:20', 'User admin Tambah data menu Data Produk', '2015-12-04 02:45:20', 1, 0),
(2490, 'Lihat', 'Data Produk', '2015-12-04 02:45:22', 'User admin Lihat data menu Data Produk', '2015-12-04 02:45:22', 1, 0),
(2491, 'Tambah', 'Data Produk', '2015-12-04 02:46:19', 'User admin Tambah data menu Data Produk', '2015-12-04 02:46:19', 1, 0),
(2492, 'Lihat', 'Data Produk', '2015-12-04 02:46:20', 'User admin Lihat data menu Data Produk', '2015-12-04 02:46:20', 1, 0),
(2493, 'Tambah', 'Data Produk', '2015-12-04 02:47:01', 'User admin Tambah data menu Data Produk', '2015-12-04 02:47:01', 1, 0),
(2494, 'Lihat', 'Data Produk', '2015-12-04 02:47:02', 'User admin Lihat data menu Data Produk', '2015-12-04 02:47:02', 1, 0),
(2495, 'Tambah', 'Data Produk', '2015-12-04 02:47:41', 'User admin Tambah data menu Data Produk', '2015-12-04 02:47:41', 1, 0),
(2496, 'Lihat', 'Data Produk', '2015-12-04 02:47:42', 'User admin Lihat data menu Data Produk', '2015-12-04 02:47:42', 1, 0),
(2497, 'Tambah', 'Data Produk', '2015-12-04 02:48:06', 'User admin Tambah data menu Data Produk', '2015-12-04 02:48:06', 1, 0),
(2498, 'Lihat', 'Data Produk', '2015-12-04 02:48:08', 'User admin Lihat data menu Data Produk', '2015-12-04 02:48:08', 1, 0),
(2499, 'Tambah', 'Data Produk', '2015-12-04 02:48:31', 'User admin Tambah data menu Data Produk', '2015-12-04 02:48:31', 1, 0),
(2500, 'Lihat', 'Data Produk', '2015-12-04 02:48:32', 'User admin Lihat data menu Data Produk', '2015-12-04 02:48:32', 1, 0),
(2501, 'Tambah', 'Data Produk', '2015-12-04 02:49:33', 'User admin Tambah data menu Data Produk', '2015-12-04 02:49:33', 1, 0),
(2502, 'Lihat', 'Data Produk', '2015-12-04 02:49:35', 'User admin Lihat data menu Data Produk', '2015-12-04 02:49:35', 1, 0),
(2503, 'Tambah', 'Data Produk', '2015-12-04 02:50:00', 'User admin Tambah data menu Data Produk', '2015-12-04 02:50:00', 1, 0);
INSERT INTO `log` (`log_id`, `log_action`, `log_menu`, `log_tanggal`, `log_keterangan`, `last_update`, `last_user_id`, `is_delete`) VALUES
(2504, 'Lihat', 'Data Produk', '2015-12-04 02:50:01', 'User admin Lihat data menu Data Produk', '2015-12-04 02:50:01', 1, 0),
(2505, 'Tambah', 'Data Produk', '2015-12-04 02:50:35', 'User admin Tambah data menu Data Produk', '2015-12-04 02:50:35', 1, 0),
(2506, 'Lihat', 'Data Produk', '2015-12-04 02:50:36', 'User admin Lihat data menu Data Produk', '2015-12-04 02:50:36', 1, 0),
(2507, 'Tambah', 'Data Produk', '2015-12-04 02:51:13', 'User admin Tambah data menu Data Produk', '2015-12-04 02:51:13', 1, 0),
(2508, 'Lihat', 'Data Produk', '2015-12-04 02:51:14', 'User admin Lihat data menu Data Produk', '2015-12-04 02:51:14', 1, 0),
(2509, 'Tambah', 'Data Produk', '2015-12-04 02:51:40', 'User admin Tambah data menu Data Produk', '2015-12-04 02:51:40', 1, 0),
(2510, 'Lihat', 'Data Produk', '2015-12-04 02:51:41', 'User admin Lihat data menu Data Produk', '2015-12-04 02:51:41', 1, 0),
(2511, 'Lihat', 'Data Link Social', '2015-12-04 02:51:56', 'User admin Lihat data menu Data Link Social', '2015-12-04 02:51:56', 1, 0),
(2512, 'Lihat', 'Data Pesan', '2015-12-04 02:52:01', 'User admin Lihat data menu Data Pesan', '2015-12-04 02:52:01', 1, 0),
(2513, 'Tambah', 'Data Produk', '2015-12-04 02:52:10', 'User admin Tambah data menu Data Produk', '2015-12-04 02:52:10', 1, 0),
(2514, 'Lihat', 'Data Produk', '2015-12-04 02:52:11', 'User admin Lihat data menu Data Produk', '2015-12-04 02:52:11', 1, 0),
(2515, 'Lihat', 'Data Link Social', '2015-12-04 02:52:14', 'User admin Lihat data menu Data Link Social', '2015-12-04 02:52:14', 1, 0),
(2516, 'Lihat', 'Data Produk', '2015-12-04 02:52:17', 'User admin Lihat data menu Data Produk', '2015-12-04 02:52:17', 1, 0),
(2517, 'Lihat', 'Data Kategori', '2015-12-04 02:52:20', 'User admin Lihat data menu Data Kategori', '2015-12-04 02:52:20', 1, 0),
(2518, 'Lihat', 'Data User', '2015-12-04 02:52:28', 'User admin Lihat data menu Data User', '2015-12-04 02:52:28', 1, 0),
(2519, 'Lihat', 'Data Role', '2015-12-04 02:52:35', 'User admin Lihat data menu Data Role', '2015-12-04 02:52:35', 1, 0),
(2520, 'Tambah', 'Data Produk', '2015-12-04 02:52:45', 'User admin Tambah data menu Data Produk', '2015-12-04 02:52:45', 1, 0),
(2521, 'Lihat', 'Data Produk', '2015-12-04 02:52:46', 'User admin Lihat data menu Data Produk', '2015-12-04 02:52:46', 1, 0),
(2522, 'Tambah', 'Data Produk', '2015-12-04 02:53:47', 'User admin Tambah data menu Data Produk', '2015-12-04 02:53:47', 1, 0),
(2523, 'Lihat', 'Data Produk', '2015-12-04 02:53:48', 'User admin Lihat data menu Data Produk', '2015-12-04 02:53:48', 1, 0),
(2524, 'Tambah', 'Data Produk', '2015-12-04 02:54:33', 'User admin Tambah data menu Data Produk', '2015-12-04 02:54:33', 1, 0),
(2525, 'Lihat', 'Data Produk', '2015-12-04 02:54:34', 'User admin Lihat data menu Data Produk', '2015-12-04 02:54:34', 1, 0),
(2526, 'Lihat', 'Data Link Social', '2015-12-04 02:55:01', 'User admin Lihat data menu Data Link Social', '2015-12-04 02:55:01', 1, 0),
(2527, 'Tambah', 'Data Produk', '2015-12-04 02:56:51', 'User admin Tambah data menu Data Produk', '2015-12-04 02:56:51', 1, 0),
(2528, 'Lihat', 'Data Produk', '2015-12-04 02:56:52', 'User admin Lihat data menu Data Produk', '2015-12-04 02:56:52', 1, 0),
(2529, 'Tambah', 'Data Produk', '2015-12-04 02:57:32', 'User admin Tambah data menu Data Produk', '2015-12-04 02:57:32', 1, 0),
(2530, 'Lihat', 'Data Produk', '2015-12-04 02:57:33', 'User admin Lihat data menu Data Produk', '2015-12-04 02:57:33', 1, 0),
(2531, 'Tambah', 'Data Produk', '2015-12-04 02:58:46', 'User admin Tambah data menu Data Produk', '2015-12-04 02:58:46', 1, 0),
(2532, 'Lihat', 'Data Produk', '2015-12-04 02:58:47', 'User admin Lihat data menu Data Produk', '2015-12-04 02:58:47', 1, 0),
(2533, 'Tambah', 'Data Produk', '2015-12-04 02:59:24', 'User admin Tambah data menu Data Produk', '2015-12-04 02:59:24', 1, 0),
(2534, 'Lihat', 'Data Produk', '2015-12-04 02:59:25', 'User admin Lihat data menu Data Produk', '2015-12-04 02:59:25', 1, 0),
(2535, 'Tambah', 'Data Produk', '2015-12-04 03:00:35', 'User admin Tambah data menu Data Produk', '2015-12-04 03:00:35', 1, 0),
(2536, 'Lihat', 'Data Produk', '2015-12-04 03:00:37', 'User admin Lihat data menu Data Produk', '2015-12-04 03:00:37', 1, 0),
(2537, 'Tambah', 'Data Produk', '2015-12-04 03:00:55', 'User admin Tambah data menu Data Produk', '2015-12-04 03:00:55', 1, 0),
(2538, 'Lihat', 'Data Produk', '2015-12-04 03:00:56', 'User admin Lihat data menu Data Produk', '2015-12-04 03:00:56', 1, 0),
(2539, 'Tambah', 'Data Produk', '2015-12-04 03:01:39', 'User admin Tambah data menu Data Produk', '2015-12-04 03:01:39', 1, 0),
(2540, 'Lihat', 'Data Produk', '2015-12-04 03:01:40', 'User admin Lihat data menu Data Produk', '2015-12-04 03:01:40', 1, 0),
(2541, 'Tambah', 'Data Produk', '2015-12-04 03:02:01', 'User admin Tambah data menu Data Produk', '2015-12-04 03:02:01', 1, 0),
(2542, 'Lihat', 'Data Produk', '2015-12-04 03:02:02', 'User admin Lihat data menu Data Produk', '2015-12-04 03:02:02', 1, 0),
(2543, 'Tambah', 'Data Produk', '2015-12-04 03:03:43', 'User admin Tambah data menu Data Produk', '2015-12-04 03:03:43', 1, 0),
(2544, 'Lihat', 'Data Produk', '2015-12-04 03:03:44', 'User admin Lihat data menu Data Produk', '2015-12-04 03:03:44', 1, 0),
(2545, 'Tambah', 'Data Produk', '2015-12-04 03:04:05', 'User admin Tambah data menu Data Produk', '2015-12-04 03:04:05', 1, 0),
(2546, 'Lihat', 'Data Produk', '2015-12-04 03:04:06', 'User admin Lihat data menu Data Produk', '2015-12-04 03:04:06', 1, 0),
(2547, 'Tambah', 'Data Produk', '2015-12-04 03:05:56', 'User admin Tambah data menu Data Produk', '2015-12-04 03:05:56', 1, 0),
(2548, 'Lihat', 'Data Produk', '2015-12-04 03:05:58', 'User admin Lihat data menu Data Produk', '2015-12-04 03:05:58', 1, 0),
(2549, 'Lihat', 'Data Role', '2015-12-04 03:06:14', 'User admin Lihat data menu Data Role', '2015-12-04 03:06:14', 1, 0),
(2550, 'Tambah', 'Data Role', '2015-12-04 03:06:22', 'User admin Tambah data menu Data Role', '2015-12-04 03:06:22', 1, 0),
(2551, 'Lihat', 'Data Role', '2015-12-04 03:06:23', 'User admin Lihat data menu Data Role', '2015-12-04 03:06:23', 1, 0),
(2552, 'Lihat', 'Data User', '2015-12-04 03:06:57', 'User admin Lihat data menu Data User', '2015-12-04 03:06:57', 1, 0),
(2553, 'Tambah', 'Data Produk', '2015-12-04 03:07:17', 'User admin Tambah data menu Data Produk', '2015-12-04 03:07:17', 1, 0),
(2554, 'Lihat', 'Data Produk', '2015-12-04 03:07:19', 'User admin Lihat data menu Data Produk', '2015-12-04 03:07:19', 1, 0),
(2555, 'Lihat', 'Data User', '2015-12-04 03:07:41', 'User admin Lihat data menu Data User', '2015-12-04 03:07:41', 1, 0),
(2556, 'Tambah', 'Data Produk', '2015-12-04 03:07:50', 'User admin Tambah data menu Data Produk', '2015-12-04 03:07:50', 1, 0),
(2557, 'Lihat', 'Data Produk', '2015-12-04 03:07:51', 'User admin Lihat data menu Data Produk', '2015-12-04 03:07:51', 1, 0),
(2558, 'Tambah', 'Data Produk', '2015-12-04 03:08:16', 'User admin Tambah data menu Data Produk', '2015-12-04 03:08:16', 1, 0),
(2559, 'Lihat', 'Data Produk', '2015-12-04 03:08:17', 'User admin Lihat data menu Data Produk', '2015-12-04 03:08:17', 1, 0),
(2560, 'Tambah', 'Data Produk', '2015-12-04 03:08:38', 'User admin Tambah data menu Data Produk', '2015-12-04 03:08:38', 1, 0),
(2561, 'Lihat', 'Data Produk', '2015-12-04 03:08:39', 'User admin Lihat data menu Data Produk', '2015-12-04 03:08:39', 1, 0),
(2562, 'Tambah', 'Data Produk', '2015-12-04 03:09:10', 'User admin Tambah data menu Data Produk', '2015-12-04 03:09:10', 1, 0),
(2563, 'Lihat', 'Data Produk', '2015-12-04 03:09:11', 'User admin Lihat data menu Data Produk', '2015-12-04 03:09:11', 1, 0),
(2564, 'Lihat', 'Data User', '2015-12-04 03:09:28', 'User admin Lihat data menu Data User', '2015-12-04 03:09:28', 1, 0),
(2565, 'Tambah', 'Data Produk', '2015-12-04 03:09:37', 'User admin Tambah data menu Data Produk', '2015-12-04 03:09:37', 1, 0),
(2566, 'Lihat', 'Data Produk', '2015-12-04 03:09:38', 'User admin Lihat data menu Data Produk', '2015-12-04 03:09:38', 1, 0),
(2567, 'Tambah', 'Data Produk', '2015-12-04 03:10:03', 'User admin Tambah data menu Data Produk', '2015-12-04 03:10:03', 1, 0),
(2568, 'Lihat', 'Data Produk', '2015-12-04 03:10:04', 'User admin Lihat data menu Data Produk', '2015-12-04 03:10:04', 1, 0),
(2569, 'Tambah', 'Data Produk', '2015-12-04 03:11:06', 'User admin Tambah data menu Data Produk', '2015-12-04 03:11:06', 1, 0),
(2570, 'Lihat', 'Data Produk', '2015-12-04 03:11:07', 'User admin Lihat data menu Data Produk', '2015-12-04 03:11:07', 1, 0),
(2571, 'Tambah', 'Data Produk', '2015-12-04 03:11:56', 'User admin Tambah data menu Data Produk', '2015-12-04 03:11:56', 1, 0),
(2572, 'Lihat', 'Data Produk', '2015-12-04 03:11:58', 'User admin Lihat data menu Data Produk', '2015-12-04 03:11:58', 1, 0),
(2573, 'Tambah', 'Data Produk', '2015-12-04 03:12:19', 'User admin Tambah data menu Data Produk', '2015-12-04 03:12:19', 1, 0),
(2574, 'Lihat', 'Data Produk', '2015-12-04 03:12:21', 'User admin Lihat data menu Data Produk', '2015-12-04 03:12:21', 1, 0),
(2575, 'Tambah', 'Data Produk', '2015-12-04 03:12:40', 'User admin Tambah data menu Data Produk', '2015-12-04 03:12:40', 1, 0),
(2576, 'Lihat', 'Data Produk', '2015-12-04 03:12:41', 'User admin Lihat data menu Data Produk', '2015-12-04 03:12:41', 1, 0),
(2577, 'Tambah', 'Data Produk', '2015-12-04 03:14:16', 'User admin Tambah data menu Data Produk', '2015-12-04 03:14:16', 1, 0),
(2578, 'Lihat', 'Data Produk', '2015-12-04 03:14:17', 'User admin Lihat data menu Data Produk', '2015-12-04 03:14:17', 1, 0),
(2579, 'Lihat', 'Data User', '2015-12-04 03:14:37', 'User admin Lihat data menu Data User', '2015-12-04 03:14:37', 1, 0),
(2580, 'Tambah', 'Data Produk', '2015-12-04 03:14:43', 'User admin Tambah data menu Data Produk', '2015-12-04 03:14:43', 1, 0),
(2581, 'Lihat', 'Data Produk', '2015-12-04 03:14:44', 'User admin Lihat data menu Data Produk', '2015-12-04 03:14:44', 1, 0),
(2582, 'Lihat', 'Data User', '2015-12-04 03:15:19', 'User admin Lihat data menu Data User', '2015-12-04 03:15:19', 1, 0),
(2583, 'Tambah', 'Data User', '2015-12-04 03:15:32', 'User admin Tambah data menu Data User', '2015-12-04 03:15:32', 1, 0),
(2584, 'Lihat', 'Data User', '2015-12-04 03:15:33', 'User admin Lihat data menu Data User', '2015-12-04 03:15:33', 1, 0),
(2585, 'Tambah', 'Data Produk', '2015-12-04 03:15:43', 'User admin Tambah data menu Data Produk', '2015-12-04 03:15:43', 1, 0),
(2586, 'Lihat', 'Data Produk', '2015-12-04 03:15:44', 'User admin Lihat data menu Data Produk', '2015-12-04 03:15:44', 1, 0),
(2587, 'Tambah', 'Data Produk', '2015-12-04 03:16:12', 'User admin Tambah data menu Data Produk', '2015-12-04 03:16:12', 1, 0),
(2588, 'Lihat', 'Data Produk', '2015-12-04 03:16:13', 'User admin Lihat data menu Data Produk', '2015-12-04 03:16:13', 1, 0),
(2589, 'Tambah', 'Data Produk', '2015-12-04 03:16:47', 'User admin Tambah data menu Data Produk', '2015-12-04 03:16:47', 1, 0),
(2590, 'Lihat', 'Data Produk', '2015-12-04 03:16:48', 'User admin Lihat data menu Data Produk', '2015-12-04 03:16:48', 1, 0),
(2591, 'Tambah', 'Data Produk', '2015-12-04 03:20:01', 'User admin Tambah data menu Data Produk', '2015-12-04 03:20:01', 1, 0),
(2592, 'Lihat', 'Data Produk', '2015-12-04 03:20:03', 'User admin Lihat data menu Data Produk', '2015-12-04 03:20:03', 1, 0),
(2593, 'Tambah', 'Data Produk', '2015-12-04 03:20:23', 'User admin Tambah data menu Data Produk', '2015-12-04 03:20:23', 1, 0),
(2594, 'Lihat', 'Data Produk', '2015-12-04 03:20:24', 'User admin Lihat data menu Data Produk', '2015-12-04 03:20:24', 1, 0),
(2595, 'Tambah', 'Data Produk', '2015-12-04 03:20:38', 'User admin Tambah data menu Data Produk', '2015-12-04 03:20:38', 1, 0),
(2596, 'Lihat', 'Data Produk', '2015-12-04 03:20:39', 'User admin Lihat data menu Data Produk', '2015-12-04 03:20:39', 1, 0),
(2597, 'Tambah', 'Data Produk', '2015-12-04 03:20:53', 'User admin Tambah data menu Data Produk', '2015-12-04 03:20:53', 1, 0),
(2598, 'Lihat', 'Data Produk', '2015-12-04 03:20:55', 'User admin Lihat data menu Data Produk', '2015-12-04 03:20:55', 1, 0),
(2599, 'Lihat', 'Data User', '2015-12-04 03:24:31', 'User admin Lihat data menu Data User', '2015-12-04 03:24:31', 1, 0),
(2600, 'Lihat', 'Data User', '2015-12-04 03:24:58', 'User admin Lihat data menu Data User', '2015-12-04 03:24:58', 1, 0),
(2601, 'Lihat', 'Data Role', '2015-12-04 03:25:58', 'User admin Lihat data menu Data Role', '2015-12-04 03:25:58', 1, 0),
(2602, 'Lihat', 'Data User', '2015-12-04 03:26:23', 'User admin Lihat data menu Data User', '2015-12-04 03:26:23', 1, 0),
(2603, 'Lihat', 'Data User', '2015-12-04 03:26:33', 'User admin Lihat data menu Data User', '2015-12-04 03:26:33', 1, 0),
(2604, 'Lihat', 'Data Role', '2015-12-04 03:30:07', 'User admin Lihat data menu Data Role', '2015-12-04 03:30:07', 1, 0),
(2605, 'Hapus', 'Data Role', '2015-12-04 03:30:42', 'User admin Hapus data menu Data Role', '2015-12-04 03:30:42', 1, 0),
(2606, 'Lihat', 'Data Role', '2015-12-04 03:30:43', 'User admin Lihat data menu Data Role', '2015-12-04 03:30:43', 1, 0),
(2607, 'Lihat', 'Data User', '2015-12-04 03:31:10', 'User admin Lihat data menu Data User', '2015-12-04 03:31:10', 1, 0),
(2608, 'Hapus', 'Data User', '2015-12-04 03:31:21', 'User admin Hapus data menu Data User', '2015-12-04 03:31:21', 1, 0),
(2609, 'Lihat', 'Data Role', '2015-12-04 03:32:07', 'User dion Lihat data menu Data Role', '2015-12-04 03:32:07', 12, 0),
(2610, 'Hapus', 'Data User', '2015-12-04 03:34:14', 'User admin Hapus data menu Data User', '2015-12-04 03:34:14', 1, 0),
(2611, 'Lihat', 'Data User', '2015-12-04 03:34:15', 'User admin Lihat data menu Data User', '2015-12-04 03:34:15', 1, 0),
(2612, 'Lihat', 'Data User', '2015-12-04 03:37:40', 'User admin Lihat data menu Data User', '2015-12-04 03:37:40', 1, 0),
(2613, 'Hapus', 'Data User', '2015-12-04 03:38:08', 'User admin Hapus data menu Data User', '2015-12-04 03:38:08', 1, 0),
(2614, 'Lihat', 'Data User', '2015-12-04 03:38:09', 'User admin Lihat data menu Data User', '2015-12-04 03:38:09', 1, 0),
(2615, 'Lihat', 'Data User', '2015-12-04 03:38:54', 'User admin Lihat data menu Data User', '2015-12-04 03:38:54', 1, 0),
(2616, 'Lihat', 'Data User', '2015-12-04 03:38:57', 'User admin Lihat data menu Data User', '2015-12-04 03:38:57', 1, 0),
(2617, 'Tambah', 'Data User', '2015-12-04 03:39:11', 'User admin Tambah data menu Data User', '2015-12-04 03:39:11', 1, 0),
(2618, 'Lihat', 'Data User', '2015-12-04 03:39:12', 'User admin Lihat data menu Data User', '2015-12-04 03:39:12', 1, 0),
(2619, 'Lihat', 'Data Role', '2015-12-06 20:09:39', 'User admin Lihat data menu Data Role', '2015-12-06 20:09:39', 1, 0),
(2620, 'Lihat', 'Data Role', '2015-12-06 20:10:20', 'User admin Lihat data menu Data Role', '2015-12-06 20:10:20', 1, 0),
(2621, 'Lihat', 'Data Pesan', '2015-12-06 20:15:53', 'User admin Lihat data menu Data Pesan', '2015-12-06 20:15:53', 1, 0),
(2622, 'Lihat', 'Data Kategori', '2015-12-15 22:37:43', 'User admin Lihat data menu Data Kategori', '2015-12-15 22:37:43', 1, 0),
(2623, 'Lihat', 'Data Produk', '2015-12-15 22:38:08', 'User admin Lihat data menu Data Produk', '2015-12-15 22:38:08', 1, 0),
(2624, 'Tambah', 'Data Produk', '2015-12-15 22:55:05', 'User admin Tambah data menu Data Produk', '2015-12-15 22:55:05', 1, 0),
(2625, 'Lihat', 'Data Produk', '2015-12-15 22:55:06', 'User admin Lihat data menu Data Produk', '2015-12-15 22:55:06', 1, 0),
(2626, 'Lihat', 'Data Produk', '2015-12-16 01:15:00', 'User admin Lihat data menu Data Produk', '2015-12-16 01:15:00', 1, 0),
(2627, 'Lihat', 'Data Kategori', '2015-12-17 20:39:45', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:39:45', 1, 0),
(2628, 'Lihat', 'Data Kategori', '2015-12-17 20:41:37', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:41:37', 1, 0),
(2629, 'Lihat', 'Data Kategori', '2015-12-17 20:41:53', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:41:53', 1, 0),
(2630, 'Lihat', 'Data Kategori', '2015-12-17 20:42:02', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:42:02', 1, 0),
(2631, 'Lihat', 'Data Kategori', '2015-12-17 20:46:12', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:46:12', 1, 0),
(2632, 'Lihat', 'Data Kategori', '2015-12-17 20:46:26', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:46:26', 1, 0),
(2633, 'Lihat', 'Data Kategori', '2015-12-17 20:46:54', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:46:54', 1, 0),
(2634, 'Lihat', 'Data Kategori', '2015-12-17 20:47:11', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:47:11', 1, 0),
(2635, 'Lihat', 'Data Kategori', '2015-12-17 20:47:53', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:47:53', 1, 0),
(2636, 'Lihat', 'Data Kategori', '2015-12-17 20:49:26', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:49:26', 1, 0),
(2637, 'Lihat', 'Data Produk', '2015-12-17 20:49:50', 'User admin Lihat data menu Data Produk', '2015-12-17 20:49:50', 1, 0),
(2638, 'Lihat', 'Data Produk', '2015-12-17 20:51:10', 'User admin Lihat data menu Data Produk', '2015-12-17 20:51:10', 1, 0),
(2639, 'Lihat', 'Data Kategori', '2015-12-17 20:51:23', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:51:23', 1, 0),
(2640, 'Lihat', 'Data Kategori', '2015-12-17 20:51:51', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:51:51', 1, 0),
(2641, 'Lihat', 'Data Kategori', '2015-12-17 20:52:25', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:52:25', 1, 0),
(2642, 'Lihat', 'Data Kategori', '2015-12-17 20:52:47', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:52:47', 1, 0),
(2643, 'Lihat', 'Data Kategori', '2015-12-17 20:55:57', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:55:57', 1, 0),
(2644, 'Lihat', 'Data Kategori', '2015-12-17 20:56:13', 'User admin Lihat data menu Data Kategori', '2015-12-17 20:56:13', 1, 0),
(2645, 'Lihat', 'Data Kategori', '2015-12-17 21:02:56', 'User admin Lihat data menu Data Kategori', '2015-12-17 21:02:56', 1, 0),
(2646, 'Tambah', 'Data Kategori', '2015-12-17 21:04:13', 'User admin Tambah data menu Data Kategori', '2015-12-17 21:04:13', 1, 0),
(2647, 'Tambah', 'Data Kategori', '2015-12-17 21:05:38', 'User admin Tambah data menu Data Kategori', '2015-12-17 21:05:38', 1, 0),
(2648, 'Tambah', 'Data Kategori', '2015-12-17 21:06:27', 'User admin Tambah data menu Data Kategori', '2015-12-17 21:06:27', 1, 0),
(2649, 'Tambah', 'Data Kategori', '2015-12-17 21:07:50', 'User admin Tambah data menu Data Kategori', '2015-12-17 21:07:50', 1, 0),
(2650, 'Tambah', 'Data Kategori', '2015-12-17 21:09:35', 'User admin Tambah data menu Data Kategori', '2015-12-17 21:09:35', 1, 0),
(2651, 'Lihat', 'Data Kategori', '2015-12-17 21:09:37', 'User admin Lihat data menu Data Kategori', '2015-12-17 21:09:37', 1, 0),
(2652, 'Lihat', 'Data Produk', '2015-12-17 21:09:48', 'User admin Lihat data menu Data Produk', '2015-12-17 21:09:48', 1, 0),
(2653, 'Lihat', 'Data Produk', '2015-12-17 21:10:01', 'User admin Lihat data menu Data Produk', '2015-12-17 21:10:01', 1, 0),
(2654, 'Lihat', 'Data Produk', '2015-12-17 21:10:14', 'User admin Lihat data menu Data Produk', '2015-12-17 21:10:14', 1, 0),
(2655, 'Lihat', 'Data Produk', '2015-12-17 21:12:37', 'User admin Lihat data menu Data Produk', '2015-12-17 21:12:37', 1, 0),
(2656, 'Tambah', 'Data Produk', '2015-12-17 21:13:45', 'User admin Tambah data menu Data Produk', '2015-12-17 21:13:45', 1, 0),
(2657, 'Lihat', 'Data Produk', '2015-12-17 21:13:46', 'User admin Lihat data menu Data Produk', '2015-12-17 21:13:46', 1, 0),
(2658, 'Lihat', 'Data Produk', '2015-12-18 03:52:38', 'User admin Lihat data menu Data Produk', '2015-12-18 03:52:38', 1, 0),
(2659, 'Lihat', 'Data Link Social', '2015-12-18 03:53:00', 'User admin Lihat data menu Data Link Social', '2015-12-18 03:53:00', 1, 0),
(2660, 'Lihat', 'Data Produk', '2015-12-20 20:29:37', 'User admin Lihat data menu Data Produk', '2015-12-20 20:29:37', 1, 0),
(2661, 'Lihat', 'Data Produk', '2015-12-20 20:29:56', 'User admin Lihat data menu Data Produk', '2015-12-20 20:29:56', 1, 0),
(2662, 'Lihat', 'Data Produk', '2015-12-20 20:30:05', 'User admin Lihat data menu Data Produk', '2015-12-20 20:30:05', 1, 0),
(2663, 'Lihat', 'Data Produk', '2015-12-20 20:30:43', 'User admin Lihat data menu Data Produk', '2015-12-20 20:30:43', 1, 0),
(2664, 'Lihat', 'Data Produk', '2015-12-20 20:31:01', 'User admin Lihat data menu Data Produk', '2015-12-20 20:31:01', 1, 0),
(2665, 'Lihat', 'Data Produk', '2015-12-20 20:31:23', 'User admin Lihat data menu Data Produk', '2015-12-20 20:31:23', 1, 0),
(2666, 'Lihat', 'Data Produk', '2015-12-20 20:32:59', 'User admin Lihat data menu Data Produk', '2015-12-20 20:32:59', 1, 0),
(2667, 'Lihat', 'Data Produk', '2015-12-20 20:33:11', 'User admin Lihat data menu Data Produk', '2015-12-20 20:33:11', 1, 0),
(2668, 'Lihat', 'Data Produk', '2015-12-20 20:33:27', 'User admin Lihat data menu Data Produk', '2015-12-20 20:33:27', 1, 0),
(2669, 'Lihat', 'Data Produk', '2015-12-20 20:35:29', 'User admin Lihat data menu Data Produk', '2015-12-20 20:35:29', 1, 0),
(2670, 'Lihat', 'Data Produk', '2015-12-20 20:52:26', 'User admin Lihat data menu Data Produk', '2015-12-20 20:52:26', 1, 0),
(2671, 'Lihat', 'Data Link Social', '2015-12-20 20:52:30', 'User admin Lihat data menu Data Link Social', '2015-12-20 20:52:30', 1, 0),
(2672, 'Ubah', 'Data Link Social', '2015-12-20 20:52:47', 'User admin Ubah data menu Data Link Social', '2015-12-20 20:52:47', 1, 0),
(2673, 'Lihat', 'Data Link Social', '2015-12-20 20:52:48', 'User admin Lihat data menu Data Link Social', '2015-12-20 20:52:48', 1, 0),
(2674, 'Lihat', 'Data User', '2015-12-20 20:53:08', 'User admin Lihat data menu Data User', '2015-12-20 20:53:08', 1, 0),
(2675, 'Lihat', 'Data Produk', '2015-12-20 20:53:12', 'User admin Lihat data menu Data Produk', '2015-12-20 20:53:12', 1, 0),
(2676, 'Lihat', 'Data Produk', '2015-12-20 20:53:29', 'User admin Lihat data menu Data Produk', '2015-12-20 20:53:29', 1, 0),
(2677, 'Lihat', 'Data Produk', '2015-12-20 20:55:07', 'User admin Lihat data menu Data Produk', '2015-12-20 20:55:07', 1, 0),
(2678, 'Lihat', 'Data Produk', '2015-12-20 21:02:58', 'User admin Lihat data menu Data Produk', '2015-12-20 21:02:58', 1, 0),
(2679, 'Ubah', 'Data Produk', '2015-12-20 21:05:45', 'User admin Ubah data menu Data Produk', '2015-12-20 21:05:45', 1, 0),
(2680, 'Lihat', 'Data Produk', '2015-12-20 21:05:46', 'User admin Lihat data menu Data Produk', '2015-12-20 21:05:46', 1, 0),
(2681, 'Ubah', 'Data Produk', '2015-12-20 21:05:59', 'User admin Ubah data menu Data Produk', '2015-12-20 21:05:59', 1, 0),
(2682, 'Lihat', 'Data Produk', '2015-12-20 21:06:01', 'User admin Lihat data menu Data Produk', '2015-12-20 21:06:01', 1, 0),
(2683, 'Lihat', 'Data Produk', '2015-12-20 21:07:13', 'User admin Lihat data menu Data Produk', '2015-12-20 21:07:13', 1, 0),
(2684, 'Lihat', 'Data Produk', '2015-12-20 21:07:33', 'User admin Lihat data menu Data Produk', '2015-12-20 21:07:33', 1, 0),
(2685, 'Ubah', 'Data Produk', '2015-12-20 21:07:52', 'User admin Ubah data menu Data Produk', '2015-12-20 21:07:52', 1, 0),
(2686, 'Lihat', 'Data Produk', '2015-12-20 21:08:04', 'User admin Lihat data menu Data Produk', '2015-12-20 21:08:04', 1, 0),
(2687, 'Lihat', 'Data Produk', '2015-12-20 21:09:36', 'User admin Lihat data menu Data Produk', '2015-12-20 21:09:36', 1, 0),
(2688, 'Lihat', 'Data Produk', '2015-12-20 21:11:36', 'User admin Lihat data menu Data Produk', '2015-12-20 21:11:36', 1, 0),
(2689, 'Ubah', 'Data Produk', '2015-12-20 21:11:48', 'User admin Ubah data menu Data Produk', '2015-12-20 21:11:48', 1, 0),
(2690, 'Lihat', 'Data Produk', '2015-12-20 21:12:35', 'User admin Lihat data menu Data Produk', '2015-12-20 21:12:35', 1, 0),
(2691, 'Lihat', 'Data Produk', '2015-12-20 21:12:51', 'User admin Lihat data menu Data Produk', '2015-12-20 21:12:51', 1, 0),
(2692, 'Ubah', 'Data Produk', '2015-12-20 21:13:01', 'User admin Ubah data menu Data Produk', '2015-12-20 21:13:01', 1, 0),
(2693, 'Lihat', 'Data Produk', '2015-12-20 21:13:32', 'User admin Lihat data menu Data Produk', '2015-12-20 21:13:32', 1, 0),
(2694, 'Ubah', 'Data Produk', '2015-12-20 21:13:41', 'User admin Ubah data menu Data Produk', '2015-12-20 21:13:41', 1, 0),
(2695, 'Lihat', 'Data Produk', '2015-12-20 21:14:40', 'User admin Lihat data menu Data Produk', '2015-12-20 21:14:40', 1, 0),
(2696, 'Ubah', 'Data Produk', '2015-12-20 21:15:01', 'User admin Ubah data menu Data Produk', '2015-12-20 21:15:01', 1, 0),
(2697, 'Lihat', 'Data Produk', '2015-12-20 21:15:13', 'User admin Lihat data menu Data Produk', '2015-12-20 21:15:13', 1, 0),
(2698, 'Ubah', 'Data Produk', '2015-12-20 21:15:33', 'User admin Ubah data menu Data Produk', '2015-12-20 21:15:33', 1, 0),
(2699, 'Lihat', 'Data Produk', '2015-12-20 21:16:36', 'User admin Lihat data menu Data Produk', '2015-12-20 21:16:36', 1, 0),
(2700, 'Ubah', 'Data Produk', '2015-12-20 21:16:57', 'User admin Ubah data menu Data Produk', '2015-12-20 21:16:57', 1, 0),
(2701, 'Lihat', 'Data Produk', '2015-12-20 21:17:54', 'User admin Lihat data menu Data Produk', '2015-12-20 21:17:54', 1, 0),
(2702, 'Ubah', 'Data Produk', '2015-12-20 21:18:15', 'User admin Ubah data menu Data Produk', '2015-12-20 21:18:15', 1, 0),
(2703, 'Ubah', 'Data Produk', '2015-12-20 21:18:55', 'User admin Ubah data menu Data Produk', '2015-12-20 21:18:55', 1, 0),
(2704, 'Lihat', 'Data Produk', '2015-12-20 21:19:05', 'User admin Lihat data menu Data Produk', '2015-12-20 21:19:05', 1, 0),
(2705, 'Ubah', 'Data Produk', '2015-12-20 21:19:21', 'User admin Ubah data menu Data Produk', '2015-12-20 21:19:21', 1, 0),
(2706, 'Ubah', 'Data Produk', '2015-12-20 21:20:09', 'User admin Ubah data menu Data Produk', '2015-12-20 21:20:09', 1, 0),
(2707, 'Lihat', 'Data Produk', '2015-12-20 21:20:35', 'User admin Lihat data menu Data Produk', '2015-12-20 21:20:35', 1, 0),
(2708, 'Ubah', 'Data Produk', '2015-12-20 21:20:49', 'User admin Ubah data menu Data Produk', '2015-12-20 21:20:49', 1, 0),
(2709, 'Lihat', 'Data Produk', '2015-12-20 21:21:20', 'User admin Lihat data menu Data Produk', '2015-12-20 21:21:20', 1, 0),
(2710, 'Ubah', 'Data Produk', '2015-12-20 21:21:37', 'User admin Ubah data menu Data Produk', '2015-12-20 21:21:37', 1, 0),
(2711, 'Lihat', 'Data Produk', '2015-12-20 21:22:02', 'User admin Lihat data menu Data Produk', '2015-12-20 21:22:02', 1, 0),
(2712, 'Ubah', 'Data Produk', '2015-12-20 21:22:14', 'User admin Ubah data menu Data Produk', '2015-12-20 21:22:14', 1, 0),
(2713, 'Lihat', 'Data Produk', '2015-12-20 21:24:15', 'User admin Lihat data menu Data Produk', '2015-12-20 21:24:15', 1, 0),
(2714, 'Ubah', 'Data Produk', '2015-12-20 21:24:24', 'User admin Ubah data menu Data Produk', '2015-12-20 21:24:24', 1, 0),
(2715, 'Lihat', 'Data Produk', '2015-12-20 21:25:27', 'User admin Lihat data menu Data Produk', '2015-12-20 21:25:27', 1, 0),
(2716, 'Ubah', 'Data Produk', '2015-12-20 21:25:39', 'User admin Ubah data menu Data Produk', '2015-12-20 21:25:39', 1, 0),
(2717, 'Lihat', 'Data Produk', '2015-12-20 21:25:40', 'User admin Lihat data menu Data Produk', '2015-12-20 21:25:40', 1, 0),
(2718, 'Ubah', 'Data Produk', '2015-12-20 21:26:00', 'User admin Ubah data menu Data Produk', '2015-12-20 21:26:00', 1, 0),
(2719, 'Lihat', 'Data Produk', '2015-12-20 21:26:01', 'User admin Lihat data menu Data Produk', '2015-12-20 21:26:01', 1, 0),
(2720, 'Lihat', 'Data Produk', '2015-12-20 21:26:16', 'User admin Lihat data menu Data Produk', '2015-12-20 21:26:16', 1, 0),
(2721, 'Lihat', 'Data Kategori', '2015-12-20 22:29:14', 'User admin Lihat data menu Data Kategori', '2015-12-20 22:29:14', 1, 0),
(2722, 'Lihat', 'Data Produk', '2015-12-20 22:29:24', 'User admin Lihat data menu Data Produk', '2015-12-20 22:29:24', 1, 0),
(2723, 'Lihat', 'Data Produk', '2015-12-20 22:29:36', 'User admin Lihat data menu Data Produk', '2015-12-20 22:29:36', 1, 0),
(2724, 'Lihat', 'Data Role', '2015-12-20 22:37:04', 'User admin Lihat data menu Data Role', '2015-12-20 22:37:04', 1, 0),
(2725, 'Lihat', 'Data Role', '2015-12-20 22:37:20', 'User admin Lihat data menu Data Role', '2015-12-20 22:37:20', 1, 0),
(2726, 'Lihat', 'Data Role', '2015-12-20 22:38:26', 'User admin Lihat data menu Data Role', '2015-12-20 22:38:26', 1, 0),
(2727, 'Lihat', 'Data Role', '2015-12-20 22:43:32', 'User admin Lihat data menu Data Role', '2015-12-20 22:43:32', 1, 0),
(2728, 'Lihat', 'Data Role', '2015-12-20 22:45:28', 'User admin Lihat data menu Data Role', '2015-12-20 22:45:28', 1, 0),
(2729, 'Lihat', 'Data Role', '2015-12-20 22:45:33', 'User admin Lihat data menu Data Role', '2015-12-20 22:45:33', 1, 0),
(2730, 'Lihat', 'Data User', '2016-11-29 01:12:51', 'User admin Lihat data menu Data User', '2016-11-29 01:12:51', 1, 0),
(2731, 'Tambah', 'Data User', '2016-11-29 01:13:41', 'User admin Tambah data menu Data User', '2016-11-29 01:13:41', 1, 0),
(2732, 'Lihat', 'Data User', '2016-11-29 01:13:42', 'User admin Lihat data menu Data User', '2016-11-29 01:13:42', 1, 0),
(2733, 'Lihat', 'Data Role', '2016-11-29 01:13:47', 'User admin Lihat data menu Data Role', '2016-11-29 01:13:47', 1, 0),
(2734, 'Lihat', 'Data Kategori', '2016-11-29 01:13:54', 'User admin Lihat data menu Data Kategori', '2016-11-29 01:13:54', 1, 0),
(2735, 'Lihat', 'Data Link Social', '2016-11-29 01:14:01', 'User admin Lihat data menu Data Link Social', '2016-11-29 01:14:01', 1, 0),
(2736, 'Lihat', 'Data Produk', '2018-01-15 21:23:59', 'User admin Lihat data menu Data Produk', '2018-01-15 21:23:59', 1, 0),
(2737, 'Lihat', 'Data Produk', '2018-09-26 09:11:14', 'User admin Lihat data menu Data Produk', '2018-09-26 09:11:14', 1, 0),
(2738, 'Lihat', 'Data Role', '2018-09-26 09:11:24', 'User admin Lihat data menu Data Role', '2018-09-26 09:11:24', 1, 0),
(2739, 'Lihat', 'Data User', '2018-09-26 09:11:28', 'User admin Lihat data menu Data User', '2018-09-26 09:11:28', 1, 0),
(2740, 'Lihat', 'Data Pesan', '2018-09-26 09:15:27', 'User admin Lihat data menu Data Pesan', '2018-09-26 09:15:27', 1, 0),
(2741, 'Lihat', 'Data Pesan', '2018-09-26 09:17:09', 'User admin Lihat data menu Data Pesan', '2018-09-26 09:17:09', 1, 0),
(2742, 'Lihat', 'Data User', '2018-09-26 09:20:56', 'User admin Lihat data menu Data User', '2018-09-26 09:20:56', 1, 0),
(2743, 'Lihat', 'Data User', '2018-09-26 09:36:38', 'User admin Lihat data menu Data User', '2018-09-26 09:36:38', 1, 0),
(2744, 'Lihat', 'Data User', '2018-09-26 09:36:58', 'User admin Lihat data menu Data User', '2018-09-26 09:36:58', 1, 0),
(2745, 'Lihat', 'Data User', '2018-09-26 09:38:52', 'User admin Lihat data menu Data User', '2018-09-26 09:38:52', 1, 0),
(2746, 'Lihat', 'How to Order', '2018-09-26 09:39:22', 'User admin Lihat data menu How to Order', '2018-09-26 09:39:22', 1, 0),
(2747, 'Lihat', 'How to Order', '2018-09-26 09:39:41', 'User admin Lihat data menu How to Order', '2018-09-26 09:39:41', 1, 0),
(2748, 'Lihat', 'How to Order', '2018-09-26 09:39:55', 'User admin Lihat data menu How to Order', '2018-09-26 09:39:55', 1, 0),
(2749, 'Lihat', 'How to Order', '2018-09-26 09:40:47', 'User admin Lihat data menu How to Order', '2018-09-26 09:40:47', 1, 0),
(2750, 'Lihat', 'How to Order', '2018-09-26 09:41:12', 'User admin Lihat data menu How to Order', '2018-09-26 09:41:12', 1, 0),
(2751, 'Tambah', 'How to Order', '2018-09-26 09:41:21', 'User admin Tambah data menu How to Order', '2018-09-26 09:41:21', 1, 0),
(2752, 'Lihat', 'How to Order', '2018-09-26 09:41:21', 'User admin Lihat data menu How to Order', '2018-09-26 09:41:21', 1, 0),
(2753, 'Edit', 'How to Order', '2018-09-26 09:41:27', 'User admin Edit data menu How to Order', '2018-09-26 09:41:27', 1, 0),
(2754, 'Lihat', 'How to Order', '2018-09-26 09:41:27', 'User admin Lihat data menu How to Order', '2018-09-26 09:41:27', 1, 0),
(2755, 'Hapus', 'How to Order', '2018-09-26 09:41:32', 'User admin Hapus data menu How to Order', '2018-09-26 09:41:32', 1, 0),
(2756, 'Lihat', 'How to Order', '2018-09-26 09:43:45', 'User admin Lihat data menu How to Order', '2018-09-26 09:43:45', 1, 0),
(2757, 'Hapus', 'How to Order', '2018-09-26 09:43:49', 'User admin Hapus data menu How to Order', '2018-09-26 09:43:49', 1, 0),
(2758, 'Lihat', 'How to Order', '2018-09-26 09:44:57', 'User admin Lihat data menu How to Order', '2018-09-26 09:44:57', 1, 0),
(2759, 'Hapus', 'How to Order', '2018-09-26 09:45:02', 'User admin Hapus data menu How to Order', '2018-09-26 09:45:02', 1, 0),
(2760, 'Lihat', 'How to Order', '2018-09-26 09:45:15', 'User admin Lihat data menu How to Order', '2018-09-26 09:45:15', 1, 0),
(2761, 'Lihat', 'How to Order', '2018-09-26 09:46:17', 'User admin Lihat data menu How to Order', '2018-09-26 09:46:17', 1, 0),
(2762, 'Lihat', 'How to Order', '2018-09-26 09:47:29', 'User admin Lihat data menu How to Order', '2018-09-26 09:47:29', 1, 0),
(2763, 'Hapus', 'How to Order', '2018-09-26 09:47:33', 'User admin Hapus data menu How to Order', '2018-09-26 09:47:33', 1, 0),
(2764, 'Lihat', 'How to Order', '2018-09-26 09:49:49', 'User admin Lihat data menu How to Order', '2018-09-26 09:49:49', 1, 0),
(2765, 'Hapus', 'How to Order', '2018-09-26 09:49:52', 'User admin Hapus data menu How to Order', '2018-09-26 09:49:52', 1, 0),
(2766, 'Lihat', 'How to Order', '2018-09-26 09:51:07', 'User admin Lihat data menu How to Order', '2018-09-26 09:51:07', 1, 0),
(2767, 'Hapus', 'How to Order', '2018-09-26 09:51:10', 'User admin Hapus data menu How to Order', '2018-09-26 09:51:10', 1, 0),
(2768, 'Lihat', 'How to Order', '2018-09-26 09:51:30', 'User admin Lihat data menu How to Order', '2018-09-26 09:51:30', 1, 0),
(2769, 'Lihat', 'How to Order', '2018-09-26 09:54:13', 'User admin Lihat data menu How to Order', '2018-09-26 09:54:13', 1, 0),
(2770, 'Lihat', 'How to Order', '2018-09-26 09:54:23', 'User admin Lihat data menu How to Order', '2018-09-26 09:54:23', 1, 0),
(2771, 'Lihat', 'How to Order', '2018-09-26 09:54:26', 'User admin Lihat data menu How to Order', '2018-09-26 09:54:26', 1, 0),
(2772, 'Lihat', 'Data User', '2018-09-26 09:54:29', 'User admin Lihat data menu Data User', '2018-09-26 09:54:29', 1, 0),
(2773, 'Lihat', 'Data User', '2018-09-26 09:54:46', 'User admin Lihat data menu Data User', '2018-09-26 09:54:46', 1, 0),
(2774, 'Lihat', 'Data User', '2018-09-26 09:55:22', 'User admin Lihat data menu Data User', '2018-09-26 09:55:22', 1, 0),
(2775, 'Lihat', 'How to Order', '2018-09-26 09:55:53', 'User admin Lihat data menu How to Order', '2018-09-26 09:55:53', 1, 0),
(2776, 'Lihat', 'How to Order', '2018-09-26 09:57:00', 'User admin Lihat data menu How to Order', '2018-09-26 09:57:00', 1, 0),
(2777, 'Lihat', 'How to Order', '2018-09-27 10:03:48', 'User admin Lihat data menu How to Order', '2018-09-27 10:03:48', 1, 0),
(2778, 'Lihat', 'How to Order', '2018-09-27 10:05:24', 'User admin Lihat data menu How to Order', '2018-09-27 10:05:24', 1, 0),
(2779, 'Lihat', 'How to Order', '2018-09-27 10:07:40', 'User admin Lihat data menu How to Order', '2018-09-27 10:07:40', 1, 0),
(2780, 'Tambah', 'How to Order', '2018-09-27 10:08:05', 'User admin Tambah data menu How to Order', '2018-09-27 10:08:05', 1, 0),
(2781, 'Lihat', 'How to Order', '2018-09-27 10:08:06', 'User admin Lihat data menu How to Order', '2018-09-27 10:08:06', 1, 0),
(2782, 'Lihat', 'How to Order', '2018-09-27 10:32:13', 'User admin Lihat data menu How to Order', '2018-09-27 10:32:13', 1, 0),
(2783, 'Lihat', 'FAQ', '2018-09-27 10:32:23', 'User admin Lihat data menu FAQ', '2018-09-27 10:32:23', 1, 0),
(2784, 'Tambah', 'FAQ', '2018-09-27 10:32:29', 'User admin Tambah data menu FAQ', '2018-09-27 10:32:29', 1, 0),
(2785, 'Lihat', 'FAQ', '2018-09-27 10:32:29', 'User admin Lihat data menu FAQ', '2018-09-27 10:32:29', 1, 0),
(2786, 'Lihat', 'FAQ', '2018-09-27 10:32:58', 'User admin Lihat data menu FAQ', '2018-09-27 10:32:58', 1, 0),
(2787, 'Edit', 'FAQ', '2018-09-27 10:33:09', 'User admin Edit data menu FAQ', '2018-09-27 10:33:09', 1, 0),
(2788, 'Lihat', 'FAQ', '2018-09-27 10:33:10', 'User admin Lihat data menu FAQ', '2018-09-27 10:33:10', 1, 0),
(2789, 'Hapus', 'FAQ', '2018-09-27 10:33:15', 'User admin Hapus data menu FAQ', '2018-09-27 10:33:15', 1, 0),
(2790, 'Lihat', 'FAQ', '2018-09-27 10:33:17', 'User admin Lihat data menu FAQ', '2018-09-27 10:33:17', 1, 0),
(2791, 'Lihat', 'Data Link Social', '2018-09-27 10:34:28', 'User admin Lihat data menu Data Link Social', '2018-09-27 10:34:28', 1, 0),
(2792, 'Lihat', 'Data Link Social', '2018-09-27 10:34:35', 'User admin Lihat data menu Data Link Social', '2018-09-27 10:34:35', 1, 0),
(2793, 'Lihat', 'Data Link Social', '2018-09-27 10:40:36', 'User admin Lihat data menu Data Link Social', '2018-09-27 10:40:36', 1, 0),
(2794, 'Lihat', 'Testimonial', '2018-09-27 10:40:40', 'User admin Lihat data menu Testimonial', '2018-09-27 10:40:40', 1, 0),
(2795, 'Lihat', 'Testimonial', '2018-09-27 10:41:05', 'User admin Lihat data menu Testimonial', '2018-09-27 10:41:05', 1, 0),
(2796, 'Tambah', 'Testimonial', '2018-09-27 10:41:09', 'User admin Tambah data menu Testimonial', '2018-09-27 10:41:09', 1, 0),
(2797, 'Lihat', 'Testimonial', '2018-09-27 10:41:10', 'User admin Lihat data menu Testimonial', '2018-09-27 10:41:10', 1, 0),
(2798, 'Edit', 'Testimonial', '2018-09-27 10:41:17', 'User admin Edit data menu Testimonial', '2018-09-27 10:41:17', 1, 0),
(2799, 'Lihat', 'Testimonial', '2018-09-27 10:41:17', 'User admin Lihat data menu Testimonial', '2018-09-27 10:41:17', 1, 0),
(2800, 'Hapus', 'Testimonial', '2018-09-27 10:41:22', 'User admin Hapus data menu Testimonial', '2018-09-27 10:41:22', 1, 0),
(2801, 'Lihat', 'Testimonial', '2018-09-27 10:41:22', 'User admin Lihat data menu Testimonial', '2018-09-27 10:41:22', 1, 0),
(2802, 'Lihat', 'Testimonial', '2018-09-27 10:56:45', 'User admin Lihat data menu Testimonial', '2018-09-27 10:56:45', 1, 0),
(2803, 'Lihat', 'Testimonial', '2018-09-27 11:03:11', 'User admin Lihat data menu Testimonial', '2018-09-27 11:03:11', 1, 0),
(2804, 'Lihat', 'Testimonial', '2018-09-27 11:03:23', 'User admin Lihat data menu Testimonial', '2018-09-27 11:03:23', 1, 0),
(2805, 'Lihat', 'Faq', '2018-09-27 11:03:27', 'User admin Lihat data menu Faq', '2018-09-27 11:03:27', 1, 0),
(2806, 'Lihat', 'Faq', '2018-09-27 11:03:33', 'User admin Lihat data menu Faq', '2018-09-27 11:03:33', 1, 0),
(2807, 'Lihat', 'Testimonial', '2018-09-27 11:03:35', 'User admin Lihat data menu Testimonial', '2018-09-27 11:03:35', 1, 0),
(2808, 'Lihat', 'Testimonial', '2018-09-27 11:06:57', 'User admin Lihat data menu Testimonial', '2018-09-27 11:06:57', 1, 0),
(2809, 'Lihat', 'How to Order', '2018-09-27 11:07:00', 'User admin Lihat data menu How to Order', '2018-09-27 11:07:00', 1, 0),
(2810, 'Hapus', 'How to Order', '2018-09-27 11:07:05', 'User admin Hapus data menu How to Order', '2018-09-27 11:07:05', 1, 0),
(2811, 'Lihat', 'How to Order', '2018-09-27 11:07:06', 'User admin Lihat data menu How to Order', '2018-09-27 11:07:06', 1, 0),
(2812, 'Lihat', 'News', '2018-09-28 09:38:20', 'User admin Lihat data menu News', '2018-09-28 09:38:20', 1, 0),
(2813, 'Lihat', 'News', '2018-09-28 09:38:28', 'User admin Lihat data menu News', '2018-09-28 09:38:28', 1, 0),
(2814, 'Lihat', 'News', '2018-09-28 09:38:33', 'User admin Lihat data menu News', '2018-09-28 09:38:33', 1, 0),
(2815, 'Lihat', 'News', '2018-09-28 09:39:27', 'User admin Lihat data menu News', '2018-09-28 09:39:27', 1, 0),
(2816, 'Lihat', 'Data Produk', '2018-09-28 09:39:42', 'User admin Lihat data menu Data Produk', '2018-09-28 09:39:42', 1, 0),
(2817, 'Lihat', 'News', '2018-09-28 09:39:49', 'User admin Lihat data menu News', '2018-09-28 09:39:49', 1, 0),
(2818, 'Lihat', 'News', '2018-09-28 09:49:25', 'User admin Lihat data menu News', '2018-09-28 09:49:25', 1, 0),
(2819, 'Lihat', 'News', '2018-09-28 09:49:30', 'User admin Lihat data menu News', '2018-09-28 09:49:30', 1, 0),
(2820, 'Lihat', 'News', '2018-09-28 09:51:45', 'User admin Lihat data menu News', '2018-09-28 09:51:45', 1, 0),
(2821, 'Lihat', 'News', '2018-09-28 09:52:40', 'User admin Lihat data menu News', '2018-09-28 09:52:40', 1, 0),
(2822, 'Lihat', 'News', '2018-09-28 09:53:05', 'User admin Lihat data menu News', '2018-09-28 09:53:05', 1, 0),
(2823, 'Lihat', 'News', '2018-09-28 09:53:21', 'User admin Lihat data menu News', '2018-09-28 09:53:21', 1, 0),
(2824, 'Lihat', 'News', '2018-09-28 09:54:18', 'User admin Lihat data menu News', '2018-09-28 09:54:18', 1, 0),
(2825, 'Lihat', 'News', '2018-09-28 09:54:59', 'User admin Lihat data menu News', '2018-09-28 09:54:59', 1, 0),
(2826, 'Lihat', 'Data Produk', '2018-09-28 10:10:54', 'User admin Lihat data menu Data Produk', '2018-09-28 10:10:54', 1, 0),
(2827, 'Lihat', 'Data Produk', '2018-09-28 10:17:30', 'User admin Lihat data menu Data Produk', '2018-09-28 10:17:30', 1, 0),
(2828, 'Lihat', 'Data Produk', '2018-09-28 10:17:56', 'User admin Lihat data menu Data Produk', '2018-09-28 10:17:56', 1, 0),
(2829, 'Lihat', 'Data Produk', '2018-09-28 10:19:09', 'User admin Lihat data menu Data Produk', '2018-09-28 10:19:09', 1, 0),
(2830, 'Lihat', 'Data Produk', '2018-09-28 10:20:47', 'User admin Lihat data menu Data Produk', '2018-09-28 10:20:47', 1, 0),
(2831, 'Lihat', 'Data Produk', '2018-09-28 10:24:28', 'User admin Lihat data menu Data Produk', '2018-09-28 10:24:28', 1, 0),
(2832, 'Lihat', 'Data Produk', '2018-09-28 10:26:59', 'User admin Lihat data menu Data Produk', '2018-09-28 10:26:59', 1, 0),
(2833, 'Lihat', 'Data Produk', '2018-09-28 10:27:06', 'User admin Lihat data menu Data Produk', '2018-09-28 10:27:06', 1, 0),
(2834, 'Lihat', 'Data Produk', '2018-09-28 10:46:48', 'User admin Lihat data menu Data Produk', '2018-09-28 10:46:48', 1, 0),
(2835, 'Lihat', 'Data Produk', '2018-09-28 10:47:55', 'User admin Lihat data menu Data Produk', '2018-09-28 10:47:55', 1, 0),
(2836, 'Lihat', 'Data Produk', '2018-09-28 10:51:20', 'User admin Lihat data menu Data Produk', '2018-09-28 10:51:20', 1, 0),
(2837, 'Lihat', 'Data Produk', '2018-09-28 10:51:54', 'User admin Lihat data menu Data Produk', '2018-09-28 10:51:54', 1, 0),
(2838, 'Lihat', 'Data Produk', '2018-09-28 10:52:40', 'User admin Lihat data menu Data Produk', '2018-09-28 10:52:40', 1, 0),
(2839, 'Tambah', 'Data Produk', '2018-09-28 10:52:58', 'User admin Tambah data menu Data Produk', '2018-09-28 10:52:58', 1, 0),
(2840, 'Lihat', 'Data Produk', '2018-09-28 10:52:58', 'User admin Lihat data menu Data Produk', '2018-09-28 10:52:58', 1, 0),
(2841, 'Hapus', 'Data Produk', '2018-09-28 10:53:11', 'User admin Hapus data menu Data Produk', '2018-09-28 10:53:11', 1, 0),
(2842, 'Lihat', 'Data Produk', '2018-09-28 10:53:11', 'User admin Lihat data menu Data Produk', '2018-09-28 10:53:11', 1, 0),
(2843, 'Lihat', 'Data Kategori', '2018-09-28 10:53:22', 'User admin Lihat data menu Data Kategori', '2018-09-28 10:53:22', 1, 0),
(2844, 'Lihat', 'Data Kategori', '2018-09-28 10:53:26', 'User admin Lihat data menu Data Kategori', '2018-09-28 10:53:26', 1, 0),
(2845, 'Lihat', 'Testimonial', '2018-09-28 10:53:42', 'User admin Lihat data menu Testimonial', '2018-09-28 10:53:42', 1, 0),
(2846, 'Lihat', 'Testimonial', '2018-09-28 10:56:09', 'User admin Lihat data menu Testimonial', '2018-09-28 10:56:09', 1, 0),
(2847, 'Lihat', 'News', '2018-09-28 10:56:12', 'User admin Lihat data menu News', '2018-09-28 10:56:12', 1, 0),
(2848, 'Tambah', 'News', '2018-09-28 10:56:24', 'User admin Tambah data menu News', '2018-09-28 10:56:24', 1, 0),
(2849, 'Lihat', 'News', '2018-09-28 10:56:24', 'User admin Lihat data menu News', '2018-09-28 10:56:24', 1, 0),
(2850, 'Lihat', 'News', '2018-09-28 10:57:34', 'User admin Lihat data menu News', '2018-09-28 10:57:34', 1, 0),
(2851, 'Ubah', 'News', '2018-09-28 11:03:50', 'User admin Ubah data menu News', '2018-09-28 11:03:50', 1, 0),
(2852, 'Lihat', 'News', '2018-09-28 11:03:50', 'User admin Lihat data menu News', '2018-09-28 11:03:50', 1, 0),
(2853, 'Lihat', 'Testimonial', '2018-09-28 11:04:10', 'User admin Lihat data menu Testimonial', '2018-09-28 11:04:10', 1, 0),
(2854, 'Lihat', 'Testimonial', '2018-09-28 11:05:30', 'User admin Lihat data menu Testimonial', '2018-09-28 11:05:30', 1, 0),
(2855, 'Tambah', 'Testimonial', '2018-09-28 11:05:38', 'User admin Tambah data menu Testimonial', '2018-09-28 11:05:38', 1, 0),
(2856, 'Lihat', 'Testimonial', '2018-09-28 11:05:58', 'User admin Lihat data menu Testimonial', '2018-09-28 11:05:58', 1, 0),
(2857, 'Tambah', 'Testimonial', '2018-09-28 11:06:02', 'User admin Tambah data menu Testimonial', '2018-09-28 11:06:02', 1, 0),
(2858, 'Lihat', 'Testimonial', '2018-09-28 11:06:03', 'User admin Lihat data menu Testimonial', '2018-09-28 11:06:03', 1, 0),
(2859, 'Hapus', 'Testimonial', '2018-09-28 11:06:07', 'User admin Hapus data menu Testimonial', '2018-09-28 11:06:07', 1, 0),
(2860, 'Lihat', 'Testimonial', '2018-09-28 11:06:08', 'User admin Lihat data menu Testimonial', '2018-09-28 11:06:08', 1, 0),
(2861, 'Tambah', 'Testimonial', '2018-09-28 11:06:16', 'User admin Tambah data menu Testimonial', '2018-09-28 11:06:16', 1, 0),
(2862, 'Lihat', 'Testimonial', '2018-09-28 11:06:16', 'User admin Lihat data menu Testimonial', '2018-09-28 11:06:16', 1, 0),
(2863, 'Lihat', 'Testimonial', '2018-09-28 11:06:40', 'User admin Lihat data menu Testimonial', '2018-09-28 11:06:40', 1, 0),
(2864, 'Lihat', 'Data Produk', '2018-09-28 11:06:45', 'User admin Lihat data menu Data Produk', '2018-09-28 11:06:45', 1, 0),
(2865, 'Lihat', 'Data Produk', '2018-09-28 11:06:49', 'User admin Lihat data menu Data Produk', '2018-09-28 11:06:49', 1, 0),
(2866, 'Lihat', 'Testimonial', '2018-09-28 11:07:37', 'User admin Lihat data menu Testimonial', '2018-09-28 11:07:37', 1, 0),
(2867, 'Lihat', 'Testimonial', '2018-09-28 11:07:45', 'User admin Lihat data menu Testimonial', '2018-09-28 11:07:45', 1, 0),
(2868, 'Lihat', 'Testimonial', '2018-09-28 11:08:02', 'User admin Lihat data menu Testimonial', '2018-09-28 11:08:02', 1, 0),
(2869, 'Lihat', 'Testimonial', '2018-09-28 11:08:06', 'User admin Lihat data menu Testimonial', '2018-09-28 11:08:06', 1, 0),
(2870, 'Lihat', 'Testimonial', '2018-09-28 11:09:17', 'User admin Lihat data menu Testimonial', '2018-09-28 11:09:17', 1, 0),
(2871, 'Lihat', 'Testimonial', '2018-09-28 11:09:21', 'User admin Lihat data menu Testimonial', '2018-09-28 11:09:21', 1, 0),
(2872, 'Lihat', 'News', '2018-09-28 11:09:42', 'User admin Lihat data menu News', '2018-09-28 11:09:42', 1, 0),
(2873, 'Lihat', 'News', '2018-09-28 11:09:46', 'User admin Lihat data menu News', '2018-09-28 11:09:46', 1, 0),
(2874, 'Lihat', 'News', '2018-09-28 11:11:20', 'User admin Lihat data menu News', '2018-09-28 11:11:20', 1, 0),
(2875, 'Lihat', 'News', '2018-09-28 11:16:57', 'User admin Lihat data menu News', '2018-09-28 11:16:57', 1, 0),
(2876, 'Lihat', 'News', '2018-09-28 11:18:24', 'User admin Lihat data menu News', '2018-09-28 11:18:24', 1, 0),
(2877, 'Lihat', 'News', '2018-09-28 11:18:48', 'User admin Lihat data menu News', '2018-09-28 11:18:48', 1, 0),
(2878, 'Lihat', 'News', '2018-09-28 11:19:11', 'User admin Lihat data menu News', '2018-09-28 11:19:11', 1, 0),
(2879, 'Lihat', 'News', '2018-09-28 11:19:43', 'User admin Lihat data menu News', '2018-09-28 11:19:43', 1, 0),
(2880, 'Lihat', 'News', '2018-09-28 11:19:46', 'User admin Lihat data menu News', '2018-09-28 11:19:46', 1, 0),
(2881, 'Lihat', 'News', '2018-09-28 11:19:59', 'User admin Lihat data menu News', '2018-09-28 11:19:59', 1, 0),
(2882, 'Lihat', 'News', '2018-09-28 11:20:17', 'User admin Lihat data menu News', '2018-09-28 11:20:17', 1, 0),
(2883, 'Lihat', 'News', '2018-09-28 11:20:24', 'User admin Lihat data menu News', '2018-09-28 11:20:24', 1, 0),
(2884, 'Lihat', 'News', '2018-09-28 11:20:32', 'User admin Lihat data menu News', '2018-09-28 11:20:32', 1, 0),
(2885, 'Lihat', 'News', '2018-09-28 11:20:38', 'User admin Lihat data menu News', '2018-09-28 11:20:38', 1, 0),
(2886, 'Lihat', 'News', '2018-09-28 11:21:26', 'User admin Lihat data menu News', '2018-09-28 11:21:26', 1, 0),
(2887, 'Lihat', 'News', '2018-09-28 11:21:50', 'User admin Lihat data menu News', '2018-09-28 11:21:50', 1, 0),
(2888, 'Tambah', 'News', '2018-09-28 11:22:11', 'User admin Tambah data menu News', '2018-09-28 11:22:11', 1, 0),
(2889, 'Lihat', 'News', '2018-09-28 11:22:12', 'User admin Lihat data menu News', '2018-09-28 11:22:12', 1, 0),
(2890, 'Lihat', 'News', '2018-09-28 11:22:16', 'User admin Lihat data menu News', '2018-09-28 11:22:16', 1, 0),
(2891, 'Lihat', 'Faq', '2018-10-01 02:03:21', 'User admin Lihat data menu Faq', '2018-10-01 02:03:21', 1, 0),
(2892, 'Tambah', 'Faq', '2018-10-01 02:03:35', 'User admin Tambah data menu Faq', '2018-10-01 02:03:35', 1, 0),
(2893, 'Lihat', 'Faq', '2018-10-01 02:03:36', 'User admin Lihat data menu Faq', '2018-10-01 02:03:36', 1, 0),
(2894, 'Tambah', 'Faq', '2018-10-01 02:03:53', 'User admin Tambah data menu Faq', '2018-10-01 02:03:53', 1, 0),
(2895, 'Lihat', 'Faq', '2018-10-01 02:03:54', 'User admin Lihat data menu Faq', '2018-10-01 02:03:54', 1, 0),
(2896, 'Lihat', 'How to Order', '2018-10-01 02:05:00', 'User admin Lihat data menu How to Order', '2018-10-01 02:05:00', 1, 0),
(2897, 'Tambah', 'How to Order', '2018-10-01 02:05:12', 'User admin Tambah data menu How to Order', '2018-10-01 02:05:12', 1, 0),
(2898, 'Lihat', 'How to Order', '2018-10-01 02:05:13', 'User admin Lihat data menu How to Order', '2018-10-01 02:05:13', 1, 0),
(2899, 'Lihat', 'Data Produk', '2018-10-03 21:47:35', 'User admin Lihat data menu Data Produk', '2018-10-03 21:47:35', 1, 0),
(2900, 'Lihat', 'Data Produk', '2018-10-04 09:16:54', 'User admin Lihat data menu Data Produk', '2018-10-04 09:16:54', 1, 0),
(2901, 'Lihat', 'Data Produk', '2018-10-04 09:22:20', 'User admin Lihat data menu Data Produk', '2018-10-04 09:22:20', 1, 0),
(2902, 'Lihat', 'Data Produk', '2018-10-04 09:25:06', 'User admin Lihat data menu Data Produk', '2018-10-04 09:25:06', 1, 0),
(2903, 'Lihat', 'Data Produk', '2018-10-04 09:56:46', 'User admin Lihat data menu Data Produk', '2018-10-04 09:56:46', 1, 0),
(2904, 'Lihat', 'Data Produk', '2018-10-04 09:57:39', 'User admin Lihat data menu Data Produk', '2018-10-04 09:57:39', 1, 0),
(2905, 'Lihat', 'Data Produk Detil', '2018-10-04 09:58:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 09:58:31', 1, 0),
(2906, 'Lihat', 'Data Produk Detil', '2018-10-04 09:58:40', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 09:58:40', 1, 0),
(2907, 'Lihat', 'Data Produk Detil', '2018-10-04 10:02:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:02:19', 1, 0),
(2908, 'Lihat', 'Data Produk Detil', '2018-10-04 10:03:42', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:03:42', 1, 0),
(2909, 'Lihat', 'Data Produk Detil', '2018-10-04 10:03:53', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:03:53', 1, 0);
INSERT INTO `log` (`log_id`, `log_action`, `log_menu`, `log_tanggal`, `log_keterangan`, `last_update`, `last_user_id`, `is_delete`) VALUES
(2910, 'Lihat', 'Data Produk Detil', '2018-10-04 10:04:38', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:04:38', 1, 0),
(2911, 'Tambah', 'Data Produk Detil', '2018-10-04 10:04:42', 'User admin Tambah data menu Data Produk Detil', '2018-10-04 10:04:42', 1, 0),
(2912, 'Lihat', 'Data Produk Detil', '2018-10-04 10:04:43', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:04:43', 1, 0),
(2913, 'Lihat', 'Data Produk Detil', '2018-10-04 10:05:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:05:33', 1, 0),
(2914, 'Tambah', 'Data Produk Detil', '2018-10-04 10:05:46', 'User admin Tambah data menu Data Produk Detil', '2018-10-04 10:05:46', 1, 0),
(2915, 'Lihat', 'Data Produk Detil', '2018-10-04 10:05:47', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:05:47', 1, 0),
(2916, 'Lihat', 'Data Produk Detil', '2018-10-04 10:06:20', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:06:20', 1, 0),
(2917, 'Lihat', 'Data Produk Detil', '2018-10-04 10:06:39', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:06:39', 1, 0),
(2918, 'Hapus', 'Data Produk Detil', '2018-10-04 10:06:44', 'User admin Hapus data menu Data Produk Detil', '2018-10-04 10:06:44', 1, 0),
(2919, 'Lihat', 'Data Produk Detil', '2018-10-04 10:06:44', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:06:44', 1, 0),
(2920, 'Tambah', 'Data Produk Detil', '2018-10-04 10:06:51', 'User admin Tambah data menu Data Produk Detil', '2018-10-04 10:06:51', 1, 0),
(2921, 'Lihat', 'Data Produk Detil', '2018-10-04 10:06:52', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:06:52', 1, 0),
(2922, 'Tambah', 'Data Produk Detil', '2018-10-04 10:06:58', 'User admin Tambah data menu Data Produk Detil', '2018-10-04 10:06:58', 1, 0),
(2923, 'Lihat', 'Data Produk Detil', '2018-10-04 10:06:59', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:06:59', 1, 0),
(2924, 'Tambah', 'Data Produk Detil', '2018-10-04 10:07:06', 'User admin Tambah data menu Data Produk Detil', '2018-10-04 10:07:06', 1, 0),
(2925, 'Lihat', 'Data Produk Detil', '2018-10-04 10:07:07', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:07:07', 1, 0),
(2926, 'Lihat', 'Data Produk Detil', '2018-10-04 10:23:39', 'User admin Lihat data menu Data Produk Detil', '2018-10-04 10:23:39', 1, 0),
(2927, 'Lihat', 'slider', '2018-10-04 10:23:43', 'User admin Lihat data menu slider', '2018-10-04 10:23:43', 1, 0),
(2928, 'Lihat', 'slider', '2018-10-04 10:23:48', 'User admin Lihat data menu slider', '2018-10-04 10:23:48', 1, 0),
(2929, 'Tambah', 'slider', '2018-10-04 10:24:06', 'User admin Tambah data menu slider', '2018-10-04 10:24:06', 1, 0),
(2930, 'Lihat', 'slider', '2018-10-04 10:24:06', 'User admin Lihat data menu slider', '2018-10-04 10:24:06', 1, 0),
(2931, 'Lihat', 'slider', '2018-10-04 10:24:39', 'User admin Lihat data menu slider', '2018-10-04 10:24:39', 1, 0),
(2932, 'Lihat', 'slider', '2018-10-04 10:25:30', 'User admin Lihat data menu slider', '2018-10-04 10:25:30', 1, 0),
(2933, 'Lihat', 'slider', '2018-10-04 10:25:45', 'User admin Lihat data menu slider', '2018-10-04 10:25:45', 1, 0),
(2934, 'Lihat', 'slider', '2018-10-04 10:27:07', 'User admin Lihat data menu slider', '2018-10-04 10:27:07', 1, 0),
(2935, 'Tambah', 'slider', '2018-10-04 10:27:17', 'User admin Tambah data menu slider', '2018-10-04 10:27:17', 1, 0),
(2936, 'Lihat', 'slider', '2018-10-04 10:27:17', 'User admin Lihat data menu slider', '2018-10-04 10:27:17', 1, 0),
(2937, 'Tambah', 'slider', '2018-10-04 10:27:27', 'User admin Tambah data menu slider', '2018-10-04 10:27:27', 1, 0),
(2938, 'Lihat', 'slider', '2018-10-04 10:27:28', 'User admin Lihat data menu slider', '2018-10-04 10:27:28', 1, 0),
(2939, 'Lihat', 'slider', '2018-10-04 10:27:51', 'User admin Lihat data menu slider', '2018-10-04 10:27:51', 1, 0),
(2940, 'Lihat', 'slider', '2018-10-04 10:27:57', 'User admin Lihat data menu slider', '2018-10-04 10:27:57', 1, 0),
(2941, 'Lihat', 'Data Kategori', '2018-10-04 10:31:32', 'User admin Lihat data menu Data Kategori', '2018-10-04 10:31:32', 1, 0),
(2942, 'Lihat', 'Data User', '2018-10-04 10:31:39', 'User admin Lihat data menu Data User', '2018-10-04 10:31:39', 1, 0),
(2943, 'Lihat', 'Data Link Social', '2018-10-04 10:31:44', 'User admin Lihat data menu Data Link Social', '2018-10-04 10:31:44', 1, 0),
(2944, 'Lihat', 'Data Link Social', '2018-10-04 20:55:37', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:55:37', 1, 0),
(2945, 'Lihat', 'Data Link Social', '2018-10-04 20:57:41', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:57:41', 1, 0),
(2946, 'Lihat', 'Data User', '2018-10-04 20:57:48', 'User admin Lihat data menu Data User', '2018-10-04 20:57:48', 1, 0),
(2947, 'Lihat', 'Data Pesan', '2018-10-04 20:58:03', 'User admin Lihat data menu Data Pesan', '2018-10-04 20:58:03', 1, 0),
(2948, 'Lihat', 'Data Link Social', '2018-10-04 20:58:18', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:58:18', 1, 0),
(2949, 'Lihat', 'Data Link Social', '2018-10-04 20:59:24', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:59:24', 1, 0),
(2950, 'Lihat', 'Data Link Social', '2018-10-04 20:59:38', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:59:38', 1, 0),
(2951, 'Lihat', 'Data Link Social', '2018-10-04 20:59:53', 'User admin Lihat data menu Data Link Social', '2018-10-04 20:59:53', 1, 0),
(2952, 'Lihat', 'Data Link Social', '2018-10-04 21:00:17', 'User admin Lihat data menu Data Link Social', '2018-10-04 21:00:17', 1, 0),
(2953, 'Lihat', 'Data Link Social', '2018-10-04 21:00:48', 'User admin Lihat data menu Data Link Social', '2018-10-04 21:00:48', 1, 0),
(2954, 'Lihat', 'Data Link Social', '2018-10-04 21:04:28', 'User admin Lihat data menu Data Link Social', '2018-10-04 21:04:28', 1, 0),
(2955, 'Lihat', 'Faq', '2018-10-04 21:04:33', 'User admin Lihat data menu Faq', '2018-10-04 21:04:33', 1, 0),
(2956, 'Lihat', 'Data Link Social', '2018-10-04 21:05:01', 'User admin Lihat data menu Data Link Social', '2018-10-04 21:05:01', 1, 0),
(2957, 'Lihat', 'Data Produk', '2018-10-04 21:05:10', 'User admin Lihat data menu Data Produk', '2018-10-04 21:05:10', 1, 0),
(2958, 'Lihat', 'Faq', '2018-10-07 21:02:17', 'User admin Lihat data menu Faq', '2018-10-07 21:02:17', 1, 0),
(2959, 'Edit', 'Faq', '2018-10-07 21:27:13', 'User admin Edit data menu Faq', '2018-10-07 21:27:13', 1, 0),
(2960, 'Lihat', 'Faq', '2018-10-07 21:27:14', 'User admin Lihat data menu Faq', '2018-10-07 21:27:14', 1, 0),
(2961, 'Edit', 'Faq', '2018-10-07 21:27:29', 'User admin Edit data menu Faq', '2018-10-07 21:27:29', 1, 0),
(2962, 'Lihat', 'Faq', '2018-10-07 21:27:30', 'User admin Lihat data menu Faq', '2018-10-07 21:27:30', 1, 0),
(2963, 'Edit', 'Faq', '2018-10-07 21:28:19', 'User admin Edit data menu Faq', '2018-10-07 21:28:19', 1, 0),
(2964, 'Lihat', 'Faq', '2018-10-07 21:28:19', 'User admin Lihat data menu Faq', '2018-10-07 21:28:19', 1, 0),
(2965, 'Tambah', 'Faq', '2018-10-07 21:29:44', 'User admin Tambah data menu Faq', '2018-10-07 21:29:44', 1, 0),
(2966, 'Lihat', 'Faq', '2018-10-07 21:29:45', 'User admin Lihat data menu Faq', '2018-10-07 21:29:45', 1, 0),
(2967, 'Edit', 'Faq', '2018-10-07 21:29:54', 'User admin Edit data menu Faq', '2018-10-07 21:29:54', 1, 0),
(2968, 'Lihat', 'Faq', '2018-10-07 21:29:55', 'User admin Lihat data menu Faq', '2018-10-07 21:29:55', 1, 0),
(2969, 'Lihat', 'Faq', '2018-10-07 21:29:59', 'User admin Lihat data menu Faq', '2018-10-07 21:29:59', 1, 0),
(2970, 'Edit', 'Faq', '2018-10-07 21:30:07', 'User admin Edit data menu Faq', '2018-10-07 21:30:07', 1, 0),
(2971, 'Lihat', 'Faq', '2018-10-07 21:30:07', 'User admin Lihat data menu Faq', '2018-10-07 21:30:07', 1, 0),
(2972, 'Lihat', 'How to Order', '2018-10-07 21:31:57', 'User admin Lihat data menu How to Order', '2018-10-07 21:31:57', 1, 0),
(2973, 'Edit', 'How to Order', '2018-10-07 21:33:20', 'User admin Edit data menu How to Order', '2018-10-07 21:33:20', 1, 0),
(2974, 'Lihat', 'How to Order', '2018-10-07 21:33:20', 'User admin Lihat data menu How to Order', '2018-10-07 21:33:20', 1, 0),
(2975, 'Tambah', 'How to Order', '2018-10-07 21:33:35', 'User admin Tambah data menu How to Order', '2018-10-07 21:33:35', 1, 0),
(2976, 'Lihat', 'How to Order', '2018-10-07 21:33:36', 'User admin Lihat data menu How to Order', '2018-10-07 21:33:36', 1, 0),
(2977, 'Tambah', 'How to Order', '2018-10-07 21:33:55', 'User admin Tambah data menu How to Order', '2018-10-07 21:33:55', 1, 0),
(2978, 'Lihat', 'How to Order', '2018-10-07 21:33:56', 'User admin Lihat data menu How to Order', '2018-10-07 21:33:56', 1, 0),
(2979, 'Tambah', 'How to Order', '2018-10-07 21:34:17', 'User admin Tambah data menu How to Order', '2018-10-07 21:34:17', 1, 0),
(2980, 'Lihat', 'How to Order', '2018-10-07 21:34:18', 'User admin Lihat data menu How to Order', '2018-10-07 21:34:18', 1, 0),
(2981, 'Tambah', 'How to Order', '2018-10-07 21:34:34', 'User admin Tambah data menu How to Order', '2018-10-07 21:34:34', 1, 0),
(2982, 'Lihat', 'How to Order', '2018-10-07 21:34:34', 'User admin Lihat data menu How to Order', '2018-10-07 21:34:34', 1, 0),
(2983, 'Tambah', 'How to Order', '2018-10-07 21:35:08', 'User admin Tambah data menu How to Order', '2018-10-07 21:35:08', 1, 0),
(2984, 'Lihat', 'How to Order', '2018-10-07 21:35:08', 'User admin Lihat data menu How to Order', '2018-10-07 21:35:08', 1, 0),
(2985, 'Lihat', 'Data Kategori', '2018-10-08 09:26:03', 'User admin Lihat data menu Data Kategori', '2018-10-08 09:26:03', 1, 0),
(2986, 'Lihat', 'Data Produk', '2018-10-08 09:26:06', 'User admin Lihat data menu Data Produk', '2018-10-08 09:26:06', 1, 0),
(2987, 'Lihat', 'Data Produk', '2018-10-08 09:26:08', 'User admin Lihat data menu Data Produk', '2018-10-08 09:26:08', 1, 0),
(2988, 'Lihat', 'Data Produk', '2018-10-08 09:52:47', 'User admin Lihat data menu Data Produk', '2018-10-08 09:52:47', 1, 0),
(2989, 'Lihat', 'Data Produk', '2018-10-08 10:17:02', 'User admin Lihat data menu Data Produk', '2018-10-08 10:17:02', 1, 0),
(2990, 'Lihat', 'Data Produk', '2018-10-08 10:18:10', 'User admin Lihat data menu Data Produk', '2018-10-08 10:18:10', 1, 0),
(2991, 'Lihat', 'Testimonial', '2018-10-09 02:30:44', 'User admin Lihat data menu Testimonial', '2018-10-09 02:30:44', 1, 0),
(2992, 'Ubah', 'Testimonial', '2018-10-09 02:31:21', 'User admin Ubah data menu Testimonial', '2018-10-09 02:31:21', 1, 0),
(2993, 'Lihat', 'Testimonial', '2018-10-09 02:31:22', 'User admin Lihat data menu Testimonial', '2018-10-09 02:31:22', 1, 0),
(2994, 'Tambah', 'Testimonial', '2018-10-09 02:31:54', 'User admin Tambah data menu Testimonial', '2018-10-09 02:31:54', 1, 0),
(2995, 'Lihat', 'Testimonial', '2018-10-09 02:31:55', 'User admin Lihat data menu Testimonial', '2018-10-09 02:31:55', 1, 0),
(2996, 'Tambah', 'Testimonial', '2018-10-09 02:32:43', 'User admin Tambah data menu Testimonial', '2018-10-09 02:32:43', 1, 0),
(2997, 'Lihat', 'Testimonial', '2018-10-09 02:32:43', 'User admin Lihat data menu Testimonial', '2018-10-09 02:32:43', 1, 0),
(2998, 'Tambah', 'Testimonial', '2018-10-09 02:33:02', 'User admin Tambah data menu Testimonial', '2018-10-09 02:33:02', 1, 0),
(2999, 'Lihat', 'Testimonial', '2018-10-09 02:33:02', 'User admin Lihat data menu Testimonial', '2018-10-09 02:33:02', 1, 0),
(3000, 'Lihat', 'News', '2018-10-09 02:38:04', 'User admin Lihat data menu News', '2018-10-09 02:38:04', 1, 0),
(3001, 'Ubah', 'News', '2018-10-09 02:39:28', 'User admin Ubah data menu News', '2018-10-09 02:39:28', 1, 0),
(3002, 'Lihat', 'News', '2018-10-09 02:39:29', 'User admin Lihat data menu News', '2018-10-09 02:39:29', 1, 0),
(3003, 'Ubah', 'News', '2018-10-09 02:40:35', 'User admin Ubah data menu News', '2018-10-09 02:40:35', 1, 0),
(3004, 'Lihat', 'News', '2018-10-09 02:40:35', 'User admin Lihat data menu News', '2018-10-09 02:40:35', 1, 0),
(3005, 'Lihat', 'slider', '2018-10-09 02:55:04', 'User admin Lihat data menu slider', '2018-10-09 02:55:04', 1, 0),
(3006, 'Lihat', 'slider', '2018-10-09 02:57:07', 'User admin Lihat data menu slider', '2018-10-09 02:57:07', 1, 0),
(3007, 'Ubah', 'slider', '2018-10-09 02:57:14', 'User admin Ubah data menu slider', '2018-10-09 02:57:14', 1, 0),
(3008, 'Lihat', 'slider', '2018-10-09 02:57:15', 'User admin Lihat data menu slider', '2018-10-09 02:57:15', 1, 0),
(3009, 'Ubah', 'slider', '2018-10-09 02:58:57', 'User admin Ubah data menu slider', '2018-10-09 02:58:57', 1, 0),
(3010, 'Lihat', 'slider', '2018-10-09 02:58:57', 'User admin Lihat data menu slider', '2018-10-09 02:58:57', 1, 0),
(3011, 'Ubah', 'slider', '2018-10-09 03:00:30', 'User admin Ubah data menu slider', '2018-10-09 03:00:30', 1, 0),
(3012, 'Lihat', 'slider', '2018-10-09 03:00:31', 'User admin Lihat data menu slider', '2018-10-09 03:00:31', 1, 0),
(3013, 'Lihat', 'Data Produk', '2018-10-09 03:02:42', 'User admin Lihat data menu Data Produk', '2018-10-09 03:02:42', 1, 0),
(3014, 'Lihat', 'Data Produk Detil', '2018-10-09 03:03:44', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:03:44', 1, 0),
(3015, 'Lihat', 'Data Produk Detil', '2018-10-09 03:05:35', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:05:35', 1, 0),
(3016, 'Lihat', 'Data Produk', '2018-10-09 03:05:39', 'User admin Lihat data menu Data Produk', '2018-10-09 03:05:39', 1, 0),
(3017, 'Lihat', 'Data Produk', '2018-10-09 03:06:07', 'User admin Lihat data menu Data Produk', '2018-10-09 03:06:07', 1, 0),
(3018, 'Lihat', 'Data Produk', '2018-10-09 03:06:18', 'User admin Lihat data menu Data Produk', '2018-10-09 03:06:18', 1, 0),
(3019, 'Lihat', 'Data Produk', '2018-10-09 03:06:25', 'User admin Lihat data menu Data Produk', '2018-10-09 03:06:25', 1, 0),
(3020, 'Lihat', 'Data Produk Detil', '2018-10-09 03:06:30', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:06:30', 1, 0),
(3021, 'Hapus', 'Data Produk Detil', '2018-10-09 03:08:09', 'User admin Hapus data menu Data Produk Detil', '2018-10-09 03:08:09', 1, 0),
(3022, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:09', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:09', 1, 0),
(3023, 'Hapus', 'Data Produk Detil', '2018-10-09 03:08:12', 'User admin Hapus data menu Data Produk Detil', '2018-10-09 03:08:12', 1, 0),
(3024, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:12', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:12', 1, 0),
(3025, 'Hapus', 'Data Produk Detil', '2018-10-09 03:08:15', 'User admin Hapus data menu Data Produk Detil', '2018-10-09 03:08:15', 1, 0),
(3026, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:15', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:15', 1, 0),
(3027, 'Tambah', 'Data Produk Detil', '2018-10-09 03:08:32', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:08:32', 1, 0),
(3028, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:33', 1, 0),
(3029, 'Tambah', 'Data Produk Detil', '2018-10-09 03:08:38', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:08:38', 1, 0),
(3030, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:38', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:38', 1, 0),
(3031, 'Tambah', 'Data Produk Detil', '2018-10-09 03:08:44', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:08:44', 1, 0),
(3032, 'Lihat', 'Data Produk Detil', '2018-10-09 03:08:44', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:08:44', 1, 0),
(3033, 'Tambah', 'Data Produk Detil', '2018-10-09 03:09:10', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:09:10', 1, 0),
(3034, 'Lihat', 'Data Produk Detil', '2018-10-09 03:09:10', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:09:10', 1, 0),
(3035, 'Tambah', 'Data Produk Detil', '2018-10-09 03:09:17', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:09:17', 1, 0),
(3036, 'Lihat', 'Data Produk Detil', '2018-10-09 03:09:18', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:09:18', 1, 0),
(3037, 'Tambah', 'Data Produk Detil', '2018-10-09 03:09:25', 'User admin Tambah data menu Data Produk Detil', '2018-10-09 03:09:25', 1, 0),
(3038, 'Lihat', 'Data Produk Detil', '2018-10-09 03:09:26', 'User admin Lihat data menu Data Produk Detil', '2018-10-09 03:09:26', 1, 0),
(3039, 'Lihat', 'Data Kategori', '2018-10-17 20:29:35', 'User admin Lihat data menu Data Kategori', '2018-10-17 20:29:35', 1, 0),
(3040, 'Lihat', 'Data Kategori', '2018-10-17 20:31:26', 'User admin Lihat data menu Data Kategori', '2018-10-17 20:31:26', 1, 0),
(3041, 'Lihat', 'Data Produk', '2018-10-17 20:31:49', 'User admin Lihat data menu Data Produk', '2018-10-17 20:31:49', 1, 0),
(3042, 'Lihat', 'Data Produk', '2018-10-17 20:33:16', 'User admin Lihat data menu Data Produk', '2018-10-17 20:33:16', 1, 0),
(3043, 'Lihat', 'Data Produk', '2018-10-17 20:40:25', 'User admin Lihat data menu Data Produk', '2018-10-17 20:40:25', 1, 0),
(3044, 'Lihat', 'Data Produk', '2018-10-17 20:40:35', 'User admin Lihat data menu Data Produk', '2018-10-17 20:40:35', 1, 0),
(3045, 'Lihat', 'Data Produk', '2018-10-17 20:40:44', 'User admin Lihat data menu Data Produk', '2018-10-17 20:40:44', 1, 0),
(3046, 'Lihat', 'Data Produk', '2018-10-17 20:41:28', 'User admin Lihat data menu Data Produk', '2018-10-17 20:41:28', 1, 0),
(3047, 'Lihat', 'Testimonial', '2018-10-17 21:18:30', 'User admin Lihat data menu Testimonial', '2018-10-17 21:18:30', 1, 0),
(3048, 'Lihat', 'Testimonial', '2018-10-17 21:20:58', 'User admin Lihat data menu Testimonial', '2018-10-17 21:20:58', 1, 0),
(3049, 'Lihat', 'Testimonial', '2018-10-17 21:21:06', 'User admin Lihat data menu Testimonial', '2018-10-17 21:21:06', 1, 0),
(3050, 'Lihat', 'Testimonial', '2018-10-17 21:22:34', 'User admin Lihat data menu Testimonial', '2018-10-17 21:22:34', 1, 0),
(3051, 'Lihat', 'Testimonial', '2018-10-17 21:33:10', 'User admin Lihat data menu Testimonial', '2018-10-17 21:33:10', 1, 0),
(3052, 'Lihat', 'Testimonial', '2018-10-17 21:36:01', 'User admin Lihat data menu Testimonial', '2018-10-17 21:36:01', 1, 0),
(3053, 'Lihat', 'Testimonial', '2018-10-17 21:36:14', 'User admin Lihat data menu Testimonial', '2018-10-17 21:36:14', 1, 0),
(3054, 'Lihat', 'Testimonial', '2018-10-17 21:36:57', 'User admin Lihat data menu Testimonial', '2018-10-17 21:36:57', 1, 0),
(3055, 'Tambah', 'Testimonial', '2018-10-17 21:37:03', 'User admin Tambah data menu Testimonial', '2018-10-17 21:37:03', 1, 0),
(3056, 'Lihat', 'Testimonial', '2018-10-17 21:37:04', 'User admin Lihat data menu Testimonial', '2018-10-17 21:37:04', 1, 0),
(3057, 'Lihat', 'Data Link Social', '2018-10-17 21:44:54', 'User admin Lihat data menu Data Link Social', '2018-10-17 21:44:54', 1, 0),
(3058, 'Lihat', 'Data Link Social', '2018-10-17 21:45:15', 'User admin Lihat data menu Data Link Social', '2018-10-17 21:45:15', 1, 0),
(3059, 'Lihat', 'Data Link Social', '2018-10-17 21:46:51', 'User admin Lihat data menu Data Link Social', '2018-10-17 21:46:51', 1, 0),
(3060, 'Lihat', 'Data Link Social', '2018-10-17 21:47:18', 'User admin Lihat data menu Data Link Social', '2018-10-17 21:47:18', 1, 0),
(3061, 'Lihat', 'Data Link Social', '2018-10-17 21:47:42', 'User admin Lihat data menu Data Link Social', '2018-10-17 21:47:42', 1, 0),
(3062, 'Lihat', 'Data Link Social', '2018-10-18 04:31:23', 'User admin Lihat data menu Data Link Social', '2018-10-18 04:31:23', 1, 0),
(3063, 'Ubah', 'Data Link Social', '2018-10-18 04:32:48', 'User admin Ubah data menu Data Link Social', '2018-10-18 04:32:48', 1, 0),
(3064, 'Lihat', 'Data Link Social', '2018-10-18 04:32:49', 'User admin Lihat data menu Data Link Social', '2018-10-18 04:32:49', 1, 0),
(3065, 'Lihat', 'Data Link Social', '2018-10-20 10:57:33', 'User admin Lihat data menu Data Link Social', '2018-10-20 10:57:33', 1, 0),
(3066, 'Lihat', 'Data Link Social', '2018-10-20 11:06:58', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:06:58', 1, 0),
(3067, 'Lihat', 'Data Link Social', '2018-10-20 11:07:50', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:07:50', 1, 0),
(3068, 'Lihat', 'Data Link Social', '2018-10-20 11:08:46', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:08:46', 1, 0),
(3069, 'Ubah', 'Data Link Social', '2018-10-20 11:09:32', 'User admin Ubah data menu Data Link Social', '2018-10-20 11:09:32', 1, 0),
(3070, 'Lihat', 'Data Link Social', '2018-10-20 11:09:33', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:09:33', 1, 0),
(3071, 'Lihat', 'Data Link Social', '2018-10-20 11:09:57', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:09:57', 1, 0),
(3072, 'Ubah', 'Data Link Social', '2018-10-20 11:11:06', 'User admin Ubah data menu Data Link Social', '2018-10-20 11:11:06', 1, 0),
(3073, 'Lihat', 'Data Link Social', '2018-10-20 11:11:06', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:11:06', 1, 0),
(3074, 'Ubah', 'Data Link Social', '2018-10-20 11:32:08', 'User admin Ubah data menu Data Link Social', '2018-10-20 11:32:08', 1, 0),
(3075, 'Lihat', 'Data Link Social', '2018-10-20 11:32:08', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:32:08', 1, 0),
(3076, 'Ubah', 'Data Link Social', '2018-10-20 11:52:42', 'User admin Ubah data menu Data Link Social', '2018-10-20 11:52:42', 1, 0),
(3077, 'Lihat', 'Data Link Social', '2018-10-20 11:52:43', 'User admin Lihat data menu Data Link Social', '2018-10-20 11:52:43', 1, 0),
(3078, 'Lihat', 'Data Link Social', '2018-10-21 01:39:11', 'User admin Lihat data menu Data Link Social', '2018-10-21 01:39:11', 1, 0),
(3079, 'Lihat', 'Data Link Social', '2018-10-22 03:52:17', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:52:17', 1, 0),
(3080, 'Ubah', 'Data Link Social', '2018-10-22 03:52:31', 'User admin Ubah data menu Data Link Social', '2018-10-22 03:52:31', 1, 0),
(3081, 'Lihat', 'Data Link Social', '2018-10-22 03:52:31', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:52:31', 1, 0),
(3082, 'Ubah', 'Data Link Social', '2018-10-22 03:53:53', 'User admin Ubah data menu Data Link Social', '2018-10-22 03:53:53', 1, 0),
(3083, 'Lihat', 'Data Link Social', '2018-10-22 03:53:54', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:53:54', 1, 0),
(3084, 'Ubah', 'Data Link Social', '2018-10-22 03:54:07', 'User admin Ubah data menu Data Link Social', '2018-10-22 03:54:07', 1, 0),
(3085, 'Lihat', 'Data Link Social', '2018-10-22 03:54:07', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:54:07', 1, 0),
(3086, 'Ubah', 'Data Link Social', '2018-10-22 03:54:20', 'User admin Ubah data menu Data Link Social', '2018-10-22 03:54:20', 1, 0),
(3087, 'Lihat', 'Data Link Social', '2018-10-22 03:54:20', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:54:20', 1, 0),
(3088, 'Lihat', 'Data Link Social', '2018-10-22 03:54:21', 'User admin Lihat data menu Data Link Social', '2018-10-22 03:54:21', 1, 0),
(3089, 'Lihat', 'How to Order', '2018-10-22 03:56:35', 'User admin Lihat data menu How to Order', '2018-10-22 03:56:35', 1, 0),
(3090, 'Lihat', 'slider', '2018-10-22 03:58:36', 'User admin Lihat data menu slider', '2018-10-22 03:58:36', 1, 0),
(3091, 'Ubah', 'Data Link Social', '2018-10-22 04:13:25', 'User admin Ubah data menu Data Link Social', '2018-10-22 04:13:25', 1, 0),
(3092, 'Lihat', 'Data Link Social', '2018-10-22 04:13:26', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:13:26', 1, 0),
(3093, 'Lihat', 'Testimonial', '2018-10-22 04:17:29', 'User admin Lihat data menu Testimonial', '2018-10-22 04:17:29', 1, 0),
(3094, 'Ubah', 'Testimonial', '2018-10-22 04:17:43', 'User admin Ubah data menu Testimonial', '2018-10-22 04:17:43', 1, 0),
(3095, 'Lihat', 'Testimonial', '2018-10-22 04:17:43', 'User admin Lihat data menu Testimonial', '2018-10-22 04:17:43', 1, 0),
(3096, 'Ubah', 'Testimonial', '2018-10-22 04:17:54', 'User admin Ubah data menu Testimonial', '2018-10-22 04:17:54', 1, 0),
(3097, 'Lihat', 'Testimonial', '2018-10-22 04:17:54', 'User admin Lihat data menu Testimonial', '2018-10-22 04:17:54', 1, 0),
(3098, 'Ubah', 'Testimonial', '2018-10-22 04:18:02', 'User admin Ubah data menu Testimonial', '2018-10-22 04:18:02', 1, 0),
(3099, 'Lihat', 'Testimonial', '2018-10-22 04:18:02', 'User admin Lihat data menu Testimonial', '2018-10-22 04:18:02', 1, 0),
(3100, 'Ubah', 'Testimonial', '2018-10-22 04:18:11', 'User admin Ubah data menu Testimonial', '2018-10-22 04:18:11', 1, 0),
(3101, 'Lihat', 'Testimonial', '2018-10-22 04:18:12', 'User admin Lihat data menu Testimonial', '2018-10-22 04:18:12', 1, 0),
(3102, 'Ubah', 'Testimonial', '2018-10-22 04:19:04', 'User admin Ubah data menu Testimonial', '2018-10-22 04:19:04', 1, 0),
(3103, 'Lihat', 'Testimonial', '2018-10-22 04:19:04', 'User admin Lihat data menu Testimonial', '2018-10-22 04:19:04', 1, 0),
(3104, 'Ubah', 'Testimonial', '2018-10-22 04:19:13', 'User admin Ubah data menu Testimonial', '2018-10-22 04:19:13', 1, 0),
(3105, 'Lihat', 'Testimonial', '2018-10-22 04:19:13', 'User admin Lihat data menu Testimonial', '2018-10-22 04:19:13', 1, 0),
(3106, 'Ubah', 'Testimonial', '2018-10-22 04:20:12', 'User admin Ubah data menu Testimonial', '2018-10-22 04:20:12', 1, 0),
(3107, 'Lihat', 'Testimonial', '2018-10-22 04:20:12', 'User admin Lihat data menu Testimonial', '2018-10-22 04:20:12', 1, 0),
(3108, 'Lihat', 'Data Link Social', '2018-10-22 04:20:30', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:20:30', 1, 0),
(3109, 'Lihat', 'Testimonial', '2018-10-22 04:20:34', 'User admin Lihat data menu Testimonial', '2018-10-22 04:20:34', 1, 0),
(3110, 'Lihat', 'Data Link Social', '2018-10-22 04:20:45', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:20:45', 1, 0),
(3111, 'Lihat', 'Testimonial', '2018-10-22 04:20:54', 'User admin Lihat data menu Testimonial', '2018-10-22 04:20:54', 1, 0),
(3112, 'Hapus', 'Testimonial', '2018-10-22 04:20:59', 'User admin Hapus data menu Testimonial', '2018-10-22 04:20:59', 1, 0),
(3113, 'Lihat', 'Testimonial', '2018-10-22 04:20:59', 'User admin Lihat data menu Testimonial', '2018-10-22 04:20:59', 1, 0),
(3114, 'Tambah', 'Testimonial', '2018-10-22 04:24:02', 'User admin Tambah data menu Testimonial', '2018-10-22 04:24:02', 1, 0),
(3115, 'Lihat', 'Testimonial', '2018-10-22 04:24:02', 'User admin Lihat data menu Testimonial', '2018-10-22 04:24:02', 1, 0),
(3116, 'Tambah', 'Testimonial', '2018-10-22 04:24:08', 'User admin Tambah data menu Testimonial', '2018-10-22 04:24:08', 1, 0),
(3117, 'Lihat', 'Testimonial', '2018-10-22 04:24:08', 'User admin Lihat data menu Testimonial', '2018-10-22 04:24:08', 1, 0),
(3118, 'Tambah', 'Testimonial', '2018-10-22 04:24:15', 'User admin Tambah data menu Testimonial', '2018-10-22 04:24:15', 1, 0),
(3119, 'Lihat', 'Testimonial', '2018-10-22 04:24:15', 'User admin Lihat data menu Testimonial', '2018-10-22 04:24:15', 1, 0),
(3120, 'Tambah', 'Testimonial', '2018-10-22 04:24:21', 'User admin Tambah data menu Testimonial', '2018-10-22 04:24:21', 1, 0),
(3121, 'Lihat', 'Testimonial', '2018-10-22 04:24:21', 'User admin Lihat data menu Testimonial', '2018-10-22 04:24:21', 1, 0),
(3122, 'Ubah', 'Testimonial', '2018-10-22 04:27:08', 'User admin Ubah data menu Testimonial', '2018-10-22 04:27:08', 1, 0),
(3123, 'Lihat', 'Testimonial', '2018-10-22 04:27:08', 'User admin Lihat data menu Testimonial', '2018-10-22 04:27:08', 1, 0),
(3124, 'Ubah', 'Testimonial', '2018-10-22 04:27:20', 'User admin Ubah data menu Testimonial', '2018-10-22 04:27:20', 1, 0),
(3125, 'Lihat', 'Testimonial', '2018-10-22 04:27:20', 'User admin Lihat data menu Testimonial', '2018-10-22 04:27:20', 1, 0),
(3126, 'Lihat', 'Data Link Social', '2018-10-22 04:28:01', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:28:01', 1, 0),
(3127, 'Ubah', 'Data Link Social', '2018-10-22 04:28:37', 'User admin Ubah data menu Data Link Social', '2018-10-22 04:28:37', 1, 0),
(3128, 'Lihat', 'Data Link Social', '2018-10-22 04:28:37', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:28:37', 1, 0),
(3129, 'Ubah', 'Data Link Social', '2018-10-22 04:37:40', 'User admin Ubah data menu Data Link Social', '2018-10-22 04:37:40', 1, 0),
(3130, 'Lihat', 'Data Link Social', '2018-10-22 04:37:40', 'User admin Lihat data menu Data Link Social', '2018-10-22 04:37:40', 1, 0),
(3131, 'Lihat', 'Data Kategori', '2018-10-22 05:55:17', 'User admin Lihat data menu Data Kategori', '2018-10-22 05:55:17', 1, 0),
(3132, 'Lihat', 'Data Link Social', '2018-10-22 05:55:27', 'User admin Lihat data menu Data Link Social', '2018-10-22 05:55:27', 1, 0),
(3133, 'Ubah', 'Data Link Social', '2018-10-22 05:58:00', 'User admin Ubah data menu Data Link Social', '2018-10-22 05:58:00', 1, 0),
(3134, 'Lihat', 'Data Link Social', '2018-10-22 05:58:00', 'User admin Lihat data menu Data Link Social', '2018-10-22 05:58:00', 1, 0),
(3135, 'Ubah', 'Data Link Social', '2018-10-22 05:58:37', 'User admin Ubah data menu Data Link Social', '2018-10-22 05:58:37', 1, 0),
(3136, 'Lihat', 'Data Link Social', '2018-10-22 05:58:37', 'User admin Lihat data menu Data Link Social', '2018-10-22 05:58:37', 1, 0),
(3137, 'Ubah', 'Data Link Social', '2018-10-22 05:59:10', 'User admin Ubah data menu Data Link Social', '2018-10-22 05:59:10', 1, 0),
(3138, 'Lihat', 'Data Link Social', '2018-10-22 05:59:10', 'User admin Lihat data menu Data Link Social', '2018-10-22 05:59:10', 1, 0),
(3139, 'Lihat', 'News', '2018-10-22 06:01:50', 'User admin Lihat data menu News', '2018-10-22 06:01:50', 1, 0),
(3140, 'Ubah', 'News', '2018-10-22 06:02:01', 'User admin Ubah data menu News', '2018-10-22 06:02:01', 1, 0),
(3141, 'Lihat', 'News', '2018-10-22 06:02:01', 'User admin Lihat data menu News', '2018-10-22 06:02:01', 1, 0),
(3142, 'Ubah', 'News', '2018-10-22 06:02:14', 'User admin Ubah data menu News', '2018-10-22 06:02:14', 1, 0),
(3143, 'Lihat', 'News', '2018-10-22 06:02:14', 'User admin Lihat data menu News', '2018-10-22 06:02:14', 1, 0),
(3144, 'Lihat', 'slider', '2018-10-22 06:04:10', 'User admin Lihat data menu slider', '2018-10-22 06:04:10', 1, 0),
(3145, 'Lihat', 'News', '2018-10-22 06:04:29', 'User admin Lihat data menu News', '2018-10-22 06:04:29', 1, 0),
(3146, 'Lihat', 'slider', '2018-10-22 06:04:32', 'User admin Lihat data menu slider', '2018-10-22 06:04:32', 1, 0),
(3147, 'Lihat', 'Data Link Social', '2018-10-22 06:04:47', 'User admin Lihat data menu Data Link Social', '2018-10-22 06:04:47', 1, 0),
(3148, 'Lihat', 'slider', '2018-10-22 06:04:54', 'User admin Lihat data menu slider', '2018-10-22 06:04:54', 1, 0),
(3149, 'Ubah', 'slider', '2018-10-22 06:05:05', 'User admin Ubah data menu slider', '2018-10-22 06:05:05', 1, 0),
(3150, 'Lihat', 'slider', '2018-10-22 06:05:05', 'User admin Lihat data menu slider', '2018-10-22 06:05:05', 1, 0),
(3151, 'Ubah', 'slider', '2018-10-22 06:05:17', 'User admin Ubah data menu slider', '2018-10-22 06:05:17', 1, 0),
(3152, 'Lihat', 'slider', '2018-10-22 06:05:17', 'User admin Lihat data menu slider', '2018-10-22 06:05:17', 1, 0),
(3153, 'Ubah', 'slider', '2018-10-22 06:05:45', 'User admin Ubah data menu slider', '2018-10-22 06:05:45', 1, 0),
(3154, 'Lihat', 'slider', '2018-10-22 06:05:45', 'User admin Lihat data menu slider', '2018-10-22 06:05:45', 1, 0),
(3155, 'Ubah', 'slider', '2018-10-22 06:06:51', 'User admin Ubah data menu slider', '2018-10-22 06:06:51', 1, 0),
(3156, 'Lihat', 'slider', '2018-10-22 06:06:51', 'User admin Lihat data menu slider', '2018-10-22 06:06:51', 1, 0),
(3157, 'Ubah', 'slider', '2018-10-22 06:11:34', 'User admin Ubah data menu slider', '2018-10-22 06:11:34', 1, 0),
(3158, 'Lihat', 'slider', '2018-10-22 06:11:34', 'User admin Lihat data menu slider', '2018-10-22 06:11:34', 1, 0),
(3159, 'Lihat', 'Data Kategori', '2018-10-22 06:14:51', 'User admin Lihat data menu Data Kategori', '2018-10-22 06:14:51', 1, 0),
(3160, 'Lihat', 'Data Kategori', '2018-10-22 06:15:53', 'User admin Lihat data menu Data Kategori', '2018-10-22 06:15:53', 1, 0),
(3161, 'Lihat', 'Faq', '2018-10-22 07:12:00', 'User admin Lihat data menu Faq', '2018-10-22 07:12:00', 1, 0),
(3162, 'Edit', 'Faq', '2018-10-22 07:12:22', 'User admin Edit data menu Faq', '2018-10-22 07:12:22', 1, 0),
(3163, 'Lihat', 'Faq', '2018-10-22 07:12:22', 'User admin Lihat data menu Faq', '2018-10-22 07:12:22', 1, 0),
(3164, 'Edit', 'Faq', '2018-10-22 07:12:48', 'User admin Edit data menu Faq', '2018-10-22 07:12:48', 1, 0),
(3165, 'Lihat', 'Faq', '2018-10-22 07:12:48', 'User admin Lihat data menu Faq', '2018-10-22 07:12:48', 1, 0),
(3166, 'Tambah', 'Faq', '2018-10-22 07:13:09', 'User admin Tambah data menu Faq', '2018-10-22 07:13:09', 1, 0),
(3167, 'Lihat', 'Faq', '2018-10-22 07:13:10', 'User admin Lihat data menu Faq', '2018-10-22 07:13:10', 1, 0),
(3168, 'Tambah', 'Faq', '2018-10-22 07:13:29', 'User admin Tambah data menu Faq', '2018-10-22 07:13:29', 1, 0),
(3169, 'Lihat', 'Faq', '2018-10-22 07:13:29', 'User admin Lihat data menu Faq', '2018-10-22 07:13:29', 1, 0),
(3170, 'Hapus', 'Faq', '2018-10-22 07:14:13', 'User admin Hapus data menu Faq', '2018-10-22 07:14:13', 1, 0),
(3171, 'Lihat', 'Faq', '2018-10-22 07:14:13', 'User admin Lihat data menu Faq', '2018-10-22 07:14:13', 1, 0),
(3172, 'Lihat', 'Data Link Social', '2018-10-22 08:12:21', 'User admin Lihat data menu Data Link Social', '2018-10-22 08:12:21', 1, 0),
(3173, 'Lihat', 'How to Order', '2018-10-22 08:12:24', 'User admin Lihat data menu How to Order', '2018-10-22 08:12:24', 1, 0),
(3174, 'Edit', 'How to Order', '2018-10-22 08:13:32', 'User admin Edit data menu How to Order', '2018-10-22 08:13:32', 1, 0),
(3175, 'Lihat', 'How to Order', '2018-10-22 08:13:32', 'User admin Lihat data menu How to Order', '2018-10-22 08:13:32', 1, 0),
(3176, 'Edit', 'How to Order', '2018-10-22 08:15:06', 'User admin Edit data menu How to Order', '2018-10-22 08:15:06', 1, 0),
(3177, 'Lihat', 'How to Order', '2018-10-22 08:15:06', 'User admin Lihat data menu How to Order', '2018-10-22 08:15:06', 1, 0),
(3178, 'Edit', 'How to Order', '2018-10-22 08:16:09', 'User admin Edit data menu How to Order', '2018-10-22 08:16:09', 1, 0),
(3179, 'Lihat', 'How to Order', '2018-10-22 08:16:09', 'User admin Lihat data menu How to Order', '2018-10-22 08:16:09', 1, 0),
(3180, 'Edit', 'How to Order', '2018-10-22 08:16:25', 'User admin Edit data menu How to Order', '2018-10-22 08:16:25', 1, 0),
(3181, 'Lihat', 'How to Order', '2018-10-22 08:16:25', 'User admin Lihat data menu How to Order', '2018-10-22 08:16:25', 1, 0),
(3182, 'Edit', 'How to Order', '2018-10-22 08:16:55', 'User admin Edit data menu How to Order', '2018-10-22 08:16:55', 1, 0),
(3183, 'Lihat', 'How to Order', '2018-10-22 08:16:55', 'User admin Lihat data menu How to Order', '2018-10-22 08:16:55', 1, 0),
(3184, 'Edit', 'How to Order', '2018-10-22 08:17:34', 'User admin Edit data menu How to Order', '2018-10-22 08:17:34', 1, 0),
(3185, 'Lihat', 'How to Order', '2018-10-22 08:17:34', 'User admin Lihat data menu How to Order', '2018-10-22 08:17:34', 1, 0),
(3186, 'Lihat', 'How to Order', '2018-10-22 08:17:40', 'User admin Lihat data menu How to Order', '2018-10-22 08:17:40', 1, 0),
(3187, 'Edit', 'How to Order', '2018-10-22 08:18:18', 'User admin Edit data menu How to Order', '2018-10-22 08:18:18', 1, 0),
(3188, 'Lihat', 'How to Order', '2018-10-22 08:18:18', 'User admin Lihat data menu How to Order', '2018-10-22 08:18:18', 1, 0),
(3189, 'Lihat', 'slider', '2018-10-22 08:32:15', 'User admin Lihat data menu slider', '2018-10-22 08:32:15', 1, 0),
(3190, 'Ubah', 'slider', '2018-10-22 08:32:33', 'User admin Ubah data menu slider', '2018-10-22 08:32:33', 1, 0),
(3191, 'Lihat', 'slider', '2018-10-22 08:32:34', 'User admin Lihat data menu slider', '2018-10-22 08:32:34', 1, 0),
(3192, 'Ubah', 'slider', '2018-10-22 08:32:44', 'User admin Ubah data menu slider', '2018-10-22 08:32:44', 1, 0),
(3193, 'Lihat', 'slider', '2018-10-22 08:32:45', 'User admin Lihat data menu slider', '2018-10-22 08:32:45', 1, 0),
(3194, 'Ubah', 'slider', '2018-10-22 10:00:30', 'User admin Ubah data menu slider', '2018-10-22 10:00:30', 1, 0),
(3195, 'Lihat', 'slider', '2018-10-22 10:00:32', 'User admin Lihat data menu slider', '2018-10-22 10:00:32', 1, 0),
(3196, 'Ubah', 'slider', '2018-10-22 10:01:30', 'User admin Ubah data menu slider', '2018-10-22 10:01:30', 1, 0),
(3197, 'Lihat', 'slider', '2018-10-22 10:01:30', 'User admin Lihat data menu slider', '2018-10-22 10:01:30', 1, 0),
(3198, 'Ubah', 'slider', '2018-10-22 10:02:14', 'User admin Ubah data menu slider', '2018-10-22 10:02:14', 1, 0),
(3199, 'Lihat', 'slider', '2018-10-22 10:02:14', 'User admin Lihat data menu slider', '2018-10-22 10:02:14', 1, 0),
(3200, 'Lihat', 'Data Kategori', '2018-10-22 10:02:51', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:02:51', 1, 0),
(3201, 'Lihat', 'Data Kategori', '2018-10-22 10:10:04', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:04', 1, 0),
(3202, 'Tambah', 'Data Kategori', '2018-10-22 10:10:19', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:19', 1, 0),
(3203, 'Lihat', 'Data Kategori', '2018-10-22 10:10:19', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:19', 1, 0),
(3204, 'Tambah', 'Data Kategori', '2018-10-22 10:10:26', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:26', 1, 0),
(3205, 'Lihat', 'Data Kategori', '2018-10-22 10:10:26', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:26', 1, 0),
(3206, 'Tambah', 'Data Kategori', '2018-10-22 10:10:38', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:38', 1, 0),
(3207, 'Lihat', 'Data Kategori', '2018-10-22 10:10:39', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:39', 1, 0),
(3208, 'Tambah', 'Data Kategori', '2018-10-22 10:10:45', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:45', 1, 0),
(3209, 'Lihat', 'Data Kategori', '2018-10-22 10:10:45', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:45', 1, 0),
(3210, 'Tambah', 'Data Kategori', '2018-10-22 10:10:53', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:53', 1, 0),
(3211, 'Lihat', 'Data Kategori', '2018-10-22 10:10:53', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:53', 1, 0),
(3212, 'Tambah', 'Data Kategori', '2018-10-22 10:10:59', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:10:59', 1, 0),
(3213, 'Lihat', 'Data Kategori', '2018-10-22 10:10:59', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:10:59', 1, 0),
(3214, 'Tambah', 'Data Kategori', '2018-10-22 10:11:09', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:09', 1, 0),
(3215, 'Lihat', 'Data Kategori', '2018-10-22 10:11:09', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:09', 1, 0),
(3216, 'Tambah', 'Data Kategori', '2018-10-22 10:11:20', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:20', 1, 0),
(3217, 'Lihat', 'Data Kategori', '2018-10-22 10:11:21', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:21', 1, 0),
(3218, 'Tambah', 'Data Kategori', '2018-10-22 10:11:27', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:27', 1, 0),
(3219, 'Lihat', 'Data Kategori', '2018-10-22 10:11:27', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:27', 1, 0),
(3220, 'Tambah', 'Data Kategori', '2018-10-22 10:11:32', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:32', 1, 0),
(3221, 'Lihat', 'Data Kategori', '2018-10-22 10:11:32', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:32', 1, 0),
(3222, 'Tambah', 'Data Kategori', '2018-10-22 10:11:40', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:40', 1, 0),
(3223, 'Lihat', 'Data Kategori', '2018-10-22 10:11:40', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:40', 1, 0),
(3224, 'Tambah', 'Data Kategori', '2018-10-22 10:11:45', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:45', 1, 0),
(3225, 'Lihat', 'Data Kategori', '2018-10-22 10:11:45', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:45', 1, 0),
(3226, 'Tambah', 'Data Kategori', '2018-10-22 10:11:49', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:49', 1, 0),
(3227, 'Lihat', 'Data Kategori', '2018-10-22 10:11:50', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:50', 1, 0),
(3228, 'Tambah', 'Data Kategori', '2018-10-22 10:11:59', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:11:59', 1, 0),
(3229, 'Lihat', 'Data Kategori', '2018-10-22 10:11:59', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:11:59', 1, 0),
(3230, 'Tambah', 'Data Kategori', '2018-10-22 10:12:04', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:04', 1, 0),
(3231, 'Lihat', 'Data Kategori', '2018-10-22 10:12:04', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:04', 1, 0),
(3232, 'Tambah', 'Data Kategori', '2018-10-22 10:12:10', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:10', 1, 0),
(3233, 'Lihat', 'Data Kategori', '2018-10-22 10:12:10', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:10', 1, 0),
(3234, 'Tambah', 'Data Kategori', '2018-10-22 10:12:20', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:20', 1, 0),
(3235, 'Lihat', 'Data Kategori', '2018-10-22 10:12:20', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:20', 1, 0),
(3236, 'Tambah', 'Data Kategori', '2018-10-22 10:12:25', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:25', 1, 0),
(3237, 'Lihat', 'Data Kategori', '2018-10-22 10:12:25', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:25', 1, 0),
(3238, 'Tambah', 'Data Kategori', '2018-10-22 10:12:32', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:32', 1, 0),
(3239, 'Lihat', 'Data Kategori', '2018-10-22 10:12:32', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:32', 1, 0),
(3240, 'Tambah', 'Data Kategori', '2018-10-22 10:12:43', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:43', 1, 0),
(3241, 'Lihat', 'Data Kategori', '2018-10-22 10:12:43', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:43', 1, 0),
(3242, 'Tambah', 'Data Kategori', '2018-10-22 10:12:49', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:49', 1, 0),
(3243, 'Lihat', 'Data Kategori', '2018-10-22 10:12:49', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:49', 1, 0),
(3244, 'Tambah', 'Data Kategori', '2018-10-22 10:12:59', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:12:59', 1, 0),
(3245, 'Lihat', 'Data Kategori', '2018-10-22 10:12:59', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:12:59', 1, 0),
(3246, 'Tambah', 'Data Kategori', '2018-10-22 10:13:06', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:06', 1, 0),
(3247, 'Lihat', 'Data Kategori', '2018-10-22 10:13:06', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:06', 1, 0),
(3248, 'Tambah', 'Data Kategori', '2018-10-22 10:13:18', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:18', 1, 0),
(3249, 'Lihat', 'Data Kategori', '2018-10-22 10:13:18', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:18', 1, 0),
(3250, 'Tambah', 'Data Kategori', '2018-10-22 10:13:25', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:25', 1, 0),
(3251, 'Lihat', 'Data Kategori', '2018-10-22 10:13:25', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:25', 1, 0),
(3252, 'Tambah', 'Data Kategori', '2018-10-22 10:13:33', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:33', 1, 0),
(3253, 'Lihat', 'Data Kategori', '2018-10-22 10:13:33', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:33', 1, 0),
(3254, 'Tambah', 'Data Kategori', '2018-10-22 10:13:37', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:37', 1, 0),
(3255, 'Lihat', 'Data Kategori', '2018-10-22 10:13:37', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:37', 1, 0),
(3256, 'Tambah', 'Data Kategori', '2018-10-22 10:13:43', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:43', 1, 0),
(3257, 'Lihat', 'Data Kategori', '2018-10-22 10:13:43', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:43', 1, 0),
(3258, 'Tambah', 'Data Kategori', '2018-10-22 10:13:54', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:54', 1, 0),
(3259, 'Lihat', 'Data Kategori', '2018-10-22 10:13:54', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:54', 1, 0),
(3260, 'Tambah', 'Data Kategori', '2018-10-22 10:13:59', 'User admin Tambah data menu Data Kategori', '2018-10-22 10:13:59', 1, 0),
(3261, 'Lihat', 'Data Kategori', '2018-10-22 10:13:59', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:13:59', 1, 0),
(3262, 'Ubah', 'Data Kategori', '2018-10-22 10:14:10', 'User admin Ubah data menu Data Kategori', '2018-10-22 10:14:10', 1, 0),
(3263, 'Lihat', 'Data Kategori', '2018-10-22 10:14:11', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:14:11', 1, 0),
(3264, 'Ubah', 'Data Kategori', '2018-10-22 10:14:23', 'User admin Ubah data menu Data Kategori', '2018-10-22 10:14:23', 1, 0),
(3265, 'Lihat', 'Data Kategori', '2018-10-22 10:14:23', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:14:23', 1, 0),
(3266, 'Ubah', 'Data Kategori', '2018-10-22 10:14:35', 'User admin Ubah data menu Data Kategori', '2018-10-22 10:14:35', 1, 0),
(3267, 'Lihat', 'Data Kategori', '2018-10-22 10:14:35', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:14:35', 1, 0),
(3268, 'Lihat', 'Data Kategori', '2018-10-22 10:15:14', 'User admin Lihat data menu Data Kategori', '2018-10-22 10:15:14', 1, 0),
(3269, 'Lihat', 'Data Produk', '2018-10-22 10:17:08', 'User admin Lihat data menu Data Produk', '2018-10-22 10:17:08', 1, 0),
(3270, 'Ubah', 'Data Produk', '2018-10-22 10:17:43', 'User admin Ubah data menu Data Produk', '2018-10-22 10:17:43', 1, 0),
(3271, 'Lihat', 'Data Produk', '2018-10-22 10:17:43', 'User admin Lihat data menu Data Produk', '2018-10-22 10:17:43', 1, 0),
(3272, 'Lihat', 'Data Produk', '2018-10-22 10:18:44', 'User admin Lihat data menu Data Produk', '2018-10-22 10:18:44', 1, 0),
(3273, 'Ubah', 'Data Produk', '2018-10-22 10:19:07', 'User admin Ubah data menu Data Produk', '2018-10-22 10:19:07', 1, 0),
(3274, 'Lihat', 'Data Produk', '2018-10-22 10:19:07', 'User admin Lihat data menu Data Produk', '2018-10-22 10:19:07', 1, 0),
(3275, 'Lihat', 'Data Produk Detil', '2018-10-22 10:19:15', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:19:15', 1, 0),
(3276, 'Lihat', 'Data Produk', '2018-10-22 10:19:22', 'User admin Lihat data menu Data Produk', '2018-10-22 10:19:22', 1, 0),
(3277, 'Lihat', 'Data Produk', '2018-10-22 10:19:31', 'User admin Lihat data menu Data Produk', '2018-10-22 10:19:31', 1, 0),
(3278, 'Lihat', 'Data Produk', '2018-10-22 10:28:12', 'User admin Lihat data menu Data Produk', '2018-10-22 10:28:12', 1, 0),
(3279, 'Ubah', 'Data Produk', '2018-10-22 10:28:42', 'User admin Ubah data menu Data Produk', '2018-10-22 10:28:42', 1, 0),
(3280, 'Lihat', 'Data Produk', '2018-10-22 10:28:43', 'User admin Lihat data menu Data Produk', '2018-10-22 10:28:43', 1, 0),
(3281, 'Lihat', 'Data Produk Detil', '2018-10-22 10:29:01', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:29:01', 1, 0),
(3282, 'Tambah', 'Data Produk Detil', '2018-10-22 10:29:11', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:29:11', 1, 0),
(3283, 'Lihat', 'Data Produk Detil', '2018-10-22 10:29:11', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:29:11', 1, 0),
(3284, 'Tambah', 'Data Produk Detil', '2018-10-22 10:29:18', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:29:18', 1, 0),
(3285, 'Lihat', 'Data Produk Detil', '2018-10-22 10:29:18', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:29:18', 1, 0),
(3286, 'Tambah', 'Data Produk Detil', '2018-10-22 10:29:24', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:29:24', 1, 0),
(3287, 'Lihat', 'Data Produk Detil', '2018-10-22 10:29:25', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:29:25', 1, 0),
(3288, 'Lihat', 'Data Produk', '2018-10-22 10:30:17', 'User admin Lihat data menu Data Produk', '2018-10-22 10:30:17', 1, 0),
(3289, 'Lihat', 'Data Produk', '2018-10-22 10:30:29', 'User admin Lihat data menu Data Produk', '2018-10-22 10:30:29', 1, 0),
(3290, 'Lihat', 'Data Produk Detil', '2018-10-22 10:33:23', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:33:23', 1, 0),
(3291, 'Tambah', 'Data Produk Detil', '2018-10-22 10:33:30', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:33:30', 1, 0),
(3292, 'Lihat', 'Data Produk Detil', '2018-10-22 10:33:30', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:33:30', 1, 0),
(3293, 'Lihat', 'Data Produk', '2018-10-22 10:33:34', 'User admin Lihat data menu Data Produk', '2018-10-22 10:33:34', 1, 0),
(3294, 'Ubah', 'Data Produk', '2018-10-22 10:39:01', 'User admin Ubah data menu Data Produk', '2018-10-22 10:39:01', 1, 0),
(3295, 'Lihat', 'Data Produk', '2018-10-22 10:39:01', 'User admin Lihat data menu Data Produk', '2018-10-22 10:39:01', 1, 0),
(3296, 'Lihat', 'Data Produk Detil', '2018-10-22 10:39:11', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:39:11', 1, 0),
(3297, 'Tambah', 'Data Produk Detil', '2018-10-22 10:39:19', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:39:19', 1, 0),
(3298, 'Lihat', 'Data Produk Detil', '2018-10-22 10:39:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:39:19', 1, 0),
(3299, 'Tambah', 'Data Produk Detil', '2018-10-22 10:39:26', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:39:26', 1, 0),
(3300, 'Lihat', 'Data Produk Detil', '2018-10-22 10:39:26', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:39:26', 1, 0),
(3301, 'Tambah', 'Data Produk Detil', '2018-10-22 10:39:32', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:39:32', 1, 0),
(3302, 'Lihat', 'Data Produk Detil', '2018-10-22 10:39:32', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:39:32', 1, 0),
(3303, 'Tambah', 'Data Produk Detil', '2018-10-22 10:39:42', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:39:42', 1, 0),
(3304, 'Lihat', 'Data Produk Detil', '2018-10-22 10:39:42', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:39:42', 1, 0),
(3305, 'Lihat', 'Data Produk', '2018-10-22 10:40:09', 'User admin Lihat data menu Data Produk', '2018-10-22 10:40:09', 1, 0),
(3306, 'Lihat', 'Data Produk', '2018-10-22 10:40:20', 'User admin Lihat data menu Data Produk', '2018-10-22 10:40:20', 1, 0);
INSERT INTO `log` (`log_id`, `log_action`, `log_menu`, `log_tanggal`, `log_keterangan`, `last_update`, `last_user_id`, `is_delete`) VALUES
(3307, 'Lihat', 'Data Produk', '2018-10-22 10:42:35', 'User admin Lihat data menu Data Produk', '2018-10-22 10:42:35', 1, 0),
(3308, 'Tambah', 'Data Produk', '2018-10-22 10:43:22', 'User admin Tambah data menu Data Produk', '2018-10-22 10:43:22', 1, 0),
(3309, 'Lihat', 'Data Produk', '2018-10-22 10:43:22', 'User admin Lihat data menu Data Produk', '2018-10-22 10:43:22', 1, 0),
(3310, 'Lihat', 'Data Produk Detil', '2018-10-22 10:43:25', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:43:25', 1, 0),
(3311, 'Tambah', 'Data Produk Detil', '2018-10-22 10:43:34', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:43:34', 1, 0),
(3312, 'Lihat', 'Data Produk Detil', '2018-10-22 10:43:35', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:43:35', 1, 0),
(3313, 'Lihat', 'Data Produk', '2018-10-22 10:43:38', 'User admin Lihat data menu Data Produk', '2018-10-22 10:43:38', 1, 0),
(3314, 'Tambah', 'Data Produk', '2018-10-22 10:44:06', 'User admin Tambah data menu Data Produk', '2018-10-22 10:44:06', 1, 0),
(3315, 'Lihat', 'Data Produk', '2018-10-22 10:44:07', 'User admin Lihat data menu Data Produk', '2018-10-22 10:44:07', 1, 0),
(3316, 'Lihat', 'Data Produk Detil', '2018-10-22 10:44:20', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:44:20', 1, 0),
(3317, 'Tambah', 'Data Produk Detil', '2018-10-22 10:44:34', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:44:34', 1, 0),
(3318, 'Lihat', 'Data Produk Detil', '2018-10-22 10:44:34', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:44:34', 1, 0),
(3319, 'Lihat', 'Data Produk', '2018-10-22 10:44:38', 'User admin Lihat data menu Data Produk', '2018-10-22 10:44:38', 1, 0),
(3320, 'Tambah', 'Data Produk', '2018-10-22 10:44:57', 'User admin Tambah data menu Data Produk', '2018-10-22 10:44:57', 1, 0),
(3321, 'Lihat', 'Data Produk', '2018-10-22 10:44:58', 'User admin Lihat data menu Data Produk', '2018-10-22 10:44:58', 1, 0),
(3322, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:03', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:03', 1, 0),
(3323, 'Tambah', 'Data Produk Detil', '2018-10-22 10:45:18', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:45:18', 1, 0),
(3324, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:18', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:18', 1, 0),
(3325, 'Tambah', 'Data Produk Detil', '2018-10-22 10:45:25', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:45:25', 1, 0),
(3326, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:25', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:25', 1, 0),
(3327, 'Tambah', 'Data Produk Detil', '2018-10-22 10:45:31', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:45:31', 1, 0),
(3328, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:31', 1, 0),
(3329, 'Tambah', 'Data Produk Detil', '2018-10-22 10:45:39', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:45:39', 1, 0),
(3330, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:39', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:39', 1, 0),
(3331, 'Lihat', 'Data Produk Detil', '2018-10-22 10:45:44', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:45:44', 1, 0),
(3332, 'Lihat', 'Data Produk', '2018-10-22 10:45:46', 'User admin Lihat data menu Data Produk', '2018-10-22 10:45:46', 1, 0),
(3333, 'Tambah', 'Data Produk', '2018-10-22 10:45:58', 'User admin Tambah data menu Data Produk', '2018-10-22 10:45:58', 1, 0),
(3334, 'Lihat', 'Data Produk', '2018-10-22 10:45:59', 'User admin Lihat data menu Data Produk', '2018-10-22 10:45:59', 1, 0),
(3335, 'Lihat', 'Data Produk Detil', '2018-10-22 10:46:08', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:46:08', 1, 0),
(3336, 'Tambah', 'Data Produk Detil', '2018-10-22 10:46:17', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:46:17', 1, 0),
(3337, 'Lihat', 'Data Produk Detil', '2018-10-22 10:46:17', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:46:17', 1, 0),
(3338, 'Tambah', 'Data Produk Detil', '2018-10-22 10:46:45', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:46:45', 1, 0),
(3339, 'Lihat', 'Data Produk Detil', '2018-10-22 10:46:50', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:46:50', 1, 0),
(3340, 'Tambah', 'Data Produk Detil', '2018-10-22 10:47:05', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:47:05', 1, 0),
(3341, 'Lihat', 'Data Produk Detil', '2018-10-22 10:47:06', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:47:06', 1, 0),
(3342, 'Tambah', 'Data Produk Detil', '2018-10-22 10:47:33', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:47:33', 1, 0),
(3343, 'Lihat', 'Data Produk Detil', '2018-10-22 10:47:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:47:33', 1, 0),
(3344, 'Lihat', 'Data Produk', '2018-10-22 10:48:24', 'User admin Lihat data menu Data Produk', '2018-10-22 10:48:24', 1, 0),
(3345, 'Tambah', 'Data Produk', '2018-10-22 10:49:02', 'User admin Tambah data menu Data Produk', '2018-10-22 10:49:02', 1, 0),
(3346, 'Lihat', 'Data Produk', '2018-10-22 10:49:02', 'User admin Lihat data menu Data Produk', '2018-10-22 10:49:02', 1, 0),
(3347, 'Tambah', 'Data Produk', '2018-10-22 10:49:33', 'User admin Tambah data menu Data Produk', '2018-10-22 10:49:33', 1, 0),
(3348, 'Lihat', 'Data Produk', '2018-10-22 10:49:36', 'User admin Lihat data menu Data Produk', '2018-10-22 10:49:36', 1, 0),
(3349, 'Lihat', 'Data Produk Detil', '2018-10-22 10:49:45', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:49:45', 1, 0),
(3350, 'Tambah', 'Data Produk Detil', '2018-10-22 10:49:52', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:49:52', 1, 0),
(3351, 'Lihat', 'Data Produk Detil', '2018-10-22 10:49:53', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:49:53', 1, 0),
(3352, 'Tambah', 'Data Produk Detil', '2018-10-22 10:50:09', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:50:09', 1, 0),
(3353, 'Lihat', 'Data Produk Detil', '2018-10-22 10:50:09', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:50:09', 1, 0),
(3354, 'Lihat', 'Data Produk', '2018-10-22 10:50:51', 'User admin Lihat data menu Data Produk', '2018-10-22 10:50:51', 1, 0),
(3355, 'Lihat', 'Data Produk', '2018-10-22 10:56:52', 'User admin Lihat data menu Data Produk', '2018-10-22 10:56:52', 1, 0),
(3356, 'Lihat', 'Data Produk Detil', '2018-10-22 10:56:58', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:56:58', 1, 0),
(3357, 'Tambah', 'Data Produk Detil', '2018-10-22 10:57:04', 'User admin Tambah data menu Data Produk Detil', '2018-10-22 10:57:04', 1, 0),
(3358, 'Lihat', 'Data Produk Detil', '2018-10-22 10:57:04', 'User admin Lihat data menu Data Produk Detil', '2018-10-22 10:57:04', 1, 0),
(3359, 'Lihat', 'Data Produk', '2018-10-22 14:16:03', 'User admin Lihat data menu Data Produk', '2018-10-22 14:16:03', 1, 0),
(3360, 'Ubah', 'Data Produk', '2018-10-22 14:16:15', 'User admin Ubah data menu Data Produk', '2018-10-22 14:16:15', 1, 0),
(3361, 'Lihat', 'Data Produk', '2018-10-22 14:16:15', 'User admin Lihat data menu Data Produk', '2018-10-22 14:16:15', 1, 0),
(3362, 'Lihat', 'Data Produk', '2018-10-23 02:03:57', 'User admin Lihat data menu Data Produk', '2018-10-23 02:03:57', 1, 0),
(3363, 'Ubah', 'Data Produk', '2018-10-23 02:04:14', 'User admin Ubah data menu Data Produk', '2018-10-23 02:04:14', 1, 0),
(3364, 'Lihat', 'Data Produk', '2018-10-23 02:04:14', 'User admin Lihat data menu Data Produk', '2018-10-23 02:04:14', 1, 0),
(3365, 'Lihat', 'Data Produk', '2018-10-23 02:58:18', 'User admin Lihat data menu Data Produk', '2018-10-23 02:58:18', 1, 0),
(3366, 'Lihat', 'Data Link Social', '2018-10-23 03:06:41', 'User admin Lihat data menu Data Link Social', '2018-10-23 03:06:41', 1, 0),
(3367, 'Ubah', 'Data Link Social', '2018-10-23 03:08:16', 'User admin Ubah data menu Data Link Social', '2018-10-23 03:08:16', 1, 0),
(3368, 'Lihat', 'Data Link Social', '2018-10-23 03:08:16', 'User admin Lihat data menu Data Link Social', '2018-10-23 03:08:16', 1, 0),
(3369, 'Lihat', 'Data Produk', '2018-10-23 03:16:10', 'User admin Lihat data menu Data Produk', '2018-10-23 03:16:10', 1, 0),
(3370, 'Tambah', 'Data Produk', '2018-10-23 03:21:47', 'User admin Tambah data menu Data Produk', '2018-10-23 03:21:47', 1, 0),
(3371, 'Lihat', 'Data Produk', '2018-10-23 03:21:48', 'User admin Lihat data menu Data Produk', '2018-10-23 03:21:48', 1, 0),
(3372, 'Tambah', 'Data Produk', '2018-10-23 03:30:09', 'User admin Tambah data menu Data Produk', '2018-10-23 03:30:09', 1, 0),
(3373, 'Lihat', 'Data Produk', '2018-10-23 03:30:10', 'User admin Lihat data menu Data Produk', '2018-10-23 03:30:10', 1, 0),
(3374, 'Lihat', 'Data Produk Detil', '2018-10-23 03:30:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:30:31', 1, 0),
(3375, 'Tambah', 'Data Produk Detil', '2018-10-23 03:30:55', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:30:55', 1, 0),
(3376, 'Lihat', 'Data Produk Detil', '2018-10-23 03:30:55', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:30:55', 1, 0),
(3377, 'Tambah', 'Data Produk Detil', '2018-10-23 03:31:01', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:31:01', 1, 0),
(3378, 'Lihat', 'Data Produk Detil', '2018-10-23 03:31:01', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:31:01', 1, 0),
(3379, 'Tambah', 'Data Produk Detil', '2018-10-23 03:31:07', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:31:07', 1, 0),
(3380, 'Lihat', 'Data Produk Detil', '2018-10-23 03:31:07', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:31:07', 1, 0),
(3381, 'Lihat', 'Data Produk', '2018-10-23 03:32:31', 'User admin Lihat data menu Data Produk', '2018-10-23 03:32:31', 1, 0),
(3382, 'Tambah', 'Data Produk', '2018-10-23 03:32:58', 'User admin Tambah data menu Data Produk', '2018-10-23 03:32:58', 1, 0),
(3383, 'Lihat', 'Data Produk', '2018-10-23 03:33:21', 'User admin Lihat data menu Data Produk', '2018-10-23 03:33:21', 1, 0),
(3384, 'Lihat', 'Data Produk', '2018-10-23 03:33:26', 'User admin Lihat data menu Data Produk', '2018-10-23 03:33:26', 1, 0),
(3385, 'Lihat', 'Data Produk Detil', '2018-10-23 03:33:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:33:31', 1, 0),
(3386, 'Tambah', 'Data Produk Detil', '2018-10-23 03:33:37', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:33:37', 1, 0),
(3387, 'Lihat', 'Data Produk Detil', '2018-10-23 03:33:37', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:33:37', 1, 0),
(3388, 'Tambah', 'Data Produk Detil', '2018-10-23 03:33:43', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:33:43', 1, 0),
(3389, 'Lihat', 'Data Produk Detil', '2018-10-23 03:33:43', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:33:43', 1, 0),
(3390, 'Lihat', 'Data Produk', '2018-10-23 03:33:47', 'User admin Lihat data menu Data Produk', '2018-10-23 03:33:47', 1, 0),
(3391, 'Tambah', 'Data Produk', '2018-10-23 03:34:49', 'User admin Tambah data menu Data Produk', '2018-10-23 03:34:49', 1, 0),
(3392, 'Lihat', 'Data Produk', '2018-10-23 03:34:49', 'User admin Lihat data menu Data Produk', '2018-10-23 03:34:49', 1, 0),
(3393, 'Lihat', 'Data Produk Detil', '2018-10-23 03:34:56', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:34:56', 1, 0),
(3394, 'Tambah', 'Data Produk Detil', '2018-10-23 03:35:02', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:35:02', 1, 0),
(3395, 'Lihat', 'Data Produk Detil', '2018-10-23 03:35:02', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:35:02', 1, 0),
(3396, 'Lihat', 'Data Produk', '2018-10-23 03:35:24', 'User admin Lihat data menu Data Produk', '2018-10-23 03:35:24', 1, 0),
(3397, 'Tambah', 'Data Produk', '2018-10-23 03:36:18', 'User admin Tambah data menu Data Produk', '2018-10-23 03:36:18', 1, 0),
(3398, 'Lihat', 'Data Produk', '2018-10-23 03:36:18', 'User admin Lihat data menu Data Produk', '2018-10-23 03:36:18', 1, 0),
(3399, 'Lihat', 'Data Produk Detil', '2018-10-23 03:36:28', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:36:28', 1, 0),
(3400, 'Tambah', 'Data Produk Detil', '2018-10-23 03:36:33', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:36:33', 1, 0),
(3401, 'Lihat', 'Data Produk Detil', '2018-10-23 03:36:34', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:36:34', 1, 0),
(3402, 'Lihat', 'Data Produk Detil', '2018-10-23 03:37:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:37:31', 1, 0),
(3403, 'Lihat', 'Data Produk', '2018-10-23 03:37:34', 'User admin Lihat data menu Data Produk', '2018-10-23 03:37:34', 1, 0),
(3404, 'Tambah', 'Data Produk', '2018-10-23 03:38:42', 'User admin Tambah data menu Data Produk', '2018-10-23 03:38:42', 1, 0),
(3405, 'Lihat', 'Data Produk', '2018-10-23 03:38:43', 'User admin Lihat data menu Data Produk', '2018-10-23 03:38:43', 1, 0),
(3406, 'Lihat', 'Data Produk Detil', '2018-10-23 03:38:49', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:38:49', 1, 0),
(3407, 'Tambah', 'Data Produk Detil', '2018-10-23 03:38:55', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:38:55', 1, 0),
(3408, 'Lihat', 'Data Produk Detil', '2018-10-23 03:38:55', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:38:55', 1, 0),
(3409, 'Tambah', 'Data Produk Detil', '2018-10-23 03:39:00', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:39:00', 1, 0),
(3410, 'Lihat', 'Data Produk Detil', '2018-10-23 03:39:00', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:39:00', 1, 0),
(3411, 'Lihat', 'Data Produk', '2018-10-23 03:41:02', 'User admin Lihat data menu Data Produk', '2018-10-23 03:41:02', 1, 0),
(3412, 'Tambah', 'Data Produk', '2018-10-23 03:41:27', 'User admin Tambah data menu Data Produk', '2018-10-23 03:41:27', 1, 0),
(3413, 'Lihat', 'Data Produk', '2018-10-23 03:41:27', 'User admin Lihat data menu Data Produk', '2018-10-23 03:41:27', 1, 0),
(3414, 'Lihat', 'Data Produk Detil', '2018-10-23 03:41:36', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:41:36', 1, 0),
(3415, 'Tambah', 'Data Produk Detil', '2018-10-23 03:41:41', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:41:41', 1, 0),
(3416, 'Lihat', 'Data Produk Detil', '2018-10-23 03:41:41', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:41:41', 1, 0),
(3417, 'Tambah', 'Data Produk Detil', '2018-10-23 03:41:47', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:41:47', 1, 0),
(3418, 'Lihat', 'Data Produk Detil', '2018-10-23 03:41:47', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:41:47', 1, 0),
(3419, 'Tambah', 'Data Produk Detil', '2018-10-23 03:41:53', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:41:53', 1, 0),
(3420, 'Lihat', 'Data Produk Detil', '2018-10-23 03:41:53', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:41:53', 1, 0),
(3421, 'Lihat', 'Data Produk', '2018-10-23 03:42:03', 'User admin Lihat data menu Data Produk', '2018-10-23 03:42:03', 1, 0),
(3422, 'Tambah', 'Data Produk', '2018-10-23 03:43:12', 'User admin Tambah data menu Data Produk', '2018-10-23 03:43:12', 1, 0),
(3423, 'Lihat', 'Data Produk', '2018-10-23 03:43:13', 'User admin Lihat data menu Data Produk', '2018-10-23 03:43:13', 1, 0),
(3424, 'Lihat', 'Data Produk Detil', '2018-10-23 03:43:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:43:19', 1, 0),
(3425, 'Tambah', 'Data Produk Detil', '2018-10-23 03:43:25', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:43:25', 1, 0),
(3426, 'Lihat', 'Data Produk Detil', '2018-10-23 03:43:25', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:43:25', 1, 0),
(3427, 'Tambah', 'Data Produk Detil', '2018-10-23 03:43:31', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:43:31', 1, 0),
(3428, 'Lihat', 'Data Produk Detil', '2018-10-23 03:43:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:43:31', 1, 0),
(3429, 'Tambah', 'Data Produk Detil', '2018-10-23 03:43:36', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:43:36', 1, 0),
(3430, 'Lihat', 'Data Produk Detil', '2018-10-23 03:43:36', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:43:36', 1, 0),
(3431, 'Tambah', 'Data Produk Detil', '2018-10-23 03:43:41', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:43:41', 1, 0),
(3432, 'Lihat', 'Data Produk Detil', '2018-10-23 03:43:42', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:43:42', 1, 0),
(3433, 'Lihat', 'Data Produk', '2018-10-23 03:43:45', 'User admin Lihat data menu Data Produk', '2018-10-23 03:43:45', 1, 0),
(3434, 'Tambah', 'Data Produk', '2018-10-23 03:45:04', 'User admin Tambah data menu Data Produk', '2018-10-23 03:45:04', 1, 0),
(3435, 'Lihat', 'Data Produk', '2018-10-23 03:45:05', 'User admin Lihat data menu Data Produk', '2018-10-23 03:45:05', 1, 0),
(3436, 'Lihat', 'Data Produk Detil', '2018-10-23 03:45:11', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:45:11', 1, 0),
(3437, 'Tambah', 'Data Produk Detil', '2018-10-23 03:45:22', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:45:22', 1, 0),
(3438, 'Lihat', 'Data Produk Detil', '2018-10-23 03:45:22', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:45:22', 1, 0),
(3439, 'Tambah', 'Data Produk Detil', '2018-10-23 03:45:34', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:45:34', 1, 0),
(3440, 'Lihat', 'Data Produk Detil', '2018-10-23 03:45:34', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:45:34', 1, 0),
(3441, 'Tambah', 'Data Produk Detil', '2018-10-23 03:45:43', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 03:45:43', 1, 0),
(3442, 'Lihat', 'Data Produk Detil', '2018-10-23 03:45:43', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 03:45:43', 1, 0),
(3443, 'Lihat', 'Data Produk', '2018-10-23 03:46:25', 'User admin Lihat data menu Data Produk', '2018-10-23 03:46:25', 1, 0),
(3444, 'Tambah', 'Data Produk', '2018-10-23 03:48:09', 'User admin Tambah data menu Data Produk', '2018-10-23 03:48:09', 1, 0),
(3445, 'Lihat', 'Data Produk', '2018-10-23 03:48:09', 'User admin Lihat data menu Data Produk', '2018-10-23 03:48:09', 1, 0),
(3446, 'Lihat', 'Data Produk', '2018-10-23 04:57:39', 'User admin Lihat data menu Data Produk', '2018-10-23 04:57:39', 1, 0),
(3447, 'Lihat', 'Data Produk', '2018-10-23 04:58:00', 'User admin Lihat data menu Data Produk', '2018-10-23 04:58:00', 1, 0),
(3448, 'Tambah', 'Data Produk', '2018-10-23 05:06:23', 'User admin Tambah data menu Data Produk', '2018-10-23 05:06:23', 1, 0),
(3449, 'Lihat', 'Data Produk', '2018-10-23 05:06:24', 'User admin Lihat data menu Data Produk', '2018-10-23 05:06:24', 1, 0),
(3450, 'Tambah', 'Data Produk', '2018-10-23 05:08:32', 'User admin Tambah data menu Data Produk', '2018-10-23 05:08:32', 1, 0),
(3451, 'Lihat', 'Data Produk', '2018-10-23 05:08:32', 'User admin Lihat data menu Data Produk', '2018-10-23 05:08:32', 1, 0),
(3452, 'Lihat', 'Data Produk Detil', '2018-10-23 05:08:45', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:08:45', 1, 0),
(3453, 'Tambah', 'Data Produk Detil', '2018-10-23 05:08:51', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:08:51', 1, 0),
(3454, 'Lihat', 'Data Produk Detil', '2018-10-23 05:08:51', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:08:51', 1, 0),
(3455, 'Lihat', 'Data Produk', '2018-10-23 05:08:53', 'User admin Lihat data menu Data Produk', '2018-10-23 05:08:53', 1, 0),
(3456, 'Lihat', 'Data Produk Detil', '2018-10-23 05:09:01', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:09:01', 1, 0),
(3457, 'Tambah', 'Data Produk Detil', '2018-10-23 05:09:07', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:09:07', 1, 0),
(3458, 'Lihat', 'Data Produk Detil', '2018-10-23 05:09:07', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:09:07', 1, 0),
(3459, 'Tambah', 'Data Produk Detil', '2018-10-23 05:09:13', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:09:13', 1, 0),
(3460, 'Lihat', 'Data Produk Detil', '2018-10-23 05:09:13', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:09:13', 1, 0),
(3461, 'Tambah', 'Data Produk Detil', '2018-10-23 05:09:18', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:09:18', 1, 0),
(3462, 'Lihat', 'Data Produk Detil', '2018-10-23 05:09:18', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:09:18', 1, 0),
(3463, 'Lihat', 'Data Produk Detil', '2018-10-23 05:09:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:09:33', 1, 0),
(3464, 'Lihat', 'Data Produk', '2018-10-23 05:09:34', 'User admin Lihat data menu Data Produk', '2018-10-23 05:09:34', 1, 0),
(3465, 'Tambah', 'Data Produk', '2018-10-23 05:10:24', 'User admin Tambah data menu Data Produk', '2018-10-23 05:10:24', 1, 0),
(3466, 'Lihat', 'Data Produk', '2018-10-23 05:10:25', 'User admin Lihat data menu Data Produk', '2018-10-23 05:10:25', 1, 0),
(3467, 'Lihat', 'Data Produk Detil', '2018-10-23 05:10:30', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:10:30', 1, 0),
(3468, 'Tambah', 'Data Produk Detil', '2018-10-23 05:10:35', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:10:35', 1, 0),
(3469, 'Lihat', 'Data Produk Detil', '2018-10-23 05:10:35', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:10:35', 1, 0),
(3470, 'Lihat', 'Data Produk', '2018-10-23 05:11:09', 'User admin Lihat data menu Data Produk', '2018-10-23 05:11:09', 1, 0),
(3471, 'Tambah', 'Data Produk', '2018-10-23 05:11:46', 'User admin Tambah data menu Data Produk', '2018-10-23 05:11:46', 1, 0),
(3472, 'Lihat', 'Data Produk', '2018-10-23 05:11:47', 'User admin Lihat data menu Data Produk', '2018-10-23 05:11:47', 1, 0),
(3473, 'Tambah', 'Data Produk', '2018-10-23 05:14:20', 'User admin Tambah data menu Data Produk', '2018-10-23 05:14:20', 1, 0),
(3474, 'Lihat', 'Data Produk', '2018-10-23 05:14:21', 'User admin Lihat data menu Data Produk', '2018-10-23 05:14:21', 1, 0),
(3475, 'Lihat', 'Data Produk Detil', '2018-10-23 05:14:27', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:14:27', 1, 0),
(3476, 'Tambah', 'Data Produk Detil', '2018-10-23 05:14:34', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:14:34', 1, 0),
(3477, 'Lihat', 'Data Produk Detil', '2018-10-23 05:14:34', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:14:34', 1, 0),
(3478, 'Tambah', 'Data Produk Detil', '2018-10-23 05:14:39', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:14:39', 1, 0),
(3479, 'Lihat', 'Data Produk Detil', '2018-10-23 05:14:39', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:14:39', 1, 0),
(3480, 'Lihat', 'Data Produk', '2018-10-23 05:16:24', 'User admin Lihat data menu Data Produk', '2018-10-23 05:16:24', 1, 0),
(3481, 'Tambah', 'Data Produk', '2018-10-23 05:17:24', 'User admin Tambah data menu Data Produk', '2018-10-23 05:17:24', 1, 0),
(3482, 'Lihat', 'Data Produk', '2018-10-23 05:17:24', 'User admin Lihat data menu Data Produk', '2018-10-23 05:17:24', 1, 0),
(3483, 'Lihat', 'Data Produk Detil', '2018-10-23 05:17:30', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:17:30', 1, 0),
(3484, 'Tambah', 'Data Produk Detil', '2018-10-23 05:17:36', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:17:36', 1, 0),
(3485, 'Lihat', 'Data Produk Detil', '2018-10-23 05:17:36', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:17:36', 1, 0),
(3486, 'Lihat', 'Data Produk', '2018-10-23 05:19:03', 'User admin Lihat data menu Data Produk', '2018-10-23 05:19:03', 1, 0),
(3487, 'Tambah', 'Data Produk', '2018-10-23 05:19:42', 'User admin Tambah data menu Data Produk', '2018-10-23 05:19:42', 1, 0),
(3488, 'Lihat', 'Data Produk', '2018-10-23 05:19:42', 'User admin Lihat data menu Data Produk', '2018-10-23 05:19:42', 1, 0),
(3489, 'Lihat', 'Data Produk Detil', '2018-10-23 05:19:57', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:19:57', 1, 0),
(3490, 'Tambah', 'Data Produk Detil', '2018-10-23 05:20:06', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:20:06', 1, 0),
(3491, 'Lihat', 'Data Produk Detil', '2018-10-23 05:20:07', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:20:07', 1, 0),
(3492, 'Tambah', 'Data Produk Detil', '2018-10-23 05:20:13', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:20:13', 1, 0),
(3493, 'Lihat', 'Data Produk Detil', '2018-10-23 05:20:13', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:20:13', 1, 0),
(3494, 'Tambah', 'Data Produk Detil', '2018-10-23 05:20:19', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:20:19', 1, 0),
(3495, 'Lihat', 'Data Produk Detil', '2018-10-23 05:20:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:20:19', 1, 0),
(3496, 'Tambah', 'Data Produk Detil', '2018-10-23 05:20:25', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:20:25', 1, 0),
(3497, 'Lihat', 'Data Produk Detil', '2018-10-23 05:20:25', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:20:25', 1, 0),
(3498, 'Tambah', 'Data Produk Detil', '2018-10-23 05:20:33', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:20:33', 1, 0),
(3499, 'Lihat', 'Data Produk Detil', '2018-10-23 05:20:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:20:33', 1, 0),
(3500, 'Lihat', 'Data Produk', '2018-10-23 05:20:36', 'User admin Lihat data menu Data Produk', '2018-10-23 05:20:36', 1, 0),
(3501, 'Tambah', 'Data Produk', '2018-10-23 05:21:41', 'User admin Tambah data menu Data Produk', '2018-10-23 05:21:41', 1, 0),
(3502, 'Lihat', 'Data Produk', '2018-10-23 05:21:42', 'User admin Lihat data menu Data Produk', '2018-10-23 05:21:42', 1, 0),
(3503, 'Tambah', 'Data Produk', '2018-10-23 05:22:55', 'User admin Tambah data menu Data Produk', '2018-10-23 05:22:55', 1, 0),
(3504, 'Lihat', 'Data Produk', '2018-10-23 05:22:55', 'User admin Lihat data menu Data Produk', '2018-10-23 05:22:55', 1, 0),
(3505, 'Lihat', 'Data Produk Detil', '2018-10-23 05:23:02', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:23:02', 1, 0),
(3506, 'Tambah', 'Data Produk Detil', '2018-10-23 05:23:08', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:23:08', 1, 0),
(3507, 'Lihat', 'Data Produk Detil', '2018-10-23 05:23:08', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:23:08', 1, 0),
(3508, 'Tambah', 'Data Produk Detil', '2018-10-23 05:23:15', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:23:15', 1, 0),
(3509, 'Lihat', 'Data Produk Detil', '2018-10-23 05:23:15', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:23:15', 1, 0),
(3510, 'Tambah', 'Data Produk Detil', '2018-10-23 05:23:59', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:23:59', 1, 0),
(3511, 'Lihat', 'Data Produk Detil', '2018-10-23 05:23:59', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:23:59', 1, 0),
(3512, 'Tambah', 'Data Produk Detil', '2018-10-23 05:24:04', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:24:04', 1, 0),
(3513, 'Lihat', 'Data Produk Detil', '2018-10-23 05:24:05', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:24:05', 1, 0),
(3514, 'Tambah', 'Data Produk Detil', '2018-10-23 05:24:09', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:24:09', 1, 0),
(3515, 'Lihat', 'Data Produk Detil', '2018-10-23 05:24:10', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:24:10', 1, 0),
(3516, 'Tambah', 'Data Produk Detil', '2018-10-23 05:24:15', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:24:15', 1, 0),
(3517, 'Lihat', 'Data Produk Detil', '2018-10-23 05:24:15', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:24:15', 1, 0),
(3518, 'Tambah', 'Data Produk Detil', '2018-10-23 05:24:20', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:24:20', 1, 0),
(3519, 'Lihat', 'Data Produk Detil', '2018-10-23 05:24:20', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:24:20', 1, 0),
(3520, 'Lihat', 'Data Produk', '2018-10-23 05:24:25', 'User admin Lihat data menu Data Produk', '2018-10-23 05:24:25', 1, 0),
(3521, 'Tambah', 'Data Produk', '2018-10-23 05:25:26', 'User admin Tambah data menu Data Produk', '2018-10-23 05:25:26', 1, 0),
(3522, 'Lihat', 'Data Produk', '2018-10-23 05:25:26', 'User admin Lihat data menu Data Produk', '2018-10-23 05:25:26', 1, 0),
(3523, 'Lihat', 'Data Produk Detil', '2018-10-23 05:25:33', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:25:33', 1, 0),
(3524, 'Tambah', 'Data Produk Detil', '2018-10-23 05:25:38', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:25:38', 1, 0),
(3525, 'Lihat', 'Data Produk Detil', '2018-10-23 05:25:38', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:25:38', 1, 0),
(3526, 'Tambah', 'Data Produk Detil', '2018-10-23 05:25:44', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:25:44', 1, 0),
(3527, 'Lihat', 'Data Produk Detil', '2018-10-23 05:25:44', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:25:44', 1, 0),
(3528, 'Lihat', 'Data Produk', '2018-10-23 05:26:17', 'User admin Lihat data menu Data Produk', '2018-10-23 05:26:17', 1, 0),
(3529, 'Tambah', 'Data Produk', '2018-10-23 05:26:43', 'User admin Tambah data menu Data Produk', '2018-10-23 05:26:43', 1, 0),
(3530, 'Lihat', 'Data Produk', '2018-10-23 05:26:43', 'User admin Lihat data menu Data Produk', '2018-10-23 05:26:43', 1, 0),
(3531, 'Tambah', 'Data Produk', '2018-10-23 05:27:38', 'User admin Tambah data menu Data Produk', '2018-10-23 05:27:38', 1, 0),
(3532, 'Lihat', 'Data Produk', '2018-10-23 05:27:38', 'User admin Lihat data menu Data Produk', '2018-10-23 05:27:38', 1, 0),
(3533, 'Tambah', 'Data Produk', '2018-10-23 05:28:47', 'User admin Tambah data menu Data Produk', '2018-10-23 05:28:47', 1, 0),
(3534, 'Lihat', 'Data Produk', '2018-10-23 05:28:48', 'User admin Lihat data menu Data Produk', '2018-10-23 05:28:48', 1, 0),
(3535, 'Lihat', 'Data Produk Detil', '2018-10-23 05:28:53', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:28:53', 1, 0),
(3536, 'Tambah', 'Data Produk Detil', '2018-10-23 05:28:58', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:28:58', 1, 0),
(3537, 'Lihat', 'Data Produk Detil', '2018-10-23 05:29:02', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:29:02', 1, 0),
(3538, 'Tambah', 'Data Produk Detil', '2018-10-23 05:29:06', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:29:06', 1, 0),
(3539, 'Lihat', 'Data Produk Detil', '2018-10-23 05:29:06', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:29:06', 1, 0),
(3540, 'Tambah', 'Data Produk Detil', '2018-10-23 05:29:11', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:29:11', 1, 0),
(3541, 'Lihat', 'Data Produk Detil', '2018-10-23 05:29:11', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:29:11', 1, 0),
(3542, 'Tambah', 'Data Produk Detil', '2018-10-23 05:29:17', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:29:17', 1, 0),
(3543, 'Lihat', 'Data Produk Detil', '2018-10-23 05:29:17', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:29:17', 1, 0),
(3544, 'Lihat', 'Data Produk', '2018-10-23 05:29:21', 'User admin Lihat data menu Data Produk', '2018-10-23 05:29:21', 1, 0),
(3545, 'Tambah', 'Data Produk', '2018-10-23 05:30:18', 'User admin Tambah data menu Data Produk', '2018-10-23 05:30:18', 1, 0),
(3546, 'Lihat', 'Data Produk', '2018-10-23 05:30:18', 'User admin Lihat data menu Data Produk', '2018-10-23 05:30:18', 1, 0),
(3547, 'Lihat', 'Data Produk Detil', '2018-10-23 05:30:26', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:30:26', 1, 0),
(3548, 'Tambah', 'Data Produk Detil', '2018-10-23 05:30:31', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:30:31', 1, 0),
(3549, 'Lihat', 'Data Produk Detil', '2018-10-23 05:30:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:30:31', 1, 0),
(3550, 'Lihat', 'Data Produk', '2018-10-23 05:31:01', 'User admin Lihat data menu Data Produk', '2018-10-23 05:31:01', 1, 0),
(3551, 'Tambah', 'Data Produk', '2018-10-23 05:31:31', 'User admin Tambah data menu Data Produk', '2018-10-23 05:31:31', 1, 0),
(3552, 'Lihat', 'Data Produk', '2018-10-23 05:31:31', 'User admin Lihat data menu Data Produk', '2018-10-23 05:31:31', 1, 0),
(3553, 'Lihat', 'Data Produk Detil', '2018-10-23 05:31:37', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:31:37', 1, 0),
(3554, 'Tambah', 'Data Produk Detil', '2018-10-23 05:31:41', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:31:41', 1, 0),
(3555, 'Lihat', 'Data Produk Detil', '2018-10-23 05:31:42', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:31:42', 1, 0),
(3556, 'Tambah', 'Data Produk Detil', '2018-10-23 05:31:46', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:31:46', 1, 0),
(3557, 'Lihat', 'Data Produk Detil', '2018-10-23 05:31:47', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:31:47', 1, 0),
(3558, 'Lihat', 'Data Produk', '2018-10-23 05:40:47', 'User admin Lihat data menu Data Produk', '2018-10-23 05:40:47', 1, 0),
(3559, 'Tambah', 'Data Produk', '2018-10-23 05:41:46', 'User admin Tambah data menu Data Produk', '2018-10-23 05:41:46', 1, 0),
(3560, 'Lihat', 'Data Produk', '2018-10-23 05:41:46', 'User admin Lihat data menu Data Produk', '2018-10-23 05:41:46', 1, 0),
(3561, 'Lihat', 'Data Produk Detil', '2018-10-23 05:41:55', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:41:55', 1, 0),
(3562, 'Tambah', 'Data Produk Detil', '2018-10-23 05:42:00', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:42:00', 1, 0),
(3563, 'Lihat', 'Data Produk Detil', '2018-10-23 05:42:00', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:42:00', 1, 0),
(3564, 'Tambah', 'Data Produk Detil', '2018-10-23 05:42:05', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:42:05', 1, 0),
(3565, 'Lihat', 'Data Produk Detil', '2018-10-23 05:42:05', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:42:05', 1, 0),
(3566, 'Lihat', 'Data Produk', '2018-10-23 05:42:08', 'User admin Lihat data menu Data Produk', '2018-10-23 05:42:08', 1, 0),
(3567, 'Tambah', 'Data Produk', '2018-10-23 05:43:01', 'User admin Tambah data menu Data Produk', '2018-10-23 05:43:01', 1, 0),
(3568, 'Lihat', 'Data Produk', '2018-10-23 05:43:02', 'User admin Lihat data menu Data Produk', '2018-10-23 05:43:02', 1, 0),
(3569, 'Lihat', 'Data Produk Detil', '2018-10-23 05:43:09', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:43:09', 1, 0),
(3570, 'Tambah', 'Data Produk Detil', '2018-10-23 05:43:18', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:43:18', 1, 0),
(3571, 'Lihat', 'Data Produk Detil', '2018-10-23 05:43:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:43:19', 1, 0),
(3572, 'Tambah', 'Data Produk Detil', '2018-10-23 05:43:30', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:43:30', 1, 0),
(3573, 'Lihat', 'Data Produk Detil', '2018-10-23 05:43:30', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:43:30', 1, 0),
(3574, 'Lihat', 'Data Produk', '2018-10-23 05:43:41', 'User admin Lihat data menu Data Produk', '2018-10-23 05:43:41', 1, 0),
(3575, 'Tambah', 'Data Produk', '2018-10-23 05:44:49', 'User admin Tambah data menu Data Produk', '2018-10-23 05:44:49', 1, 0),
(3576, 'Lihat', 'Data Produk', '2018-10-23 05:44:50', 'User admin Lihat data menu Data Produk', '2018-10-23 05:44:50', 1, 0),
(3577, 'Lihat', 'Data Produk Detil', '2018-10-23 05:47:42', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:47:42', 1, 0),
(3578, 'Tambah', 'Data Produk Detil', '2018-10-23 05:47:47', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:47:47', 1, 0),
(3579, 'Lihat', 'Data Produk Detil', '2018-10-23 05:47:47', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:47:47', 1, 0),
(3580, 'Lihat', 'Data Produk', '2018-10-23 05:48:50', 'User admin Lihat data menu Data Produk', '2018-10-23 05:48:50', 1, 0),
(3581, 'Tambah', 'Data Produk', '2018-10-23 05:49:13', 'User admin Tambah data menu Data Produk', '2018-10-23 05:49:13', 1, 0),
(3582, 'Lihat', 'Data Produk', '2018-10-23 05:49:13', 'User admin Lihat data menu Data Produk', '2018-10-23 05:49:13', 1, 0),
(3583, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:19', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:19', 1, 0),
(3584, 'Tambah', 'Data Produk Detil', '2018-10-23 05:49:24', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:49:24', 1, 0),
(3585, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:24', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:24', 1, 0),
(3586, 'Tambah', 'Data Produk Detil', '2018-10-23 05:49:29', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:49:29', 1, 0),
(3587, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:29', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:29', 1, 0),
(3588, 'Tambah', 'Data Produk Detil', '2018-10-23 05:49:35', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:49:35', 1, 0),
(3589, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:35', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:35', 1, 0),
(3590, 'Tambah', 'Data Produk Detil', '2018-10-23 05:49:39', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:49:39', 1, 0),
(3591, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:39', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:39', 1, 0),
(3592, 'Tambah', 'Data Produk Detil', '2018-10-23 05:49:45', 'User admin Tambah data menu Data Produk Detil', '2018-10-23 05:49:45', 1, 0),
(3593, 'Lihat', 'Data Produk Detil', '2018-10-23 05:49:45', 'User admin Lihat data menu Data Produk Detil', '2018-10-23 05:49:45', 1, 0),
(3594, 'Lihat', 'Data Produk', '2018-10-23 05:49:46', 'User admin Lihat data menu Data Produk', '2018-10-23 05:49:46', 1, 0),
(3595, 'Lihat', 'Data Link Social', '2018-10-23 09:32:56', 'User admin Lihat data menu Data Link Social', '2018-10-23 09:32:56', 1, 0),
(3596, 'Ubah', 'Data Link Social', '2018-10-23 09:36:30', 'User admin Ubah data menu Data Link Social', '2018-10-23 09:36:30', 1, 0),
(3597, 'Lihat', 'Data Link Social', '2018-10-23 09:36:30', 'User admin Lihat data menu Data Link Social', '2018-10-23 09:36:30', 1, 0),
(3598, 'Ubah', 'Data Link Social', '2018-10-23 09:42:30', 'User admin Ubah data menu Data Link Social', '2018-10-23 09:42:30', 1, 0),
(3599, 'Lihat', 'Data Link Social', '2018-10-23 09:42:30', 'User admin Lihat data menu Data Link Social', '2018-10-23 09:42:30', 1, 0),
(3600, 'Lihat', 'Faq', '2018-10-25 10:32:09', 'User admin Lihat data menu Faq', '2018-10-25 10:32:09', 1, 0),
(3601, 'Edit', 'Faq', '2018-10-25 10:32:22', 'User admin Edit data menu Faq', '2018-10-25 10:32:22', 1, 0),
(3602, 'Lihat', 'Faq', '2018-10-25 10:32:23', 'User admin Lihat data menu Faq', '2018-10-25 10:32:23', 1, 0),
(3603, 'Edit', 'Faq', '2018-10-25 10:32:48', 'User admin Edit data menu Faq', '2018-10-25 10:32:48', 1, 0),
(3604, 'Lihat', 'Faq', '2018-10-25 10:32:48', 'User admin Lihat data menu Faq', '2018-10-25 10:32:48', 1, 0),
(3605, 'Lihat', 'Data Link Social', '2018-10-25 10:32:55', 'User admin Lihat data menu Data Link Social', '2018-10-25 10:32:55', 1, 0),
(3606, 'Ubah', 'Data Link Social', '2018-10-25 10:33:09', 'User admin Ubah data menu Data Link Social', '2018-10-25 10:33:09', 1, 0),
(3607, 'Lihat', 'Data Link Social', '2018-10-25 10:33:12', 'User admin Lihat data menu Data Link Social', '2018-10-25 10:33:12', 1, 0),
(3608, 'Ubah', 'Data Link Social', '2018-10-25 10:33:21', 'User admin Ubah data menu Data Link Social', '2018-10-25 10:33:21', 1, 0),
(3609, 'Lihat', 'Data Link Social', '2018-10-25 10:33:21', 'User admin Lihat data menu Data Link Social', '2018-10-25 10:33:21', 1, 0),
(3610, 'Lihat', 'Faq', '2018-10-25 10:33:37', 'User admin Lihat data menu Faq', '2018-10-25 10:33:37', 1, 0),
(3611, 'Tambah', 'Faq', '2018-10-25 10:33:53', 'User admin Tambah data menu Faq', '2018-10-25 10:33:53', 1, 0),
(3612, 'Lihat', 'Faq', '2018-10-25 10:33:53', 'User admin Lihat data menu Faq', '2018-10-25 10:33:53', 1, 0),
(3613, 'Tambah', 'Faq', '2018-10-25 10:34:07', 'User admin Tambah data menu Faq', '2018-10-25 10:34:07', 1, 0),
(3614, 'Lihat', 'Faq', '2018-10-25 10:34:07', 'User admin Lihat data menu Faq', '2018-10-25 10:34:07', 1, 0),
(3615, 'Tambah', 'Faq', '2018-10-25 10:34:23', 'User admin Tambah data menu Faq', '2018-10-25 10:34:23', 1, 0),
(3616, 'Lihat', 'Faq', '2018-10-25 10:34:23', 'User admin Lihat data menu Faq', '2018-10-25 10:34:23', 1, 0),
(3617, 'Tambah', 'Faq', '2018-10-25 10:34:35', 'User admin Tambah data menu Faq', '2018-10-25 10:34:35', 1, 0),
(3618, 'Lihat', 'Faq', '2018-10-25 10:34:35', 'User admin Lihat data menu Faq', '2018-10-25 10:34:35', 1, 0),
(3619, 'Lihat', 'How to Order', '2018-10-25 10:35:41', 'User admin Lihat data menu How to Order', '2018-10-25 10:35:41', 1, 0),
(3620, 'Hapus', 'How to Order', '2018-10-25 10:35:59', 'User admin Hapus data menu How to Order', '2018-10-25 10:35:59', 1, 0),
(3621, 'Lihat', 'How to Order', '2018-10-25 10:36:00', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:00', 1, 0),
(3622, 'Lihat', 'How to Order', '2018-10-25 10:36:00', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:00', 1, 0),
(3623, 'Hapus', 'How to Order', '2018-10-25 10:36:04', 'User admin Hapus data menu How to Order', '2018-10-25 10:36:04', 1, 0),
(3624, 'Lihat', 'How to Order', '2018-10-25 10:36:04', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:04', 1, 0),
(3625, 'Hapus', 'How to Order', '2018-10-25 10:36:07', 'User admin Hapus data menu How to Order', '2018-10-25 10:36:07', 1, 0),
(3626, 'Lihat', 'How to Order', '2018-10-25 10:36:07', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:07', 1, 0),
(3627, 'Hapus', 'How to Order', '2018-10-25 10:36:11', 'User admin Hapus data menu How to Order', '2018-10-25 10:36:11', 1, 0),
(3628, 'Lihat', 'How to Order', '2018-10-25 10:36:11', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:11', 1, 0),
(3629, 'Hapus', 'How to Order', '2018-10-25 10:36:15', 'User admin Hapus data menu How to Order', '2018-10-25 10:36:15', 1, 0),
(3630, 'Lihat', 'How to Order', '2018-10-25 10:36:15', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:15', 1, 0),
(3631, 'Tambah', 'How to Order', '2018-10-25 10:36:29', 'User admin Tambah data menu How to Order', '2018-10-25 10:36:29', 1, 0),
(3632, 'Lihat', 'How to Order', '2018-10-25 10:36:29', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:29', 1, 0),
(3633, 'Tambah', 'How to Order', '2018-10-25 10:36:38', 'User admin Tambah data menu How to Order', '2018-10-25 10:36:38', 1, 0),
(3634, 'Lihat', 'How to Order', '2018-10-25 10:36:38', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:38', 1, 0),
(3635, 'Tambah', 'How to Order', '2018-10-25 10:36:46', 'User admin Tambah data menu How to Order', '2018-10-25 10:36:46', 1, 0),
(3636, 'Lihat', 'How to Order', '2018-10-25 10:36:46', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:46', 1, 0),
(3637, 'Tambah', 'How to Order', '2018-10-25 10:36:54', 'User admin Tambah data menu How to Order', '2018-10-25 10:36:54', 1, 0),
(3638, 'Lihat', 'How to Order', '2018-10-25 10:36:54', 'User admin Lihat data menu How to Order', '2018-10-25 10:36:54', 1, 0),
(3639, 'Tambah', 'How to Order', '2018-10-25 10:37:00', 'User admin Tambah data menu How to Order', '2018-10-25 10:37:00', 1, 0),
(3640, 'Lihat', 'How to Order', '2018-10-25 10:37:01', 'User admin Lihat data menu How to Order', '2018-10-25 10:37:01', 1, 0),
(3641, 'Tambah', 'How to Order', '2018-10-25 10:37:09', 'User admin Tambah data menu How to Order', '2018-10-25 10:37:09', 1, 0),
(3642, 'Lihat', 'How to Order', '2018-10-25 10:37:09', 'User admin Lihat data menu How to Order', '2018-10-25 10:37:09', 1, 0),
(3643, 'Tambah', 'How to Order', '2018-10-25 10:37:16', 'User admin Tambah data menu How to Order', '2018-10-25 10:37:16', 1, 0),
(3644, 'Lihat', 'How to Order', '2018-10-25 10:37:17', 'User admin Lihat data menu How to Order', '2018-10-25 10:37:17', 1, 0),
(3645, 'Lihat', 'Data Link Social', '2018-10-25 10:41:51', 'User admin Lihat data menu Data Link Social', '2018-10-25 10:41:51', 1, 0),
(3646, 'Lihat', 'How to Order', '2018-10-25 10:42:04', 'User admin Lihat data menu How to Order', '2018-10-25 10:42:04', 1, 0),
(3647, 'Lihat', 'How to Order', '2018-10-25 10:42:34', 'User admin Lihat data menu How to Order', '2018-10-25 10:42:34', 1, 0),
(3648, 'Lihat', 'How to Order', '2018-10-25 10:43:33', 'User admin Lihat data menu How to Order', '2018-10-25 10:43:33', 1, 0),
(3649, 'Lihat', 'How to Order', '2018-10-25 10:44:25', 'User admin Lihat data menu How to Order', '2018-10-25 10:44:25', 1, 0),
(3650, 'Lihat', 'How to Order', '2018-10-25 10:45:12', 'User admin Lihat data menu How to Order', '2018-10-25 10:45:12', 1, 0),
(3651, 'Lihat', 'Data Produk', '2018-10-25 10:56:10', 'User admin Lihat data menu Data Produk', '2018-10-25 10:56:10', 1, 0),
(3652, 'Lihat', 'Data Link Social', '2018-10-25 11:01:24', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:01:24', 1, 0),
(3653, 'Ubah', 'Data Link Social', '2018-10-25 11:02:00', 'User admin Ubah data menu Data Link Social', '2018-10-25 11:02:00', 1, 0),
(3654, 'Lihat', 'Data Link Social', '2018-10-25 11:02:00', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:02:00', 1, 0),
(3655, 'Lihat', 'Data Link Social', '2018-10-25 11:04:57', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:04:57', 1, 0),
(3656, 'Ubah', 'Data Link Social', '2018-10-25 11:05:31', 'User admin Ubah data menu Data Link Social', '2018-10-25 11:05:31', 1, 0),
(3657, 'Lihat', 'Data Link Social', '2018-10-25 11:05:31', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:05:31', 1, 0),
(3658, 'Lihat', 'Data Link Social', '2018-10-25 11:07:55', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:07:55', 1, 0),
(3659, 'Lihat', 'Data Link Social', '2018-10-25 11:19:55', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:19:55', 1, 0),
(3660, 'Lihat', 'Data Link Social', '2018-10-25 11:21:42', 'User admin Lihat data menu Data Link Social', '2018-10-25 11:21:42', 1, 0),
(3661, 'Lihat', 'How to Order', '2018-10-25 11:28:42', 'User admin Lihat data menu How to Order', '2018-10-25 11:28:42', 1, 0),
(3662, 'Lihat', 'Data Produk', '2018-10-25 11:31:25', 'User admin Lihat data menu Data Produk', '2018-10-25 11:31:25', 1, 0),
(3663, 'Lihat', 'Data Produk Detil', '2018-10-25 11:31:31', 'User admin Lihat data menu Data Produk Detil', '2018-10-25 11:31:31', 1, 0),
(3664, 'Tambah', 'Data Produk Detil', '2018-10-25 11:32:04', 'User admin Tambah data menu Data Produk Detil', '2018-10-25 11:32:04', 1, 0),
(3665, 'Lihat', 'Data Produk Detil', '2018-10-25 11:32:04', 'User admin Lihat data menu Data Produk Detil', '2018-10-25 11:32:04', 1, 0),
(3666, 'Lihat', 'Data Produk Detil', '2018-10-25 11:32:45', 'User admin Lihat data menu Data Produk Detil', '2018-10-25 11:32:45', 1, 0),
(3667, 'Lihat', 'Data Produk', '2018-10-25 11:32:48', 'User admin Lihat data menu Data Produk', '2018-10-25 11:32:48', 1, 0),
(3668, 'Lihat', 'Data Produk Detil', '2018-10-25 11:33:01', 'User admin Lihat data menu Data Produk Detil', '2018-10-25 11:33:01', 1, 0),
(3669, 'Lihat', 'How to Order', '2018-10-25 11:47:54', 'User admin Lihat data menu How to Order', '2018-10-25 11:47:54', 1, 0),
(3670, 'Lihat', 'How to Order', '2018-10-25 11:51:10', 'User admin Lihat data menu How to Order', '2018-10-25 11:51:10', 1, 0),
(3671, 'Edit', 'How to Order', '2018-10-25 11:51:17', 'User admin Edit data menu How to Order', '2018-10-25 11:51:17', 1, 0),
(3672, 'Lihat', 'How to Order', '2018-10-25 11:51:17', 'User admin Lihat data menu How to Order', '2018-10-25 11:51:17', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting_akses_menu`
--

CREATE TABLE `setting_akses_menu` (
  `am_id` smallint(6) NOT NULL,
  `role_id` smallint(6) NOT NULL,
  `dm_role` tinyint(1) NOT NULL,
  `dm_role_aksi` varchar(10) NOT NULL,
  `dm_user` tinyint(1) NOT NULL,
  `dm_user_aksi` varchar(10) NOT NULL,
  `dm_akses_menu` tinyint(1) NOT NULL,
  `dm_akses_menu_aksi` varchar(10) NOT NULL,
  `dm_akses_password` tinyint(1) NOT NULL,
  `dm_akses_password_aksi` varchar(10) NOT NULL,
  `dm_produk` tinyint(1) NOT NULL,
  `dm_produk_aksi` varchar(10) NOT NULL,
  `dm_produk_kategori` tinyint(1) NOT NULL,
  `dm_produk_kategori_aksi` varchar(10) NOT NULL,
  `dm_about` tinyint(1) NOT NULL,
  `dm_about_aksi` varchar(10) NOT NULL,
  `dm_kontak` tinyint(1) NOT NULL,
  `dm_kontak_aksi` varchar(10) NOT NULL,
  `pg_backup` tinyint(1) NOT NULL,
  `pg_backup_aksi` varchar(10) NOT NULL,
  `pg_restore` tinyint(1) NOT NULL,
  `pg_restore_aksi` varchar(10) NOT NULL,
  `pg_profile` tinyint(1) NOT NULL,
  `pg_profile_aksi` varchar(10) NOT NULL,
  `pg_log` tinyint(1) NOT NULL,
  `pg_printer` tinyint(1) NOT NULL,
  `pg_printer_aksi` varchar(10) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_akses_menu`
--

INSERT INTO `setting_akses_menu` (`am_id`, `role_id`, `dm_role`, `dm_role_aksi`, `dm_user`, `dm_user_aksi`, `dm_akses_menu`, `dm_akses_menu_aksi`, `dm_akses_password`, `dm_akses_password_aksi`, `dm_produk`, `dm_produk_aksi`, `dm_produk_kategori`, `dm_produk_kategori_aksi`, `dm_about`, `dm_about_aksi`, `dm_kontak`, `dm_kontak_aksi`, `pg_backup`, `pg_backup_aksi`, `pg_restore`, `pg_restore_aksi`, `pg_profile`, `pg_profile_aksi`, `pg_log`, `pg_printer`, `pg_printer_aksi`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 1, 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1', 1, '1~1~1~1', 1, '1~1~1~1', 1, '1~1~1~1', 1, 1, '1~1~1~1', '2015-11-12 03:40:54', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting_akses_password`
--

CREATE TABLE `setting_akses_password` (
  `akses_password_id` smallint(6) NOT NULL,
  `akses_password_menu` varchar(40) NOT NULL,
  `akses_password_fungsi` varchar(40) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_akses_password`
--

INSERT INTO `setting_akses_password` (`akses_password_id`, `akses_password_menu`, `akses_password_fungsi`, `role_id`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'user', 'delete', 4, '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting_profile`
--

CREATE TABLE `setting_profile` (
  `profile_id` int(11) NOT NULL,
  `profile_title` varchar(30) NOT NULL,
  `profile_logo` varchar(255) NOT NULL,
  `profile_alamat` varchar(255) NOT NULL,
  `profile_telepon` varchar(255) NOT NULL,
  `profile_fax` varchar(255) NOT NULL,
  `profile_version` varchar(5) NOT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_profile`
--

INSERT INTO `setting_profile` (`profile_id`, `profile_title`, `profile_logo`, `profile_alamat`, `profile_telepon`, `profile_fax`, `profile_version`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, 'Agnes Parcel\'n Souvenir', 'logo.png', 'Jl Brigjend Katamso No 69 Purwokerto', '081328156789 ', '(0274) 9172132', '0.1', '2015-12-06 20:17:53', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` smallint(6) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `foto`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(1, '22102018130651sli4.jpg', '2018-10-22 06:06:51', 0, 0, 0),
(2, '22102018170214sli45.jpg', '2018-10-22 10:02:14', 0, 0, 0),
(3, '22102018153233slider51.jpg', '2018-10-22 08:32:33', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` smallint(6) NOT NULL,
  `testimonial_foto` varchar(255) NOT NULL,
  `testimonial_nama` varchar(200) NOT NULL,
  `testimonial_ket` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_user_id` smallint(6) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `is_permanent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_foto`, `testimonial_nama`, `testimonial_ket`, `last_update`, `last_user_id`, `is_delete`, `is_permanent`) VALUES
(2, '221020181117431.png', 'Yogi Kusnandar', 'Produk-produknya sangat bagus dan kualitas nomor 1. recommended', '2018-10-22 04:17:43', 0, 0, 0),
(3, '221020181117542.png', 'Bambang Setiawan', ' Sekali coba beli di Agnes parcel & souvenir langsung suka', '2018-10-22 04:17:54', 0, 0, 0),
(4, '221020181119135.jpg', 'Dika', 'Kualitas nya baik dan cocok untuk diberikan siapa saja', '2018-10-22 04:19:13', 0, 0, 0),
(5, '221020181120126.jpg', 'Joko Susanto', ' Recommended!!!', '2018-10-22 04:20:12', 0, 0, 0),
(7, '2210201811240211.jpg', '', '', '2018-10-22 04:24:02', 0, 0, 0),
(8, '2210201811270815.jpg', '', '', '2018-10-22 04:27:08', 0, 0, 0),
(9, '2210201811272016.jpg', '', '', '2018-10-22 04:27:20', 0, 0, 0),
(10, '2210201811242114.jpg', '', '', '2018-10-22 04:24:21', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci_sessions_id_ip` (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `data_news`
--
ALTER TABLE `data_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `data_produk_detail`
--
ALTER TABLE `data_produk_detail`
  ADD PRIMARY KEY (`produk_detail_id`);

--
-- Indexes for table `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `howto`
--
ALTER TABLE `howto`
  ADD PRIMARY KEY (`howto_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `setting_akses_menu`
--
ALTER TABLE `setting_akses_menu`
  ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `setting_akses_password`
--
ALTER TABLE `setting_akses_password`
  ADD PRIMARY KEY (`akses_password_id`);

--
-- Indexes for table `setting_profile`
--
ALTER TABLE `setting_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_news`
--
ALTER TABLE `data_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `produk_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `data_produk_detail`
--
ALTER TABLE `data_produk_detail`
  MODIFY `produk_detail_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `data_role`
--
ALTER TABLE `data_role`
  MODIFY `role_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `user_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `howto`
--
ALTER TABLE `howto`
  MODIFY `howto_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontak_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3673;
--
-- AUTO_INCREMENT for table `setting_akses_menu`
--
ALTER TABLE `setting_akses_menu`
  MODIFY `am_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_akses_password`
--
ALTER TABLE `setting_akses_password`
  MODIFY `akses_password_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting_profile`
--
ALTER TABLE `setting_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonial_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
