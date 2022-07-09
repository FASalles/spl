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

$titulo = 'Procedimentos'; include("../spl/views/inicio-html.php") ?>

<link href="../spl/css/procedimentos.css" rel="stylesheet">
<link rel="" href="css/main2.css">

<section class="container" id="cards">

    <h1>Procedimentos </h1>

    <div class="row justify-content-center">
        <article class="card-largura card col-12 col-sm-3 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/bd.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Banco de dados</h5>
                <p class="card-text">Procedimento 1 a ser acessado.</p>
                <p class="card-text">Procedimento 2 a ser acessado.</p>
                <p class="card-text">Procedimento 3 a ser acessado.</p>
                <a href="#" class="btn btn-primary">Ver mais</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/ad.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Active directory</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/notes.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Lotus notes</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/office365.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Office 365</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/switch.jpeg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">switches</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/av.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Antivirus</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/fw.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Firewall</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/sistemas.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Sistemas ALERJ</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>

        <article class="card-largura card col-12 col-sm-6 col-md-4 p-0 m-4" style="width: 18rem;">
            <img class="card-img-top card-posicao-imagem" src="img/outros.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h5 class="card-title">Outros</h5>
                <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </article>
    </div>
</section>


<?php include("../spl/views/header.php") ?>
<?php include("../spl/views/sidebar.php") ?>
<?php include("../spl/views/fim-html.php") ?>

<script src="https://kit.fontawesome.com/1122c695e1.js" crossorigin="anonymous"></script>



