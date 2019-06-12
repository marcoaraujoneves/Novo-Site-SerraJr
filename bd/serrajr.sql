-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2019 às 21:42
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
-- Estrutura da tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `codPortifolio` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `extensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`codPortifolio`, `nome`, `descricao`, `status`, `extensao`) VALUES
(25, 'gfd', 'gfd', 0, 'jpg');

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
(41, 'teste', '2019-05-22 03:18:42', 'teste', '1', 'tmfcover.png'),
(42, 'cara', '2019-05-22 15:19:16', 'teste', '2', 'tmfcapa.jpg'),
(43, 'cara', '2019-05-22 15:20:35', 'teste', '2', 'tmfcapa.jpg'),
(44, 'cara', '2019-05-22 15:21:45', 'teste', '2', 'tmfcapa.jpg'),
(45, 'cara', '2019-05-22 15:32:58', 'teste', '2', 'tmfcapa.jpg'),
(46, 'cara', '2019-05-22 15:33:24', 'teste', '2', 'tmfcapa.jpg'),
(47, 'cara', '2019-05-22 15:35:57', 'teste', '2', 'tmfcapa.jpg'),
(48, 'cara', '2019-05-22 15:37:21', 'teste', '2', 'tmfcapa.jpg'),
(49, 'cara', '2019-05-22 15:37:44', 'teste', '2', 'tmfcapa.jpg'),
(50, 'cara', '2019-05-22 15:59:12', 'teste', '2', 'tmfcapa.jpg'),
(51, 'cara', '2019-05-22 16:34:57', 'teste', '2', 'tmfcapa.jpg'),
(52, 'Desenho Técnico', '2019-05-22 16:53:32', 'A indústria no Brasil já começou com máquinas sendo compradas de países que deram início ao seu processo de industrialização bem antes. Nessa direção, depois de mais ou menos 100 anos da industrialização, o Brasil ainda não se desprendeu dessa política de utilizar máquinas ultrapassadas. Segundo a ABIMAQ (Associação Brasileira da Indústria de Maquinas e Equipamentos), a idade média das máquinas na indústria brasileira é 17 anos, três vezes mais antigas quando comparada com países que investem forte em tecnologia. Até este ponto não há problemas porque as máquinas não morrem, a questão é que seu desempenho vai diminuindo.', '1', '1.jpg'),
(53, 'testando', '2019-05-22 23:47:34', 'teste', '2', '1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `diretoria` varchar(15) NOT NULL,
  `visao` varchar(300) NOT NULL,
  `missao` varchar(300) NOT NULL,
  `codSobre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`diretoria`, `visao`, `missao`, `codSobre`) VALUES
('diretoria.jpg', 'Ser uma empresa jÃºnior de alto crescimento em 2019.', 'cara', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
  ADD PRIMARY KEY (`codPortifolio`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`idPostagem`),
  ADD KEY `codAutor` (`codAutor`),
  ADD KEY `codAutor_2` (`codAutor`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`codSobre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `codPortifolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `idPostagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `codSobre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
