<?php
include_once('config.php');
session_start();

// if (isset($_POST['submit'])) {
//     $_SESSION['problemacurso']  = (string)$_POST['PBcurso'];
//     $_SESSION['objetivocurso']  = (string)$_POST['OBcurso'];
//     $_SESSION['justcurso'] = (string)$_POST['JTcurso'];
//     $_SESSION['referenciacurso']  = (string)$_POST['RFcurso'];
//     $_SESSION['metodocurso']  = (string)$_POST['EMcurso'];
//     $_SESSION['coletcurso']  = (string)$_POST['CDcurso'];
//     $_SESSION['refblibiocurso']  = (string)$_POST['RBcurso'];
//     $_SESSION['introcurso']  = (string)$_POST['Icurso'];
//     $_SESSION['resumocurso'] = (string)$_POST['Rcurso'];
//     $_SESSION['considcurso'] = (string)$_POST['RCcurso'];
//     $_SESSION['datacurso']  = (string)$_POST['data'];
//     $_SESSION['linkcurso']  = $_POST['LinkCurso'];

//     if (empty($_POST['LinkCurso'])) {
//         $_SESSION['linkcurso']  = " ";
//     } else {
//         $_SESSION['linkcurso'] = (string)$_POST['LinkCurso'];
//     };
// };

// $formnome = $_SESSION['nome'];
// $formemail = $_SESSION['email'];
// $formcurso = $_SESSION['curso'];

// mysqli_query(
//     $conexao,
//     "INSERT INTO alunos(alunos_nome,alunos_email,alunos_curso)
// VALUES ('$formnome', '$formemail', '$formcurso')
// "
// );
// $alunoid = $GLOBALS['conexao']->insert_id;

// function insertpergunta($idaluno, $pergunta, $resposta)
// {
//     mysqli_query(
//         $GLOBALS['conexao'],
//         "INSERT INTO alunos_perguntas_respostas(alunos_id,pergunta,resposta)
//     VALUES ('$idaluno', '$pergunta', '$resposta')
//     "
//     );
// };

$perguntasArray = array('nome:', 'email:', 'curso:', 'Ano que ingressou no curso?', 'O seu trabalho de conclusão de curso é?', 'Descreva seu trabalho de conclusão.', 'Tema Do Trabalho:', 'Se estiver fazendo o TCC com outros alunos, favor incluir o nome, e-mail e whatsapp.', 'Já elaborou o problema de seu trabalho?', 'Já definiu os objetivos?', 'Construiu a justificativa?', 'Preparou o referencial teórico?', 'Elaborou a metodologia?', 'Coletou os dados do estudo e/ou definiu os instrumentos?', 'Preparou as referências bibliográficas?', 'Escreveu a introdução?', 'Preparou o resumo?:', 'Escreveu os resultados e as considerações finais?', 'Qual a previsão de entrega do trabalho para a minha análise final?', 'Disponibilize o link para o drive onde você está criando o seu trabalho.');

$respostasArray = array('Ryan', 'ryaanavantedivo@gmail,com', 'Gestão de Projetos e Negócios em Tecnologia da Informação', 'Artigo', '2022', 'aacd', 'AACDS', '', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', 'Sim', 'Não', '2022-02-08', 'DRIVE');

// $respostaskeys = array_keys($_SESSION);




$formarray = '';





foreach ($perguntasArray as $key => $pergunta) {
    // $sessionkey = $respostaskeys[$key];
    // $sessionvar = $_SESSION[$sessionkey];
    $formarray =  $formarray . '<div><h5>' . $pergunta . '</h5><h5>' . $respostasArray[$key] . '</h5></div>';
    // insertpergunta($alunoid, $pergunta, $sessionvar);
}




$component = '<div class="BoXend">
<div class="BoX">
    <div class="heading">
        <h2>Formulário Enviado com Sucesso.</h2>' . $formarray . '</div></div></div>';

// echo ($component);






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
    <div class="endparent">
        <div class="TitleEnd">
            <h2>Formulário Enviado com Sucesso.</h2>
        </div>
        <div class="tables">
            <div class="tbl">
            <table class="demo">
                <tbody>
                    <tr>
                        <td>&nbsp;Nome</td>
                        <td>&nbsp;Ryan Gomes Marques Romão</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Email</td>
                        <td>&nbsp;ryaanavantedivo@gmail.com</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Curso</td>
                        <td>&nbsp;Gestão de Projetos e Negócios em Tecnologia da Informação</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Ano que ingressou no curso?</td>
                        <td>&nbsp;Artigo</td>
                    </tr>
                    <tr>
                        <td>&nbsp;O seu trabalho de conclusão de curso é?</td>
                        <td>&nbsp;2022</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Descreva seu trabalho de conclusão.</td>
                        <td>&nbsp;aacd</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Tema Do Trabalho:</td>
                        <td>&nbsp;AACDS</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Se estiver fazendo o TCC com outros alunos, favor incluir o nome, e-mail e whatsapp.</td>
                        <td>&nbsp;aksldhfasidfhiaosdf</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Já elaborou o problema de seu trabalho?</td>
                        <td>&nbsp;Sim</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Já definiu os objetivos?</td>
                        <td>&nbsp;Não</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="tbl">
            <table class="demo">
                <tbody>
                    <tr>
                        <td>&nbsp;Construiu a justificativa?</td>
                        <td>&nbsp;Sim</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Preparou o referencial teórico?</td>
                        <td>&nbsp;Não</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Elaborou a metodologia?</td>
                        <td>&nbsp;Sim</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Coletou os dados do estudo e/ou definiu os instrumentos?</td>
                        <td>&nbsp;Não</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Preparou as referências bibliográficas?</td>
                        <td>&nbsp;Sim</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Escreveu a introdução?</td>
                        <td>&nbsp;Não</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Preparou o resumo?:</td>
                        <td>&nbsp;Sim</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Escreveu os resultados e as considerações finais?</td>
                        <td>&nbsp;Não</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Qual a previsão de entrega do trabalho para a minha análise final?</td>
                        <td>&nbsp;2022-02-08</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Disponibilize o link para o drive onde você está criando o seu trabalho.</td>
                        <td>&nbsp;DRIVE</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>

</html>