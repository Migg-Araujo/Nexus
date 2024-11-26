<?php
    include 'connection.php';

    $sql = 'CREATE DATABASE IF NOT EXISTS NEXUS';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Database Created.')</script>";
    } else {
        echo "<script>console.log('Error in Create Database.')</script>";
    }

    $conn->select_db('NEXUS');

    $sql = 'CREATE TABLE IF NOT EXISTS USER_TABLE(
        ID_USER INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        USERNAME VARCHAR(25),
        EMAIL VARCHAR(60),
        PASSWORD VARCHAR(255)
    )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Table User Created.')</script>";
    } else {
        echo "<script>console.log('Error in Create Table User.')</script>";
    }
    
    $sql = 'CREATE TABLE IF NOT EXISTS STUDENT(
        ID_STUDENT INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        ID_USER INT,
        USER_SET BOOLEAN NOT NULL DEFAULT FALSE,
        FOREIGN KEY (ID_USER) REFERENCES USER_TABLE(ID_USER)
    )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Table Student Created.')</script>";
    } else {
        echo "<script>console.log('Error in Create Table Student.')</script>";
    }

    $sql = 'CREATE TABLE IF NOT EXISTS TEACHER(
        ID_TEACHER INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        ID_USER INT,
        FOREIGN KEY (ID_USER) REFERENCES USER_TABLE(ID_USER)
    )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Table Teacher Created.')</script>";
    } else {
        echo "<script>console.log('Error in Create Table Teacher.')</script>";
    }

    $sql = 'CREATE TABLE IF NOT EXISTS QUESTIONS(
        ID_QUESTION INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        QUESTION VARCHAR(255),
        ANSWER VARCHAR(255),
        ID_STUDENT INT,
        FOREIGN KEY (ID_STUDENT) REFERENCES STUDENT(ID_STUDENT)
    )';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Table Questions Created.')</script>";
    } else {
        echo "<script>console.log('Error in Create Table Questions.')</script>";
    }

    $sql = 'INSERT INTO USER_TABLE(USERNAME, EMAIL, PASSWORD) VALUES ("migg", "nexus.aluno1@gmail.com", "$2y$10$5LA5a/qjEaCc4yKaakqkLuU06RyySroHVJ9f7/fBYlHVlbXUEVNwW"), ("migg", "nexus.aluno2@gmail.com", "$2y$10$5LA5a/qjEaCc4yKaakqkLuU06RyySroHVJ9f7/fBYlHVlbXUEVNwW"), ("migg", "nexus.aluno3@gmail.com", "$2y$10$5LA5a/qjEaCc4yKaakqkLuU06RyySroHVJ9f7/fBYlHVlbXUEVNwW"), ("migg", "nexus.professor1@gmail.com", "$2y$10$5LA5a/qjEaCc4yKaakqkLuU06RyySroHVJ9f7/fBYlHVlbXUEVNwW"), ("migg", "nexus.professor2@gmail.com", "$2y$10$5LA5a/qjEaCc4yKaakqkLuU06RyySroHVJ9f7/fBYlHVlbXUEVNwW")';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Data inserted.')</script>";
    } else {
        echo "<script>console.log('Error in insert data.')</script>";
    }
    
    $sql = 'INSERT INTO STUDENT(ID_USER, USER_SET) VALUES (1, 0), (2, 1), (3, 0)';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Data inserted.')</script>";
    } else {
        echo "<script>console.log('Error in insert data.')</script>";
    }

    $sql = 'INSERT INTO TEACHER(ID_USER) VALUES (4), (5)';
    $sql_query = $conn->query($sql);

    if ($sql_query === TRUE) {
        echo "<script>console.log('Data inserted.')</script>";
    } else {
        echo "<script>console.log('Error in insert data.')</script>";
    }
    
    $sql = 'DELETE FROM USER_TABLE WHERE ID_USER > 5';
    $sql_query = $conn->query($sql);

    $sql = 'DELETE FROM STUDENT WHERE ID_STUDENT > 3';
    $sql_query = $conn->query($sql);

    $sql = 'DELETE FROM TEACHER WHERE ID_TEACHER > 2';
    $sql_query = $conn->query($sql);
?>