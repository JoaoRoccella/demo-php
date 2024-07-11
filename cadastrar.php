<?php

    require_once 'Conexao.class.php';

    $conexao = new Conexao();
    
    $id = (int)$_POST['id'] ?? 0;
    
    if ($id == 0) {
        header('Location: index.php');
        exit;
    }

    $nomeQuery = $conexao->consulta("SELECT nome FROM usuario WHERE id_usuario = {$id}");
    
    $nomeResult = $nomeQuery->fetch(PDO::FETCH_OBJ);
    $nome = $nomeResult->nome;
    
    header('Location: index.php?nome=' . $nome);
?>