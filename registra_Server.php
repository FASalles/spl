<?php

    require_once('db.s.class.php');

    $hostname = $_POST['hostname'];
    $servicos = $_POST['servicos'];
    $particoes = $_POST['particoes'];
    $dependencia = $_POST['dependencia'];
    $hardDisk = $_POST['hardDisk'];
    $processador = $_POST['processador'];
    $ram = $_POST['ram'];
    $sistemaOperacional = $_POST['sistemaOperacional'];
    $observacao = $_POST['observacao'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "insert into servidores(hostname, servicos, particoes, dependencia, hardDisk, processador, ram, sistemaOperacional, observacao) values('$hostname', '$servicos', '$particoes', '$dependencia', '$hardDisk', '$processador', '$ram', '$sistemaOperacional', '$observacao')";

    if (mysqli_query($link, $sql)){;

    echo 'servidor registrado com sucesso';
    } else {
        echo 'Erro ao registrar o servidor. ';
    }




?>
