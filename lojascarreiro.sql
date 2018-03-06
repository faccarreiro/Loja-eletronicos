-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Mar-2018 às 01:32
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojascarreiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `senha` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `telefone`, `email`, `cpf`, `senha`) VALUES
(8, 'felipe', 'rua gaucha', 21953575185, 'ninguem@gmail.com', 2147483647, 1515),
(9, 'manoela', 'rua 123', 21951753648, 'mamae@gmail.com', 1578542154, 2756),
(10, 'abreu', 'rua 123', 21684268425, 'mamae3@gmail.com', 255984678, 4857),
(11, '15', '123', 21957856485, '4445784@gmail.com', 21659585254, 6589);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `produto` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `estoque` int(255) NOT NULL,
  `preço` int(255) NOT NULL,
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
