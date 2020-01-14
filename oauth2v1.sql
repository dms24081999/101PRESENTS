-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 02:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oauth2v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_products`
--

CREATE TABLE `marketplace_products` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `child_cat_id` int(11) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `features` varchar(100) NOT NULL,
  `label` varchar(30) NOT NULL,
  `SUK` varchar(20) NOT NULL,
  `stock` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `measurement_unit_id` varchar(11) NOT NULL,
  `gst` varchar(10) NOT NULL,
  `return_policy` varchar(500) NOT NULL,
  `variant_specification` varchar(20) NOT NULL,
  `variant` varchar(50) NOT NULL,
  `warehouse_location` varchar(50) NOT NULL,
  `warehouse_zip` varchar(50) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `delivery_days` varchar(10) NOT NULL,
  `delivery_distance` varchar(20) NOT NULL,
  `cod` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `discount` varchar(10) NOT NULL,
  `commission` varchar(11) NOT NULL,
  `bulk` tinyint(1) NOT NULL DEFAULT 0,
  `rental` tinyint(1) NOT NULL DEFAULT 0,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `status` enum('0','1','2','') NOT NULL DEFAULT '1',
  `tags` varchar(50) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_products`
--

INSERT INTO `marketplace_products` (`id`, `vendor_id`, `cat_id`, `sub_cat_id`, `child_cat_id`, `product_title`, `brand_name`, `description`, `features`, `label`, `SUK`, `stock`, `price`, `measurement_unit_id`, `gst`, `return_policy`, `variant_specification`, `variant`, `warehouse_location`, `warehouse_zip`, `shipping_cost`, `delivery_days`, `delivery_distance`, `cod`, `created_date`, `discount`, `commission`, `bulk`, `rental`, `latitude`, `longitude`, `status`, `tags`, `verified`) VALUES
(16, 19, 1, 3, 0, 'mens shirt', 'levi', '<ul><li>good one</li></ul>', 'hhh,hh', '3', 'kj454', '89', 450, '77', '18', '<ul><li>only if its torn</li></ul>', 'color:size', 'white,blue,greeen:xl,m,s,big', 'ware house addr', '127040', 125, '5', '12', 0, '2019-11-19 14:31:14', '20', '5', 0, 0, '28.788808859210164', '75.92406249999999', '1', '', 0),
(17, 19, 2, 2, 2, 'Mi 4.0 Speakers', 'Xiaomi', 'Mi Speakers use top notch manufacturing techniques to give best sound experience to the customers.', 'Home Theatre sound experience, Crystal clear sounnd ,DTS', '2', 'MI55489', '999', 1200, '67', '0', 'The product can be return under these circumstances only<br><ul><li>The product is not at all working</li></ul>', 'color:size', 'white,blue,pink,red:xl,m,s,big', '243, 244 1st Floor,Gurbaksh Plaza, Jagat Farm, Gre', '201308', 50, '5', '250', 0, '2019-11-19 14:31:23', '10', '2', 0, 0, '28.486432325472034', '77.51992774079565', '1', '', 0),
(41, 19, 4, 8, 0, 'cushions', 'sleepwell', '<ol><li>they are nothing but cool</li></ol>', 'soft', '1', '845D78F', '49', 500, '8', '18', 'no return policy', 'color:size', 'red,green.blue:small,large,xtralarge', 'Near araku, visakapatnam, AP', '531151', 0, '9', '8', 0, '2019-11-19 14:31:37', '30', '5', 0, 0, '18.331388459663785', '82.86746771527442', '1', '', 0),
(42, 0, 2, 1, 2, 'Oppo mobile cases', 'hizen', '<ul><li>This is a great product.&nbsp;</li><li>a must have product for oppo mobiles.</li><li>IT gives your phone a new look.</li></ul>', 'flexible,variety of designs,affordable', '1', 'OP548', '48', 250, '0', '0', '<ul><li>Only if its broken</li></ul>', 'color', 'red,blue,black:', 'Banglore, Karnataka', '562103', 0, '8', '500', 0, '2019-11-19 12:16:22', '5', '1', 0, 0, '13.417483705618652', '77.69537406697873', '1', '', 1),
(43, 19, 3, 5, 0, 'bonsai plant', 'planto', '<ol><li>Vibrant bonsai plant&nbsp;</li></ol>', 'simplicity', '3', 'POI498', '45', 250, '6', '18', 'This product has no return policy', 'NA:size', ':small,large,xtralarge', 'khalgreg, bhutan', '754007', 99, '8', '200', 0, '2019-11-19 14:31:55', '25', '2', 0, 0, '20.344444325160797', '85.65559806809074', '1', '', 0),
(44, 2, 3, 5, 0, 'small plant ', 'plantis', 'just what you expect from a plant', 'cool', '1', '78FHJ7', '50', 600, '6', '18', '', 'NA:size', ':small', 'warehouse addr', '754007', 0, '5', '100', 0, '2019-11-15 16:05:00', '25', '2', 0, 0, '20.354744977625412', '85.67757072434074', '1', '', 0),
(45, 0, 1, 4, 0, 'shirts', 'casy', 'Superfit shirt', 'elegant designs', '', '78FHJ7688', '85', 258, '0', '16', '', 'color', 'white,blue:', '', '751015', 80, '5', '200', 0, '2019-11-15 14:10:26', '5', '', 0, 0, '20.278600513508096', '85.81489982590324', '1', '', 1),
(46, 0, 3, 5, 0, 'sample', 'brand34', 'good ggggod', 'quality,kk,kkk', '', 's444', '500', 850, '15', '0', 'no return', 'color', 'rgb(0, 0, 0)/rgb(222, 255, 194):', 'Master Canteen, Unit-2, Ashok Nagar, Bhubaneswar, ', '751001', 100, '5', '100', 1, '2019-11-15 14:53:23', '10', '3', 0, 0, '20.268455824834792', '85.84017696365959', '1', '', 0),
(47, 0, 1, 3, 0, 'Test product', 'Hello rand', 'This is test desc fr the productmThis is test desc fr the productThis is test desc fr the productThis is test desc fr the productThis is test desc fr the productThis is test desc fr the product', 'test test 1 test 2', '1', 'abcd1234', '18', 200, '4', '0', 'eqwewqeqweq', 'color', 'rgb(77, 0, 191)/rgb(174, 255, 242)/rgb(236, 255, 6', 'Unit-2, Ashok Nagar, MG marg, near, Master Canteen', '751001', 0, '6', '10', 0, '2019-11-19 13:53:04', '10', '10', 0, 0, '20.268324986222922', '85.83997311577446', '1', '', 0),
(48, 5, 1, 4, 0, 'product1', 'brand', 'Products descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts descProducts desc', 'Products desc , Products desc', '2', 'snb99', '19', 200, '17', '0', 'Products descProducts descProducts descProducts desc', 'color', 'rgb(90, 111, 0)/rgb(255, 135, 135)/rgb(0, 0, 0):', 'Master Canteen Bus Stop, V.S.S. Nagar, Kharabela N', '751001', 200, '2', '2', 1, '2019-11-19 13:53:04', '', '', 0, 0, '20.268828211049264', '85.84091188892967', '1', '', 0),
(49, 4, 1, 3, 0, 'sample', 'vrande', 'product desc', 'key features', '1', 'product345', '556', 90, '4', '0', '30 days&nbsp;', 'color:size', 'rgb(123, 85, 255)/rgb(0, 101, 41):small,large,medi', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '7', '8', 1, '2019-11-19 13:43:59', '', '', 0, 0, '20.268455824834792', '85.84099235520011', '1', '', 0),
(50, 19, 3, 5, 0, 'hi orduct', 'rfdhndk', 'wwqe', 'sASas', '', 'awqew', '20', 200, '3', '0', 'saSS', 'color:size', 'rgb(95, 128, 255)/rgb(131, 180, 0):L, S, Ml', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '200', '200', 1, '2019-11-19 14:31:05', '', '', 0, 0, '20.268455824834792', '85.84099235520011', '1', '', 0),
(51, 17, 2, 1, 0, 'Cotton Saree', 'Brand anme', '<ol><li>sdsadsadasdsadsadsadas</li><li>dfdf</li><li>ghfhfghfgh</li></ol><br>', 'Cotton, hand wash, dry clean, fsf', '1', 'Abdc123456', '197', 200, '63', '0', '<ol><li>15 day return policy</li><li>item shoudl nobe damaged</li><li><br></li></ol>', 'color', 'rgb(0, 6, 190)/rgb(60, 255, 35)/rgb(210, 196, 0):', 'Unnamed Road, Haurburi, West Bengal 721455, India', '721455', 40, '5', '20', 0, '2019-11-19 12:22:47', '5', '0', 0, 0, '21.698724684189692', '87.68689862855251', '1', '', 0),
(52, 18, 1, 4, 0, 'New poduct', 'Brand name', 'fgdfsgdfg<br><ol><li>hfgh</li><li>khkh</li><li><br></li></ol>', 'Key word1, keyword 2', '2', 'adcs123', '199', 100, '11', '0', '<ol><li>uytutyu</li><li>hkhkhjk</li><li>hjgjhgjhgj</li><li>fgdgd</li><li><br></li></ol>', 'color:size', 'rgb(0, 29, 240)/rgb(102, 220, 0)/rgb(160, 23, 0)/r', 'Odisha 768106, India', '768106', 50, '7', '20', 1, '2019-11-19 13:53:04', '5', '', 0, 0, '21.344204398994826', '84.44710197434074', '1', '', 0),
(53, 19, 1, 4, 0, 'hgj', 'jbnbnbm', 'kjlkjjlk', 'tes,test', '1', 'hgf567', '70', 600, '5', '0', 'vhgjh', 'color:size', 'rgb(143, 124, 255)/rgb(0, 230, 73):l, m,s', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '1', '6', 0, '2019-11-22 12:00:26', '', '', 0, 0, '20.268455824834792', '85.84099235520011', '1', 'tag1,tag2', 0),
(54, 19, 3, 6, 0, 'test product', 'test product', 'test producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest producttest product', 'keyf1', '2', 'asdf1234', '12', 111, '17', '0', 'sdsadsad', 'color:size', 'rgb(143, 124, 255)/rgb(0, 230, 73):l, m,s', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '66', '6', 1, '2019-11-22 11:58:33', '10', '', 0, 0, '20.268455824834792', '85.84099235520011', '1', 'tag1', 0),
(55, 0, 1, 0, 0, 'test', 'tet', 'sdsa', 'asdas,rtrete', '1', 'asd', '11', 1111, '17', '0', 'das', 'NA', 'NA', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '2', '2', 1, '2019-11-26 21:39:27', '2', '', 1, 0, '20.268455824834792', '85.84099235520011', '1', 'sadas,hfhfhgfhgf', 0),
(58, 19, 3, 5, 0, 'asd', 'sad', 'fre', 'sdf', '1', 'asfadfas', '2000', 2500, '11', '0', 'fdsdfg', 'color:size', 'rgb(84, 119, 255):sdgdsfg', 'Master Canteen Chowk, Kharabela Nagar, Bhubaneswar', '751001', 0, '4', '44', 1, '2019-11-26 22:51:13', '10', '', 1, 1, '20.268455824834792', '85.84099235520011', '1', 'dsfgdsfsg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `access_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`access_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('13d30610ddff51d415711230f0e2d691fffb76dc', 'testclient', 'dms', '2019-12-13 11:15:08', 'name'),
('14cd935e52a6a0cd9be50a5bbf5a7cd6d34d61e9', 'testclient', 'dms', '2019-12-13 11:28:30', 'name'),
('17b70b7e9a059e90ebe17217168b13a2953b69b1', 'testclient', NULL, '2019-12-13 11:24:21', 'name'),
('1c776d442216c5b677e3d17692876100cbe26d42', 'testclient', 'dms', '2019-12-13 08:54:16', 'name basic'),
('1ea84926933a549f9e3c2e90d8562ade894f7680', 'testclient', 'dms', '2019-12-13 02:02:30', 'name basic'),
('275a0e95786aced9e9f9e68df2427429a6184cce', 'testclient', 'dms', '2019-12-13 09:25:59', 'name'),
('283cfa41a54b23645dc4b44130c8ae2e684b355c', 'testclient', 'dms', '2019-12-13 09:08:53', 'name basic'),
('2f0d92cfeb49fbacaec93ca766ac66fb823f5102', 'testclient', 'dms', '2019-12-13 11:12:11', 'name'),
('3bac6de7dfb41116da7dcef6249306654693a441', 'testclient', NULL, '2019-12-13 11:25:24', 'name'),
('45fc1ec05d97c8ce855ded01848e43bc56e24aaf', 'testclient', NULL, '2019-12-13 11:30:07', 'name'),
('4e8c1491bcfe7b7704e3b745e9f6120cfe16f956', 'testclient', 'dms', '2019-12-13 08:54:08', 'name basic'),
('6939d32d036ebafd3e1e727c94f8fb8f19fe648d', 'testclient', 'dms', '2019-12-13 09:22:19', 'name'),
('9ac0548284ecdeacb57c2c2d5d51387dbb6a5478', 'testclient', 'dms', '2019-12-13 11:28:34', 'name'),
('9f3ddd38639e1acaf6d2024168a61850f8600d85', 'testclient', 'dms', '2019-12-13 09:17:36', 'name'),
('b0150c8ed53253a2a182901129e3b0665ec2dc20', 'testclient', 'dms', '2019-12-13 11:16:01', 'name'),
('cf7ea4bae5caa99c5361a0d2ef67e5689ec48d71', 'testclient', 'dms', '2019-12-13 11:18:18', 'name'),
('d67b689d94f83a4cc66c4ade0d213bacaf44b9e3', 'testclient', 'dms', '2019-12-13 11:12:54', 'name'),
('d7d0ff07d7a643f7a074202c70077f5b057e8111', 'testclient', 'dms', '2019-12-13 09:08:58', 'name basic'),
('d9c0388e3173b7daa359cd7a73f481c491fddeac', 'testclient', NULL, '2019-12-13 11:22:50', 'name'),
('db7d77f90f44f2d774409d858e3f2a9512e45f8a', 'testclient', 'dms', '2019-12-13 08:53:23', 'name basic'),
('e46f23abdb1caf63813e660a79c243c42cfed7f2', 'testclient', NULL, '2019-12-13 11:27:37', 'name'),
('e7148bc8fa3975ecbd3a9f32cec61e600550acc4', 'testclient', 'dms', '2019-12-13 02:02:52', 'name basic'),
('efb68ae494726bcb0a3cda10d67b16f54f15a1f4', 'testclient', 'dms', '2019-12-13 11:17:42', 'name'),
('f4f9c118a0e561fc08fd2e372f0dfdce28514951', 'testclient', 'dms', '2019-12-13 11:12:49', 'name'),
('f5b099f1e36e9f7229712b29f3262d2ac1e4041c', 'testclient', 'dms', '2019-12-13 09:08:51', 'name basic');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_authorization_codes`
--

CREATE TABLE `oauth_authorization_codes` (
  `authorization_code` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL,
  `id_token` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `client_id` varchar(80) NOT NULL,
  `client_secret` varchar(80) DEFAULT NULL,
  `redirect_uri` varchar(2000) DEFAULT NULL,
  `grant_types` varchar(80) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL,
  `user_id` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_types`, `scope`, `user_id`) VALUES
