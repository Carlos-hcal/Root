<?php

    $dbHost = 'root.local';
    $dbUsername = 'root';
    $dbPassword = '979899';
    $dbName = 'root_com_br';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    var_dump($conexao);

    if($conexao->connect_errno)
    {
        echo "Erro, não foi possível acessar o banco de dados!";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>