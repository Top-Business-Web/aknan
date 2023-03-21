-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2023 at 10:31 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aknan`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `details_ar`, `details_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/about/34361679227451.png', 'أكنان أحد قطاعات شركة ساطعة التعمير للتطوير والاستثمار العقاري المتخصصة في التطوير السكني والعقارات .', 'Aknan is one of the sectors of Sati’a Al-Tameer Development and Real Estate Investment Company, which specializes in residential development and real estate.', 'استوحينا لكم “أكنان” لتوفر لكم الهدوء والراحة في مجمعات سكنية عصرية كنا قد رسمناها بشغف لتلبي لكم الخصوصية والرفاهية التي ترتقي بك إلى مفهوم آخر من مفهوم السكن لكي نصنع الفرق أطلقنا الخيال وقمنا بتصميم “مساكن أكنان” التي تستحقون العيش بها وأن تكون جزء من ذكرياتكم الجميلة', 'We inspired you “Aknan” to provide you with calm and comfort in modern residential complexes that we had drawn with passion to provide you with privacy and luxury that elevates you to another concept of housing in order to make a difference. We unleashed imagination and designed “Aknan Residences” that you deserve to live in and be part of your memories. the beautiful', 'تشمل قاعدة البيانات لدينا أكثر من 000,10 وحدة سكنية مما يسمح لعمالئنا باختيار عقار يتناسب تماًما مع متطلباتهم وأهدافهم. يشمل شركاؤنا أكثر من 20 مطوًرا موثوًقا به بالإضافة بالعمل مع وزارة االسكان. تعرض مشاريعنا في مركز سكني ولدينا فريق مبيعات متواجد لتقديم افضل خدمة لعمالئنا.', 'Our database includes more than 10,000 housing units, allowing our clients to choose a property that perfectly matches their requirements and goals. Our partners include more than 20 trusted developers in addition to working with the Ministry of Housing. Our projects are displayed in a residential center and we have a sales team available to provide the best service to our customers.', '2023-03-19 12:04:28', '2023-03-20 12:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'abdullah', 'admin@admin.com', '$2y$10$nhkrO3gbG1sEh.PamnwLDOTIuuHtIgN//zQjUca3.KD6o6ij/5982', 'assets/uploads/admins/99801679133509.webp', '2023-03-18 09:57:49', '2023-03-18 09:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint UNSIGNED NOT NULL,
  `main_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('villa','house') COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` int NOT NULL,
  `bathroom` int NOT NULL,
  `kitchen` int NOT NULL,
  `livingroom` int NOT NULL,
  `services_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `main_img`, `images`, `title_ar`, `title_en`, `address_ar`, `address_en`, `type`, `bedroom`, `bathroom`, `kitchen`, `livingroom`, `services_id`, `phone`, `email`, `whatsapp`, `created_at`, `updated_at`) VALUES
(2, 'assets/uploads/buildings/69541679232515.jpg', '[\"assets\\/uploads\\/buildings\\/56681679149870.jpg\",\"assets\\/uploads\\/buildings\\/99971679149870.jpg\",\"assets\\/uploads\\/buildings\\/27301679149870.png\"]', 'نموذج أ', 'Model A', 'شرق الرياض,المملكة العربية السعودية', 'East of Riyadh, Kingdom of Saudi Arabia', 'house', 2, 2, 2, 2, 5, '920033007', 'info@aknann.com', '920033007', '2023-03-18 14:31:10', '2023-03-20 13:51:32'),
(3, 'assets/uploads/buildings/69541679232515.jpg', '[\"assets\\/uploads\\/buildings\\/56681679149870.jpg\",\"assets\\/uploads\\/buildings\\/99971679149870.jpg\",\"assets\\/uploads\\/buildings\\/27301679149870.png\"]', 'نموذج ب', 'Model B', 'شرق الرياض,المملكة العربية السعودية', 'East of Riyadh, Kingdom of Saudi Arabia', 'house', 2, 3, 2, 2, 5, '920033007', 'info@aknann.com', '920033007', '2023-03-18 14:31:10', '2023-03-20 13:51:10'),
(4, 'assets/uploads/buildings/69541679232515.jpg', '[\"assets\\/uploads\\/buildings\\/56681679149870.jpg\",\"assets\\/uploads\\/buildings\\/99971679149870.jpg\",\"assets\\/uploads\\/buildings\\/27301679149870.png\"]', 'نموذج ج', 'Model C', 'شرق الرياض,المملكة العربية السعودية', 'East of Riyadh, Kingdom of Saudi Arabia', 'house', 4, 2, 2, 2, 5, '920033007', 'info@aknann.com', '920033007', '2023-03-18 14:31:10', '2023-03-20 13:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'eldapour@duck.com', '01005717155', 'ss', 'wsedrfghujh', '2023-03-20 08:37:45', '2023-03-20 08:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint NOT NULL,
  `title_ar` varchar(225) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `title_en` varchar(225) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `desc_ar` text COLLATE utf8mb3_unicode_ci,
  `desc_en` text COLLATE utf8mb3_unicode_ci,
  `image` text COLLATE utf8mb3_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'المسمى الوظيفى', 'Job title', '<ul>\r\n	<li>لديه خبرة لاتقل عن 3 سنوات</li>\r\n	<li>عمره لايقل عن 30 سنة</li>\r\n	<li>ان يكون من سكان السعودية</li>\r\n</ul>', '<ul>\r\n	<li>He has an experience of not less than 3 years</li>\r\n	<li>He is not less than 30 years old</li>\r\n	<li>To be a resident of Saudi Arabia</li>\r\n</ul>', 'assets/uploads/jobs/15211679304785.jpg', '1', '2023-03-20 09:32:28', '2023-03-20 11:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `job_contact`
--

CREATE TABLE `job_contact` (
  `id` bigint NOT NULL,
  `name` varchar(225) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `file` text COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `job_contact`
--

INSERT INTO `job_contact` (`id`, `name`, `email`, `phone`, `salary`, `file`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'eldapour@duck.com', '01005717155', '2342423', 'assets/uploads/job/45021679311133.docx', '2023-03-20 11:18:53', '2023-03-20 11:18:53'),
(4, 'admin', 'eldapour@duck.com', '4324234', '12345', 'assets/uploads/job/61091679311316.jpg', '2023-03-20 11:21:56', '2023-03-20 11:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_20_123415_create_admins_table', 1),
(3, '2023_03_18_112407_create_settings_table', 1),
(4, '2023_03_18_113237_create_partners_table', 1),
(6, '2023_03_18_114235_create_services_table', 1),
(8, '2023_03_18_115052_create_questions_table', 1),
(9, '2023_03_18_115601_create_contacts_table', 1),
(10, '2023_03_18_113552_create_service_homes_table', 2),
(11, '2023_03_18_114429_create_buildings_table', 3),
(12, '2023_03_19_133556_create_about_us_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title_ar`, `title_en`, `img`, `created_at`, `updated_at`) VALUES
(4, 'mondi', 'mondi', 'assets/uploads/partners/59991679218060.png', '2023-03-19 09:27:40', '2023-03-19 09:27:40'),
(5, 'bloomberg business', 'bloomberg business', 'assets/uploads/partners/79481679218092.png', '2023-03-19 09:28:12', '2023-03-19 09:28:12'),
(6, 'bank albilad', 'bank albilad', 'assets/uploads/partners/56961679218115.png', '2023-03-19 09:28:35', '2023-03-19 09:28:35'),
(7, 'بنك الجزيرة', 'bank eljazira', 'assets/uploads/partners/29501679218170.png', '2023-03-19 09:29:30', '2023-03-19 09:29:30'),
(8, 'بنك الرياض', 'riyad bank', 'assets/uploads/partners/93771679218208.png', '2023-03-19 09:30:08', '2023-03-19 09:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `salary` int NOT NULL,
  `financial` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `supported` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `phone`, `price`, `salary`, `financial`, `supported`, `created_at`, `updated_at`) VALUES