('testclient', 'testpass', 'http://localhost/login/o.php', NULL, 'name', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_jwt`
--

CREATE TABLE `oauth_jwt` (
  `client_id` varchar(80) NOT NULL,
  `subject` varchar(80) DEFAULT NULL,
  `public_key` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `refresh_token` varchar(40) NOT NULL,
  `client_id` varchar(80) NOT NULL,
  `user_id` varchar(80) DEFAULT NULL,
  `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`refresh_token`, `client_id`, `user_id`, `expires`, `scope`) VALUES
('05f254be4057217e146e310bf45222ec6aaa75fd', 'testclient', 'dms', '2019-12-26 08:53:23', 'name basic'),
('157f884f863abdb719b55f636038bf582d025370', 'testclient', 'dms', '2019-12-26 11:28:34', 'name'),
('1a718ecb5e0a20f93f3ff772c6cfd8106371c083', 'testclient', 'dms', '2019-12-26 02:02:52', 'name basic'),
('3d48a4a9cbc1609e5e0efba1434c7fc53a798ccd', 'testclient', 'dms', '2019-12-26 09:17:36', 'name'),
('47407e317a9623cc86d6c0b4610550b333ef6a84', 'testclient', 'dms', '2019-12-26 11:12:54', 'name'),
('4bd5418ee95e0a82facfdf493521dcf624ce6bbd', 'testclient', 'dms', '2019-12-26 11:16:01', 'name'),
('5b7a139950d1463ae3ea670e46fb97440c2caaca', 'testclient', 'dms', '2019-12-26 02:02:30', 'name basic'),
('6dab2ad94cb0d400f28fe707ed3c62ac5a944d33', 'testclient', 'dms', '2019-12-26 09:08:51', 'name basic'),
('7b15bc502e1d77145fcfe4dceddc64b75e8402c0', 'testclient', 'dms', '2019-12-26 09:25:59', 'name'),
('831911c62a09b72aefa12caef5788c986c7c5996', 'testclient', 'dms', '2019-12-26 08:54:16', 'name basic'),
('8671309835074239aae353472a3b664530fdba0a', 'testclient', 'dms', '2019-12-26 11:15:08', 'name'),
('a2bfcb99fcfc2acb57eae35d57d2388c5a8dd4fb', 'testclient', 'dms', '2019-12-26 11:28:30', 'name'),
('abf45370d02745887c03f92069b58415e1bb6e2e', 'testclient', 'dms', '2019-12-26 11:12:11', 'name'),
('bbe04487acbcb78d20b5ca184ed85e0cf58f5a8d', 'testclient', 'dms', '2019-12-26 08:54:08', 'name basic'),
('c0beb4438f1fc7696efd42883aa21a9d08634670', 'testclient', 'dms', '2019-12-26 11:12:49', 'name'),
('e03ca3e629eb83aaaac3cffb63d7965eb5dfbfeb', 'testclient', 'dms', '2019-12-26 09:22:19', 'name'),
('e7728312db11aa0bed41307a1120a3aec17e412d', 'testclient', 'dms', '2019-12-26 09:08:53', 'name basic'),
('f6de52c8eb75ee9dc391a0c757a921c5ecd85e39', 'testclient', 'dms', '2019-12-26 11:17:42', 'name'),
('f71e349bad4133915090bd00286098d7d9efff33', 'testclient', 'dms', '2019-12-26 09:08:58', 'name basic'),
('fe0cf5aca1819f855937dfe85b8821e544fc3aa0', 'testclient', 'dms', '2019-12-26 11:18:18', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_scopes`
--

CREATE TABLE `oauth_scopes` (
  `scope` varchar(80) NOT NULL,
  `is_default` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_scopes`
--

INSERT INTO `oauth_scopes` (`scope`, `is_default`) VALUES
('basic', 1),
('name', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_users`
--

CREATE TABLE `oauth_users` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) DEFAULT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `scope` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_users`
--

INSERT INTO `oauth_users` (`username`, `password`, `first_name`, `last_name`, `email`, `email_verified`, `scope`) VALUES
('dms', '71a6facfbeed96f2081216afb7d8fa885264c9ef', 'Dominic', 'Silveira', 'dominicsilveira289@gmail.com', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_user_permissions`
--

CREATE TABLE `oauth_user_permissions` (
  `user_id` varchar(50) DEFAULT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `scope` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth_user_permissions`
--

INSERT INTO `oauth_user_permissions` (`user_id`, `client_id`, `scope`, `id`) VALUES
('dms', 'testclient', 'name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(50) NOT NULL,
  `expired_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `expired_timestamp`, `data`) VALUES
('452afoq83k4cdc32vo8oqrlhmt', '2020-01-11 13:17:37', 'dms'),
('833codls8d1qflf0r63c4cqjhl', '2020-01-11 13:15:23', 'dms'),
('8tss0e5981tiej5llqahjfgg64', '2020-01-11 13:03:30', 'dms'),
('ijeutotf7fcj9h01p8cil7nj68', '2020-01-11 13:05:50', 'dms'),
('kjvnbk1d9984pvmd8ed1o173po', '2020-01-12 01:08:49', 'dms'),
('oh9dhrcmikvf60tnufg7pm0f8n', '2020-01-12 02:02:04', 'dms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`access_token`);

--
-- Indexes for table `oauth_authorization_codes`
--
ALTER TABLE `oauth_authorization_codes`
  ADD PRIMARY KEY (`authorization_code`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`refresh_token`);

--
-- Indexes for table `oauth_scopes`
--
ALTER TABLE `oauth_scopes`
  ADD PRIMARY KEY (`scope`);

--
-- Indexes for table `oauth_users`
--
ALTER TABLE `oauth_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `oauth_user_permissions`
--
ALTER TABLE `oauth_user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
