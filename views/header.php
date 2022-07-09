<?php if(isset($_SESSION['logado'])): ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <img src="../spl/img/alerj-logo.png" width="120px" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../spl/index.php">Home     |<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../spl/updateServer.php">Update Server    |</a>
                <a class="nav-item nav-link" href="../spl/busca.php">Busca Server    |</a>
                <a class="nav-item nav-link" href="../spl/procedimentos.php">Procedimentos    |</a>
                <a class="nav-item nav-link" data-toggle="modal" data-target="#modal-contato" href="../spl/contato.php">Contato    |</a>
                <a class="nav-item nav-link" href="http://localhost/phpmyadmin/" target="_blank">Banco de Dados      |</a>
                <a class="nav-item nav-link" href="../spl/Controller/DestruirSessao.php">Sair</a>
            </div>
        </div>
    </nav>

<?php elseif(!isset($_SESSION['logado'])): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <img src="../spl/img/alerj-logo.png" width="120px" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../spl/index.php">Home     |<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" data-toggle="modal" data-target="#modal-contato" href="../spl/contato.php">Contato    </a>

            </div>
        </div>
    </nav>

<?php endif; ?>


    <!-- Modal -->
    <div class="modal fade" id="modal-contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entre em contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nome completo</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço de e-mail</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deixe seu comantário</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Insira aqui seu comentário" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>