<?php
    session_start();
    $_SESSION = [];
    session_unset(); //jaga-jaga karena ada beberapa kasus yang sessionnya tidak hilang
    session_destroy();

    setcookie('id', '', time() -3600);
    setcookie('sese', '', time() - 3600);
    
    header("Location: login2.php");
    exit;
?>