

CREATE DATABASE ifpr;

USE ifpr;

CREATE TABLE funcionario (
    id INT not null AUTO_INCREMENT,
    nome VARCHAR(255) NULL,
    email VARCHAR(150) NULL,
    senha VARCHAR(45) NULL,
    data_cadastro datetime DEFAULT NULL,
    PRIMARY KEY(id)
)