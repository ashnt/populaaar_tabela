-- Banco de Dados simples para teste do algoritmo --

CREATE DATABASE db;

CREATE TABLE usuarios(
	Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Usuario VARCHAR (100),
	Senha VARCHAR (100)
	);
