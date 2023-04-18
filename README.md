<h1 align="center">Desenvolvimento de um Formulário</h1>
<p align=center><i align="center">Repositório contendo o conteúdo referente a criação de um formulário em PHP com integração ao banco de dados</i></p>

<div align="center">

<a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML">
<img alt="HTML" src="https://img.shields.io/badge/HTML-E34F26.svg?logo=html5&logoColor=white">
</a>
<a href="https://www.php.net">
<img alt="PHP" src="https://img.shields.io/badge/PHP-%23777BB4.svg?logo=php&logoColor=white">
</a>
<a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS">
<img alt="CSS" src="https://img.shields.io/badge/CSS-1572B6.svg?logo=css3&logoColor=white">
</a>
<a href="https://sass-lang.com">
<img alt="SASS" src="https://img.shields.io/badge/Sass-hotpink.svg?logo=SASS&logoColor=white">
</a>
<a href="https://www.mysql.com">
<img alt="MySQL" src="https://img.shields.io/badge/MySQL-%2300f.svg?&logo=MySQL&logoColor=white">
</a>

<a href=""><img src="https://img.shields.io/badge/version-0.5.7-230418?" height="22" alt="Version"/></a>

<br>

|| [Instruções](#section-instrucoes) || [Notas de versão](#section-changelog) || [Autores](#section-autores) || [Licença](#section-licenca) ||

</div>

<a name="section-instrucoes">

## Instruções

</a>

Para o funcionamento adequado do projeto, é necessário que tenha o PHP, Git, MySQL Server e MySQL Workbench instalados em sua máquina:

| Instalação do PHP no windows | Descrição                                                                                                                                                                        |
| ---------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1.                           | Primeiro vá ao site do PHP, baixe e instale a versão mais recente da `Old Stable`.                                                                                               |
| 2.                           | Apos isso, extraia o arquivo `.zip` na pasta do usuário do sistema, localizada na `C:\Users\(NomeDoUsuário)`.                                                                    |
| 3.                           | Depois na barra de pesquisa do windows procure por: `Editar as variáveis de ambiente do sistema`.                                                                                |
| 4.                           | Ao abrir as `Variáveis de Ambiente`, na primeira seção (Variáveis de usuário para `Nome do Usuário`, localize pela variável `Path`.                                              |
| 5.                           | Selecione a variável `Path`, e clique em editar. Em seguida clique em "Novo" e adicione o diretório de onde você extraiu o aquivo do PHP. (Ex:`C:\Users\NomeDoUsuário\PastaPHP`. |
| 6.                           | Depois só salvar, e reiniciar sua máquina. Pronto, PHP instalado! **Obs:** Para confirmar que está instalado, abra o Git Bash é dê o comando `php -v`                            |

### Executando o projeto

Abra o Git Bash, e abra a pasta do projeto com o comando `cd (Diretório do projeto). Ex: cd /c/Users/form_sample`. Depois dê o comando `php -S localhost:8000` para executar o projeto. O site estará aberto em `https://localhost:8000`.

<hr>

<a name="section-changelog">

## Notas de versão

</a>

### v0.5.7.230418

- Estruturação/Estilização de componente dinâmico para exibição do formulário na saída.

##

### v0.4.7.230417

- Validação de email no database.
- Reestruturação das variáveis `$_POST` usando `$_SESSION`.
- Criação de funções para inserção de perguntas e respostas no banco.
- Revisão do schema do database.

##

### v0.4.6.230413

- Finalizado a estilização e criação das informações do formulário.
- Feito a relação de ID de usuário com o formulário. ✅

##

### v0.4.5.230409

- Criação da segunda aba do formulário.
- Passos finais da criação das páginas e questões do formulário.

##

### v0.3.5.230407

- Tentativa(#02) de envio das informações para o Database(MySQL) - ✅.
- Feito a conversão das variáveis para string, para enviar as informações para o Database(MySQL).

##

### v0.3.4.230406

- Continuação da estilização do formulário.
- Criado as primeiras questões do formulário.

##

### v0.2.4.230404

- Estilização da página de formulário.
- Introdução as informações do formulário
- Reestruturação da tela de usuário.

##

### v0.1.4.230402

- Criação e estilização da página do formulário.
- Tentativa(#01) de envio das informações para o Database(MySQL) - ❌.
- Reorganização dos arquivos.

##

### v0.0.4.230331

- Update do README.
- Criado uma seção de instrução ensinando a rodar o projeto corretamente.

##

### v0.0.3.230330

- Tentativa(#03) de conexão com o Database(MySQL) - ✅
- O que ocasionava o erro:(Erro: Uncaught Error: Class "mysqli" not found) na conexão com o database, era que o PHP não estava sendo direcionado nas variáveis do ambiente do windows, levando ao .dll do MySQLi. (Corrigido)

##

### v0.0.2.230329

- Primeiro teste com armazenamento dos dados do usuário. - ✅
- Estilização da home page.
- Tentativa(#02) de conexão com o Database(MySQL) - ❌ (Erro: Uncaught Error: Class "mysqli" not found).

##

### v0.0.1.230327

- Criação do repositório.
- Introdução a criação da home page.
- Tentativa(#01) de conexão com o Database(MySQL) - Falhou
- Criação da documentação (README).

<a name="section-autores">

## Autores

</a>

<a href="https://github.com/RRyanDEV/form_sample/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=RRyanDEV/form_sample" />
</a>

<a name="section-licenca">

## Licença

</a>

Licenciado sob a [MIT License](https://github.com/RRyanDEV/form_sample/blob/main/LICENSE).
