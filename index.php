<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Servidores e serviços ALERJ</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                background: rgb(219, 226, 226);
            }
            .row{
                background: white;
                border-radius: 30px;
                box-shadow: 12px 12px 22px grey;
            }
            img{
                border-top-left-radius: 30px;
                border-bottom-left-radius: 30px;
            }
            .btn1 {
                border:none;
                outline: none;
                height: 50px;
                width: 100%;
                background-color: black;
                color: white;
                border-radius: 4px;
                font-weight: bold;
            }
            .btn1:hover {
                background: white;
                border: 1px solid;
                color: black;
            }
        </style>
    </head>
    <body>




    <section class="form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src ="../spl/img/cristo.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3">ALERJ - Portal de serviços</h1>
                        <h4>Entre com sua conta</h4>
                        <form method="post" action="validar-acesso.php" id="formLogin">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" placeholder="Seu usuário" class="form-control my-3 p-4" id="campo_usuario" name="usuario">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" placeholder="********" class="form-control red" id="campo_senha" name="senha" class="form-control p-4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="buttom" class="btn1 mt-3 mb-5" id="btn_login">Entrar</button>
                                </div>
                            </div>
                            <a href="#"> Esqueceu a senha?</a>
                            <p>Não tem uma conta? <a href="http://localhost/spl/inscreverse.php">Registre-se aqui</a> </p>
                            <p>Entre como visitante  <a href="#">aqui</a> </p>
                        </form>

                        <?php
                        if($erro == 1){
                            echo '<font color="FF0000">Usuário e ou senha inválido(s)</font>';
                        }


                        ?>


                    </div>
                </div>
            </div>
        </section>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
