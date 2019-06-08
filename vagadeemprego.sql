-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2019 às 00:20
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
  `nomeCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Analise'),
(2, 'Contabeis'),
(3, 'Eletrônica'),
(6, 'Estetica'),
(7, 'Pedagogia'),
(8, 'Natação'),
(9, 'Natação'),
(10, 'Administração'),
(11, 'A2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
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
  `arquivo` blob,
  `statusConta` enum('Ativa','Pendente','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `documento`, `email`, `senha`, `descricao`, `tipoConta`, `sexo`, `telefone`, `telefoneOp`, `arquivo`, `statusConta`) VALUES
(3, 'Rosmari Muller', 1303202000, 'lip1m11ll3r@gmail.com', 'sajufklwfew', '\r\ncdsjuigfkldewÃ§fkewur78290irokle,fgfhjkfehf\r\n              ', 'C', 'Masculino', '(54)996571818', '', 0x323031383332305f3130323435305f43235f4153504e45545f30332e706466, 'Ativa'),
(4, 'Jesuita santana', 2147483647, 'lip1m11ll3r@gmail.com', 'iekflkjmfweg', 'toppppppp', 'E', NULL, '(54)996620353', '', NULL, 'Ativa'),
(5, 'Muller', 2147483647, 'lip1m11ll3r@gmail.com', 'teste', 'ashdasfjkfjehjfue\r\n\r\n    ', 'E', NULL, '54996620353', '', NULL, 'Ativa'),
(6, 'Muller', 2147483647, 'lip1m11ll3r@gmail.com', 'teste', 'ashdasfjkfjehjfue\r\n\r\n    ', 'E', NULL, '54996620353', '', NULL, 'Ativa'),
(7, 'José Afons', 1303202000, 'lip1m11ll3r@gmail.com', '12345678', 'yuewtij\r\n\r\n              ', 'C', 'Feminino', '54996620353', '', 0x323031383332305f3130323435305f43235f4153504e45545f30332e706466, 'Ativa'),
(8, 'José Afons', 1303202000, 'lip1m11ll3r@gmail.com', '12345678', 'yuewtij\r\n\r\n              ', 'C', 'Feminino', '54996620353', '', 0x323031383332305f3130323435305f43235f4153504e45545f30332e706466, 'Ativa'),
(9, 'José Afons', 1303202000, 'lip1m11ll3r@gmail.com', '12345678', 'yuewtij\r\n\r\n              ', 'C', 'Feminino', '54996620353', '', 0x323031383332305f3130323435305f43235f4153504e45545f30332e706466, 'Ativa'),
(10, 'Jesuita', 2147483647, 'lip1m11ll3r@gmail.com', '123456789', '\r\ndjskfsfjhdbgfjikl,sfd\r\n    ', 'E', NULL, '54996620353', '', NULL, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `idVaga` int(11) NOT NULL,
  `idUsuarioVaga` int(11) NOT NULL,
  `descricaoVaga` varchar(45) NOT NULL,
  `statusVaga` enum('Pendente','Preenchida','','') NOT NULL,
  `remuneracao` varchar(100) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  `contatoEmail` varchar(100) NOT NULL,
  `contatoTelefone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`idVaga`, `idUsuarioVaga`, `descricaoVaga`, `statusVaga`, `remuneracao`, `funcao`, `contatoEmail`, `contatoTelefone`) VALUES
(30, 4, 'ahfsajfkes\r\n\r\n\r\n               ', 'Pendente', '990', 'Pedreiro', 'lip1m11ll3r@gmail.com', '54996620353');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagacategoria`
--

CREATE TABLE `vagacategoria` (
  `idVaga` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagacategoria`
--

INSERT INTO `vagacategoria` (`idVaga`, `idCategoria`) VALUES
(30, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
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
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vaga`
--
ALTER TABLE `vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

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
