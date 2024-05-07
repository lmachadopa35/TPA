create database cotemig_fit_3c1;
use cotemig_fit_3c1;

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `idAluno` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sexo` char(1) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `numero` int NOT NULL,
  `complemento` text NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `uf` char(2) NOT NULL,
  `modalidade` varchar(35) NOT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;
