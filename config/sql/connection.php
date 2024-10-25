<?php
    $host = getenv('DB_HOST');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');

    $conn = mysqli_connect($host, $username, $password);

    if(!$conn){
        die('ERROR SQL');
    }
?>