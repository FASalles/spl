<link href="css/inscreverse.css" rel="stylesheet">


<?php $titulo = 'Contato'; include("../spl/views/inicio-html.php") ?>

<?php include("../spl/views/header.php") ?>

<div id="form">
    <form method="post" action="registra_usuario.php">
        <h2 class="title">Inscrever-se</h2>

        <label for="username">Nome</label>
        <div class="input">
            <i class="fa-solid fa-user"></i>
            <input id="username" name="username" placeholder="nome de usuario" type="text" required>
        </div>

        <label for="email">E-mail</label>
        <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <input id="email" name="email" placeholder="email@domínio.com" type="email" required>
        </div>

        <label for="senha">Senha</label>
        <div class="input">
            <i class="fa-solid fa-envelope"></i>
            <input id="senha" name="senha" placeholder="senha" type="password" required>
        </div>

        <label for="telefone">Telefone</label>
        <div class="input">
            <i class="fa-solid fa-phone"></i>
            <input id="telefone" name="telefone" placeholder="(xx)-xxxxxxxx" type="text" required>
        </div>

        <div id="btn">
            <button type="submit">Inscrever-se</button>
        </div>
    </form>

</div>



<?php include("../spl/views/fim-html.php") ?>
<script src="https://kit.fontawesome.com/1122c695e1.js" crossorigin="anonymous"></script>
