<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($host, $username, $password);

    if(!$conn){
        die('ERROR SQL');
    }
?>