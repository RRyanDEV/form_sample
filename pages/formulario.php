<?php
// if (isset($_POST['submit'])) {
//     echo ($_POST['nome']);
//     echo ('<br>');
//     echo ($_POST['email']);
//     echo ('<br>');
//     echo ($_POST['curso']);
// };

include_once('config.php');

$nome = (string)$_POST['nome'];
$email = (string)$_POST['email'];
$curso = (string)$_POST['curso'];
// (string)$var, serve para converter um valor dentro da variável para String, para ser enviado pro database.

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,curso) VALUES ('$nome', '$email', '$curso')");
$sqlresposta = mysqli_query($conexao, "SELECT id FROM usuarios WHERE nome='$nome'");
$dadosrecebidos = mysqli_fetch_array($sqlresposta);
$userid = (reset($dadosrecebidos));

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="/assets/form-icon.png">
    <link rel="stylesheet" href="/scss/main.css">
    <title>Atualização de Dados</title>
</head>

<body>
    <form action="/pages/cform.php" method="POST">
        <div class="BoXForm">
            <div class="BoX">
                <div class="heading">
                    <h2>Atualização de dados de orientandos de Trabalho de Conclusão de Curso - Professor Ricardo E. Kneipp - Cursos de Pós-Graduação do IFRJ CEPF</h2>
                </div>
                <div class="desc">
                    <p>O objetivo deste formulário é que você meu orientando de Trabalho de Conclusão de Curso, atualize os seus dados e o status de desenvolvimento do seu trabalho.</p>
                </div>
            </div>
            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Ano que ingressou no curso? *</h4>
                    <div class="RadioGroup">
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="AnoCurso" required>
                                <label class="form-check-label" for="Acurso">
                                    2020
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="AnoCurso" required>
                                <label class="form-check-label" for="Acurso">
                                    2021
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="AnoCurso" required>
                                <label class="form-check-label" for="Acurso">
                                    2022
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="AnoCurso" required>
                                <label class="form-check-label" for="Acurso">
                                    2023
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="BoXcCurso">
                <h4>O seu trabalho de conclusão de curso é: *</h4>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="TrabConc" required>
                            <label class="form-check-label" for="TrabConc">
                                Monografia
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="TrabConc" required>
                            <label class="form-check-label" for="TrabConc">
                                Artigo
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="TrabConc" required>
                            <label class="form-check-label" for="TrabConc">
                                Produto
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="input">
                            <input type="text" name="outroTB" id="outroTB" placeholder="Outro" class="inputUser">
                        </div>
                    </div>
                </div>
            </div>
            <div class="BoXtema">
                <h4>Tema Do Trabalho *</h4>
                <div class="input">
                    <input type="text" name="TemaTrab" id="TemaTrab" placeholder="Sua Resposta" required>
                </div>
            </div>
            <div class="BoXtcc">
                <h4>Se estiver fazendo o TCC com outros alunos, favor incluir o nome, e-mail e whatsapp. Caso contrário deixe esta pergunta em branco.</h4>
                <div class="input">
                    <input type="text" name="TemaTrab" id="TemaTrab" placeholder="Sua Resposta">
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="btnf">
            <input class="NextF" type="submit" name="submit" value="Próxima">
        </div>
    </form>
</body>

</html>