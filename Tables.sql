CREATE DATABASE coletor;
CREATE TABLE computador_cliente(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome varchar(20),
mac varchar(17),
benchmark int(8)
); 
CREATE TABLE IF NOT EXISTS  benchmark(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
nome varchar(40),
benchmark int(8)
); 
/* Tabela Dinamica com valor gerado na criação */
CREATE TABLE IF NOT EXISTS  serie/* id do computador cliente */(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
fk in(11),
dt varchar(8),
hora varchar(8),
serie int(4)
); 