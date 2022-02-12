-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 07:07 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mm04a`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `mail` text NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` text NOT NULL,
  `tinhtp` text NOT NULL,
  `sothich` text NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `first_name`, `last_name`, `mail`, `ngaysinh`, `gioitinh`, `tinhtp`, `sothich`, `mota`) VALUES
(1, 'admin', 'admin', 'nguyen van', 'anh', 'nguyenanhvhit@yahoo.com', '2012-12-06', 'nam', 'Da  Nang', 'dulich,khac', 'thang than, trung thuc, it noi');

-- --------------------------------------------------------

--
-- Table structure for table `dangkythongtin`
--

CREATE TABLE IF NOT EXISTS `dangkythongtin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `mail` text NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` text NOT NULL,
  `tinhtp` text NOT NULL,
  `sothich` text NOT NULL,
  `mota` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dangkythongtin`
--

INSERT INTO `dangkythongtin` (`ID`, `username`, `password`, `first_name`, `last_name`, `mail`, `ngaysinh`, `gioitinh`, `tinhtp`, `sothich`, `mota`) VALUES
(4, 'nguyenanh', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'nguyen', 'anh', 'nguyenanh@gmail,com', '1991-01-01', 'nam', 'da nang  ', 'thethao,nghenhac,dulich', 'vip pro'),
(5, 'truckhue', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'truc', 'khue', 'truckhue@gmail.com', '1112-01-18', 'nam', 'GN', 'thethao,khac', 'hay noi'),
(6, 'quyquyen', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'quy', 'quyen', 'quyquyenvhit@gmail.com', '1992-01-12', 'nam', 'Da Nang', 'thethao,muasam', 'Cao to'),
(7, 'vandanh', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Nguyen Van', 'Danh', 'nguyendanh@gmail.com', '1990-02-02', 'nam', 'Da Nang  ', 'thethao,nghenhac', 'Bá»‹ cáº­n thá»‹'),
(8, 'ngochai', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'hoang', 'Hai', 'ngochai@gmail.com', '1990-03-03', 'nam', 'Da nang', 'thethao,nghenhac', 'ham the thao'),
(9, 'giahuy', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'gia', 'Huy', 'giahuy@gmail.com', '1991-01-18', 'nam', 'Da Nang', 'thethao,dulich', 'nghiá»n game'),
(10, 'huuqua', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Nguyen', 'Quy', 'huuqua@gmail.com', '1990-04-03', 'nam', 'Da Nang', 'thethao,khac', 'ham choi'),
(11, 'quocchi', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9', 'Le', 'Chi', 'quocchi@gmail.com', '1991-05-04', 'nam', 'Da Nang', 'thethao,dulich', 'hoi beo, toc xoan, '),
(12, 'jfsldk', '*D7385806600D281221E9553892A492ECF42824DE', 'slfjsl', 'lfj', 'slfjsldk', '1990-02-01', 'nam', ' jiohj', 'thethao', 'q sÃ¬hosaihj');

-- --------------------------------------------------------

--
-- Table structure for table `tenphim`
--

CREATE TABLE IF NOT EXISTS `tenphim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenphim` text NOT NULL,
  `mota` text,
  `theloai` text NOT NULL,
  `hinhanh` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tenphim`
--

