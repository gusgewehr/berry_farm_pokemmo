-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2021 às 01:16
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lp4`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `berrys`
--

CREATE TABLE `berrys` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` bigint(20) NOT NULL, /* o pokemmo só aceita número inteiro para o preço das coisas */
  `imagem` longblob DEFAULT NULL,
  `seed1` int(11) DEFAULT NULL,		/* não criei outra tabela pois toda berry tem três sementes */
  `seed2` int(11) DEFAULT NULL,
  `seed3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `berrys`
--

INSERT INTO `berrys` (`id`, `nome`, `preco`, `imagem`, `seed1`, `seed2`, `seed3`) VALUES
(9, 'Pecha Berry', 800, 0x70656368615f62657272792e706e67, 5, 5, 5),
(10, 'Rawst Berry', 788, 0x72617773745f62657272792e706e67, 6, 6, 6),
(11, 'Cheri Berry', 720, 0x63686572695f62657272792e706e67, 8, 8, 8),
(12, 'Leppa berry', 920, 0x6c657070615f62657272792e706e67, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seeds`
--

CREATE TABLE `seeds` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,0) NOT NULL, /* o pokemmo só aceita número inteiro para o preço das coisas */
  `imagem` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `seeds`
--

INSERT INTO `seeds` (`id`, `nome`, `preco`, `imagem`) VALUES
(5, 'Semente Doce', '998', 0x73656d656e74655f646f63652e706e67),
(6, 'Semente Amarga', '999', 0x73656d656e74655f616d617267612e706e67),
(7, 'Semente muito picante', '1648', 0x73656d656e74655f65787472656d616d656e74655f706963616e74652e706e67),
(8, 'Semente Picante', '800', 0x73656d656e74655f706963616e74652e706e67);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `berrys`
--
ALTER TABLE `berrys`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `berrys`
--
ALTER TABLE `berrys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
