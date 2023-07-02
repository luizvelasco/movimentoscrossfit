CREATE DATABASE movimentos_crossfit;

CREATE TABLE movimentos(
    id INT(11) UNSIGNED auto_increment PRIMARY KEY,
    nome VARCHAR(100),
    img VARCHAR(200),
    tags VARCHAR(200),
    link VARCHAR(200),
    descricao TEXT, 
    usuario_id INT(11) UNSIGNED,
    Foreign Key (usuario_id) REFERENCES usuarios(id)
);

CREATE TABLE usuarios(
    id INT(11) UNSIGNED auto_increment PRIMARY KEY,
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    email VARCHAR(200),
    senha VARCHAR(200),
    token VARCHAR(200)
);

