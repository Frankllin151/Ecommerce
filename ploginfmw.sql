-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09-Jan-2023 às 20:28
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ploginfmw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `accessory`
--

CREATE TABLE `accessory` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float(20,0) NOT NULL,
  `type` varchar(2000) NOT NULL,
  `company` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ADMIN`
--

CREATE TABLE `ADMIN` (
  `id` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `ADMIN`
--

INSERT INTO `ADMIN` (`id`, `email`, `password`) VALUES
(1, 'admin23@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clothing`
--

CREATE TABLE `clothing` (
  `id` int(10) NOT NULL,
  `name` int(200) NOT NULL,
  `description` text NOT NULL,
  `price` float(20,0) NOT NULL,
  `type` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `electronicdevices`
--

CREATE TABLE `electronicdevices` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float(20,0) NOT NULL,
  `type` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shoes`
--

CREATE TABLE `shoes` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float(20,0) NOT NULL,
  `type` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `USERS`
--

CREATE TABLE `USERS` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `USERS`
--

INSERT INTO `USERS` (`id`, `name`, `email`, `password`, `token`) VALUES
(1, 'Rafael silveiro', 'Rafa@gamil.com', '202cb962ac59075b964b07152d234b70', 'b35c8ac10470e3adcbc214a876555912'),
(2, 'Vitoria', 'va4@gamil.com', '289dff07669d7a23de0ef88d2f7129e7', ''),
(5, 'Frankllin Silva de Souza', 'frankllinsilva300@gmail.com', '202cb962ac59075b964b07152d234b70', ''),
(7, 'TeTTe', 'teando3@gmail.com', '202cb962ac59075b964b07152d234b70', 'ae18d303c006a35be34eea29a2f4d0aa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clothing`
--
ALTER TABLE `clothing`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `electronicdevices`
--
ALTER TABLE `electronicdevices`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ADMIN`
--
ALTER TABLE `ADMIN`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clothing`
--
ALTER TABLE `clothing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `electronicdevices`
--
ALTER TABLE `electronicdevices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
