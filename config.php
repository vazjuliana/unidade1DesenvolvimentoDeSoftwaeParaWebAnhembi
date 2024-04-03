<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "formulario-atividade3";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada com sucesso";
}
