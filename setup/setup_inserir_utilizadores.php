<?php 
    // ========================================
    // setup - inserir utilizadores
    // ========================================
    // verificar a sessão
    if(!isset($_SESSION['a'])){
        exit();
    } 
    //inserir o utilizador admin
    $gestor = new cl_gestorBD();
    //limpar os dados dos utilizadores
    $gestor->EXE_NON_QUERY('DELETE FROM utilizadores');
    $gestor->EXE_NON_QUERY('ALTER TABLE utilizadores AUTO_INCREMENT=1');
    $data = new DateTime();
    
    //---------------------------------------------------------
    //utilizador 1 - admin
    //definição de parametros
    $parametros = [
        ':utilizador'       => 'admin',
        ':palavra_passe'    => md5('admin'),
        ':nome'             => 'Administrador',
        ':email'            => 'letycialobatomarketing@gmail.com',
        ':permissoes'       => str_repeat('1', 100),
        ':criado_em'        => $data->format('Y-m-d H:i:s'),
        ':atualizado_em'    => $data->format('Y-m-d H:i:s')
    ];
    //inserir o utilizador
    $gestor->EXE_NON_QUERY(
        'INSERT INTO utilizadores(utilizador, palavra_passe, nome, email, permissoes, criado_em, atualizado_em)
         VALUES(:utilizador, :palavra_passe, :nome, :email, :permissoes, :criado_em, :atualizado_em)',
         $parametros);
    
    
    //utilizador 4 - antonio
    //definição de parametros
    $parametros = [
        ':utilizador'       => 'antonio',
        ':palavra_passe'    => md5('antonio'),
        ':nome'             => 'António Daleo',
        ':email'            => 'antonio.dale@gmail.com',
        ':permissoes'       => '0'.str_repeat('1', 99),
        ':criado_em'        => $data->format('Y-m-d H:i:s'),
        ':atualizado_em'    => $data->format('Y-m-d H:i:s')
    ];
    //inserir o utilizador
    $gestor->EXE_NON_QUERY(
        'INSERT INTO utilizadores(utilizador, palavra_passe, nome, email, permissoes, criado_em, atualizado_em)
         VALUES(:utilizador, :palavra_passe, :nome, :email, :permissoes, :criado_em, :atualizado_em)',
         $parametros);
        
?>

<div class="alert alert-success text-center">Utilizadores inseridos com sucesso.</div>