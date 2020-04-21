-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 11:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_php_zin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'View All', 1, 1),
(2, 'Coats & Jackets', 2, 1),
(3, 'Hoodies', 3, 1),
(6, 'Jeans', 4, 1),
(7, 'Jumpers & Cardigans', 5, 1),
(8, 'Multipacks', 6, 1),
(9, 'Polo Shirts', 7, 1),
(10, 'Shirts', 8, 1),
(11, 'Shorts', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `excerpt`, `content`, `author`, `image`, `type`, `created_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-12 11:05:04'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2017-05-11 22:00:00'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:05'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-05-11 22:00:00'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', '				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ea distinctio unde, tenetur explicabo dolorem ab aut optio, amet nihil fugit praesentium. Quia, numquam ut deserunt nemo, quae dicta dolores!', 'TopicAuthor', 'images/2.png', 'NewsPublication', '2016-03-11 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL DEFAULT '1',
  `brand` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recomended` int(11) DEFAULT '0',
  `visibility` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `product_id`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recomended`, `visibility`) VALUES
(1, 'Black Moleskin Jacket', 2, 'S2728047_C101', 35, 1, '', '1569852416.1447408-S2728047_C101_Alt1.jpg', 'Battle the cold with this moleskin jacket crafted from a cotton blend for warmth and durability. In a black shade it features four front pockets and zip fastening. Outer: 95% Cotton, 5% Polyester. Lining And Wadding: 100% Polyester. Care: Dry Clean.', 1, 0, 1),
(2, 'Morley Brown Waxed Longline Parka Jacket', 2, 'S2760251_C177', 65, 1, 'Morley', '1574687339.6286528-S2760251_C177_Alt1.jpg', 'Add heritage style to your outerwear collection with this brown waxed parka jacket by Morley. Crafted in longline style with an adjustable hood and contrast grey lining, it features a buckle fastening to the neck and four front pockets. Throw on with a jeans and jumper for a casual cold-weather look. With excellence in performance and precision since 1795, the Morley brand has established expert quality in clothing. With the famous flying wheel logo as shorthand for the Morley identity, fill your wardrobe with their timeless designs and styles, which are created for real men. Shell: 66% Cotton, 34% Polyester. Lining: 65% Polyester, 35% Cotton.\r\nCare: Machine Washable.', 0, 0, 1),
(3, 'US Athletic Scuba Hoodie', 3, 'S2761801_C228', 18, 1, 'US Athletic', '1576845971.9836304-S2761801_C228_Alt1.jpg', 'Add a versatile extra layer to your casual outfits with this scuba hoodie by US Athletic. Crafted from stretchy fabric in light grey marl, the sporty design comes with a kangaroo front pocket and an adjustable drawcord. It\'s finished with US Athletic branding printed to the chest. 53% Viscose, 43% Polyester, 4% Elastane. Care: Machine Washable.', 0, 0, 1),
(4, 'Zip Up Hoodie', 3, 'S2627237_C270', 12, 1, NULL, '1551968903.0215993-S2627237_C270_Alt1.jpg', 'Zip-up hoodie in navy with front pockets. Available in Big & Tall sizes. 59% Polyester, 26% Cotton, 15% Viscose. Machine Washable.', 0, 0, 1),
(5, 'Lincoln Twill Jeans', 6, 'S2732058_C270', 18, 1, 'Lincoln', '1565596595.684424-S2732058_C270_Alt1.jpg', 'Lincoln twill jeans with extra stretch properties in navy. 74% Cotton, 23% Polyester, 3% Elastane. Pocketing: 100% Cotton. Care: Machine Washable.', 0, 0, 1),
(6, 'Lincoln Belted Jeans', 6, 'S2690530_C270', 20, 1, 'Lincoln', '1530777631.9845939-S2690530_C270_Main.jpg', 'Featuring a straight leg silhouette, these Lincoln navy jeans are perfect for pairing with Lincoln shorts or jersey tops for a casual daytime look. The jeans are crafted from a stretchy cotton blend for improved comfort. A wardrobe staple, the design is complete with a buckled belt. 99% Cotton, 1% Elastane. Care: Machine Washable.', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id_uindex` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
