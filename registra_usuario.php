<?php

    require_once('db.class.php');

    $usuario = $_POST['username'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $telefone = $_POST['telefone'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "insert into usuario(usuario, email, senha, telefone) values('$usuario', '$email', '$senha', $telefone)";

    if(mysqli_query($link, $sql)){
        echo 'Usuário registrado com sucesso';

    } else {
        echo 'Erro ao registrar o usuário. ';
    }
echo "<script type='text/javascript'>
window.alert('O usuário foi registrado com sucesso');
window.location=\"http://localhost/spl/index.php\";
</script>";

    //header('Location: ../spl/index.php');

    ?>



