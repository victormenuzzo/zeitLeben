-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2018 às 01:40
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeitleben`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alergias`
--

CREATE TABLE `alergias` (
  `idPaciente` varchar(15) NOT NULL,
  `idAlergia` int(11) NOT NULL,
  `alergia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alergias`
--

INSERT INTO `alergias` (`idPaciente`, `idAlergia`, `alergia`) VALUES
('paulagiov', 1, 'Ovo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatosemergencia`
--

CREATE TABLE `contatosemergencia` (
  `idPaciente` varchar(15) NOT NULL,
  `nomeContato` varchar(15) NOT NULL,
  `telefoneContato` int(11) NOT NULL,
  `grauParentesco` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `idPessoa` varchar(20) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `tipoSanguineo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idPessoa`, `login`, `senha`, `tipoSanguineo`) VALUES
('46422600801', 'gabz_reis', 'gabriel123', 'A+'),
('09175320908', 'paulagiov', '1234', 'O-');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `dataNascimento` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `numeroCasa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`cpf`, `rg`, `dataNascimento`, `nome`, `email`, `telefone`, `cep`, `numeroCasa`) VALUES
('09175320908', '810240860', '1999-02-24', 'Paula', 'paulagiov@hotmail.co', 999950453, '81030020', '1205'),
('46422600801', '127413045', '1998-05-30', 'Gabriel Reis Ribeiro', 'gabriel@hotmail.com', 30398215, '81910190', '500');

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedioscontrolados`
--

CREATE TABLE `remedioscontrolados` (
  `idPaciente` varchar(15) NOT NULL,
  `idRemedio` int(11) NOT NULL,
  `remedio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `remedioscontrolados`
--

INSERT INTO `remedioscontrolados` (`idPaciente`, `idRemedio`, `remedio`) VALUES
('paulagiov', 1, 'Tarja Preta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alergias`
--
ALTER TABLE `alergias`
  ADD PRIMARY KEY (`idAlergia`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indexes for table `contatosemergencia`
--
ALTER TABLE `contatosemergencia`
  ADD PRIMARY KEY (`nomeContato`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`login`),
  ADD KEY `idPessoa` (`idPessoa`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `remedioscontrolados`
--
ALTER TABLE `remedioscontrolados`
  ADD PRIMARY KEY (`idRemedio`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alergias`
--
ALTER TABLE `alergias`
  MODIFY `idAlergia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `remedioscontrolados`
--
ALTER TABLE `remedioscontrolados`
  MODIFY `idRemedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alergias`
--
ALTER TABLE `alergias`
  ADD CONSTRAINT `alergias_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`);

--
-- Limitadores para a tabela `contatosemergencia`
--
ALTER TABLE `contatosemergencia`
  ADD CONSTRAINT `contatosemergencia_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`);

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`cpf`);

--
-- Limitadores para a tabela `remedioscontrolados`
--
ALTER TABLE `remedioscontrolados`
  ADD CONSTRAINT `remedioscontrolados_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
