/*BANCO ENIGMA STORE - VITOR*/
create database enigmastore;

use enigmastore;

create table cliente(
cpfcli varchar(11) primary key not null, /*Alterado, pois não pode ser inteiro - Entrada: 00935313206 > Saida: 935313206 (em INT)*/
nomecli varchar(30) not null,
emailcli varchar(30) not null,
senhacli varchar(30) not null);

create table pedido(
id_pedido int auto_increment primary key not null,
valor_pedido float(30) not null,
data_pedido date not null,
cpf_cli varchar(11), /*Referências ao CPF e CNPJ alteradas para VARCHAR*/
constraint fk_id_cpf foreign key (cpf_cli) references cliente(cpfcli));

create table empresa(
cnpjemp varchar(14) primary key not null, /*Mesma alteração da tabela cliente*/
nomemp varchar(100) not null,
emailemp varchar(50) not null,
senhaemp varchar(50) not null,
cepemp varchar(8) not null);

create table produto(
id_produto int auto_increment primary key not null,
nomeprod varchar(50) not null,
catprod varchar(30) not null,
descprod varchar(500) not null,
uniprod varchar(20) not null,
quantprod int not null,
precoprod float(50) not null,
cnpj_empresa varchar(14),
constraint fk_id_cnpj foreign key (cnpj_empresa) references empresa(cnpjemp));

create table pedido_produto(
id_ped_prod integer auto_increment primary key,
data_ped_prod date not null,
forma_pag varchar(50) not null,
id_ped int,
id_prod int,
constraint fk_id_pedido foreign key (id_ped) references PEDIDO (id_pedido),
constraint fk_id_produto foreign key (id_prod) references PRODUTO (id_produto));

insert into cliente values ('00935313206','Vitor Campos Lima','vicamposlima@protonmail.com','minhasenha');
select * from cliente;

insert into empresa values ('48562158746395','Alpha RedBlue Telecom','alphatele@gmail.com','senhaempresa','69018150');
select * from empresa;

insert into pedido values (default,'10.5','2021-10-12',default);
select * from pedido;

insert into produto values (default, 'Mouse HyperX Pulsefire RGB', 'Informática', 'Mouse gamer de altissímo desempenho, com DPI configurável e RGB.',356,299.99,default);
select * from produto;

insert into pedido_produto values (default,'2012-10-20','BOLETO',default,default);
select * from pedido_produto;

