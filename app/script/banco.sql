CREATE DATABASE `ifpr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE ifpr;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `usuario` varchar(45) not null,
  `senha` varchar(255) not null
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fim` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `equipe_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vendedor_equipe_fk` (`equipe_id`),
  CONSTRAINT `vendedor_equipe_fk` FOREIGN KEY (`equipe_id`) REFERENCES `equipe` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `produto_id` int(11) NOT NULL,
  `vendedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `venda_vendedor_fk` (`vendedor_id`),
  KEY `venda_produto_fk` (`produto_id`),
  CONSTRAINT `venda_produto_fk` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`),
  CONSTRAINT `venda_vendedor_fk` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;