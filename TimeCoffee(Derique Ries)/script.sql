create database if not exists time_coffee;
use time_coffee;
create table if not exists users(
	id tinyint unsigned primary key auto_increment,
    name varchar(50) not null,
    email varchar(30) not null,
    password char(60) not null
);

/* 
Perfil de usuário para teste no banco de dados (email: mariane@gmail.com /senha: 123456)
-
insert into users values 
(null,"Mariane","mariane@gmail.com","$2y$10$RHo2g5UmT6wru1ePc3XEyezkVjd1DS.6rMc0lRB/K63/zo6dzjY22");

*/