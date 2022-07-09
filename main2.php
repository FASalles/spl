<!DOCTYPE html>
    <link rel="stylesheet" href="css/main2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
session_start();
if(!isset($_SESSION['logado'])) {
    header('Location: ../spl/inscreverse.php');
    exit();
}
$titulo = 'Principal';
include("../spl/views/inicio-html.php") ?>

    <?php include("../spl/views/header.php") ?>
    <?php include("../spl/views/sidebar.php") ?>
    <?php include("../spl/views/fim-html.php") ?>




