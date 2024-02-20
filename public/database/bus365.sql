-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:38 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus365`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is test titel edited', 'Choose Your Destinations And Dates To Reserve A Ticket ', '<p>abce abce abcee dskljfasldf alskdjf lasdfjlasjdfl;asdjf&nbsp;</p>\r\n\r\n<p>akdlfjaskdfj &#39;adkfja;lsk fjl;kasjdf l;<em><u>kasjfl;kasjfl;kasdjf;laksdjf;lsdakjf<input checked=\"checked\" name=\"thest\" type=\"checkbox\" />sdf sdf&nbsp;</u><s> sdfsdf sdf&nbsp;</s></em></p>\r\n', '2021-12-19 12:45:25', '2021-12-19 13:00:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accounthead`
--

CREATE TABLE `accounthead` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `parentid` varchar(100) DEFAULT NULL,
  `chield` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounthead`
--

INSERT INTO `accounthead` (`id`, `name`, `parentid`, `chield`) VALUES
(1, 'assets', 'parent', 1),
(2, 'expence', 'parent', 1),
(3, 'income', 'parent', 0),
(4, 'liability', 'parent', 1),
(5, 'current Assect', '1', 1),
(6, 'Non current Assect', '1', 0),
(7, 'account', '4', 1),
(8, 'account recieve', '5', 1),
(9, 'add new', '8', 0),
(10, 'test data', '7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(11) UNSIGNED NOT NULL,
  `image_path` text NOT NULL,
  `pagename` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`id`, `image_path`, `pagename`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/add/1639829896_f4c53a1a6b9fdb082290.jpg', 'checkout', 'www.test.com', '2021-12-18 18:18:16', '2021-12-18 18:45:30', NULL),
(3, 'image/add/1639830237_f2593e69f043cbbeca47.png', 'ticket', 'www.test.com.xyz', '2021-12-18 18:23:57', '2021-12-18 18:45:39', NULL),
(4, 'image/add/1639831556_d0b7486922b54eb4ce2a.jpg', 'customer', 'www.test.com fdfd', '2021-12-18 18:45:56', '2021-12-18 18:45:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agentcommissions`
--

CREATE TABLE `agentcommissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `agent_id` int(11) UNSIGNED NOT NULL,
  `booking_id` tinytext NOT NULL,
  `subtrip_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `grandtotal` tinytext NOT NULL,
  `commission` tinytext NOT NULL,
  `rate` tinytext NOT NULL,
  `detail` tinytext NOT NULL,
  `date` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) UNSIGNED NOT NULL,
  `location_id` int(11) UNSIGNED NOT NULL,
  `country_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `blood` tinytext DEFAULT NULL,
  `id_number` text NOT NULL,
  `id_type` tinytext NOT NULL,
  `nid_picture` tinytext DEFAULT NULL,
  `commission` tinytext NOT NULL,
  `profile_picture` tinytext DEFAULT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext DEFAULT NULL,
  `zip` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `location_id`, `country_id`, `user_id`, `first_name`, `last_name`, `blood`, `id_number`, `id_type`, `nid_picture`, `commission`, `profile_picture`, `address`, `city`, `zip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 37, 'test', 'agent', 'A', 'dfdfdf232323324324', 'Passport', 'image/agent/1638762176_de6c2a522d0d2ed9681c.jpg', '2.5', 'image/agent/1638762176_adf3b1398012b1dcc11d.jpg', 'asdf asdf asdf asdf sdfsdf', 'Dhaka', '5400', '2021-12-06 09:42:56', '2021-12-06 09:42:56', NULL),
(2, 18, 1, 38, 'Agent', 'Khagra chori', 'A', 'dfd323eerer3', 'Passport', 'image/agent/1638764750_7ee9dcb95bc224fab66f.jpg', '2', '', 'asdf asdf asdf asdf sdfsdf', 'Dhaka', '5400', '2021-12-06 10:25:50', '2021-12-06 10:25:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `serial` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `image`, `serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Sed beatae rerum voluptatem nam temporibus et similique.', '<p>Reprehenderit soluta animi optio totam aperiam non vero in. Incidunt minima praesentium quia magni. Qui dolorem illum recusandae at. Fuga quibusdam sit debitis repudiandae ab culpa. Sunt sint vel aliquam odio ut. Et occaecati unde ducimus amet non laudantium. Esse dolorum et necessitatibus repellat in est veritatis. Natus sunt rem dignissimos at quod fugit sunt. Ut sint molestiae aliquam aut. Eum est facilis non accusamus possimus nihil et quia. Rerum et eligendi animi voluptates magnam iusto sit fuga. Ducimus vel nisi omnis possimus dolorem nam. Et ratione consequatur voluptas dignissimos et velit repellat. Ab non numquam est aliquid. Rerum incidunt quibusdam error atque dicta provident. Veritatis vero at id iusto qui qui. Autem dolor hic natus laboriosam. Molestiae adipisci quas minus dolore qui expedita.</p>\r\n', 'image/blog/1636361001_4d4d5eb628c1e9538de3.jpg', 4, '2021-09-04 16:34:57', '2021-11-08 02:43:21', NULL),
(2, 3, 'Esse ut voluptas voluptatem sapiente qui qui.', '<p>Quibusdam consequatur animi modi totam qui. Explicabo fuga reiciendis non expedita doloribus et dolore. Maiores est in delectus sit illo voluptatum. Amet consequatur earum aut quis neque eveniet consequatur. Et quaerat explicabo amet tenetur illo deleniti aut. Vero autem aut qui et nemo. Eius est reiciendis id. Eos inventore ut facilis sit perspiciatis quam. Ut similique commodi quo fugit. Assumenda rerum vitae voluptatem voluptatem qui quia sed fugiat. Nihil a suscipit corrupti qui accusamus pariatur porro eius. Ut omnis est sit incidunt mollitia. Ex corporis temporibus consequuntur temporibus in. Mollitia quam ut vel enim quibusdam. Odio quo tenetur unde amet est perferendis. Omnis atque sunt delectus. Architecto omnis cumque molestias. Consequatur tenetur sit ullam natus libero officiis exercitationem non.</p>\r\n', 'image/blog/1636360989_bdfaf7c503e1f851ac5b.jpg', 8, '2021-09-04 16:34:57', '2021-11-08 02:43:09', NULL),
(3, 3, 'Sint repudiandae mollitia molestiae corporis voluptatem veniam aut.', '<p>In neque provident vel fugit minus. Repellendus totam aliquid consequuntur qui. Officia quo reiciendis quas corporis enim esse. In et aut cumque porro eos. Exercitationem molestiae dolorem excepturi omnis eligendi nihil. Eum qui animi itaque. Mollitia nobis cum quod incidunt qui. Quo nihil ad cum atque tempore dolorem eligendi. Officiis voluptates explicabo est. Voluptas ut omnis corporis. Vel aliquid vitae soluta minima dolores debitis. Reiciendis enim non laboriosam sapiente. Placeat fugit est eaque voluptas magni eius veniam. Qui blanditiis provident repellendus veniam. Aut velit omnis sit perspiciatis.</p>\r\n', 'image/blog/1636360978_16d52b3656560ce6d5cd.jpg', 3, '2021-09-04 16:34:57', '2021-11-08 02:42:58', NULL),
(4, 3, 'Eveniet voluptatibus et inventore quos recusandae vero enim.', '<p>Et quam hic voluptatem labore dolorem. Odit quod sit quam in exercitationem voluptate veritatis. Et eum molestiae consequatur sit laudantium culpa alias. Minima ipsum inventore rem non sint hic. Voluptas ea non quia nesciunt tenetur. Voluptatem culpa blanditiis neque. Quia ratione ab qui quis natus cupiditate quos. Maiores reprehenderit autem modi quo tempora voluptatem explicabo. Et commodi autem a. Quod est eos nihil sequi dolorem. Temporibus fugiat quo voluptas dolore incidunt quo culpa. Non aliquam quia aliquam quia est laudantium eius. Corrupti natus assumenda dignissimos a. Sit est voluptatem iste voluptatum quisquam aliquid omnis. Et architecto a et pariatur. Assumenda quaerat ullam mollitia qui id. Sit ipsam rerum quos.</p>\r\n', 'image/blog/1636360959_ddfde97a0c35677320fa.jpg', 9, '2021-09-04 16:34:57', '2021-11-08 02:42:39', NULL),
(5, 3, 'Harum sapiente officiis aspernatur facere quisquam.', '<p>Id velit ut voluptates voluptatem sequi. Eveniet labore blanditiis consequatur at beatae sit ea. Incidunt sit alias ipsa perspiciatis. Quisquam aut ipsum est nihil harum. Quia inventore doloremque dolores suscipit perspiciatis nulla natus. Facere necessitatibus aut iure id voluptatem accusamus labore. Natus et ut ut totam qui qui quo. Consequatur tempore iure recusandae inventore. Totam iste eaque omnis consequatur et impedit. Non et enim illum. Id minus et sint consectetur cupiditate. Expedita quis eos earum architecto quia libero esse. Tempore non est dolorum in velit. Velit consequatur et quos consequatur quia rerum. Distinctio eveniet dolores magni. Repellendus dolor consequuntur aut numquam exercitationem. Deserunt est sapiente iste enim. Inventore consequatur est sunt ratione laboriosam et.</p>\r\n', 'image/blog/1636360944_d4aada98b3ba10279998.jpg', 3, '2021-09-04 16:34:57', '2021-11-08 02:42:24', NULL),
(6, 3, 'Quidem porro voluptas odit consequatur velit dolorem.', '<p>Vel qui error velit maxime. Porro ut possimus praesentium non atque. Voluptatum optio voluptatum sint nam. Quam consequatur placeat nulla ullam saepe sit sit. Tempora porro quisquam laudantium. Culpa unde impedit aut tenetur ab. Quisquam adipisci quod vel voluptatem. Rerum error excepturi numquam. Eum quod ea sapiente eum quod. Labore molestiae aut velit consectetur qui nisi sint. Eaque voluptatem non eum ut reiciendis sequi. Eaque aut corporis incidunt nisi est beatae. Tempora aut sunt reprehenderit cumque quia voluptas exercitationem. Quibusdam rerum rerum sunt non dolores ea. Fugit quia vel voluptas illum deleniti et ut. Ratione qui eligendi et omnis ab explicabo assumenda.</p>\r\n', 'image/blog/1636360933_86667f71267fa21f69e4.jpg', 5, '2021-09-04 16:34:57', '2021-11-08 02:42:13', NULL),
(7, 8, 'Odit voluptatem fuga cumque temporibus earum laudantium inventore.', 'Qui rem sunt ut saepe ut architecto ut dolor. Blanditiis qui ipsam vel quisquam.\n\nFugiat ab consequatur dolorem. Velit quia itaque amet maiores ea sed omnis. Maiores velit expedita molestias expedita porro nihil est eos. Autem illum maiores neque voluptas saepe ut rerum assumenda.\n\nQui doloribus tempora corrupti et. Inventore veniam vel voluptates velit. Esse dolorem totam ea ut ab sequi.\n\nNemo architecto rem maiores provident tenetur nesciunt. Sit commodi quis dicta et architecto natus. Aut quas culpa incidunt itaque sit quas. Minima voluptatem cupiditate similique maxime.\n\nSequi est sit et et consequuntur molestiae voluptas. Repellat quia blanditiis corrupti libero assumenda eaque quia nisi. Accusamus consequatur velit quo quaerat non dolorem aut eligendi. Porro temporibus ut et vitae ab corrupti rerum et.', 'https://via.placeholder.com/640x420.png/00ffdd?text=1+et', 9, '2021-09-04 16:34:57', '2021-11-07 03:57:52', '2021-11-07 03:57:52'),
(8, 3, 'Dolores molestiae maiores aspernatur nihil dicta optio nihil.', '<p>Libero ea molestias ut esse voluptate. Assumenda rerum libero unde natus. Possimus accusantium et dolorem voluptatem et. Eos corrupti culpa ullam voluptatum doloribus sit dicta. Consectetur officiis adipisci odio. Laborum ea dolores numquam eius. Itaque tempore pariatur tempora praesentium. Omnis natus placeat et blanditiis eveniet. Quae quaerat atque consectetur consectetur quo. Provident voluptatum dolores veritatis voluptates aut. Perferendis alias explicabo eos. Sint voluptatibus deserunt quis sunt et corrupti. Pariatur cum neque a voluptas dolores maxime aut neque. Sit corrupti voluptatem et doloribus hic similique velit. Sit et omnis quae inventore earum. Magni omnis ea eum aut. Asperiores impedit ipsa incidunt veritatis ipsum unde consequatur dolores. Fuga ex iusto unde sequi. Quidem accusantium ipsa autem modi vel vero.</p>\r\n', 'image/blog/1636360920_c8c461510797856be8ff.jpg', 9, '2021-09-04 16:34:57', '2021-11-08 02:42:00', NULL),
(9, 3, 'Consequuntur quaerat enim qui reiciendis aliquam.', '<p>Quae iure et enim voluptatem. Tenetur voluptatem possimus quam eos. Iusto ut consequatur praesentium asperiores dolor quo aut. Vero molestias incidunt molestiae dolorum. Culpa necessitatibus sed velit ea voluptatibus sunt eligendi. Alias laudantium ut est et id officiis. Ea voluptas officia numquam. Culpa ab ut eveniet recusandae natus libero. Repudiandae ad blanditiis laborum officiis. Temporibus quo velit qui consequuntur. Vel exercitationem ut consequuntur provident consequatur. Molestiae nihil est ea qui ut iure. Voluptatibus eum qui amet suscipit molestiae et molestiae. Labore similique harum a nemo praesentium atque. Debitis nam aut aut sapiente et nam et. Nemo voluptatem numquam sequi id. Facilis laborum harum omnis voluptates sit dolores error. Temporibus deleniti molestiae ducimus et cupiditate minus.</p>\r\n', 'image/blog/1636360908_a6e88777fbecffaa4cc2.jpg', 5, '2021-09-04 16:34:57', '2021-11-08 02:41:48', NULL),
(10, 3, 'Numquam voluptatem tempore vel non saepe dolorem non.', '<p><span style=\"background-color:#f1c40f\">Et iusto quia consequatur odio est ut. Qu</span></p>\r\n', 'image/blog/1636360897_3526a80e4745f171426d.jpg', 21, '2021-09-04 16:34:57', '2021-11-08 02:41:37', NULL),
(11, 3, 'testttt', '<p>sdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf s</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>sdfsdf sdf sd fsdf ssdfsdf sdf sd fsdf ssdfsdf s<strong>df sd fsdf ssdsdfsdf sdf sd fsdf s</strong></p>\r\n', 'image/blog/1636360886_b750b434386b7e7ba1c5.jpg', 3, '2021-11-07 03:40:13', '2021-11-08 02:41:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cookes`
--

CREATE TABLE `cookes` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cookes`
--

INSERT INTO `cookes` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is test for cooke', 'Choose Your Destinations And Dates To Reserve A Ticket ', '<p><strong>cook esub edteee</strong></p>\r\n', '2021-12-19 13:03:55', '2021-12-19 13:04:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) UNSIGNED NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) UNSIGNED NOT NULL,
  `employeetype_id` int(11) UNSIGNED NOT NULL,
  `country_id` int(11) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `blood` tinytext NOT NULL,
  `nid` tinytext NOT NULL,
  `nid_picture` tinytext NOT NULL,
  `profile_picture` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `zip` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employeetype_id`, `country_id`, `first_name`, `last_name`, `phone`, `email`, `blood`, `nid`, `nid_picture`, `profile_picture`, `address`, `city`, `zip`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 18, 'alslam', 'shek', '888886666666fff', 'a@a.com', 'A', '', 'image/employee/1634356038_729448bbf6c6ea3362da.jpg', 'image/employee/1634356038_1baeefba86e6b0d759ba.png', 'asdf sadf asdf asdf asdf asfd', 'Dhaka', '5400', '2021-10-14 05:53:52', '2021-10-17 01:48:30', NULL),
