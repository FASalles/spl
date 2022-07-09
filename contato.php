<?php

session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: ../spl/inscreverse.php');
    exit();
}

$titulo = 'Contato'; include("../spl/views/inicio-html.php") ?>


<?php include("../spl/views/header.php") ?>










<?php include("../spl/views/fim-html.php") ?>