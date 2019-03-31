<?php 
    //Index
    session_start(); 
    if(!isset($_SESSION['a'])){
        $_SESSION['a'] = 'inicio'; 
    }

    include_once('_header.php');
    include_once('routes.php'); 
    include_once('_footer.php')
?>