<?php

require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ";

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){
            header('Location: principal.php');

            session_start();
            $_SESSION['logado'] = true;

        } else {
            header('Location: index.php?erro=1');
        }
    } else {
        "Erro na execução da consulta, favor entrar em contato com o administrador do site.";
    }
?>
