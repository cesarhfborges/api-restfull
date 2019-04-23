-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2019 às 02:14
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faxino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `ID` int(1) NOT NULL,
  `DESCRICAO` varchar(60) NOT NULL,
  `USERCRI` int(255) NOT NULL,
  `USERMOD` int(255) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EXCLUIDO` bit(1) NOT NULL DEFAULT b'0',
  `ATIVO` bit(1) NOT NULL DEFAULT b'1',
  `SERVICOS` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID`, `DESCRICAO`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `EXCLUIDO`, `ATIVO`, `SERVICOS`) VALUES
(1, 'FAXINA', 1, 0, '2019-04-05 18:02:16', '2019-04-05 18:24:37', b'0', b'1', '1,2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `ID` int(1) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `SOBRENOME` varchar(60) NOT NULL,
  `EMAIL` varchar(130) NOT NULL,
  `CPF` varchar(45) NOT NULL,
  `RG` varchar(30) NOT NULL,
  `TELEFONE` varchar(20) NOT NULL,
  `CELULAR` varchar(20) NOT NULL,
  `SENHA` varchar(120) NOT NULL,
  `ATIVO` int(1) NOT NULL DEFAULT '1',
  `ULTLOGIN` datetime NOT NULL,
  `ULTIP` varchar(25) NOT NULL,
  `USERCRI` int(255) NOT NULL,
  `USERMOD` int(255) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FOTO` varchar(255) NOT NULL,
  `EXCLUIDO` int(1) NOT NULL DEFAULT '0',
  `CEP` varchar(15) DEFAULT NULL,
  `ENDERECO` varchar(255) DEFAULT NULL,
  `BAIRRO` varchar(255) DEFAULT NULL,
  `CIDADE` varchar(255) DEFAULT NULL,
  `UF` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`ID`, `NOME`, `SOBRENOME`, `EMAIL`, `CPF`, `RG`, `TELEFONE`, `CELULAR`, `SENHA`, `ATIVO`, `ULTLOGIN`, `ULTIP`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `FOTO`, `EXCLUIDO`, `CEP`, `ENDERECO`, `BAIRRO`, `CIDADE`, `UF`) VALUES
(1, 'Ana ', 'Alice - teste', 'anaalice@gmail.com', '71000000', '454545454', '6199150897', '61991224175', '123456', 1, '0000-00-00 00:00:00', '000000000000', 0, 0, '2019-03-04 11:16:50', '2019-03-11 20:50:00', '1552348175201903112049351.png', 0, '72309312', 'qr 321 conjunto 12 casa 22', 'samambaia', 'brasilia', 'DF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configservicos`
--

CREATE TABLE `configservicos` (
  `ID` int(1) NOT NULL,
  `DESCRICAO` varchar(60) NOT NULL,
  `TIPO` int(3) NOT NULL DEFAULT '1',
  `PRECOHORA` float(18,2) NOT NULL DEFAULT '0.00',
  `USERCRI` int(3) NOT NULL,
  `USERMOD` int(3) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EXCLUIDO` bit(1) NOT NULL DEFAULT b'0',
  `ATIVO` bit(1) NOT NULL DEFAULT b'1',
  `PRECOQUANTIDADE` float(18,2) NOT NULL DEFAULT '0.00',
  `DESCONTO` float(3,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configservicos`
--

INSERT INTO `configservicos` (`ID`, `DESCRICAO`, `TIPO`, `PRECOHORA`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `EXCLUIDO`, `ATIVO`, `PRECOQUANTIDADE`, `DESCONTO`) VALUES
(1, 'LIMPEZA COMODO', 1, 0.00, 1, 1, '2019-03-10 10:46:10', '2019-03-10 10:46:19', b'0', b'1', 5.00, 0.00),
(2, 'LAVAR PRATOS', 1, 0.00, 1, 1, '2019-03-10 10:46:16', '2019-03-10 10:47:03', b'0', b'1', 10.00, 0.00),
(3, 'PASSAR ROUPA', 0, 0.00, 1, 1, '2019-03-10 10:48:00', '2019-04-05 17:06:39', b'0', b'1', 15.00, 0.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `ID` int(1) NOT NULL,
  `DESCRICAO` varchar(60) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `MODULO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`ID`, `DESCRICAO`, `DATACRI`, `DATAMOD`, `MODULO`) VALUES
(1, 'Teste', '2019-03-24 19:29:00', '2019-03-24 19:29:00', 'servicos-index'),
(2, 'Divisão por zero.', '2019-03-24 19:32:04', '2019-03-24 19:32:04', 'servicos-index'),
(3, 'Divisão por zero.', '2019-03-24 19:34:48', '2019-03-24 19:34:48', 'servicos-index'),
(4, 'Divisão por zero.', '2019-03-24 19:35:42', '2019-03-24 19:35:42', 'servicos-index'),
(5, 'Divisão por zero.', '2019-03-24 19:36:21', '2019-03-24 19:36:21', 'servicos-index'),
(6, 'Divisão por zero.', '2019-03-24 19:48:50', '2019-03-24 19:48:50', 'servicos-index'),
(7, 'Sistema Executou', '2019-03-24 19:49:13', '2019-03-24 19:49:13', 'servicos-index'),
(8, 'Sistema Executou', '2019-03-24 19:49:14', '2019-03-24 19:49:14', 'servicos-index'),
(9, 'Sistema Executou', '2019-03-24 19:49:14', '2019-03-24 19:49:14', 'servicos-index'),
(10, 'Sistema Executou', '2019-03-24 19:49:14', '2019-03-24 19:49:14', 'servicos-index'),
(11, 'Sistema Executou', '2019-03-24 19:49:14', '2019-03-24 19:49:14', 'servicos-index'),
(12, 'Sistema Executou', '2019-03-24 19:49:44', '2019-03-24 19:49:44', 'servicos-index'),
(13, 'Sistema Executou', '2019-03-24 19:49:49', '2019-03-24 19:49:49', 'servicos-index'),
(14, '900 - Sistema Executou', '2019-03-24 19:50:19', '2019-03-24 19:50:19', 'servicos-index'),
(15, '0 - SQLSTATE[HY000]: General error', '2019-03-31 00:07:47', '2019-03-31 00:07:47', 'usuarios-editarperfil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `ID` int(1) NOT NULL,
  `DESCRICAO` varchar(60) NOT NULL,
  `CONFIGURACAO` varchar(255) DEFAULT NULL,
  `USERCRI` int(3) NOT NULL,
  `USERMOD` int(3) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EXCLUIDO` bit(1) NOT NULL DEFAULT b'0',
  `ATIVO` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`ID`, `DESCRICAO`, `CONFIGURACAO`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `EXCLUIDO`, `ATIVO`) VALUES
(1, 'FAXINA', NULL, 1, 0, '2019-04-05 18:08:07', '2019-04-05 18:08:07', b'0', b'1'),
(2, 'HIGIENIZAÇÃO BANHEIRO', NULL, 1, 0, '2019-04-05 18:24:28', '2019-04-05 18:24:28', b'0', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(1) NOT NULL,
  `NOME` varchar(60) NOT NULL,
  `SOBRENOME` varchar(60) NOT NULL,
  `EMAIL` varchar(130) NOT NULL,
  `TELEFONE1` varchar(20) DEFAULT NULL,
  `TELEFONE2` varchar(20) DEFAULT NULL,
  `SENHA` varchar(280) NOT NULL,
  `ATIVO` int(1) NOT NULL DEFAULT '1',
  `ULTLOGIN` datetime DEFAULT NULL,
  `ULTIP` varchar(25) NOT NULL,
  `USERCRI` int(255) NOT NULL,
  `USERMOD` int(255) NOT NULL,
  `DATACRI` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DATAMOD` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FOTO` varchar(255) DEFAULT NULL,
  `EXCLUIDO` int(1) NOT NULL DEFAULT '0',
  `TOKEN` varchar(255) DEFAULT NULL,
  `TOKENVALIDADE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOME`, `SOBRENOME`, `EMAIL`, `TELEFONE1`, `TELEFONE2`, `SENHA`, `ATIVO`, `ULTLOGIN`, `ULTIP`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `FOTO`, `EXCLUIDO`, `TOKEN`, `TOKENVALIDADE`) VALUES
(1, 'Administrador', 'Faxino', 'cesarhfborges@gmail.com', '61991508973', '6199887766', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, '2019-04-14 02:25:31', '192.168.0.2', 0, 1, '2019-02-26 23:46:02', '2019-04-20 10:27:59', '1554002960201903310029201.png', 0, 'ea6cc37e046a66f5ee36aa4f3bbf7f93cb09bc19572579b5444297640a781b12', '2019-04-20 18:27:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USERCRI` (`USERCRI`);

--
-- Indexes for table `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `configservicos`
--
ALTER TABLE `configservicos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lnk_usuarios_servicos` (`USERCRI`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `configservicos`
--
ALTER TABLE `configservicos`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
