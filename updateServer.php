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

$titulo = 'Update Server'; include("../spl/views/inicio-html.php") ?>


<?php include("../spl/views/header.php") ?>

    <div class="container">

        <div class="page-header">
            <h1>Inserção ou alteração de servidor</h1>
        </div>



        <form action="registra_Server.php" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <form>
                        <div class="form-group">
                            <label for="hostname">Hostname</label>
                            <input type="text" class="form-control" id="hostname" name="hostname">
                        </div>

                        <div class="form-group">
                            <label for="servicos">Serviços</label>
                            <input type="text" class="form-control" id="servicos" name="servicos">
                        </div>

                        <div class="form-group">
                            <label for="particoes">Partições</label>
                            <input type="text" class="form-control" id="particoes" name="particoes">
                        </div>

                        <div class="form-group">
                            <label for="dependencia">Dependência</label>
                            <input type="text" class="form-control" id="dependencia" name="dependencia">
                        </div>

                        <div class="form-group">
                            <label for="hardDisk">Hard Disk</label>
                            <input type="text" class="form-control" id="hardDisk" name="hardDisk">
                        </div>

                        <div class="checkbox">
                            <p>A máquina é um servidor virtual?</p>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="opcoes"> Sim
                            </label>

                            <label>
                                <input type="radio" name="opcoes"> Não
                            </label>
                        </div>
                    </form>

                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="processador">Processador</label>
                        <input type="text" class="form-control" id="processador" name="processador">
                    </div>

                    <div class="form-group">
                        <label for="ram">Ram</label>
                        <input type="text" class="form-control" id="ram" name="ram">
                    </div>

                    <div class="form-group">
                        <label for="sistemaOperacional">Sistema Operacional</label>
                        <input type="text" class="form-control" id="sistemaOperacional" name="sistemaOperacional">
                    </div>

                    <div class="form-group">
                        <label for="observacao">observacao</label>
                        <input type="text" class="form-control" id="observacao" name="observacao">
                    </div>

                    <button type="submit" class="btn btn-primary" form-control">Cadastrar</button>

                </div>
            </div>
        </form>

    </div>

<?php include("../spl/views/sidebar.php") ?>
<?php include("../spl/views/fim-html.php") ?>