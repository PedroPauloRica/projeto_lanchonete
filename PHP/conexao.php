<?php

    $host = "localhost";
    $porta = "3306";
    $banco = "adega";

    $user = "root";
    $pass = "";

    try{
        //se os dados tiverem corretos vai executar

        $dns = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4";

        $pdo = new PDO($dns,$user,$pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


    } catch(PDOException $erro){
        //Mostrar o erro e vai tratar

        echo("Erro de Conexão:".$erro->getMessage());
        

    }
?>