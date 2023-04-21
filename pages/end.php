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

    $_SESSION['datacurso'] = date('d/m/Y',strtotime($_SESSION['datacurso']));

    $_SESSION['linkcurso']  = $_POST['LinkCurso'];

    if (empty($_POST['LinkCurso'])) {
        $_SESSION['linkcurso']  = " ";
    } else {
        $_SESSION['linkcurso'] = (string)$_POST['LinkCurso'];
    };
};


$perguntasArray = array('nome', 'email', 'curso', 'Ano que ingressou no curso?', 'O seu trabalho de conclusão de curso é?', 'Descreva seu trabalho de conclusão', 'Tema Do Trabalho', 'Se estiver fazendo o TCC com outros alunos, favor incluir o nome, e-mail e whatsapp', 'Já elaborou o problema de seu trabalho?', 'Já definiu os objetivos?', 'Construiu a justificativa?', 'Preparou o referencial teórico?', 'Elaborou a metodologia?', 'Coletou os dados do estudo e/ou definiu os instrumentos?', 'Preparou as referências bibliográficas?', 'Escreveu a introdução?', 'Preparou o resumo?', 'Escreveu os resultados e as considerações finais?', 'Qual a previsão de entrega do trabalho para a minha análise final?', 'Disponibilize o link para o drive onde você está criando o seu trabalho');

global $perguntasArray;



/* 
Utilizado apenas para simular preenchimento de respostas.

// $respostasArray = array('Ryan', 'ryaanavantedivo@gmail,com', 'Gestão de Projetos e Negócios em Tecnologia da Informação', 'Artigo', '2022', 'aacd', 'AACDS', '', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', '2022-02-08', 'DRIVE');

*/




$formarray = '';

/* 
Método para testar e receber perguntas e respostas preenchidas de dentro do banco de dados baseado no id do aluno.

$alunoid = 1;
function consultarespostasbyid($id)
{
    $respostasbyid = mysqli_query(
        $GLOBALS['conexao'],
        "SELECT pergunta,resposta FROM alunos_perguntas_respostas WHERE alunos_id=$id"
    );
    $respostasbyid = (mysqli_fetch_all($respostasbyid));
    return $respostasbyid;
};

$perguntas_respostas = consultarespostasbyid($alunoid);

foreach ($perguntas_respostas as $key => $item) {
    $pergunta = $item[0];
    $resposta = $item[1];
    if ($key == 10) {
        $formarray = $formarray . '</tbody></table></div><div class="tbl"><table class="demo"><tbody>';
    }
    $formarray =  $formarray . '<tr class="label"><td class="label">' . $pergunta . '</td><td>' . $resposta . '</td></tr>';
}; 
*/


$respostaskeys = array_keys($_SESSION);
foreach ($GLOBALS['perguntasArray'] as $key => $pergunta) {
    $sessionkey = $respostaskeys[$key];
    $sessionvar = $_SESSION[$sessionkey];
    if ($key == 10) {
        $formarray = $formarray . '</tbody></table></div><div class="tbl"><table class="demo"><tbody>';
    }
    $formarray =  $formarray . '<tr class="label"><td class="label">' . $pergunta . '</td><td>' . $sessionvar . '</td></tr>';
}

$component = '<div class="endparent">
<div class="TitleEnd">
        <h2>Confirma o envio dos dados abaixo?</h2><div><a href="/index.php">
        <button class="bend">Cancelar</button>
    </a><form method="post">
    <input type="submit" name="Enviar"
            class="bend" value="Enviar" />
</form></div>' . '<div class="tables"><div class="tbl"><table class="demo"><tbody>' . $formarray . '</tbody></table></div></div></div>';


if (array_key_exists('Enviar', $_POST)) {
    submitform();
} else {
    echo ($component);
}
function submitform()
{
    $formnome = $_SESSION['nome'];
    $formemail = $_SESSION['email'];
    $formcurso = $_SESSION['curso'];

    mysqli_query(
        $GLOBALS['conexao'],
        "INSERT INTO alunos(alunos_nome,alunos_email,alunos_curso)
    VALUES ('$formnome', '$formemail', '$formcurso')
    "
    );

    $alunoid = $GLOBALS['conexao']->insert_id;
    $respostaskeys = array_keys($_SESSION);
    foreach ($GLOBALS['perguntasArray'] as $key => $pergunta) {
        $sessionkey = $respostaskeys[$key];
        $sessionvar = $_SESSION[$sessionkey];
        mysqli_query(
            $GLOBALS['conexao'],
            "INSERT INTO alunos_perguntas_respostas(alunos_id,pergunta,resposta)
                VALUES ('$alunoid', '$pergunta', '$sessionvar')
                "
        );
    }

    $messagecomponent = '<div class="endparent">
   <div class="TitleEnd">
           <h2>Formulário enviado com sucesso!</h2><div></div>';
    echo ($messagecomponent);
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
    <!-- $component -->
</body>

</html>