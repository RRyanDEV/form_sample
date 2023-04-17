<?php
include_once('config.php');
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['problemacurso']  = (string)$_POST['PBcurso'];
    $_SESSION['objetivocurso']  = (string)$_POST['OBcurso'];
    $_SESSION['justcurso'] = (string)$_POST['JTcurso'];
    $_SESSION['referenciacurso']  = (string)$_POST['RFcurso'];
    $_SESSION['metodocurso']  = (string)$_POST['EMcurso'];
    $_SESSION['coletcurso']  = (string)$_POST['CDcurso'];
    $_SESSION['refblibiocurso']  = (string)$_POST['RBcurso'];
    $_SESSION['introcurso']  = (string)$_POST['Icurso'];
    $_SESSION['resumocurso'] = (string)$_POST['Rcurso'];
    $_SESSION['considcurso'] = (string)$_POST['RCcurso'];
    $_SESSION['datacurso']  = (string)$_POST['data'];
    $_SESSION['linkcurso']  = $_POST['LinkCurso'];

    if (empty($_POST['LinkCurso'])) {
        $_SESSION['linkcurso']  = " ";
    } else {
        $_SESSION['linkcurso'] = (string)$_POST['LinkCurso'];
    };
};

function validarpergunta($desc)
{
    $desc = (string)$desc;
    $result = mysqli_query(
        $GLOBALS['conexao'],
        "SELECT id FROM perguntas WHERE perguntas_desc='$desc'"
    );
    $result = (mysqli_fetch_array($result));
    if (is_null($result)) {
        mysqli_query(
            $GLOBALS['conexao'],
            "INSERT INTO perguntas(perguntas_desc) VALUES('$desc')
            "
        );
        $result = $GLOBALS['conexao']->insert_id;
    } else {
        $result = reset($result);
    };
    echo ($result);
    return $result;
};


$formnome = $_SESSION['nome'];
$formemail = $_SESSION['email'];
$formcurso = $_SESSION['curso'];

mysqli_query(
    $conexao,
    "INSERT INTO alunos(alunos_nome,alunos_email,alunos_curso)
VALUES ('$formnome', '$formemail', '$formcurso')
"
);
$alunoid = $GLOBALS['conexao']->insert_id;

function insertpergunta($idaluno, $pergunta, $resposta)
{
    mysqli_query(
        $GLOBALS['conexao'],
        "INSERT INTO alunos_perguntas_respostas(alunos_id,pergunta,resposta)
    VALUES ('$idaluno', '$pergunta', '$resposta')
    "
    );
};

$perguntasArray = array('nome:', 'email:', 'curso:', 'Ano que ingressou no curso?', 'O seu trabalho de conclusão de curso é?', 'Descreva seu trabalho de conclusão.', 'Tema Do Trabalho:', 'Se estiver fazendo o TCC com outros alunos, favor incluir o nome, e-mail e whatsapp.', 'Já elaborou o problema de seu trabalho?', 'Já definiu os objetivos?', 'Construiu a justificativa?', 'Preparou o referencial teórico?', 'Elaborou a metodologia?', 'Coletou os dados do estudo e/ou definiu os instrumentos?', 'Preparou as referências bibliográficas?', 'Escreveu a introdução?', 'Preparou o resumo?:', 'Escreveu os resultados e as considerações finais?', 'Qual a previsão de entrega do trabalho para a minha análise final?', 'Disponibilize o link para o drive onde você está criando o seu trabalho.');

$respostaskeys = array_keys($_SESSION);

foreach ($perguntasArray as $key => $pergunta) {
    $sessionkey = $respostaskeys[$key];
    $sessionvar = $_SESSION[$sessionkey];
    insertpergunta($alunoid, $pergunta, $sessionvar);
}
mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="/assets/form-icon.png">
    <link rel="stylesheet" href="/scss/main.css">
    <title>Final</title>
</head>

<body>
    <div class="BoXend">
        <div class="BoX">
            <div class="heading">
                <h2>Formulário Enviado com Sucesso.</h2>
            </div>
        </div>
    </div>
</body>

</html>