INSERT INTO `tenphim` (`id`, `tenphim`, `mota`, `theloai`, `hinhanh`) VALUES
(8, 'hoang-cung', 'hoang cung', 'phimbo', 'hoang-cung.jpeg'),
(10, 'cuoc-chien-sinh-tu', 'cuá»™c chiáº¿n sinh tá»­', 'xemnhieu', 'cuoc-chien-sinh-tu.jpg'),
(11, 'nang-cong-chua-bi-an', 'nÃ ng cÃ´ng chÃºa bÃ­ áº©n', 'xemnhieu', 'nang-cong-chua-bi-an.jpg'),
(13, 'nhiem-vu-cuoi', 'nhiá»‡m vá»¥ cuá»‘i', 'phimbo', 'nhiem-vu-cuoi.jpg'),
(14, 'mui-ten-xanh', 'mÅ©i tÃªn xanh', 'phimle', 'mui-ten-xanh.jpg'),
(15, 'nguoi-nhen-3', 'ngÆ°á»i nhá»‡n 3', 'xemnhieu', 'nguoi-nhen-3.jpg'),
(16, 'nhac-kich-2012', 'nháº¡c ká»‹ch 2012', 'phimbo', 'nhac-kich-2012.jpg'),
(17, 'phep-thuat', 'phÃ©p thuáº­t', 'phimbo', 'phep-thuat.jpg'),
(19, 'phuong-an-b', 'phÆ°Æ¡ng Ã¡n b', 'xemnhieu', 'phuong-an-B.jpg'),
(31, 'quai-thu-vo-hinh', 'quÃ¡i thÃº vÃ´ hÃ¬nh', 'phimbo', 'quai-thu-vo-hinh.jpg'),
(32, 'sat-thu-nikita3', 'sÃ¡t thá»§ nikita 3', 'phimle', 'sat-thu-nikita3.jpeg'),
(35, 'Cáº£nh sÃ¡t giáº¿t ngÆ°á»i 7', 'Cáº£nh sÃ¡t giáº¿t ngÆ°á»i 7', 'phimbo', 'canh-sat-giet-nguoi-7.jpg'),
(36, 'há»™i phÃ¡p sÆ°', 'Há»™i phÃ¡p sÆ°', 'phimle', 'hoi-phap-su.jpg'),
(37, 'Há»«ng Ä‘Ã´ng pháº§n 2', 'há»«ng Ä‘Ã´ng pháº§n 2', 'phimbo', 'hung-dong-phan-2.jpg'),
(38, 'Máº¯t báº¡c', 'máº¯t báº¡c', 'xemnhieu', 'mat-bac.jpg'),
(39, 'NgÆ°á»i dÆ¡i 3', 'ngÆ°á»i dÆ¡i 3', 'phimbo', 'nguoi-doi-3.jpg'),
(40, 'Ã”ng hoang truyá»n hÃ¬nh Poster', 'Ã”ng hoÃ ng truyá»n hÃ¬nh poster', 'phimle', 'onghoangtruyenhinhposte.jpg'),
(41, 'tay sai mÃ¡u láº¡nh', 'Tay sai mÃ¡u láº¡nh', 'phimle', 'tai-sai-mau-lanh.jpg'),
(42, 'Táº¡o hÃ¬nh khuÃ´n máº·t', 'Táº¡o hÃ¬nh khuÃ´n máº·t', 'phimle', 'tao-hinh khuon mat.jpg'),
(43, 'ThiÃªn tháº§n khoe dÃ¡ng ngá»c', 'thiá»n tháº§n khoe dÃ¡ng ngá»c', 'xemnhieu', 'thien-than-khoe-dang-ngoc.jpg'),
(44, 'thiáº¿t quyá»n thá»§', 'Thiáº¿t quyá»n thá»§- Quá»‘c gia: Trung Quá»‘c. Thá»ƒ loáº¡i Kiáº¿m hiá»‡p', 'phimbo', 'thiet-quyen-thu.jpg'),
(45, 'tá»‘c Ä‘á»™ kinh hoÃ ng', 'tá»‘c Ä‘á»™ kinh hoÃ ng', 'phimle', 'toc-do-kinh-hoang.jpg'),
(46, 'tá»­ chiáº¿n liÃªn hÃ nh tinh', 'ÄÃ¢y lÃ  má»™t seriel phim trong bá»™ phim cá»§a Holywwod cÃ³ tÃªn lÃ  : cuá»™c chiáº¿n giá»¯a cÃ¡c vÃ¬ sao.', 'xemnhieu', 'tu-chien-lien-hanh-tinh.jpg'),
(47, 'Tuá»•i má»›i lá»›n', 'NÃ³i vá» nhá»¯ng ngÆ°á»i á»Ÿ Ä‘á»™ tuá»•i má»›i lá»›n á»Ÿ Má»¹', 'phimle', 'tuoi-moi-lon.jpg'),
(48, 'vÃ¹ng Ä‘áº¥t quá»· dá»¯', 'Tiáº¿p ná»‘i pháº§n trÆ°á»›c, pháº§n nÃ y nÃ³i vá» sá»± tráº£ thÃ¹ cá»§a Alice.', 'phimbo', 'vung-dat-quy-du.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `theloai` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`ID`, `theloai`) VALUES
(1, 'phimbo'),
(2, 'phimle'),
(3, 'xemnhieu'),
(5, 'kinhdi');
