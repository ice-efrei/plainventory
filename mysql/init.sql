CREATE USER 'ice'@'localhost' IDENTIFIED BY 'ice';
RENAME USER 'ice'@'localhost' TO 'ice'@'10.5.0.%';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'ice'@'10.5.0.%' WITH GRANT OPTION;
create database if not exists plainventory;
use plainventory;
create table if not exists spools (
    spoolid int NOT NULL AUTO_INCREMENT,
    material varchar(255) NOT NULL,
    color varchar(255) NOT NULL,
    owner varchar(255) NOT NULL,
    weight int,
    printer varchar(255),
    brand varchar(255),
    PRIMARY KEY (spoolid)
);
create table if not exists users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL,
    role varchar(255) DEFAULT NULL,
    association varchar(255) DEFAULT NULL,
    lastlogin date DEFAULT NULL,
    PRIMARY KEY (id)
);