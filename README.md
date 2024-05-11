# BarberShop Management System | Scissor

This project was created as a final assignment for a PHP course. It is a management system designed specifically for barbershops. The system is developed using HTML, CSS, JavaScript, and PHP.

## Features:

- It's possible to save and manage the barbershop clients
- It's possible to save and manage the services scheduled
- It's possible to edit the account info.

## Technologies Used:

- HTML
- CSS
- JavaScript
- PHP

## How to Use:

1. Clone this repository to your local machine.
2. Set up a local server environment with PHP support (e.g., XAMPP, WAMP, MAMP).
3. Import the provided SQL database schema to set up the database.
4. Configure the database connection in the PHP files (config.php or similar).
5. Open the project in your web browser and start using the system.

 ## SQL Scripts:
 
 ```sql

CREATE DATABASE db_barbearia;

CREATE TABLE tbl_usuario (
id_usuario int NOT NULL AUTO_INCREMENT,
nome_usuario varchar(50) DEFAULT NULL,
email_usuario varchar(50) DEFAULT NULL,
senha_usuario varchar(50) DEFAULT NULL,
PRIMARY KEY (id_usuario)
);

CREATE TABLE `tbl_servico` (
  `id_servico` int NOT NULL AUTO_INCREMENT,
  `cliente_servico` varchar(50) DEFAULT NULL,
  `funcionario_servico` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `servico` varchar(50) DEFAULT NULL,
  `data_hora` varchar(50) DEFAULT NULL,
  `obs_servico` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_servico`)
);

CREATE TABLE `tbl_funcionario` (
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(50) DEFAULT NULL,
  `cpf_funcionario` varchar(50) DEFAULT NULL,
  `salario_funcionario` varchar(50) DEFAULT NULL,
  `telefone_funcionario` varchar(50) DEFAULT NULL,
  `endereco_funcionario` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_funcionario`)
);

CREATE TABLE `imagens_funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagem` mediumblob,
  `id_funcionario` int DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `imagens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imagem` mediumblob,
  PRIMARY KEY (`id`)
);
```
