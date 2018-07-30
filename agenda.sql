create database sysinv;
use sysinv;
create table  usuarios (
id int auto_increment primary key,
nombre varchar (100),
apellidos varchar (100),
tipo_documento varchar (100),
numero varchar (100),
email varchar (100),
telefono varchar (100),
usser varchar (100),
password varchar (100)
)

SELECT * from usuarios;