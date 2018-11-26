-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/11/2018 às 17:40
-- Versão do servidor: 5.7.23
-- Versão do PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `sistemahospedes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `hospedes`
--

CREATE TABLE `hospedes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `estado_civil` varchar(60) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `hospedes`
--

INSERT INTO `hospedes` (`id`, `nome`, `cpf`, `data_nascimento`, `sexo`, `telefone`, `celular`, `email`, `estado_civil`, `cep`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(9, 'Patryck Peterson', '00250426102', '1994-03-23', 'm', '62996880462', '62996880462', '', '', '', '', '', '', ''),
(10, 'Patryck Peterson', '00250426102', '1994-03-23', 'm', '62996880462', '62996880462', '', '', '', '', '', '', ''),
(11, 'Patryck Peterson', '00250426102', '1994-03-23', 'm', '62996880462', '62996880462', '', '', '', '', '', '', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `hospedes`
--
ALTER TABLE `hospedes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `hospedes`
--
ALTER TABLE `hospedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
