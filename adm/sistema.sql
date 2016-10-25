-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2016 at 02:07 PM
-- Server version: 5.6.28
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `producao`
--

-- --------------------------------------------------------

--
-- Estrutura da Tabela "Cadastro_373"
--

CREATE TABLE `cadastro_373` (
  `ID` int(11) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `NumSerie` varchar(10) NOT NULL,
  `DataCadastro` date NOT NULL,
  `HoraCadastro` time NOT NULL,
  `UserCadastro` varchar(50) NOT NULL,
  `LeiMifare` varchar(50) NOT NULL,
  `LeiProx` varchar(10) NOT NULL,
  `LeiBarras` varchar(20) NOT NULL,
  `LeiBio` varchar(20) NOT NULL,
  `Firmware` varchar(10) NOT NULL,
  `reservado` varchar(10) NOT NULL,
  `DataRetorna` datetime DEFAULT NULL,
  `HoraRetorna` time NOT NULL,
  `DataLibera` datetime DEFAULT NULL,
  `HoraLibera` time NOT NULL,
  `Display` varchar(20) NOT NULL,
  `Observa` text NOT NULL,
  `Status` int(2) NOT NULL,
  `UserLibera` varchar(150) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da Tabela "Cadastro_1510"
--

CREATE TABLE `cadastro_1510` (
  `ID` int(11) NOT NULL,
  `NumREP` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `DataCadastro` date NOT NULL,
  `HoraCadastro` time NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Observa` text NOT NULL,
  `Leitoras` varchar(230) NOT NULL,
  `DataRetorna` datetime DEFAULT NULL,
  `HoraRetorna` time DEFAULT NULL,
  `DataLiberaReteste` datetime DEFAULT NULL,
  `HoraLiberaReteste` time DEFAULT NULL,
  `UserCadastro` varchar(50) NOT NULL,
  `HOS` varchar(20) NOT NULL,
  `LBio` varchar(45) DEFAULT '99' COMMENT 'Módulos Biométricos:01 - 512KB - 300 Digitais - SUPREMA02 - 4MB - 9.600 Digitais - SUPREMA03 - 8MB - 15 MIL Digitais - SUPREMA04 - 1MB - 1.900 Digitais - CAPACITIVA - SUPREMA05 - 4MB - 9.600 Digitais - CAPACITIVA - SUPREMA06 - 4MB - 9.600 Digitais - DEDO VIVO (LFD) - SUPREMA07 - 1.000 Digitais - FS (FINCHOS)08 - Lumidigm09 - 900 Digitais - Roma - Henry',
  `LProx` varchar(45) DEFAULT '99' COMMENT 'Leitores proximidade RFID:01 - Wiegand02 - Abatrack03 - Indala04 - HID05 - Acura06 - PHID',
  `LMif` varchar(45) DEFAULT '5',
  `LBar` varchar(45) DEFAULT '5',
  `UserReteste` varchar(45) DEFAULT NULL,
  `NF` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da Tabela "Cadastro_acesso"
--

CREATE TABLE `cadastro_acesso` (
  `ID` int(11) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `NumSerie` varchar(10) NOT NULL,
  `DataCadastro` date DEFAULT NULL,
  `HoraCadastro` time NOT NULL,
  `UserCadastro` varchar(50) NOT NULL,
  `LeiMifare` varchar(50) NOT NULL DEFAULT '00',
  `LeiProx` varchar(10) NOT NULL DEFAULT '00',
  `LeiBarras` varchar(20) NOT NULL DEFAULT '00',
  `LeiBio` varchar(20) NOT NULL DEFAULT '00',
  `Firmware` varchar(10) NOT NULL DEFAULT '00',
  `UserLibera` varchar(50) NOT NULL,
  `DataRetorna` datetime DEFAULT NULL,
  `HoraRetorna` time NOT NULL,
  `DataLibera` datetime DEFAULT NULL,
  `HoraLibera` time NOT NULL,
  `Display` varchar(20) NOT NULL DEFAULT '-',
  `Observa` text NOT NULL,
  `Status` int(2) NOT NULL,
  `HOS` varchar(120) DEFAULT NULL,
  `FW` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da Tabela "Cadastro_cartografico"
--

CREATE TABLE `cadastro_cartografico` (
  `id` int(11) NOT NULL,
  `NumSerie` int(10) UNSIGNED NOT NULL,
  `UserCadastro` varchar(45) DEFAULT NULL,
  `DataCadastro` varchar(45) DEFAULT NULL,
  `HoraCadastro` varchar(45) DEFAULT NULL,
  `DataLibera` varchar(45) DEFAULT NULL,
  `HoraLibera` varchar(45) DEFAULT NULL,
  `UserLibera` varchar(45) DEFAULT NULL,
  `HOS` varchar(45) DEFAULT NULL,
  `Obs` text,
  `Modelo` varchar(45) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da Tabela "Cadastro_catraca"
--

CREATE TABLE `cadastro_catraca` (
  `id` int(11) NOT NULL,
  `NumSerie` varchar(45) DEFAULT NULL,
  `Tec` varchar(45) NOT NULL COMMENT 'Tecnologia:\n1 - 7x\n2 - 8x\n3 - Super Fácil\n4 - Semi Eletrônica\n5 - Mecânica\n\n',
  `Firmware` varchar(45) NOT NULL COMMENT 'Se nenhum, digitar 0',
  `Lei1` varchar(45) DEFAULT NULL COMMENT 'Leitor 1:\n99 - NENHUMA\n01 - WIE - WIEGAND\n02 - ABA - ABATRACK\n03 - IND - INDALA\n04 - HID\n05 - ACU - Acura\n06 - PHID\n22 - Barras\n23 - SmartCard\n09 - Monitor',
  `Lei2` varchar(45) DEFAULT NULL COMMENT 'Leitor 2:\n99 - NENHUMA\n01 - WIE - WIEGAND\n02 - ABA - ABATRACK\n03 - IND - INDALA\n04 - HID\n05 - ACU - Acura\n06 - PHID\n22 - Barras\n23 - SmartCard\n09 - Monitor',
  `Lei3` varchar(45) DEFAULT NULL COMMENT 'Leitor 3:\n99 - NENHUMA</option>\n01 - (512K) - 0300 Digitais SUPREMA\n02 - (4MB) - 9600 Digitais SUPREMA\n03 - (8MB) - 15000 Digitais CAPACITIVA\n04 - (1MB) - 1.900 Digitais CAPACITIVA\n05 - (4MB) - 9.600 Digitais CAPACITIVA\n06 - (4MB) - 9.600 Digitais DEDO VIVO\n07 - 1.000 Digitais FS - FINCHOS\n08 - LUM - Lumidigm\n09 - 900 Digitais ROMA (Henry) \n22 - Barras\n23 - SmartCard',
  `Lei4` varchar(45) DEFAULT NULL COMMENT 'Leitor 4:\n99 - NENHUMA\n01 - WIE - WIEGAND\n02 - ABA - ABATRACK\n03 - IND - INDALA\n04 - HID\n05 - ACU - Acura\n06 - PHID\n22 - Barras\n23 - SmartCard\n24 - Omni\n25 - Omni 9600',
  `Lei5` varchar(45) DEFAULT NULL COMMENT 'Leitor 5:\n99 - NENHUMA\n01 - WIE - WIEGAND\n02 - ABA - ABATRACK\n03 - IND - INDALA\n04 - HID\n05 - ACU - Acura\n06 - PHID\n22 - Barras\n23 - SmartCard\n24 - Omni\n25 - Omni 9600',
  `Cofre` varchar(45) DEFAULT NULL COMMENT '99 - Não Possui\n01 - EMBUTIDO [INTELIGENTE] - Wiegand\n02 - EMBUTIDO [INTELIGENTE] - Abatrack\n03 - EMBUTIDO INTELIGENTE] - SmartCard\n04 - EMBUTIDO [SIMPLES] - Wiegand\n05 - EMBUTIDO [SIMPLES] - Abatrack[\n06 - EMBUTIDO [SIMPLES] - SmartCard\n11 - EXTERNO [INTELIGENTE] - Wiegand\n12 - EXTERNO [INTELIGENTE] - Abatrack\n13 - EXTERNO INTELIGENTE] - SmartCard\n14 - EXTERNO [SIMPLES] - Wiegand\n15 - EXTERNO [SIMPLES] - Abatrack\n16 - EXTERNO [SIMPLES] - SmartCard',
  `Display` varchar(45) DEFAULT NULL COMMENT 'Display:\n1 - ALFANUMÉRICO 16X02\n2 - BIG NUMBER 16X2\n3 - GRÁFICO\n4 - TFT COLORIDO\n5 - NÃO POSSUI',
  `Pedestal` varchar(45) DEFAULT NULL COMMENT 'Modelos de Pedestal\n1 - Lumen Advance\n2 - Pedestal\n3 - Pedestal Inox\n4 - LED\n5 - Balcão\n6 - Mini Balcão\n7 - Cadeirante\n8 - Cadeirante Portinhola',
  `DataCadastro` varchar(45) DEFAULT NULL,
  `HoraCadastro` varchar(45) DEFAULT NULL,
  `Pedido` varchar(45) DEFAULT NULL,
  `Mecanismo` varchar(45) DEFAULT NULL COMMENT 'Mecanismo\n1 - Simples\n2 - Anti Pânico\n',
  `Obs` text,
  `UserCadastro` varchar(45) DEFAULT NULL,
  `Tid` int(3) NOT NULL COMMENT '1 - Catraca, 2 - Totem'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da Tabela "laudo"
--

CREATE TABLE `laudo` (
  `id` int(11) UNSIGNED NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `qtTeste` int(10) DEFAULT NULL,
  `qtTotal` int(10) DEFAULT NULL,
  `dataCadastro` varchar(50) DEFAULT NULL,
  `obs` longtext,
  `usrCad` varchar(50) DEFAULT NULL,
  `usrRec` varchar(50) DEFAULT NULL,
  `usrLaudo` varchar(50) DEFAULT NULL,
  `Item` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `DataRecebe` varchar(50) DEFAULT NULL,
  `DataLaudo` varchar(50) DEFAULT NULL,
  `ObsLaudo` longtext,
  `StatusLaudo` int(11) DEFAULT NULL,
  `Laudo` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `codLogin` mediumint(8) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(120) NOT NULL,
  `MetaPrevista` varchar(100) DEFAULT '0',
  `MetaRealizada` varchar(45) DEFAULT '0',
  `MeuIP` varchar(100) DEFAULT '-',
  `P2Montagem` int(2) DEFAULT '0',
  `P2Reteste` int(2) DEFAULT '0',
  `P2Adm` int(2) DEFAULT '0',
  `Nome` varchar(100) DEFAULT NULL,
  `MontOK` varchar(100) DEFAULT NULL,
  `MontNOK` varchar(45) DEFAULT 'N' COMMENT 'privilégio para corrigir projeto da Interact Brasil',
  `CAba` varchar(45) DEFAULT 'N' COMMENT 'SE LOGIN É OU NÃO DA EQUIPE IC BRASIL\n\n22 PARA SIM\nN PARA NÃO',
  `CWieg` varchar(45) DEFAULT NULL,
  `CMif` varchar(45) DEFAULT NULL,
  `CadCat` int(2) DEFAULT '0',
  `PrivNota` int(2) NOT NULL DEFAULT '0',
  `PrivObs` int(2) NOT NULL DEFAULT '0',
  `PrivDNota` varchar(5) NOT NULL,
  `PrivLaudo` int(2) DEFAULT '5' COMMENT 'PRIVILEGIO DE LAUDO',
  `CadLaudo` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`codLogin`, `login`, `senha`, `MetaPrevista`, `MetaRealizada`, `MeuIP`, `P2Montagem`, `P2Reteste`, `P2Adm`, `Nome`, `MontOK`, `MontNOK`, `CAba`, `CWieg`, `CMif`, `CadCat`, `PrivNota`, `PrivObs`, `PrivDNota`, `PrivLaudo`, `CadLaudo`) VALUES
(1, 'admin', '698dc19d489c4e4db73e28a713eab07b', '522', '200', '192.168.44.44', 9, 9, 9, 'Marx Medeiros', '198', '300', '0012292129', '77488847', '3213123', 9, 0, 0, '', 9, 9);
-- --------------------------------------------------------

--
-- Table structure for table `loglaudo`
--

CREATE TABLE `loglaudo` (
  `id` int(11) UNSIGNED NOT NULL,
  `Evento` varchar(255) DEFAULT NULL,
  `UserEvento` varchar(50) DEFAULT NULL,
  `DataCadastro` varchar(50) DEFAULT NULL,
  `EventoID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_373`
--
ALTER TABLE `cadastro_373`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NumSerie` (`NumSerie`);

--
-- Indexes for table `cadastro_1510`
--
ALTER TABLE `cadastro_1510`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `1510_NumREP` (`NumREP`),
  ADD UNIQUE KEY `NumREP` (`NumREP`);

--
-- Indexes for table `cadastro_acesso`
--
ALTER TABLE `cadastro_acesso`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `NumSerie` (`NumSerie`);

--
-- Indexes for table `cadastro_cartografico`
--
ALTER TABLE `cadastro_cartografico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_catraca`
--
ALTER TABLE `cadastro_catraca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`codLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_373`
--
ALTER TABLE `cadastro_373`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `cadastro_1510`
--
ALTER TABLE `cadastro_1510`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `cadastro_acesso`
--
ALTER TABLE `cadastro_acesso`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `cadastro_cartografico`
--
ALTER TABLE `cadastro_cartografico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `cadastro_catraca`
--
ALTER TABLE `cadastro_catraca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `codLogin` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;