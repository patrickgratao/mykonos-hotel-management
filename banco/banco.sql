-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jan-2019 às 02:34
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
(6, 'Guia'),
(2, 'Motorista'),
(3, 'Particular');

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
  `info_extras` longtext,
  `categoria_id` int(11) DEFAULT NULL,
  `cadastrado_por` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hospedes`
--

INSERT INTO `hospedes` (`id`, `nome`, `cpf`, `data_nascimento`, `sexo`, `telefone`, `celular`, `email`, `estado_civil`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `data_checkin`, `data_checkout`, `qtd_diarias`, `qtd_pagantes`, `preco_diaria`, `valor_pago`, `preco_total`, `info_extras`, `categoria_id`, `cadastrado_por`) VALUES
(24, 'Rose', '11495749681', '25/05/1986', 'f', '35997448672', '35997448672', 'rosymeesantos.alves@gmail.com', 'solteiro', '', '', '', 'Itamagi', 'MG', '19/01/2019', '18/02/2019', 30, 9, '0', '0', '0', '<p>Roselaine fez uma excurs&atilde;o com familiares no total de 9 pagantes e algumas crian&ccedil;as.&nbsp;</p>\r\n<p><br />Ficaram hospedadas nos quartos 10, 18, 32 e 41</p>', 3, ''),
(25, 'Patryck Peterson Costa GratÃ£o', '00250426102', '23/03/1994', 'm', '62996880462', ' 62996880462', 'ppgratao@gmail.com', 'solteiro', '75389125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '2018-11-29', '2018-12-04', 1, 1, '1', '1', '1', '<p>infos massas</p>', 2, ''),
(27, 'Magda GratÃ£o HonÃ³rio', '508.435.241-20', '0000-00-00', 'f', '(62) 3505-2413', '(62) 99688-0462', 'contato@pousadaagape.com.br', 'casado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '0000-00-00', '0000-00-00', 3, 3, '3', '3', '3', '<p>Magda ficou no quarto 43</p>', 3, ''),
(28, 'Luiza Lima', '002.504.261-02', '23/03/1994', 'f', '(62) 3505-2413', '(62) 99688-0462', 'patryck@gmail.com', 'casado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '01/12/2018', '03/12/2018', 1, 1, '1', '1', '1', '<p>Luizia ficou no quarto 32</p>', 5, ''),
(30, 'Luma', '002.504.261-02', '23/03/1994', 'f', '(62) 9968-8046', '(62) 99688-0462', 'ppgratao@gmail.com', 'solteiro', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '23/03/1994', '24/03/1994', 1, 2, '3', '0', '9', '<p>oi</p>\r\n<p>&nbsp;</p>', 6, ''),
(31, 'Patryck Peterson Costa GratÃ£o', '002.504.261-02', '23/03/1994', 'm', '(62) 9968-8046', '', 'ppgratao@gmail.com', 'casado', '75389-020', 'Rua 121', 'Setor Ana Rosa', 'Trindade', 'GO', '12/12/1992', '12/12/1992', 9, 8, '7', '6', '5', '<p>hey bich</p>', 5, ''),
(32, 'JosÃ© Joaquim', '002.504.261-02', '02/11/1972', 'm', '(62) 3505-2413', '(62) 99688-0462', 'ppgratao@gmail.com', 'divorciado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '23/03/2019', '25/03/2019', 2, 2, '100', '100', '500', '<p>Joaquim veio com a namorada</p>', 6, 'Thallyta GratÃ£o'),
(33, 'Leila Maria', '559.489.282-68', '15/11/1975', 'f', '', '(69) 98451-5531', '', 'casado', '', '', '', 'Arquimenes', 'RO', '02/01/2019', '09/01/2019', 7, 4, '80', '750', '2050', '<p>Leila veio com a fam&iacute;lia para passar o dia.&nbsp;</p>', 3, ''),
(34, 'Luzia Lourdes', '002.504.261-02', '23/03/1994', 'm', '(62) 9995-8015', '(99) 99999-9999', '', 'solteiro', '_____-___', '', '', 'Raimundos', 'MG', '16/01/2019', '18/01/2019', 2, 0, '1', '0', '0', '<p>dasdas</p>', 3, ''),
(35, 'Fiat Luz', '002.504.261-02', '23/03/1994', 'm', '', '', '', 'solteiro', '', '', '', 'Goiania', 'GO', '19/01/2019', '20/01/2019', 1, 0, '50', '0', '50', '<p>doasdiais</p>', 3, 'Patryck GratÃ£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'Patryck GratÃ£o', 'ppgratao@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'Thallyta GratÃ£o', 'thallytaev@gmail.com', '202cb962ac59075b964b07152d234b70', 'comum');

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
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
