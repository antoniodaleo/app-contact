<?php 
    //Index
    session_start(); 
    if(!isset($_SESSION['a'])){
        $_SESSION['a'] = 'inicio'; 
    }

    // Inclui funcoes necessarias do sistemain

    include_once('inc/funcoes.php'); 
    include_once('inc/gestorBD.php'); 
    include_once('_header.php');
    include_once('routes.php'); 
    include_once('_footer.php')
?>