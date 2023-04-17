<?php
include_once('config.php');
session_start();




if (isset($_POST['submit'])) {
    $_SESSION['TrabConc'] = $_POST['TrabConc'];
    $_SESSION['AnoCurso'] = $_POST['AnoCurso'];

    $_SESSION['temaTrabalho'] = $_POST['TemaTrab'];

    if ($_SESSION['TrabConc'] == false) {
        $_SESSION['TrabConc'] = "Outro";
    };

    if (empty($_POST['outrosTcc'])) {
        $_SESSION['outrosTcc']  = " ";
    } else {
        $_SESSION['outrosTcc']  = $_POST['outrosTcc'];
    };

    if (empty($_POST['outroTB'])) {
        $_SESSION['outrotb']  = " ";
    } else {
        $_SESSION['outrotb']  = $_POST['outroTB'];
    };
};
// if (isset($_POST['submit'])) {
//     echo ($AnoCurso);
//     echo ('<br>');
//     echo ($TrabConc);
//     echo ('<br>');
//     echo ($outrotb);
//     echo ('<br>');
//     echo ($TemaTrabalho);
//     echo ('<br>');
//     echo ($outrosTcc);
// };

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
    <form action="/pages/end.php" method="POST">
        <div class="BoXForm">
            <div class="BoX">
                <div class="heading">
                    <h2>Status de Desenvolvimento</h2>
                </div>
                <div class="desc">
                    <p>Aqui você responderá qual (is) fases do TCC você já concluiu.</p>
                </div>
            </div>
            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Já elaborou o problema de seu trabalho? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PBcurso" id="PBcurso" value="Sim" required>
                            <label class="form-check-label" for="PBcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="PBcurso" id="PBcurso" value="Não" required>
                            <label class="form-check-label" for="PBcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Já definiu os objetivos? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="OBcurso" id="OBcurso" value="Sim" required>
                            <label class="form-check-label" for="OBcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="OBcurso" id="OBcurso" value="Não" required>
                            <label class="form-check-label" for="OBcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Construiu a justificativa? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="JTcurso" id="JTcurso" value="Sim" required>
                            <label class="form-check-label" for="JTcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="JTcurso" id="JTcurso" value="Não" required>
                            <label class="form-check-label" for="JTcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Preparou o referencial teórico? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RFcurso" id="RFcurso" value="Sim" required>
                            <label class="form-check-label" for="RFcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RFcurso" id="RFcurso" value="Não" required>
                            <label class="form-check-label" for="RFcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Elaborou a metodologia? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="EMcurso" id="EMcurso" value="Sim" required>
                            <label class="form-check-label" for="EMcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="EMcurso" id="EMcurso" value="Não" required>
                            <label class="form-check-label" for="EMcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Coletou os dados do estudo e/ou definiu os instrumentos? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="CDcurso" id="CDcurso" value="Sim" required>
                            <label class="form-check-label" for="CDcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="CDcurso" id="CDcurso" value="Não" required>
                            <label class="form-check-label" for="CDcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Preparou as referências bibliográficas? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RBcurso" id="RBcurso" value="Sim" required>
                            <label class="form-check-label" for="RBcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RBcurso" id="RBcurso" value="Não" required>
                            <label class="form-check-label" for="RBcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Escreveu a introdução? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Icurso" id="Icurso" value="Sim" required>
                            <label class="form-check-label" for="Icurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Icurso" id="Icurso" value="Não" required>
                            <label class="form-check-label" for="Icurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Preparou o resumo? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Rcurso" id="Rcurso" value="Sim" required>
                            <label class="form-check-label" for="Rcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Rcurso" id="Rcurso" value="Não" required>
                            <label class="form-check-label" for="Rcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Escreveu os resultados e as considerações finais? *</h4>
                </div>
                <div class="RadioGroup">
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RCcurso" id="RCcurso" value="Sim" required>
                            <label class="form-check-label" for="RCcurso">
                                Sim
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="RCcurso" id="RCcurso" value="Não" required>
                            <label class="form-check-label" for="RCcurso">
                                Não
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Qual a previsão de entrega do trabalho para a minha análise final? Lembre-se que para a defesa, após a minha validação, iremos encaminhar com no mínimo 15 dias de antecedência para os membros da banca. *</h4>
                </div>
                <div class="datax">
                    Data
                </div>
                <input class="date" type="date" name="data" id="data" value="data" required>
            </div>
            <div class="BoXaCurso">
                <div class="Infor">
                    <h4>Peço por favor que disponibilize o link para o drive onde você está criando o seu trabalho.</h4>
                </div>
                <div class="datax">
                    Sugestão: Google Drive.
                </div>
                <div class="rg">
                    <div class="input">
                        <input type="text" name="LinkCurso" id="LinkCurso" placeholder="Sua Resposta" class="inputUser">
                    </div>
                </div>
            </div>
            <div class="BoXaCurso">
                <div class="Infor">
                    <p>Estamos juntos. Uma sugestão é dividir o seu trabalho em etapas. Verifique sempre o seu cronograma. Precisou? Faça contato. (24) 981140670. Vamos juntos até a defesa de seu TCC.</p>
                </div>
            </div>
        </div>
        <div class="btend">
            <input class="bend" type="submit" name="submit" value="Enviar">
        </div>
    </form>
</body>

</html>