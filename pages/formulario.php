<?php
// if (isset($_POST['submit'])) {
//     echo ($_POST['nome']);
//     echo ('<br>');
//     echo ($_POST['email']);
//     echo ('<br>');
//     echo ($_POST['curso']);
// };

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];

// $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,curso) VALUES ($nome,$email,$curso)");

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="./assets/form-icon.png">
    <link rel="stylesheet" href="./scss/main.css">
    <title>Formulário</title>
</head>
<style>
    body {
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    }
</style>

<body>

</body>

</html>