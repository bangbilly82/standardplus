-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 04:52 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `standardplus`
--
CREATE DATABASE IF NOT EXISTS `standardplus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `standardplus`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `admin_user_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_user_username` varchar(50) NOT NULL,
  `admin_user_password` varchar(50) NOT NULL,
  `admin_user_profile` varchar(50) NOT NULL,
  `admin_user_level` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_user_id`, `admin_user_username`, `admin_user_password`, `admin_user_profile`, `admin_user_level`) VALUES
(3, 'firdaqonita', 'f035509155f00890172d8256ca1ad0d8', 'Firda Qonita', 'admin'),
(4, 'ayuni', '81d0fec3d73679e5850e44a38b065fb8', 'Ayuni Dwi Resita', 'admin'),
(5, 'sari', 'a87bcf310c4fdf2a80f2f3d97f1f9424', 'Sari', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `archive_id` int(11) NOT NULL AUTO_INCREMENT,
  `archive_year` int(11) NOT NULL,
  `archive_number` int(11) NOT NULL,
  `archive_image_cover` varchar(100) NOT NULL,
  `archive_key` int(4) NOT NULL,
  PRIMARY KEY (`archive_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`archive_id`, `archive_year`, `archive_number`, `archive_image_cover`, `archive_key`) VALUES
(1, 2012, 10, 'ev_2012.JPG', 2),
(2, 2013, 5, 'ev_2013.JPG', 2),
(3, 2014, 9, 'ev_2014.JPG', 2),
(4, 2015, 10, 'ev_2015.JPG', 2),
(5, 2016, 15, 'ev_2016.JPG', 2),
(6, 2017, 7, 'ev_2015.JPG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clients_id` int(2) NOT NULL AUTO_INCREMENT,
  `clients_name` varchar(50) NOT NULL,
  `clients_image` varchar(30) NOT NULL,
  PRIMARY KEY (`clients_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clients_id`, `clients_name`, `clients_image`) VALUES
(11, 'PT. Pertamina', 'client_178121493715955.png'),
(12, 'Indonesia Power', 'client_07e2c1493715991.png'),
(13, 'Bank BRI', 'client_df1901493716818.png'),
(14, 'AFTI', 'client_7d24d1493716982.png'),
(15, 'Badan Kepegawaian', 'client_596e21493717000.png'),
(16, 'Bank BJB', 'client_e1fea1493717045.png'),
(17, 'Bank Muamalat', 'client_d7a4d1493717061.png'),
(18, 'BDG Food Truck', 'client_d7f651493717075.png'),
(19, 'Bintang 7', 'client_d21b91493717087.png'),
(20, 'Dana Pensiun', 'client_bacb71493717105.png'),
(21, 'Garuda Food', 'client_0af361493717120.png'),
(22, 'Hexparm', 'client_60bed1493717137.png'),
(23, 'HWI', 'client_575891493717152.png'),
(24, 'Indosat', 'client_0a9eb1493717171.png'),
(25, 'Kab Malang', 'client_8f32f1493717185.png'),
(26, 'Kalbe', 'client_7f4821493717200.png'),
(27, 'KemenKoordinator', 'client_1267e1493717220.png'),
(28, 'LIPPO', 'client_0d0171493717236.png'),
(29, 'Mayora', 'client_a4ca31493717258.png'),
(30, 'McD', 'client_9ffc01493717285.png'),
(31, 'Medco', 'client_d6fc61493717298.png'),
(32, 'Metland', 'client_561f41493717330.png'),
(33, 'Newmont', 'client_1cdb61493717343.png'),
(34, 'Pelni', 'client_7a1601493717355.png'),
(35, 'Permatabank', 'client_55a0d1493717370.png'),
(36, 'Pondok Indah', 'client_579981493717384.png'),
(37, 'Sinarmas', 'client_e7f6d1493717397.png'),
(38, 'Smartfren', 'client_dc6d01493717409.png'),
(39, 'Staedler', 'client_06e361493717422.png'),
(40, 'Taspen', 'client_50f0e1493717435.png'),
(41, 'Telkomsel', 'client_6b9de1493717448.png'),
(42, 'Untrilogi', 'client_61d951493717465.png'),
(43, 'Wings', 'client_9b29b1493717477.png'),
(44, 'Wisata Cibubur', 'client_11a261493717490.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(2) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `address`, `phone`, `fax`, `email`) VALUES
(1, 'KOTA WISATA CLUSTER GEORGIA TA, 5 NO. 25, CIBUBUR 16968', '(021) - 8493 9719 / 08777 08333 55', '(021) - 8493 9719', 'info@standardplus.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `event_archive`
--

CREATE TABLE IF NOT EXISTS `event_archive` (
  `event_archive_id` int(3) NOT NULL AUTO_INCREMENT,
  `event_archive_name` varchar(100) NOT NULL,
  `event_archive_place` varchar(100) DEFAULT NULL,
  `event_archive_year` int(5) NOT NULL,
  `event_archive_image_key` int(5) DEFAULT NULL,
  PRIMARY KEY (`event_archive_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `event_archive`
--

INSERT INTO `event_archive` (`event_archive_id`, `event_archive_name`, `event_archive_place`, `event_archive_year`, `event_archive_image_key`) VALUES
(1, 'Beauty Secret', '-', 1, NULL),
(22, 'CREATIVE GROOVY, PT. ASABA (STAEDTLER INDONESIA) ', 'SURABAYA', 3, NULL),
(23, 'MARKET ON STREET', 'KOTA WISATA', 3, NULL),
(24, 'CREATIVE GROOVY, PT. ASABA (STAEDTLER INDONESIA) ', 'SEMARANG', 3, NULL),
(25, 'LOMBA MEWARNAI', 'KOTA WISATA', 3, NULL),
(26, 'LAUNCHING NEW KAPAL KM KELUD', '-', 3, NULL),
(27, 'Suwito Awards', '-', 2, NULL),
(28, 'CREATIVE MIND MAPPING, SMAN 1 CIBINONG ', 'BOGOR', 4, NULL),
(29, 'MARKET ON STREET IMLEK', 'KOTA WISATA', 4, NULL),
(30, 'LAUNCHING CLUSTER NEBRASKA', 'KOTA WISATA', 4, NULL),
(31, 'STUDY FUN TRIP TO YOGYAKARTA, SMP AN - NAHL', '-', 4, NULL),
(32, 'RAMADHAN CERIA DI KOTA WISATA', '-', 4, NULL),
(33, 'LEBARAN SERU DI KOTA WISATA', '-', 4, NULL),
(34, 'FOOD TRUCK FESTIVAL', 'LIPPO CIKARANG', 4, NULL),
(35, 'KARNAVAL SKATEBOARD & ROLLERBLADER', 'KOTA WISATA', 4, NULL),
(36, 'INDONESIA FOODTRUCK PARADE ON FIMELA FEST 2015', '-', 4, NULL),
(37, 'PLASA CIBUBUR ANEKA LOMBA', '-', 4, NULL),
(38, 'MITRA 10 IDOL', '-', 4, NULL),
(39, 'REUNI PRE - RETIREMENT KALBE FARMA', '-', 4, NULL),
(40, 'EKPEDISI GERHANA MATAHARI TOTAL', ' BELITUNG', 5, NULL),
(41, 'FAMILY FUN DAY', ' METLAND CILEUNGSI', 5, NULL),
(42, 'D''ARCICI SPORT FEST', '-', 5, NULL),
(43, 'FESTIVAL MERAH PUTIH, MAXXBOX ORANGE COUNTY', 'CIKARANG', 5, NULL),
(44, 'PELNI GOES TO SCHOOL (BATCH 1 - 6)', '-', 5, NULL),
(45, 'LITERASI MARITIM', '-', 5, NULL),
(46, 'PARTNER GATHERING PT.PELNI 2016', '-', 5, NULL),
(47, 'AUTOFEST 2016', '-', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilitator`
--

CREATE TABLE IF NOT EXISTS `facilitator` (
  `facilitator_id` int(2) NOT NULL AUTO_INCREMENT,
  `facilitator_name` varchar(100) NOT NULL,
  `facilitator_description` text NOT NULL,
  `facilitator_image` varchar(200) NOT NULL,
  PRIMARY KEY (`facilitator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `facilitator`
--

INSERT INTO `facilitator` (`facilitator_id`, `facilitator_name`, `facilitator_description`, `facilitator_image`) VALUES
(18, 'Dra. Mustika Tarigan, MPSi', 'Seorang Master Psikologi yang mengawali karirnya sebagai dosen. Bersama Standardplus, telah berhasil merubah mindset Lebih dari 500 orang guru di jajaran guru yang ada di wilayah Dinas Kabupaten Bogor melalui pelatihan peningkatan potensi diri guru se-Kabupaten Bogor.\r\n', 'facilitator_ab4071493715078.png'),
(19, 'Netty Merdiaty, MM', 'Profesional trainer dan seorang praktisi yang telah lama bergerak dalam pelatihan pengembangan sumber daya manusia terutama dalam bidang pelayanan, marketing, dan komunikasi. Saat ini tercatat dan telah terdaftar sebagai asesor untuk penerbangan dan mediator niaga (terdaftar di AMA dan PMN).', 'facilitator_a873e1493715121.png'),
(20, 'Suyanto Wiratama, SE.MM', 'Profesional trainer yang peduli terhadap pengembangan usaha kecil yang ada dikalangan masyarakat . Memiliki keahlian dalam program pemberdayaan UKM, pengembangan usaha kredit mikro, dan juga di bidang ilmu kewirausahaan.', 'facilitator_f77781493715165.png'),
(22, 'Dr. Puti Lita Lisawri, M.Sc, M. Kes.', 'Dokter yang peduli terhadap kesehatan masyarakat. Melalui herbal medik dengan tema ‘Healthy Secret’, beliau selalu mendapatkan respon dan sambutan yang luar biasa dari setiap peserta yang menjadi audiencenya.\r\n', 'facilitator_7d1861493715053.png'),
(23, 'Unggul Hariyanto, SPsi, MPsi', 'Konsultan dan dosen Fakultas Psikologi  Universitas Atmajaya Jogjakarta . Berpengalaman sebagai  pembicara di beberapa radio ternama Jogja. Sebagai seniman sangat berpengalaman memberikan seminar ke beberapa kota di Indonesia. Memberikan ilmu kesenian lokal dan motivator pada perusahaan BUMN dan perhotelan.\r\n', 'facilitator_3141c1493715184.png'),
(24, 'Prof. Dr. Rio Sofwanhadi', 'Salah satu guru besar Universitas Indonesia yang ahli di bidang anatomi tubuh. Di usianya yang sudah menginjak 72 tahun, beliau aktif berbagi pemahaman tentang bagaimana menerapkan pola hidup sehat dan menjaga kesehatan tubuh  dari waktu ke waktu.', 'facilitator_94ac11493715134.jpg'),
(25, 'Diana Harding, SPsi, Msi', 'Dosen Psikologi Universitas Padjadjaran Bandung serta konsultan SDM ini berpengalaman memberikan seminar dan pelatihan pada perusahaan – perusahaan ternama di Indonesia baik lokal dan asing. Aktif memberikan seminar Spiritual Psychology Training.', 'facilitator_6e38a1493714995.png'),
(26, 'Prof. Dr. Sukmawati Sukamulja', 'Trainer dan juga praktisi dalam bisnis investasi. Beliau merupakan seorang guru besar di salah satu Universitas ternama di Yogyakarta. Beliau juga aktif sebagai konsultan beberapa perusahaan minyak dan beberapa perbankan di Indonesia. Seorang Master Financial ini mempunyai keahlian dalam bidang keuangan dan ekonomi.', 'facilitator_8d4441493715145.png'),
(27, 'Hari Otang Sasmitha', 'Lulusan sarjana peternakan IPB, yang juga mengambil sekolah audio engineer di Jakarta serta memiliki skill animasi & multimedia. Pemilik studio rekaman ini aktif sebagai pengajar produksi multimedia di Diploma IPB juga di lembaga kursus dan pelatihan komputer di Sukabumi.', 'facilitator_2d2a01493715092.png'),
(28, 'Henry Surya Sasmitha', 'Meraih gelar S1 komunikasi dan sekarang ini sedang melanjutkan pendidikan S1 Sastra Inggris bidang minat penerjemah. Berpengalaman sebagai staff pengajar komputer, instruktur komputer, IT staff dan sales engineer untuk produk networking security.', 'facilitator_30f4a1493715105.png'),
(29, 'Dra. Bimala Rurin Hari Mardewita, MSc', 'Berpengalaman sebagai penyiar dan reporter TV. Merupakan profesional trainer dan seorang praktisi yang telah lama bergerak dalam Pelatihan Pengembangan Sumber daya Manusia.', 'facilitator_773391493715064.png'),
(30, 'Dr. I Ketut Widiyasa, MPh', 'Lulusan S1 Pendidikan dokter umum pada Fakultas Kedokteran di Universitas Udayana Bali. Pada Tahun 2009 melanjutkan pendidikan S2 Ilmu Kesehatan Masyarakat di Fakultas Kedokteran Universitas Gadjah Mada Yogyakarta. Kemudian mulai bekerja pada tahun 2004 sebagai Dokter asisten RS. Indera Provinsi Bali. \r\n', 'facilitator_806a51493715013.png'),
(31, 'Alfa Maulana, MBA', 'Professional trainer dan seorang praktisi SDM terutama di bidang relationship, marketing, selling, dan leadership. Master of Business Administration UGM (GPA 3.65). Lebih dari 16 tahun berpengalaman di sales & banking product (BCA, Danamon, Lippo Bank & CIMB Niaga).', 'facilitator_dcf101493714979.png'),
(32, 'Agoes Susilo JP', 'Mempunyai kemampuan dalam membawakan materi dengan gaya bahasa yang sederhana dan menyegarkan. Selain itu juga mampu membawakan game-game ringan yang dapat meng-energize setiap peserta training.?', 'facilitator_ba8371493714968.png'),
(33, 'dr. Indra Suryawinata', 'Dokter lulusan universitas Tarumanegara (Untar). Pekerjaan yang sedang di geluti saat ini diantaranya, adalah: Health Consultant  PT. HWI, Health Motivator – Medical Preventive Expertise, IDRN Trainer (International Disaster Respone), koordinator Mobile Clinic : Reach the Unreach.', 'facilitator_3e4801493715037.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `gallery_image_id` int(3) NOT NULL AUTO_INCREMENT,
  `gallery_image_name` varchar(100) NOT NULL,
  `gallery_image_alt` varchar(200) NOT NULL,
  `gallery_image_key` int(3) NOT NULL,
  PRIMARY KEY (`gallery_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=223 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`gallery_image_id`, `gallery_image_name`, `gallery_image_alt`, `gallery_image_key`) VALUES
(13, 'file_1493372257.JPG', 'Default', 15),
(14, 'file_1fc8c1493372430.JPG', 'Default', 15),
(15, 'file_b5ac91493372811.JPG', 'Default', 1),
(16, 'file_fb00f1493373459.JPG', 'Default', 1),
(17, 'file_68ed11493373500.JPG', 'Default', 2),
(18, 'file_ea9181493373510.JPG', 'Default', 2),
(19, 'file_12d3d1493373521.JPG', 'Default', 2),
(20, 'file_a10671493373956.JPG', 'default', 16),
(21, 'file_b751f1493374570.jpg', 'default', 17),
(22, 'file_530b21493374662.jpg', 'default', 17),
(23, 'file_7a0891493384876.JPG', 'default', 18),
(24, 'file_bd9531493385355.JPG', 'default', 15),
(25, 'file_359831493385370.JPG', 'default', 15),
(26, 'file_c1cc01493385416.JPG', 'default', 15),
(27, 'file_2b6461493456110.JPG', 'default', 19),
(28, 'file_73d981493697929.JPG', 'default', 20),
(33, 'file_6ee411493708840.png', 'default', 21),
(34, 'file_729861493732011.JPG', 'default', 1),
(35, 'file_8754f1493732019.JPG', 'default', 1),
(36, 'file_363851493732029.JPG', 'default', 1),
(37, 'file_90c6d1493732039.JPG', 'default', 1),
(38, 'file_f01c91493732049.JPG', 'default', 1),
(39, 'file_5f58e1493732084.JPG', 'default', 27),
(40, 'file_047e11493732093.JPG', 'default', 27),
(41, 'file_fb8871493732103.JPG', 'default', 27),
(42, 'file_c08cd1493732113.JPG', 'default', 27),
(43, 'file_110df1493732122.JPG', 'default', 27),
(44, 'file_fc5d31493732130.JPG', 'default', 27),
(45, 'file_e3a591493732139.JPG', 'default', 27),
(46, 'file_ec2a71493732147.JPG', 'default', 27),
(47, 'file_ba7601493732157.JPG', 'default', 27),
(48, 'file_56b401493732167.JPG', 'default', 27),
(49, 'file_632ad1493732178.JPG', 'default', 27),
(56, 'file_511781493732435.JPG', 'default', 24),
(57, 'file_e1d391493732448.JPG', 'default', 24),
(58, 'file_a7d591493732460.JPG', 'default', 24),
(59, 'file_0c84c1493732503.JPG', 'default', 24),
(60, 'file_cff521493732516.JPG', 'default', 24),
(61, 'file_0a8fe1493732533.JPG', 'default', 24),
(62, 'file_af2351493732545.JPG', 'default', 24),
(63, 'file_cbefe1493732572.JPG', 'default', 24),
(64, 'file_e88471493732595.JPG', 'default', 22),
(65, 'file_a46251493732671.JPG', 'default', 23),
(66, 'file_8826e1493732684.JPG', 'default', 23),
(67, 'file_875fb1493732698.JPG', 'default', 23),
(68, 'file_7a9c51493732713.JPG', 'default', 23),
(69, 'file_691541493732725.JPG', 'default', 23),
(70, 'file_168851493732742.JPG', 'default', 23),
(71, 'file_d782c1493732756.JPG', 'default', 23),
(72, 'file_335cc1493732775.JPG', 'default', 26),
(73, 'file_c21f51493732803.JPG', 'default', 26),
(74, 'file_e96f11493732844.JPG', 'default', 26),
(75, 'file_c0e581493732865.JPG', 'default', 26),
(76, 'file_27a3a1493732879.JPG', 'default', 26),
(77, 'file_7cdfb1493732892.JPG', 'default', 26),
(78, 'file_8ca4a1493732905.JPG', 'default', 26),
(79, 'file_afa971493732921.jpg', 'default', 26),
(81, 'file_268c71493733125.JPG', 'default', 22),
(82, 'file_080a81493733139.JPG', 'default', 22),
(83, 'file_8e0a41493733149.JPG', 'default', 22),
(84, 'file_860641493733162.JPG', 'default', 22),
(85, 'file_dd5a51493733172.JPG', 'default', 22),
(86, 'file_c4aa31493733199.JPG', 'default', 25),
(87, 'file_f6ae61493733213.JPG', 'default', 25),
(88, 'file_dd3e11493733227.JPG', 'default', 25),
(89, 'file_ca3581493733242.JPG', 'default', 25),
(90, 'file_c47771493733257.JPG', 'default', 25),
(91, 'file_535781493733267.JPG', 'default', 25),
(92, 'file_735311493733279.JPG', 'default', 25),
(93, 'file_254801493733385.JPG', 'default', 28),
(94, 'file_3a9f71493733402.JPG', 'default', 28),
(95, 'file_a29291493733425.JPG', 'default', 28),
(96, 'file_fd92f1493733441.JPG', 'default', 28),
(97, 'file_22b3d1493733525.JPG', 'default', 29),
(98, 'file_35b451493733540.JPG', 'default', 29),
(99, 'file_8c0b41493733560.JPG', 'default', 29),
(100, 'file_969c61493733578.JPG', 'default', 29),
(101, 'file_d97951493733592.JPG', 'default', 29),
(102, 'file_122b01493733606.JPG', 'default', 29),
(103, 'file_a22381493733631.JPG', 'default', 30),
(104, 'file_6424d1493733644.JPG', 'default', 30),
(105, 'file_056991493733659.JPG', 'default', 30),
(106, 'file_76ef01493733670.JPG', 'default', 30),
(107, 'file_d15c01493733684.JPG', 'default', 30),
(108, 'file_702c51493733698.JPG', 'default', 30),
(109, 'file_0e1101493733737.jpg', 'default', 31),
(110, 'file_12e641493733753.jpg', 'default', 31),
(111, 'file_305581493733785.JPG', 'default', 31),
(112, 'file_f00511493733801.JPG', 'default', 31),
(113, 'file_1c5a41493733815.JPG', 'default', 31),
(114, 'file_642c81493733831.JPG', 'default', 31),
(115, 'file_628d81493733858.JPG', 'default', 32),
(116, 'file_72dc81493733874.JPG', 'default', 32),
(117, 'file_17bc81493733887.JPG', 'default', 32),
(118, 'file_e9eb81493733905.JPG', 'default', 32),
(119, 'file_fc0371493733928.JPG', 'default', 32),
(120, 'file_6520d1493733957.JPG', 'default', 33),
(121, 'file_459f21493733982.JPG', 'default', 33),
(122, 'file_126fa1493733998.JPG', 'default', 33),
(123, 'file_556ef1493734034.JPG', 'default', 33),
(124, 'file_03f7d1493734049.JPG', 'default', 33),
(125, 'file_462841493734091.JPG', 'default', 34),
(126, 'file_f128b1493734104.JPG', 'default', 34),
(127, 'file_c1df11493734117.JPG', 'default', 34),
(128, 'file_16df91493734131.JPG', 'default', 34),
(129, 'file_a31d81493734149.JPG', 'default', 34),
(130, 'file_f17631493734165.JPG', 'default', 34),
(137, 'file_8d6301493734305.JPG', 'default', 38),
(138, 'file_aa49a1493734340.JPG', 'default', 38),
(139, 'file_bf9da1493734354.JPG', 'default', 38),
(140, 'file_0c5061493734376.JPG', 'default', 38),
(141, 'file_1a83c1493734392.JPG', 'default', 38),
(142, 'file_e772b1493734450.JPG', 'default', 39),
(143, 'file_437e71493734470.JPG', 'default', 39),
(144, 'file_3ccd81493734521.JPG', 'default', 39),
(145, 'file_d135f1493734540.JPG', 'default', 39),
(146, 'file_440761493734553.JPG', 'default', 39),
(147, 'file_f475d1493734568.JPG', 'default', 39),
(148, 'file_b81dd1493734580.JPG', 'default', 39),
(149, 'file_69a0a1493734629.JPG', 'default', 40),
(150, 'file_3cb241493734643.JPG', 'default', 40),
(151, 'file_cc5de1493734662.JPG', 'default', 40),
(152, 'file_6c6661493734679.JPG', 'default', 40),
(153, 'file_81f691493734691.JPG', 'default', 40),
(154, 'file_c9f5d1493734700.JPG', 'default', 40),
(155, 'file_9a99e1493734711.JPG', 'default', 40),
(156, 'file_421161493734726.jpg', 'default', 40),
(157, 'file_996be1493734738.JPG', 'default', 40),
(158, 'file_95be71493734767.JPG', 'default', 41),
(159, 'file_471671493734779.JPG', 'default', 41),
(160, 'file_f7b2b1493734790.JPG', 'default', 41),
(161, 'file_5061c1493734818.JPG', 'default', 41),
(162, 'file_8f7bc1493734833.JPG', 'default', 41),
(163, 'file_1b1811493734846.JPG', 'default', 41),
(164, 'file_378491493734857.JPG', 'default', 41),
(165, 'file_976f51493734879.jpg', 'default', 42),
(167, 'file_7510a1493735012.JPG', 'default', 42),
(168, 'file_92a251493735026.JPG', 'default', 42),
(169, 'file_184dd1493735038.jpg', 'default', 42),
(170, 'file_c38581493735054.jpg', 'default', 42),
(171, 'file_a5b8f1493735065.jpg', 'default', 42),
(172, 'file_a4c411493735076.jpg', 'default', 42),
(173, 'file_508ed1493735101.JPG', 'default', 43),
(174, 'file_4dc571493735121.JPG', 'default', 43),
(175, 'file_6d4781493735147.JPG', 'default', 43),
(176, 'file_d9e8f1493735167.JPG', 'default', 43),
(177, 'file_f4ec41493735197.JPG', 'default', 43),
(178, 'file_c694c1493735210.JPG', 'default', 43),
(179, 'file_b56a81493735223.JPG', 'default', 43),
(180, 'file_2f8521493735234.JPG', 'default', 43),
(181, 'file_1b1291493735273.JPG', 'default', 44),
(182, 'file_d022f1493735288.JPG', 'default', 44),
(183, 'file_40e721493735300.JPG', 'default', 44),
(184, 'file_f231c1493735313.JPG', 'default', 44),
(185, 'file_239321493735331.jpg', 'default', 44),
(186, 'file_339b21493735360.jpg', 'default', 45),
(187, 'file_9dbc61493735371.JPG', 'default', 45),
(188, 'file_788e41493735383.JPG', 'default', 45),
(189, 'file_206281493735398.JPG', 'default', 45),
(190, 'file_6347f1493735413.jpg', 'default', 45),
(191, 'file_92b661493735426.jpg', 'default', 45),
(192, 'file_4d9bc1493735458.JPG', 'default', 46),
(193, 'file_048dc1493735475.JPG', 'default', 46),
(194, 'file_827c81493735488.JPG', 'default', 46),
(195, 'file_2f7781493735503.JPG', 'default', 46),
(196, 'file_dff561493735528.JPG', 'default', 46),
(197, 'file_947821493735541.JPG', 'default', 46),
(198, 'file_0caca1493735558.JPG', 'default', 46),
(199, 'file_a05871493735576.JPG', 'default', 47),
(200, 'file_2098c1493735578.JPG', 'default', 47),
(201, 'file_52a681493735591.JPG', 'default', 47),
(202, 'file_562eb1493735605.JPG', 'default', 47),
(203, 'file_cfe391493735618.JPG', 'default', 47),
(204, 'file_bc39e1493735631.JPG', 'default', 47),
(205, 'file_6a9f81493735644.JPG', 'default', 47),
(206, 'file_c02b11493735774.JPG', 'default', 36),
(207, 'file_b59a41493735789.JPG', 'default', 36),
(208, 'file_2a0c01493735804.JPG', 'default', 36),
(209, 'file_74b9b1493735818.JPG', 'default', 36),
(210, 'file_8d76f1493735832.JPG', 'default', 36),
(211, 'file_0f1631493736073.JPG', 'default', 35),
(212, 'file_366971493736088.JPG', 'default', 35),
(213, 'file_728f11493736103.JPG', 'default', 35),
(214, 'file_a8f9a1493736148.JPG', 'default', 35),
(215, 'file_a04db1493736168.JPG', 'default', 35),
(216, 'file_9cb2f1493736201.JPG', 'default', 35),
(217, 'file_8de051493736258.JPG', 'default', 37),
(218, 'file_dda0a1493736279.JPG', 'default', 37),
(219, 'file_590961493736317.JPG', 'default', 37),
(220, 'file_a1fe71493736330.JPG', 'default', 37),
(221, 'file_0d6741493736343.JPG', 'default', 37),
(222, 'file_81a8d1493736358.JPG', 'default', 37);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `images_id` int(2) NOT NULL AUTO_INCREMENT,
  `images_name` varchar(255) NOT NULL,
  `images_caption` varchar(100) DEFAULT NULL,
  `images_year` int(5) DEFAULT NULL,
  `images_client_name` varchar(100) DEFAULT NULL,
  `images_category` int(2) NOT NULL,
  PRIMARY KEY (`images_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`images_id`, `images_name`, `images_caption`, `images_year`, `images_client_name`, `images_category`) VALUES
(46, 'slider_16f1c1493714289.jpg', NULL, NULL, NULL, 1),
(47, 'slider_0febc1493714340.jpg', NULL, NULL, NULL, 1),
(48, 'slider_5450c1493714354.jpg', NULL, NULL, NULL, 1),
(49, 'slider_124281493714516.JPG', 'PROTOKOLER & TABLE MANNER', 2012, 'PT Newmont', 4),
(50, 'slider_c0e501493714651.JPG', 'MLD Auto Fest', 2017, 'Solo Paragon', 5),
(51, 'slider_5cd151493714698.jpg', NULL, NULL, NULL, 2),
(52, 'slider_0b5431493714753.jpg', NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(2) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(50) NOT NULL,
  `page_description` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_description`) VALUES
(1, 'Home', 'Standard Plus, merupakan pilihan tepat bagi Anda yang membutuhkan jasa EO, WO, Merchandising ataupun Training Provider. Dengan pengalaman selama 6 tahun, Anda dapat mempercayakan kebutuhan Anda kepada Standard Plus.\r\n'),
(2, 'Our Team', 'Standard Plus didukung oleh team yang berpengalaman dari background berbeda yang mendukung performance Standard Plus.\r\n'),
(3, 'Facilitator', 'Standard Plus memiliki team terbaik untuk menyampaikan materi training. Kami bekerjasama dengan yang terbaik di masing-masing bidangnya.\r\n'),
(4, 'Praktisi Wirausaha', 'Standard Plus memiliki team terbaik untuk menyampaikan materi seputar wirausaha. Kami bekerjasama dengan pelaku wirausaha yang sudah berpengalaman.\r\n'),
(5, 'Working With Us', 'Standard Plus memiliki beberapa unit usaha dengan bidang berbeda yang dapat menjadi media bagi client untuk mempelajari sebuah usaha secara langsung.'),
(6, 'Testimony', 'Standard Plus selalu memberikan yang terbaik bagi seluruh client kami. Berikut apa pendapat client mengenai service kami'),
(7, 'Training Provider', 'Sumber daya manusia yang berkualitas merupakan salah satu kunci keberhasilan sebuah perusahaan. Standard Plus, dengan tim yang berpengalaman, akan membantu meningkatkan kualitas SDM Anda saat ini.'),
(8, 'Event Organizer', 'Kami hadir untuk memberikan kemudahan bagi para mitra kami dalam mengemas sebuah event. Kebutuhan dan kepuasan customer selalu menjadi prioritas kami. Berbekal ide yang kreatif dan inovatif, akan kami persembahkan momen yang memorable bagi customer.'),
(9, 'Wedding Organizer', 'Pernikahan adalah sebuah momen sakral seumur hidup sekali. Standard Plus akan membantu Anda untuk mendapatkan momen pernikahan terbaik.'),
(10, 'Merchandising', 'Kami melayani keperluan pembuatan merchandise untuk personal dan corporate. Merchandise khusus yang disesuaikan dengan identity customer.');

-- --------------------------------------------------------

--
-- Table structure for table `praktisi`
--

CREATE TABLE IF NOT EXISTS `praktisi` (
  `praktisi_id` int(2) NOT NULL AUTO_INCREMENT,
  `praktisi_name` varchar(50) NOT NULL,
  `praktisi_description` text NOT NULL,
  `praktisi_image` varchar(30) NOT NULL,
  PRIMARY KEY (`praktisi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `praktisi`
--

INSERT INTO `praktisi` (`praktisi_id`, `praktisi_name`, `praktisi_description`, `praktisi_image`) VALUES
(8, 'Perry Tristianto', 'Seorang pengusaha yang memiliki beberapa factory outlet di Bandung diantaranya: FO Heritage, Summit, Secret dll. Juga pemilik beberapa resto seperti Rumah Sossis, Rumah Ubi, Bali Heaven dll.  Beliau sering dikenal dengan sebutan raja FO di Bandung.', 'praktisi_6d2a11493715335.png'),
(9, 'Hardiansah Ismail (Doddy Domba)', 'Peternak domba yang saat ini mengembangkan peternakan domba yang dinamakan ‘Saung Domba International’ dan telah berkembang menjadi penggembukan domba, pembibitan domba, juga merambah pada layanan akikah serta bidang kuliner yang menyediakan makanan berbahan dasar daging domba.', 'praktisi_a56841493715259.png'),
(10, 'Hariyanto Prayitno', 'Lulusan magister manajemen UGM yang telah menjadi pengusaha sukses di bidang kuliner, pemilik warung Daun Resto (resto yang menyajikan makanan berbahan dasar organik) yang dimulai dari hobby yang dimilikinya.', 'praktisi_e2b611493715275.png'),
(11, 'Rizal Djaafarer', 'Mantan dosen arsitek UPI Bandung yang beralih profesi menjadi petani anggrek secara otodidak. Kini telah sukses sebagai pengusaha tanaman hias yang juga sebagai salah satu pemenang lomba penyilangan anggrek tingkat nasional.', 'praktisi_096241493715361.png'),
(12, 'Chriss Hardijaya', 'Dalam 20 tahun terakhir berkonsentrasi dan menggeluti usaha bakery. Mengembangkan produk kue dan roti berbahan dasar dari ubi, yang dikemasnya dalam Rumah Ubi. Ia juga mengembangkan balai pelatihan untuk memberi kesempatan pada masyarakat yang ingin belajar tentang usaha bakery dan kuliner.', 'praktisi_985e21493715242.png'),
(13, 'Ir. Asih', 'Konsultan dan PNS di Dinas Pariwisata serta Direktur dan Owner Pabrik Jamu “Togavitan”. Memiliki usaha Travel di Kota Batu, Malang. Aktif sebagai pembicara dan motivator entrepreneurship serta dosen tamu yang berpengalaman memberikan seminar “Pengusaha Mandiri” ke beberapa kota.\r\n', 'praktisi_cc9d01493715300.png'),
(14, 'Tutik ‘Wahyu Austin''', 'Mantan chef hotel di Brunei Darussalam dan Le Meredien Jakarta yang memutuskan untuk mandiri dan bergerak dibidang pastry & culinary yang memasok produknya ke Starbucks Amabrukmo Jogjakarta serta franchise Kedai Kopi di Jogja dan Malang.', 'praktisi_79d0c1493715400.png'),
(15, 'Rahman Subagyo', 'Pemilik “Kebun Asri” yang bergerak dibidang rental tanaman hias, dekorasi pesta, supplier sayur ke supermarket dan memiliki kolam pancing yang memenuhi segala kebutuhan memancing.\r\n', 'praktisi_8a0ba1493715349.png'),
(16, 'Beta Harianto', 'Guru PNS yang berwirausaha di bidang pengolahan limbah plastik. Produknya bahkan sudah diekspor hingga ke Eropa. Beliau juga aktif di kegiatan sosial membantu anak terlantar untuk diberikan pelatihan dan keterampilan.?', 'praktisi_994ac1493715221.png'),
(17, 'M. Insyan Karomah, S.Sos', 'Lulusan S1 komunikasi yang pernah meniti karir di Jepang. Sekarang sedang menekuni bisnisnya di perikanan air tawar sebagai petani budidaya ikan lele, juga sebagai founder “Rezeki Air” yakni usaha yang sedang di kembangkannya.', 'praktisi_0d5421493715322.png'),
(18, 'Hernowo', 'Pensiunan bank yang memiliki usaha persewaan sound system. Bersama istrinya ia telah sukses menjalankan usahanya di bidang  pengelolaan sampah.', 'praktisi_6fb5e1493715289.png'),
(19, 'Hadi Widiyono', 'Pensiunan bank BNI, & lulusan Sarjana (S1) Fakultas Ekonomi UGM Yogyakarta, yang sekarang bergelut di bidang usaha yang berkaitan dengan bidang usaha perdagangan umum dan jasa.', 'praktisi_6ef8d1493715250.png'),
(20, 'Jelantik', 'F&B manager di salah satu hotel bintang 4 di Kuta. Usaha sampingan beliau bersama keluarganya adalah menerima pemesanan kue atau snack untuk acara pernikahan, upacara adat, dan banquet hotel.', 'praktisi_94f8b1493715311.png'),
(21, 'Wayan Widya', 'Petani sukses yang menjadi pemasok sayuran dan buah-buahan untuk hampir 40% hotel dan restaurant di Bali, dan sekarang berhasil mendirikan “The Sila’s Agrotourism”, yang dikelola oleh putranya.\r\n', 'praktisi_4a1601493715413.png'),
(22, 'Tami', 'Pemilik usaha resto, cafe dan katering.  Jiwa seni dari suaminya sangat mempengaruhi karakter resto yg dimilikinya sehingga memiliki daya tarik tersendiri untuk konsumen.', 'praktisi_ccfd01493715388.png'),
(23, 'Siti Saidah', 'Lulusan dari salah satu universitas di London, memiliki usaha di bidang pengolahan kelapa hingga berhasil dieksport ke berbagai negara. Expert di bidang pengolahan ayam hingga berhasil menguasai pasar di indonesia. Kini juga mulai merambah pada pengolahan hasil perikanan.', 'praktisi_271281493715376.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `services_id` int(2) NOT NULL AUTO_INCREMENT,
  `services_name` varchar(20) NOT NULL,
  `services_description` text NOT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services_name`, `services_description`) VALUES
(1, 'Training Provider', 'Sumber daya manusia yang berkualitas merupakan salah satu kunci keberhasilan sebuah perusahaan. Standard Plus, dengan tim yang berpengalaman, akan membantu meningkatkan kualitas SDM Anda saat ini.'),
(2, 'Event Organizer', 'Kami hadir untuk memberikan kemudahan bagi para mitra kami dalam mengemas sebuah event. Kebutuhan dan kepuasan customer selalu menjadi prioritas kami. Berbekal ide yang kreatif dan inovatif, akan kami persembahkan momen yang memorable bagi customer.'),
(3, 'Wedding Organizer', 'Pernikahan adalah sebuah momen sakral seumur hidup sekali. Standard Plus akan membantu Anda untuk mendapatkan momen pernikahan terbaik.'),
(4, 'Merchandising', 'Kami melayani keperluan pembuatan merchandise untuk personal dan corporate. Merchandise khusus yang disesuaikan dengan identity customer.');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting_id` int(3) NOT NULL AUTO_INCREMENT,
  `setting_about` text NOT NULL,
  `setting_team` text NOT NULL,
  `setting_facilitator` text NOT NULL,
  `setting_praktisi` text NOT NULL,
  `setting_working` text NOT NULL,
  `setting_training` text NOT NULL,
  `setting_event` text NOT NULL,
  `setting_wedding` text NOT NULL,
  `setting_merchandising` text NOT NULL,
  `setting_testimony` text NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setting_id`, `setting_about`, `setting_team`, `setting_facilitator`, `setting_praktisi`, `setting_working`, `setting_training`, `setting_event`, `setting_wedding`, `setting_merchandising`, `setting_testimony`) VALUES
(1, 'Standard Plus, merupakan pilihan tepat bagi Anda yang membutuhkan jasa EO, WO, Merchandising ataupun Training Provider. Dengan pengalaman selama 6 tahun, Anda dapat mempercayakan kebutuhan Anda kepada Standard Plus.', 'Standard Plus didukung oleh team yang berpengalaman dari background berbeda yang mendukung performance Standard Plus.', 'Standard Plus memiliki team terbaik untuk menyampaikan materi training. Kami bekerjasama dengan yang terbaik di masing-masing bidangnya.', 'Standard Plus memiliki team terbaik untuk menyampaikan materi seputar wirausaha. Kami bekerjasama dengan pelaku wirausaha yang sudah berpengalaman.', 'Standard Plus memiliki beberapa unit usaha dengan bidang berbeda yang dapat menjadi media bagi client untuk mempelajari sebuah usaha secara langsung', 'Sumber daya manusia yang berkualitas merupakan salah satu kunci keberhasilan sebuah perusahaan. Standard Plus, dengan tim yang berpengalaman, akan membantu meningkatkan kualitas SDM Anda saat ini.', 'Kami hadir untuk memberikan kemudahan bagi para mitra kami dalam mengemas sebuah event. Kebutuhan dan kepuasan customer selalu menjadi prioritas kami. Berbekal ide yang kreatif dan inovatif, akan kami persembahkan momen yang memorable bagi customer.', 'Pernikahan adalah sebuah momen sakral seumur hidup sekali. Standard Plus akan membantu Anda untuk mendapatkan momen pernikahan terbaik.', 'Kami melayani keperluan pembuatan merchandise untuk personal dan corporate. Merchandise khusus yang disesuaikan dengan identity customer.', 'Standard Plus selalu memberikan yang terbaik bagi seluruh client kami. Berikut apa pendapat client mengenai service kami');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(2) NOT NULL AUTO_INCREMENT,
  `slider_page` varchar(50) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_page`) VALUES
(1, 'Homepage'),
(2, 'Wedding Organizer'),
(3, 'Merchandising'),
(4, 'Training Provider'),
(5, 'Event Organizer');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE IF NOT EXISTS `social_media` (
  `social_id` int(2) NOT NULL AUTO_INCREMENT,
  `social_facebook_link` varchar(100) NOT NULL,
  `social_instagram_link` varchar(100) NOT NULL,
  `social_twitter_link` varchar(100) NOT NULL,
  `social_youtube_link` varchar(100) NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`social_id`, `social_facebook_link`, `social_instagram_link`, `social_twitter_link`, `social_youtube_link`) VALUES
(1, 'https://www.facebook.com/standardplusID/?fref=ts&ref=br_tf', 'https://www.instagram.com/standardplusid/', 'https://twitter.com/standardplusID', 'https://www.youtube.com/channel/UCbjodeNFZpvcZlo4Jgt1RTA');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(2) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(40) NOT NULL,
  `team_role` varchar(20) NOT NULL,
  `team_description` text NOT NULL,
  `team_image` varchar(30) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_role`, `team_description`, `team_image`) VALUES
(31, 'Sari', 'CEO/Founder', 'Memiliki banyak pengetahuan dan pengalaman tentang pengembangan dan pendayagunaan SDM (Human Resources Empowering). Serta keahlian dalam menghandle klien dari berbagai perusahaan nasional dan multinasional Indonesia.\r\n', 'team_3e4401493714832.png'),
(32, 'Ahmad Iswahyudi, ST', 'Lead of The Project', 'Berpengalaman di bidang pengembangan SDM selama 11 tahun. Pernah menjabat sebagai Wakil Ketua Yayasan Indonusa Wahana selama 2 tahun dan menjabat sebagai Direktur CV. Indonusa yang bergerak di bidang Informasi Teknologi.', 'team_f8e3c1493714846.png'),
(33, 'Wildan Hakim, ST', 'Lead of The Project', 'Lulusan Fakultas Ekonomi Universitas Brawijaya. Merupakan project officer handal yang pernah menjadi Owner CV. Indonusa yang bergerak dibidang jasa.\r\n', 'team_3509b1493714884.png'),
(34, 'Firda Qonita', 'Lead of the Project', 'Lulusan graphic design and advertising di Limkokwing University, Malaysia. Memiliki banyak pengalaman dan aktif berorganisasi sejak SMA.', 'team_19fa71493714894.png'),
(35, 'Ayuni Dwi Resita, S.E ', 'Lead of the Project', 'Lulusan Fakultas Ekonomi dan Bisnis Universitas Indonesia, yang berpengalaman dalam menghandle event. Serta memiliki keahlian berbahasa inggris yang baik.', 'team_8a4181493714905.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `testimony_id` int(2) NOT NULL AUTO_INCREMENT,
  `testimony_name` varchar(50) NOT NULL,
  `testimony_from` varchar(300) NOT NULL,
  `testimony_service` varchar(100) NOT NULL,
  `testimony_text` text NOT NULL,
  `testimony_image` varchar(50) NOT NULL,
  PRIMARY KEY (`testimony_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`testimony_id`, `testimony_name`, `testimony_from`, `testimony_service`, `testimony_text`, `testimony_image`) VALUES
(7, 'SAKTIAWAN HARAPAN', 'Pimpinan HR Talent Departement\r\nPT. Newmont Nusa Tenggara, Tbk\r\n', 'Entrepreneurship Workshop for Pre-retirement', '"Saya terkesan dengan para fasilitator yang menggunakan metode yang sangat komunikatif, termasuk para praktisi usahanya. Materi yang sangat variatif dan bermanfaat."\r\n', 'testimony_cd66c1493717092.png'),
(8, 'WILLIAM PETER', 'HR PT. Indosat, Tbk', 'Outbond Wargames', '"Kalo mau ngerasain ‘perang’, disini tempatnya, sensasi ‘War’nya terasa banget ! Sangat berdaya !"\r\n', 'testimony_84f111493717107.png'),
(9, 'HERMAWAN SETIABUDI', 'Salah satu manager PT. Kalbe Farma', 'Entrepreneurship Workshop for Pre-retirement', '"Para fasilitator dan praktisi usahanya adalah figur-figur yang mumpuni di bidangnya masing-masing. Materi yang disajikan komplit, semuanya berkualitas dan disajikan dengan cara yang ilmiah tapi mudah dimengerti oleh peserta. Hal yang istimewa adalah ternyata StandardPlus juga memberikan pelayanan pasca pelatihan, dimana kami bisa berkonsultasi secara personal kepada semua fasilitator dan praktisi usaha, jika kami mengalami kesulitan nantinya. Hal tersebut merupakan value added yang luar biasa bagi kami. Pelayanan seluruh staff dan direksi StandardPlus sangat luar biasa, penuh keramahan dan care terhadap semua peserta, sehingga walaupun acaranya sangat padat, kai sangat enjoy dan semnagat hingga akhir pelatihan"\r\n', 'testimony_089f41493717059.png'),
(10, 'KIKY RINI HARUHUSODO', 'Quality Control Manager PT. Bintang Toedjoe', 'Entrepreneurship Workshop for Pre-retirement', '"Terima Kasih yang tak terhingga untuk StandardPlus yang mulai dari awal hingga akhir kegiatan menemani kami dengan penuh kesabaran dan senyum,dantelah membuka wawasan banyak hal tentang ilmu baru bagi kami. Tentang apa sih entrepreneur itu…tentang apa sih usaha itu…Semua yang menjadi hal baru bagi kami tersebut telah tersampaikan dengan baik dengan kemasan yang menarik, sehingga kami tidak bosan selama mengkuti kegiatan pelatihan tersebut. Dan akhirnya kini kami bisa lebih percaya diri dan siap dalam menghadapi masa pensiun. Sekali lagi terima kasih dan Maju terus bersama StandardPlus!!! "\r\n', 'testimony_3d5931493717071.png'),
(11, 'MARTINDY RAJAGUKGUK', 'Senior System Administrator PT. Taspen (Persero)', 'Entrepreneurship Workshop for Pre-retirement', '"Banyak sekali manfaat yang kami dapatkan dari pelatihan kewirausahaan ini, menambah bekal pengetahuan untuk kami yang akan memasuki masa pensiun, standardplus, bravo.. bravo.. bravo !!"\r\n', 'testimony_3d7cb1493717081.png');

-- --------------------------------------------------------

--
-- Table structure for table `training_archive`
--

CREATE TABLE IF NOT EXISTS `training_archive` (
  `training_archive_id` int(3) NOT NULL AUTO_INCREMENT,
  `training_archive_name` varchar(100) NOT NULL,
  `training_archive_place` varchar(100) NOT NULL,
  `training_archive_year` int(5) NOT NULL,
  `training_archive_key` int(3) NOT NULL,
  PRIMARY KEY (`training_archive_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `training_archive`
--

INSERT INTO `training_archive` (`training_archive_id`, `training_archive_name`, `training_archive_place`, `training_archive_year`, `training_archive_key`) VALUES
(1, 'ENTREPRENEURSHIP PRE - RETIREMENT 1', 'PT. Taspen', 2011, 1),
(11, 'PELATIHAN PENINGKATAN POTENSI DIRI BAGI GURU', 'SMK BATU - MALANG', 2011, 6),
(12, 'PROBLEM SOLVING AND DECISION MAKING', ' BANK BJB, JAKARTA', 2014, 7),
(13, 'SERVICE LEADERSHIP', 'PT. PELNI, KM. KELUD', 2014, 11),
(14, 'STRATEGI MENGELOLA PERTUMBUHAN USAHA BAGI UKM', 'PT. TASPEN, BANDUNG', 2014, 12),
(15, 'ENTREPRENEURSHIP FOR RETIREMENT 1', 'PT. KALBE FARMA, BANDUNG', 2012, 1),
(17, 'TEAM BUILDING', 'KOPEGA INDONESIA POWER SEKTOR PRIUK', 2012, 13),
(18, 'ENTREPRENEURSHIP FOR RETIREMENT 1', 'PT. NEWMONT, BANDUNG', 2012, 1),
(19, 'TEAM BUILDING', 'PT. MUAMALAT,BOGOR', 2013, 13),
(20, 'REFRESHING MANAGEMENT', 'KPP PAJAK SINGOSARI    ', 2011, 9),
(21, 'TEAM BUILDING', 'PT. TASPEN, LOMBOK', 2013, 13),
(22, 'ENTREPRENEURSHIP PRE-RETIREMENT 2', 'PT. NEWMONT', 2012, 1),
(23, 'TEKNIK NEGOSIASI & HANDLING PEOPLE', 'PT. PERTAMINA', 2011, 14),
(25, 'ENTREPRENEURSHIP PRE-RETIREMENT 2', 'PT. TASPEN', 2012, 1),
(26, 'ENTREPRENEURSHIP PRE-RETIREMENT', 'PT. HEXPHARM', 2012, 1),
(27, 'ENTERPRENEURSHIP PRE - RETIREMENT 3', 'PT. TASPEN,BATU', 2013, 1),
(28, 'ENTERPRENEURSHIP PRE - RETIREMENT 2', ' PT. KALBE FARMA, BOGOR', 2013, 1),
(29, 'ENTERPRENEURSHIP PRE - RETIREMENT', 'BINTANG TOEDJOE, CIAWI', 2013, 1),
(30, 'ENTERPRENEURSHIP PRE-RETIREMENT 4', 'PT. TASPEN, YOGYAKARTA', 2014, 1),
(31, 'ENTREPRENEURSHIP WORKSHOP FOR PRE - RETIREMENT', 'KALBE FARMA 4, BANDUNG', 2015, 1),
(32, 'ENTREPRENEURSHIP WORKSHOP FOR PRE - RETIREMENT', ' RSPI (RUMAH SAKIT PONDOK INDAH)', 2016, 1),
(33, 'ENTREPRENEURSHIP WORKSHOP FOR PRE - RETIREMENT 6', 'KALBE FARMA, CISARUA BOGOR', 2017, 1),
(35, 'MANAGING CHANGES WORKSHOP', 'POLDA KEP.RIAU', 2011, 2),
(36, ' MAXIMING POWER POINT BATCH 2', 'SMK SE-KABUPATEN BOGOR', 2011, 4),
(37, 'MAXIMING POWER POINT BATCH 3', 'SMK SE-KABUPATEN BOGOR', 2011, 4),
(38, 'MAXIMING POWER POINT BATCH 4', 'SMK SE-KABUPATEN BOGOR', 2011, 4),
(39, 'MAXIMING POWER POINT BATCH 5', 'SMK SE-KABUPATEN BOGOR', 2011, 4),
(40, 'OUTBOUND - WAR GAMES', 'PT. INDOSAT,BOGOR', 2013, 5),
(41, 'PROTOKOLER & TABLE MANNER', 'PT NEWMONT', 2012, 8),
(42, 'SERVICE EXCELLENCE', 'PT. HEALTH WEALTH INTERNATIONAL', 2012, 10);

-- --------------------------------------------------------

--
-- Table structure for table `training_images`
--

CREATE TABLE IF NOT EXISTS `training_images` (
  `training_image_id` int(3) NOT NULL AUTO_INCREMENT,
  `training_image_name` varchar(100) NOT NULL,
  `training_image_alt` varchar(100) NOT NULL,
  `training_image_key` int(3) NOT NULL,
  PRIMARY KEY (`training_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `training_images`
--

INSERT INTO `training_images` (`training_image_id`, `training_image_name`, `training_image_alt`, `training_image_key`) VALUES
(14, 'training_ac8981493709472.png', 'Not Defined', 4),
(15, 'training_8c56c1493719521.jpg', 'Not Defined', 11),
(16, 'training_04e7a1493719560.jpg', 'Not Defined', 11),
(17, 'training_e7b461493719585.jpg', 'Not Defined', 11),
(18, 'training_573871493719604.jpg', 'Not Defined', 11),
(19, 'training_ca8a71493719636.JPG', 'Not Defined', 1),
(20, 'training_2c9731493719646.JPG', 'Not Defined', 1),
(21, 'training_380ac1493719655.JPG', 'Not Defined', 1),
(22, 'training_af4e01493719665.JPG', 'Not Defined', 1),
(23, 'training_cc2081493719679.JPG', 'Not Defined', 12),
(24, 'training_c24e91493719682.JPG', 'Not Defined', 1),
(25, 'training_061fb1493719692.JPG', 'Not Defined', 1),
(26, 'training_f25d71493719709.JPG', 'Not Defined', 12),
(27, 'training_e166d1493719727.JPG', 'Not Defined', 12),
(28, 'training_472ad1493719738.JPG', 'Not Defined', 15),
(29, 'training_a34291493719742.JPG', 'Not Defined', 12),
(30, 'training_ab2491493719757.JPG', 'Not Defined', 12),
(31, 'training_203471493719786.JPG', 'Not Defined', 15),
(32, 'training_7c38b1493719801.JPG', 'Not Defined', 15),
(33, 'training_441bd1493719815.JPG', 'Not Defined', 15),
(36, 'training_77fc91493719886.JPG', 'Not Defined', 15),
(37, 'training_eac921493719910.JPG', 'Not Defined', 15),
(38, 'training_566491493720085.JPG', 'Not Defined', 41),
(39, 'training_552231493720109.JPG', 'Not Defined', 41),
(40, 'training_eda711493720126.JPG', 'Not Defined', 41),
(41, 'training_06f811493720129.JPG', 'Not Defined', 35),
(42, 'training_513031493720150.JPG', 'Not Defined', 41),
(43, 'training_44c5f1493720151.JPG', 'Not Defined', 35),
(44, 'training_0f2af1493720166.JPG', 'Not Defined', 35),
(45, 'training_274841493720180.JPG', 'Not Defined', 35),
(46, 'training_589a01493720211.JPG', 'Not Defined', 36),
(47, 'training_c42221493720226.jpg', 'Not Defined', 20),
(48, 'training_7c99e1493720228.JPG', 'Not Defined', 36),
(49, 'training_25ff71493720245.jpg', 'Not Defined', 20),
(50, 'training_672991493720260.JPG', 'Not Defined', 36),
(51, 'training_b479c1493720266.jpg', 'Not Defined', 20),
(52, 'training_b3fc01493720300.jpg', 'Not Defined', 20),
(53, 'training_51c171493720301.JPG', 'Not Defined', 36),
(54, 'training_9f3841493720313.JPG', 'Not Defined', 36),
(55, 'training_7b3ce1493720331.JPG', 'Not Defined', 36),
(56, 'training_e19bf1493720354.JPG', 'Not Defined', 37),
(57, 'training_fffb41493720371.JPG', 'Not Defined', 37),
(58, 'training_986731493720389.JPG', 'Not Defined', 37),
(59, 'training_129d51493720408.JPG', 'Not Defined', 37),
(60, 'training_b04bb1493720421.JPG', 'Not Defined', 37),
(61, 'training_8ca191493720435.jpg', 'Not Defined', 37),
(62, 'training_9a1871493720473.JPG', 'Not Defined', 38),
(63, 'training_efc211493720487.JPG', 'Not Defined', 38),
(64, 'training_ba6521493720497.JPG', 'Not Defined', 42),
(65, 'training_a81691493720501.JPG', 'Not Defined', 38),
(66, 'training_4cdc21493720514.JPG', 'Not Defined', 42),
(67, 'training_9065c1493720515.JPG', 'Not Defined', 38),
(68, 'training_ab8aa1493720536.JPG', 'Not Defined', 24),
(69, 'training_5b2011493720538.JPG', 'Not Defined', 38),
(70, 'training_ceabd1493720553.JPG', 'Not Defined', 24),
(71, 'training_a47271493720560.JPG', 'Not Defined', 39),
(72, 'training_8aed71493720579.JPG', 'Not Defined', 39),
(73, 'training_30ecd1493720600.JPG', 'Not Defined', 39),
(74, 'training_508501493720617.JPG', 'Not Defined', 39),
(75, 'training_6e73d1493720659.JPG', 'Not Defined', 18),
(76, 'training_cdb821493720767.JPG', 'Not Defined', 40),
(77, 'training_6b3081493720783.JPG', 'Not Defined', 40),
(78, 'training_0bc0e1493720797.JPG', 'Not Defined', 40),
(79, 'training_834c71493720809.JPG', 'Not Defined', 40),
(80, 'training_c5e621493720828.JPG', 'Not Defined', 40),
(81, 'training_c89621493720844.JPG', 'Not Defined', 40),
(82, 'training_6c6ae1493720861.JPG', 'Not Defined', 40),
(83, 'training_336d21493720906.JPG', 'Not Defined', 13),
(84, 'training_c1fa81493720938.JPG', 'Not Defined', 13),
(85, 'training_2e8641493720953.JPG', 'Not Defined', 13),
(86, 'training_4f8f91493720970.JPG', 'Not Defined', 13),
(87, 'training_c0ac81493721002.JPG', 'Not Defined', 14),
(88, 'training_8d6281493721017.JPG', 'Not Defined', 14),
(89, 'training_07be81493721031.JPG', 'Not Defined', 14),
(90, 'training_9ae381493721050.JPG', 'Not Defined', 14),
(91, 'training_042171493721103.JPG', 'Not Defined', 17),
(92, 'training_c76e31493721125.JPG', 'Not Defined', 17),
(93, 'training_e71201493721139.JPG', 'Not Defined', 17),
(94, 'training_5d4681493721154.JPG', 'Not Defined', 17),
(95, 'training_51b5e1493721172.JPG', 'Not Defined', 17),
(96, 'training_ff9ef1493721192.JPG', 'Not Defined', 21),
(97, 'training_3d8e21493721208.JPG', 'Not Defined', 21),
(98, 'training_252151493721222.JPG', 'Not Defined', 21),
(99, 'training_ed8401493721302.JPG', 'Not Defined', 21),
(101, 'training_bd19e1493721850.JPG', 'Not Defined', 23),
(102, 'training_c60111493721864.JPG', 'Not Defined', 23),
(103, 'training_9cca11493721878.JPG', 'Not Defined', 23),
(104, 'training_836a91493721891.JPG', 'Not Defined', 23),
(105, 'training_4351b1493725235.JPG', 'Not Defined', 19),
(106, 'training_450ca1493729742.JPG', 'Not Defined', 25),
(107, 'training_c9a701493729937.JPG', 'Not Defined', 25),
(108, 'training_ff65e1493730071.JPG', 'Not Defined', 33),
(109, 'training_726831493730084.JPG', 'Not Defined', 33),
(110, 'training_a63361493730096.JPG', 'Not Defined', 33),
(111, 'training_b39da1493730107.JPG', 'Not Defined', 33),
(112, 'training_70c711493730118.JPG', 'Not Defined', 33),
(113, 'training_fb7431493730128.JPG', 'Not Defined', 33),
(114, 'training_d37301493730139.JPG', 'Not Defined', 33),
(115, 'training_5ec491493730335.JPG', 'Not Defined', 32),
(116, 'training_ee39a1493730347.JPG', 'Not Defined', 32),
(117, 'training_caea81493730356.JPG', 'Not Defined', 32),
(118, 'training_54e421493730365.JPG', 'Not Defined', 32),
(119, 'training_6949d1493730373.JPG', 'Not Defined', 32),
(120, 'training_223001493730392.JPG', 'Not Defined', 31),
(121, 'training_7adf31493730402.JPG', 'Not Defined', 31),
(122, 'training_78ebf1493730411.JPG', 'Not Defined', 31),
(123, 'training_f82551493730419.JPG', 'Not Defined', 31),
(124, 'training_c22081493730452.JPG', 'Not Defined', 30),
(125, 'training_1598c1493730480.JPG', 'Not Defined', 30),
(126, 'training_2216f1493730490.JPG', 'Not Defined', 30),
(127, 'training_aa5a11493730499.JPG', 'Not Defined', 30),
(128, 'training_7a5511493730510.JPG', 'Not Defined', 30),
(130, 'training_932ff1493730668.JPG', 'Not Defined', 18),
(131, 'training_1e3d61493730689.JPG', 'Not Defined', 18),
(132, 'training_4ffb51493730709.JPG', 'Not Defined', 18),
(133, 'training_41d531493730734.JPG', 'Not Defined', 22),
(134, 'training_5ccbf1493730751.JPG', 'Not Defined', 22),
(135, 'training_dbed71493730766.JPG', 'Not Defined', 22),
(136, 'training_0484b1493730783.JPG', 'Not Defined', 22),
(137, 'training_a41301493730799.JPG', 'Not Defined', 22),
(138, 'training_ee6861493730812.JPG', 'Not Defined', 22),
(139, 'training_db3201493731187.JPG', 'Not Defined', 42),
(140, 'training_0a9da1493731197.JPG', 'Not Defined', 42),
(141, 'training_2042c1493731270.JPG', 'Not Defined', 25),
(142, 'training_2bedc1493731282.JPG', 'Not Defined', 25),
(143, 'training_5dc101493731293.JPG', 'Not Defined', 25),
(144, 'training_5f9911493731397.JPG', 'Not Defined', 26),
(145, 'training_9353a1493731409.JPG', 'Not Defined', 26),
(146, 'training_b64fd1493731421.JPG', 'Not Defined', 26),
(147, 'training_fff161493731434.JPG', 'Not Defined', 26),
(148, 'training_3faad1493731448.JPG', 'Not Defined', 26),
(149, 'training_fbc981493731463.JPG', 'Not Defined', 26),
(150, 'training_d86031493731474.JPG', 'Not Defined', 26),
(151, 'training_7b22f1493731526.JPG', 'Not Defined', 29),
(152, 'training_a56d11493731541.JPG', 'Not Defined', 29),
(153, 'training_be6c81493731552.JPG', 'Not Defined', 29),
(154, 'training_637a91493731565.JPG', 'Not Defined', 29),
(155, 'training_113f81493731607.JPG', 'Not Defined', 28),
(156, 'training_b2b951493731618.JPG', 'Not Defined', 28),
(157, 'training_727f11493731629.JPG', 'Not Defined', 28),
(158, 'training_777151493731643.JPG', 'Not Defined', 28),
(159, 'training_a2b2c1493731660.JPG', 'Not Defined', 28),
(160, 'training_a8b901493731809.JPG', 'Not Defined', 27),
(161, 'training_9bbf01493731827.JPG', 'Not Defined', 27),
(162, 'training_1c6871493731848.JPG', 'Not Defined', 27),
(163, 'training_c8d861493731862.JPG', 'Not Defined', 27),
(164, 'training_3e0381493731901.JPG', 'Not Defined', 27),
(165, 'training_be4991493731916.JPG', 'Not Defined', 27);

-- --------------------------------------------------------

--
-- Table structure for table `training_services`
--

CREATE TABLE IF NOT EXISTS `training_services` (
  `training_service_id` int(3) NOT NULL AUTO_INCREMENT,
  `training_service_name` varchar(100) NOT NULL,
  `training_service_image` varchar(100) NOT NULL,
  PRIMARY KEY (`training_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `training_services`
--

INSERT INTO `training_services` (`training_service_id`, `training_service_name`, `training_service_image`) VALUES
(1, 'Entrepreneurship For Pre Retirement', 'services_6400c1493713507.JPG'),
(2, 'Managing Changes', 'services_554a61493713446.JPG'),
(4, 'Maximizing Power Point', 'services_a666c1493713537.jpg'),
(5, 'Outbond Wargames', 'services_88ee41493713563.JPG'),
(6, 'Pelatihan Peningkatan Potensi Bagi Guru', 'services_60b101493713600.jpg'),
(7, 'Problem Solving & Decision Making', 'services_8e4961493713632.JPG'),
(8, 'Protokoler & Table Manner', 'services_416281493713653.JPG'),
(9, 'Refreshing Management', 'services_b71d21493713690.jpg'),
(10, 'Service Excellence', 'services_216af1493713713.JPG'),
(11, 'Service Leadership', 'services_d1a921493713759.JPG'),
(12, 'Strategi Mengelola Pertumbuhan Usaha bagi UKM', 'services_e8de41493713784.JPG'),
(13, 'Team Building', 'services_2cb9f1493713804.JPG'),
(14, 'Teknik Negosiasi & Handling', 'services_fdf611493713821.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE IF NOT EXISTS `working` (
  `working_id` int(11) NOT NULL AUTO_INCREMENT,
  `working_name` varchar(50) NOT NULL,
  `working_description` text NOT NULL,
  `working_image` varchar(30) NOT NULL,
  PRIMARY KEY (`working_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `working`
--

INSERT INTO `working` (`working_id`, `working_name`, `working_description`, `working_image`) VALUES
(3, 'PERDU CRAFT', 'Perdu craft, adalah salah satu kerajinan tangan yang memanfaatkan bahan-bahan simple dan mudah untuk didapatkan sebagai bahan dasarnya. Perdu Craft juga menggunakan bahan-bahan perca yang sudah terbuang atau tidak terpakai.', 'working_f4f141493715648.png'),
(4, 'FOOD TRUCK', 'Food truck adalah konsep penjualan makanan dengan menggunakan sebuah kendaraan (umumnya truk modifikasi) sebagai tempat usahanya. Jadi pemesanan, makan dan pelayanannya semuanya dilakukan di dalam kendaraan yang telah didesain sedemikan rupa untuk menarik para konsumen.', 'working_eff851493715641.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
