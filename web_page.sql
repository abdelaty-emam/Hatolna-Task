-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2019 at 08:52 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_page`
--

DROP TABLE IF EXISTS `web_page`;
CREATE TABLE IF NOT EXISTS `web_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_url` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_page`
--

INSERT INTO `web_page` (`id`, `page_url`, `title`, `img`, `content`) VALUES
(5, 'https://www.amazon.com/Apple-iPhone-Unlocked-Quad-Core-Smartphone/dp/B01N4R20RS/ref=br_asw_pdt-5?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=&pf_rd_r=F6FQ92F1VTYSV3B82ZC8&pf_rd_t=36701&pf_rd_p=18bf28d2-a367-49f5-825a-60757405e725&pf_rd_i=desktops', 'Apple iPhone 7 32GB GSM Unlocked 4G LTE Quad-Core Smartphone w/ 12MP Camera - Black (Renewed)', 'https://images-na.ssl-images-amazon.com/images/I/51YAS9HY2BL._SL65_.jpg', '<p><b>Product works and looks like new. Backed by the 90-day Amazon Renewed Guarantee.</b></p><p>Renewed products work and look like new. These pre-owned products are not Apple certified but have been inspected and tested by Amazon-qualified suppliers. Box and accessories (no headphones included) may be generic. Wireless devices come with the 90-day Amazon Renewed Guarantee. <a href=\"#renewedProgramDescriptionBtf\">Learn more</a></p><li><span class=\"a-list-item\"> Fully Unlocked for both GSM carriers (like AT&T and T-Mobile). </span></li> <li><span class=\"a-list-item\"> 12MP rear Camera, optical image stabilization, Quad-LED true Tone Flash, and live Photos LTE Advanced up to 450 Mbps and 802. 11a/b/G/openings/AC Wi-Fi with MIMO iOS 10 and iCloud. </span></li> <li><span class=\"a-list-item\"> 7MP FaceTime HD camera with Retina Flash splash, water, and dust resistant 4K video recording at 30 fps and slo-mo video recording for 1080P at 120 fps. </span></li> <li><span class=\"a-list-item\"> Apple A10 Fusion chip with embedded M10 motion coprocessor. </span></li> </ul> <!-- Loading EDP related metadata -->'),
(14, 'https://www.amazon.com/Apple-iPhone-Unlocked-Quad-Core-Smartphone/dp/B01N4R20RS', 'Apple iPhone 7 32GB GSM Unlocked 4G LTE Quad-Core Smartphone w/ 12MP Camera - Black (Renewed)', 'https://images-na.ssl-images-amazon.com/images/I/51YAS9HY2BL._SL65_.jpg', '<p><b>Product works and looks like new. Backed by the 90-day Amazon Renewed Guarantee.</b></p><p>Renewed products work and look like new. These pre-owned products are not Apple certified but have been inspected and tested by Amazon-qualified suppliers. Box and accessories (no headphones included) may be generic. Wireless devices come with the 90-day Amazon Renewed Guarantee. <a href=\"#renewedProgramDescriptionBtf\">Learn more</a></p><li><span class=\"a-list-item\"> Fully Unlocked for both GSM carriers (like AT&T and T-Mobile). </span></li> <li><span class=\"a-list-item\"> 12MP rear Camera, optical image stabilization, Quad-LED true Tone Flash, and live Photos LTE Advanced up to 450 Mbps and 802. 11a/b/G/openings/AC Wi-Fi with MIMO iOS 10 and iCloud. </span></li> <li><span class=\"a-list-item\"> 7MP FaceTime HD camera with Retina Flash splash, water, and dust resistant 4K video recording at 30 fps and slo-mo video recording for 1080P at 120 fps. </span></li> <li><span class=\"a-list-item\"> Apple A10 Fusion chip with embedded M10 motion coprocessor. </span></li> </ul> <!-- Loading EDP related metadata -->');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
