<!--Gestao de fluxos da paginas -->
<?php 
    // Verificar a sessao 
    if(!isset($_SESSION['a'])){
        exit(); 
    }   
    // Se la var non e´ definita , allora mi attribuisci inizio 
    $a = 'inicio'; 

    //Se é definita me la prendi
    if(isset($_GET['a'])){
        $a = $_GET['a']; 

    }

    // Verificar o login

    //funcoes::DestroiSessao(); 

    if(!funcoes::VerificarLogin()){
        // Se non c é nessuna id allora mi mostri il login
        $a = 'login'; 
    }



    //Routes-===============================

    switch($a){
        //Login 
        case 'login'; include_once('users/login.php'); break; 


        // Apresentar a pagina inicial
        case 'inicio';         include_once('inicio.php');  break;  
        // Apresentar a pagina about
        case 'about';           include_once('about.php'); break; 
        // Abre o menu do setup
        case 'setup';           include_once('setup/setup.php'); break;  


        //=========================
        // Crear o Banco de dados
        case 'setup_criar_bd';       include_once('setup/setup_criar_bd.php'); break;  
        case 'setup_inserir_utilizadores'; include_once('setup/setup_inserir_utilizadores.php'); break;

    }



?>