(2, 'aa', 'aa', 213, 132, 'yes', 'no', '2023-03-19 11:52:14', NULL),
(3, 'admin', '01005717155', 200, 12345, 'yes', 'no', '2023-03-19 14:41:21', '2023-03-19 14:41:21'),
(4, 'admin', '01005717155', 200, 12345, 'yes', 'no', '2023-03-20 07:33:24', '2023-03-20 07:33:24'),
(5, 'aa', '13123', 200, 12345, 'yes', 'no', '2023-03-20 07:45:26', '2023-03-20 07:45:26'),
(6, 'aa', '13123', 200, 12345, 'yes', 'no', '2023-03-20 07:45:27', '2023-03-20 07:45:27'),
(7, 'admin', '01005717155', 200, 12345, 'yes', 'no', '2023-03-20 07:45:38', '2023-03-20 07:45:38'),
(8, 'admin', '01005717155', 3123, 12345, 'yes', 'no', '2023-03-20 07:52:00', '2023-03-20 07:52:00'),
(9, 'admin', '01005717155', 200, 12345, 'yes', 'yes', '2023-03-20 08:02:02', '2023-03-20 08:02:02'),
(10, 'admin', '01005717155', 200, 12345, 'yes', 'no', '2023-03-20 08:03:20', '2023-03-20 08:03:20'),
(11, 'admin', '01005717155', 3242, 1323, 'yes', 'yes', '2023-03-20 08:04:15', '2023-03-20 08:04:15'),
(12, 'كريم خالد علي', '3432245', 34324, 12345, 'yes', 'no', '2023-03-20 12:25:48', '2023-03-20 12:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `logo`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(3, 'assets/uploads/services/33811679231120.png', 'assets/uploads/services/86731679229600.jpg', 'اكنان العوالي', 'Aknan Al-Awali', 'نقدم لك افضل المساكن لتوفر لكم الهدوء والراحة في مجمعات سكنية عصرية', 'We offer you the best housing to provide you with calm and comfort in modern residential complexes', '2023-03-18 14:23:58', '2023-03-19 13:05:20'),
(4, 'assets/uploads/services/57541679231114.png', 'assets/uploads/services/13841679229649.jpeg', 'اكنان الشرق', 'Aknan East', 'نقدم لك افضل المساكن لتوفر لكم الهدوء والراحة في مجمعات سكنية عصرية', 'We offer you the best housing to provide you with calm and comfort in modern residential complexes', '2023-03-19 12:40:49', '2023-03-19 13:05:14'),
(5, 'assets/uploads/services/51171679231103.png', 'assets/uploads/services/2101679229720.jpg', 'اكنان الفرسان', 'Aknan Knights', 'نقدم لك افضل المساكن لتوفر لكم الهدوء والراحة في مجمعات سكنية عصرية', 'We offer you the best housing to provide you with calm and comfort in modern residential complexes', '2023-03-19 12:42:00', '2023-03-19 13:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_homes`
--

CREATE TABLE `service_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_homes`
--

INSERT INTO `service_homes` (`id`, `image`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/setting/47631679312652.jpg', 'لماذا تختار شركتنا ؟', '? Why choose our company', 'راحة فى الاختيار لدينا أكثر من 000,10 وحدة سكنية فى قاعدة البيانات مما يسمح لعمالئنا باختيار عقار يتناسب تماًما مع متطلباتهم وأهدافهم. فإننا نستثمر بنشاط في تطوير أدوات تكنولوجيا المعلومات الخاصة بنا. على سبيل المثال ، نحن نطور منصات بيع العقارات المبتكرة وأنظمة CRM لعمالئنا، لذلك تساعد هذه الأدوات والخيارات الجديدة في العثور على أفضل العقارات وتقديمها لعمالئنا.', 'Convenience in choosing We have more than 10,000 housing units in the database, allowing our customers to choose a property that perfectly matches their requirements and goals. We actively invest in developing our own IT tools. For example, we develop innovative real estate sales platforms and CRM systems for our clients, so these new tools and options help find and offer the best properties for our clients.', NULL, '2023-03-20 11:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `bg_img` text COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `location_work` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `bg_img`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `address_ar`, `address_en`, `facebook`, `twitter`, `google_plus`, `youtube`, `instagram`, `phone`, `whatsapp`, `email`, `location`, `location_work`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/setting/98611679140272.png', 'assets/uploads/setting/34881679140272.jpg', 'مرحبا بكم فى اكنان', 'Welcome to Aknan', 'نرتقى بمفاهيم الوحدات السكنية باسلوب مميز وجودة تجمع بين الحداثة والاصالة', 'We promote the concepts of residential units in a distinctive style and quality that combines modernity and originality', 'العليا ، الغدير ، الرياض 13311 ، المملكة العربية السعودية', 'Al Ulaya, Al Ghadir, Riyadh 13311, Saudi Arabia', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.google.com', 'https://www.youtube.com/', 'https://www.instagram.com', '920033007', '920033007', 'info@aknann.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7245.471314495042!2d46.647034!3d24.770251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36dffea96d9%3A0x7c648b4c3190a4f7!2z2YXYsdmD2LIg2LPZg9mG2Yog2KfZhNi02KfZhdmE!5e0!3m2!1sen!2seg!4v1679139753359!5m2!1sen!2seg', 'https://www.google.com/maps/d/embed?mid=18pw3aP1xsx1H6LtT6UExFq3sJeSU1ls&ehbc=2E312F', NULL, '2023-03-20 11:39:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services` (`services_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_contact`
--
ALTER TABLE `job_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_homes`
--
ALTER TABLE `service_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_contact`
--
ALTER TABLE `job_contact`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_homes`
--
ALTER TABLE `service_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `services` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
