<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '2530';
$dbName = 'formulario';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo 'ERROOU';
} else {
    echo 'Conexão efetuada com Sucesso';
}
