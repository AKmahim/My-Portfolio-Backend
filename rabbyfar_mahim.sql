-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2024 at 08:01 PM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rabbyfar_mahim`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `project_title` text COLLATE utf8mb4_unicode_ci,
  `project_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `demo_link` text COLLATE utf8mb4_unicode_ci,
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `code_link` text COLLATE utf8mb4_unicode_ci,
  `project_category` longtext COLLATE utf8mb4_unicode_ci,
  `project_serial` int DEFAULT '1000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_title`, `project_picture`, `short_description`, `demo_link`, `video_link`, `code_link`, `project_category`, `project_serial`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce Website using Laravel', 'project/1812681202520518.png', 'Ajwanshop is an e-commerce platform that sells various types of projects, such as t-shirts,perfume,and many types of electronic gadgets. I built it for a Bangladeshi client using PHP Laravel.', 'https://ajwanshop.com', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"Tailwind\",\"DaisyUI\",\"NPM\",\"Vite\"]', 1, '2024-10-11 22:31:46', '2024-10-13 00:45:53'),
(2, 'Travel Website Template', 'project/1812781982582575.png', 'This is a traveling website template.Developed first with the Mobile First methodology, then for desktop.Compatible with all mobile devices and with a beautiful and pleasant user interface.', 'https://akmahim.github.io/Traveling-guide/', NULL, 'https://github.com/AKmahim/Traveling-guide', '[\"HTML\",\"CSS\",\"Javascript\",\"SCSS\"]', 100, '2024-10-13 01:13:38', '2024-10-13 07:17:08'),
(3, 'A Bangladeshi AR/VR company website', 'project/1812782671205712.png', 'This was the website of a Bangladesh-based software company. This company provides game development solutions, AR/VR games, interactive solutions, and software solutions.', 'https://xri.com.bd', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"Tailwind\",\"NPM\",\"Vite\",\"Alpinejs\"]', 3, '2024-10-13 01:24:34', '2024-10-13 07:18:04'),
(4, 'Algorithm Visualizer', 'project/1812783087438883.png', 'The Algorithm Visualizer is a web-based application designed to demonstrate the working mechanisms of popular algorithms used in computer science and data structures. This project focuses on visualizing key algorithms like Linear Search, Binary Search, Bubble Sort, Insertion Sort, Selection Sort, Merge Sort, and Quick Sort.', 'https://akmahim.github.io/Algorithm-visualizer-vanillajs/', NULL, 'https://github.com/AKmahim/Algorithm-visualizer-vanillajs', '[\"HTML\",\"CSS\",\"Javascript\",\"Tailwind\",\"NPM\",\"Vite\"]', 11, '2024-10-13 01:31:11', '2024-10-13 07:23:33'),
(5, 'A Software Company Portfolio Website', 'project/1812783480173473.png', 'RootsUpTech is a leading technology company that offers a wide range of services including 3D animation, web development, digital marketing', 'https://rootsuptech.com/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"Tailwind\",\"SCSS\"]', 12, '2024-10-13 01:37:26', '2024-10-13 07:23:21'),
(6, 'A Game Publication Company Website - XR Publisher', 'project/1812784036345889.png', 'XR Publisher is a game publisher company where they help game developer to publish their own game in XR game platform .', 'https://xrp.xri.com.bd/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"NPM\",\"Vite\"]', 13, '2024-10-13 01:46:16', '2024-10-13 07:17:31'),
(7, 'IT Agency Website - Ektechbd', 'project/1812784836940653.png', 'Ektechbd is an IT agency that provides many types of software solutions to Bangladeshi companies. Also, they attend many types of govt training program.', 'https://ektechbd.com/', NULL, NULL, '[\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"NPM\",\"Vite\"]', 10, '2024-10-13 01:59:00', '2024-10-13 07:18:43'),
(8, 'A Canadian Based Surrogacy Agency Website and Admin Dashboard', 'project/1812785434373731.png', 'FindSurrogate.com is an independent platform that brings surrogates, intended parents, and reputable agencies together. Their goal is to simplify the matching process, making it easy and stress-free for you.', 'https://findsurrogate.com/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"React\",\"Tailwind\",\"React Router Dom\",\"Nodejs\",\"NPM\",\"Vite\"]', 9, '2024-10-13 02:08:29', '2024-10-13 07:19:32'),
(9, 'Fortune Teller - A NFC based fun to play web game', 'project/1812786065942351.png', 'This project is a Desktop application that features a fun-filled gaming experience through two unique formats: a web-based game and an NFC card-based game called Fortune Teller. Players interact with the fortune-telling game to receive humorous predictions, offering an engaging and lighthearted way to have fun and explore playful possibilities.', NULL, NULL, NULL, '[\"HTML\",\"CSS\",\"Javascript\",\"React\",\"Tailwind\",\"React Router Dom\",\"DaisyUI\",\"NPM\",\"Vite\",\"Electronjs\"]', 8, '2024-10-13 02:18:32', '2024-10-13 07:19:47'),
(10, 'Alponay Boishakh Photobooth', 'project/1812787821931454.png', 'Aloponay Boishakh is a cultural festival of bangladesh where we celebrate bangali new year . This project was a photobooth where a visitor can take picture then our system will remove the background of the image and set a alponay boishakh background then visitor can download the image using a QR code. This project was build for Banglalink Telecom and berger bangladesh.This was a desktop application so it does not have any demo link.', NULL, NULL, NULL, '[\"Python\",\"Flask\",\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"React\",\"Tailwind\",\"React Router Dom\",\"DaisyUI\",\"Nodejs\",\"Expressjs\",\"NPM\",\"Vite\",\"Capacitorjs\",\"Desktop App\"]', 7, '2024-10-13 02:46:26', '2024-10-13 07:20:18'),
(11, 'Alponay Boishakh Microsite and Admin Dashboard', 'project/alponay-boishakh-microsite.png', 'Alponay Boishakh Microsite is a website of a bangladeshi event called Alponay Boishakh that happened in 14th April as Bangali new year . Here in this site you can draw art and submit it after the event you will get a prize . Here you can draw free hand drawing . This event was organized by Banglalink Telecom and Berger Bangladesh', 'https://alponayboishakh.com/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"PHP\",\"Laravel\",\"Tailwind\",\"DaisyUI\",\"NPM\",\"Vite\"]', 6, '2024-10-13 03:20:45', '2024-10-13 07:21:13'),
(12, 'A Bangladeshi NGO Website - WASDPA', 'project/wasdpa.png', 'WASDPA is a Bangladeshi NGO. They work with the poor region of Bangladesh to develop infrastructure and health consciousness. This website represents their portfolio and showcase their novel work.', 'https://wasdpa.com/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"NPM\",\"Vite\"]', 4, '2024-10-13 04:08:40', '2024-10-13 07:21:34'),
(14, 'Syngenta Event Interactive Map', 'project/1812795066409734.png', 'This project was an interactive event location view map-based project. here admin can create as many as the event they want and show them on the map. when a user clicks on a map location it will show the event schedule of that district. This project was for Syngenta Bangladesh.', NULL, NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"PHP\",\"Laravel\",\"Tailwind\",\"Nodejs\",\"NPM\",\"Vite\"]', 5, '2024-10-13 04:41:35', '2024-10-13 07:19:02'),
(15, 'Weather App using React and OpenWeather API', 'project/1812795658450867.png', 'This is a weather app using react and open weather API. here you can watch multiple locations weather forecast, wind speeds, visibility ranges etc.', 'https://smoggy-weather.surge.sh/', NULL, 'https://github.com/AKmahim/30-days-30-js-project/tree/main/day-1-weather-app-js', '[\"HTML\",\"CSS\",\"Javascript\",\"React\",\"Tailwind\",\"React Router Dom\",\"DaisyUI\",\"Nodejs\",\"NPM\",\"Vite\",\"Axios\"]', 1000, '2024-10-13 04:51:00', '2024-10-13 04:51:27'),
(16, 'A Todo list app using React', 'project/1812796827534351.png', 'This is a simple react todo list app where a user can create, delete,update a task and checked the task.', 'https://fabulous-to-do-list.surge.sh/', NULL, 'https://github.com/AKmahim/30-days-30-js-project/tree/main/day-2-to-do-list', '[\"HTML\",\"CSS\",\"Javascript\",\"React\",\"Tailwind\",\"React Router Dom\",\"DaisyUI\",\"NPM\",\"Vite\"]', 1000, '2024-10-13 05:09:35', '2024-10-13 05:10:46'),
(17, '360 degree panaroma view in website', 'project/1812797215972287.png', 'This is a simple 360 degree panaroma view website using threejs .', 'https://akmahim.github.io/360-panorama-view-site/', NULL, 'https://github.com/AKmahim/360-panorama-view-site', '[\"HTML\",\"CSS\",\"Javascript\",\"360 degree Tour\",\"Threejs\"]', 100, '2024-10-13 05:15:45', '2024-10-14 07:33:56'),
(18, 'Bkash Live Concert Streaming App', 'project/1812797802107050.gif', 'This project was for Bkash ( A Bangladeshi FinTech company ) . They organize a concert where they stream that concert from this website and people can pay 10BDT through their payment system and watch the concert stream. Also this site have a admin panel from where an admin can see important information about the concert and change multiple things as need.', 'https://bkashsteam.com/', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Bootstrap CSS\",\"PHP\",\"Laravel\",\"React\",\"Tailwind\",\"React Router Dom\",\"DaisyUI\",\"Nodejs\",\"Vite\",\"Axios\"]', 2, '2024-10-13 05:25:04', '2024-10-13 07:16:25'),
(19, 'A Web Based Interactive Game Using JS', 'project/1812798133421945.png', 'This is a web-based interactive game. where a player can drag and drop a task to a game character and optimize the performance . the game result will be based on their performance.', 'https://akmahim.github.io/conveyanceGame/', NULL, 'https://github.com/AKmahim/conveyanceGame', '[\"HTML\",\"Javascript\"]', 1001, '2024-10-13 05:30:20', '2024-10-13 05:30:20'),
(20, '3D Customs Box Designing Site', 'project/1812798730555879.png', 'This is a 3D website where you can create customs 3d box and you can upload multiple texture on the 3D box and show it does it look after implementing texture.This is website is build using Threejs.', 'https://dreary-machine.surge.sh/', NULL, 'https://github.com/AKmahim/3D-box-custom-designer', '[\"HTML\",\"CSS\",\"Javascript\",\"Tailwind\",\"NPM\",\"Vite\",\"Threejs\"]', 50, '2024-10-13 05:39:50', '2024-10-13 05:40:59'),
(21, '3D Customs Shoe Designing Site', 'project/1812799095952899.png', 'This is a custom shoe designing site where you can customize you shoe design and can change shoe multiple layer color. and you can also view this shoe in 3D and you can move 360 degree view', 'https://sprightly-cocada-dc5186.netlify.app/', NULL, 'https://github.com/AKmahim/react-three-fiber-custom-shoe-designer', '[\"Javascript\",\"React\",\"Tailwind\",\"React Router Dom\",\"NPM\",\"Vite\",\"Threejs\"]', 100, '2024-10-13 05:45:38', '2024-10-14 07:26:05'),
(22, 'Dhakai Biriyani - a Online Food Cart', 'project/1812799977428988.png', 'This is a online food card ecommerce website where you can order a food specially biriyani items.This website also have a admin dashboard where admin can manage order , sell , and product', 'https://dhakaybiriyani.com', NULL, NULL, '[\"MySQL\",\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"PHP\",\"Laravel\"]', 50, '2024-10-13 05:59:39', '2024-10-13 06:00:09'),
(23, 'A Portfolio Website Template', 'project/1812800514356467.png', 'This is HTML template for portfolio website', 'https://akmahim.github.io/portfolio-demo-website/', NULL, 'https://github.com/AKmahim/portfolio-demo-website?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\"]', 1000, '2024-10-13 06:08:11', '2024-10-13 06:08:11'),
(24, 'A Banking website template', 'project/1812800708666946.png', 'This is a banking website template using HTML,CSS , javascript', 'https://akmahim.github.io/Banking-website-demo/', NULL, 'https://github.com/AKmahim/Banking-website-demo?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\",\"SCSS\"]', 1000, '2024-10-13 06:11:16', '2024-10-13 06:11:16'),
(25, 'A Food App template', 'project/1812800886906915.png', 'This is a food app template using HTML,CSS , javascript', 'https://akmahim.github.io/Food-app/', NULL, 'https://github.com/AKmahim/Food-app?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\",\"SCSS\"]', 100, '2024-10-13 06:14:06', '2024-10-13 06:14:06'),
(26, 'A Portfolio Website Template', 'project/1812801175906862.png', 'This is a personal portfolio website template using HTML,CSS , javascript', 'https://akmahim.github.io/Portfolio_demo/', NULL, 'https://github.com/AKmahim/Portfolio_demo?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\"]', 100, '2024-10-13 06:18:42', '2024-10-13 06:18:42'),
(27, 'USA Based GYM website', 'project/1812801522365548.png', 'This was a GYM website for my USA client.Here he represent his GYM and GYM price package and have an image gallery so visualize his GYM through this website.', 'https://akmahim.github.io/Fitness_website/', NULL, NULL, '[\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\"]', 100, '2024-10-13 06:24:12', '2024-10-13 06:24:12'),
(28, 'Bonglancer - IT Agency Website', 'project/1812801945090898.png', 'This was a Parallax scrolling website of a IT Agency. This was a portfolio of that company.', 'https://akmahim.github.io/bonglancer/', NULL, NULL, '[\"Javascript\",\"React\",\"Tailwind\"]', 1000, '2024-10-13 06:30:55', '2024-10-13 06:30:55'),
(29, 'A Restaurant Website Template', 'project/1812802234037891.png', 'This was a restaurant website template build using HTML ,CSS and javascript only', 'https://akmahim.github.io/Resto-website/', NULL, 'https://github.com/AKmahim/Resto-website?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\"]', 1001, '2024-10-13 06:35:31', '2024-10-13 06:35:47'),
(30, 'Image Hover Effect Component', 'project/1812803089086170.png', 'This was a image hover effect custom component.', 'https://akmahim.github.io/Front-end-components-build-up/card-hover-effect', NULL, 'https://github.com/AKmahim/Front-end-components-build-up/tree/master/card-hover-effect', '[\"HTML\",\"CSS\",\"Javascript\"]', 1000, '2024-10-13 06:49:06', '2024-10-13 06:49:06'),
(31, 'Fresh Food Selling Sites Template', 'project/1812803546366656.png', 'This was a fresh food selling website template using HTML,CSS , javascript', 'https://akmahim.github.io/fresh-meal-online/', NULL, 'https://github.com/AKmahim/fresh-meal-online', '[\"HTML\",\"CSS\",\"Javascript\",\"SCSS\"]', 1000, '2024-10-13 06:56:22', '2024-10-13 06:56:22'),
(32, 'A Digital Agency Website Template', 'project/1812803943148449.png', 'This was a bootstrap digital agency website template using bootstrap.', NULL, NULL, 'https://github.com/AKmahim/Web-development/tree/master/BS-project-2', '[\"HTML\",\"CSS\",\"Javascript\",\"Bootstrap CSS\",\"SCSS\"]', 1000, '2024-10-13 07:02:41', '2024-10-13 07:02:41'),
(33, 'Basketball Web Game using JS', 'project/1812804339970909.png', 'This is a web game of basketball .', 'https://akmahim.github.io/backetball-game-js/', NULL, 'https://github.com/AKmahim/backetball-game-js?tab=readme-ov-file', '[\"HTML\",\"CSS\",\"Javascript\",\"Web Game\"]', 1000, '2024-10-13 07:08:59', '2024-10-14 07:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'C', '2024-10-11 00:11:14', '2024-10-11 00:11:14'),
(3, 'C++', '2024-10-11 00:28:28', '2024-10-11 00:28:28'),
(4, 'Python', '2024-10-11 00:28:33', '2024-10-11 00:28:33'),
(5, 'Flask', '2024-10-11 00:28:38', '2024-10-11 00:28:38'),
(6, 'Sqlite', '2024-10-11 00:28:45', '2024-10-11 00:28:45'),
(7, 'MySQL', '2024-10-11 00:28:51', '2024-10-11 00:28:51'),
(8, 'HTML', '2024-10-11 00:28:56', '2024-10-11 00:28:56'),
(9, 'CSS', '2024-10-11 00:29:02', '2024-10-11 00:29:02'),
(10, 'Javascript', '2024-10-11 00:29:11', '2024-10-11 00:29:11'),
(11, 'Bootstrap CSS', '2024-10-11 00:29:25', '2024-10-11 00:29:25'),
(12, 'PHP', '2024-10-11 00:29:30', '2024-10-11 00:29:30'),
(13, 'Laravel', '2024-10-11 00:29:37', '2024-10-11 00:29:37'),
(14, 'React', '2024-10-11 00:29:44', '2024-10-11 00:29:44'),
(15, 'Tailwind', '2024-10-11 00:29:51', '2024-10-11 00:29:51'),
(16, 'React Router Dom', '2024-10-11 00:30:02', '2024-10-11 00:30:02'),
(17, 'DaisyUI', '2024-10-11 00:30:10', '2024-10-11 00:30:10'),
(18, 'MaterialUI', '2024-10-11 00:30:18', '2024-10-11 00:30:18'),
(19, 'Shadcdn', '2024-10-11 00:30:26', '2024-10-11 00:30:26'),
(20, 'MagicUI', '2024-10-11 00:30:33', '2024-10-11 00:30:33'),
(21, 'Arduino Project', '2024-10-11 00:30:43', '2024-10-11 00:30:43'),
(22, 'IOT', '2024-10-11 00:30:49', '2024-10-11 00:30:49'),
(23, 'Robotics', '2024-10-11 00:30:56', '2024-10-11 00:30:56'),
(24, 'Nodejs', '2024-10-11 00:31:04', '2024-10-11 00:31:04'),
(25, 'Expressjs', '2024-10-11 00:31:12', '2024-10-11 00:31:12'),
(26, 'NPM', '2024-10-11 00:31:17', '2024-10-11 00:31:17'),
(27, 'Vite', '2024-10-11 00:31:24', '2024-10-11 00:31:24'),
(28, 'AR', '2024-10-11 00:31:50', '2024-10-11 00:31:50'),
(29, 'VR', '2024-10-11 00:31:56', '2024-10-11 00:31:56'),
(30, '360 degree Tour', '2024-10-11 00:32:06', '2024-10-11 00:32:06'),
(31, 'Alpinejs', '2024-10-12 01:49:41', '2024-10-12 01:49:41'),
(32, 'SCSS', '2024-10-13 01:14:23', '2024-10-13 01:14:23'),
(33, 'Nextjs', '2024-10-13 02:17:39', '2024-10-13 02:17:39'),
(34, 'Electronjs', '2024-10-13 02:17:44', '2024-10-13 02:17:44'),
(35, 'Capacitorjs', '2024-10-13 02:17:49', '2024-10-13 02:17:49'),
(36, 'React Native', '2024-10-13 02:17:56', '2024-10-13 02:17:56'),
(37, 'Desktop App', '2024-10-13 02:52:45', '2024-10-13 02:52:45'),
(38, 'Axios', '2024-10-13 04:51:10', '2024-10-13 04:51:10'),
(39, 'Threejs', '2024-10-13 05:14:24', '2024-10-13 05:14:24'),
(40, 'Web Game', '2024-10-13 06:01:11', '2024-10-13 06:01:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
