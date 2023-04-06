<?php

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

<body>
    <div class="Box">
        <div class="BoxInit">
            <div class="formInit">
                <h1>Informações de Usuário</h1>
                <div class="formUser">
                    <form action="./pages/formulario.php" method="POST">
                        <div class="input">
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputUser" required>
                        </div>
                        <br><br>
                        <div class="input">
                            <input type="text" name="email" id="email" placeholder="Digite seu Email" class="inputUser" required>
                        </div>
                </div>
                <div class="formCurso">
                    <h2>Curso</h2>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="curso" id="DEPT" value="Docência na Educação Profissional e Tecnológica" required>
                            <label class="form-check-label" for="curso">
                                Docência na Educação Profissional e Tecnológica
                            </label>
                        </div>
                    </div>
                    <div class="rg">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="curso" id="GPNTI" value="Gestão de Projetos e Negócios em Tecnologia da Informação" required>
                            <label class="form-check-label" for="curso">
                                Gestão de Projetos e Negócios em Tecnologia da Informação
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>