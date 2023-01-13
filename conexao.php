<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //echo "conexão com a banco de dados conectado com sucesso!";//
}
    catch(PDOException $err){
        echo "Erro: conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage
        ();
    }
