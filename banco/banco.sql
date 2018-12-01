-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2018 às 21:55
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemahospedes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(2, 'Lima');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hospedes`
--

CREATE TABLE `hospedes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nascimento` varchar(255) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `estado_civil` varchar(60) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` char(3) DEFAULT NULL,
  `data_checkin` varchar(255) DEFAULT NULL,
  `data_checkout` varchar(255) DEFAULT NULL,
  `qtd_diarias` int(50) DEFAULT NULL,
  `qtd_pagantes` int(50) DEFAULT NULL,
  `preco_diaria` decimal(50,0) DEFAULT NULL,
  `valor_pago` decimal(50,0) DEFAULT NULL,
  `preco_total` decimal(50,0) DEFAULT NULL,
  `total_pagar` decimal(50,0) DEFAULT NULL,
  `info_extras` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hospedes`
--

INSERT INTO `hospedes` (`id`, `nome`, `cpf`, `data_nascimento`, `sexo`, `telefone`, `celular`, `email`, `estado_civil`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `data_checkin`, `data_checkout`, `qtd_diarias`, `qtd_pagantes`, `preco_diaria`, `valor_pago`, `preco_total`, `total_pagar`, `info_extras`) VALUES
(24, 'Roselaine dos Santos Alves', '11495749681', '1986-05-21', 'f', '35997448672', '35997448672', 'rosymeesantos.alves@gmail.com', 'casado', '', '', '', 'Itamagi', 'MG', '2018-11-30', '2018-12-02', 2, 9, '0', '0', '0', '205', '<p>Roselaine fez uma excurs&atilde;o com familiares no total de 9 pagantes e algumas crian&ccedil;as.&nbsp;</p>\r\n<p><br />Ficaram hospedadas nos quartos 10, 18, 32 e 41</p>'),
(25, 'Patryck Peterson Costa GratÃ£o', '00250426102', '1994-03-23', 'm', '62996880462', ' 62996880462', 'ppgratao@gmail.com', 'solteiro', '75389125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '2018-11-29', '2018-12-04', 1, 1, '1', '1', '1', '205', '<p>infos massas</p>'),
(26, 'Patryck Peterson', '002.504.261-02', '0000-00-00', 'm', '(62) 3505-2413', '(62) 99688-0462', 'patryck@gmail.com', 'solteiro', '75389125', '...', '...', '...', 'GO', '2018-11-29', '2018-12-02', 1, 1, '1', '1', '1', '205', '<p>teste</p>'),
(27, 'Magda GratÃ£o HonÃ³rio', '508.435.241-20', '0000-00-00', 'f', '(62) 3505-2413', '(62) 99688-0462', 'contato@pousadaagape.com.br', 'casado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '0000-00-00', '0000-00-00', 3, 3, '3', '3', '3', '205', '<p>Magda ficou no quarto 43</p>'),
(28, 'Luiza Lima', '002.504.261-02', '23/03/1994', 'f', '(62) 3505-2413', '(62) 99688-0462', 'patryck@gmail.com', 'casado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '01/12/2018', '03/12/2018', 1, 1, '1', '1', '1', '205', '<p>Luizia ficou no quarto 32</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `hospedes`
--
ALTER TABLE `hospedes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
