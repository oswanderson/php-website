--Criar tabelas na mesma ordem que estão abaixo

CREATE DATABASE project;

CREATE TABLE users(
userID INT AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
address VARCHAR(50) NOT NULL,
email VARCHAR(200) NOT NULL,
cpf VARCHAR(11) NOT NULL,
password VARCHAR(100) NOT NULL
);

CREATE TABLE products(
productId INT AUTO_INCREMENT PRIMARY KEY,
productName VARCHAR(30) NOT NULL,
productDesc VARCHAR(200),
productPrice REAL NOT NULL
);

CREATE TABLE baughtProducts(
purchaseId INT AUTO_INCREMENT PRIMARY KEY,
userID INT ,
productId INT,
productName VARCHAR(30),
productDesc VARCHAR(200),
productPrice REAL,
CONSTRAINT fk_userId FOREIGN KEY (userID) REFERENCES users(userId),
CONSTRAINT fk_productId FOREIGN KEY (productId) REFERENCES products(productId)
);