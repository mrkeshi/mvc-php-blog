-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 12:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sep28`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `email`, `password`, `name`, `image`) VALUES
(1, 'admin', 'paressep28@gmail.com', '1234', 'علیرضا کشاورز', '\'\'');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `link1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `link2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `link3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link1`, `link2`, `link3`, `img1`, `img2`, `img3`, `status`) VALUES
(1, 'http://zula.ir', 'http://zula.ir', 'http://zula.ir', 'uploader/ads/admin/POST-5366.jpg', 'uploader/ads/admin/POST-6250.jpg', 'uploader/ads/admin/POST-8769.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `box_tbl`
--

CREATE TABLE `box_tbl` (
  `id` int(11) NOT NULL,
  `img1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text1` text COLLATE utf8_persian_ci NOT NULL,
  `text2` text COLLATE utf8_persian_ci NOT NULL,
  `text3` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `box_tbl`
--

INSERT INTO `box_tbl` (`id`, `img1`, `img2`, `img3`, `titr1`, `titr2`, `titr3`, `text1`, `text2`, `text3`, `status`) VALUES
(1, 'uploader/icons/admin/POST-1812.png', 'uploader/icons/admin/POST-3610.png', 'uploader/icons/admin/POST-7726.png', 'پنل مدیریت زیبا و قدرتمند', 'نوشته شده توسط PHP MVC', 'انعطاف پذیر', 'این وبسایت دارای پنل مدیریت بسیار زیبا و قدرتمند هست که به خوبی توسط بنده سفارشی سازی شده است.همچنین میتوانیم به سرعت بالای پنل مدیریت در عین متریال و زیبا بودن اشاره کرد.همچنین قدرت این پنل به سرویس ایمیل ajax که براش نوشتم بر میگرده.', 'من بالاخره تونستم بعد از دوهفته سرگرمی در MVC که اول من هیچی ازش نمیدونستم و ترس داشتم چیزی یادنگیرم. این پروژه رو استارت زدم و تقریبا میشه گفت امروز ۱۸ روزه دارم رو این پروژه بصورت پاره وقت کار میکنم  تقریبا میشه گفت ۸۰ ساعت وقت گزاشتم روش.', 'یکی از ویژگی های مهم این وبسایت اینه که اصلا هیچ چیز استاتیکی توش وجود نداره و تمام چیزهایی که میبینید میشه به راحتی تو صفحه ی مدیریت ویرایشش داد و حتی میشه اصلا نمایششون نداد.خلاصه خواستم بگم پنل مدیریت و سایت کلی انعطاف دارن.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `id` int(11) NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`id`, `url`, `title`) VALUES
(1, 'public', 'عمومی'),
(2, 'test', 'ازمایشی');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `post_id` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `datee` int(20) NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment_tbl`
--

