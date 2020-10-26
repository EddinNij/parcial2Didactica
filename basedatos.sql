CREATE DATABASE examen2;
use examen2;
CREATE TABLE datos(
    codigo int NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) not null,
    fecha date,
    primary key(codigo)
);
