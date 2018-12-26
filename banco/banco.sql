-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/12/2018 às 21:48
-- Versão do servidor: 5.7.23
-- Versão do PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'Lapiseira', '5.98'),
(2, 'Bicicleta', '958.33'),
(3, 'Unhas Postiças', '19.00'),
(4, 'Unhas Postiças', '19.00'),
(5, 'Luz', '99.00'),
(6, 'Mouse', '2.00'),
(7, 'Unhas', '67.00'),
(8, 'Unhas', '875.00'),
(9, 'Unhas', '875.00'),
(10, '', '99.00'),
(11, 'Unhas', '99.00'),
(12, 'Rato', '1.00'),
(13, 'Mouse', '15.00'),
(14, 'Foto', '2.00'),
(15, 'Foto', '2.00'),
(16, 'Camera de Filmar', '9999.00'),
(17, 'Microfone', '142.00'),
(18, 'Celular', '67.00'),
(19, 'Led', '12.00'),
(20, 'Argamassa Votomassa', '45.00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Banco de dados: `patryck123`
--
CREATE DATABASE IF NOT EXISTS `patryck123` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `patryck123`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `data_nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Banco de dados: `sistemahospedes`
--
CREATE DATABASE IF NOT EXISTS `sistemahospedes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistemahospedes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(24, 'Kimbalaue'),
(23, 'Lucenzzo'),
(20, 'Motorista'),
(3, 'Particular');

-- --------------------------------------------------------

--
-- Estrutura para tabela `hospedes`
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
  `info_extras` longtext,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `hospedes`
--

INSERT INTO `hospedes` (`id`, `nome`, `cpf`, `data_nascimento`, `sexo`, `telefone`, `celular`, `email`, `estado_civil`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `data_checkin`, `data_checkout`, `qtd_diarias`, `qtd_pagantes`, `preco_diaria`, `valor_pago`, `preco_total`, `total_pagar`, `info_extras`, `categoria_id`) VALUES
(24, 'Rose', '11495749681', '1986-05-21', 'f', '35997448672', '35997448672', 'rosymeesantos.alves@gmail.com', 'solteiro', '', '', '', 'Itamagi', 'MG', '23/12/2018', '20/18/1202', 2, 9, '0', '0', '0', '205', '<p>Roselaine fez uma excurs&atilde;o com familiares no total de 9 pagantes e algumas crian&ccedil;as.&nbsp;</p>\r\n<p><br />Ficaram hospedadas nos quartos 10, 18, 32 e 41</p>', 3),
(25, 'Handsome Guy', '00250426102', '1994-03-23', 'm', '62996880462', ' 62996880462', 'ppgratao@gmail.com', 'solteiro', '75389125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '2018-11-29', '2018-12-04', 1, 1, '1', '1', '1', '205', '<p>infos massas 23</p>', 3),
(26, 'Patryck Peterson', '002.504.261-02', '0000-00-00', 'm', '(62) 3505-2413', '(62) 99688-0462', 'patryck@gmail.com', 'solteiro', '75389125', '...', '...', '...', 'GO', '2018-11-29', '2018-12-02', 1, 1, '1', '1', '1', '205', '<p>teste</p>', 3),
(27, 'Magda Gratão Honório', '508.435.241-20', '0000-00-00', 'm', '(62) 3505-2413', '(62) 99688-0462', 'contato@pousadaagape.com.br', 'solteiro', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '0000-00-00', '0000-00-00', 3, 3, '3', '3', '3', '205', '<p>Magda ficou no quarto 43</p>', 20),
(28, 'Luiza Lima', '002.504.261-02', '23/03/1994', 'f', '(62) 3505-2413', '(62) 99688-0462', 'patryck@gmail.com', 'casado', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '01/12/2018', '03/12/2018', 1, 1, '1', '1', '1', '205', '<p>Luizia ficou no quarto 32</p>', 23),
(30, 'Luma', '002.504.261-02', '23/03/1994', 'f', '(62) 9968-8046', '(62) 99688-0462', 'ppgratao@gmail.com', 'solteiro', '75389-125', 'Rua LÃ¡zaro Carvelo Borges', 'Setor Cristina II', 'Trindade', 'GO', '23/03/1994', '24/03/1994', 2, 2, '3', '3', '3', '205', '<p>oi</p>\r\n<p>&nbsp;</p>', 3),
(31, 'Patryck Peterson Costa Gratão', '002.504.261-02', '23/03/1994', 'm', '(62) 9968-8046', '', 'ppgratao@gmail.com', 'casado', '75389-020', 'Rua 121', 'Setor Ana Rosa', 'Trindade', 'GO', '12/12/1992', '12/12/1992', 9, 8, '7', '6', '5', '205', '<p>hey bich</p>', 3),
(32, 'Luiza Cavalcante', '002.504.261-02', '23/03/1994', 'f', '(62) 9966-6666', '(66) 66666-6666', 'dals@kda.com', 'divorciado', '75389-140', 'Rua Pedro Cândido Ribeiro', 'Setor Cristina II', 'Trindade', 'GO', '23/33/2018', '22/22/2222', 22, 2, '2', '2', '2', '1', '<p>22 lok</p>\r\n<p>&nbsp;</p>', 24),
(34, 'Kcyrtap nosretep', '222.222.222-22', '55/55/5555', 'f', '(55) 5555-5555', '(55) 55555-5555', 'kcyrtap@google.com', 'casado', '75389-140', 'Rua Pedro Cândido Ribeiro', 'Setor Cristina II', 'Trindade', 'GO', '24/12/2018', '26/12/2018', 2, 1, '100', '0', '500', '1', '<p>Esse cara &eacute; foda</p>', 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `permissao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'Patryck Gratão', 'ppgratao@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Índices de tabela `hospedes`
--
ALTER TABLE `hospedes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Banco de dados: `sistemaPousada`
--
CREATE DATABASE IF NOT EXISTS `sistemaPousada` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sistemaPousada`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `faixas`
--

CREATE TABLE `faixas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `faixas`
--

INSERT INTO `faixas` (`id`, `titulo`) VALUES
(1, '0 - 1000'),
(2, '1001 - 5000'),
(3, '5001 - 30000'),
(4, '30001 - 100000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `faixa_salarial` tinyint(4) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `data_nascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `faixa_salarial`, `nome`, `email`, `senha`, `data_nascimento`) VALUES
(5, 1, 'Patryck', 'patryckgratao@gmail.com', 'pp2303k', '1994-03-23'),
(6, 2, 'Luiza', 'luiza@google.com', '123456', '1998-05-24'),
(7, 1, 'Henrique', 'henrique@gmail.com', 'senha123', '1995-12-31'),
(8, 1, 'Carolina', 'ccarol@gmail.com', '123', '1994-02-12'),
(9, 10, 'Fantasma', 'fant@fantasma.com', '12356', '2010-08-13');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `faixas`
--
ALTER TABLE `faixas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `faixas`
--
ALTER TABLE `faixas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
