CREATE USER 'ice'@'localhost' IDENTIFIED BY 'ice';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'ice'@'localhost' WITH GRANT OPTION;
RENAME USER 'ice'@'localhost' TO 'ice'@'10.5.0.%';
create database if not exists plainventory;
use plainventory;
CREATE TABLE Spools (
    spoolid int NOT NULL AUTO_INCREMENT,
    material varchar(255) NOT NULL,
    color varchar(255) NOT NULL,
    owner varchar(255) NOT NULL,
    weight int,
    printer varchar(255),
    brand varchar(255),
    PRIMARY KEY (spoolid)
);
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL,
    role varchar(255) DEFAULT NULL,
    association varchar(255) DEFAULT NULL,
    lastlogin date DEFAULT NULL,
    PRIMARY KEY (id)
);