-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2024 às 06:43
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `socialimpulse`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE `participante` (
  `id_cadastro` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `valor` float NOT NULL,
  `pagamento` varchar(60) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id_cadastro`, `nome`, `telefone`, `email`, `valor`, `pagamento`, `data_cadastro`) VALUES
(67, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:12:47'),
(68, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:17:11'),
(69, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:18:26'),
(70, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:19:52'),
(71, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:21:22'),
(72, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:21:27'),
(73, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:21:34'),
(74, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:22:21'),
(75, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:22:39'),
(76, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:22:46'),
(77, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:23:08'),
(78, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:23:24'),
(79, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:23:40'),
(80, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:23:52'),
(81, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:25:47'),
(82, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:27:21'),
(83, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:28:16'),
(84, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:28:33'),
(85, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:28:47'),
(86, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:01'),
(87, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:13'),
(88, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:25'),
(89, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:35'),
(90, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:35'),
(91, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:36'),
(92, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:29:43'),
(93, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:30:08'),
(94, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:30:53'),
(95, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:31:07'),
(96, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:31:33'),
(97, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:32:19'),
(98, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:32:53'),
(99, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:33:52'),
(100, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:34:25'),
(101, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:34:33'),
(102, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:35:11'),
(103, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:39:23'),
(104, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:41:02'),
(105, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:42:15'),
(106, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:42:28'),
(107, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:42:39'),
(108, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:42:47'),
(109, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:43:02'),
(110, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:43:19'),
(111, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:43:27'),
(112, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:44:29'),
(113, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:44:40'),
(114, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:44:49'),
(115, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:44:50'),
(116, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:44:51'),
(117, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:45:41'),
(118, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:45:42'),
(119, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:45:42'),
(120, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:45:46'),
(121, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:45:58'),
(122, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:46:37'),
(123, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:46:57'),
(124, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:47:07'),
(125, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:47:21'),
(126, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:47:31'),
(127, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:48:00'),
(128, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:48:15'),
(129, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:50:05'),
(130, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:50:16'),
(131, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:50:16'),
(132, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:50:48'),
(133, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:51:14'),
(134, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:52:34'),
(135, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:53:47'),
(136, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:54:12'),
(137, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:54:43'),
(138, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:54:44'),
(139, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:54:51'),
(140, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:55:09'),
(141, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:56:06'),
(142, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:56:11'),
(143, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:56:45'),
(144, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:56:59'),
(145, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:57:06'),
(146, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:57:11'),
(147, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:57:17'),
(148, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:57:23'),
(149, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:57:41'),
(150, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:58:31'),
(151, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:58:39'),
(152, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 00:58:56'),
(153, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:00:14'),
(154, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:00:42'),
(155, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:01:21'),
(156, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:01:42'),
(157, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:05:09'),
(158, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:06:13'),
(159, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:07:00'),
(160, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:07:06'),
(161, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:08:14'),
(162, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:08:23'),
(163, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:08:48'),
(164, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:09:01'),
(165, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:09:13'),
(166, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:09:29'),
(167, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:09:56'),
(168, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:10:16'),
(169, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:10:27'),
(170, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:10:49'),
(171, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:11:26'),
(172, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:12:30'),
(173, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:12:40'),
(174, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:13:00'),
(175, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:14:28'),
(176, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:15:29'),
(177, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:16:04'),
(178, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:16:24'),
(179, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:17:07'),
(180, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:17:10'),
(181, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:18:36'),
(182, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:18:52'),
(183, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:19:17'),
(184, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:20:13'),
(185, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:21:20'),
(186, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:22:58'),
(187, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:23:29'),
(188, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:25:13'),
(189, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:25:59'),
(190, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:26:24'),
(191, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:26:45'),
(192, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:27:04'),
(193, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:27:13'),
(194, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:27:39'),
(195, 'franca', 'dsds', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-04-13 01:28:05'),
(196, 'sas', 'sasa', 'samba@ff.com', 2, 'pendente', '2024-04-13 01:32:38'),
(197, 'sas', 'sasa', 'samba@ff.com', 2, 'pendente', '2024-04-13 01:33:25'),
(198, 'sas', 'sasa', 'samba@ff.com', 2, 'pendente', '2024-04-13 01:34:43'),
(199, 'sas', 'sasa', 'samba@ff.com', 2, 'pendente', '2024-04-13 01:35:15'),
(200, 'sas', 'sasa', 'samba@ff.com', 2, 'pendente', '2024-04-13 01:35:30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_cadastro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `participante`
--
ALTER TABLE `participante`
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