INSERT INTO `comment_tbl` (`id`, `name`, `email`, `post_id`, `datee`, `text`, `status`) VALUES
(1, 'محمد', 'yyyyy@gmial.conm', 'yj', 1565702850, 'سلام مطلبتون عالی بود لذت بردم', '1'),
(2, 'علیرضا کشاورز', 'paressep28@gmail.com', 'testto', 1565734936, 'نظر آزمایشی', '1'),
(3, 'علیرضا کشاورز', 'paressep28@gmail.com', 'testto', 1565735344, 'نظر آزمایشی', '1'),
(4, 'علیرضا کشاورز', 'paressep28@gmail.com', 'yj', 1565735890, 'سلام  مطلب خوبی بود.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `timee` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `ty` enum('0','1') COLLATE utf8_persian_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_tbl`
--

CREATE TABLE `menu_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `child_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu_tbl`
--

INSERT INTO `menu_tbl` (`id`, `title`, `url`, `status`, `sort`, `child_id`) VALUES
(161, 'خانه', '', '1', 1, 0),
(165, 'تماس با ما', 'contact', '1', 7, 0),
(175, 'وبلاگ', 'blog', '1', 4, 0),
(176, 'عمومی', 'cpublic', '1', 2, 0),
(177, 'نمونه کار', 'work', '1', 3, 0),
(180, 'ازمایشی', 'ctest', '1', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_tbl`
--

CREATE TABLE `page_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `writer` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `up` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `upby` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `page_tbl`
--

INSERT INTO `page_tbl` (`id`, `title`, `url`, `text`, `date`, `writer`, `up`, `upby`) VALUES
(1, 'یک صفحه ی آزمایشی', 'testto', '<p>یک صفحه ی آزمایشی</p>', '1565015418', 'admin', '1565700119', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post_tbl`
--

CREATE TABLE `post_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `date` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  `writer` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `up` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `upby` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(110) COLLATE utf8_persian_ci NOT NULL,
  `cat_id` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `post_tbl`
--

INSERT INTO `post_tbl` (`id`, `title`, `url`, `status`, `date`, `content`, `writer`, `up`, `upby`, `image`, `cat_id`) VALUES
(1, 'آموزش ساخت چیت زولا', 'yj', '1', '1565702608', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'admin', '1565703075', 'admin', 'uploader/posts/admin/POST-4089.jpg', '1'),
(2, 'ترفند', 'test', '1', '1565702628', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'admin', '', '', 'uploader/posts/admin/POST-3484.jpg', '0'),
(3, 'ترفند', 'jgjgh', '0', '1565702644', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'admin', '1565703563', 'admin', 'uploader/posts/admin/POST-6261.jpg', '1'),
(4, 'مطلب آزمایشی', 'abio', '1', '1565702665', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'admin', '', '', 'uploader/posts/admin/POST-4849.png', '1'),
(5, 'مطلب آزمایشی۲', 'homepage', '1', '1565702682', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', 'admin', '', '', 'uploader/posts/admin/POST-6542.jpg', '1'),
(6, 'خانه۲', 'testto', '1', '1565702722', '<p style=\"text-align: right;\"><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</strong></p>', 'admin', '1565734872', 'admin', 'uploader/posts/admin/POST-5465.jpg', '1'),
(7, 'وبسایت من', 'homepageh', '1', '1565735559', '<p style=\"text-align: right;\"><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط ف...</strong></p>', 'admin', '1565735645', 'admin', 'uploader/posts/admin/POST-847.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `section_tbl`
--

CREATE TABLE `section_tbl` (
  `id` int(11) NOT NULL,
  `titr1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `btnname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `section_tbl`
--

INSERT INTO `section_tbl` (`id`, `titr1`, `text`, `url`, `btnname`, `status`) VALUES
(1, 'نمونه کار ', 'یه سری نمونه کار خفن داریم حاضری بریم ببینیم', 'http://127.0.0.10/work', 'بزن برریم', '1');

-- --------------------------------------------------------

--
-- Table structure for table `setting tab`
--

CREATE TABLE `setting tab` (
  `id` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `count` int(11) NOT NULL,
  `type2` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `count2` int(10) NOT NULL,
  `title1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `title2` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `setting tab`
--

INSERT INTO `setting tab` (`id`, `status`, `type`, `count`, `type2`, `count2`, `title1`, `title2`) VALUES
(1, '1', 'comment_tbl', 10, 'post_tbl', 10, 'آخرین نظرات', 'آخرین مطالب');

-- --------------------------------------------------------

--
-- Table structure for table `setting_tbl`
--

CREATE TABLE `setting_tbl` (
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `home_page` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `telegram` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `tw` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `id` int(11) NOT NULL,
  `logo` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `setting_tbl`
--

INSERT INTO `setting_tbl` (`name`, `home_page`, `titr`, `description`, `phone`, `address`, `email`, `telegram`, `instagram`, `tw`, `youtube`, `id`, `logo`) VALUES
('پارسمان', '/', 'پیش بسوی موفقیت', 'بدون توضیحات ', '09907881747', 'استان بوشهر .شهستان دشتی . روستای کردوان', 'paressep28@gmail.com', 'telegram', 'instagram', 'tw', 'youtube', 1, 'uploader/icons/admin/POST-1965.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `id` int(11) NOT NULL,
  `img1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr1` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr2` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr3` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text3` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`id`, `img1`, `img2`, `img3`, `titr1`, `titr2`, `titr3`, `text1`, `text2`, `text3`, `status`) VALUES
(1, 'uploader/icons/admin/POST-5130.png', 'uploader/icons/admin/POST-3610.png', 'uploader/icons/admin/POST-7276.jpg', 'شروع کار', 'PHP MVC', 'فول استک', 'وبسایت از امروز فعالیت رسمی خود را آغاز میکند!!', 'بعد از 18 روز موفق شدم PHP MVC رو شکست بدم و اولین پروژمو بسازم', 'میشه گفت تقریبا من از امروز و از این تاریخ تبدیل به یک فول استک شدم:)', '1');

-- --------------------------------------------------------

--
-- Table structure for table `taber_tbl`
--

CREATE TABLE `taber_tbl` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `count` int(11) NOT NULL,
  `ord` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `titr` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `sook` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `taber_tbl`
--

INSERT INTO `taber_tbl` (`id`, `type`, `count`, `ord`, `titr`, `text`, `status`, `sook`) VALUES
(1, 'post_tbl', 3, 'id', 'آخرین مطالب', 'شما اخرین مطالب را مشاهده میکنید', '1', 'DESC'),
(2, 'work_tbl', 6, 'id', 'آخرین نمونه کار ها', 'شما دراینجا آخرین نمونه کارهارو رو مشاهده می کنید', '1', 'DESC');

-- --------------------------------------------------------

--
-- Table structure for table `textv_tbl`
--

CREATE TABLE `textv_tbl` (
  `id` int(11) NOT NULL,
  `page` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text1` text COLLATE utf8_persian_ci NOT NULL,
  `text2` text COLLATE utf8_persian_ci NOT NULL,
  `text3` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `textv_tbl`
--

INSERT INTO `textv_tbl` (`id`, `page`, `text1`, `text2`, `text3`, `status`) VALUES
(1, 'home', 'به صفحه ی اصلی وبسایت خوش آمدید اینجا میتواند جای تبلیغات متنی یا نوشته های شما باشد.', 'سلام خیلی خوشحال شدم که به وبسایت من سر زدید:)', 'این یک متن آزمایشی میباشد ', '1'),
(2, 'blog', '1', '2', '3', '1'),
(3, 'work', 'شما در حال مشاهده ی ویجت نمونه کار میباشید', 'شما در حال مشاهده ی ویجت نمونه کار میباشید', 'شما در حال مشاهده ی ویجت نمونه کار میباشید', '1'),
(4, 'contact', '1', '2', '3', '1'),
(5, 'page', '1', '2', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `up_tbl`
--

CREATE TABLE `up_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `writer` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `format` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `up_tbl`
--

INSERT INTO `up_tbl` (`id`, `title`, `description`, `link`, `writer`, `format`) VALUES
(3, 'عکس ۲', 'بدون توضیحات', 'uploader/media/admin/POST-5010.png', 'admin', 'png'),
(6, 'فایل ۱', 'بدون توضیحات', 'uploader/media/admin/POST-7759.exe', 'admin', 'exe');

-- --------------------------------------------------------

--
-- Table structure for table `vighettext_tbl`
--

CREATE TABLE `vighettext_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `vighettext_tbl`
--

INSERT INTO `vighettext_tbl` (`id`, `title`, `text`, `status`) VALUES
(1, 'ویجت متنی', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `time` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `count`, `time`) VALUES
(5, 21, 1565638200),
(6, 100, 1565551800),
(7, 59, 1565724600);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `time`, `count`) VALUES
(10, 1565638200, 2),
(11, 1565724600, 3);

-- --------------------------------------------------------

--
-- Table structure for table `workcat_tbl`
--

CREATE TABLE `workcat_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `workcat_tbl`
--

INSERT INTO `workcat_tbl` (`id`, `title`, `url`) VALUES
(1, 'سرگرمی', 'sar');

-- --------------------------------------------------------

--
-- Table structure for table `work_tbl`
--

CREATE TABLE `work_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `map` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `star` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `buy` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `dcrate` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `img1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `img2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `img3` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `img4` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dt1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dt2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dt3` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `dt4` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `cat_id` varchar(7) COLLATE utf8_persian_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `work_tbl`
--

INSERT INTO `work_tbl` (`id`, `title`, `url`, `text`, `status`, `map`, `star`, `buy`, `dcrate`, `img1`, `img2`, `img3`, `img4`, `dt1`, `dt2`, `dt3`, `dt4`, `cat_id`, `img`) VALUES
(1, 'نمونه کار ۱', 'test1', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', '1', 'ایران', '4', 'شرکت پتروشیمی ', '28 خرداد ۹۸', 'uploader/works/admin/POST-5467.jpg', 'uploader/works/admin/POST-1741.jpg', 'uploader/works/admin/POST-8459.jpg', 'uploader/works/admin/POST-3060.jpg', 'تصویری از هوای ابری زیبای بوشهر مشاهده می کنید', 'توضیحات آزمایشی برای یک تصویر آزمایشی', 'توضیحات آزمایشی برای یک تصویر آزمایشی', 'توضیحات آزمایشی برای یک تصویر آزمایشی', '1', 'uploader/works/admin/POST-698.png'),
(2, 'نمونه کار ۲', 'jgjgh', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', '1', 'اروپا', '5', 'شرکت خارجی', 'اردیبهشت ۸۲', 'uploader/works/admin/POST-4445.jpg', 'uploader/works/admin/POST-3177.jpg', 'uploader/works/admin/POST-3394.png', 'uploader/works/admin/POST-6418.jpg', 'توضیحات ۱', 'توضیحات ۲', 'اسلایدر۱', 'اسلایدر۱', '0', 'uploader/works/admin/POST-6772.jpg'),
(3, 'نمونه کار ۳', 'home', '<p style=\"text-align: right;\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>', '1', 'اروپا', '2', 'نفت بوشهر', 'فرودین ۹5', 'uploader/works/admin/POST-4849.png', 'uploader/works/admin/POST-6472.jpg', 'uploader/works/admin/POST-2641.jpg', 'uploader/works/admin/POST-7402.jpg', 'توضیحات ۱', 'توضیحات ۲', 'توضیحات ۳', 'توضیحات ۴', '1', 'uploader/works/admin/POST-7731.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_tbl`
--
ALTER TABLE `box_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `page_tbl`
--
ALTER TABLE `page_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `post_tbl`
--
ALTER TABLE `post_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `section_tbl`
--
ALTER TABLE `section_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting tab`
--
ALTER TABLE `setting tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taber_tbl`
--
ALTER TABLE `taber_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textv_tbl`
--
ALTER TABLE `textv_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_tbl`
--
ALTER TABLE `up_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vighettext_tbl`
--
ALTER TABLE `vighettext_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workcat_tbl`
--
ALTER TABLE `workcat_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_tbl`
--
ALTER TABLE `work_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `box_tbl`
--
ALTER TABLE `box_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `page_tbl`
--
ALTER TABLE `page_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_tbl`
--
ALTER TABLE `post_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section_tbl`
--
ALTER TABLE `section_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting tab`
--
ALTER TABLE `setting tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taber_tbl`
--
ALTER TABLE `taber_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `textv_tbl`
--
ALTER TABLE `textv_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `up_tbl`
--
ALTER TABLE `up_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vighettext_tbl`
--
ALTER TABLE `vighettext_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workcat_tbl`
--
ALTER TABLE `workcat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_tbl`
--
ALTER TABLE `work_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
