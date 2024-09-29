CREATE DATABASE IF NOT EXISTS pwii;

USE pwii;

CREATE TABLE usuario (
  idusuario INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL,
  apelido VARCHAR(45),
  PRIMARY KEY (idusuario)
);

CREATE TABLE amigo (
  idamigo INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  PRIMARY KEY (idamigo)
);

INSERT INTO usuario (nome, senha) VALUES ('bianca', 'bia123');
