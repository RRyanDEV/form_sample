<?php
include_once('config.php');
session_start();
// if (isset($_POST['submit'])) {
//     echo ($_POST['nome']);
//     echo ('<br>');
//     echo ($_POST['email']);
//     echo ('<br>');
//     echo ($_POST['curso']);
// };
if (isset($_POST['submit'])) {

    $postemail = (string)$_POST['email'];
    $result = mysqli_query(
        $GLOBALS['conexao'],
        "SELECT alunos_email FROM alunos WHERE alunos_email='$postemail'"
    );
    $result = (mysqli_fetch_array($result));
    if (empty($result)) {
        $_SESSION['nome'] = (string)$_POST['nome'];
        $_SESSION['email'] = $postemail;
        $_SESSION['curso'] = (string)$_POST['curso'];
    } else {
        echo ("<script>alert('Usuário já preencheu esse formulário!')</script>");
        echo ("<script>location.href='../index.php'</script>");
    };
};
// (string)$var, serve para converter um valor dentro da variável para String, para ser enviado pro database.
// $_SESSION, faz com que a variavel fique disponivel até a ultima página, sem zera-la.


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
    <form action="/pages/cform.php" method="POST" onsubmit="return validateoutroTB(this)">
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
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="2020" required>
                                <label class="form-check-label" for="AnoCurso">
                                    2020
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="2021" required>
                                <label class="form-check-label" for="AnoCurso">
                                    2021
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="2022" required>
                                <label class="form-check-label" for="AnoCurso">
                                    2022
                                </label>
                            </div>
                        </div>
                        <div class="rg">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="AnoCurso" id="AC" value="2023" required>
                                <label class="form-check-label" for="AnoCurso">
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
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="Monografia" required>
                            <label class="form-check-label" for="TrabConc">
                                Monografia
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="Artigo" required>
                            <label class="form-check-label" for="TrabConc">
                                Artigo
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="Produto" required>
                            <label class="form-check-label" for="TrabConc">
                                Produto
                            </label>
                        </div>
                    </div>
                    <div class="rg__flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TrabConc" id="TB" value="Outro" required>
                            <label class="form-check-label" for="TrabConc">
                                Outro:
                            </label>
                        </div>
                        <div class="input" id="tbinput">
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
                    <input type="text" name="outrosTcc" id="outrosTcc" placeholder="Sua Resposta">
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="btnf">
            <input class="NextF" type="submit" name="submit" value="Próxima">
        </div>
    </form>
    <script>
        document.getElementById("tbinput").addEventListener("input", function(event) {
            document.getElementById("tbinput").style.borderStyle = "none";
        });

        function validateoutroTB(form) {
            let trabconc = form.TrabConc.value;
            if ((trabconc == "Outro") && ((form.outroTB.value).toString().length < 3)) {
                let el = document.getElementById("tbinput");
                el.style.borderRadius = "12px";
                el.style.borderStyle = "solid";
                el.style.borderColor = "red";
                window.alert("Preencha corretamente os campos em vermelho.");
                return false;
            } else {
                return true;
            };
        };
    </script>
</body>

</html>