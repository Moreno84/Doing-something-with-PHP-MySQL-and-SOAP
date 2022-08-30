CREATE DATABASE usuario;
USE usuario;

CREATE TABLE categoria(
	identificador int primary key,
    nombre varchar(50)
);

CREATE TABLE producto(
	identificador int primary key,
    nombre varchar(50),
    categoria int,
    foreign key (categoria) references categoria(identificador)

);

insert into categoria(identificador, nombre) values ('1','fruta');
insert into categoria(identificador, nombre) values ('2','vegetal');

insert into producto(identificador, nombre, categoria) values ('1','banana','1');
insert into producto(identificador, nombre, categoria) values ('2','fresa','1');
insert into producto(identificador, nombre, categoria) values ('3','melon','1');
insert into producto(identificador, nombre, categoria) values ('4','brocoli','2');

select * from producto;
select * from categoria;

