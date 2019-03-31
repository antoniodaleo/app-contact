<?php 
    if(!isset($_SESSION['a'])){
        exit(); 
    }

?>


<div class="container-fluid pad-20">
    <div class="text-center">
        <a href="?a=create_db" class="btn btn-primary">Create Db</a>
        <hr>
        <a href="?a=inicio" class="btn btn-secondary">Voltar</a>

    </div>
</div>