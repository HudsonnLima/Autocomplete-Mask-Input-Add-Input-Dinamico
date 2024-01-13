<?php

$username = "root";
$password = "";

try{
    $pdo = new PDO('mysql:host=localhost;dbname=autocomplete', $username, $password);
    //echo "Conexão com banco de dados realizado com sucesso!";
}catch(PDOException $e){
    echo "Problemas ao tentar se conectar com o banco de dados!";
}
?>