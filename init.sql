# CREATE USER 'ice'@'localhost' IDENTIFIED BY 'ice';
# GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'ice'@'localhost' WITH GRANT OPTION;
# # RENAME USER 'ice'@'localhost' TO 'ice'@'172.22.0.2';
# CREATE DATABASE plainventory if not exists;
use plainventory;
CREATE TABLE Associations (
    associationid int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    PRIMARY KEY (associationid)
);
CREATE TABLE Spools (
    spoolid int NOT NULL AUTO_INCREMENT,
    material varchar(255) NOT NULL,
    color varchar(255) NOT NULL,
    owner int NOT NULL,
    qt int,
    PRIMARY KEY (spoolid)
);
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL,
    role varchar(255) DEFAULT NULL,
    association int DEFAULT NULL,
    lastlogin date DEFAULT NULL,
    PRIMARY KEY (id)
);