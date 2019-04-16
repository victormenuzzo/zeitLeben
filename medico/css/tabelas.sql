use zeitleben;
CREATE TABLE `alergias` (
  `idPaciente` varchar(15) NOT NULL,
  `idAlergia` int(11) NOT NULL AUTO_INCREMENT,
  `alergia` varchar(20) NOT NULL,
  PRIMARY KEY (`idAlergia`),
  KEY `idPaciente` (`idPaciente`),
  CONSTRAINT `alergias_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`)
);
CREATE TABLE `paciente` (
  `idPessoa` varchar(20) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `tipoSanguineo` varchar(5) NOT NULL,
  `planoDeSaude` varchar(25) NOT NULL,
  PRIMARY KEY (`login`),
  KEY `idPessoa` (`idPessoa`),
  CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`cpf`)
);
CREATE TABLE `pessoa` (
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `dataNascimento` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `numeroCasa` varchar(10) NOT NULL,
  PRIMARY KEY (`cpf`)
);
CREATE TABLE `receita` (
  `idReceita` int(11) NOT NULL AUTO_INCREMENT,
  `obs` varchar(250) NOT NULL,
  `idPessoa` varchar(20) NOT NULL,
  PRIMARY KEY (`idReceita`),
  KEY `idPessoa` (`idPessoa`)
);
CREATE TABLE `remedios` (
  `idRemedio` int(11) NOT NULL AUTO_INCREMENT,
  `remedio` varchar(20) DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `idReceita` int(11) NOT NULL,
  PRIMARY KEY (`idRemedio`),
  KEY `idReceita` (`idReceita`)
);
CREATE TABLE `remedioscontrolados` (
  `idPaciente` varchar(15) NOT NULL,
  `idRemedio` int(11) NOT NULL AUTO_INCREMENT,
  `remedio` varchar(20) NOT NULL,
  PRIMARY KEY (`idRemedio`),
  KEY `idPaciente` (`idPaciente`),
  CONSTRAINT `remedioscontrolados_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`)
);
CREATE TABLE `triagem` (
  `idTriagem` int(11) NOT NULL AUTO_INCREMENT,
  `peso` varchar(10) NOT NULL,
  `sintomas` varchar(100) NOT NULL,
  `doencasEmTratamento` varchar(100) NOT NULL,
  `pressao` varchar(10) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `outrasInformacoes` varchar(200) DEFAULT NULL,
  `idPaciente` varchar(20) NOT NULL,
  PRIMARY KEY (`idTriagem`),
  KEY `idPaciente` (`idPaciente`)
);
CREATE TABLE `contatosemergencia` (
  `idPaciente` varchar(15) NOT NULL,
  `nomeContato` varchar(15) NOT NULL,
  `telefoneContato` int(11) NOT NULL,
  `grauParentesco` varchar(10) NOT NULL,
  PRIMARY KEY (`nomeContato`),
  KEY `idPaciente` (`idPaciente`),
  CONSTRAINT `contatosemergencia_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`login`)
) 
