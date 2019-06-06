-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Maio-2019 às 02:57
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vagadeemprego`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `NomeCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoavaga`
--

CREATE TABLE `pessoavaga` (
  `idPessoa` int(11) NOT NULL,
  `idVaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `documento` int(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `descricao` varchar(2000) DEFAULT NULL,
  `tipoConta` varchar(45) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `telefoneOp` varchar(15) DEFAULT NULL,
  `arquivo` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `documento`, `email`, `senha`, `descricao`, `tipoConta`, `sexo`, `telefone`, `telefoneOp`, `arquivo`) VALUES
(3, 'Rosmari Muller', 1303202000, 'lip1m11ll3r@gmail.com', 'sajufklwfew', '\r\ncdsjuigfkldewÃ§fkewur78290irokle,fgfhjkfehf\r\n              ', 'C', 'Masculino', '(54)996571818', '', 0x323031383332305f3130323435305f43235f4153504e45545f30332e706466),
(4, 'Jesuita santana', 2147483647, 'lip1m11ll3r@gmail.com', 'iekflkjmfweg', 'toppppppp', 'E', NULL, '(54)996620353', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `idVaga` int(11) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `DescricaoVaga` varchar(45) NOT NULL,
  `AreaAtuacao` varchar(45) NOT NULL,
  `StatusVaga` varchar(45) NOT NULL,
  `remuneracao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagacategoria`
--

CREATE TABLE `vagacategoria` (
  `idVaga` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `pessoavaga`
--
ALTER TABLE `pessoavaga`
  ADD KEY `fk_Pessoa_has_Vaga_Vaga1_idx` (`idVaga`),
  ADD KEY `fk_Pessoa_has_Vaga_Pessoa_idx` (`idPessoa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indexes for table `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`idVaga`);

--
-- Indexes for table `vagacategoria`
--
ALTER TABLE `vagacategoria`
  ADD KEY `fk_Vaga_has_Categoria_Categoria1_idx` (`idCategoria`),
  ADD KEY `fk_Vaga_has_Categoria_Vaga1_idx` (`idVaga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaga`
--
ALTER TABLE `vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pessoavaga`
--
ALTER TABLE `pessoavaga`
  ADD CONSTRAINT `fk_Pessoa_has_Vaga_Pessoa` FOREIGN KEY (`idPessoa`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pessoa_has_Vaga_Vaga1` FOREIGN KEY (`idVaga`) REFERENCES `vaga` (`idVaga`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vagacategoria`
--
ALTER TABLE `vagacategoria`
  ADD CONSTRAINT `fk_Vaga_has_Categoria_Categoria1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vaga_has_Categoria_Vaga1` FOREIGN KEY (`idVaga`) REFERENCES `vaga` (`idVaga`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
