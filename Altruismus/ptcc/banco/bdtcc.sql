-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Ago-2022 às 00:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoacao`
--

CREATE TABLE `tbdoacao` (
  `idDoacao` int(11) NOT NULL,
  `dataDoacao` date DEFAULT NULL,
  `descDoacao` varchar(40) DEFAULT NULL,
  `idOng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdoador`
--

CREATE TABLE `tbdoador` (
  `idDoador` int(11) NOT NULL,
  `nomeDoador` varchar(40) DEFAULT NULL,
  `emailDoador` varchar(40) DEFAULT NULL,
  `senhaDoador` varchar(40) DEFAULT NULL,
  `dataNascDoador` date DEFAULT NULL,
  `estadoDoador` varchar(40) DEFAULT NULL,
  `cidadeDoador` varchar(40) DEFAULT NULL,
  `bairroDoador` varchar(40) DEFAULT NULL,
  `ruaDoador` varchar(40) DEFAULT NULL,
  `lugradouroDoador` varchar(40) DEFAULT NULL,
  `complementoDoador` varchar(40) DEFAULT NULL,
  `cepDoador` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitensdoacao`
--

CREATE TABLE `tbitensdoacao` (
  `idItensDoacao` int(11) NOT NULL,
  `nomeDoacao` varchar(40) DEFAULT NULL,
  `quantidadeItensDoacao` varchar(40) DEFAULT NULL,
  `idDoacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbong`
--

CREATE TABLE `tbong` (
  `idOng` int(11) NOT NULL,
  `nomeOng` int(11) NOT NULL,
  `emailOng` int(11) NOT NULL,
  `senhaOng` int(11) NOT NULL,
  `dataNascOng` int(11) NOT NULL,
  `estadoOng` int(11) NOT NULL,
  `cidadeOng` int(11) NOT NULL,
  `bairroOng` int(11) NOT NULL,
  `ruaOng` int(11) NOT NULL,
  `complementoOng` int(11) NOT NULL,
  `lugradouroOng` int(11) NOT NULL,
  `cepOng` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprestacaocontasong`
--

CREATE TABLE `tbprestacaocontasong` (
  `idPrestacaoContasOng` int(11) NOT NULL,
  `quantidadeItensRecebido` varchar(40) DEFAULT NULL,
  `descProdutosRecebidos` varchar(40) DEFAULT NULL,
  `dataRecebimento` date DEFAULT NULL,
  `fotoOng` varchar(20) DEFAULT NULL,
  `fotoDoador` varchar(20) DEFAULT NULL,
  `idOng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbrespostausuario`
--

CREATE TABLE `tbrespostausuario` (
  `idRespostaUsuario` int(11) NOT NULL,
  `simOuNao` varchar(40) DEFAULT NULL,
  `idDoador` int(11) NOT NULL,
  `idDoacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefonedoador`
--

CREATE TABLE `tbtelefonedoador` (
  `idTelefoneDoador` int(11) NOT NULL,
  `telefoneDoador` varchar(40) DEFAULT NULL,
  `idDoador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtelefoneong`
--

CREATE TABLE `tbtelefoneong` (
  `idTelefoneDoador` int(11) NOT NULL,
  `telefoneOng` varchar(40) DEFAULT NULL,
  `idOng` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD PRIMARY KEY (`idDoacao`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  ADD PRIMARY KEY (`idItensDoacao`),
  ADD KEY `idDoacao` (`idDoacao`);

--
-- Índices para tabela `tbong`
--
ALTER TABLE `tbong`
  ADD PRIMARY KEY (`idOng`);

--
-- Índices para tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  ADD PRIMARY KEY (`idPrestacaoContasOng`),
  ADD KEY `idOng` (`idOng`);

--
-- Índices para tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  ADD PRIMARY KEY (`idRespostaUsuario`),
  ADD KEY `idDoador` (`idDoador`),
  ADD KEY `idDoacao` (`idDoacao`);

--
-- Índices para tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  ADD PRIMARY KEY (`idTelefoneDoador`),
  ADD KEY `idDoador` (`idDoador`);

--
-- Índices para tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD PRIMARY KEY (`idTelefoneDoador`),
  ADD KEY `idOng` (`idOng`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  MODIFY `idDoacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdoador`
--
ALTER TABLE `tbdoador`
  MODIFY `idDoador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  MODIFY `idItensDoacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbong`
--
ALTER TABLE `tbong`
  MODIFY `idOng` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  MODIFY `idPrestacaoContasOng` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  MODIFY `idRespostaUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  MODIFY `idTelefoneDoador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  MODIFY `idTelefoneDoador` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbdoacao`
--
ALTER TABLE `tbdoacao`
  ADD CONSTRAINT `tbdoacao_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbitensdoacao`
--
ALTER TABLE `tbitensdoacao`
  ADD CONSTRAINT `tbitensdoacao_ibfk_1` FOREIGN KEY (`idDoacao`) REFERENCES `tbdoacao` (`idDoacao`);

--
-- Limitadores para a tabela `tbprestacaocontasong`
--
ALTER TABLE `tbprestacaocontasong`
  ADD CONSTRAINT `tbprestacaocontasong_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);

--
-- Limitadores para a tabela `tbrespostausuario`
--
ALTER TABLE `tbrespostausuario`
  ADD CONSTRAINT `tbrespostausuario_ibfk_1` FOREIGN KEY (`idDoacao`) REFERENCES `tbdoacao` (`idDoacao`),
  ADD CONSTRAINT `tbrespostausuario_ibfk_2` FOREIGN KEY (`idDoador`) REFERENCES `tbdoador` (`idDoador`);

--
-- Limitadores para a tabela `tbtelefonedoador`
--
ALTER TABLE `tbtelefonedoador`
  ADD CONSTRAINT `tbtelefonedoador_ibfk_1` FOREIGN KEY (`idDoador`) REFERENCES `tbdoador` (`idDoador`);

--
-- Limitadores para a tabela `tbtelefoneong`
--
ALTER TABLE `tbtelefoneong`
  ADD CONSTRAINT `tbtelefoneong_ibfk_1` FOREIGN KEY (`idOng`) REFERENCES `tbong` (`idOng`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
