-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2022 at 12:09 PM
-- Server version: 5.7.40
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u22s1018_fit3048_advice_cyborg`
--

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `investment_id` int(11) NOT NULL,
  `investment_name` varchar(255) NOT NULL,
  `admin_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`investment_id`, `investment_name`, `admin_fee`) VALUES
(1, 'Netwealth Cash', '1.96'),
(2, 'Aberdeen Actively Hedged Intl Equities', '2.36'),
(3, 'Aberdeen Asian Opportunities', '1.02'),
(4, 'Aberdeen Australian Fixed Income', '2.52'),
(5, 'Aberdeen Australian Small Companies', '1.31'),
(6, 'Aberdeen Diversified Fixed Income', '3.00'),
(7, 'Aberdeen Emerging Opportunities', '1.16'),
(8, 'Aberdeen Global Government Bond', '2.03'),
(9, 'Aberdeen International Equity', '1.44'),
(10, 'Aberdeen Multi-Asset Income', '2.48'),
(11, 'Acadian Wholesale Aus Equity Long Short', '2.46'),
(12, 'Acadian Wholesale Australian Equity', '2.93'),
(13, 'Acadian Wholesale Global Eqty Long Short', '1.78'),
(14, 'Advance Alleron Aus Equity Growth W', '2.45'),
(15, 'Allan Gray Australia Equity', '2.40'),
(16, 'AMP Capital Core Infrastructure A', '2.22'),
(17, 'AMP Capital Core Property A', '1.20'),
(18, 'AMP Capital Corporate Bond A', '1.96'),
(19, 'AMP Capital Global Property Securities A', '1.96'),
(20, 'AMP Capital Wholesale Global Equity - Value Fund', '1.40'),
(21, 'Antares Prof Elite Opportunities', '2.10'),
(22, 'Antares Prof High Growth Shares', '1.44'),
(23, 'Antares Prof Listed Property', '1.96'),
(24, 'Antares Prof Small Companies', '1.90'),
(25, 'APN AREIT', '1.30'),
(26, 'AQR WS DELTA 1F', '1.95'),
(27, 'Armytage Australian Equity Income', '1.45'),
(28, 'Arnhem Australian Equity', '1.49'),
(29, 'Arrowstreet Global Equity Hedged', '4.85'),
(30, 'Aspect Diversified Futures-Class A', '8.05'),
(31, 'Aspen Parks Wholesale Prop', '1.90'),
(32, 'AUI Platypus Aust Equities Wholesale', '1.40'),
(33, 'AUI Strategic Fixed Interest Trust - Wholesale', '1.56'),
(34, 'Aurora Dividend Income Trust', '1.64'),
(35, 'Aurora Fortitude Absolute Return', '1.80'),
(36, 'Ausbil Australian Active Equity', '3.51'),
(37, 'Ausbil Australian Emerging Leaders', '2.40'),
(38, 'Ausbil Australian Geared Equity', '6.20'),
(39, 'Ausbil MicroCap', '3.30'),
(40, 'Aust Unity Acorn Capital Ws Microcap Tr', '3.25'),
(41, 'Aust Unity Wholesale Healthcare Property', '1.86'),
(42, 'Aust Unity Wholesale Property Income', '1.35'),
(43, 'Australian Ethical Larger Companies B', '1.35'),
(44, 'Australian Ethical Smaller Companies B', '0.00'),
(45, 'Australian Unity Altius Bond Fund', '2.00'),
(46, 'Bennelong Australian Equities', '2.61'),
(47, 'Bennelong Avoca Emerging Leaders', '3.78'),
(48, 'Bennelong Concentrated Australian Eq', '5.73'),
(49, 'Bennelong ex-20 Australian Equities', '1.63'),
(50, 'Bennelong Kardinia Absolute Return Fund', '1.75'),
(51, 'BlackRock Australian Eq Absolute Return', '3.56'),
(52, 'BlackRock Australian Eq Opportunities', '0.75'),
(53, 'BlackRock Global Allocation Aus D', '0.51'),
(54, 'BlackRock Indexed Aus Listed Property', '0.46'),
(55, 'BlackRock Indexed Australian Bond', '0.51'),
(56, 'BlackRock Indexed Australian Equity Fund', '0.20'),
(57, 'BlackRock Indexed Hedged Intl Equity', '0.55'),
(58, 'BlackRock Indexed Int Equity Fund', '2.06'),
(59, 'BlackRock Scientific Global Markets', '1.10'),
(60, 'BlackRock W Monthly Income D', '1.90'),
(61, 'BlackRock WS Australian Share', '2.32'),
(62, 'BlackRock WS Global Small Capital', '2.60'),
(63, 'BlackRock WS Hedged Global Small Capital', '0.00'),
(64, 'Blue Sky Apeiron Global Macro A', '0.00'),
(65, 'BNY Mellon Global Alpha A', '1.80'),
(66, 'BT Imputation Shr WS', '1.30'),
(67, 'BT Wholesale Property Securities Fund', '1.92'),
(68, 'Capital International Global Equity', '1.92'),
(69, 'Capital International Global Equity Hgd', '5.46'),
(70, 'Celeste Australian Small Companies', '2.46'),
(71, 'CFS Global Soft Commodity Share', '1.93'),
(72, 'CFS Wholesale Australian Share-Core', '2.08'),
(73, 'CFS Wholesale Colliers Glb Property Sec', '1.04'),
(74, 'CFS Wholesale Enhanced Yield', '2.51'),
(75, 'CFS Wholesale Equity Income', '3.00'),
(76, 'CFS Wholesale Geared Share', '1.25'),
(77, 'CFS Wholesale Global Credit Income', '2.38'),
(78, 'CFS Wholesale Global Resources', '1.94'),
(79, 'CFS Wholesale Imputation', '2.47'),
(80, 'CFS WS Glb Listed Infrastructure', '0.00'),
(81, 'Challenger GIF 5.60 cents pa 30 Jun 2015', '0.00'),
(82, 'Challenger Guaranteed Pen - 30 June 2017', '0.00'),
(83, 'Challenger Guaranteed Pen - 30 June 2021', '1.39'),
(84, 'Clime Australian Value WS', '1.95'),
(85, 'Cromwell Phoenix Property Securities', '3.00'),
(86, 'DDH Global Fixed Interest Alpha', '2.24'),
(87, 'DWS Global Equity Agribusiness', '2.48'),
(88, 'Eley Griffiths Group Small Companies', '3.00'),
(89, 'EQT Intrinsic Value Intl Sharemarkets', '2.20'),
(90, 'EQT SGH LaSalle Global Listed Prop Secs', '1.91'),
(91, 'EQT SGH Wholesale Prop Income', '1.68'),
(92, 'EQT Wholesale Flagship Fund', '2.30'),
(93, 'Fidelity Asia Fund', '1.70'),
(94, 'Fidelity Australian Equities', '2.40'),
(95, 'Fidelity China', '2.30'),
(96, 'Fidelity Global Equities', '2.40'),
(97, 'Fidelity India', '3.08'),
(98, 'Fiducian India Fund', '0.00'),
(99, 'Firstmac High Livez', '0.90'),
(100, 'Franklin Templeton Multisector Bond W', '4.17'),
(101, 'GaveKal Asian Opportunities Fund', '1.90'),
(102, 'Goldman Sachs Australian Equities WS', '1.58'),
(103, 'Goldman Sachs Core Plus Aus Fix Inc-Ord', '2.44'),
(104, 'Goldman Sachs International WS', '2.60'),
(105, 'Grant Samuel Epoch Gbl Eq Shldr Yld Hgd', '2.50'),
(106, 'Grant Samuel Epoch Gbl Eq Shldr Yld Uhgd', '2.49'),
(107, 'Grant Samuel Tribeca Alpha Plus', '2.41'),
(108, 'GVI Aubrey Global Growth & Income Hedged', '4.26'),
(109, 'Hunter Hall Australian Value Trust', '4.04'),
(110, 'Hunter Hall Global Deep Green Trust', '4.14'),
(111, 'Hunter Hall Global Ethical Trust', '3.67'),
(112, 'Hunter Hall Value Growth Trust', '1.92'),
(113, 'Hyperion Australian Growth Companies', '3.73'),
(114, 'Hyperion Small Growth Companies', '1.95'),
(115, 'Ibbotson Diversified Alternatives Trust', '0.97'),
(116, 'Ibbotson Dynamic Growth Trust', '0.77'),
(117, 'Ibbotson Dynamic Income Trust', '2.76'),
(118, 'IFP Global Franchise', '2.76'),
(119, 'IFP Global Franchise Fund (Hedged)', '1.90'),
(120, 'Integrity Australian Share', '2.50'),
(121, 'Invesco W Aust Smaller Companies - Class A', '2.46'),
(122, 'Invesco WS Asian Consumer Demand', '1.76'),
(123, 'Invesco WS Australian Share', '2.16'),
(124, 'Invesco WS Global Matrix Hedged - Class A', '2.16'),
(125, 'Invesco WS Global Matrix Unhedged', '1.90'),
(126, 'Invesco WS Global Property Secs Hgd A', '1.94'),
(127, 'Investors Mutual WS Australian Share', '1.94'),
(128, 'Investors Mutual WS Future Leaders', '2.33'),
(129, 'Ironbark Karara Australian Small Comp', '3.85'),
(130, 'K2 Asian Absolute Return', '4.02'),
(131, 'K2 Australian Absolute Return', '4.04'),
(132, 'K2 Select International Absolute Return', '2.80'),
(133, 'La Trobe Aust Mortgage Pooled Mortgage', '0.76'),
(134, 'Legg Mason Aus Bond Trust A', '1.98'),
(135, 'Legg Mason Aust Value Equity Tr A', '0.00'),
(136, 'Legg Mason Australian Real Income Fund', '1.60'),
(137, 'Legg Mason Global Multi Sector Bond Tr A', '3.29'),
(138, 'LHP Diversified Investments HR', '2.74'),
(139, 'LHP Diversified Investments HW', '3.96'),
(140, 'LHP Global Long/Short HW', '3.81'),
(141, 'Macquarie Asia New Stars No.1', '2.63'),
(142, 'Macquarie High Conviction', '0.99'),
(143, 'Macquarie Income Opportunities', '2.12'),
(144, 'Macquarie International Infra Ses', '1.24'),
(145, 'Macquarie Master Diversified Fixed Int', '2.71'),
(146, 'Magellan Global', '2.12'),
(147, 'Magellan Infrastructure', '2.19'),
(148, 'Man AHL Alpha (AUD)', '2.06'),
(149, 'Maple-Brown Abbott Aus Geared Eq W', '1.84'),
(150, 'Maple-Brown Abbott Imputation Wholesale', '2.90'),
(151, 'Maxim Property Securities', '0.00'),
(152, 'MFS Concentrated Global Equity Trust Institutional', '1.54'),
(153, 'MFS Global Equity Trust', '1.18'),
(154, 'Naos Emerging Companies Long Short Equities Fund', '1.40'),
(155, 'netwealth Active Balanced Fund', '0.65'),
(156, 'netwealth Active Conservative Fund', '1.50'),
(157, 'netwealth Active Growth Fund', '1.80'),
(158, 'netwealth Active High Growth Fund', '0.30'),
(159, 'netwealth Australian Bond Index Fund', '0.60'),
(160, 'netwealth Australian Equities Index Fund', '0.60'),
(161, 'netwealth Australian Property Index Fund', '0.90'),
(162, 'netwealth Index Opportunities Balanced Fund', '0.90'),
(163, 'netwealth Index Opportunities Conservative Fund', '0.45'),
(164, 'netwealth Index Opportunities Growth Fund', '0.60'),
(165, 'netwealth International Equities Index Fund', '3.44'),
(166, 'OC Dynamic Equity', '3.44'),
(167, 'OC Premium Small Companies Fund', '1.20'),
(168, 'Patersons Australian Equity', '1.20'),
(169, 'Patersons Australian Resources Opp', '0.00'),
(170, 'Pengana Asia Special Events Fund', '1.76'),
(171, 'Pengana Aus Equities Market Neutral A', '2.26'),
(172, 'Pengana Australian Equities', '5.37'),
(173, 'Pengana Emerging Companies', '1.54'),
(174, 'Pengana Global Resources', '2.30'),
(175, 'Perennial Global Shares High Alpha Trust', '1.84'),
(176, 'Perennial Growth Shares Wholesale Trust', '2.10'),
(177, 'Perennial Hedged Glbl Prpty Wholesale Tr', '0.90'),
(178, 'Perennial Tactical Income Trust', '1.84'),
(179, 'Perennial Value Shares Wholesale Trust', '4.38'),
(180, 'Perennial Value Smaller Companies Trust', '2.48'),
(181, 'Perpetual W Share Plus L/S', '1.98'),
(182, 'Perpetual Wholesale Australian', '2.09'),
(183, 'Perpetual Wholesale Balanced Growth', '2.20'),
(184, 'Perpetual Wholesale Concentrated Equity', '1.40'),
(185, 'Perpetual Wholesale Diversified Income', '2.36'),
(186, 'Perpetual Wholesale Ethical SRI', '3.80'),
(187, 'Perpetual Wholesale Geared Australian', '1.98'),
(188, 'Perpetual Wholesale Industrial', '2.46'),
(189, 'Perpetual Wholesale International Share', '2.50'),
(190, 'Perpetual Wholesale Smaller Companies', '0.94'),
(191, 'PIMCO EQT Wholesale Global Bond', '0.99'),
(192, 'PIMCO EQT WS Diversified Fixed Interest', '3.08'),
(193, 'Platinum Asia', '3.08'),
(194, 'Platinum International', '3.08'),
(195, 'Platinum International Brands', '3.08'),
(196, 'Platinum Unhedged', '0.00'),
(197, 'Plato Australian Shares Income Fund', '3.42'),
(198, 'PM Capital Absolute Performance', '1.82'),
(199, 'PM Capital Enhanced Yield', '4.47'),
(200, 'Premium Asia', '10.40'),
(201, 'Premium China', '7.58'),
(202, 'Premium SAM Asia Property', '2.46'),
(203, 'Prime Value Growth B', '2.46'),
(204, 'Prime Value Imputation B', '1.60'),
(205, 'Principal Global Credit Opportunities Fund', '2.06'),
(206, 'RARE Infrastructure Value', '5.47'),
(207, 'RARE Series Emerging Markets', '1.33'),
(208, 'Realindex Aus Small Companies-Class A', '0.93'),
(209, 'Realindex Australian Share-Class A', '1.19'),
(210, 'Realindex Global Share Hedged-Class A', '1.19'),
(211, 'Realindex Global Share-Class A', '1.72'),
(212, 'Resolution Capital Global Property Secs', '0.00'),
(213, 'RFM StockBank', '1.68'),
(214, 'Russell Balanced A', '1.37'),
(215, 'Russell Conservative A', '1.57'),
(216, 'Russell Diversified 50 A', '1.82'),
(217, 'Russell Growth A', '2.08'),
(218, 'Russell High Growth A', '1.50'),
(219, 'Schroder Credit Securities', '1.00'),
(220, 'Schroder Fixed Income', '1.96'),
(221, 'Schroder Global Active Value Hedged', '0.90'),
(222, 'Schroder Real Return Fund WS Class', '1.61'),
(223, 'Schroder WS Australian Equity', '4.69'),
(224, 'Select Alternatives Portfolio', '3.62'),
(225, 'SGH ICE', '2.47'),
(226, 'SGH20', '0.00'),
(227, 'Solaris Core Australian Equity Fund PA', '1.61'),
(228, 'T. Rowe Price Asia ex-Japan', '2.31'),
(229, 'T. Rowe Price Global Equity', '2.06'),
(230, 'TAAM New Asia', '0.00'),
(231, 'TD St George 4.05% 6 Months-Monthly Int 25/11/2013', '0.00'),
(232, 'TD St George 4.20% 3 Year-Annual Int 24/05/2016', '2.24'),
(233, 'Templeton Global Equity', '0.00'),
(234, 'Term Deposit Investec 4.15% 26/05/2014', '0.00'),
(235, 'Term Deposit Investec 4.20% 25/11/2013', '0.00'),
(236, 'Term Deposit Investec 4.20% 26/08/2013', '0.00'),
(237, 'Term Deposit NAB 4.00% 25/11/2013', '0.00'),
(238, 'Term Deposit NAB 4.00% 26/05/2014', '0.00'),
(239, 'Term Deposit NAB 4.00% 26/08/2013', '0.00'),
(240, 'Term Deposit St George 4.05% 12 Months 26/05/2014', '0.00'),
(241, 'Term Deposit St George 4.10% 3 Months 26/08/2013', '1.28'),
(242, 'Threadneedle Global Equity', '0.90'),
(243, 'Tyndall Australian Bond', '1.90'),
(244, 'Tyndall Australian Share Income', '1.60'),
(245, 'Tyndall Australian Share W Portfolio', '1.80'),
(246, 'UBS Clarion Global Property Securities I', '0.97'),
(247, 'UBS Diversified Fixed Income', '1.80'),
(248, 'UBS-HALO Australian Share Fund', '0.60'),
(249, 'Vanguard Australian Fixed Interest Index', '0.80'),
(250, 'Vanguard Australian Shares High Yield', '0.80'),
(251, 'Vanguard Australian Shares Index', '0.68'),
(252, 'Vanguard Balanced Index Fund', '0.66'),
(253, 'Vanguard Conservative Index', '0.34'),
(254, 'Vanguard Diversified Bond Index', '0.95'),
(255, 'Vanguard Emerging Markets Shares Index', '0.98'),
(256, 'Vanguard Global Infrastructure', '1.04'),
(257, 'Vanguard Global Infrastructure Hedged', '0.72'),
(258, 'Vanguard Growth Index Fund', '0.74'),
(259, 'Vanguard High Growth Index', '0.86'),
(260, 'Vanguard Int Property Secs Idx (Hdgd)', '0.80'),
(261, 'Vanguard Int Property Securities Index', '0.74'),
(262, 'Vanguard International Shares Index', '0.80'),
(263, 'Vanguard International Shares Index Hgd', '0.68'),
(264, 'Vanguard Intl Credit Secs Index Hgd', '0.70'),
(265, 'Vanguard Property Securities Index', '1.38'),
(266, 'Walter Scott Emerging Markets', '2.53'),
(267, 'Walter Scott Global Equity', '2.56'),
(268, 'Walter Scott Global Equity Hedged', '2.50'),
(269, 'Wilson HTM Priority Growth', '2.30'),
(270, 'Wingate Global Equity W', '6.87'),
(271, 'Winton Global Alpha', '1.62'),
(272, 'Zurich Investments Aus Property Secs', '3.74'),
(273, 'Zurich Investments Equity Income', '1.96'),
(274, 'Zurich Investments Gbl Thematic Shr', '0.00'),
(275, 'Zurich Investments Global Equity Income Fund', '2.00'),
(276, 'Zurich Investments Global Property Sec', '1.96'),
(277, 'Zurich Investments Hgd Gbl Thematic Shr', '1.27'),
(278, 'Zurich Investments Small Companies', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(10) NOT NULL,
  `module_name` varchar(50) NOT NULL,
  `paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `paid`) VALUES
(7, 'Insurance', NULL),
(8, 'Super', NULL),
(9, 'In-progress', NULL),
(10, 'Investment', NULL),
(13, 'Calculator', 0),
(14, 'Retirement', 0),
(15, 'Savings', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment_provider_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_providers`
--

CREATE TABLE `payment_providers` (
  `payment_provider_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_providers`
--

INSERT INTO `payment_providers` (`payment_provider_id`, `name`) VALUES
(3, 'PAYPAL');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `monthly_fee` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_modules`
--

CREATE TABLE `products_modules` (
  `product_module_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `module_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `id` int(11) NOT NULL,
  `super_name` varchar(100) NOT NULL,
  `admin_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `super_name`, `admin_fee`) VALUES
(1, 'Aware Super Aust Equities', 0.87),
(2, 'Aware Super Aust Equities SRI', 0.34),
(3, 'Aware Super Aust Fixed Interest', 0.03),
(4, 'Aware Super Balanced Growth', 0.96),
(5, 'Aware Super Cash', 1.09),
(6, 'Aware Super Conservative Growth', 0.83),
(7, 'Aware Super Diversified SRI', 0.53),
(8, 'Aware Super Growth', 0.06),
(9, 'Aware Super High Growth', 0.06),
(10, 'Aware Super Int\'l Equities', 0.07),
(11, 'Aware Super Int\'l Fixed Int', 0.27),
(12, 'Aware Super Property', 0.24),
(13, 'Cbus Cash Savings', 0.25),
(14, 'Cbus Conservative', 0.51),
(15, 'Cbus Conservative Growth', 0.56),
(16, 'Cbus Growth (Cbus MySuper)', 0.05),
(17, 'Cbus High Growth', 0),
(18, 'Cbus Self Managed - Cash Transaction Account', 0),
(19, 'Cbus Self Managed - Listed Securities', 0),
(20, 'Cbus Self Managed - Term Deposit', 0.38),
(21, 'Cbus Self Managed Infrastructure', 0.38),
(22, 'Cbus Self Managed Property', 0.36),
(23, 'Rest Aust Shares', 0.54),
(24, 'Rest Australian Shares Indexed', 0.17),
(25, 'Rest Balanced', 0.41),
(26, 'Rest Balanced Indexed', 0.03),
(27, 'Rest Bonds', 0.62),
(28, 'Rest Capital Stable', 0.67),
(29, 'Rest Cash', 0.75),
(30, 'Rest Core Strategy', 0.61),
(31, 'Rest Diversified', 0.74),
(32, 'Rest High Growth', 0.58),
(33, 'Rest Overseas Shares', 0.55),
(34, 'Rest Overseas Shares Indexed', 0),
(35, 'Rest Property', 0),
(36, 'Rest Shares', 0),
(37, 'Rest Sustainable Growth', 0.36);

-- --------------------------------------------------------

--
-- Table structure for table `testinvestment`
--

CREATE TABLE `testinvestment` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `investment_name` varchar(100) NOT NULL,
  `admin_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinvestment`
--

INSERT INTO `testinvestment` (`id`, `company_name`, `investment_name`, `admin_fee`) VALUES
(1, 'MLC', 'MLC investment 1', 1.11),
(2, 'MLC', 'MLC investment 2', 1.22),
(3, 'AMP', 'AMP investment 1', 2.11),
(4, 'AMP', 'AMP investment 2', 2.22),
(5, 'CBUS', 'CBUS investment 1', 3.11),
(6, 'CBUS', 'CBUS investment 2', 3.22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `profile_fields` text,
  `role` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `postcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `mobile_number`, `first_name`, `last_name`, `profile_fields`, `role`, `DOB`, `postcode`) VALUES
(26, 'cake1@gamil.com', '$2y$10$hzxkGNQtM0YxTZCcCaLkd.94xwl0dP2f/aqqJ9.Wj/nLKLILoaCL6', '0432440488', 'Ashik', 'Rahman', '', '', '2021-09-22', 3149),
(27, 'cake1@yahoo.com', '$2y$10$xZQRmvzKY9dknmDKkyWGa.Ez2O8Vcio5kwZuPTRObMabyP6ENOVDG', '0432440488', 'as', 'r', '', '', '2021-09-23', 3149),
(28, 'ashik123@yahoo.com', '$2y$10$.bwWLM91Tf.gIxsur8WN0u4Y1SFC8.m8fcx8GTvrgtO43SVVjr7cG', '0432440488', 'ASHIK', 'RAHMAN', NULL, NULL, '2021-09-07', 3149),
(29, '123456@gmail.com', '$2y$10$cWl7xGFnBDJxxD/oaq9Wy.nRhCBi.qdbBhMSaHEUKgvMHLZlkzSbK', '1234567890', 'a', 'a', NULL, 'user', '2000-01-01', 123456),
(30, 'team18@gmail.com', '$2y$10$X7Rn8y9Av0WRdjLeNwcVXuvLwKRfaHUr/O4BLrziqGw7ZEDlovNuO', '0468464979', 'Team18', '18', NULL, 'user', '2022-08-05', 4),
(31, '18@gmail.com', '$2y$10$nJLNLQ7F8inXefscj7SU0u2wS7XFeGBxc0wbB4HNMLC2Mnqy1gMz2', '0468464979', 'Maxwell', 'Tsa', NULL, 'user', '2022-08-09', 2313),
(32, 'bwe0001@student.monash.edu', '$2y$10$GpxTv2uq.Qet9zLHJqrhWevqjlH/05hKeRPNcm3CCEQTrq/YEXBB6', '1234567890', 'bertrand', 'wee', NULL, 'user', '1111-11-11', 3000),
(33, '123@gmail.com', '$2y$10$7SFBaxa6qEA2PG.9vVa9.u5cXyzn7uKuryc63Ox70qD3AgGhVBQ4q', '0468464979', 'HOW', 'Greene', NULL, 'user', '2022-08-04', 3213),
(34, 'admin@gmail.com', '$2y$10$bydIem.rB0pw.iyWl2jzcOZ20rYSb4pG0/KI8IV2Ke51FJHWDtiAC', '1231313131', 'admin', 'admin', NULL, 'user', '2022-08-18', 3111),
(36, 'yhao0016@student.monash.edu', '$2y$10$OIem6qYO4AYuIx9O1XTq9O3p.DekB.vfwkN3S9ZEH5tXqkXSGAd8C', '0123456789', 'monashTestAccount2022', 'monashTestAccount2022', NULL, 'user', '1111-11-11', 1111),
(37, 'yeeeesuen@gmail.com', '$2y$10$NbtJDW3IjvL5zXH2PNRlJeqio2E26OzNmlIy3rJms9xm72YIoN3Mm', '0172097022', 'Adley', 'Tan', NULL, 'user', '1111-11-11', 58000),
(39, 'happy@test.com', '$2y$10$RZTAMVzIUGttl3Nhrc.5Be3dKRS6KUgFrjkxCdRgJVLUfG.GforU.', 'icjbhvibao', 'Helpless', 'Puppy69', NULL, 'user', '2022-09-11', 1234),
(40, '321@gmail.com', '$2y$10$qnafcS3rcZqJ6UudbdoazuWBjID2GfWn.PQCWPEvZMs9V0FI4X1NS', '2131232133', 'Team18', '18', NULL, 'user', '1231-02-13', 3213),
(41, 'dsa@gasda.com', '$2y$10$f3RnceWWgALL3bW7eRAo1.mGTF3fkPjM/dddRvmkKQlzVLnG8bpEu', '0412745462', 'ruby', 'dsa', NULL, 'user', '2022-10-07', 2111),
(42, 'testuser@gmail.com', '$2y$10$P1H4R7DiheXXIJavQjWgkeAZfiMAqfqG4e7HogJ74pnnn.KFC5cF2', '5430950349', 'testu', 'user', NULL, 'user', '2022-10-01', 43563456),
(43, 'owen18397400615@gmail.com', '$2y$10$1B4olO9wM6ld.P2ffCQfjeU61nFAE1Z7CgkWNaw69NoY7l2I1bcla', '0468464979', 'MingJing', 'Greene', NULL, 'user', '2022-09-29', 3166),
(44, '88@gmail.com', '$2y$10$S0n8IzLXfsqb4n6Vnqa4ZusWUBjViv2.vBBjzgoggGEHwLlaW3dGu', '0468464979', 'HOW', 'Greene', NULL, 'user', '1222-01-11', 3169),
(46, 'admin.advicecyborg@gmail.com', '$2y$10$2FyQc59/PjU4pgL0KZBQa.EAVHuuLhHs7eKp./XPawD7FhugNT9Be', '2131232133', 'Admin', 'Manager', 'This is the primary admin account for the AdviceCyborg Platform.', 'user', '1999-12-01', 3169),
(47, 'india.macpherson@gmail.com', '$2y$10$kQzHuYGS9Wcs0/VGFtTNfuRR/awNI76IQjgIUfk56iSQQ9V.0V2Z6', '0481302078', 'India', 'Macpherson', NULL, 'user', '1999-11-11', 3053);

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `users_products_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investment`
--
ALTER TABLE `investment`
  ADD PRIMARY KEY (`investment_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk1` (`payment_provider_id`),
  ADD KEY `fk2` (`user_id`);

--
-- Indexes for table `payment_providers`
--
ALTER TABLE `payment_providers`
  ADD PRIMARY KEY (`payment_provider_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_modules`
--
ALTER TABLE `products_modules`
  ADD PRIMARY KEY (`product_module_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`users_products_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investment`
--
ALTER TABLE `investment`
  MODIFY `investment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_providers`
--
ALTER TABLE `payment_providers`
  MODIFY `payment_provider_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_modules`
--
ALTER TABLE `products_modules`
  MODIFY `product_module_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `users_products_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`payment_provider_id`) REFERENCES `payment_providers` (`payment_provider_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products_modules`
--
ALTER TABLE `products_modules`
  ADD CONSTRAINT `products_modules_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `products_modules_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
