CREATE USER 'ice'@'localhost' IDENTIFIED BY 'ice';
GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'ice'@'localhost' WITH GRANT OPTION;
RENAME USER 'ice'@'localhost' TO 'ice'@'172.22.0.2';
CREATE DATABASE plainventory;
CREATE TABLE Spools (
    spoolid int NOT NULL AUTO_INCREMENT,
    material varchar(255) NOT NULL,
    color varchar(255) NOT NULL,
    owner varchar(255) NOT NULL,
    qt int,
    PRIMARY KEY (spoolid)
);