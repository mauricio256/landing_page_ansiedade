-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Mar-2024 às 20:14
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
-- Banco de dados: `conectavale`
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
(54, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:40:16'),
(55, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:41:14'),
(56, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:41:30'),
(57, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:41:37'),
(58, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:41:45'),
(59, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:42:11'),
(60, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:42:33'),
(61, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:43:20'),
(62, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:44:15'),
(63, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:44:21'),
(64, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:44:30'),
(65, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:44:39'),
(66, 'Mauricio Franca', '74981370420', 'mauriciodossa33frana@hotmail.com', 2, 'pendente', '2024-03-29 14:45:44');

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
  MODIFY `id_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
