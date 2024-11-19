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
?>