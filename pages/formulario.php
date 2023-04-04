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
    <link rel="website icon" href="/assets/form-icon.png">
    <link rel="stylesheet" href="/scss/main.css">
    <title>Formulário</title>
</head>

<body>
    <div class="BoX">
        <div class="heading">
            <h2>Atualização de dados de orientandos de Trabalho de Conclusão de Curso - Professor Ricardo E. Kneipp - Cursos de Pós-Graduação do IFRJ CEPF</h2>
        </div>
        <div class="desc">
            <p>O objetivo deste formulário é que você meu orientando de Trabalho de Conclusão de Curso, atualize os seus dados e o status de desenvolvimento do seu trabalho.</p>
        </div>
    </div>
</body>

</html>