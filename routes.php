<!--Gestao de fluxos da paginas -->
<?php 
    // Verificar a sessao 
    if(!isset($_SESSION['a'])){
        exit(); 
    }   

    $a = 'inicio'; 

    if(isset($_GET['a'])){
        $a = $_GET['a']; 

    }

    //Routes-===============================

    switch($a){
        // Apresentar a pagina inicial
        case 'inicio';         include_once('inicio.php');  break;  
        // Apresentar a pagina about
        case 'about';           include_once('about.php'); break; 
        // Abre o menu do setup
        case 'setup';           include_once('setup/setup.php'); break;  

        //=========================
        // Crear o Banco de dados
        case 'create_db';       include_once('setup/setup.php'); break;  

    }



?>

