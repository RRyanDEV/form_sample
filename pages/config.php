<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '2530';
$dbName = 'form';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

global $conexao;
// if ($conexao->connect_errno) {
//     echo 'ERROOU';
// } else {
//     echo 'Conexão efetuada com Sucesso';
// }