CREATE DATABASE ACME;
use ACME;

CREATE TABLE propietarios (
Id               int(50) not null auto_increment primary key,
Numero_cedula    int(10) not null unique,
Primer_nombre    varchar(30) not null,
Segundo_nombre   varchar(30),
Primer_apellido  varchar(30) not null,
Segundo_apellido varchar(30) not null,
Direccion        varchar(50) not null,
Telefono         bigint(20) not null,
Ciudad           varchar(30) not null,
Fecha_creacion   date,
Fecha_modificacion   date
)ENGINE=InnoDB;

CREATE TABLE conductores (
Id               int(50) not null auto_increment primary key,
Numero_cedula    int(10) not null unique,
Primer_nombre    varchar(30) not null,
Segundo_nombre   varchar(30),
Primer_apellido  varchar(30) not null,
Segundo_apellido varchar(30) not null,
Direccion        varchar(50) not null,
Telefono         bigint(20) not null,
Ciudad           varchar(30) not null,
Fecha_creacion   date,
Fecha_modificacion   date
)ENGINE=InnoDB;

CREATE TABLE vehiculos(
Id               int(50) not null auto_increment primary key,
Conductor_id     int(50) not null,
Propietario_id   int(50) not null,
Placa            varchar(20) not null,
Color            varchar(20) not null,
Marca            varchar(30) not null,
Tipo_Vehiculo    varchar(15) not null,
Fecha_creacion   date,
Fecha_modificacion   date,
CONSTRAINT fk_vehiculo_conductor FOREIGN KEY (Conductor_id) REFERENCES conductores(Id),
CONSTRAINT fk_vehiculo_propietario FOREIGN KEY (Propietario_id) REFERENCES propietarios(Id)
)ENGINE=InnoDB;