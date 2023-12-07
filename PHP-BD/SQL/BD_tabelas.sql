/* COMANDO PARA CRIAÇÃO DO BANCO DE DADOS */ 


create database sislogin;

create table usuarios
(id int primary key auto_increment unsigned,
nome varchar(300),
email varchar(255),
usuario varchar(255),
senhar varchar(200));


create table Contato
(cod_usuario int primary key auto_increment, 
Nome varchar(100) not null,
Email varchar(100) not null ,
Assunto varchar(100) not null,
Mensagem varchar(1000) not null);



create table Frases
(cod_usuario int primary key auto_increment,
nome varchar(100),
Frases varchar(5000)not null);







