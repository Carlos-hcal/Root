<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '979899';
    $dbName = 'root_com_br';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>