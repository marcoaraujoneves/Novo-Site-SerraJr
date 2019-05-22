-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2019 às 08:59
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serrajr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `fotoPerfil` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`idAutor`, `nome`, `descricao`, `fotoPerfil`) VALUES
(1, 'Marco Araujo Neves', 'Estudante de Engenharia de Computação no Instituto Politécnico da UERJ, formado como Auxiliar de Programação de Computadores pela ETEC em São Paulo.\r\nTrabalha na empresa principalmente com projetos Web, tendo participado também de projetos de automação de processos utilizando a plataforma Arduino.', 'marquinhos.jpg'),
(2, 'Marco Antonio Duarte Gomes', 'Cara gostoso que faz as coisas mais lindas da empresa', 'gostoso.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `idPostagem` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `data` datetime NOT NULL,
  `preview` text NOT NULL,
  `codAutor` varchar(150) NOT NULL,
  `imgPreview` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`idPostagem`, `titulo`, `data`, `preview`, `codAutor`, `imgPreview`) VALUES
(39, 'teste', '2019-05-22 03:00:41', 'teste', '1', 'tmfcover.png'),
(40, 'teste', '2019-05-22 03:04:45', 'teste', '1', 'tmfcover.png'),
(41, 'teste', '2019-05-22 03:18:42', 'teste', '1', 'tmfcover.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idPostagem`),
  ADD KEY `codAutor` (`codAutor`),
  ADD KEY `codAutor_2` (`codAutor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
