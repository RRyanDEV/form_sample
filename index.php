<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/scss/main.css">
    <title>Formulário</title>
</head>

<body>
    <div class="boxInit">
        <form action="/components/usuarios.php" method="post">
            <legend><b>Informações Para Contato</b></legend>

            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome">Nome Completo</label>
            </div>

            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="nome">Digite seu Email</label>
                <input type="submit" value="Enviar!">
            </div>
            <legend>Curso:</legend>
            <input type="radio" id="DEPT" name="curso" value="Docência na Educação Profissional e Tecnológica" required>
            <label for="curso">Docência na Educação Profissional e Tecnológica</label>

            <input type="radio" id="GPNTI" name="curso" value="Gestão de Projetos e Negócios em Tecnologia da Informação" required>
            <label for="curso">Gestão de Projetos e Negócios em Tecnologia da Informação</label>



        </form>
    </div>

</html>