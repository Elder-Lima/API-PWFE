-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 01:57
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `caminho` varchar(250) NOT NULL,
  `informacoes` varchar(250) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `caminho`, `informacoes`, `tipo`) VALUES
(1, 'Camisa Ajax', './img/ajax.jpeg', 'Masculina', 'Europa'),
(2, 'Camisa Seleção Alemanha', './img/alemanha.jpeg', 'Masculina', 'Selecao'),
(3, 'Camisa Seleção Argentina', './img/argentina.jpeg', 'Masculina', 'Selecao'),
(4, 'Camisa Arsenal', './img/arsenal.jpeg', 'Masculina', 'Europa'),
(5, 'Camisa Barcelona', './img/barca.jpeg', 'Masculina', 'Europa'),
(6, 'Camisa Botafogo ', './img/botafogo.jpeg', 'Masculina', 'Brasil'),
(7, 'Camisa Seleção Brasileira', './img/brasil.jpeg', 'Masculina', 'Selecao'),
(8, 'Camisa Borussia Dortmund', './img/bvb.jpeg', 'Masculina', 'Europa'),
(9, 'Camisa Chapecoense', './img/chapecoense.jpeg', 'Masculina', 'Brasil'),
(10, 'Camisa Chelsea', './img/chesea.jpeg', 'Masculina', 'Europa'),
(11, 'Camisa Manchester City', './img/city.jpeg', 'Masculina', 'Europa'),
(12, 'Camisa Corinthians', './img/corinthians.jpeg', 'Masculina', 'Brasil'),
(13, 'Camisa Cruzeiro', './img/cruzeiro.jpeg', 'Masculina', 'Brasil'),
(14, 'Camisa Flamengo', './img/flamengo.jpeg', 'Masculina', 'Brasil'),
(15, 'Camisa Fortaleza', './img/fortaleza.jpeg', 'Masculina', 'Brasil'),
(16, 'Camisa Seleção Inglaterra', './img/inglaterra.jpeg', 'Masculina', 'Selecao'),
(17, 'Camisa Seleção Italiana', './img/italia.jpeg', 'Masculina', 'Selecao'),
(18, 'Camisa Juventus', './img/juventus.jpeg', 'Masculina', 'Europa'),
(19, 'Camisa Liverpool', './img/liverpool.jpeg', 'Masculina', 'Europa'),
(20, 'Camisa Milan', './img/milan.jpeg', 'Masculina', 'Europa'),
(21, 'Camisa Palmeiras', './img/palmeiras.jpeg', 'Masculina', 'Brasil'),
(22, 'Camisa Seleção Portugal', './img/portugal.jpeg', 'Masculina', 'Selecao'),
(23, 'Camisa Paris Saint-Germain', './img/psg.jpeg', 'Masculina', 'Europa'),
(24, 'Camisa Paris Saint-Germain', './img/psg2.jpeg', 'Masculina', 'Europa'),
(25, 'Camisa Paris Saint-Germain', './img/psg3.jpeg', 'Masculina', 'Europa'),
(26, 'Camisa Real Madrid', './img/realmadrid.jpeg', 'Masculina', 'Europa'),
(27, 'Camisa Santos', './img/santos.jpeg', 'Masculina', 'Brasil'),
(28, 'Camisa São Paulo', './img/saopaulo.jpeg', 'Masculina', 'Brasil'),
(29, 'Camisa Manchester United', './img/united.jpeg', 'Masculina', 'Europa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
