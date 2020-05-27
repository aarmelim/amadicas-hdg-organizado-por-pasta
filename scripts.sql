CREATE DATABASE amadicas;

DROP TABLE filmes; 

CREATE TABLE filmes
(
    id int(11) NOT NULL,
    nome_filme varchar(255) NOT NULL,
    nota_filme varchar(3),
    plataforma varchar(255),
    descricao varchar(255),
    data_criacao datetime NOT NULL,
    data_modificacao datetime NOT NULL

);
ALTER TABLE filmes	  
    ADD PRIMARY KEY (id);

ALTER TABLE filmes	  
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


DROP TABLE livros; 

CREATE TABLE livros
(
    id int(11) NOT NULL,
    nome_livro varchar(255) NOT NULL,
    nota_livro varchar(3),
    autor varchar(255),
    descricao varchar(255),
    ondeli varchar(40),
    situacao varchar (40),
    data_criacao datetime NOT NULL,
    data_modificacao datetime NOT NULL

);
ALTER TABLE livros	  
    ADD PRIMARY KEY (id);

ALTER TABLE livros	  
    MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;