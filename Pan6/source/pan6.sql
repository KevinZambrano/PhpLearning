create database pan6;

create table usuario(
correo varchar(50) not null primary key,
nombre varchar(50) not null,
apellidos varchar(70) not null,
genero varchar(10) not null,
password varchar(9) not null
);
