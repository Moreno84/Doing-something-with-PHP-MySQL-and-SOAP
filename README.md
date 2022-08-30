# Doing-something-with-PHP-MySQL-and-SOAP
1) Creating some files with PHP and i called them --> dato.php, cliente.php and servidor.php  
2) Creating a database with MySql: Name of the database --> usuario -->below exemple of the database what i created.

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

3) Conecting PHP with the Database(MySQL) and the same time i used NUSOAP/SOAP to have a conection between the client and web server(SOAP)

Finally i got these.

![image](https://user-images.githubusercontent.com/63936186/187541475-3dabb8de-63d9-4c83-8900-e4f4b078e9b1.png)
![image](https://user-images.githubusercontent.com/63936186/187541565-036225d5-d139-4373-a3ee-156776f696e2.png)



