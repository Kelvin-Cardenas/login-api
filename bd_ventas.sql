
CREATE DATABASE bd_ventas;
USE bd_ventas;

CREATE TABLE usuario(
id int(255) auto_increment NOT NULL PRIMARY KEY,
usuario varchar(255) NOT NULL,
nombre varchar(255) NOT NULL,
apellido varchar(255) NOT NULL,
contrasena varchar(255) NOT NULL);

I