<?php 
    if(!isset($_SESSION['a'])){
        exit(); 
    }

    //Verifica se esta def na URL
    $a = ''; 
    if(isset($_GET['a']))
    {
        $a = $_GET['a']; 
    }

    // Mi crei
    switch($a){
        case 'setup_criar_bd': 
            // executa os procedimentos para criacao de banco
            include('setup/setup_criar_bd.php'); 
        break;

        case 'setup_inserir_utilizadores': 
         // Inserir uti
            include('setup/setup_inserir_utilizadores.php');
        break; 
    }

?>


<div class="container-fluid pad-20">
    <div class="text-center">
        <p><a href="?a=setup_criar_bd" class="btn btn-primary">Create Db</a></p>
        <p><a href="?a=setup_inserir_utilizadores" class="btn btn-primary">Inserir Usuario</a></p>
        <hr>
        <a href="?a=inicio" class="btn btn-secondary btn-size-150">Voltar</a>

    </div>
</div>