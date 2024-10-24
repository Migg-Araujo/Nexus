<?php
    if(isset($_SESSION)){
        session_destroy();
    }
    header('Location: home');
?>