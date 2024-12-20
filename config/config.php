<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    define('INCLUDE_PATH', 'http://localhost/nexus/');

    $autoload = function($class) {
        $path = 'classes/'.$class.'.php';
        if(file_exists($path)) {
            require_once $path;
        } else if(file_exists('../'.$path)) {
            require_once '../'.$path;
        }
    };
    spl_autoload_register($autoload);
?>
