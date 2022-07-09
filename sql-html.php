<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado da consulta</title>
</head>
<body>

    <?php

    include "conexao.inc";

    $hostname= $_POST["hostname"];

    $sql = "SELECT * FROM servidores WHERE hostname = $hostname";

    $res = mysqli_query($con, $sql);
    while($vreg=mysqli_fetch_row($res)){
        $hostname = $vreg[1];
        $servicos = $vreg[2];
        $particoes = $vreg[3];
        $dependencia = $vreg[4];
        $hardDisk = $vreg[5];
        $processador = $vreg[6];
        $ram = $vreg[7];
        $sistemaOperacional = $vreg[8];

        echo "'Hostname: $hostname', 'Serviço: $servicos', Partições: $particoes', 'Dependência: $dependencia', 'Hard Disks: $hardDisk', 'Processador: $processador', 'Ram: $ram', 'Sistema Operacional: $sistemaOperacional";
    }



    mysqli_close($con);


    ?>

</body>
</html>
