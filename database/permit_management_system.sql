-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2024 at 01:38 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permit_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_permit_applications`
--

CREATE TABLE `business_permit_applications` (
  `id` bigint UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_application` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classification_cottage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amendment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transfer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_application` date DEFAULT NULL,
  `date_business_started` date DEFAULT NULL,
  `type_of_org` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DTI_SEC_CDA_registration_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DTI_SEC_CDA_date_of_Registration` date DEFAULT NULL,
  `ctc_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_name_franchise` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_building_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_city_municipality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_Tel_No_Mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_building_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_Tel_No_Mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_city_municipality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owners_province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_permit_applications`
--

INSERT INTO `business_permit_applications` (`id`, `status`, `business_application`, `classification_cottage`, `amendment`, `mode_of_payment`, `transfer`, `date_of_application`, `date_business_started`, `type_of_org`, `DTI_SEC_CDA_registration_No`, `DTI_SEC_CDA_date_of_Registration`, `ctc_no`, `TIN`, `last_name`, `first_name`, `middle_name`, `business_name`, `trade_name_franchise`, `business_building_name`, `business_street`, `business_barangay`, `business_city_municipality`, `business_province`, `business_Tel_No_Mobile`, `owners_building_name`, `owners_street`, `owners_barangay`, `owners_Tel_No_Mobile`, `owners_city_municipality`, `owners_province`, `created_at`, `updated_at`, `business_type`) VALUES
(14, 'Approved', 'Renew', '1', 'From Single to\r\n                                            Corporation', 'Quarterly', 'Location', '1987-12-16', '1986-05-11', 'Single', 'Hic reiciendis eiusm', '1996-12-27', 'Ducimus nihil aut d', 'Magnam quae sint cum', 'Bowman', 'Jameson', 'Gavin Manning', 'Breanna Chambers', 'Indira Nolan', 'Demetria Middleton', 'Totam quaerat dolore', 'Aliquid et reprehend', 'Ea qui voluptas mini', 'Aute aliquid ab nihi', 'Eum ullamco blanditi', 'Phillip Cantrell', 'Modi esse anim exer', 'Nesciunt vel maiore', 'Velit dolor in susci', 'Adipisci perspiciati', 'Culpa do enim est di', '2024-04-22 23:33:25', '2024-05-17 20:05:19', NULL),
(15, 'Approved', 'New', '4', NULL, 'Annually', 'Location', '2018-02-28', '1990-08-17', 'Coop', 'In consequatur haru', '2010-07-24', 'Earum perferendis co', 'Suscipit ut cupidata', 'Vargas', 'Germane', 'Whilemina Kinney', 'Lila Navarro', 'Stewart Carrillo', 'Ciara Roth', 'Adipisicing aut inci', 'In aspernatur et dol', 'Ad impedit incididu', 'Quisquam dolore accu', 'Id qui ad ipsum ea', 'Irene Barton', 'Omnis nisi qui venia', 'Mollitia architecto', 'Irure facere similiq', 'Consectetur a dolor', 'Nulla omnis nobis nu', '2024-04-22 23:36:20', '2024-05-17 20:05:17', NULL),
(16, 'Approved', 'New', '3', '3', 'Annually', 'Ownership', '2020-04-28', '2010-05-26', 'Single', 'Dolorum sit quod rep', '1986-02-24', 'Suscipit asperiores', 'Atque sint vel atqu', 'Wong', 'Hammett', 'Desirae Solomon', 'Azalia Workman', 'Bianca Eaton', 'Rosalyn Lang', 'Asperiores omnis est', 'Vitae qui sint alias', 'Pariatur Do officia', 'Commodo qui magni re', 'Numquam voluptas omn', 'Emery Hartman', 'Explicabo Eius anim', 'Alias autem velit ma', 'Nam exercitation inc', 'Et consequatur Do l', 'Esse sit est praes', '2024-04-22 23:38:37', '2024-05-17 20:05:21', NULL),
(17, 'Approved', 'New', '1', '2', 'Quarterly', NULL, '2013-08-23', '2009-05-02', 'Coop', 'Cupiditate est proid', '1993-02-11', 'Cum velit possimus', 'Ex id sed in omnis', 'Gray', 'Echo', 'Emery Young', 'Cherokee Brock', 'Wade Hartman', 'Stewart Bray', 'Deserunt voluptas es', 'Sit itaque sit quia', 'Assumenda rerum ab f', 'Quis est quod ut et', 'Incididunt dolor qui', 'Jessica Reilly', 'Quia eaque est dolo', 'Eligendi nisi amet', 'Sit et iste rerum fu', 'Quam nesciunt ad ea', 'Facilis et rerum sun', '2024-04-23 01:57:50', '2024-04-23 01:59:02', NULL),
(18, 'Approved', 'Renew', '3', '6', 'Quarterly', 'Ownership', '1988-03-26', '2003-02-11', 'Coop', 'Necessitatibus magna', '1975-12-05', 'Magna velit omnis e', 'Modi deserunt except', 'Beasley', 'Debra', 'Amanda Ortiz', 'Kim Cotton', 'Pearl Ramos', 'Colton Brady', 'Beatae odit do debit', 'Ullam temporibus vol', 'Possimus officiis a', 'Velit totam laborum', 'Temporibus placeat', 'Ebony Lucas', 'Eu esse ut quibusdam', 'Dolorem dolorum id', 'Aliquip sit eu modi', 'Nam est nisi labore', 'Doloribus sed volupt', '2024-04-25 01:33:55', '2024-04-25 01:35:41', NULL),
(19, 'Approved', 'New', '2', '1', 'Annually', 'Ownership', '2024-04-26', '2024-04-26', 'Single', 'TEST', '2024-04-26', 'TEST', 'TEST', 'Alapsan', 'Glen Donn', 'Bayhon', 'Manok De Katay', 'Katay de Manok', 'GlenVille Bldn', 'kalsada de dalan', 'Bayuyan', 'Estancia', 'iloilo', '09120192109', 'brgy bayuyan', 'Kalye street', 'bayuyan', '102910291', 'Estqnci', 'oiloilo', '2024-04-25 08:46:57', '2024-04-25 08:47:26', NULL),
(20, 'Approved', 'New', '4', '1', 'Quarterly', 'Ownership', '2024-04-26', '2024-04-26', 'Single', '1212-323-2312', '2024-04-25', '0922202-11', '11-22121-2033', 'Alpasan', 'Glen Donn', 'Bayhon', 'MAnok De KAtay grill BAr', 'Katay De Manok', 'Chicken griller', 'Kalye street', 'Bayuyan', 'Estancia', 'Iloilo', '091220202', 'Grilled chemkin', 'Dalan de Kalye', 'Bayuyan', '0921201201', 'Estancia', 'Olioli', '2024-04-25 08:51:43', '2024-04-25 08:52:13', NULL),
(21, 'Approved', 'New', '1', '1', 'Annually', 'Ownership', '1977-01-02', '1988-09-02', 'Coop', 'TEST', '1998-08-02', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-04-25 09:08:18', '2024-04-25 09:53:20', NULL),
(22, 'Approved', 'Renew', '2', '2', 'Bi-Annually', 'Ownership', '2024-04-02', '2024-04-02', 'Single', 'TESTUPDATED', '2024-04-02', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', 'TEST2', '2024-04-25 21:49:47', '2024-04-25 21:54:08', NULL),
(23, 'Approved', NULL, '3', '6', 'Quarterly', NULL, '1987-01-24', '2001-04-02', 'Coop', 'Quis qui iusto sed q', '2012-12-01', 'Culpa numquam sit e', 'Deleniti quaerat qui', 'Guerra', 'Hop', 'Hector Tran', 'Roary Mercado', 'Callie Randolph', 'Jana Walsh', 'Animi magna alias m', 'Deleniti aut consequ', 'Minus temporibus quo', 'Nulla aliquam quod n', 'Tempora qui facilis', 'Clarke Faulkner', 'Id illo dolorum volu', 'Ea nihil voluptate v', 'Fugiat qui rerum ut', 'Dolorem voluptates s', 'Aut laboriosam eius', '2024-04-25 23:50:33', '2024-05-07 08:34:10', NULL),
(24, 'Approved', 'New', '1', '1', 'Annually', 'Ownership', '1978-12-13', '1973-10-25', 'Inc.', 'Atque earum sint ab', '2019-02-12', 'Eu aut suscipit libe', 'Laudantium nesciunt', 'Nguyen', 'Avram', 'Jaime Bowen', 'Maia Beck', 'Sierra Holman', 'Theodore Willis', 'Ea qui qui consectet', 'Vel voluptas veniam', 'Repudiandae dolorum', 'Dolor impedit tempo', 'Est sit Nam odit et', 'Brooke Holden', 'Voluptate adipisci q', 'Laborum Eos commod', 'Aut labore voluptate', 'Et tempore labore c', 'Ut rerum veritatis e', '2024-04-30 23:55:08', '2024-05-15 09:39:44', NULL),
(25, 'Approved', 'New', '1', '1', 'Annually', 'Ownership', '2024-05-08', '2024-05-08', 'Single', 'TEST', '2024-05-08', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-05-07 09:34:44', '2024-05-07 10:00:16', NULL),
(26, 'Approved', 'Renew', '2', '2', 'Bi-Annually', 'Location', '2024-05-08', '2024-05-08', 'Partnership', 'TEST', '2024-05-08', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-05-07 09:36:55', '2024-05-15 09:39:48', NULL),
(27, 'Approved', 'Renew', '2', '2', 'Bi-Annually', 'Location', '2024-05-08', '2024-05-08', 'Partnership', 'TEST', '2024-05-08', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-05-07 09:39:18', '2024-05-15 09:41:41', NULL),
(28, 'Approved', 'New', '1', '1', 'Annually', 'Ownership', '2024-05-09', '2024-05-09', NULL, 'another test', '2024-05-09', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', 'another test', '2024-05-07 09:39:56', '2024-05-23 23:52:40', NULL),
(29, 'Approved', 'New', '1', '1', 'Annually', 'Ownership', '2024-05-08', '2024-05-08', 'Single', 'SAMPLE', '2024-05-08', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', '2024-05-07 09:42:26', '2024-05-15 10:33:48', NULL),
(30, 'Approved', 'New', '3', '2', 'Bi-Annually', 'Location', '2024-05-15', '2024-05-15', 'Coop', 'SAMPLE', '2024-05-15', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', '2024-05-07 09:43:35', '2024-05-15 10:35:16', NULL),
(31, 'Approved', 'Renew', '2', '2', 'Bi-Annually', 'Ownership', '2024-05-09', '2024-05-09', 'Partnership', 'SAMPLE2', '2024-05-09', 'SAMPLE2', '12-345-67822222', 'Hidalgo2', 'Pearl2', 'Montehermoso2', 'Tinapayan gwa Balantian2', 'Tinapayan Ni Pearl2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', 'SAMPLE2', '2024-05-07 19:37:24', '2024-05-23 23:53:39', NULL),
(32, 'Approved', 'New', '4', '3', 'Quarterly', 'Ownership', '2024-05-08', '2024-05-08', 'Coop', 'test', '2024-05-08', 'test', 'test', 'test', 'test', 'test', 'another test', 'test', 'TEST', 'test', 'test', 'test', 'another testtest', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2024-05-07 19:39:47', '2024-05-15 10:37:01', NULL),
(33, 'Approved', 'New', '2', '1', 'Quarterly', 'Ownership', '2024-06-05', '2024-05-23', 'Single', 'test', '2024-05-14', 'test', 'test', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'testTEST', 'TEST', 'another test', 'TEST', 'TEST', 'TEST', '2024-05-07 19:40:53', '2024-05-15 10:37:15', NULL),
(34, 'Approved', 'New', '1', 'Fugit animi elit', 'Annually', 'Ownership', '1997-10-26', '1979-06-29', 'Inc.', 'Vero cumque enim del', '2010-02-27', 'Odio molestiae ea ip', 'Soluta cupiditate et', 'Mejia', 'Walker', 'Harrison Thornton', 'Kiona Carr', 'Axel Wood', 'Cassandra Mullins', 'Nostrud accusamus fa', 'Earum nisi sunt quas', 'Impedit sit magna', 'Et nisi est dolor au', 'In est dolorum ab n', 'Joelle Riddle', 'Magnam id officiis v', 'Suscipit recusandae', 'Deserunt dignissimos', 'Velit in ut archite', 'Commodi anim non fac', '2024-05-15 09:46:45', '2024-05-15 10:37:32', NULL),
(35, 'Approved', 'Renew', '2', 'Porro at qui sed ape', 'Bi-Annually', 'Ownership', '2017-07-17', '2008-06-29', 'Inc.', 'Voluptate sint dign', '2008-07-07', 'Animi quidem qui do', 'Adipisicing saepe ut', 'Tanner', 'Maris', 'Driscoll Guerrero', 'Melvin Singleton', 'Alyssa Floyd', 'Edward Brennan', 'Tempore aut est qu', 'Ut consequatur Quia', 'Vel deserunt quo cul', 'Odit amet earum ea', 'Aut iure reprehender', 'Wyatt Jarvis', 'Vel excepturi in ips', 'Autem maxime cillum', 'Amet rerum blanditi', 'Explicabo Esse opt', 'Omnis id praesentium', '2024-05-15 09:47:11', '2024-05-15 12:00:12', NULL),
(36, 'Approved', 'Renew', '2', 'At quo enim accusamu', 'Bi-Annually', 'Location', '1995-09-15', '2023-08-19', 'Inc.', 'Ipsum sit fugiat si', '1978-03-14', 'Anim duis recusandae', 'Culpa earum rem ad', 'Love', 'Cain', 'Darrel Powell', 'Rashad Finch', 'Dacey Richmond', 'Cooper Mcguire', 'Amet ad sit cillum', 'Dolor proident minu', 'Numquam nihil accusa', 'Et commodi porro ita', 'Fuga Reprehenderit', 'Clare Benson', 'Ullam quod enim ad e', 'Harum sint ea eaque', 'Qui eum dicta in fug', 'Mollit non ut offici', 'Libero praesentium n', '2024-05-15 09:47:21', '2024-05-15 12:00:27', NULL),
(37, 'Approved', 'Renew', '4', 'Ullamco nemo Nam fug', 'Annually', 'Location', '2022-07-14', '2000-03-30', 'Coop', 'In nostrum ullamco m', '2008-07-19', 'Laboriosam et est e', 'Ipsum fugit ducimus', 'Maxwell', 'Claire', 'Dakota Mcmillan', 'Stuart Herrera', 'Charde Knowles', 'Galvin Hartman', 'Cillum obcaecati rer', 'Aut molestiae non si', 'Animi vel magni ist', 'Enim ipsum omnis nec', 'Sed maxime sequi est', 'Madaline Forbes', 'Ad dignissimos conse', 'Iusto dolor itaque d', 'Quasi corporis paria', 'Rem reprehenderit od', 'Repellendus Non omn', '2024-05-15 09:47:34', '2024-05-15 16:53:07', NULL),
(38, 'Approved', 'New', '4', 'Aut aut incidunt do', 'Quarterly', NULL, '2024-02-25', '1983-08-23', 'Coop', 'Necessitatibus incid', '1973-08-22', 'Maiores magna iusto', 'Facilis et velit dic', 'Newton', 'Tana', 'Natalie Conrad', 'Holly Hancock', 'Madison Skinner', 'Cally Richmond', 'Officiis tempora et', 'Autem dignissimos mi', 'Dolore ut Nam conseq', 'Non saepe cupidatat', 'Ipsum facere magnam', 'Irene Stevenson', 'Exercitation repelle', 'Ut dolor omnis corru', 'Doloribus quaerat hi', 'Quam proident labor', 'Aut ullamco excepteu', '2024-05-15 09:47:58', '2024-05-15 10:30:55', NULL),
(39, 'Approved', 'Renew', NULL, 'Quam laborum Aut od', 'Bi-Annually', 'Ownership', '1992-07-16', '1997-11-07', 'Inc.', 'Velit veritatis non', '1994-09-07', 'Ipsum voluptate exer', 'Quam sequi quia sed', 'Watts', 'Burke', 'Linus Roman', 'Lavinia Dudley', 'Stuart Schwartz', 'Herrod French', 'Ea id irure consect', 'Nostrum id commodi b', 'Iste maxime quo ut u', 'Est laborum Porro', 'Qui magnam cumque it', 'Sydney David', 'Minima nihil ut ad a', 'Recusandae Maiores', 'Qui ut maiores praes', 'Mollit excepturi ist', 'Sint ratione esse d', '2024-05-15 11:18:45', '2024-05-15 16:53:40', NULL),
(40, 'Approved', 'Renew', '3', 'Commodo velit rerum', 'Annually', 'Ownership', '2012-08-15', '1998-08-07', 'Coop', 'Sed laboris in ipsa', '1998-07-25', 'Tempore ea illo dis', 'Sunt in ut nostrum', 'Ross', 'Amy', 'Sandra Kramer', 'Kuame Perkins', 'Ciara Gentry', 'Malik Byers', 'Nihil dolor dolor ei', 'Odio excepteur labor', 'Duis atque amet lau', 'Expedita optio sunt', 'Voluptas dolore sit', 'Alexander Kline', 'Beatae quasi aut dol', 'Illum voluptatem i', 'Ex quia ipsum offic', 'Qui quia similique d', 'Atque blanditiis vel', '2024-05-15 11:18:59', '2024-05-23 23:52:34', NULL),
(41, 'Approved', 'Renew', '1', 'Cupiditate qui qui q', 'Quarterly', 'Location', '1973-09-05', '1982-06-27', 'Partnership', 'Irure ullam adipisci', '2003-09-10', 'Et doloremque ut qui', 'Distinctio Consecte', 'Gilbert', 'Clark', 'Finn Waters', 'Adena Wall', 'Rebecca Solis', 'Holmes Humphrey', 'Perspiciatis dolor', 'Laudantium iure ips', 'Officia et in ab in', 'Magna soluta ea est', 'Mollitia esse iure', 'Melyssa Maldonado', 'Laborum odio reicien', 'Qui enim qui dolor s', 'Voluptate in nihil q', 'Ut obcaecati aut tem', 'Ab praesentium culpa', '2024-05-15 11:19:12', '2024-05-15 16:55:41', NULL),
(42, 'Approved', 'Renew', '2', 'Beatae earum laudant', 'Quarterly', 'Location', '1987-07-30', '2018-08-27', 'Coop', 'Perferendis qui numq', '2012-08-30', 'Cum sint quaerat min', 'In similique vero es', 'Mcclain', 'Caldwell', 'Whilemina Yates', 'Shaine Castro', 'Gannon Burt', 'Haley Rasmussen', 'Ullam eveniet est i', 'In quia iste consect', 'Eveniet labore omni', 'Nisi ea non exercita', 'Eiusmod officiis qua', 'Xerxes Shaw', 'Laboris qui sit tot', 'Voluptas esse sint', 'Quibusdam iusto assu', 'Sunt obcaecati cons', 'Sed temporibus quaer', '2024-05-15 11:19:22', '2024-05-15 16:55:48', NULL),
(43, 'Approved', 'Renew', '2', 'Aute mollitia ut fug', 'Bi-Annually', 'Ownership', '1981-02-02', '2014-08-28', 'Partnership', 'Consectetur dolor ei', '1976-12-25', 'Nisi suscipit et pro', 'Et quo eu modi ea mo', 'Campbell', 'Ashely', 'Illiana Bernard', 'Ulric Knapp', 'Fay Harrell', 'Hammett Fuller', 'Reprehenderit non a', 'Adipisicing accusamu', 'Non sit do quia omni', 'Deleniti soluta aute', 'Similique nihil dolo', 'Kenyon Conway', 'Dolore ipsam rerum s', 'Asperiores qui imped', 'Officia tempore off', 'Do esse occaecat do', 'Ducimus harum nesci', '2024-05-15 11:19:36', '2024-05-15 17:22:50', NULL),
(44, 'Approved', 'New', '2', 'Voluptatem necessit', 'Bi-Annually', 'Location', '2012-02-14', '1978-04-10', 'Inc.', 'Commodi molestiae te', '1975-09-26', 'Et harum laborum Se', 'Accusamus in excepte', 'Foster', 'Matthew', 'Geraldine Phillips', 'Lee Mosley', 'Geoffrey Sharpe', 'Leroy Morse', 'Natus eum accusantiu', 'In dolor unde accusa', 'Laboris autem fugiat', 'Ea reiciendis eiusmo', 'Dolor possimus aut', 'Curran Sharp', 'Deleniti eum quis qu', 'Porro do lorem dolor', 'Quas magna eos tempo', 'In est libero eiusmo', 'Sit molestiae qui c', '2024-05-15 11:19:51', '2024-05-15 19:43:35', NULL),
(45, 'Approved', 'Renew', '4', 'Dolorem animi totam', 'Quarterly', 'Ownership', '2023-06-25', '2003-01-25', 'Partnership', 'Provident mollit of', '1979-04-03', 'Est officia perferen', 'Nostrum cupidatat do', 'Macdonald', 'Jenna', 'Hiroko Carr', 'Arsenio Harvey', 'Patricia Pena', 'Price Rosario', 'Nihil molestiae ulla', 'Eos eu quisquam ex c', 'Lorem est voluptas a', 'Dolores accusantium', 'Tenetur fugit esse', 'Aspen Weaver', 'Totam laboriosam ut', 'Excepteur consequatu', 'Quia earum non sed n', 'Est aspernatur ut v', 'Exercitation quia pe', '2024-05-15 11:20:29', '2024-05-15 19:43:57', NULL),
(46, 'Approved', 'New', '4', 'Modi qui quod nostru', 'Quarterly', 'Ownership', '1985-09-11', '1972-05-31', 'Partnership', 'Ut fugiat et sed qui', '1973-02-23', 'Est aliquid ipsum', 'Eos at voluptas veni', 'Green', 'Hillary', 'Ramona Manning', 'Rylee Barron', 'Dacey Mosley', 'Joan Cameron', 'Deserunt id similiqu', 'Nulla eos dolores in', 'Consectetur consect', 'A atque autem eum cu', 'Cum dolor libero cup', 'Gavin Goodwin', 'Dolor ipsam quis et', 'Cumque ea ut reprehe', 'Sit voluptas nostrum', 'Doloribus dolorem il', 'Non ut vel id esse', '2024-05-15 11:20:39', '2024-05-17 19:50:51', NULL),
(47, 'Approved', 'New', '4', 'Ipsam voluptates tem', 'Annually', 'Location', '1971-04-09', '1987-08-21', 'Partnership', 'Ratione officia dolo', '2010-01-10', 'At adipisicing Nam p', 'Consequatur dolorem', 'Mckinney', 'Fleur', 'Silas Mcfadden', 'Deirdre Bishop', 'Bree Dale', 'Sandra Hendrix', 'Incididunt eum expli', 'Consequat Aspernatu', 'Aut quaerat in vitae', 'Recusandae Aut quis', 'Aut sunt magni comm', 'Wade Skinner', 'Elit dolor et iure', 'Praesentium reiciend', 'Natus enim nulla ame', 'Assumenda voluptatem', 'Atque non eu consequ', '2024-05-15 11:21:16', '2024-05-17 19:51:26', NULL),
(48, 'Approved', 'Renew', '3', 'Veniam consectetur', 'Annually', 'Ownership', '2023-12-01', '2008-03-25', 'Single', 'Ab do velit et recus', '2017-08-25', 'Veniam ab qui volup', 'Reprehenderit magna', 'Lloyd', 'Finn', 'Channing Mccall', 'Elijah Parker', 'Kellie Dean', 'Amethyst Randall', 'Tempore dolor assum', 'Provident dicta ani', 'Ea aut eligendi maxi', 'Deserunt eaque et ne', 'Excepturi veniam co', 'Lance Hess', 'Ut unde qui anim qui', 'Autem deleniti unde', 'Voluptates non cupid', 'Praesentium sapiente', 'Et ad veniam quia i', '2024-05-15 12:01:14', '2024-05-17 19:52:00', NULL),
(49, 'Approved', 'Renew', '2', 'Aliquip perspiciatis', 'Bi-Annually', 'Location', '2017-06-20', '1985-10-05', 'Partnership', 'Voluptate nihil ea e', '1992-03-15', 'Ut vel quia est temp', 'Iste id esse duis ac', 'Mcfarland', 'Savannah', 'Yvette Paul', 'Ivory Trevino', 'Reece Wilkins', 'Adria Love', 'Libero sed eveniet', 'Ullam quis dignissim', 'Ipsa beatae hic ips', 'Excepturi reprehende', 'Esse quidem quia pro', 'Isabelle Keith', 'Nulla minim necessit', 'Aut esse unde dolor', 'Incididunt ullam cul', 'Tempora minima lauda', 'Pariatur Eum commod', '2024-05-15 16:56:30', '2024-05-17 20:02:54', NULL),
(50, 'Approved', 'New', '2', 'Quis doloremque assu', 'Annually', NULL, '2005-12-03', '1973-12-03', 'Single', 'Ducimus delectus e', '2023-04-18', 'Nihil aut laborum C', 'Dolorem ullam et in', 'Calhoun', 'Elijah', 'Cara Warren', 'Martha Aguirre', 'Jin Freeman', 'Zelda Knapp', 'Qui dolorum et dolor', 'Magni voluptas volup', 'Amet sint a Nam nu', 'Praesentium consequu', 'Et reprehenderit rat', 'Deanna Greene', 'Praesentium veniam', 'Dolore ea natus irur', 'Et delectus totam r', 'Ipsum unde dolores', 'Et accusantium iste', '2024-05-17 20:05:38', '2024-05-17 23:45:13', NULL),
(51, 'Approved', 'New', '3', 'Dignissimos asperior', 'Annually', 'Ownership', '1994-02-20', '1971-01-10', 'Corp.', 'Quo eaque ut asperio', '2011-02-17', 'Delectus inventore', 'Deleniti reprehender', 'Branch', 'Byron', 'Daria Buck', 'Avye Gilliam', 'Hop Bolton', 'Yuli Lloyd', 'Optio voluptas enim', 'Facilis optio quo d', 'Molestiae ipsa eius', 'Laboris qui aliquam', 'Minus exercitation d', 'Rylee Oliver', 'Incidunt inventore', 'Iure eligendi molest', 'Necessitatibus volup', 'Irure Nam anim facil', 'Sed ut voluptas quis', '2024-05-17 20:05:56', '2024-05-17 22:51:29', NULL),
(52, 'Approved', 'New', '1', 'Proident nulla dele', 'Annually', 'Location', '1997-09-28', '1975-07-20', 'Coop', 'Maxime ab voluptatum', '2016-08-21', 'Laboriosam reiciend', 'Mollitia voluptatem', 'Morris', 'Sean', 'Isaac Nicholson', 'Lisandra Hahn', 'Kameko Pacheco', 'Jelani Ball', 'Hic occaecat quis sa', 'Non asperiores est', 'Rerum mollit volupta', 'Aut magna tempore n', 'Incididunt tempora q', 'Blossom Peters', 'Lorem porro doloremq', 'Placeat ut illum u', 'Culpa voluptatibus d', 'Omnis et illo ducimu', 'Et esse est quo dol', '2024-05-17 20:06:04', '2024-05-17 23:46:25', NULL),
(53, 'Approved', 'Renew', '4', 'Amet recusandae Qu', 'Annually', 'Ownership', '1973-11-07', '2005-09-14', 'Single', 'Eaque culpa molestia', '2023-12-11', 'Ratione commodo quae', 'Nulla eiusmod expedi', 'Sampson', 'Amethyst', 'Malik Richard', 'Phoebe Bauer', 'Ignacia James', 'Kelly Weeks', 'Magna mollit volupta', 'Vel adipisicing blan', 'Itaque error volupta', 'Vitae aut molestiae', 'Natus velit deserunt', 'Signe Contreras', 'Aut ullamco qui fugi', 'Voluptatum amet nem', 'Qui consectetur dui', 'Beatae explicabo Ad', 'Et ut anim unde nobi', '2024-05-17 20:06:13', '2024-05-23 19:42:37', NULL),
(54, 'Approved', NULL, '3', 'Necessitatibus ipsa', 'Annually', 'Location', '2008-05-01', '1992-03-09', 'Single', 'Et exercitationem nu', '2019-07-12', 'Dolorum excepteur of', 'Autem eum consequatu', 'Joyner', 'Hamish', 'Beverly Oneil', 'Florence Kim', 'Uta Maynard', 'Ora Lewis', 'Quod culpa est pers', 'In aliquip eum iusto', 'Et libero nemo moles', 'Dignissimos providen', 'Doloribus ullam hic', 'Tamara Kent', 'Esse nostrum sed ni', 'Sapiente blanditiis', 'Laboris accusamus ve', 'Laborum sint volupta', 'Enim earum tenetur a', '2024-05-17 20:06:49', '2024-05-17 23:45:30', NULL),
(55, 'Approved', 'Renew', '4', 'Neque aut necessitat', 'Bi-Annually', 'Location', '1995-05-04', '1989-02-21', 'Corp.', 'A beatae modi nihil', '1988-01-26', 'Aspernatur dolores o', 'Voluptas repellendus', 'Mclean', 'Stacy', 'Piper Benton', 'Ila Faulkner', 'Natalie Mckee', 'Lacey Dawson', 'Nulla pariatur Cons', 'Eaque ea accusantium', 'Voluptas excepturi s', 'Atque rerum asperior', 'Accusamus impedit s', 'Emily Chaney', 'Dolore quae accusant', 'Error vel aliquam si', 'Dolores accusantium', 'Quo accusamus occaec', 'Sunt ut sed fuga Co', '2024-05-17 20:07:02', '2024-05-17 23:47:07', NULL),
(56, 'Approved', 'Renew', '4', 'Inventore Nam aperia', 'Quarterly', 'Location', '1970-03-06', '2000-12-01', 'Partnership', 'Amet corporis sit', '1973-11-30', 'Nobis sed ducimus a', 'Nostrud quo commodo', 'Nichols', 'Jayme', 'Dane Flores', 'Avram Potts', 'Lev Hardin', 'Yolanda Holder', 'Dolore eos velit eum', 'Mollit omnis quasi e', 'Cum est exercitatio', 'Unde dolorum fuga R', 'Enim adipisicing exe', 'Jayme Oneil', 'Quis delectus nobis', 'Quia ut nostrum duci', 'Non elit totam in c', 'Necessitatibus offic', 'Illo esse molestias', '2024-05-17 20:07:20', '2024-05-17 23:46:11', NULL),
(57, 'Approved', 'New', '4', 'Perferendis qui magn', 'Annually', 'Ownership', '2011-02-25', '2020-02-23', 'Single', 'Odit magnam alias qu', '2021-04-18', 'Incidunt dolorem mi', 'Vel ipsum incididun', 'Byers', 'Ulric', 'Ivan Fischer', 'Rhoda Mitchell', 'Bert Mcleod', 'Amena Sanchez', 'Unde perspiciatis a', 'Ut quo aperiam asper', 'Dolore consectetur u', 'Doloribus sapiente q', 'Quis veniam unde do', 'Wanda Newman', 'Est doloremque aut', 'Et eum corrupti err', 'Delectus dolorum be', 'Tenetur est et volup', 'Ut qui sed et illo p', '2024-05-17 20:07:42', '2024-05-17 23:47:17', NULL),
(58, 'Approved', 'New', '2', 'Itaque id dolor ut', 'Bi-Annually', 'Location', '1989-09-06', '2017-05-16', 'Coop', 'Neque nisi cillum mo', '1970-12-31', 'Perferendis at et au', 'Aperiam excepturi vi', 'Shaffer', 'Dieter', 'Jade Johns', 'Fay Cabrera', 'Xanthus Kidd', 'Hall Leblanc', 'Culpa voluptate occ', 'Fugiat voluptatem e', 'Recusandae Aut exce', 'Incidunt possimus', 'Est occaecat et dol', 'Abigail Pollard', 'Officiis rerum fugia', 'Ut et voluptatem in', 'Expedita eiusmod nec', 'Cupidatat mollit adi', 'Eu impedit officia', '2024-05-17 20:07:51', '2024-05-17 23:39:29', NULL),
(59, 'Approved', 'New', '4', 'Veniam aliquid illo', 'Bi-Annually', 'Ownership', '2023-08-20', '1990-01-01', 'Coop', 'Sunt et sed veritati', '1974-01-30', 'Doloribus ducimus l', 'Aperiam sunt velit', 'Terry', 'Azalia', 'Ava Newman', 'Ina Austin', 'Merrill Harrington', 'Maggy Sparks', 'Iste consequatur co', 'Quo sed aperiam proi', 'Optio veniam offic', 'Recusandae Soluta v', 'Nam nihil quis dolor', 'Nigel Ashley', 'Et sed quis duis qui', 'In accusamus repelle', 'Cum non mollitia mol', 'Consequuntur molesti', 'Deserunt irure eaque', '2024-05-17 20:08:03', '2024-05-17 22:38:51', NULL),
(60, 'Approved', 'New', '4', 'Ea facere dolore mag', 'Quarterly', 'Ownership', '2001-05-27', '2017-07-22', 'Inc.', 'Nesciunt ex deserun', '2020-11-24', 'Nesciunt sint null', 'Nihil consectetur r', 'Navarro', 'Harlan', 'Theodore Mcneil', 'Cassady Steele', 'Althea Newman', 'Candace Mooney', 'Et enim consequuntur', 'Eligendi voluptatum', 'Qui quis quia debiti', 'Et assumenda blandit', 'Quisquam vel sed ill', 'Cailin House', 'Facilis rerum quos c', 'Debitis excepturi au', 'Magni facilis dicta', 'Sed quia rem nulla v', 'Dolorum ullamco veli', '2024-05-17 20:15:27', '2024-05-17 23:45:58', NULL),
(61, 'Approved', 'Renew', '1', 'Harum consequatur n', 'Bi-Annually', 'Location', '1971-09-05', '2012-04-10', 'Coop', 'Aut reprehenderit eu', '1993-12-04', 'Reiciendis laborum', 'Dolore ex distinctio', 'Finley', 'Imani', 'Colleen Weber', 'Len Marshall', 'Olga Mckee', 'Clinton Key', 'Esse quia laudantium', 'Quaerat do nobis qui', 'Illum voluptatem at', 'Autem in voluptatem', 'Quia excepteur aliqu', 'Jolie Barrera', 'Minim quibusdam proi', 'Accusantium cupidita', 'Rerum quidem porro u', 'Magnam aliquid delec', 'Nostrum voluptate es', '2024-05-17 23:48:16', '2024-05-24 00:19:54', NULL),
(62, 'Approved', 'Renew', '4', 'Ut eum minima aut qu', NULL, 'Ownership', '2001-05-18', '1992-02-22', 'Single', 'Exercitationem rem q', '2015-08-20', 'Odit dignissimos rat', 'Nam quos commodi rep', 'Shields', 'Miriam', 'Dorothy Montoya', 'Maggy Alvarado', 'Suki Clark', 'Marcia Meyer', 'Possimus officia qu', 'Fugiat dignissimos', 'Dolorem proident ei', 'Cillum suscipit aper', 'Mollit veniam persp', 'Branden Cunningham', 'Non alias ipsum atq', 'Tempora enim et quod', 'Dolores sed ut natus', 'Pariatur Ab sit pa', 'Sint vero dolore max', '2024-05-17 23:48:30', '2024-05-24 00:25:42', NULL),
(63, 'Archived', 'Renew', '2', 'Commodi libero enim', 'Quarterly', NULL, '1989-04-17', '2021-10-08', 'Coop', 'Dolore nulla nobis d', '2003-12-24', 'Enim architecto quis', 'Ex sint sequi maxim', 'Dennis', 'Adena', 'Kylee Pate', 'Bianca Meyer', 'Lilah Cook', 'Dolan Owen', 'Quaerat velit simil', 'Cum consequatur ven', 'Reprehenderit et iur', 'Sit perferendis mol', 'Alias fuga Dignissi', 'Jasmine Petty', 'Laborum et laboriosa', 'In dolorem et volupt', 'Voluptatibus sed hic', 'Cupidatat laboris do', 'Voluptates atque con', '2024-05-17 23:48:44', '2024-05-24 20:49:18', NULL),
(64, 'Pending', 'New', '1', 'Eos animi maxime o', 'Annually', 'Ownership', '1983-04-30', '2007-09-09', 'Corp.', 'In eligendi laborum', '2015-10-08', 'In velit reprehende', 'Praesentium quod eni', 'Graham', 'Orlando', 'Bree Morales', 'Ivy Solomon', 'Joshua Moody', 'Nolan Medina', 'Excepteur sed proide', 'Omnis aut et ea quas', 'Est et ab harum eius', 'Sed eum dolor quis c', 'Ab et similique nihi', 'Noelani Galloway', 'Debitis quidem ullam', 'Ea quo aut cupidatat', 'Esse voluptate perf', 'Voluptates dolor lab', 'Aut voluptatem et ea', '2024-05-17 23:49:02', '2024-05-17 23:49:02', NULL),
(65, 'Approved', NULL, '1', 'Dicta dolorem dolore', 'Bi-Annually', 'Ownership', '1975-05-17', '1970-11-19', 'Single', 'Aut velit a ut adipi', '1975-04-01', 'Aut explicabo Place', 'Aliqua Ut qui excep', 'Ford', 'Isabelle', 'Harriet Osborne', 'Rosalyn Callahan', 'Tatiana Baxter', 'Jada Blake', 'Animi nisi impedit', 'Rerum sit nostrud e', 'Id neque fugiat eli', 'Rerum qui quam deser', 'Dolorum rerum dolore', 'Jakeem Henderson', 'Dolorem ea velit ull', 'Nulla qui sit ut of', 'Laboriosam asperior', 'Accusamus at in aute', 'Amet ea vitae ipsa', '2024-05-17 23:49:11', '2024-05-24 00:20:19', NULL),
(66, 'Approved', 'New', '4', 'Sapiente id amet te', 'Quarterly', 'Location', '1999-02-15', '1989-11-09', 'Inc.', 'Qui anim eiusmod mag', '1990-01-31', 'Repudiandae non duis', 'Expedita sequi praes', 'Nicholson', 'Hamilton', 'Dorian Hunter', 'Jesse Carter', 'Mariam Vang', 'Trevor Crane', 'Sunt recusandae Lib', 'Ratione perferendis', 'Rerum nemo cum magni', 'Pariatur Cillum nec', 'Sed atque voluptatem', 'Quamar Duke', 'Ullam odio quam adip', 'Asperiores aute itaq', 'Magnam ut cum odio a', 'Molestiae voluptas c', 'Omnis aut reiciendis', '2024-05-17 23:49:23', '2024-05-24 00:18:48', NULL),
(67, 'Pending', 'Renew', '4', '5', 'Quarterly', NULL, '2018-05-01', '2012-05-02', 'Coop', 'Voluptatum fugit iu', '1983-08-03', 'Animi numquam perfe', 'Nesciunt laboriosam', 'Lyons', 'Odysseus', 'Drake Foreman', 'Quincy Miranda', 'Demetrius Walls', 'Inez Rogers', 'Tempora aut commodi', 'Incidunt est proid', 'At eaque nobis tenet', 'Aut voluptatum qui e', 'Odio occaecat autem', 'Shay Webb', 'Ut aute veritatis qu', 'Ullam atque culpa in', 'Adipisicing eligendi', 'Autem eos repudiand', 'Voluptates nesciunt', '2024-05-17 23:49:37', '2024-05-24 00:27:40', NULL),
(68, 'Approved', 'Renew', '4', 'Atque dolorum conseq', 'Annually', NULL, '2017-05-03', '1972-03-26', 'Inc.', 'Omnis mollit aut in', '1990-02-19', 'Enim amet sapiente', 'Aut suscipit cupidit', 'Rutledge', 'Chase', 'Ori Cochran', 'Steel Russo', 'Candice Frank', 'Tanek Sanders', 'Rem eu autem rerum c', 'Libero laboriosam t', 'Enim facere quam nih', 'Quo hic recusandae', 'Molestiae dolore dol', 'Bert Clarke', 'Dolor harum sequi en', 'Perspiciatis sint m', 'Est omnis ut id exp', 'Dolore et sunt ipsa', 'Sunt veritatis erro', '2024-05-17 23:50:03', '2024-05-18 00:32:01', NULL),
(69, 'Approved', 'New', '4', 'Voluptates ut autem', 'Quarterly', 'Ownership', '1982-03-27', '1995-04-08', 'Inc.', 'Iste debitis nobis q', '1993-03-16', 'Corporis iusto ea ex', 'Soluta molestias omn', 'Noel', 'Neve', 'Sacha Cash', 'Kyla Hall', 'Xenos Rose', 'Sierra Mathis', 'Natus et sunt eveni', 'Aut enim sed non in', 'Natus repellendus C', 'Quidem et similique', 'Tempore voluptatem', 'MacKensie Trevino', 'Dolore nihil omnis f', 'Eum est eum veritat', 'Qui ad magna dolorem', 'Irure tempora aut pe', 'Odio dolorum consequ', '2024-05-17 23:50:13', '2024-05-24 00:27:15', NULL),
(70, 'Pending', NULL, '4', 'Voluptatem commodo v', 'Quarterly', 'Ownership', '1993-10-25', '1992-04-24', 'Single', 'Consequatur anim qu', '1977-06-11', 'Irure elit mollitia', 'Earum dolorum in lor', 'Barnes', 'TaShya', 'Ulric Caldwell', 'Ezra Rivera', 'Kennedy Gordon', 'Unity Cotton', 'Vel amet natus veni', 'Sit neque consectetu', 'Labore et blanditiis', 'Magna ducimus volup', 'Fugiat necessitatibu', 'Charde Black', 'Lorem praesentium ir', 'Proident quisquam i', 'Eu eu cupidatat ulla', 'Praesentium velit v', 'Et expedita minim du', '2024-05-17 23:50:30', '2024-05-17 23:50:30', NULL),
(71, 'Pending', NULL, '4', 'Voluptatem commodo v', 'Quarterly', 'Ownership', '1993-10-25', '1992-04-24', 'Single', 'Consequatur anim qu', '1977-06-11', 'Irure elit mollitia', 'Earum dolorum in lor', 'Barnes', 'TaShya', 'Ulric Caldwell', 'Ezra Rivera', 'Kennedy Gordon', 'Unity Cotton', 'Vel amet natus veni', 'Sit neque consectetu', 'Labore et blanditiis', 'Magna ducimus volup', 'Fugiat necessitatibu', 'Charde Black', 'Lorem praesentium ir', 'Proident quisquam i', 'Eu eu cupidatat ulla', 'Praesentium velit v', 'Et expedita minim du', '2024-05-17 23:50:39', '2024-05-17 23:50:39', NULL),
(72, 'Approved', 'New', '2', 'Praesentium et ipsum', 'Bi-Annually', 'Location', '2008-08-25', '2015-12-16', 'Single', 'Qui dolores eum Nam', '1987-11-26', 'Voluptate amet impe', 'Incidunt facilis al', 'Hammond', 'Macon', 'Madaline Brennan', 'Nomlanga Bolton', 'Rogan Case', 'Gemma Lawrence', 'Sunt mollitia atque', 'Qui voluptatum in re', 'Possimus anim ipsum', 'Nostrum rerum ipsam', 'Qui sint velit molli', 'Ruth Pearson', 'Cum voluptas sint di', 'Eiusmod earum non do', 'Do temporibus blandi', 'Laudantium et sapie', 'Consectetur vero fug', '2024-05-17 23:51:10', '2024-05-24 00:23:42', NULL),
(73, 'Pending', NULL, '3', 'Molestiae tempor in', 'Quarterly', NULL, '2004-09-21', '2021-09-24', 'Coop', 'Adipisicing nobis do', '2001-10-21', 'Quis laudantium occ', 'Non porro ipsum temp', 'Carney', 'Dacey', 'Ulla Parrish', 'Quynn Hobbs', 'Claudia Rose', 'Marvin Hess', 'Dolorum hic id enim', 'Animi in ea molesti', 'Esse ratione eius ra', 'Provident ullam dol', 'Nemo est est maxime', 'Nissim Miranda', 'Esse nihil dolore e', 'Ad inventore occaeca', 'Cupidatat tempor vel', 'Ipsa aperiam dolori', 'Et cum est aut occae', '2024-05-24 18:02:22', '2024-05-24 18:02:22', NULL),
(74, 'Pending', 'New', '3', 'Velit officia aut si', NULL, 'Ownership', '1977-02-13', '1984-05-08', 'Coop', 'Repellendus Facilis', '2022-01-20', 'Atque cum ipsa ut e', 'Qui vitae ea delectu', 'Fry', 'Robin', 'Martina Snyder', 'Quynn Bentley', 'Ezekiel Fox', 'Louis Mcbride', 'Fuga Nihil libero i', 'Dolore molestiae vel', 'Magni dignissimos qu', 'Voluptas ut ut sint', 'Animi dolore dolor', 'Arsenio Walters', 'Enim nostrum rem ape', 'Ea possimus digniss', 'Nisi sint culpa cu', 'Quaerat et itaque do', 'Consequatur sequi no', '2024-05-24 18:02:29', '2024-05-24 18:02:29', NULL),
(75, 'Pending', 'Renew', '1', 'Provident iste faci', 'Quarterly', 'Location', '2000-04-15', '2007-09-15', 'Coop', 'Hic in tenetur vero', '1977-11-14', 'Eos dignissimos vol', 'Laborum Rerum corpo', 'Michael', 'Adrienne', 'Melodie Wolfe', 'Louis Mcgee', 'Josiah Porter', 'Yolanda Mcdowell', 'Consectetur voluptas', 'Animi hic sunt sit', 'Dicta fugit eos iu', 'Ad quo dolore dolore', 'Mollitia vero duis q', 'Emerson Russo', 'Nemo nulla quibusdam', 'Asperiores omnis fug', 'Fuga Autem sint eni', 'Laborum deserunt nec', 'Qui sit nobis quis', '2024-05-24 18:02:36', '2024-05-24 18:02:36', NULL),
(76, 'Pending', 'Renew', '3', 'Delectus elit est', 'Quarterly', 'Location', '2023-10-21', '1993-01-31', 'Single', 'Nihil laborum Qui d', '1978-04-25', 'Praesentium reiciend', 'Mollitia reprehender', 'Sullivan', 'Rana', 'Zachery Mills', 'Anjolie Pitts', 'Cherokee Ware', 'Dara Clements', 'Repudiandae dolorem', 'Eveniet at in fugia', 'Quibusdam ullam sit', 'Tenetur adipisicing', 'Explicabo Quidem co', 'Brielle Duran', 'In non velit repreh', 'Nostrud explicabo D', 'Excepteur dolorem qu', 'Adipisci ea est qui', 'A et voluptatem ut d', '2024-05-24 18:02:41', '2024-05-24 18:02:41', NULL),
(77, 'Pending', 'New', '2', 'Odit unde culpa volu', 'Annually', 'Location', '2017-01-15', '2021-07-31', 'Partnership', 'Tempore adipisci in', '1977-06-08', 'Reprehenderit ipsam', 'Veritatis eos dolore', 'Sweeney', 'Penelope', 'Audrey Acosta', 'Edward Duffy', 'Olympia Rodgers', 'Warren Mcconnell', 'Atque commodi conseq', 'Sit adipisci sed ut', 'Vitae velit est odit', 'Dolor ea sapiente as', 'Debitis explicabo D', 'Thane Finley', 'Facilis vero adipisi', 'Omnis incididunt vol', 'Officiis accusamus i', 'Est amet sed eaque', 'Dolores tenetur Nam', '2024-05-24 18:02:47', '2024-05-24 18:02:47', NULL),
(78, 'Pending', 'Renew', '4', 'Culpa consequuntur', 'Annually', NULL, '1984-11-26', '1987-01-23', 'Coop', 'Ad consequat Accusa', '1989-08-24', 'Et minima ea magnam', 'Consequatur consequ', 'Brown', 'Kai', 'Dana Dominguez', 'Yeo Cameron', 'Oprah Key', 'Bevis Riddle', 'Omnis tempora consec', 'Soluta et consequunt', 'Consequatur Labore', 'Illo sed delectus e', 'Ut et aliqua Sunt p', 'Magee Reynolds', 'In impedit optio a', 'Culpa sit accusamus', 'Voluptate veniam vo', 'Doloremque duis saep', 'Nam officia labore e', '2024-05-24 18:02:54', '2024-05-24 18:02:54', NULL),
(79, 'Pending', 'New', '2', 'Neque dolore facilis', NULL, 'Location', '2019-10-26', '1998-08-18', 'Coop', 'Eum cum deleniti qui', '2017-05-13', 'Qui eos ratione non', 'Laboris cillum quasi', 'Osborne', 'Shelby', 'Solomon Joseph', 'Dorothy Bass', 'Beau Weeks', 'Uma Caldwell', 'Aliquam molestiae qu', 'Dolorum ullamco in l', 'Esse ipsam fugit o', 'Recusandae Facilis', 'Qui do incididunt fu', 'Wallace Cunningham', 'Excepturi earum nece', 'Omnis velit a nisi i', 'Ex numquam vel magna', 'Itaque corrupti lab', 'Molestias neque dolo', '2024-05-24 18:03:04', '2024-05-24 18:03:04', NULL),
(80, 'Pending', 'Renew', '3', 'Et illum ea vitae q', 'Bi-Annually', 'Ownership', '1991-01-08', '1979-06-06', 'Inc.', 'Odio exercitationem', '2008-05-19', 'Quia deserunt porro', 'Odit ratione eos ni', 'Porter', 'Winifred', 'Martena Lucas', 'Ursa Watts', 'Giselle Carver', 'Haley Roberson', 'Pariatur Qui sed as', 'Ab sed quia velit d', 'Quidem excepturi nul', 'Reiciendis eiusmod n', 'Magna mollit obcaeca', 'Lunea Chase', 'Soluta sunt vero qui', 'Quam qui ratione opt', 'Consequatur Ipsa a', 'Nulla id at et dolor', 'Quis sequi incididun', '2024-05-24 18:03:17', '2024-05-24 18:03:17', NULL),
(81, 'Pending', 'New', '1', 'Commodi laboris aspe', 'Quarterly', 'Location', '2015-05-11', '1981-08-10', 'Single', 'Dolor ipsa error se', '1986-10-02', 'Alias voluptas quam', 'Amet est cum aliqu', 'Payne', 'Lester', 'Oren Romero', 'Axel Wyatt', 'Chancellor Gilliam', 'Ifeoma Shaw', 'A unde dolorum aut u', 'In error similique r', 'Alias ex excepteur a', 'Et nulla est at qua', 'Qui Nam tempore ver', 'Kathleen Blankenship', 'Aut itaque nobis ut', 'Ut sit sint a volu', 'Qui optio corporis', 'Id aute nulla iusto', 'Provident est dolor', '2024-05-24 18:03:29', '2024-05-24 18:03:29', NULL),
(82, 'Pending', 'New', '2', NULL, 'Annually', 'Ownership', '2024-09-02', '2024-09-02', 'Single', 'TEST', '2024-09-02', 'TEST', 'TEST', 'DELA CRUZ', 'JUAN', 'MIGUEL', 'Sari-sari Store', 'TEST', 'another testTEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-09-01 11:26:20', '2024-09-01 11:26:20', NULL),
(83, 'Pending', 'New', '2', NULL, 'Bi-Annually', 'Ownership', '2024-09-02', '2024-09-02', 'Single', 'TEST', '2024-09-02', 'TEST', 'TEST', 'TESTJUAN', 'TEST', 'TEST', 'TEST sari sari store', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', '2024-09-01 11:38:00', '2024-09-01 11:38:00', 'Sari-sari Store'),
(84, 'Pending', 'Renew', '1', 'Iste et magna occaec', 'Annually', 'Ownership', '2002-07-19', '1987-12-20', 'Inc.', 'Dolore eos libero au', '1974-01-18', 'Debitis animi vitae', 'Asperiores ut sint', 'Wilkins', 'Perry', 'Illiana Beard', 'Kasimir Bennett', 'Sylvia Dale', 'Clark Rich', 'Eum aliquam in esse', 'Aliqua Itaque ea qu', 'Distinctio Est ips', 'Sint libero et vel d', 'Voluptatum ex exerci', 'Tanisha Richmond', 'Laudantium laborum', 'Magnam in dolore aut', 'Ut aut non nostrud e', 'Provident quibusdam', 'Qui quia vel dicta r', '2024-09-01 11:53:56', '2024-09-01 11:53:56', 'Restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_10_163348_rename_name_column_to_username_in_users_table', 2),
(6, '2024_04_16_034739_create_business_application_models_table', 3),
(7, '2024_04_16_041649_create_business_permit_applications_table', 4),
(8, '2024_04_16_052128_create_business_permit_applications_table', 5),
(9, '2024_04_16_052508_create_business_permit_applications_table', 6),
(10, '2024_09_01_191807_add_new_column_to_business_permit_application', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$rO9hfu1FrP9r5hBXdPUNDeO6L7lo9H2BicnglRrP9ek2EckNohavC', NULL, '2024-02-28 16:28:19', '2024-02-28 16:28:19'),
(2, 'admin', 'admin1@gmail.com', NULL, '$2y$12$wAJCD89qGw7vZep0CRkKvOLBnqOegKqGNhd2.c0K8UQxoUFWJrpJO', NULL, '2024-03-03 22:38:04', '2024-03-03 22:38:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_permit_applications`
--
ALTER TABLE `business_permit_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_permit_applications`
--
ALTER TABLE `business_permit_applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
