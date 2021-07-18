-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 18 İyul, 2021 saat 13:23
-- Server versiyası: 10.4.19-MariaDB
-- PHP Versiyası: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `texnolab`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `about`
--

INSERT INTO `about` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'asdasd', '', '', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, quis nostrud exerci tation ullamcorperea commodo consequat utm euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi commodo minim euismod tincidunt.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Our Mission and Philosophy</li>\r\n	<li>&nbsp;Our Departments and Programms</li>\r\n	<li>&nbsp;Why We Are Best</li>\r\n	<li>&nbsp;Grest Career Outcomes</li>\r\n	<li>&nbsp;25 hours of High Quality e-Learning content</li>\r\n	<li>&nbsp;72 end of chapter quizzes</li>\r\n</ul>\r\n', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `about_page_background`
--

CREATE TABLE `about_page_background` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `about_page_background`
--

INSERT INTO `about_page_background` (`id`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, 'asdasdsss', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'adasd', '', '', '<p>asasd</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_hours` varchar(255) NOT NULL,
  `address_az` text NOT NULL,
  `address_en` text NOT NULL,
  `address_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `work_hours`, `address_az`, `address_en`, `address_ru`) VALUES
(1, 'sad', 'dasd', 'adsad', '<p>asdasdsa</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `contact_page_background`
--

CREATE TABLE `contact_page_background` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `contact_page_background`
--

INSERT INTO `contact_page_background` (`id`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, '1', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `wider_desc_az` varchar(255) NOT NULL,
  `wider_desc_en` varchar(255) NOT NULL,
  `wider_desc_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL,
  `age` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `about_course_az` text NOT NULL,
  `about_course_en` text NOT NULL,
  `about_course_ru` text NOT NULL,
  `course_program_az` text NOT NULL,
  `course_program_en` text NOT NULL,
  `course_program_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `courses`
--

INSERT INTO `courses` (`id`, `name_az`, `name_en`, `name_ru`, `wider_desc_az`, `wider_desc_en`, `wider_desc_ru`, `img`, `age`, `size`, `price`, `about_course_az`, `about_course_en`, `about_course_ru`, `course_program_az`, `course_program_en`, `course_program_ru`) VALUES
(1, 'asdasd', '', '', 'Praesent maximus mattis mattis. Nam est ante, efficitur blandit leo pulvinar, bibendum maximus odio. Phasellus vitae egestas ligula', '', '', 'Windows-11-Wallpaper01.jpg', '2131', 'asads', '12123', '<p>asdsadasdasd</p>\r\n', '<p>sss</p>\r\n', '<p>222</p>\r\n', '<p>asdasd</p>\r\n', '<p>fff</p>\r\n', '<p>66</p>\r\n'),
(3, 'asdasdasdasd', '', '', 'Praesent maximus mattis mattis. Nam est ante, efficitur blandit leo pulvinar, bibendum maximus odio. Phasellus vitae egestas ligulaadasdasdas dasdasda ', '', '', 'Windows-11-Wallpaper011.jpg', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `courses_page_background`
--

CREATE TABLE `courses_page_background` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `courses_page_background`
--

INSERT INTO `courses_page_background` (`id`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, '2131313', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `course_alumni`
--

CREATE TABLE `course_alumni` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `course_alumni`
--

INSERT INTO `course_alumni` (`id`, `course_id`, `name`, `img`) VALUES
(1, 1, 'asdasd', 'Windows-11-Wallpaper01.jpg'),
(2, 1, 'asdas', 'Windows-11-Wallpaper011.jpg'),
(3, 3, 'asdasd', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `course_gallery`
--

CREATE TABLE `course_gallery` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `course_gallery`
--

INSERT INTO `course_gallery` (`id`, `course_id`, `file`) VALUES
(1, 1, 'Windows-11-Wallpaper01.jpg'),
(2, 3, 'preview.jpg'),
(3, 3, 'preview.png');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `course_registers`
--

CREATE TABLE `course_registers` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `course_registers`
--

INSERT INTO `course_registers` (`id`, `course_id`, `name`, `phone`, `comment`) VALUES
(1, 1, '', '', '<p>asdasdsadasdaasdsada</p>\r\n');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` int(11) NOT NULL,
  `course_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `course_teachers`
--

INSERT INTO `course_teachers` (`id`, `course_id`, `teacher_id`) VALUES
(1, 1, 1),
(3, 1, 2),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `copyright_az` varchar(255) NOT NULL,
  `copyright_en` varchar(255) NOT NULL,
  `copyright_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `footer`
--

INSERT INTO `footer` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `copyright_az`, `copyright_en`, `copyright_ru`) VALUES
(1, 'sdasda', '', '', '<p>asdasd</p>\r\n', '', '', 'sadas', 'asdasdasdasdasd', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `footer_gallery`
--

CREATE TABLE `footer_gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `footer_gallery`
--

INSERT INTO `footer_gallery` (`id`, `img`, `link`) VALUES
(1, 'Windows-11-Wallpaper01.jpg', 'asdasdsa'),
(2, 'logo-header.webp', 'asdsa'),
(3, 'akw-audit2.jpg', 'dassad');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `gallery_page_background`
--

CREATE TABLE `gallery_page_background` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `gallery_page_background`
--

INSERT INTO `gallery_page_background` (`id`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, '2', '', '', '1625744916638.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_bg1`
--

CREATE TABLE `home_page_bg1` (
  `id` int(11) NOT NULL,
  `num1` int(255) NOT NULL,
  `text1_az` varchar(255) NOT NULL,
  `text1_en` varchar(255) NOT NULL,
  `text1_ru` varchar(255) NOT NULL,
  `num2` int(255) NOT NULL,
  `text2_az` varchar(255) NOT NULL,
  `text2_en` varchar(255) NOT NULL,
  `text2_ru` varchar(255) NOT NULL,
  `num3` int(255) NOT NULL,
  `text3_az` varchar(255) NOT NULL,
  `text3_en` varchar(255) NOT NULL,
  `text3_ru` varchar(255) NOT NULL,
  `num4` int(255) NOT NULL,
  `text4_az` varchar(255) NOT NULL,
  `text4_en` varchar(255) NOT NULL,
  `text4_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_bg1`
--

INSERT INTO `home_page_bg1` (`id`, `num1`, `text1_az`, `text1_en`, `text1_ru`, `num2`, `text2_az`, `text2_en`, `text2_ru`, `num3`, `text3_az`, `text3_en`, `text3_ru`, `num4`, `text4_az`, `text4_en`, `text4_ru`, `img`) VALUES
(1, 1, 'adasd2', '', '', 2, 'asdasd', '', '', 3, 'sadasd', '', '', 4, 'adadad', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_courses_text`
--

CREATE TABLE `home_page_courses_text` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_courses_text`
--

INSERT INTO `home_page_courses_text` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'asdasd', '', '', '<p>adadas</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_happy_clients_text`
--

CREATE TABLE `home_page_happy_clients_text` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_happy_clients_text`
--

INSERT INTO `home_page_happy_clients_text` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'asdasd', '', '', '<p>asdasd</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_news_text`
--

CREATE TABLE `home_page_news_text` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_news_text`
--

INSERT INTO `home_page_news_text` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'adasd', '', '', '<p>asdada</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_services`
--

CREATE TABLE `home_page_services` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_services_text`
--

CREATE TABLE `home_page_services_text` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_services_text`
--

INSERT INTO `home_page_services_text` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'assa', '', '', '<p>dadasdad</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `home_page_teachers_text`
--

CREATE TABLE `home_page_teachers_text` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `home_page_teachers_text`
--

INSERT INTO `home_page_teachers_text` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, 'adasadas', '', '', '<p>dasdasdasdadasd</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `logo`
--

INSERT INTO `logo` (`id`, `img`) VALUES
(1, 'preview.png');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `wider_desc_az` varchar(255) NOT NULL,
  `wider_desc_en` varchar(255) NOT NULL,
  `wider_desc_ru` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `news`
--

INSERT INTO `news` (`id`, `title_az`, `title_en`, `title_ru`, `wider_desc_az`, `wider_desc_en`, `wider_desc_ru`, `category_id`, `author`, `date`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, '', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(2, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(3, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(4, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(5, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(6, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(7, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(8, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(9, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(10, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(11, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(12, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(13, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(14, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(15, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(16, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(17, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(18, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(19, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(20, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(21, 'adsad', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(22, 'sadsa', '', '333', '', '', '', 2, 'asdasdsad', '2021-07-08', '<p>sadsad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(23, '', '', '', '', '', '', 1, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(24, '1', '', '', 'asdasdsad', '', '', 3, '', '0000-00-00', '', '', '', 'Windows-11-Wallpaper01.jpg'),
(25, '', '', '', '', '', '', 1, '', '2021-07-07', '<p>adasdsadasd</p>\r\n', '', '', 'Windows-11-Wallpaper011.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news_category`
--

CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `news_category`
--

INSERT INTO `news_category` (`id`, `name_az`, `name_en`, `name_ru`) VALUES
(1, 'asdasd', 'asdas', 'dasda'),
(2, '1231', '2321', 'asda'),
(3, 'asdasa', '', '');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news_gallery`
--

CREATE TABLE `news_gallery` (
  `id` int(11) NOT NULL,
  `news_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `news_gallery`
--

INSERT INTO `news_gallery` (`id`, `news_id`, `file`) VALUES
(1, 2, 'Windows-11-Wallpaper01.jpg'),
(2, 24, 'Windows-11-Wallpaper01.jpg'),
(3, 24, '1625744916638.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `news_page_background`
--

CREATE TABLE `news_page_background` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `news_page_background`
--

INSERT INTO `news_page_background` (`id`, `title_az`, `title_en`, `title_ru`, `img`) VALUES
(1, 'asdasd', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `button_text_az` varchar(255) NOT NULL,
  `button_text_en` varchar(255) NOT NULL,
  `button_text_ru` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `slider`
--

INSERT INTO `slider` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `button_text_az`, `button_text_en`, `button_text_ru`, `button_link`, `img`) VALUES
(2, 'asdasd', '', '', '<p>asdasd</p>\r\n', '', '', 'asdasda', '', '', 'https://localhost/phpmyadmin/index.php?route=/sql&server=1&db=texnolab&table=slider&pos=0', 'Windows-11-Wallpaper01.jpg'),
(3, 'adasd', '', '', '<p>adasd</p>\r\n', '', '', '', '', '', '', 'akw-audit2.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `social`
--

INSERT INTO `social` (`id`, `facebook`, `instagram`, `youtube`) VALUES
(1, 'https://www.facebook.com/', 'aadasda', 'asdasdd');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `wider_desc_az` varchar(255) NOT NULL,
  `wider_desc_en` varchar(255) NOT NULL,
  `wider_desc_ru` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `job_az` varchar(255) NOT NULL,
  `job_en` varchar(255) NOT NULL,
  `job_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `teachers`
--

INSERT INTO `teachers` (`id`, `name_az`, `name_en`, `name_ru`, `wider_desc_az`, `wider_desc_en`, `wider_desc_ru`, `facebook`, `instagram`, `twitter`, `job_az`, `job_en`, `job_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'asdsad', '', '', '', '', '', '', '', '', 'asdsad', '', '', '<p>asdad</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg'),
(2, 'asdasd', '', '', '', '', '', '', '', '', 'asdasd', '', '', '<p>asdadasd</p>\r\n', '', '', 'Windows-11-Wallpaper011.jpg'),
(3, 'adasd', '', '', 'asdasd', '', '', 'asdad', 'asdas', 'dada', 'asdasda', '', '', '<p>dada</p>\r\n', '', '', 'Windows-11-Wallpaper012.jpg'),
(4, 'asdd', '', '', 'sdasdasd', '', '', 'asdas', 'asdas', 'dad', 'meklr;sd', '', '', '<p>asdasda</p>\r\n', '', '', 'Windows-11-Wallpaper01.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sxemi çıxarılan cedvel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'super_admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `about_page_background`
--
ALTER TABLE `about_page_background`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `contact_page_background`
--
ALTER TABLE `contact_page_background`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `courses_page_background`
--
ALTER TABLE `courses_page_background`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `course_alumni`
--
ALTER TABLE `course_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `course_gallery`
--
ALTER TABLE `course_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `course_registers`
--
ALTER TABLE `course_registers`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `footer_gallery`
--
ALTER TABLE `footer_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `gallery_page_background`
--
ALTER TABLE `gallery_page_background`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_bg1`
--
ALTER TABLE `home_page_bg1`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_courses_text`
--
ALTER TABLE `home_page_courses_text`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_happy_clients_text`
--
ALTER TABLE `home_page_happy_clients_text`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_news_text`
--
ALTER TABLE `home_page_news_text`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_services`
--
ALTER TABLE `home_page_services`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_services_text`
--
ALTER TABLE `home_page_services_text`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `home_page_teachers_text`
--
ALTER TABLE `home_page_teachers_text`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news_gallery`
--
ALTER TABLE `news_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `news_page_background`
--
ALTER TABLE `news_page_background`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Cədvəl üçün indekslər `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `about_page_background`
--
ALTER TABLE `about_page_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `contact_page_background`
--
ALTER TABLE `contact_page_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `courses_page_background`
--
ALTER TABLE `courses_page_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `course_alumni`
--
ALTER TABLE `course_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `course_gallery`
--
ALTER TABLE `course_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Cədvəl üçün AUTO_INCREMENT `course_registers`
--
ALTER TABLE `course_registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Cədvəl üçün AUTO_INCREMENT `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `footer_gallery`
--
ALTER TABLE `footer_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Cədvəl üçün AUTO_INCREMENT `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `gallery_page_background`
--
ALTER TABLE `gallery_page_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_bg1`
--
ALTER TABLE `home_page_bg1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_courses_text`
--
ALTER TABLE `home_page_courses_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_happy_clients_text`
--
ALTER TABLE `home_page_happy_clients_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_news_text`
--
ALTER TABLE `home_page_news_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_services`
--
ALTER TABLE `home_page_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_services_text`
--
ALTER TABLE `home_page_services_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `home_page_teachers_text`
--
ALTER TABLE `home_page_teachers_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Cədvəl üçün AUTO_INCREMENT `news_category`
--
ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `news_gallery`
--
ALTER TABLE `news_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `news_page_background`
--
ALTER TABLE `news_page_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Cədvəl üçün AUTO_INCREMENT `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Cədvəl üçün AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
