CREATE DATABASE IF NOT EXISTS NEXUS;

USE NEXUS;

CREATE TABLE IF NOT EXISTS USER_TABLE(
    ID_USER INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USERNAME VARCHAR(25),
    EMAIL VARCHAR(60),
    PASSWORD VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS STUDENT(
    ID_STUDENT INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    ID_USER INT,
    USER_SET BOOLEAN NOT NULL DEFAULT FALSE,
    FOREIGN KEY (ID_USER) REFERENCES USER_TABLE(ID_USER)
);

CREATE TABLE IF NOT EXISTS TEACHER(
    ID_TEACHER INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    ID_USER INT,
    FOREIGN KEY (ID_USER) REFERENCES USER_TABLE(ID_USER)
);

CREATE TABLE IF NOT EXISTS QUESTIONS(
    ID_QUESTION INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    QUESTION VARCHAR(255),
    ANSWER VARCHAR(255),
    ID_STUDENT INT,
    FOREIGN KEY (ID_STUDENT) REFERENCES STUDENT(ID_STUDENT)
);