<!DOCTYPE html>
<link rel="stylesheet" href="css/main2.css">
<!-- Boxicons CDN Link -->
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<?php

session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: ../spl/inscreverse.php');
    exit();
}

$titulo = 'Contato';
include("../spl/views/inicio-html.php") ?>

    <link href="../spl/css/busca.css" rel="stylesheet">
    <link rel="" href="css/main2.css">


    <?php include("../spl/views/header.php") ?>


    <form class="busca" action="sql-html.php" method="post">
        <h1> Digite algo sobre o servidor...</h1>
        <div class="form-group">
            <input type="text" class="form-control" id="hostname" name="hostname">
            <br>

            <input type="submit" class="btn-primary" value="Consultar">


        </div>
    </form>


    <?php include("../spl/views/sidebar.php") ?>
    <?php include("../spl/views/fim-html.php") ?>