(2, 2, 3, 'Assistant ', 'one', '88888888888232', 'cu@cu.com', 'A', '', 'image/employee/1634356054_0a9bbc0e139ade071339.png', 'image/employee/1634356054_a3572b277c42c6febb32.png', 'sdafasdf sdaf asdf dsaf', 'Dhaka', '', '2021-10-14 08:14:12', '2021-10-17 01:48:48', NULL),
(3, 3, 2, 'dd', 'sdfsdf', '88888888888232', 's@s.gg', 'A', '', 'image/employee/1634220856_55341e06825f696f2c70.png', 'image/employee/1634217375_868c3e0bb33bed18fb57.png', 'sadf sadf sdf ', '', '', '2021-10-14 08:16:15', '2021-10-14 09:14:16', NULL),
(4, 1, 1, 'Driver', 'two', '99999999999', 'a@k.com', '', '', 'image/employee/1634453344_0fb36666adcbcdb01829.png', '', 'sdf sdf sdf', '', '', '2021-10-14 08:17:50', '2021-10-17 01:49:04', NULL),
(5, 2, 4, 'Assistant ', 'Two', '88888888888232', 'e@e.dd', 'A', 'ssd', 'image/employee/1634220885_1647f2712f8ecc75f48e.png', 'image/employee/1634453366_4ad796f577ad1ddf89b0.png', 'sdf sdf sd f', '', '', '2021-10-14 08:18:53', '2021-10-17 01:49:26', NULL),
(6, 1, 4, 'Driver', 'Three', '88888888888232', 's@r.hh', 'A', '2222222222222', 'image/employee/1634453399_b2d2e5337fb3a2d51ff7.png', 'image/employee/1634218454_086f63081ab4f0f1e103.png', 'sdfds sdf sd', '', '', '2021-10-14 08:34:14', '2021-10-17 01:49:59', NULL),
(7, 1, 1, 'New Driver', 'test', '234234234234234', 'd@d.com', 'A', '222222222222245454', 'image/employee/1635580472_5f28210145704d2df928.png', 'image/employee/1635582285_1de63d0c396b5e78b761.png', 'sdf adsf asdf asdf asdf asdf asd fsad fasdf  ttyy', 'Dhaka', '5400', '2021-10-30 02:54:32', '2021-10-30 14:28:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeetypes`
--

CREATE TABLE `employeetypes` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employeetypes`
--

INSERT INTO `employeetypes` (`id`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Driver', 'This is cannot be deleted', '2021-10-13 22:31:38', '2021-10-13 22:31:38', NULL),
(2, 'Assistant ', 'This is cannot be deleted', '2021-10-13 22:31:57', '2021-10-13 22:31:57', NULL),
(3, 'Accountant', 'This is cannot be deleted', '2021-10-13 22:32:04', '2021-10-13 22:32:04', NULL),
(4, 'Clark', 'this is clark', '2021-10-30 01:16:28', '2021-10-30 01:16:28', NULL),
(5, 'test type', 'paid by bank and  edit', '2021-10-30 01:27:38', '2021-10-30 14:06:30', NULL),
(6, 'Clark', 'paid by bank and cash', '2021-11-17 20:29:12', '2021-11-17 20:29:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilitys`
--

CREATE TABLE `facilitys` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facilitys`
--

INSERT INTO `facilitys` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'water bottol', '2021-11-05 23:36:47', '2021-11-05 23:36:47', NULL),
(2, 'Blanket', '2021-11-05 23:37:07', '2021-11-05 23:37:07', NULL),
(3, 'wify', '2021-11-05 23:37:14', '2021-11-05 23:37:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faqquestions`
--

CREATE TABLE `faqquestions` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqquestions`
--

INSERT INTO `faqquestions` (`id`, `question`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is first question for test edit', '<p>asdf as//Question list sadfasf asf af<span style=\"font-size:10px\">sdfsd sdf sd dfsdfe sdfsdf sdf sdff</span></p>\r\n\r\n<p>sdfsfsd sdfsdf</p>\r\n', '2021-12-19 14:48:11', '2021-12-19 15:03:24', NULL),
(2, 'this is another question for test man', '<p>asdf asdf asd fasdf asdfasddf asfd af asf asdf asdf asfd asf asf af</p>\r\n', '2021-12-19 14:48:58', '2021-12-19 15:06:10', '2021-12-19 15:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is title asdasd', 'this is test three dfgdg', '2021-12-19 14:27:00', '2021-12-19 14:27:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fleets`
--

CREATE TABLE `fleets` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `layout` text NOT NULL,
  `last_seat` varchar(100) NOT NULL,
  `total_seat` int(11) NOT NULL,
  `seat_number` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `luggage_service` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fleets`
--

INSERT INTO `fleets` (`id`, `type`, `layout`, `last_seat`, `total_seat`, `seat_number`, `status`, `luggage_service`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ac', '2-2', '0', 20, 'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4', '1', '1', '2021-11-03 01:42:35', '2021-11-03 01:42:35', NULL),
(2, 'Non Ac', '2-2', '1', 24, 'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,Z', '1', '1', '2021-11-03 01:42:58', '2021-11-25 16:38:25', NULL),
(3, 'Local', '2-2', '1', 30, 'A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,Z', '1', '1', '2021-11-03 02:01:43', '2021-11-03 02:01:43', NULL),
(4, 'Business AC', '1-2', '1', 18, 'A1,A2,A3,B1,B2,B3,C1,C2,C3,D1,D2,D3,E1,E2,E3,F1,F2,F3,Z', '1', '1', '2021-11-25 20:49:18', '2021-11-25 20:49:18', NULL),
(5, 'Deluxe', '1-1-1', '0', 30, 'A1,A2,A3,B1,B2,B3,C1,C2,C3,D1,D2,D3,E1,E2,E3,F1,F2,F3,G1,G2,G3,H1,H2,H3,I1,I2,I3,J1,J2,J3', '1', '1', '2021-11-27 10:35:06', '2021-11-27 10:35:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fonts`
--

CREATE TABLE `fonts` (
  `id` int(11) NOT NULL,
  `font_name` tinytext NOT NULL,
  `font_display` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fonts`
--

INSERT INTO `fonts` (`id`, `font_name`, `font_display`) VALUES
(1, 'ABeeZee', 'ABeeZee'),
(2, 'Abel', 'Abel'),
(3, 'Abhaya Libre', 'Abhaya Libre'),
(4, 'Abril Fatface', 'Abril Fatface'),
(5, 'Aclonica', 'Aclonica'),
(6, 'Acme', 'Acme'),
(7, 'Actor', 'Actor'),
(8, 'Adamina', 'Adamina'),
(9, 'Advent Pro', 'Advent Pro'),
(10, 'Aguafina Script', 'Aguafina Script'),
(11, 'Akaya Kanadaka', 'Akaya Kanadaka'),
(12, 'Akaya Telivigala', 'Akaya Telivigala'),
(13, 'Akronim', 'Akronim'),
(14, 'Aladin', 'Aladin'),
(15, 'Alata', 'Alata'),
(16, 'Alatsi', 'Alatsi'),
(17, 'Aldrich', 'Aldrich'),
(18, 'Alef', 'Alef'),
(19, 'Alegreya', 'Alegreya'),
(20, 'Alegreya SC', 'Alegreya SC'),
(21, 'Alegreya Sans', 'Alegreya Sans'),
(22, 'Alegreya Sans SC', 'Alegreya Sans SC'),
(23, 'Aleo', 'Aleo'),
(24, 'Alex Brush', 'Alex Brush'),
(25, 'Alfa Slab One', 'Alfa Slab One'),
(26, 'Alice', 'Alice'),
(27, 'Alike', 'Alike'),
(28, 'Alike Angular', 'Alike Angular'),
(29, 'Allan', 'Allan'),
(30, 'Allerta', 'Allerta'),
(31, 'Allerta Stencil', 'Allerta Stencil'),
(32, 'Allison', 'Allison'),
(33, 'Allura', 'Allura'),
(34, 'Almarai', 'Almarai'),
(35, 'Almendra', 'Almendra'),
(36, 'Almendra Display', 'Almendra Display'),
(37, 'Almendra SC', 'Almendra SC'),
(38, 'Alumni Sans', 'Alumni Sans'),
(39, 'Amarante', 'Amarante'),
(40, 'Amaranth', 'Amaranth'),
(41, 'Amatic SC', 'Amatic SC'),
(42, 'Amethysta', 'Amethysta'),
(43, 'Amiko', 'Amiko'),
(44, 'Amiri', 'Amiri'),
(45, 'Amita', 'Amita'),
(46, 'Anaheim', 'Anaheim'),
(47, 'Andada Pro', 'Andada Pro'),
(48, 'Andika', 'Andika'),
(49, 'Andika New Basic', 'Andika New Basic'),
(50, 'Angkor', 'Angkor'),
(51, 'Annie Use Your Telescope', 'Annie Use Your Telescope'),
(52, 'Anonymous Pro', 'Anonymous Pro'),
(53, 'Antic', 'Antic'),
(54, 'Antic Didone', 'Antic Didone'),
(55, 'Antic Slab', 'Antic Slab'),
(56, 'Anton', 'Anton'),
(57, 'Antonio', 'Antonio'),
(58, 'Arapey', 'Arapey'),
(59, 'Arbutus', 'Arbutus'),
(60, 'Arbutus Slab', 'Arbutus Slab'),
(61, 'Architects Daughter', 'Architects Daughter'),
(62, 'Archivo', 'Archivo'),
(63, 'Archivo Black', 'Archivo Black'),
(64, 'Archivo Narrow', 'Archivo Narrow'),
(65, 'Are You Serious', 'Are You Serious'),
(66, 'Aref Ruqaa', 'Aref Ruqaa'),
(67, 'Arima Madurai', 'Arima Madurai'),
(68, 'Arimo', 'Arimo'),
(69, 'Arizonia', 'Arizonia'),
(70, 'Armata', 'Armata'),
(71, 'Arsenal', 'Arsenal'),
(72, 'Artifika', 'Artifika'),
(73, 'Arvo', 'Arvo'),
(74, 'Arya', 'Arya'),
(75, 'Asap', 'Asap'),
(76, 'Asap Condensed', 'Asap Condensed'),
(77, 'Asar', 'Asar'),
(78, 'Asset', 'Asset'),
(79, 'Assistant', 'Assistant'),
(80, 'Astloch', 'Astloch'),
(81, 'Asul', 'Asul'),
(82, 'Athiti', 'Athiti'),
(83, 'Atkinson Hyperlegible', 'Atkinson Hyperlegible'),
(84, 'Atma', 'Atma'),
(85, 'Atomic Age', 'Atomic Age'),
(86, 'Aubrey', 'Aubrey'),
(87, 'Audiowide', 'Audiowide'),
(88, 'Autour One', 'Autour One'),
(89, 'Average', 'Average'),
(90, 'Average Sans', 'Average Sans'),
(91, 'Averia Gruesa Libre', 'Averia Gruesa Libre'),
(92, 'Averia Libre', 'Averia Libre'),
(93, 'Averia Sans Libre', 'Averia Sans Libre'),
(94, 'Averia Serif Libre', 'Averia Serif Libre'),
(95, 'Azeret Mono', 'Azeret Mono'),
(96, 'B612', 'B612'),
(97, 'B612 Mono', 'B612 Mono'),
(98, 'Bad Script', 'Bad Script'),
(99, 'Bahiana', 'Bahiana'),
(100, 'Bahianita', 'Bahianita'),
(101, 'Bai Jamjuree', 'Bai Jamjuree'),
(102, 'Bakbak One', 'Bakbak One'),
(103, 'Ballet', 'Ballet'),
(104, 'Baloo 2', 'Baloo 2'),
(105, 'Baloo Bhai 2', 'Baloo Bhai 2'),
(106, 'Baloo Bhaijaan 2', 'Baloo Bhaijaan 2'),
(107, 'Baloo Bhaina 2', 'Baloo Bhaina 2'),
(108, 'Baloo Chettan 2', 'Baloo Chettan 2'),
(109, 'Baloo Da 2', 'Baloo Da 2'),
(110, 'Baloo Paaji 2', 'Baloo Paaji 2'),
(111, 'Baloo Tamma 2', 'Baloo Tamma 2'),
(112, 'Baloo Tammudu 2', 'Baloo Tammudu 2'),
(113, 'Baloo Thambi 2', 'Baloo Thambi 2'),
(114, 'Balsamiq Sans', 'Balsamiq Sans'),
(115, 'Balthazar', 'Balthazar'),
(116, 'Bangers', 'Bangers'),
(117, 'Barlow', 'Barlow'),
(118, 'Barlow Condensed', 'Barlow Condensed'),
(119, 'Barlow Semi Condensed', 'Barlow Semi Condensed'),
(120, 'Barriecito', 'Barriecito'),
(121, 'Barrio', 'Barrio'),
(122, 'Basic', 'Basic'),
(123, 'Baskervville', 'Baskervville'),
(124, 'Battambang', 'Battambang'),
(125, 'Baumans', 'Baumans'),
(126, 'Bayon', 'Bayon'),
(127, 'Be Vietnam Pro', 'Be Vietnam Pro'),
(128, 'Bebas Neue', 'Bebas Neue'),
(129, 'Belgrano', 'Belgrano'),
(130, 'Bellefair', 'Bellefair'),
(131, 'Belleza', 'Belleza'),
(132, 'Bellota', 'Bellota'),
(133, 'Bellota Text', 'Bellota Text'),
(134, 'BenchNine', 'BenchNine'),
(135, 'Benne', 'Benne'),
(136, 'Bentham', 'Bentham'),
(137, 'Berkshire Swash', 'Berkshire Swash'),
(138, 'Besley', 'Besley'),
(139, 'Beth Ellen', 'Beth Ellen'),
(140, 'Bevan', 'Bevan'),
(141, 'Big Shoulders Display', 'Big Shoulders Display'),
(142, 'Big Shoulders Inline Display', 'Big Shoulders Inline Display'),
(143, 'Big Shoulders Inline Text', 'Big Shoulders Inline Text'),
(144, 'Big Shoulders Stencil Display', 'Big Shoulders Stencil Display'),
(145, 'Big Shoulders Stencil Text', 'Big Shoulders Stencil Text'),
(146, 'Big Shoulders Text', 'Big Shoulders Text'),
(147, 'Bigelow Rules', 'Bigelow Rules'),
(148, 'Bigshot One', 'Bigshot One'),
(149, 'Bilbo', 'Bilbo'),
(150, 'Bilbo Swash Caps', 'Bilbo Swash Caps'),
(151, 'BioRhyme', 'BioRhyme'),
(152, 'BioRhyme Expanded', 'BioRhyme Expanded'),
(153, 'Birthstone', 'Birthstone'),
(154, 'Birthstone Bounce', 'Birthstone Bounce'),
(155, 'Biryani', 'Biryani'),
(156, 'Bitter', 'Bitter'),
(157, 'Black And White Picture', 'Black And White Picture'),
(158, 'Black Han Sans', 'Black Han Sans'),
(159, 'Black Ops One', 'Black Ops One'),
(160, 'Blinker', 'Blinker'),
(161, 'Bodoni Moda', 'Bodoni Moda'),
(162, 'Bokor', 'Bokor'),
(163, 'Bona Nova', 'Bona Nova'),
(164, 'Bonbon', 'Bonbon'),
(165, 'Bonheur Royale', 'Bonheur Royale'),
(166, 'Boogaloo', 'Boogaloo'),
(167, 'Bowlby One', 'Bowlby One'),
(168, 'Bowlby One SC', 'Bowlby One SC'),
(169, 'Brawler', 'Brawler'),
(170, 'Bree Serif', 'Bree Serif'),
(171, 'Brygada 1918', 'Brygada 1918'),
(172, 'Bubblegum Sans', 'Bubblegum Sans'),
(173, 'Bubbler One', 'Bubbler One'),
(174, 'Buda', 'Buda'),
(175, 'Buenard', 'Buenard'),
(176, 'Bungee', 'Bungee'),
(177, 'Bungee Hairline', 'Bungee Hairline'),
(178, 'Bungee Inline', 'Bungee Inline'),
(179, 'Bungee Outline', 'Bungee Outline'),
(180, 'Bungee Shade', 'Bungee Shade'),
(181, 'Butcherman', 'Butcherman'),
(182, 'Butterfly Kids', 'Butterfly Kids'),
(183, 'Cabin', 'Cabin'),
(184, 'Cabin Condensed', 'Cabin Condensed'),
(185, 'Cabin Sketch', 'Cabin Sketch'),
(186, 'Caesar Dressing', 'Caesar Dressing'),
(187, 'Cagliostro', 'Cagliostro'),
(188, 'Cairo', 'Cairo'),
(189, 'Caladea', 'Caladea'),
(190, 'Calistoga', 'Calistoga'),
(191, 'Calligraffitti', 'Calligraffitti'),
(192, 'Cambay', 'Cambay'),
(193, 'Cambo', 'Cambo'),
(194, 'Candal', 'Candal'),
(195, 'Cantarell', 'Cantarell'),
(196, 'Cantata One', 'Cantata One'),
(197, 'Cantora One', 'Cantora One'),
(198, 'Capriola', 'Capriola'),
(199, 'Caramel', 'Caramel'),
(200, 'Carattere', 'Carattere'),
(201, 'Cardo', 'Cardo'),
(202, 'Carme', 'Carme'),
(203, 'Carrois Gothic', 'Carrois Gothic'),
(204, 'Carrois Gothic SC', 'Carrois Gothic SC'),
(205, 'Carter One', 'Carter One'),
(206, 'Castoro', 'Castoro'),
(207, 'Catamaran', 'Catamaran'),
(208, 'Caudex', 'Caudex'),
(209, 'Caveat', 'Caveat'),
(210, 'Caveat Brush', 'Caveat Brush'),
(211, 'Cedarville Cursive', 'Cedarville Cursive'),
(212, 'Ceviche One', 'Ceviche One'),
(213, 'Chakra Petch', 'Chakra Petch'),
(214, 'Changa', 'Changa'),
(215, 'Changa One', 'Changa One'),
(216, 'Chango', 'Chango'),
(217, 'Charm', 'Charm'),
(218, 'Charmonman', 'Charmonman'),
(219, 'Chathura', 'Chathura'),
(220, 'Chau Philomene One', 'Chau Philomene One'),
(221, 'Chela One', 'Chela One'),
(222, 'Chelsea Market', 'Chelsea Market'),
(223, 'Chenla', 'Chenla'),
(224, 'Cherish', 'Cherish'),
(225, 'Cherry Cream Soda', 'Cherry Cream Soda'),
(226, 'Cherry Swash', 'Cherry Swash'),
(227, 'Chewy', 'Chewy'),
(228, 'Chicle', 'Chicle'),
(229, 'Chilanka', 'Chilanka'),
(230, 'Chivo', 'Chivo'),
(231, 'Chonburi', 'Chonburi'),
(232, 'Cinzel', 'Cinzel'),
(233, 'Cinzel Decorative', 'Cinzel Decorative'),
(234, 'Clicker Script', 'Clicker Script'),
(235, 'Coda', 'Coda'),
(236, 'Coda Caption', 'Coda Caption'),
(237, 'Codystar', 'Codystar'),
(238, 'Coiny', 'Coiny'),
(239, 'Combo', 'Combo'),
(240, 'Comfortaa', 'Comfortaa'),
(241, 'Comforter', 'Comforter'),
(242, 'Comforter Brush', 'Comforter Brush'),
(243, 'Comic Neue', 'Comic Neue'),
(244, 'Coming Soon', 'Coming Soon'),
(245, 'Commissioner', 'Commissioner'),
(246, 'Concert One', 'Concert One'),
(247, 'Condiment', 'Condiment'),
(248, 'Content', 'Content'),
(249, 'Contrail One', 'Contrail One'),
(250, 'Convergence', 'Convergence'),
(251, 'Cookie', 'Cookie'),
(252, 'Copse', 'Copse'),
(253, 'Corben', 'Corben'),
(254, 'Corinthia', 'Corinthia'),
(255, 'Cormorant', 'Cormorant'),
(256, 'Cormorant Garamond', 'Cormorant Garamond'),
(257, 'Cormorant Infant', 'Cormorant Infant'),
(258, 'Cormorant SC', 'Cormorant SC'),
(259, 'Cormorant Unicase', 'Cormorant Unicase'),
(260, 'Cormorant Upright', 'Cormorant Upright'),
(261, 'Courgette', 'Courgette'),
(262, 'Courier Prime', 'Courier Prime'),
(263, 'Cousine', 'Cousine'),
(264, 'Coustard', 'Coustard'),
(265, 'Covered By Your Grace', 'Covered By Your Grace'),
(266, 'Crafty Girls', 'Crafty Girls'),
(267, 'Creepster', 'Creepster'),
(268, 'Crete Round', 'Crete Round'),
(269, 'Crimson Pro', 'Crimson Pro'),
(270, 'Croissant One', 'Croissant One'),
(271, 'Crushed', 'Crushed'),
(272, 'Cuprum', 'Cuprum'),
(273, 'Cute Font', 'Cute Font'),
(274, 'Cutive', 'Cutive'),
(275, 'Cutive Mono', 'Cutive Mono'),
(276, 'DM Mono', 'DM Mono'),
(277, 'DM Sans', 'DM Sans'),
(278, 'DM Serif Display', 'DM Serif Display'),
(279, 'DM Serif Text', 'DM Serif Text'),
(280, 'Damion', 'Damion'),
(281, 'Dancing Script', 'Dancing Script'),
(282, 'Dangrek', 'Dangrek'),
(283, 'Darker Grotesque', 'Darker Grotesque'),
(284, 'David Libre', 'David Libre'),
(285, 'Dawning of a New Day', 'Dawning of a New Day'),
(286, 'Days One', 'Days One'),
(287, 'Dekko', 'Dekko'),
(288, 'Dela Gothic One', 'Dela Gothic One'),
(289, 'Delius', 'Delius'),
(290, 'Delius Swash Caps', 'Delius Swash Caps'),
(291, 'Delius Unicase', 'Delius Unicase'),
(292, 'Della Respira', 'Della Respira'),
(293, 'Denk One', 'Denk One'),
(294, 'Devonshire', 'Devonshire'),
(295, 'Dhurjati', 'Dhurjati'),
(296, 'Didact Gothic', 'Didact Gothic'),
(297, 'Diplomata', 'Diplomata'),
(298, 'Diplomata SC', 'Diplomata SC'),
(299, 'Do Hyeon', 'Do Hyeon'),
(300, 'Dokdo', 'Dokdo'),
(301, 'Domine', 'Domine'),
(302, 'Donegal One', 'Donegal One'),
(303, 'Dongle', 'Dongle'),
(304, 'Doppio One', 'Doppio One'),
(305, 'Dorsa', 'Dorsa'),
(306, 'Dosis', 'Dosis'),
(307, 'DotGothic16', 'DotGothic16'),
(308, 'Dr Sugiyama', 'Dr Sugiyama'),
(309, 'Duru Sans', 'Duru Sans'),
(310, 'Dynalight', 'Dynalight'),
(311, 'EB Garamond', 'EB Garamond'),
(312, 'Eagle Lake', 'Eagle Lake'),
(313, 'East Sea Dokdo', 'East Sea Dokdo'),
(314, 'Eater', 'Eater'),
(315, 'Economica', 'Economica'),
(316, 'Eczar', 'Eczar'),
(317, 'El Messiri', 'El Messiri'),
(318, 'Electrolize', 'Electrolize'),
(319, 'Elsie', 'Elsie'),
(320, 'Elsie Swash Caps', 'Elsie Swash Caps'),
(321, 'Emblema One', 'Emblema One'),
(322, 'Emilys Candy', 'Emilys Candy'),
(323, 'Encode Sans', 'Encode Sans'),
(324, 'Encode Sans Condensed', 'Encode Sans Condensed'),
(325, 'Encode Sans Expanded', 'Encode Sans Expanded'),
(326, 'Encode Sans SC', 'Encode Sans SC'),
(327, 'Encode Sans Semi Condensed', 'Encode Sans Semi Condensed'),
(328, 'Encode Sans Semi Expanded', 'Encode Sans Semi Expanded'),
(329, 'Engagement', 'Engagement'),
(330, 'Englebert', 'Englebert'),
(331, 'Enriqueta', 'Enriqueta'),
(332, 'Ephesis', 'Ephesis'),
(333, 'Epilogue', 'Epilogue'),
(334, 'Erica One', 'Erica One'),
(335, 'Esteban', 'Esteban'),
(336, 'Estonia', 'Estonia'),
(337, 'Euphoria Script', 'Euphoria Script'),
(338, 'Ewert', 'Ewert'),
(339, 'Exo', 'Exo'),
(340, 'Exo 2', 'Exo 2'),
(341, 'Expletus Sans', 'Expletus Sans'),
(342, 'Explora', 'Explora'),
(343, 'Fahkwang', 'Fahkwang'),
(344, 'Fanwood Text', 'Fanwood Text'),
(345, 'Farro', 'Farro'),
(346, 'Farsan', 'Farsan'),
(347, 'Fascinate', 'Fascinate'),
(348, 'Fascinate Inline', 'Fascinate Inline'),
(349, 'Faster One', 'Faster One'),
(350, 'Fasthand', 'Fasthand'),
(351, 'Fauna One', 'Fauna One'),
(352, 'Faustina', 'Faustina'),
(353, 'Federant', 'Federant'),
(354, 'Federo', 'Federo'),
(355, 'Felipa', 'Felipa'),
(356, 'Fenix', 'Fenix'),
(357, 'Festive', 'Festive'),
(358, 'Finger Paint', 'Finger Paint'),
(359, 'Fira Code', 'Fira Code'),
(360, 'Fira Mono', 'Fira Mono'),
(361, 'Fira Sans', 'Fira Sans'),
(362, 'Fira Sans Condensed', 'Fira Sans Condensed'),
(363, 'Fira Sans Extra Condensed', 'Fira Sans Extra Condensed'),
(364, 'Fjalla One', 'Fjalla One'),
(365, 'Fjord One', 'Fjord One'),
(366, 'Flamenco', 'Flamenco'),
(367, 'Flavors', 'Flavors'),
(368, 'Fleur De Leah', 'Fleur De Leah'),
(369, 'Flow Block', 'Flow Block'),
(370, 'Flow Circular', 'Flow Circular'),
(371, 'Flow Rounded', 'Flow Rounded'),
(372, 'Fondamento', 'Fondamento'),
(373, 'Fontdiner Swanky', 'Fontdiner Swanky'),
(374, 'Forum', 'Forum'),
(375, 'Francois One', 'Francois One'),
(376, 'Frank Ruhl Libre', 'Frank Ruhl Libre'),
(377, 'Fraunces', 'Fraunces'),
(378, 'Freckle Face', 'Freckle Face'),
(379, 'Fredericka the Great', 'Fredericka the Great'),
(380, 'Fredoka One', 'Fredoka One'),
(381, 'Freehand', 'Freehand'),
(382, 'Fresca', 'Fresca'),
(383, 'Frijole', 'Frijole'),
(384, 'Fruktur', 'Fruktur'),
(385, 'Fugaz One', 'Fugaz One'),
(386, 'Fuggles', 'Fuggles'),
(387, 'Fuzzy Bubbles', 'Fuzzy Bubbles'),
(388, 'GFS Didot', 'GFS Didot'),
(389, 'GFS Neohellenic', 'GFS Neohellenic'),
(390, 'Gabriela', 'Gabriela'),
(391, 'Gaegu', 'Gaegu'),
(392, 'Gafata', 'Gafata'),
(393, 'Galada', 'Galada'),
(394, 'Galdeano', 'Galdeano'),
(395, 'Galindo', 'Galindo'),
(396, 'Gamja Flower', 'Gamja Flower'),
(397, 'Gayathri', 'Gayathri'),
(398, 'Gelasio', 'Gelasio'),
(399, 'Gemunu Libre', 'Gemunu Libre'),
(400, 'Genos', 'Genos'),
(401, 'Gentium Basic', 'Gentium Basic'),
(402, 'Gentium Book Basic', 'Gentium Book Basic'),
(403, 'Geo', 'Geo'),
(404, 'Georama', 'Georama'),
(405, 'Geostar', 'Geostar'),
(406, 'Geostar Fill', 'Geostar Fill'),
(407, 'Germania One', 'Germania One'),
(408, 'Gideon Roman', 'Gideon Roman'),
(409, 'Gidugu', 'Gidugu'),
(410, 'Gilda Display', 'Gilda Display'),
(411, 'Girassol', 'Girassol'),
(412, 'Give You Glory', 'Give You Glory'),
(413, 'Glass Antiqua', 'Glass Antiqua'),
(414, 'Glegoo', 'Glegoo'),
(415, 'Gloria Hallelujah', 'Gloria Hallelujah'),
(416, 'Glory', 'Glory'),
(417, 'Gluten', 'Gluten'),
(418, 'Goblin One', 'Goblin One'),
(419, 'Gochi Hand', 'Gochi Hand'),
(420, 'Goldman', 'Goldman'),
(421, 'Gorditas', 'Gorditas'),
(422, 'Gothic A1', 'Gothic A1'),
(423, 'Gotu', 'Gotu'),
(424, 'Goudy Bookletter 1911', 'Goudy Bookletter 1911'),
(425, 'Gowun Batang', 'Gowun Batang'),
(426, 'Gowun Dodum', 'Gowun Dodum'),
(427, 'Graduate', 'Graduate'),
(428, 'Grand Hotel', 'Grand Hotel'),
(429, 'Grandstander', 'Grandstander'),
(430, 'Gravitas One', 'Gravitas One'),
(431, 'Great Vibes', 'Great Vibes'),
(432, 'Grechen Fuemen', 'Grechen Fuemen'),
(433, 'Grenze', 'Grenze'),
(434, 'Grenze Gotisch', 'Grenze Gotisch'),
(435, 'Grey Qo', 'Grey Qo'),
(436, 'Griffy', 'Griffy'),
(437, 'Gruppo', 'Gruppo'),
(438, 'Gudea', 'Gudea'),
(439, 'Gugi', 'Gugi'),
(440, 'Gupter', 'Gupter'),
(441, 'Gurajada', 'Gurajada'),
(442, 'Gwendolyn', 'Gwendolyn'),
(443, 'Habibi', 'Habibi'),
(444, 'Hachi Maru Pop', 'Hachi Maru Pop'),
(445, 'Hahmlet', 'Hahmlet'),
(446, 'Halant', 'Halant'),
(447, 'Hammersmith One', 'Hammersmith One'),
(448, 'Hanalei', 'Hanalei'),
(449, 'Hanalei Fill', 'Hanalei Fill'),
(450, 'Handlee', 'Handlee'),
(451, 'Hanuman', 'Hanuman'),
(452, 'Happy Monkey', 'Happy Monkey'),
(453, 'Harmattan', 'Harmattan'),
(454, 'Headland One', 'Headland One'),
(455, 'Heebo', 'Heebo'),
(456, 'Henny Penny', 'Henny Penny'),
(457, 'Hepta Slab', 'Hepta Slab'),
(458, 'Herr Von Muellerhoff', 'Herr Von Muellerhoff'),
(459, 'Hi Melody', 'Hi Melody'),
(460, 'Hina Mincho', 'Hina Mincho'),
(461, 'Hind', 'Hind'),
(462, 'Hind Guntur', 'Hind Guntur'),
(463, 'Hind Madurai', 'Hind Madurai'),
(464, 'Hind Siliguri', 'Hind Siliguri'),
(465, 'Hind Vadodara', 'Hind Vadodara'),
(466, 'Holtwood One SC', 'Holtwood One SC'),
(467, 'Homemade Apple', 'Homemade Apple'),
(468, 'Homenaje', 'Homenaje'),
(469, 'Hurricane', 'Hurricane'),
(470, 'IBM Plex Mono', 'IBM Plex Mono'),
(471, 'IBM Plex Sans', 'IBM Plex Sans'),
(472, 'IBM Plex Sans Arabic', 'IBM Plex Sans Arabic'),
(473, 'IBM Plex Sans Condensed', 'IBM Plex Sans Condensed'),
(474, 'IBM Plex Sans Devanagari', 'IBM Plex Sans Devanagari'),
(475, 'IBM Plex Sans Hebrew', 'IBM Plex Sans Hebrew'),
(476, 'IBM Plex Sans KR', 'IBM Plex Sans KR'),
(477, 'IBM Plex Sans Thai', 'IBM Plex Sans Thai'),
(478, 'IBM Plex Sans Thai Looped', 'IBM Plex Sans Thai Looped'),
(479, 'IBM Plex Serif', 'IBM Plex Serif'),
(480, 'IM Fell DW Pica', 'IM Fell DW Pica'),
(481, 'IM Fell DW Pica SC', 'IM Fell DW Pica SC'),
(482, 'IM Fell Double Pica', 'IM Fell Double Pica'),
(483, 'IM Fell Double Pica SC', 'IM Fell Double Pica SC'),
(484, 'IM Fell English', 'IM Fell English'),
(485, 'IM Fell English SC', 'IM Fell English SC'),
(486, 'IM Fell French Canon', 'IM Fell French Canon'),
(487, 'IM Fell French Canon SC', 'IM Fell French Canon SC'),
(488, 'IM Fell Great Primer', 'IM Fell Great Primer'),
(489, 'IM Fell Great Primer SC', 'IM Fell Great Primer SC'),
(490, 'Ibarra Real Nova', 'Ibarra Real Nova'),
(491, 'Iceberg', 'Iceberg'),
(492, 'Iceland', 'Iceland'),
(493, 'Imbue', 'Imbue'),
(494, 'Imprima', 'Imprima'),
(495, 'Inconsolata', 'Inconsolata'),
(496, 'Inder', 'Inder'),
(497, 'Indie Flower', 'Indie Flower'),
(498, 'Inika', 'Inika'),
(499, 'Inknut Antiqua', 'Inknut Antiqua'),
(500, 'Inria Sans', 'Inria Sans'),
(501, 'Inria Serif', 'Inria Serif'),
(502, 'Inter', 'Inter'),
(503, 'Irish Grover', 'Irish Grover'),
(504, 'Istok Web', 'Istok Web'),
(505, 'Italiana', 'Italiana'),
(506, 'Italianno', 'Italianno'),
(507, 'Itim', 'Itim'),
(508, 'Jacques Francois', 'Jacques Francois'),
(509, 'Jacques Francois Shadow', 'Jacques Francois Shadow'),
(510, 'Jaldi', 'Jaldi'),
(511, 'JetBrains Mono', 'JetBrains Mono'),
(512, 'Jim Nightshade', 'Jim Nightshade'),
(513, 'Jockey One', 'Jockey One'),
(514, 'Jolly Lodger', 'Jolly Lodger'),
(515, 'Jomhuria', 'Jomhuria'),
(516, 'Jomolhari', 'Jomolhari'),
(517, 'Josefin Sans', 'Josefin Sans'),
(518, 'Josefin Slab', 'Josefin Slab'),
(519, 'Jost', 'Jost'),
(520, 'Joti One', 'Joti One'),
(521, 'Jua', 'Jua'),
(522, 'Judson', 'Judson'),
(523, 'Julee', 'Julee'),
(524, 'Julius Sans One', 'Julius Sans One'),
(525, 'Junge', 'Junge'),
(526, 'Jura', 'Jura'),
(527, 'Just Another Hand', 'Just Another Hand'),
(528, 'Just Me Again Down Here', 'Just Me Again Down Here'),
(529, 'K2D', 'K2D'),
(530, 'Kadwa', 'Kadwa'),
(531, 'Kaisei Decol', 'Kaisei Decol'),
(532, 'Kaisei HarunoUmi', 'Kaisei HarunoUmi'),
(533, 'Kaisei Opti', 'Kaisei Opti'),
(534, 'Kaisei Tokumin', 'Kaisei Tokumin'),
(535, 'Kalam', 'Kalam'),
(536, 'Kameron', 'Kameron'),
(537, 'Kanit', 'Kanit'),
(538, 'Kantumruy', 'Kantumruy'),
(539, 'Karantina', 'Karantina'),
(540, 'Karla', 'Karla'),
(541, 'Karma', 'Karma'),
(542, 'Katibeh', 'Katibeh'),
(543, 'Kaushan Script', 'Kaushan Script'),
(544, 'Kavivanar', 'Kavivanar'),
(545, 'Kavoon', 'Kavoon'),
(546, 'Kdam Thmor', 'Kdam Thmor'),
(547, 'Keania One', 'Keania One'),
(548, 'Kelly Slab', 'Kelly Slab'),
(549, 'Kenia', 'Kenia'),
(550, 'Khand', 'Khand'),
(551, 'Khmer', 'Khmer'),
(552, 'Khula', 'Khula'),
(553, 'Kings', 'Kings'),
(554, 'Kirang Haerang', 'Kirang Haerang'),
(555, 'Kite One', 'Kite One'),
(556, 'Kiwi Maru', 'Kiwi Maru'),
(557, 'Klee One', 'Klee One'),
(558, 'Knewave', 'Knewave'),
(559, 'KoHo', 'KoHo'),
(560, 'Kodchasan', 'Kodchasan'),
(561, 'Koh Santepheap', 'Koh Santepheap'),
(562, 'Kosugi', 'Kosugi'),
(563, 'Kosugi Maru', 'Kosugi Maru'),
(564, 'Kotta One', 'Kotta One'),
(565, 'Koulen', 'Koulen'),
(566, 'Kranky', 'Kranky'),
(567, 'Kreon', 'Kreon'),
(568, 'Kristi', 'Kristi'),
(569, 'Krona One', 'Krona One'),
(570, 'Krub', 'Krub'),
(571, 'Kufam', 'Kufam'),
(572, 'Kulim Park', 'Kulim Park'),
(573, 'Kumar One', 'Kumar One'),
(574, 'Kumar One Outline', 'Kumar One Outline'),
(575, 'Kumbh Sans', 'Kumbh Sans'),
(576, 'Kurale', 'Kurale'),
(577, 'La Belle Aurore', 'La Belle Aurore'),
(578, 'Lacquer', 'Lacquer'),
(579, 'Laila', 'Laila'),
(580, 'Lakki Reddy', 'Lakki Reddy'),
(581, 'Lalezar', 'Lalezar'),
(582, 'Lancelot', 'Lancelot'),
(583, 'Langar', 'Langar'),
(584, 'Lateef', 'Lateef'),
(585, 'Lato', 'Lato'),
(586, 'League Script', 'League Script'),
(587, 'Leckerli One', 'Leckerli One'),
(588, 'Ledger', 'Ledger'),
(589, 'Lekton', 'Lekton'),
(590, 'Lemon', 'Lemon'),
(591, 'Lemonada', 'Lemonada'),
(592, 'Lexend', 'Lexend'),
(593, 'Lexend Deca', 'Lexend Deca'),
(594, 'Lexend Exa', 'Lexend Exa'),
(595, 'Lexend Giga', 'Lexend Giga'),
(596, 'Lexend Mega', 'Lexend Mega'),
(597, 'Lexend Peta', 'Lexend Peta'),
(598, 'Lexend Tera', 'Lexend Tera'),
(599, 'Lexend Zetta', 'Lexend Zetta'),
(600, 'Libre Barcode 128', 'Libre Barcode 128'),
(601, 'Libre Barcode 128 Text', 'Libre Barcode 128 Text'),
(602, 'Libre Barcode 39', 'Libre Barcode 39'),
(603, 'Libre Barcode 39 Extended', 'Libre Barcode 39 Extended'),
(604, 'Libre Barcode 39 Extended Text', 'Libre Barcode 39 Extended Text'),
(605, 'Libre Barcode 39 Text', 'Libre Barcode 39 Text'),
(606, 'Libre Barcode EAN13 Text', 'Libre Barcode EAN13 Text'),
(607, 'Libre Baskerville', 'Libre Baskerville'),
(608, 'Libre Caslon Display', 'Libre Caslon Display'),
(609, 'Libre Caslon Text', 'Libre Caslon Text'),
(610, 'Libre Franklin', 'Libre Franklin'),
(611, 'Life Savers', 'Life Savers'),
(612, 'Lilita One', 'Lilita One'),
(613, 'Lily Script One', 'Lily Script One'),
(614, 'Limelight', 'Limelight'),
(615, 'Linden Hill', 'Linden Hill'),
(616, 'Literata', 'Literata'),
(617, 'Liu Jian Mao Cao', 'Liu Jian Mao Cao'),
(618, 'Livvic', 'Livvic'),
(619, 'Lobster', 'Lobster'),
(620, 'Lobster Two', 'Lobster Two'),
(621, 'Londrina Outline', 'Londrina Outline'),
(622, 'Londrina Shadow', 'Londrina Shadow'),
(623, 'Londrina Sketch', 'Londrina Sketch'),
(624, 'Londrina Solid', 'Londrina Solid'),
(625, 'Long Cang', 'Long Cang'),
(626, 'Lora', 'Lora'),
(627, 'Love Ya Like A Sister', 'Love Ya Like A Sister'),
(628, 'Loved by the King', 'Loved by the King'),
(629, 'Lovers Quarrel', 'Lovers Quarrel'),
(630, 'Luckiest Guy', 'Luckiest Guy'),
(631, 'Lusitana', 'Lusitana'),
(632, 'Lustria', 'Lustria'),
(633, 'Luxurious Script', 'Luxurious Script'),
(634, 'M PLUS 1', 'M PLUS 1'),
(635, 'M PLUS 1 Code', 'M PLUS 1 Code'),
(636, 'M PLUS 1p', 'M PLUS 1p'),
(637, 'M PLUS 2', 'M PLUS 2'),
(638, 'M PLUS Code Latin', 'M PLUS Code Latin'),
(639, 'M PLUS Rounded 1c', 'M PLUS Rounded 1c'),
(640, 'Ma Shan Zheng', 'Ma Shan Zheng'),
(641, 'Macondo', 'Macondo'),
(642, 'Macondo Swash Caps', 'Macondo Swash Caps'),
(643, 'Mada', 'Mada'),
(644, 'Magra', 'Magra'),
(645, 'Maiden Orange', 'Maiden Orange'),
(646, 'Maitree', 'Maitree'),
(647, 'Major Mono Display', 'Major Mono Display'),
(648, 'Mako', 'Mako'),
(649, 'Mali', 'Mali'),
(650, 'Mallanna', 'Mallanna'),
(651, 'Mandali', 'Mandali'),
(652, 'Manjari', 'Manjari'),
(653, 'Manrope', 'Manrope'),
(654, 'Mansalva', 'Mansalva'),
(655, 'Manuale', 'Manuale'),
(656, 'Marcellus', 'Marcellus'),
(657, 'Marcellus SC', 'Marcellus SC'),
(658, 'Marck Script', 'Marck Script'),
(659, 'Margarine', 'Margarine'),
(660, 'Markazi Text', 'Markazi Text'),
(661, 'Marko One', 'Marko One'),
(662, 'Marmelad', 'Marmelad'),
(663, 'Martel', 'Martel'),
(664, 'Martel Sans', 'Martel Sans'),
(665, 'Marvel', 'Marvel'),
(666, 'Mate', 'Mate'),
(667, 'Mate SC', 'Mate SC'),
(668, 'Maven Pro', 'Maven Pro'),
(669, 'McLaren', 'McLaren'),
(670, 'Meddon', 'Meddon'),
(671, 'MedievalSharp', 'MedievalSharp'),
(672, 'Medula One', 'Medula One'),
(673, 'Meera Inimai', 'Meera Inimai'),
(674, 'Megrim', 'Megrim'),
(675, 'Meie Script', 'Meie Script'),
(676, 'Meow Script', 'Meow Script'),
(677, 'Merienda', 'Merienda'),
(678, 'Merienda One', 'Merienda One'),
(679, 'Merriweather', 'Merriweather'),
(680, 'Merriweather Sans', 'Merriweather Sans'),
(681, 'Metal', 'Metal'),
(682, 'Metal Mania', 'Metal Mania'),
(683, 'Metamorphous', 'Metamorphous'),
(684, 'Metrophobic', 'Metrophobic'),
(685, 'Michroma', 'Michroma'),
(686, 'Milonga', 'Milonga'),
(687, 'Miltonian', 'Miltonian'),
(688, 'Miltonian Tattoo', 'Miltonian Tattoo'),
(689, 'Mina', 'Mina'),
(690, 'Miniver', 'Miniver'),
(691, 'Miriam Libre', 'Miriam Libre'),
(692, 'Mirza', 'Mirza'),
(693, 'Miss Fajardose', 'Miss Fajardose'),
(694, 'Mitr', 'Mitr'),
(695, 'Mochiy Pop One', 'Mochiy Pop One'),
(696, 'Mochiy Pop P One', 'Mochiy Pop P One'),
(697, 'Modak', 'Modak'),
(698, 'Modern Antiqua', 'Modern Antiqua'),
(699, 'Mogra', 'Mogra'),
(700, 'Mohave', 'Mohave'),
(701, 'Molengo', 'Molengo'),
(702, 'Molle', 'Molle'),
(703, 'Monda', 'Monda'),
(704, 'Monofett', 'Monofett'),
(705, 'Monoton', 'Monoton'),
(706, 'Monsieur La Doulaise', 'Monsieur La Doulaise'),
(707, 'Montaga', 'Montaga'),
(708, 'Montagu Slab', 'Montagu Slab'),
(709, 'MonteCarlo', 'MonteCarlo'),
(710, 'Montez', 'Montez'),
(711, 'Montserrat', 'Montserrat'),
(712, 'Montserrat Alternates', 'Montserrat Alternates'),
(713, 'Montserrat Subrayada', 'Montserrat Subrayada'),
(714, 'Moul', 'Moul'),
(715, 'Moulpali', 'Moulpali'),
(716, 'Mountains of Christmas', 'Mountains of Christmas'),
(717, 'Mouse Memoirs', 'Mouse Memoirs'),
(718, 'Mr Bedfort', 'Mr Bedfort'),
(719, 'Mr Dafoe', 'Mr Dafoe'),
(720, 'Mr De Haviland', 'Mr De Haviland'),
(721, 'Mrs Saint Delafield', 'Mrs Saint Delafield'),
(722, 'Mrs Sheppards', 'Mrs Sheppards'),
(723, 'Mukta', 'Mukta'),
(724, 'Mukta Mahee', 'Mukta Mahee'),
(725, 'Mukta Malar', 'Mukta Malar'),
(726, 'Mukta Vaani', 'Mukta Vaani'),
(727, 'Mulish', 'Mulish'),
(728, 'Murecho', 'Murecho'),
(729, 'MuseoModerno', 'MuseoModerno'),
(730, 'Mystery Quest', 'Mystery Quest'),
(731, 'NTR', 'NTR'),
(732, 'Nanum Brush Script', 'Nanum Brush Script'),
(733, 'Nanum Gothic', 'Nanum Gothic'),
(734, 'Nanum Gothic Coding', 'Nanum Gothic Coding'),
(735, 'Nanum Myeongjo', 'Nanum Myeongjo'),
(736, 'Nanum Pen Script', 'Nanum Pen Script'),
(737, 'Nerko One', 'Nerko One'),
(738, 'Neucha', 'Neucha'),
(739, 'Neuton', 'Neuton'),
(740, 'New Rocker', 'New Rocker'),
(741, 'New Tegomin', 'New Tegomin'),
(742, 'News Cycle', 'News Cycle'),
(743, 'Newsreader', 'Newsreader'),
(744, 'Niconne', 'Niconne'),
(745, 'Niramit', 'Niramit'),
(746, 'Nixie One', 'Nixie One'),
(747, 'Nobile', 'Nobile'),
(748, 'Nokora', 'Nokora'),
(749, 'Norican', 'Norican'),
(750, 'Nosifer', 'Nosifer'),
(751, 'Notable', 'Notable'),
(752, 'Nothing You Could Do', 'Nothing You Could Do'),
(753, 'Noticia Text', 'Noticia Text'),
(754, 'Noto Kufi Arabic', 'Noto Kufi Arabic'),
(755, 'Noto Music', 'Noto Music'),
(756, 'Noto Naskh Arabic', 'Noto Naskh Arabic'),
(757, 'Noto Nastaliq Urdu', 'Noto Nastaliq Urdu'),
(758, 'Noto Rashi Hebrew', 'Noto Rashi Hebrew'),
(759, 'Noto Sans', 'Noto Sans'),
(760, 'Noto Sans Adlam', 'Noto Sans Adlam'),
(761, 'Noto Sans Adlam Unjoined', 'Noto Sans Adlam Unjoined'),
(762, 'Noto Sans Anatolian Hieroglyphs', 'Noto Sans Anatolian Hieroglyphs'),
(763, 'Noto Sans Arabic', 'Noto Sans Arabic'),
(764, 'Noto Sans Armenian', 'Noto Sans Armenian'),
(765, 'Noto Sans Avestan', 'Noto Sans Avestan'),
(766, 'Noto Sans Balinese', 'Noto Sans Balinese'),
(767, 'Noto Sans Bamum', 'Noto Sans Bamum'),
(768, 'Noto Sans Bassa Vah', 'Noto Sans Bassa Vah'),
(769, 'Noto Sans Batak', 'Noto Sans Batak'),
(770, 'Noto Sans Bengali', 'Noto Sans Bengali'),
(771, 'Noto Sans Bhaiksuki', 'Noto Sans Bhaiksuki'),
(772, 'Noto Sans Brahmi', 'Noto Sans Brahmi'),
(773, 'Noto Sans Buginese', 'Noto Sans Buginese'),
(774, 'Noto Sans Buhid', 'Noto Sans Buhid'),
(775, 'Noto Sans Canadian Aboriginal', 'Noto Sans Canadian Aboriginal'),
(776, 'Noto Sans Carian', 'Noto Sans Carian'),
(777, 'Noto Sans Caucasian Albanian', 'Noto Sans Caucasian Albanian'),
(778, 'Noto Sans Chakma', 'Noto Sans Chakma'),
(779, 'Noto Sans Cham', 'Noto Sans Cham'),
(780, 'Noto Sans Cherokee', 'Noto Sans Cherokee'),
(781, 'Noto Sans Coptic', 'Noto Sans Coptic'),
(782, 'Noto Sans Cuneiform', 'Noto Sans Cuneiform'),
(783, 'Noto Sans Cypriot', 'Noto Sans Cypriot'),
(784, 'Noto Sans Deseret', 'Noto Sans Deseret'),
(785, 'Noto Sans Devanagari', 'Noto Sans Devanagari'),
(786, 'Noto Sans Display', 'Noto Sans Display'),
(787, 'Noto Sans Duployan', 'Noto Sans Duployan'),
(788, 'Noto Sans Egyptian Hieroglyphs', 'Noto Sans Egyptian Hieroglyphs'),
(789, 'Noto Sans Elbasan', 'Noto Sans Elbasan'),
(790, 'Noto Sans Elymaic', 'Noto Sans Elymaic'),
(791, 'Noto Sans Georgian', 'Noto Sans Georgian'),
(792, 'Noto Sans Glagolitic', 'Noto Sans Glagolitic'),
(793, 'Noto Sans Gothic', 'Noto Sans Gothic'),
(794, 'Noto Sans Grantha', 'Noto Sans Grantha'),
(795, 'Noto Sans Gujarati', 'Noto Sans Gujarati'),
(796, 'Noto Sans Gunjala Gondi', 'Noto Sans Gunjala Gondi'),
(797, 'Noto Sans Gurmukhi', 'Noto Sans Gurmukhi'),
(798, 'Noto Sans HK', 'Noto Sans HK'),
(799, 'Noto Sans Hanifi Rohingya', 'Noto Sans Hanifi Rohingya'),
(800, 'Noto Sans Hanunoo', 'Noto Sans Hanunoo'),
(801, 'Noto Sans Hatran', 'Noto Sans Hatran'),
(802, 'Noto Sans Hebrew', 'Noto Sans Hebrew'),
(803, 'Noto Sans Imperial Aramaic', 'Noto Sans Imperial Aramaic'),
(804, 'Noto Sans Indic Siyaq Numbers', 'Noto Sans Indic Siyaq Numbers'),
(805, 'Noto Sans Inscriptional Pahlavi', 'Noto Sans Inscriptional Pahlavi'),
(806, 'Noto Sans Inscriptional Parthian', 'Noto Sans Inscriptional Parthian'),
(807, 'Noto Sans JP', 'Noto Sans JP'),
(808, 'Noto Sans Javanese', 'Noto Sans Javanese'),
(809, 'Noto Sans KR', 'Noto Sans KR'),
(810, 'Noto Sans Kaithi', 'Noto Sans Kaithi'),
(811, 'Noto Sans Kannada', 'Noto Sans Kannada'),
(812, 'Noto Sans Kayah Li', 'Noto Sans Kayah Li'),
(813, 'Noto Sans Kharoshthi', 'Noto Sans Kharoshthi'),
(814, 'Noto Sans Khmer', 'Noto Sans Khmer'),
(815, 'Noto Sans Khojki', 'Noto Sans Khojki'),
(816, 'Noto Sans Khudawadi', 'Noto Sans Khudawadi'),
(817, 'Noto Sans Lao', 'Noto Sans Lao'),
(818, 'Noto Sans Lepcha', 'Noto Sans Lepcha'),
(819, 'Noto Sans Limbu', 'Noto Sans Limbu'),
(820, 'Noto Sans Linear A', 'Noto Sans Linear A'),
(821, 'Noto Sans Linear B', 'Noto Sans Linear B'),
(822, 'Noto Sans Lisu', 'Noto Sans Lisu'),
(823, 'Noto Sans Lycian', 'Noto Sans Lycian'),
(824, 'Noto Sans Lydian', 'Noto Sans Lydian'),
(825, 'Noto Sans Mahajani', 'Noto Sans Mahajani'),
(826, 'Noto Sans Malayalam', 'Noto Sans Malayalam'),
(827, 'Noto Sans Mandaic', 'Noto Sans Mandaic'),
(828, 'Noto Sans Manichaean', 'Noto Sans Manichaean'),
(829, 'Noto Sans Marchen', 'Noto Sans Marchen'),
(830, 'Noto Sans Masaram Gondi', 'Noto Sans Masaram Gondi'),
(831, 'Noto Sans Math', 'Noto Sans Math'),
(832, 'Noto Sans Mayan Numerals', 'Noto Sans Mayan Numerals'),
(833, 'Noto Sans Medefaidrin', 'Noto Sans Medefaidrin'),
(834, 'Noto Sans Meetei Mayek', 'Noto Sans Meetei Mayek'),
(835, 'Noto Sans Meroitic', 'Noto Sans Meroitic'),
(836, 'Noto Sans Miao', 'Noto Sans Miao'),
(837, 'Noto Sans Modi', 'Noto Sans Modi'),
(838, 'Noto Sans Mongolian', 'Noto Sans Mongolian'),
(839, 'Noto Sans Mono', 'Noto Sans Mono'),
(840, 'Noto Sans Mro', 'Noto Sans Mro'),
(841, 'Noto Sans Multani', 'Noto Sans Multani'),
(842, 'Noto Sans Myanmar', 'Noto Sans Myanmar'),
(843, 'Noto Sans N Ko', 'Noto Sans N Ko'),
(844, 'Noto Sans Nabataean', 'Noto Sans Nabataean'),
(845, 'Noto Sans New Tai Lue', 'Noto Sans New Tai Lue'),
(846, 'Noto Sans Newa', 'Noto Sans Newa'),
(847, 'Noto Sans Nushu', 'Noto Sans Nushu'),
(848, 'Noto Sans Ogham', 'Noto Sans Ogham'),
(849, 'Noto Sans Ol Chiki', 'Noto Sans Ol Chiki'),
(850, 'Noto Sans Old Hungarian', 'Noto Sans Old Hungarian'),
(851, 'Noto Sans Old Italic', 'Noto Sans Old Italic'),
(852, 'Noto Sans Old North Arabian', 'Noto Sans Old North Arabian'),
(853, 'Noto Sans Old Permic', 'Noto Sans Old Permic'),
(854, 'Noto Sans Old Persian', 'Noto Sans Old Persian'),
(855, 'Noto Sans Old Sogdian', 'Noto Sans Old Sogdian'),
(856, 'Noto Sans Old South Arabian', 'Noto Sans Old South Arabian'),
(857, 'Noto Sans Old Turkic', 'Noto Sans Old Turkic'),
(858, 'Noto Sans Oriya', 'Noto Sans Oriya'),
(859, 'Noto Sans Osage', 'Noto Sans Osage'),
(860, 'Noto Sans Osmanya', 'Noto Sans Osmanya'),
(861, 'Noto Sans Pahawh Hmong', 'Noto Sans Pahawh Hmong'),
(862, 'Noto Sans Palmyrene', 'Noto Sans Palmyrene'),
(863, 'Noto Sans Pau Cin Hau', 'Noto Sans Pau Cin Hau'),
(864, 'Noto Sans Phags Pa', 'Noto Sans Phags Pa'),
(865, 'Noto Sans Phoenician', 'Noto Sans Phoenician'),
(866, 'Noto Sans Psalter Pahlavi', 'Noto Sans Psalter Pahlavi'),
(867, 'Noto Sans Rejang', 'Noto Sans Rejang'),
(868, 'Noto Sans Runic', 'Noto Sans Runic'),
(869, 'Noto Sans SC', 'Noto Sans SC'),
(870, 'Noto Sans Samaritan', 'Noto Sans Samaritan'),
(871, 'Noto Sans Saurashtra', 'Noto Sans Saurashtra'),
(872, 'Noto Sans Sharada', 'Noto Sans Sharada'),
(873, 'Noto Sans Shavian', 'Noto Sans Shavian'),
(874, 'Noto Sans Siddham', 'Noto Sans Siddham'),
(875, 'Noto Sans Sinhala', 'Noto Sans Sinhala'),
(876, 'Noto Sans Sogdian', 'Noto Sans Sogdian'),
(877, 'Noto Sans Sora Sompeng', 'Noto Sans Sora Sompeng'),
(878, 'Noto Sans Soyombo', 'Noto Sans Soyombo'),
(879, 'Noto Sans Sundanese', 'Noto Sans Sundanese'),
(880, 'Noto Sans Syloti Nagri', 'Noto Sans Syloti Nagri'),
(881, 'Noto Sans Symbols', 'Noto Sans Symbols'),
(882, 'Noto Sans Symbols 2', 'Noto Sans Symbols 2'),
(883, 'Noto Sans Syriac', 'Noto Sans Syriac'),
(884, 'Noto Sans TC', 'Noto Sans TC'),
(885, 'Noto Sans Tagalog', 'Noto Sans Tagalog'),
(886, 'Noto Sans Tagbanwa', 'Noto Sans Tagbanwa'),
(887, 'Noto Sans Tai Le', 'Noto Sans Tai Le'),
(888, 'Noto Sans Tai Tham', 'Noto Sans Tai Tham'),
(889, 'Noto Sans Tai Viet', 'Noto Sans Tai Viet'),
(890, 'Noto Sans Takri', 'Noto Sans Takri'),
(891, 'Noto Sans Tamil', 'Noto Sans Tamil'),
(892, 'Noto Sans Tamil Supplement', 'Noto Sans Tamil Supplement'),
(893, 'Noto Sans Telugu', 'Noto Sans Telugu'),
(894, 'Noto Sans Thaana', 'Noto Sans Thaana'),
(895, 'Noto Sans Thai', 'Noto Sans Thai'),
(896, 'Noto Sans Thai Looped', 'Noto Sans Thai Looped'),
(897, 'Noto Sans Tifinagh', 'Noto Sans Tifinagh'),
(898, 'Noto Sans Tirhuta', 'Noto Sans Tirhuta'),
(899, 'Noto Sans Ugaritic', 'Noto Sans Ugaritic'),
(900, 'Noto Sans Vai', 'Noto Sans Vai'),
(901, 'Noto Sans Wancho', 'Noto Sans Wancho'),
(902, 'Noto Sans Warang Citi', 'Noto Sans Warang Citi'),
(903, 'Noto Sans Yi', 'Noto Sans Yi'),
(904, 'Noto Sans Zanabazar Square', 'Noto Sans Zanabazar Square'),
(905, 'Noto Serif', 'Noto Serif'),
(906, 'Noto Serif Ahom', 'Noto Serif Ahom'),
(907, 'Noto Serif Armenian', 'Noto Serif Armenian'),
(908, 'Noto Serif Balinese', 'Noto Serif Balinese'),
(909, 'Noto Serif Bengali', 'Noto Serif Bengali'),
(910, 'Noto Serif Devanagari', 'Noto Serif Devanagari'),
(911, 'Noto Serif Display', 'Noto Serif Display'),
(912, 'Noto Serif Dogra', 'Noto Serif Dogra'),
(913, 'Noto Serif Ethiopic', 'Noto Serif Ethiopic'),
(914, 'Noto Serif Georgian', 'Noto Serif Georgian'),
(915, 'Noto Serif Grantha', 'Noto Serif Grantha'),
(916, 'Noto Serif Gujarati', 'Noto Serif Gujarati'),
(917, 'Noto Serif Gurmukhi', 'Noto Serif Gurmukhi'),
(918, 'Noto Serif Hebrew', 'Noto Serif Hebrew'),
(919, 'Noto Serif JP', 'Noto Serif JP'),
(920, 'Noto Serif KR', 'Noto Serif KR'),
(921, 'Noto Serif Kannada', 'Noto Serif Kannada'),
(922, 'Noto Serif Khmer', 'Noto Serif Khmer'),
(923, 'Noto Serif Lao', 'Noto Serif Lao'),
(924, 'Noto Serif Malayalam', 'Noto Serif Malayalam'),
(925, 'Noto Serif Myanmar', 'Noto Serif Myanmar'),
(926, 'Noto Serif Nyiakeng Puachue Hmong', 'Noto Serif Nyiakeng Puachue Hmong'),
(927, 'Noto Serif SC', 'Noto Serif SC'),
(928, 'Noto Serif Sinhala', 'Noto Serif Sinhala'),
(929, 'Noto Serif TC', 'Noto Serif TC'),
(930, 'Noto Serif Tamil', 'Noto Serif Tamil'),
(931, 'Noto Serif Tangut', 'Noto Serif Tangut'),
(932, 'Noto Serif Telugu', 'Noto Serif Telugu'),
(933, 'Noto Serif Thai', 'Noto Serif Thai'),
(934, 'Noto Serif Tibetan', 'Noto Serif Tibetan'),
(935, 'Noto Serif Yezidi', 'Noto Serif Yezidi'),
(936, 'Noto Traditional Nushu', 'Noto Traditional Nushu'),
(937, 'Nova Cut', 'Nova Cut'),
(938, 'Nova Flat', 'Nova Flat'),
(939, 'Nova Mono', 'Nova Mono'),
(940, 'Nova Oval', 'Nova Oval'),
(941, 'Nova Round', 'Nova Round'),
(942, 'Nova Script', 'Nova Script'),
(943, 'Nova Slim', 'Nova Slim'),
(944, 'Nova Square', 'Nova Square'),
(945, 'Numans', 'Numans'),
(946, 'Nunito', 'Nunito'),
(947, 'Nunito Sans', 'Nunito Sans'),
(948, 'Odibee Sans', 'Odibee Sans'),
(949, 'Odor Mean Chey', 'Odor Mean Chey'),
(950, 'Offside', 'Offside'),
(951, 'Oi', 'Oi'),
(952, 'Old Standard TT', 'Old Standard TT'),
(953, 'Oldenburg', 'Oldenburg'),
(954, 'Oleo Script', 'Oleo Script'),
(955, 'Oleo Script Swash Caps', 'Oleo Script Swash Caps'),
(956, 'Open Sans', 'Open Sans'),
(957, 'Open Sans Condensed', 'Open Sans Condensed'),
(958, 'Oranienbaum', 'Oranienbaum'),
(959, 'Orbitron', 'Orbitron'),
(960, 'Oregano', 'Oregano'),
(961, 'Orelega One', 'Orelega One'),
(962, 'Orienta', 'Orienta'),
(963, 'Original Surfer', 'Original Surfer'),
(964, 'Oswald', 'Oswald'),
(965, 'Otomanopee One', 'Otomanopee One'),
(966, 'Outfit', 'Outfit'),
(967, 'Over the Rainbow', 'Over the Rainbow'),
(968, 'Overlock', 'Overlock'),
(969, 'Overlock SC', 'Overlock SC'),
(970, 'Overpass', 'Overpass'),
(971, 'Overpass Mono', 'Overpass Mono'),
(972, 'Ovo', 'Ovo'),
(973, 'Oxanium', 'Oxanium'),
(974, 'Oxygen', 'Oxygen'),
(975, 'Oxygen Mono', 'Oxygen Mono'),
(976, 'PT Mono', 'PT Mono'),
(977, 'PT Sans', 'PT Sans'),
(978, 'PT Sans Caption', 'PT Sans Caption'),
(979, 'PT Sans Narrow', 'PT Sans Narrow'),
(980, 'PT Serif', 'PT Serif'),
(981, 'PT Serif Caption', 'PT Serif Caption'),
(982, 'Pacifico', 'Pacifico'),
(983, 'Padauk', 'Padauk'),
(984, 'Palanquin', 'Palanquin'),
(985, 'Palanquin Dark', 'Palanquin Dark'),
(986, 'Palette Mosaic', 'Palette Mosaic'),
(987, 'Pangolin', 'Pangolin'),
(988, 'Paprika', 'Paprika'),
(989, 'Parisienne', 'Parisienne'),
(990, 'Passero One', 'Passero One'),
(991, 'Passion One', 'Passion One'),
(992, 'Passions Conflict', 'Passions Conflict'),
(993, 'Pathway Gothic One', 'Pathway Gothic One'),
(994, 'Patrick Hand', 'Patrick Hand'),
(995, 'Patrick Hand SC', 'Patrick Hand SC'),
(996, 'Pattaya', 'Pattaya'),
(997, 'Patua One', 'Patua One'),
(998, 'Pavanam', 'Pavanam'),
(999, 'Paytone One', 'Paytone One'),
(1000, 'Peddana', 'Peddana'),
(1001, 'Peralta', 'Peralta'),
(1002, 'Permanent Marker', 'Permanent Marker'),
(1003, 'Petemoss', 'Petemoss'),
(1004, 'Petit Formal Script', 'Petit Formal Script'),
(1005, 'Petrona', 'Petrona'),
(1006, 'Philosopher', 'Philosopher'),
(1007, 'Piazzolla', 'Piazzolla'),
(1008, 'Piedra', 'Piedra'),
(1009, 'Pinyon Script', 'Pinyon Script'),
(1010, 'Pirata One', 'Pirata One'),
(1011, 'Plaster', 'Plaster'),
(1012, 'Play', 'Play'),
(1013, 'Playball', 'Playball'),
(1014, 'Playfair Display', 'Playfair Display'),
(1015, 'Playfair Display SC', 'Playfair Display SC'),
(1016, 'Podkova', 'Podkova'),
(1017, 'Poiret One', 'Poiret One'),
(1018, 'Poller One', 'Poller One'),
(1019, 'Poly', 'Poly'),
(1020, 'Pompiere', 'Pompiere'),
(1021, 'Pontano Sans', 'Pontano Sans'),
(1022, 'Poor Story', 'Poor Story'),
(1023, 'Poppins', 'Poppins'),
(1024, 'Port Lligat Sans', 'Port Lligat Sans'),
(1025, 'Port Lligat Slab', 'Port Lligat Slab'),
(1026, 'Potta One', 'Potta One'),
(1027, 'Pragati Narrow', 'Pragati Narrow'),
(1028, 'Praise', 'Praise'),
(1029, 'Prata', 'Prata'),
(1030, 'Preahvihear', 'Preahvihear'),
(1031, 'Press Start 2P', 'Press Start 2P'),
(1032, 'Pridi', 'Pridi'),
(1033, 'Princess Sofia', 'Princess Sofia'),
(1034, 'Prociono', 'Prociono'),
(1035, 'Prompt', 'Prompt'),
(1036, 'Prosto One', 'Prosto One'),
(1037, 'Proza Libre', 'Proza Libre'),
(1038, 'Public Sans', 'Public Sans'),
(1039, 'Puppies Play', 'Puppies Play'),
(1040, 'Puritan', 'Puritan'),
(1041, 'Purple Purse', 'Purple Purse'),
(1042, 'Qahiri', 'Qahiri'),
(1043, 'Quando', 'Quando'),
(1044, 'Quantico', 'Quantico'),
(1045, 'Quattrocento', 'Quattrocento'),
(1046, 'Quattrocento Sans', 'Quattrocento Sans'),
(1047, 'Questrial', 'Questrial'),
(1048, 'Quicksand', 'Quicksand'),
(1049, 'Quintessential', 'Quintessential'),
(1050, 'Qwigley', 'Qwigley'),
(1051, 'Racing Sans One', 'Racing Sans One'),
(1052, 'Radley', 'Radley'),
(1053, 'Rajdhani', 'Rajdhani'),
(1054, 'Rakkas', 'Rakkas'),
(1055, 'Raleway', 'Raleway'),
(1056, 'Raleway Dots', 'Raleway Dots'),
(1057, 'Ramabhadra', 'Ramabhadra'),
(1058, 'Ramaraja', 'Ramaraja'),
(1059, 'Rambla', 'Rambla'),
(1060, 'Rammetto One', 'Rammetto One'),
(1061, 'Rampart One', 'Rampart One'),
(1062, 'Ranchers', 'Ranchers'),
(1063, 'Rancho', 'Rancho'),
(1064, 'Ranga', 'Ranga'),
(1065, 'Rasa', 'Rasa'),
(1066, 'Rationale', 'Rationale'),
(1067, 'Ravi Prakash', 'Ravi Prakash'),
(1068, 'Readex Pro', 'Readex Pro'),
(1069, 'Recursive', 'Recursive'),
(1070, 'Red Hat Display', 'Red Hat Display'),
(1071, 'Red Hat Mono', 'Red Hat Mono'),
(1072, 'Red Hat Text', 'Red Hat Text'),
(1073, 'Red Rose', 'Red Rose'),
(1074, 'Redacted', 'Redacted'),
(1075, 'Redacted Script', 'Redacted Script'),
(1076, 'Redressed', 'Redressed'),
(1077, 'Reem Kufi', 'Reem Kufi'),
(1078, 'Reenie Beanie', 'Reenie Beanie'),
(1079, 'Reggae One', 'Reggae One'),
(1080, 'Revalia', 'Revalia'),
(1081, 'Rhodium Libre', 'Rhodium Libre'),
(1082, 'Ribeye', 'Ribeye'),
(1083, 'Ribeye Marrow', 'Ribeye Marrow'),
(1084, 'Righteous', 'Righteous'),
(1085, 'Risque', 'Risque'),
(1086, 'Road Rage', 'Road Rage'),
(1087, 'Roboto', 'Roboto'),
(1088, 'Roboto Condensed', 'Roboto Condensed'),
(1089, 'Roboto Mono', 'Roboto Mono'),
(1090, 'Roboto Slab', 'Roboto Slab'),
(1091, 'Rochester', 'Rochester'),
(1092, 'Rock Salt', 'Rock Salt'),
(1093, 'RocknRoll One', 'RocknRoll One'),
(1094, 'Rokkitt', 'Rokkitt'),
(1095, 'Romanesco', 'Romanesco'),
(1096, 'Ropa Sans', 'Ropa Sans'),
(1097, 'Rosario', 'Rosario'),
(1098, 'Rosarivo', 'Rosarivo'),
(1099, 'Rouge Script', 'Rouge Script'),
(1100, 'Rowdies', 'Rowdies'),
(1101, 'Rozha One', 'Rozha One'),
(1102, 'Rubik', 'Rubik'),
(1103, 'Rubik Beastly', 'Rubik Beastly'),
(1104, 'Rubik Mono One', 'Rubik Mono One'),
(1105, 'Ruda', 'Ruda'),
(1106, 'Rufina', 'Rufina'),
(1107, 'Ruge Boogie', 'Ruge Boogie'),
(1108, 'Ruluko', 'Ruluko'),
(1109, 'Rum Raisin', 'Rum Raisin'),
(1110, 'Ruslan Display', 'Ruslan Display'),
(1111, 'Russo One', 'Russo One'),
(1112, 'Ruthie', 'Ruthie'),
(1113, 'Rye', 'Rye'),
(1114, 'STIX Two Text', 'STIX Two Text'),
(1115, 'Sacramento', 'Sacramento'),
(1116, 'Sahitya', 'Sahitya'),
(1117, 'Sail', 'Sail'),
(1118, 'Saira', 'Saira'),
(1119, 'Saira Condensed', 'Saira Condensed'),
(1120, 'Saira Extra Condensed', 'Saira Extra Condensed'),
(1121, 'Saira Semi Condensed', 'Saira Semi Condensed'),
(1122, 'Saira Stencil One', 'Saira Stencil One'),
(1123, 'Salsa', 'Salsa'),
(1124, 'Sanchez', 'Sanchez'),
(1125, 'Sancreek', 'Sancreek'),
(1126, 'Sansita', 'Sansita'),
(1127, 'Sansita Swashed', 'Sansita Swashed'),
(1128, 'Sarabun', 'Sarabun'),
(1129, 'Sarala', 'Sarala'),
(1130, 'Sarina', 'Sarina'),
(1131, 'Sarpanch', 'Sarpanch'),
(1132, 'Sassy Frass', 'Sassy Frass'),
(1133, 'Satisfy', 'Satisfy'),
(1134, 'Sawarabi Gothic', 'Sawarabi Gothic'),
(1135, 'Sawarabi Mincho', 'Sawarabi Mincho'),
(1136, 'Scada', 'Scada'),
(1137, 'Scheherazade New', 'Scheherazade New'),
(1138, 'Schoolbell', 'Schoolbell'),
(1139, 'Scope One', 'Scope One'),
(1140, 'Seaweed Script', 'Seaweed Script'),
(1141, 'Secular One', 'Secular One'),
(1142, 'Sedgwick Ave', 'Sedgwick Ave'),
(1143, 'Sedgwick Ave Display', 'Sedgwick Ave Display'),
(1144, 'Sen', 'Sen'),
(1145, 'Sevillana', 'Sevillana'),
(1146, 'Seymour One', 'Seymour One'),
(1147, 'Shadows Into Light', 'Shadows Into Light'),
(1148, 'Shadows Into Light Two', 'Shadows Into Light Two'),
(1149, 'Shalimar', 'Shalimar'),
(1150, 'Shanti', 'Shanti'),
(1151, 'Share', 'Share'),
(1152, 'Share Tech', 'Share Tech'),
(1153, 'Share Tech Mono', 'Share Tech Mono'),
(1154, 'Shippori Antique', 'Shippori Antique'),
(1155, 'Shippori Antique B1', 'Shippori Antique B1'),
(1156, 'Shippori Mincho', 'Shippori Mincho'),
(1157, 'Shippori Mincho B1', 'Shippori Mincho B1'),
(1158, 'Shojumaru', 'Shojumaru'),
(1159, 'Short Stack', 'Short Stack'),
(1160, 'Shrikhand', 'Shrikhand'),
(1161, 'Siemreap', 'Siemreap'),
(1162, 'Sigmar One', 'Sigmar One'),
(1163, 'Signika', 'Signika'),
(1164, 'Signika Negative', 'Signika Negative'),
(1165, 'Simonetta', 'Simonetta'),
(1166, 'Single Day', 'Single Day'),
(1167, 'Sintony', 'Sintony'),
(1168, 'Sirin Stencil', 'Sirin Stencil'),
(1169, 'Six Caps', 'Six Caps'),
(1170, 'Skranji', 'Skranji'),
(1171, 'Slabo 13px', 'Slabo 13px'),
(1172, 'Slabo 27px', 'Slabo 27px'),
(1173, 'Slackey', 'Slackey'),
(1174, 'Smokum', 'Smokum'),
(1175, 'Smooch', 'Smooch'),
(1176, 'Smythe', 'Smythe'),
(1177, 'Sniglet', 'Sniglet'),
(1178, 'Snippet', 'Snippet'),
(1179, 'Snowburst One', 'Snowburst One'),
(1180, 'Sofadi One', 'Sofadi One'),
(1181, 'Sofia', 'Sofia'),
(1182, 'Solway', 'Solway'),
(1183, 'Song Myung', 'Song Myung'),
(1184, 'Sonsie One', 'Sonsie One'),
(1185, 'Sora', 'Sora'),
(1186, 'Sorts Mill Goudy', 'Sorts Mill Goudy'),
(1187, 'Source Code Pro', 'Source Code Pro'),
(1188, 'Source Sans 3', 'Source Sans 3'),
(1189, 'Source Sans Pro', 'Source Sans Pro'),
(1190, 'Source Serif Pro', 'Source Serif Pro'),
(1191, 'Space Grotesk', 'Space Grotesk'),
(1192, 'Space Mono', 'Space Mono'),
(1193, 'Spartan', 'Spartan'),
(1194, 'Special Elite', 'Special Elite'),
(1195, 'Spectral', 'Spectral'),
(1196, 'Spectral SC', 'Spectral SC'),
(1197, 'Spicy Rice', 'Spicy Rice'),
(1198, 'Spinnaker', 'Spinnaker'),
(1199, 'Spirax', 'Spirax'),
(1200, 'Squada One', 'Squada One'),
(1201, 'Sree Krushnadevaraya', 'Sree Krushnadevaraya'),
(1202, 'Sriracha', 'Sriracha'),
(1203, 'Srisakdi', 'Srisakdi'),
(1204, 'Staatliches', 'Staatliches'),
(1205, 'Stalemate', 'Stalemate'),
(1206, 'Stalinist One', 'Stalinist One'),
(1207, 'Stardos Stencil', 'Stardos Stencil'),
(1208, 'Stick', 'Stick'),
(1209, 'Stick No Bills', 'Stick No Bills'),
(1210, 'Stint Ultra Condensed', 'Stint Ultra Condensed'),
(1211, 'Stint Ultra Expanded', 'Stint Ultra Expanded'),
(1212, 'Stoke', 'Stoke'),
(1213, 'Strait', 'Strait'),
(1214, 'Style Script', 'Style Script'),
(1215, 'Stylish', 'Stylish'),
(1216, 'Sue Ellen Francisco', 'Sue Ellen Francisco'),
(1217, 'Suez One', 'Suez One'),
(1218, 'Sulphur Point', 'Sulphur Point'),
(1219, 'Sumana', 'Sumana'),
(1220, 'Sunflower', 'Sunflower'),
(1221, 'Sunshiney', 'Sunshiney'),
(1222, 'Supermercado One', 'Supermercado One'),
(1223, 'Sura', 'Sura'),
(1224, 'Suranna', 'Suranna'),
(1225, 'Suravaram', 'Suravaram'),
(1226, 'Suwannaphum', 'Suwannaphum'),
(1227, 'Swanky and Moo Moo', 'Swanky and Moo Moo'),
(1228, 'Syncopate', 'Syncopate'),
(1229, 'Syne', 'Syne'),
(1230, 'Syne Mono', 'Syne Mono'),
(1231, 'Syne Tactile', 'Syne Tactile'),
(1232, 'Tajawal', 'Tajawal'),
(1233, 'Tangerine', 'Tangerine'),
(1234, 'Taprom', 'Taprom'),
(1235, 'Tauri', 'Tauri'),
(1236, 'Taviraj', 'Taviraj'),
(1237, 'Teko', 'Teko'),
(1238, 'Telex', 'Telex'),
(1239, 'Tenali Ramakrishna', 'Tenali Ramakrishna'),
(1240, 'Tenor Sans', 'Tenor Sans'),
(1241, 'Text Me One', 'Text Me One'),
(1242, 'Texturina', 'Texturina'),
(1243, 'Thasadith', 'Thasadith'),
(1244, 'The Girl Next Door', 'The Girl Next Door'),
(1245, 'Tienne', 'Tienne'),
(1246, 'Tillana', 'Tillana'),
(1247, 'Timmana', 'Timmana'),
(1248, 'Tinos', 'Tinos'),
(1249, 'Titan One', 'Titan One'),
(1250, 'Titillium Web', 'Titillium Web'),
(1251, 'Tomorrow', 'Tomorrow'),
(1252, 'Tourney', 'Tourney'),
(1253, 'Trade Winds', 'Trade Winds'),
(1254, 'Train One', 'Train One'),
(1255, 'Trirong', 'Trirong'),
(1256, 'Trispace', 'Trispace'),
(1257, 'Trocchi', 'Trocchi'),
(1258, 'Trochut', 'Trochut'),
(1259, 'Truculenta', 'Truculenta'),
(1260, 'Trykker', 'Trykker'),
(1261, 'Tulpen One', 'Tulpen One'),
(1262, 'Turret Road', 'Turret Road'),
(1263, 'Ubuntu', 'Ubuntu'),
(1264, 'Ubuntu Condensed', 'Ubuntu Condensed'),
(1265, 'Ubuntu Mono', 'Ubuntu Mono'),
(1266, 'Uchen', 'Uchen'),
(1267, 'Ultra', 'Ultra'),
(1268, 'Uncial Antiqua', 'Uncial Antiqua'),
(1269, 'Underdog', 'Underdog'),
(1270, 'Unica One', 'Unica One'),
(1271, 'UnifrakturCook', 'UnifrakturCook'),
(1272, 'UnifrakturMaguntia', 'UnifrakturMaguntia'),
(1273, 'Unkempt', 'Unkempt'),
(1274, 'Unlock', 'Unlock'),
(1275, 'Unna', 'Unna'),
(1276, 'Urbanist', 'Urbanist'),
(1277, 'VT323', 'VT323'),
(1278, 'Vampiro One', 'Vampiro One'),
(1279, 'Varela', 'Varela'),
(1280, 'Varela Round', 'Varela Round'),
(1281, 'Varta', 'Varta'),
(1282, 'Vast Shadow', 'Vast Shadow'),
(1283, 'Vesper Libre', 'Vesper Libre'),
(1284, 'Viaoda Libre', 'Viaoda Libre'),
(1285, 'Vibes', 'Vibes'),
(1286, 'Vibur', 'Vibur'),
(1287, 'Vidaloka', 'Vidaloka'),
(1288, 'Viga', 'Viga'),
(1289, 'Voces', 'Voces'),
(1290, 'Volkhov', 'Volkhov'),
(1291, 'Vollkorn', 'Vollkorn'),
(1292, 'Vollkorn SC', 'Vollkorn SC'),
(1293, 'Voltaire', 'Voltaire'),
(1294, 'Waiting for the Sunrise', 'Waiting for the Sunrise'),
(1295, 'Wallpoet', 'Wallpoet'),
(1296, 'Walter Turncoat', 'Walter Turncoat'),
(1297, 'Warnes', 'Warnes'),
(1298, 'Wellfleet', 'Wellfleet'),
(1299, 'Wendy One', 'Wendy One'),
(1300, 'WindSong', 'WindSong'),
(1301, 'Wire One', 'Wire One'),
(1302, 'Work Sans', 'Work Sans'),
(1303, 'Xanh Mono', 'Xanh Mono'),
(1304, 'Yaldevi', 'Yaldevi'),
(1305, 'Yanone Kaffeesatz', 'Yanone Kaffeesatz'),
(1306, 'Yantramanav', 'Yantramanav'),
(1307, 'Yatra One', 'Yatra One'),
(1308, 'Yellowtail', 'Yellowtail'),
(1309, 'Yeon Sung', 'Yeon Sung'),
(1310, 'Yeseva One', 'Yeseva One'),
(1311, 'Yesteryear', 'Yesteryear'),
(1312, 'Yomogi', 'Yomogi'),
(1313, 'Yrsa', 'Yrsa'),
(1314, 'Yuji Boku', 'Yuji Boku'),
(1315, 'Yuji Mai', 'Yuji Mai'),
(1316, 'Yuji Syuku', 'Yuji Syuku'),
(1317, 'Yusei Magic', 'Yusei Magic'),
(1318, 'ZCOOL KuaiLe', 'ZCOOL KuaiLe'),
(1319, 'ZCOOL QingKe HuangYou', 'ZCOOL QingKe HuangYou'),
(1320, 'ZCOOL XiaoWei', 'ZCOOL XiaoWei'),
(1321, 'Zen Antique', 'Zen Antique'),
(1322, 'Zen Antique Soft', 'Zen Antique Soft'),
(1323, 'Zen Dots', 'Zen Dots'),
(1324, 'Zen Kaku Gothic Antique', 'Zen Kaku Gothic Antique'),
(1325, 'Zen Kaku Gothic New', 'Zen Kaku Gothic New'),
(1326, 'Zen Kurenaido', 'Zen Kurenaido'),
(1327, 'Zen Loop', 'Zen Loop'),
(1328, 'Zen Maru Gothic', 'Zen Maru Gothic'),
(1329, 'Zen Old Mincho', 'Zen Old Mincho'),
(1330, 'Zen Tokyo Zoo', 'Zen Tokyo Zoo'),
(1331, 'Zeyada', 'Zeyada'),
(1332, 'Zhi Mang Xing', 'Zhi Mang Xing'),
(1333, 'Zilla Slab', 'Zilla Slab'),
(1334, 'Zilla Slab Highlight', 'Zilla Slab Highlight');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(11) UNSIGNED NOT NULL,
  `contact` text NOT NULL,
  `email` tinytext NOT NULL,
  `opentime` text NOT NULL,
  `address` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `contact`, `email`, `opentime`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '01444744', 't@t.com', 'all time', 'this is test', '2021-12-18 17:00:44', '2022-01-05 12:59:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) UNSIGNED NOT NULL,
  `mobile` tinytext NOT NULL,
  `subject` tinytext NOT NULL,
  `message` text NOT NULL,
  `email` tinytext NOT NULL,
  `name` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `journeylists`
--

CREATE TABLE `journeylists` (
  `id` int(11) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `subtrip_id` int(11) UNSIGNED NOT NULL,
  `pick_location_id` int(11) UNSIGNED NOT NULL,
  `drop_location_id` int(11) UNSIGNED NOT NULL,
  `pick_stand_id` int(11) UNSIGNED NOT NULL,
  `drop_stand_id` int(11) UNSIGNED NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `phone` tinytext DEFAULT NULL,
  `journeydate` tinytext NOT NULL,
  `id_number` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `journeylists`
--

INSERT INTO `journeylists` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `pick_location_id`, `drop_location_id`, `pick_stand_id`, `drop_stand_id`, `first_name`, `last_name`, `phone`, `journeydate`, `id_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(107, 'TBHBAPU5WC', 1, 1, 1, 2, 20, 23, 'Test ', 'Custommer ssdsd', '11111111111', '2021-12-06', 'dfdfdf232323', '2021-12-06 17:24:44', '2021-12-06 17:24:44', NULL),
(108, 'TBHBAPU5WC', 1, 1, 1, 2, 20, 23, 'Md.', 'SHAKIB', '564161651651', '2021-12-06', 'sdfasdfwerwr224234', '2021-12-06 17:24:44', '2021-12-06 17:24:44', NULL),
(112, 'TBBNJ95AVZ', 1, 1, 1, 2, 20, 23, 'test', 'api', '12344444444', '', '12345sdsd', '2021-12-06 17:58:56', '2021-12-06 17:58:56', NULL),
(113, 'TBBNJ95AVZ', 1, 1, 1, 2, 20, 23, 'firstName1', 'Last tName1', '1231232112123 ', '', '4353fgfgf', '2021-12-06 17:58:56', '2021-12-06 17:58:56', NULL),
(114, 'TBBNJ95AVZ', 1, 1, 1, 2, 20, 23, 'first Name 2', 'Last Name 2', '5454545454545', '', '33343434Name 2', '2021-12-06 17:58:56', '2021-12-06 17:58:56', NULL),
(115, 'TB35PBKYOA', 4, 11, 1, 18, 13, 14, 'Test ', 'Custommer ssdsd', '11111111111', '2021-12-11', 'dfdfdf232323', '2021-12-11 19:53:00', '2021-12-11 19:53:00', NULL),
(116, 'TB35PBKYOA', 4, 11, 1, 18, 13, 14, 'sfadsf ', 'sdf sadf', '33333333333', '2021-12-11', '5858dfsdf5858fdf', '2021-12-11 19:53:00', '2021-12-11 19:53:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `localizes`
--

CREATE TABLE `localizes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `localizes`
--

INSERT INTO `localizes` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'English', 'English', '2021-11-11 00:38:11', '2021-11-11 00:38:11', NULL),
(3, 'French', 'French', '2021-11-11 00:38:44', '2021-11-11 00:38:44', NULL),
(6, 'Hindi', 'Hindi', '2021-11-11 00:41:04', '2021-11-11 00:41:04', NULL),
(7, 'Spanish', 'Spanish', '2021-11-11 00:41:19', '2021-11-11 00:41:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DHAKA', '2021-10-31 08:21:23', '2021-10-31 08:21:23', NULL),
(2, 'RANGPUR', '2021-10-31 08:21:37', '2021-11-03 01:38:16', NULL),
(3, 'Barishal', '2021-11-01 04:15:10', '2021-11-01 04:15:10', NULL),
(4, 'KHULNA', '2021-11-03 01:38:27', '2021-11-03 01:38:27', NULL),
(5, 'BOGRA', '2021-11-03 01:38:36', '2021-11-03 01:38:36', NULL),
(6, 'SOTIBARI', '2021-11-03 01:38:45', '2021-11-03 01:38:45', NULL),
(7, 'PIRGONJ', '2021-11-03 01:38:55', '2021-11-03 01:38:55', NULL),
(8, 'Tongi', '2021-11-05 23:35:14', '2021-11-05 23:35:14', NULL),
(9, 'Savar', '2021-11-05 23:35:23', '2021-11-05 23:35:23', NULL),
(10, 'Gazipur', '2021-11-05 23:35:35', '2021-11-05 23:35:35', NULL),
(11, 'SIRAJGANJ', '2021-11-05 23:35:48', '2021-11-05 23:35:48', NULL),
(12, 'GAIBANDHA', '2021-11-05 23:36:01', '2021-11-05 23:36:01', NULL),
(13, 'POLASHBARI', '2021-11-05 23:36:12', '2021-11-05 23:36:12', NULL),
(14, 'Noakhali', '2021-11-08 05:10:45', '2021-11-08 05:10:45', NULL),
(15, 'sonaimuri', '2021-11-08 05:11:08', '2021-11-08 05:11:08', NULL),
(16, 'chourasta', '2021-11-08 05:11:19', '2021-11-08 05:11:19', NULL),
(18, 'Khagrachori', '2021-11-15 12:14:16', '2021-11-15 12:14:16', NULL),
(19, 'Burimari', '2021-12-04 18:27:53', '2021-12-04 18:27:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maxtimes`
--

CREATE TABLE `maxtimes` (
  `id` int(11) UNSIGNED NOT NULL,
  `maxtime` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maxtimes`
--

INSERT INTO `maxtimes` (`id`, `maxtime`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2021-11-22 11:21:27', '2021-12-01 10:19:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(115, '2022-01-05-054858', 'Modules\\Inquiry\\Database\\Migrations\\Inquiry', 'default', 'Modules\\Inquiry', 1641372194, 1);

-- --------------------------------------------------------

--
-- Table structure for table `partialpaids`
--

CREATE TABLE `partialpaids` (
  `id` int(11) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `subtrip_id` int(11) UNSIGNED NOT NULL,
  `passanger_id` int(11) UNSIGNED NOT NULL,
  `paidamount` tinytext NOT NULL,
  `pay_type_id` int(11) UNSIGNED NOT NULL,
  `payment_detail` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partialpaids`
--

INSERT INTO `partialpaids` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `passanger_id`, `paidamount`, `pay_type_id`, `payment_detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(92, 'TBHBAPU5WC', 1, 1, 16, '1659', 1, '', '2021-12-06 17:24:44', '2021-12-06 17:24:44', NULL),
(93, 'TBIWQHZUAG', 1, 1, 30, '300', 1, 'this is test', '2021-12-06 17:57:48', '2021-12-06 17:57:48', NULL),
(94, 'TBBNJ95AVZ', 1, 1, 30, '300', 1, 'this is test', '2021-12-06 17:58:56', '2021-12-06 17:58:56', NULL),
(95, 'TB35PBKYOA', 4, 11, 16, '2073', 1, 'this is payment', '2021-12-11 19:53:00', '2021-12-11 19:53:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `paymethods`
--

CREATE TABLE `paymethods` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymethods`
--

INSERT INTO `paymethods` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cash', '1', '2021-11-13 05:21:08', '2021-11-13 05:36:42', NULL),
(2, 'Bank', '1', '2021-11-13 05:38:08', '2021-11-13 05:38:08', NULL),
(3, 'Eft', '1', '2021-11-13 05:38:17', '2021-11-13 17:38:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pickdrops`
--

CREATE TABLE `pickdrops` (
  `id` int(11) UNSIGNED NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `stand_id` int(11) UNSIGNED NOT NULL,
  `time` tinytext NOT NULL,
  `type` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickdrops`
--

INSERT INTO `pickdrops` (`id`, `trip_id`, `stand_id`, `time`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 2, 5, '10:00PM', 1, 'this is Test', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(8, 2, 1, '04:00AM', 0, 'this is Test', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(9, 3, 2, '08:00AM', 1, 'ghghghghgh', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(10, 3, 5, '10:00AM', 1, 'fghfgfg', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(11, 3, 8, '03:00PM', 0, 'fhghgh', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(12, 3, 10, '03:14PM', 0, 'fghgfhgh', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(13, 4, 1, '09:00PM', 1, 'this is Test', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(14, 4, 3, '01:14PM', 0, 'this is Test', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(16, 5, 2, '09:00AM', 1, 'this is Test', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(17, 5, 5, '02:10PM', 0, 'this is Test', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(18, 6, 2, '09:00PM', 1, 'this is Test', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(19, 6, 1, '03:15PM', 0, 'this is Test', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(20, 1, 5, '09:00PM', 1, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(21, 1, 2, '10:00PM', 1, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(22, 1, 3, '11:00PM', 1, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(23, 1, 6, '04:00AM', 0, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(24, 1, 7, '05:00AM', 0, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(25, 1, 8, '06:00AM', 0, 'this is Test', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(26, 7, 1, '09:51PM', 1, 'this is Test', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL),
(27, 7, 8, '10:00PM', 1, 'this is Test', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL),
(28, 7, 9, '03:00PM', 0, 'this is Test', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL),
(29, 7, 10, '04:00PM', 0, 'this is Test', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is privacy sdfdsf', 'Choose your destinations and dates to reserve a ticket test', '<p>a<sub>sdfdsaf asdf asdf asdf edterr</sub></p>\r\n', '2021-12-19 13:37:38', '2021-12-19 13:37:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Supper Admin', '1', '2021-11-11 04:25:19', '2021-11-11 16:37:29', NULL),
(2, 'Agent', '1', '2021-11-11 04:25:55', '2021-11-11 16:36:33', NULL),
(3, 'Passanger', '1', '2021-11-11 04:26:08', '2021-11-11 16:36:38', NULL),
(4, 'Accountent', '1', '2021-11-11 04:26:23', '2021-11-13 04:41:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedulefilters`
--

CREATE TABLE `schedulefilters` (
  `id` int(11) UNSIGNED NOT NULL,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `type` int(11) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedulefilters`
--

INSERT INTO `schedulefilters` (`id`, `start_time`, `end_time`, `type`, `detail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '09:00 AM', '06:00 PM', 1, '09:00 AM-06:00 PM', '2021-11-01 00:05:26', '2021-11-01 00:05:26', NULL),
(2, '10:40 AM', '11:00 PM', 1, '10:40 AM-11:00 PM', '2021-11-01 00:26:55', '2021-11-01 00:26:55', NULL),
(3, '02:25 AM', '03:27 AM', 0, '02:25 AM-03:27 AM', '2021-11-01 00:27:39', '2021-11-01 00:29:39', '2021-11-01 00:29:39'),
(4, '08:00 AM', '03:15 PM', 1, '08:00 AM-03:15 PM', '2021-11-01 00:30:15', '2021-11-13 03:47:08', NULL),
(5, '12:15 PM', '03:25 PM', 1, '12:15 PM-03:25 PM', '2021-11-01 00:30:31', '2021-11-01 04:36:17', '2021-11-01 04:36:17'),
(6, '09:40 AM', '11:00 PM', 1, '09:40 AM-11:00 PM', '2021-11-01 02:48:20', '2021-11-01 04:39:46', NULL),
(7, '03:15 PM', '10:00 PM', 0, '03:15 PM-10:00 PM', '2021-11-01 02:49:01', '2021-11-01 04:39:49', '2021-11-01 04:39:49'),
(8, '12:10 AM', '03:00 AM', 1, '12:10 AM-03:00 AM', '2021-11-01 04:36:47', '2021-11-01 04:37:28', '2021-11-01 04:37:28'),
(9, '12:10 AM', '03:00 AM', 0, '12:10 AM-03:00 AM', '2021-11-01 04:38:40', '2021-11-01 04:39:09', NULL),
(10, '12:10 AM', '11:00 PM', 0, '12:10 AM-11:00 PM', '2021-11-01 04:40:16', '2021-11-01 04:40:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) UNSIGNED NOT NULL,
  `start_time` tinytext NOT NULL,
  `end_time` tinytext NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `start_time`, `end_time`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '10:15 AM', '02:30 PM', '', '2021-10-31 23:34:25', '2021-10-31 23:34:25', NULL),
(2, '03:40 PM', '02:40 AM', '', '2021-11-02 00:40:58', '2021-11-02 00:40:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_five_app`
--

CREATE TABLE `section_five_app` (
  `id` int(11) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `button_one_status` int(11) NOT NULL,
  `button_one_link` text NOT NULL,
  `button_two_status` int(11) NOT NULL,
  `button_two_link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_five_app`
--

INSERT INTO `section_five_app` (`id`, `image`, `title`, `sub_title`, `button_one_status`, `button_one_link`, `button_two_status`, `button_two_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/frontend/1636358640_cf7e62d1660f704046a5.png', 'Have you tried ourmobile app? ', 'World’s leading tour and travels Booking website,Over30,000 packages worldwide. Book travel packages andenjoy your holidays with distinctive experience', 1, 'https://www.apple.com/app-store/', 0, 'https://play.google.com/store?hl=en_US&gl=US', '2021-11-08 14:04:00', '2021-11-08 14:04:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_four_comment`
--

CREATE TABLE `section_four_comment` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_four_comment`
--

INSERT INTO `section_four_comment` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Customer Testimonials rr', 'Read what our customers have to say about our fleet and services. ter', '2021-11-07 11:50:18', '2021-11-07 11:50:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_four_detail`
--

CREATE TABLE `section_four_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `image` text DEFAULT NULL,
  `person_name` text NOT NULL,
  `person_detail` text NOT NULL,
  `serial` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_four_detail`
--

INSERT INTO `section_four_detail` (`id`, `description`, `image`, `person_name`, `person_detail`, `serial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, '<p>Accusamus qui nobis qui iure quia minus quod. Vero deserunt mollitia ad soluta dolor sint sed. Libero amet consequuntur eum earum id numquam. Aut nisi sed aspernatur est sit quo occaecati. Nihil dignissimos enim deleniti qui. Velit quam molestias ipsam consequatur. Tempore ut sequi quia libero neque inventore. Nulla quod sint numquam non sed. Est fugit maiores laboriosam ea dolorum delectus. Et et accusantium repellendus placeat omnis. Ipsam non sunt neque in molestiae aut. Consectetur illo nihil velit cumque voluptas ut. Asperiores et quos est dolores excepturi qui reiciendis. Ex cumque velit nihil maxime soluta. Unde sit quam itaque necessitatibus.</p>\r\n', 'image/frontend/1636358940_9ca7213f2559a9169b5b.jpg', 'Carter', 'fugiat voluptas ducimus', 6, '2021-11-08 14:09:00', '2021-11-08 14:09:00', NULL),
(12, '<p>Fuga odio reiciendis veritatis assumenda perspiciatis. Voluptatum enim similique aut qui. Iste atque dolorem dolorem illo. Non nisi enim aut molestiae qui eius. Voluptatem quidem voluptatum earum mollitia at. Totam repellat quae tempore. Aspernatur sit dolor doloribus ullam deleniti eligendi assumenda vitae. Voluptatem commodi dolor molestiae explicabo. Rerum laudantium assumenda voluptatibus consequatur officiis ipsam. Quidem id et tempore sed sunt commodi iste. Consequuntur ratione suscipit voluptatem voluptatem possimus aspernatur. Incidunt quis esse ut rerum. Est recusandae repudiandae ducimus deleniti. Repudiandae reiciendis quod voluptas tempora est blanditiis. Dicta omnis quae amet dolor omnis. Repellendus perspiciatis perspiciatis libero autem vero quaerat. Magni temporibus labore aut explicabo hic maiores neque.</p>\r\n', 'image/frontend/1636358952_1e9cb4cfa7f2725ab1e3.jpg', 'Helen', 'ad aut molestiae', 5, '2021-11-08 14:09:12', '2021-11-08 14:09:12', NULL),
(13, '<p>Eum et beatae laudantium blanditiis magnam expedita placeat. Commodi et a odio rem dolorem. Esse libero possimus vel excepturi libero repellendus ab. Omnis consectetur et sed at tempore ipsa hic. Tempore neque consectetur incidunt non molestiae dolorem. Dolorem sed pariatur sunt. Aliquid quis neque quam. Labore ut nam dolores sint. Vitae hic nihil adipisci animi. Ipsa voluptatem est enim exercitationem. Aut ut delectus est rerum. Sed vitae fugit et enim consequatur. In eos eos sunt et. Enim aliquam consequatur non laudantium qui impedit. Debitis omnis maxime beatae eos. Dignissimos culpa est aut aut. Sunt alias quos est et quis ducimus ut. Possimus repellat nisi necessitatibus voluptatem placeat architecto totam.</p>\r\n', 'image/frontend/1636358963_9e95214f5e01918a33f0.jpg', 'Jordyn', 'ipsum qui distinctio', 7, '2021-11-08 14:09:23', '2021-11-08 14:09:23', NULL),
(14, '<p>Quo ut esse perspiciatis impedit corrupti ut. Suscipit aliquid illum aliquam officiis eos soluta. Ad voluptas ut blanditiis asperiores ad perspiciatis. Iste qui temporibus et omnis. Qui at autem illo ipsa omnis. Optio quae porro dolores magnam at. Numquam sunt voluptatem ut non. Est veniam assumenda minus id voluptatem. Voluptatem repellendus reprehenderit magnam similique ipsam porro tempore cum. Veritatis dolorem architecto quo quod quas. Ipsum aliquam ea amet non aspernatur. Rerum quia eum quae ex delectus. Et similique optio dolor dicta eum quia. Aspernatur laudantium dolores labore excepturi mollitia. Incidunt numquam rerum rerum dolor. Deserunt labore minima eius sit consequatur possimus. Harum rerum aut pariatur soluta.</p>\r\n', 'image/frontend/1636358974_ab4bb475a9bd37e3aafe.jpg', 'Jennie', 'temporibus ad earum', 6, '2021-11-08 14:09:34', '2021-11-08 14:09:34', NULL),
(15, '<p>Tempore voluptatum voluptates aut assumenda quae voluptas vitae. Autem rerum ea earum sint ad voluptatem quibusdam. Tempore aut hic dolor ut quo. Possimus rerum fuga velit sed ducimus. Saepe adipisci quia illum recusandae officia. Fugit deserunt corporis magni fugiat ab. Harum alias officiis qui facilis alias aut autem. Omnis ex est impedit. Ea saepe non est omnis fuga quia. Esse distinctio impedit et veritatis qui quos. Quasi aut aut alias alias voluptatem. Debitis corporis illum non excepturi numquam dolores et laudantium. Corrupti et a perferendis ea fugiat aut voluptatem eos. Similique vitae et amet veniam tenetur quaerat provident. Eligendi est laboriosam et et quia velit qui et. Incidunt odit adipisci consectetur quibusdam et laboriosam pariatur. Sequi consequatur ut quas rerum nulla est earum molestiae.</p>\r\n', 'image/frontend/1636358985_abe14860e7ad87f05d9f.jpg', 'Martin', 'ipsa totam iure', 2, '2021-11-08 14:09:45', '2021-11-08 14:09:45', NULL),
(16, '<p>Eius eius qui quod rem et qui modi. Soluta reprehenderit aut nobis ullam. Debitis nisi quam similique qui modi adipisci illo reiciendis. Nihil totam incidunt veritatis quis ducimus dolorum earum. Et laudantium consectetur dolore tempora eum dolores. Blanditiis impedit officia quisquam molestias. Ducimus suscipit explicabo vel sed ut. Voluptatem omnis corporis numquam et qui voluptas cum. Esse debitis aliquid esse libero quae qui. Cupiditate facere enim ipsum quibusdam vel perferendis. Quod corrupti cum quis eum fugiat fuga. Labore quaerat nihil et a illo blanditiis. Id in id nesciunt deserunt voluptatem alias et ut. Laudantium rerum voluptatum perspiciatis atque. Illo ea molestiae ipsa debitis corrupti. Et nihil perferendis aliquid excepturi quia voluptatibus eligendi occaecati. Culpa consequatur quia laboriosam.</p>\r\n', 'image/frontend/1636359003_a8c9aa966468c37cbde9.jpg', 'Oren', 'nulla molestias et', 5, '2021-11-08 14:10:03', '2021-11-08 14:10:03', NULL),
(17, '<p>Aut ea non voluptas natus. Enim doloribus ipsam est autem similique. Tenetur aut saepe aut magni deleniti. Rerum corporis quos nemo. Eos aut sit quae. Commodi qui tenetur officiis autem et est. Est veniam corporis tenetur sapiente iste odit. Accusantium aut est in laborum ratione maxime sapiente. Nihil numquam inventore officiis eligendi temporibus modi minima. Omnis in aut nam eligendi qui eum optio. Tenetur dicta aut cum nostrum. Voluptas numquam quam et eum tenetur. Mollitia est voluptatum nobis omnis exercitationem inventore. Dicta similique et in impedit. Aut ut perferendis consequatur consequatur deleniti enim. Unde consectetur nemo dolorum nihil. Et ullam maxime officiis fuga totam non voluptatum. Est dolorem quibusdam neque tempore reprehenderit et veniam. Molestiae sed consequatur id ut. Placeat illum ut harum amet.</p>\r\n', 'image/frontend/1636359017_270bda0d1b882e6c94c3.jpg', 'Dawson', 'ullam quo praesentium', 6, '2021-11-08 14:10:17', '2021-11-08 14:10:17', NULL),
(18, '<p>Et nobis voluptatibus possimus molestiae. Natus illum at ut necessitatibus nostrum. Culpa aut voluptas et eos tenetur. Et quia inventore minus dolorum. Excepturi quos temporibus provident neque omnis ullam. Sint sit est quia ea qui. Blanditiis optio voluptatem exercitationem. Et ea temporibus aut praesentium. Deserunt quia consequatur excepturi earum earum possimus quia eligendi. Ipsam rerum numquam velit non quas voluptatem aut. Aliquid praesentium consectetur voluptatem cumque quisquam cupiditate. Dicta vero adipisci rerum ut velit voluptatum suscipit. Tempora ducimus ducimus ad quo maiores aliquam. Et molestiae doloribus natus laudantium asperiores et. Quae mollitia quo facilis excepturi eveniet mollitia. Aliquid illo soluta doloribus nostrum praesentium sit. Optio incidunt est doloribus vel ducimus. Aut in ipsam dignissimos praesentium sed voluptas ut. Omnis veritatis consequuntur debitis itaque. In quia qui vitae totam nostrum.</p>\r\n', 'image/frontend/1636359027_9b5b49d86800f1198415.jpg', 'Colton', 'error enim id', 5, '2021-11-08 14:10:27', '2021-11-08 14:10:27', NULL),
(19, '<p>Tenetur delectus atque repellendus dolor sunt et exercitationem. Aperiam eos ut ea molestias neque qui nemo. Quia magni quo est repellat numquam. Voluptas tenetur et repudiandae dolorem doloribus officia exercitationem. Praesentium eligendi necessitatibus facere animi perspiciatis. Aut animi id facere iure ullam. Ab error officiis maxime. Repellat repudiandae adipisci eligendi qui quidem aut modi. Et voluptatibus saepe delectus quis. Vel ipsam laboriosam voluptas non sunt et nihil. Quibusdam nisi aut esse ut. Accusamus quae nam dolores rerum. Voluptatem pariatur corrupti nobis possimus ad. Dolorem nulla autem nihil sed. Accusamus quisquam praesentium at aut et. Dolor vero dignissimos id aliquam dolor labore. Porro aspernatur numquam sed. Hic adipisci molestiae impedit illo voluptatem est qui. Blanditiis est officiis odit voluptates atque. Libero qui magnam dolores adipisci facere.</p>\r\n', 'image/frontend/1636359044_3e3e6bbb2dc3d1b5c4bf.jpg', 'Leland', 'autem eum facilis', 3, '2021-11-08 14:10:44', '2021-11-08 14:10:44', NULL),
(21, '<p><strong>dasdas asd asd asd asd&nbsp;</strong></p>\r\n', 'image/frontend/1636359055_4f67d4ef2dad007717f8.jpg', 'test', 'sdfafdf', 19, '2021-11-08 14:10:55', '2021-11-08 14:10:55', NULL),
(22, '<p>sdafsd sadf asdf asd sad fasdf&nbsp;</p>\r\n\r\n<p>asdasd</p>\r\n\r\n<p>asdas</p>\r\n', 'image/frontend/1636262185_93d21cd7c93d1408d2db.png', 'test', 'sdfafdf', 13, '2021-11-07 11:16:25', '2021-11-07 11:16:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_one_home`
--

CREATE TABLE `section_one_home` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `button_text` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_one_home`
--

INSERT INTO `section_one_home` (`id`, `title`, `sub_title`, `button_text`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'BOOK YOUR BUS TICKET ', 'Choose Your Destinations And Dates To Reserve A Ticket ', 'Book', 'image/frontend/sectionone.jpg', '2021-11-06 15:32:48', '2021-11-06 15:32:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_seven_subscrib`
--

CREATE TABLE `section_seven_subscrib` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_seven_subscrib`
--

INSERT INTO `section_seven_subscrib` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is done', 'this is sub title', 'image/frontend/1636358097_d8bab6ab02b7120d670b.png', '2021-11-08 13:54:57', '2021-11-08 13:54:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_six_blog`
--

CREATE TABLE `section_six_blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_six_blog`
--

INSERT INTO `section_six_blog` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Travel Blog', 'Book cheap Trio on your favourite Buses', '2021-11-07 13:06:43', '2021-11-07 13:06:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_three_heading`
--

CREATE TABLE `section_three_heading` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_three_heading`
--

INSERT INTO `section_three_heading` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is sub trip ', 'this is test ', '2021-11-07 11:56:30', '2021-11-07 11:56:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_two_detail`
--

CREATE TABLE `section_two_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `button_text` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_two_detail`
--

INSERT INTO `section_two_detail` (`id`, `title`, `description`, `button_text`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Atque et error magnam velit.', '<p>Et ut provident aut deleniti sapiente exercitationem dolorem. Quia placeat provident aut sit est rerum. At facere quasi quae atque. Saepe placeat consequuntur rerum molestiae voluptas molestias. Illum vitae quis totam quis. Rem quibusdam dolorem esse eum et. Ut cum consectetur natus rerum earum sapiente illum. Qui suscipit corporis dolores error quae. In eveniet aut et qui ut. Illo et numquam dicta. Molestiae enim alias delectus fugiat et ad. Provident laborum sit eos inventore esse quis. Eum quis repellendus nihil. Consequatur impedit iusto voluptates minima sunt rerum assumenda. Dolor est quod sint deserunt ipsa quaerat. Doloribus sit odit est odio quae in. Incidunt deleniti consequuntur quae explicabo cum dolorem perspiciatis explicabo. Ex eos dolor accusamus itaque sed ducimus rem dolorum. Maiores sint tenetur nobis et eos tempora pariatur.</p>\r\n', 'Read More', 'image/frontend/1636360333_14349fe104fac36b4cc0.jpg', '2021-11-16 14:00:31', '2021-11-16 14:00:31', NULL),
(5, 'Aperiam est quibusdam nulla.', '<p>Id ut et aperiam facere voluptas. Tempore molestiae libero vero unde ut ea doloribus. Corporis fuga molestias non at voluptates doloribus ut aliquam. Et ut natus autem aliquam. Asperiores repudiandae consequuntur sunt labore. Consequuntur enim est enim et aut. Esse sit rerum impedit pariatur. Dolores mollitia repudiandae quisquam repellendus optio odio. Perspiciatis molestias in assumenda nam. Reiciendis consequatur labore dolores ullam ad eum placeat hic. Non et incidunt odio molestias ea. Minima sit molestiae est labore. Dolores est modi expedita ut magnam sunt voluptatem. Quibusdam qui sint occaecati et. Explicabo beatae illo asperiores non corporis tenetur ullam expedita. Eum aut omnis inventore rem esse.</p>\r\n', 'Read More', 'image/frontend/1636362302_ee677810ff351c92d08d.jpg', '2021-11-16 14:00:42', '2021-11-16 14:00:42', NULL),
(6, 'Tempore nemo id cum sequi laborum.', '<p>Et vel qui voluptas accusantium. Recusandae voluptas quis ut ab. Omnis aut voluptatem et a non sint aut. Id qui tempora cupiditate illo. Harum sed quibusdam necessitatibus dicta nihil fugiat. Qui doloremque vero maiores qui consequatur cum iusto consectetur. Perferendis numquam nostrum tempora itaque eligendi occaecati quisquam sint. Ipsa sed commodi qui autem. Quam similique placeat dolorem sequi inventore nemo. In consequatur sed molestiae architecto perferendis ut. Officia ut eum aut omnis voluptatibus consequuntur excepturi natus. Veritatis et quos ullam tempora vitae odit voluptate maiores. Dolor deleniti voluptatum porro et corporis vitae. Quasi vero sit cupiditate accusantium. Et ea incidunt dolore culpa quia. Et est dolorem voluptas excepturi consequatur tempora. Sit quia unde ab voluptatem atque minus magni. Adipisci consequuntur atque sint reprehenderit. Doloremque quis quidem et ad. Et perferendis voluptatum impedit quaerat adipisci at.</p>\r\n', 'Read More', 'image/frontend/1636362322_d9476027a8aacb57fcd7.jpg', '2021-11-16 14:00:56', '2021-11-16 14:00:56', NULL),
(7, 'Perspiciatis ut omnis quod ad molestias ut voluptatem quo.', '<p>Architecto dicta eveniet et beatae accusantium doloribus laudantium ut. Eius et quidem qui officiis soluta. Voluptatum incidunt dolores a placeat amet et harum. Beatae tenetur eos reprehenderit vel. Laudantium qui nostrum aliquid incidunt. Repudiandae rerum at dignissimos error reprehenderit odit. Quidem consequatur consectetur culpa vero. Laboriosam perferendis et voluptates exercitationem numquam dolorem doloremque. Voluptas magnam minus delectus perspiciatis et occaecati. Sed temporibus consectetur eum quisquam temporibus quo quis. Fugit quas ex consequatur soluta sed velit. Odit facilis beatae voluptatibus culpa placeat doloribus. Aut pariatur omnis a delectus et. Quia porro necessitatibus ut in. Rem occaecati ab ea voluptas.</p>\r\n', 'Read More', 'https://via.placeholder.com/640x420.png/0088cc?text=1+modi', '2021-11-16 14:01:08', '2021-11-16 14:01:08', NULL),
(8, 'Dolores totam sit nesciunt consequatur.', 'Ipsam quas necessitatibus ut ipsa necessitatibus esse optio fugiat. Velit dolorum temporibus enim. Sit beatae quasi vitae.\n\nPerspiciatis ut iure dolorem. Temporibus impedit voluptate quae fugit consequatur. Cum cupiditate soluta sunt laudantium omnis quaerat quod. Occaecati dicta ducimus voluptas et.\n\nOptio commodi commodi dolorum sint est in accusamus. Expedita a voluptate quas dolorem nam earum voluptatem rerum. Aut reiciendis minima commodi qui quibusdam.\n\nVel deleniti vitae molestiae ad repellendus ratione. Dignissimos amet atque nemo molestiae qui. Qui voluptatem omnis rerum suscipit. Maxime minima accusantium rerum.\n\nOmnis perferendis hic natus dolore dicta dolores. Ex velit rerum qui. Vel aut suscipit porro tenetur est aspernatur. Consequatur rerum nihil perferendis reiciendis aut aut hic.', 'ut', 'https://via.placeholder.com/640x420.png/0033ff?text=1+optio', '2021-09-04 16:42:49', '2021-09-04 16:42:49', NULL),
(9, 'Consequatur aut quasi suscipit quis quaerat sit consequatur hic.', 'Quaerat unde recusandae nostrum numquam. Vel quaerat culpa reprehenderit et omnis enim accusamus.\n\nEa consequatur illo ut dolorem sunt nihil accusantium. Nam commodi eum accusamus. Adipisci praesentium voluptatem quasi sint et quaerat quo.\n\nSint id nisi et ad nostrum sit et. Perspiciatis aut aut qui asperiores vel. Est eligendi unde est et.\n\nQuo sed aliquam corporis amet. Soluta consectetur alias deserunt quo. Qui ad nobis natus. Sint dolorum molestiae inventore tempora qui veritatis occaecati.\n\nQuasi sapiente repudiandae adipisci. Et enim et rerum ut officia rerum. Dolores perspiciatis iste sunt non ab eum necessitatibus suscipit.', 'adipisci', 'https://via.placeholder.com/640x420.png/0099dd?text=1+ducimus', '2021-09-04 16:42:49', '2021-09-04 16:42:49', NULL),
(12, 'sdf sdf sf', '<p><strong>sdf sdfsfdf sdf</strong></p>\r\n\r\n<p>gsdgdsf</p>\r\n\r\n<p><strong>asfasfasfasfs asfasfas fasf as fas fsafasfasfasf</strong></p>\r\n', 'sdf sdf sf', 'image/frontend/1636204056_20a9db95db1c778518d7.png', '2021-11-06 19:24:05', '2021-11-06 19:24:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_two_work_flow`
--

CREATE TABLE `section_two_work_flow` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section_two_work_flow`
--

INSERT INTO `section_two_work_flow` (`id`, `title`, `sub_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'How It Works ', 'Book Cheap Trip On Your Favourite Buses ', '2021-11-06 16:39:55', '2021-11-06 16:39:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedias`
--

CREATE TABLE `socialmedias` (
  `id` int(11) UNSIGNED NOT NULL,
  `image_path` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socialmedias`
--

INSERT INTO `socialmedias` (`id`, `image_path`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'image/social/1639817584_7c1ecff93b1826e3239d.jpg', 'www.test.com', '2021-12-18 14:53:04', '2021-12-19 15:57:24', NULL),
(2, 'image/social/1639820508_55bc0e96761e5023048d.jpg', 'www.test.com.xyz', '2021-12-18 14:53:54', '2021-12-18 15:41:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stands`
--

CREATE TABLE `stands` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stands`
--

INSERT INTO `stands` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dorshona', '2021-10-31 08:08:59', '2021-11-05 23:39:21', NULL),
(2, 'uttora', '2021-10-31 08:11:30', '2021-10-31 08:11:30', NULL),
(3, 'ajompur', '2021-10-31 08:11:46', '2021-10-31 08:24:46', NULL),
(4, 'Abdullahpur', '2021-11-02 03:42:11', '2021-11-05 23:38:05', NULL),
(5, 'Mohakhali', '2021-11-05 23:37:41', '2021-11-05 23:37:41', NULL),
(6, 'dhaperhat', '2021-11-05 23:39:44', '2021-11-05 23:40:02', NULL),
(7, 'mordarnmore', '2021-11-05 23:40:18', '2021-11-05 23:40:18', NULL),
(8, 'Kamarpara', '2021-11-05 23:40:33', '2021-11-05 23:40:33', NULL),
(9, 'Medicalemore', '2021-11-05 23:40:49', '2021-11-05 23:40:49', NULL),
(10, 'Terminal', '2021-11-05 23:41:06', '2021-11-05 23:41:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stuffassigns`
--

CREATE TABLE `stuffassigns` (
  `id` int(11) UNSIGNED NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `employee_id` int(11) UNSIGNED NOT NULL,
  `employee_type` tinytext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stuffassigns`
--

INSERT INTO `stuffassigns` (`id`, `trip_id`, `employee_id`, `employee_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2, 7, '1', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(5, 2, 5, '2', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(6, 3, 4, '1', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(7, 3, 2, '2', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(8, 4, 1, '1', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(9, 4, 2, '2', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(13, 5, 1, '1', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(14, 5, 4, '1', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(15, 5, 2, '2', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(16, 6, 1, '1', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(17, 6, 5, '2', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(35, 1, 1, '1', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(36, 1, 4, '1', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(37, 1, 2, '2', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(38, 1, 5, '2', '2021-12-01 15:45:33', '2021-12-01 15:45:33', NULL),
(39, 7, 1, '1', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL),
(40, 7, 5, '2', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subtrips`
--

CREATE TABLE `subtrips` (
  `id` int(11) UNSIGNED NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `pick_location_id` int(11) UNSIGNED NOT NULL,
  `drop_location_id` int(11) UNSIGNED NOT NULL,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext DEFAULT NULL,
  `special_fair` tinytext DEFAULT NULL,
  `type` tinytext NOT NULL,
  `show` tinytext DEFAULT NULL,
  `imglocation` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subtrips`
--

INSERT INTO `subtrips` (`id`, `trip_id`, `pick_location_id`, `drop_location_id`, `adult_fair`, `child_fair`, `special_fair`, `type`, `show`, `imglocation`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 2, '800', '300', '300', 'main', NULL, NULL, '1', '2021-11-05 23:46:18', '2021-12-01 15:45:33', NULL),
(2, 1, 1, 5, '750', '200', '200', 'subtrip', '1', 'image/subtrip/1636360616_548ef6dffad0871131dd.jpg', '1', '2021-11-05 23:46:47', '2021-12-01 15:45:33', NULL),
(3, 1, 1, 11, '750', '210', '200', 'subtrip', '1', 'image/subtrip/1636360627_9bff5d619d3096dd1f03.jpg', '1', '2021-11-05 23:47:18', '2021-12-01 15:45:33', NULL),
(4, 2, 1, 2, '1000', '', '', 'main', NULL, NULL, '1', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(5, 2, 1, 8, '1000', '', '', 'subtrip', '1', 'image/subtrip/1636360653_bdb1d378a7462b34cd7b.jpg', '1', '2021-11-05 23:50:43', '2021-11-08 02:37:33', NULL),
(6, 2, 1, 12, '1000', '', '', 'subtrip', '1', 'image/subtrip/1636360664_b55a66d4b1cdfcba2b03.jpg', '1', '2021-11-05 23:50:58', '2021-11-08 02:37:44', NULL),
(7, 2, 1, 7, '1000', '', '', 'subtrip', '1', 'image/subtrip/1636360674_aea77d5e89b8560b7e5f.jpg', '1', '2021-11-05 23:51:19', '2021-11-08 02:37:54', NULL),
(8, 3, 1, 14, '1200', '500', '600', 'main', NULL, NULL, '1', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(9, 3, 1, 15, '1000', '400', '350', 'subtrip', '1', 'image/subtrip/1636370256_7a8800f392cb2e082bb5.jpg', '1', '2021-11-08 05:17:36', '2021-11-08 05:17:36', NULL),
(10, 3, 1, 16, '500', '', '', 'subtrip', '0', NULL, '1', '2021-11-08 05:17:56', '2021-11-08 05:17:56', NULL),
(11, 4, 1, 18, '1000', '', '', 'main', NULL, NULL, '1', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(12, 5, 1, 18, '800', '', '', 'main', NULL, NULL, '1', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(13, 6, 1, 2, '1000', '', '', 'main', NULL, NULL, '1', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(14, 4, 1, 19, '500', '', '', 'subtrip', '0', NULL, '1', '2021-12-04 18:31:14', '2021-12-04 18:31:14', NULL),
(15, 7, 2, 18, '850', '500', '300', 'main', NULL, NULL, '1', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `tax_reg` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `tax_reg`, `status`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gst', 'xxrf', '0', '1.6', '2021-11-01 06:32:01', '2021-11-08 05:25:06', NULL),
(2, '1ssx', 'asdawd', '0', '1.26', '2021-11-01 06:43:05', '2021-11-01 06:54:53', NULL),
(3, 'asdasd wd', 'asdwdqwd', '0', '15', '2021-11-01 06:43:19', '2021-11-01 06:44:16', '2021-11-01 06:44:16'),
(4, 'Gst', 'xxrf', '1', '1.69', '2021-11-02 00:17:25', '2021-11-02 00:17:25', NULL),
(5, 'oil', '4567', '1', '2', '2021-11-08 04:36:36', '2021-11-08 04:36:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` tinytext NOT NULL,
  `sub_title` tinytext NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `sub_title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'this is term and condi', 'Book Cheap Trip On Your Favourite Buses', '<p><span style=\"color:#2ecc71\">condetion test hello ma</span>n dasfsdfsdfsdf&nbsp;</p>\r\n\r\n<p>sdfsdf</p>\r\n\r\n<p>sdfdsf</p>\r\n', '2021-12-19 13:58:56', '2021-12-19 13:59:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) UNSIGNED NOT NULL,
  `booking_id` varchar(100) NOT NULL,
  `trip_id` int(11) UNSIGNED NOT NULL,
  `subtrip_id` int(11) UNSIGNED NOT NULL,
  `passanger_id` int(11) UNSIGNED NOT NULL,
  `pick_location_id` int(11) UNSIGNED NOT NULL,
  `drop_location_id` int(11) UNSIGNED NOT NULL,
  `pick_stand_id` int(11) UNSIGNED NOT NULL,
  `drop_stand_id` int(11) UNSIGNED NOT NULL,
  `price` tinytext NOT NULL,
  `discount` tinytext DEFAULT NULL,
  `totaltax` tinytext DEFAULT NULL,
  `paidamount` tinytext NOT NULL,
  `offerer` tinytext DEFAULT NULL,
  `adult` tinytext DEFAULT NULL,
  `chield` tinytext DEFAULT NULL,
  `special` tinytext DEFAULT NULL,
  `seatnumber` tinytext NOT NULL,
  `totalseat` tinytext NOT NULL,
  `refund` tinytext DEFAULT NULL,
  `bookby_user_id` int(11) UNSIGNED NOT NULL,
  `bookby_user_type` tinytext DEFAULT NULL,
  `journeydata` datetime NOT NULL,
  `pay_type_id` int(11) UNSIGNED NOT NULL,
  `payment_status` tinytext NOT NULL,
  `vehicle_id` int(11) UNSIGNED NOT NULL,
  `payment_detail` tinytext DEFAULT NULL,
  `cancel_status` tinytext DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `booking_id`, `trip_id`, `subtrip_id`, `passanger_id`, `pick_location_id`, `drop_location_id`, `pick_stand_id`, `drop_stand_id`, `price`, `discount`, `totaltax`, `paidamount`, `offerer`, `adult`, `chield`, `special`, `seatnumber`, `totalseat`, `refund`, `bookby_user_id`, `bookby_user_type`, `journeydata`, `pay_type_id`, `payment_status`, `vehicle_id`, `payment_detail`, `cancel_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(86, 'TBHBAPU5WC', 1, 1, 16, 1, 2, 20, 23, '1600', '0', '59', '1659', '0', '2', '0', '0', 'A1,A2', '2', '0', 1, 'Supper Admin', '2021-12-06 00:00:00', 1, 'paid', 1, '', '0', '2021-12-06 17:24:44', '2021-12-06 17:24:44', NULL),
(93, 'TBBNJ95AVZ', 1, 1, 30, 1, 2, 20, 23, '800', '50', '10', '820', '0', '1', '0', '0', 'D1', '1', '0', 30, 'passanger', '2021-12-05 00:00:00', 1, 'partial', 1, 'this is test', '0', '2021-12-06 17:58:56', '2021-12-06 17:58:56', NULL),
(94, 'TB35PBKYOA', 4, 11, 16, 1, 18, 13, 14, '2000', '0', '73', '2073', '0', '2', '0', '0', 'C2,C3', '2', '0', 1, 'Supper Admin', '2021-12-11 00:00:00', 1, 'paid', 1, 'this is payment', '0', '2021-12-11 19:53:00', '2021-12-11 19:53:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` int(11) UNSIGNED NOT NULL,
  `fleet_id` int(11) UNSIGNED NOT NULL,
  `schedule_id` int(11) UNSIGNED NOT NULL,
  `pick_location_id` int(11) UNSIGNED NOT NULL,
  `drop_location_id` int(11) UNSIGNED NOT NULL,
  `vehicle_id` int(11) UNSIGNED NOT NULL,
  `distance` tinytext DEFAULT NULL,
  `startdate` datetime NOT NULL,
  `journey_hour` tinytext DEFAULT NULL,
  `child_seat` tinytext DEFAULT NULL,
  `special_seat` tinytext NOT NULL,
  `adult_fair` tinytext NOT NULL,
  `child_fair` tinytext DEFAULT NULL,
  `special_fair` tinytext DEFAULT NULL,
  `weekend` tinytext DEFAULT NULL,
  `company_name` tinytext NOT NULL,
  `stoppage` text DEFAULT NULL,
  `facility` text DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `fleet_id`, `schedule_id`, `pick_location_id`, `drop_location_id`, `vehicle_id`, `distance`, `startdate`, `journey_hour`, `child_seat`, `special_seat`, `adult_fair`, `child_fair`, `special_fair`, `weekend`, `company_name`, `stoppage`, `facility`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 2, 1, '350', '2021-11-06 00:00:00', '9', '2', '2', '800', '300', '300', '5', 'Hanif', '5,6,8,9', '1,2', '1', '2021-11-05 23:46:18', '2021-12-01 15:45:33', NULL),
(2, 2, 2, 1, 2, 2, '350', '2021-11-07 00:00:00', '9', '', '', '1000', '', '', '6', 'ENA', '5,6,7,8,9,10,11', '1', '1', '2021-11-05 23:50:18', '2021-11-05 23:50:18', NULL),
(3, 1, 1, 1, 14, 1, '200', '2021-11-08 00:00:00', '6', '1', '1', '1200', '500', '600', '5', 'Hundai', '8,9,10', '1,2', '1', '2021-11-08 05:15:36', '2021-11-08 05:15:36', NULL),
(4, 1, 2, 1, 18, 1, '1000', '2021-11-10 00:00:00', '6', '', '', '1000', '', '', NULL, 'Shamoli', '1,2,3', '1,2', '1', '2021-11-15 12:15:27', '2021-11-15 12:15:27', NULL),
(5, 4, 1, 1, 18, 4, '1000', '2021-11-24 00:00:00', '6', '', '', '800', '', '', '5', 'wewewe', '1,5', '1,2,3', '1', '2021-11-25 20:53:21', '2021-11-25 20:53:21', NULL),
(6, 5, 1, 1, 2, 5, '1000', '2021-11-23 00:00:00', '9', '', '', '1000', '', '', '5', 'Hanif', '5', '1,2', '1', '2021-11-27 10:39:41', '2021-11-27 10:39:41', NULL),
(7, 4, 2, 2, 18, 4, '1000', '2021-12-01 00:00:00', '6', '2', '1', '850', '500', '300', '5', 'Hanif', '5,7', '1,2', '1', '2021-12-06 09:53:03', '2021-12-06 09:53:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_mobile` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `recovery_code` varchar(100) DEFAULT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login_email`, `login_mobile`, `password`, `slug`, `recovery_code`, `last_login`, `ip`, `role_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@admin.com', '66666666666', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', 'DDSFM400', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)', 1, '1', '2021-09-02 19:40:05', '2021-12-04 12:13:55', NULL),
(2, 'mraz.jazmyne@morissette.org', '+15864407693', '827ccb0eea8a706c4c34a16891f84e7b', 'SOFKA212', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/5342 (KHTML, like Gecko) Chrome/40.0.885.0 Mobile Safari/53', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(3, 'leuschke.german@yahoo.com', '+15862322998', '827ccb0eea8a706c4c34a16891f84e7b', 'EZVJG414', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.01; Trident/5.1)', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(4, 'champlin.gonzalo@kihn.com', '+16802115636', '827ccb0eea8a706c4c34a16891f84e7b', 'EFVBE044', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_9) AppleWebKit/5361 (KHTML, like Gecko) Chrome/36.0.860', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(5, 'beahan.patrick@waters.info', '+13363199394', '827ccb0eea8a706c4c34a16891f84e7b', 'AXPWI433', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 5.2; Trident/4.1)', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(6, 'selmer82@rau.com', '+14109666682', '827ccb0eea8a706c4c34a16891f84e7b', 'DVASO444', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (compatible; MSIE 11.0; Windows NT 6.2; Trident/5.1)', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(7, 'ebert.demarco@dickinson.org', '+17165545258', '827ccb0eea8a706c4c34a16891f84e7b', 'OEPAF320', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (X11; Linux i686; rv:7.0) Gecko/20131111 Firefox/37.0', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(8, 'cbosco@yahoo.com', '+17042886447', '827ccb0eea8a706c4c34a16891f84e7b', 'TCXVZ231', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (Windows NT 5.0; sl-SI; rv:1.9.0.20) Gecko/20150124 Firefox/37.0', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(9, 'felipe42@hotmail.com', '+17148806966', '827ccb0eea8a706c4c34a16891f84e7b', 'GZGQH343', NULL, '2021-09-02 08:09:nd', 'Opera/9.43 (X11; Linux i686; en-US) Presto/2.11.295 Version/10.00', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(10, 'satterfield.schuyler@denesik.net', '+13374142287', '827ccb0eea8a706c4c34a16891f84e7b', 'JPXHF434', NULL, '2021-09-02 08:09:nd', 'Mozilla/5.0 (X11; Linux x86_64; rv:5.0) Gecko/20150209 Firefox/36.0', 1, '1', '2021-09-02 19:40:05', '2021-09-02 19:40:05', NULL),
(16, 'c1@c.com', '11111111111', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', '820bc7ad9c', NULL, NULL, NULL, 3, '1', '2021-11-13 02:35:48', '2021-12-02 21:14:13', NULL),
(19, 'c2@c.com', '22222222222', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', 'ca1364bbc6', NULL, NULL, NULL, 3, '1', '2021-11-13 03:33:39', '2021-12-02 21:17:41', NULL),
(20, 'n@n.com', '55555555555', '$2y$10$r6AwaEUoLuCvV3OT9bKiGeQNJ2ey3/BgyQ.qedWB55MKoxCkQKFhi', 'd0704c8750', NULL, NULL, NULL, 3, '1', '2021-11-16 18:43:04', '2021-12-12 18:41:52', NULL),
(29, 'm@m.com', '33333333333', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', 'e13af992e2', NULL, NULL, NULL, 3, '1', '2021-11-18 12:21:01', '2021-12-02 21:17:50', NULL),
(30, 't@t.com', '12344444444', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', '387883de06', NULL, NULL, NULL, 3, '1', '2021-11-22 18:27:47', '2021-12-02 21:17:53', NULL),
(31, 'a@r.com', '21111111111', '$2y$10$3g/ditjyBu8n5fZ.GnCTLurR5OzEcR94Rytozvicdh5veMghe4Gma', 'd269cb4d08', NULL, NULL, NULL, 3, '1', '2021-11-24 19:51:07', '2021-12-02 21:17:56', NULL),
(34, 'c6@c.com', '96666666666', '$2y$10$NS.Qk.Cge5Dk8MropkAI8OmdQSS4d/gzYj.ghjBt.5BGfyRxIo.IC', '3d88ae4f0a', NULL, NULL, NULL, 3, '1', '2021-12-02 21:16:24', '2021-12-02 21:16:24', NULL),
(37, 'a@a.com', '32222222222', '$2y$10$l5K6oYOAHFUpUorgq4i4Wej8DdrWDh12m4a4STl2V31elQ1CMvvBG', 'd09cbbcade', NULL, NULL, NULL, 2, '1', '2021-12-06 09:42:56', '2021-12-06 09:42:56', NULL),
(38, 'a@t1.com', '88666666666', '$2y$10$kqbnY6csapEGmQAHIVcQUuKkwOfAkUlL4GpOl1hcne4h3LhjtNC4y', '71679326ba', NULL, NULL, NULL, 2, '1', '2021-12-06 10:25:50', '2021-12-06 10:25:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` text NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `id_type` varchar(100) NOT NULL,
  `image` text DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `first_name`, `last_name`, `id_number`, `id_type`, `image`, `address`, `country_id`, `city`, `zip_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 2, 'Jettie', 'Lang', 'UGSTD014', 'passport', 'https://via.placeholder.com/640x480.png/00ee66?text=1+eveniet', 'Suite 367', 160, 'West Talia', '1984', '2021-09-04 15:14:23', '2021-09-04 15:14:23', NULL),
(12, 5, 'Theodora', 'Hermiston', 'EZHPT111', 'passport', 'https://via.placeholder.com/640x480.png/005555?text=1+nihil', 'Apt. 066', 222, 'Denesikview', '4619', '2021-09-04 15:14:23', '2021-09-04 15:14:23', NULL),
(13, 9, 'Ashly', 'Upton', 'GPXJX103', 'passport', 'https://via.placeholder.com/640x480.png/007766?text=1+in', 'Apt. 985', 83, 'New Pietroberg', '5667', '2021-09-04 15:14:23', '2021-09-04 15:14:23', NULL),
(14, 1, 'Tate', 'Sipes', 'QVDDH331', 'passport', 'https://via.placeholder.com/640x480.png/002288?text=1+quibusdam', 'Suite 027', 201, 'Lake Kenyahaven', '4382', '2021-09-04 15:14:23', '2021-09-04 15:14:51', NULL),
(15, 4, 'Savanah', 'Erdman', 'QCGOW330', 'passport', 'https://via.placeholder.com/640x480.png/00ffaa?text=1+qui', 'Apt. 460', 182, 'Port Alysaview', '9304', '2021-09-04 15:14:23', '2021-09-04 15:14:58', NULL),
(16, 8, 'Waylon', 'Green', 'AOESX122', 'passport', 'https://via.placeholder.com/640x480.png/0088ff?text=1+fugit', 'Suite 842', 150, 'New Francoview', '4290', '2021-09-04 15:14:23', '2021-09-04 15:14:23', NULL),
(17, 6, 'Maymie', 'Kulas', 'UIYSZ324', 'passport', 'https://via.placeholder.com/640x480.png/00aa44?text=1+cumque', 'Apt. 924', 104, 'Steuberburgh', '6694', '2021-09-04 15:14:23', '2021-09-04 15:15:06', NULL),
(18, 7, 'Carey', 'Kris', 'TWBOW112', 'passport', 'https://via.placeholder.com/640x480.png/0033dd?text=1+cum', 'Apt. 352', 90, 'Port Vicky', '3847', '2021-09-04 15:14:23', '2021-09-04 15:15:13', NULL),
(19, 3, 'Maximilian', 'Witting', 'ODNLN003', 'passport', 'https://via.placeholder.com/640x480.png/003344?text=1+aperiam', 'Suite 339', 53, 'Vonchester', '9899', '2021-09-04 15:14:23', '2021-09-04 15:15:19', NULL),
(20, 10, 'Madonna', 'Kozey', 'ZWHXP212', 'passport', 'https://via.placeholder.com/640x480.png/001122?text=1+nobis', 'Suite 123', 67, 'Lake Keeganfurt', '7404', '2021-09-04 15:14:23', '2021-09-04 15:14:23', NULL),
(21, 16, 'Test ', 'Custommer ssdsd', 'dfdfdf232323', 'Passport', 'image/passenger/1639376261_eea2008192668bbd5566.jpg', 'sdfas asdf as ss', 9, 'Dhaka', '5400', '2021-11-13 02:35:48', '2021-12-13 12:17:41', NULL),
(22, 19, 'another ', 'Custommer', 'dfdfdfdf6662626', 'Nid', NULL, 'sdfsd sf sdfsdf', 49, 'Barba', '9886', '2021-11-13 03:33:39', '2021-11-13 16:31:50', NULL),
(23, 20, 'test', 'test 1', '1ffdd33', 'passport', 'image/passenger/1639391975_a5aea3c2e09ee7b17eae.jpg', 'new addresss', 2, 'youhuuu', '1225', '2021-11-16 18:43:04', '2021-12-13 16:39:35', NULL),
(32, 29, 'Test ', 'Custommer ssdsd', '124444kkkk', 'Passport', NULL, 'asdf asdf asdf asdf', 20, 'Dhaka', '5400', '2021-11-18 12:21:01', '2021-11-18 12:21:01', NULL),
(33, 30, 'test dss', 'api', '12345sdsd', 'passport', NULL, 'sdfsdf sdf sdf sdf ', 12, 'rp', '1229', '2021-11-22 18:27:47', '2021-12-13 11:30:39', NULL),
(34, 31, 'Test', 'Custommer ssdsd', 'dfdfdf232323fefe', 'Passport', NULL, 'asdf asdf asdf asdf', 4, 'Dhaka', '5400', '2021-11-24 19:51:07', '2021-12-13 11:30:54', NULL),
(35, 34, 'Test', 'Custommer ssdsd', 'erer34343', 'Passport', NULL, 'asdf asdf asdf asdf', 20, 'Dhaka', '5400', '2021-12-02 21:16:24', '2021-12-02 21:16:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicalimages`
--

CREATE TABLE `vehicalimages` (
  `id` int(11) UNSIGNED NOT NULL,
  `vehicle_id` int(11) UNSIGNED NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicalimages`
--

INSERT INTO `vehicalimages` (`id`, `vehicle_id`, `img_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 1, 'image/bus/1636365229_49c5da895f3c94d60a26.png', '2021-11-08 03:53:49', '2021-11-08 03:53:49', NULL),
(14, 1, 'image/bus/1636365229_7849e23caed056549c08.png', '2021-11-08 03:53:49', '2021-11-08 03:53:49', NULL),
(15, 2, 'image/bus/1636365254_8d638b25c69c17498943.png', '2021-11-08 03:54:14', '2021-11-08 03:54:14', NULL),
(16, 2, 'image/bus/1636365254_7dbd51ddf219f83458d9.png', '2021-11-08 03:54:14', '2021-11-08 03:54:14', NULL),
(17, 3, 'image/bus/1636365273_6faefacc9c6e570205c9.png', '2021-11-08 03:54:33', '2021-11-08 03:54:33', NULL),
(18, 3, 'image/bus/1636365273_7677ce4c73ba4a79da91.png', '2021-11-08 03:54:33', '2021-11-08 03:54:33', NULL),
(19, 4, 'image/bus/1637851879_46eb00e3396d3083a864.jpg', '2021-11-25 20:51:19', '2021-11-25 20:51:19', NULL),
(20, 4, 'image/bus/1637851879_0fb4dbe3deca030737a5.jpg', '2021-11-25 20:51:19', '2021-11-25 20:51:19', NULL),
(21, 5, 'image/bus/1637987779_567c5368a832f8d0e7f4.jpg', '2021-11-27 10:36:19', '2021-11-27 10:36:19', NULL),
(22, 5, 'image/bus/1637987779_1c5aa22a383f1323209a.jpg', '2021-11-27 10:36:19', '2021-11-27 10:36:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) UNSIGNED NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `fleet_id` int(11) UNSIGNED NOT NULL,
  `engine_no` varchar(100) NOT NULL,
  `model_no` varchar(100) NOT NULL,
  `chasis_no` varchar(100) NOT NULL,
  `woner` varchar(100) NOT NULL,
  `woner_mobile` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `assign` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `reg_no`, `fleet_id`, `engine_no`, `model_no`, `chasis_no`, `woner`, `woner_mobile`, `company`, `status`, `assign`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1010', 1, '10114', '12xx', '1010C', 'test', '00000000001', 'HYUNDAI', '1', '0', '2021-11-03 02:03:13', '2021-11-08 03:53:49', NULL),
(2, '1020', 2, '2020', '220', 'c1020', 'Test', '0000000000', 'BMW', '1', '0', '2021-11-03 02:04:05', '2021-11-08 03:54:14', NULL),
(3, '1030', 3, 'E1030', 'M1030', 'C1030', 'Test', '00000000001', 'TATA', '1', '0', '2021-11-03 02:05:03', '2021-11-08 03:54:33', NULL),
(4, '2010', 4, '2010E', '2010M', '2010C', 'me', '00000000001', 'BMW', '1', '0', '2021-11-25 20:51:19', '2021-11-25 20:51:19', NULL),
(5, 'DE1020', 5, 'DE1020E', 'DE1020M', 'DE1020C', 'test2021', '00000000001', 'VOX', '1', '0', '2021-11-27 10:36:19', '2021-11-27 10:36:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websettings`
--

CREATE TABLE `websettings` (
  `id` int(11) UNSIGNED NOT NULL,
  `localize_name` text NOT NULL,
  `headerlogo` text NOT NULL,
  `favicon` text NOT NULL,
  `footerlogo` text NOT NULL,
  `logotext` text NOT NULL,
  `apptitle` text NOT NULL,
  `copyright` text NOT NULL,
  `headercolor` text NOT NULL,
  `footercolor` text NOT NULL,
  `bottomfootercolor` text NOT NULL,
  `buttoncolor` text NOT NULL,
  `buttoncolorhover` text NOT NULL,
  `buttontextcolor` text NOT NULL,
  `fontfamely` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `websettings`
--

INSERT INTO `websettings` (`id`, `localize_name`, `headerlogo`, `favicon`, `footerlogo`, `logotext`, `apptitle`, `copyright`, `headercolor`, `footercolor`, `bottomfootercolor`, `buttoncolor`, `buttoncolorhover`, `buttontextcolor`, `fontfamely`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', '', '', '', 'this is test', 'adf', 'sdfsdf', '#d24141', '#db3939', '', '#da4e4e', '#d09595', '#ffffff', 'Coda', '2021-12-18 17:59:44', '2021-12-18 18:00:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounthead`
--
ALTER TABLE `accounthead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agentcommissions`
--
ALTER TABLE `agentcommissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agentcommissions_agent_id_foreign` (`agent_id`),
  ADD KEY `agentcommissions_subtrip_id_foreign` (`subtrip_id`),
  ADD KEY `agentcommissions_user_id_foreign` (`user_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agents_location_id_foreign` (`location_id`),
  ADD KEY `agents_country_id_foreign` (`country_id`),
  ADD KEY `agents_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_user_id_foreign` (`user_id`);

--
-- Indexes for table `cookes`
--
ALTER TABLE `cookes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_employeetype_id_foreign` (`employeetype_id`),
  ADD KEY `employees_country_id_foreign` (`country_id`);

--
-- Indexes for table `employeetypes`
--
ALTER TABLE `employeetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilitys`
--
ALTER TABLE `facilitys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqquestions`
--
ALTER TABLE `faqquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fleets`
--
ALTER TABLE `fleets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fonts`
--
ALTER TABLE `fonts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journeylists`
--
ALTER TABLE `journeylists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journeylists_trip_id_foreign` (`trip_id`),
  ADD KEY `journeylists_subtrip_id_foreign` (`subtrip_id`),
  ADD KEY `journeylists_pick_location_id_foreign` (`pick_location_id`),
  ADD KEY `journeylists_drop_location_id_foreign` (`drop_location_id`),
  ADD KEY `journeylists_pick_stand_id_foreign` (`pick_stand_id`),
  ADD KEY `journeylists_drop_stand_id_foreign` (`drop_stand_id`);

--
-- Indexes for table `localizes`
--
ALTER TABLE `localizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maxtimes`
--
ALTER TABLE `maxtimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partialpaids`
--
ALTER TABLE `partialpaids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partialpaids_trip_id_foreign` (`trip_id`),
  ADD KEY `partialpaids_subtrip_id_foreign` (`subtrip_id`),
  ADD KEY `partialpaids_passanger_id_foreign` (`passanger_id`),
  ADD KEY `partialpaids_pay_type_id_foreign` (`pay_type_id`);

--
-- Indexes for table `paymethods`
--
ALTER TABLE `paymethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickdrops`
--
ALTER TABLE `pickdrops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pickdrops_trip_id_foreign` (`trip_id`),
  ADD KEY `pickdrops_stand_id_foreign` (`stand_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedulefilters`
--
ALTER TABLE `schedulefilters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_five_app`
--
ALTER TABLE `section_five_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_four_comment`
--
ALTER TABLE `section_four_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_four_detail`
--
ALTER TABLE `section_four_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_one_home`
--
ALTER TABLE `section_one_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_seven_subscrib`
--
ALTER TABLE `section_seven_subscrib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_six_blog`
--
ALTER TABLE `section_six_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_three_heading`
--
ALTER TABLE `section_three_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_two_detail`
--
ALTER TABLE `section_two_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_two_work_flow`
--
ALTER TABLE `section_two_work_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedias`
--
ALTER TABLE `socialmedias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stands`
--
ALTER TABLE `stands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuffassigns`
--
ALTER TABLE `stuffassigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Stuffassigns_trip_id_foreign` (`trip_id`),
  ADD KEY `Stuffassigns_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `subtrips`
--
ALTER TABLE `subtrips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtrips_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`,`booking_id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`),
  ADD KEY `tickets_trip_id_foreign` (`trip_id`),
  ADD KEY `tickets_subtrip_id_foreign` (`subtrip_id`),
  ADD KEY `tickets_passanger_id_foreign` (`passanger_id`),
  ADD KEY `tickets_pick_location_id_foreign` (`pick_location_id`),
  ADD KEY `tickets_drop_location_id_foreign` (`drop_location_id`),
  ADD KEY `tickets_pick_stand_id_foreign` (`pick_stand_id`),
  ADD KEY `tickets_drop_stand_id_foreign` (`drop_stand_id`),
  ADD KEY `tickets_bookby_user_id_foreign` (`bookby_user_id`),
  ADD KEY `tickets_pay_type_id_foreign` (`pay_type_id`),
  ADD KEY `tickets_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_fleet_id_foreign` (`fleet_id`),
  ADD KEY `trips_schedule_id_foreign` (`schedule_id`),
  ADD KEY `trips_pick_location_id_foreign` (`pick_location_id`),
  ADD KEY `trips_drop_location_id_foreign` (`drop_location_id`),
  ADD KEY `trips_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email` (`login_email`),
  ADD UNIQUE KEY `login_mobile` (`login_mobile`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD KEY `user_detail_user_id_foreign` (`user_id`);

--
-- Indexes for table `vehicalimages`
--
ALTER TABLE `vehicalimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicalimages_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD KEY `vehicles_fleet_id_foreign` (`fleet_id`);

--
-- Indexes for table `websettings`
--
ALTER TABLE `websettings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accounthead`
--
ALTER TABLE `accounthead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agentcommissions`
--
ALTER TABLE `agentcommissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cookes`
--
ALTER TABLE `cookes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employeetypes`
--
ALTER TABLE `employeetypes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilitys`
--
ALTER TABLE `facilitys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqquestions`
--
ALTER TABLE `faqquestions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fleets`
--
ALTER TABLE `fleets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fonts`
--
ALTER TABLE `fonts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1335;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `journeylists`
--
ALTER TABLE `journeylists`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `localizes`
--
ALTER TABLE `localizes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `maxtimes`
--
ALTER TABLE `maxtimes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `partialpaids`
--
ALTER TABLE `partialpaids`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `paymethods`
--
ALTER TABLE `paymethods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pickdrops`
--
ALTER TABLE `pickdrops`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedulefilters`
--
ALTER TABLE `schedulefilters`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_five_app`
--
ALTER TABLE `section_five_app`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_four_comment`
--
ALTER TABLE `section_four_comment`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_four_detail`
--
ALTER TABLE `section_four_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `section_one_home`
--
ALTER TABLE `section_one_home`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_seven_subscrib`
--
ALTER TABLE `section_seven_subscrib`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_six_blog`
--
ALTER TABLE `section_six_blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_three_heading`
--
ALTER TABLE `section_three_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_two_detail`
--
ALTER TABLE `section_two_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `section_two_work_flow`
--
ALTER TABLE `section_two_work_flow`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socialmedias`
--
ALTER TABLE `socialmedias`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stands`
--
ALTER TABLE `stands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stuffassigns`
--
ALTER TABLE `stuffassigns`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subtrips`
--
ALTER TABLE `subtrips`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vehicalimages`
--
ALTER TABLE `vehicalimages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websettings`
--
ALTER TABLE `websettings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agentcommissions`
--
ALTER TABLE `agentcommissions`
  ADD CONSTRAINT `agentcommissions_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`),
  ADD CONSTRAINT `agentcommissions_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `agentcommissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `agents_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `agents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  ADD CONSTRAINT `employees_employeetype_id_foreign` FOREIGN KEY (`employeetype_id`) REFERENCES `employeetypes` (`id`);

--
-- Constraints for table `journeylists`
--
ALTER TABLE `journeylists`
  ADD CONSTRAINT `journeylists_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `journeylists_drop_stand_id_foreign` FOREIGN KEY (`drop_stand_id`) REFERENCES `pickdrops` (`id`),
  ADD CONSTRAINT `journeylists_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `journeylists_pick_stand_id_foreign` FOREIGN KEY (`pick_stand_id`) REFERENCES `pickdrops` (`id`),
  ADD CONSTRAINT `journeylists_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `journeylists_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `partialpaids`
--
ALTER TABLE `partialpaids`
  ADD CONSTRAINT `partialpaids_passanger_id_foreign` FOREIGN KEY (`passanger_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `partialpaids_pay_type_id_foreign` FOREIGN KEY (`pay_type_id`) REFERENCES `paymethods` (`id`),
  ADD CONSTRAINT `partialpaids_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `partialpaids_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `pickdrops`
--
ALTER TABLE `pickdrops`
  ADD CONSTRAINT `pickdrops_stand_id_foreign` FOREIGN KEY (`stand_id`) REFERENCES `stands` (`id`),
  ADD CONSTRAINT `pickdrops_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `stuffassigns`
--
ALTER TABLE `stuffassigns`
  ADD CONSTRAINT `Stuffassigns_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `Stuffassigns_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `subtrips`
--
ALTER TABLE `subtrips`
  ADD CONSTRAINT `subtrips_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_bookby_user_id_foreign` FOREIGN KEY (`bookby_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickets_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `tickets_drop_stand_id_foreign` FOREIGN KEY (`drop_stand_id`) REFERENCES `pickdrops` (`id`),
  ADD CONSTRAINT `tickets_passanger_id_foreign` FOREIGN KEY (`passanger_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickets_pay_type_id_foreign` FOREIGN KEY (`pay_type_id`) REFERENCES `paymethods` (`id`),
  ADD CONSTRAINT `tickets_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `tickets_pick_stand_id_foreign` FOREIGN KEY (`pick_stand_id`) REFERENCES `pickdrops` (`id`),
  ADD CONSTRAINT `tickets_subtrip_id_foreign` FOREIGN KEY (`subtrip_id`) REFERENCES `subtrips` (`id`),
  ADD CONSTRAINT `tickets_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  ADD CONSTRAINT `tickets_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_drop_location_id_foreign` FOREIGN KEY (`drop_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `trips_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`),
  ADD CONSTRAINT `trips_pick_location_id_foreign` FOREIGN KEY (`pick_location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `trips_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `trips_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_detail_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vehicalimages`
--
ALTER TABLE `vehicalimages`
  ADD CONSTRAINT `vehicalimages_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_fleet_id_foreign` FOREIGN KEY (`fleet_id`) REFERENCES `fleets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
