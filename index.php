<!DOCTYPE html>
<?php
    date_default_timezone_set("America/Sao_Paulo");
    $date = date("d/m/Y à\s H:i");
    echo "<pre>";    print_r($date); echo "</pre>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div class="bloco">
            <div class="logo"><img src="images/perfil.png"/></div>
            <div class="header-info">
                <h1 name="Guilherme">Guilherme Farias Gomes<br>
                    Desenvolvimento Backend</h1>
            </div>
        </div>
        <div class="container">
            <ul class="mini-fotos">
                <address>
                    <li class="cel">
                        <img src="images/celular.png" alt="num">
                        <p><a href="https://wa.me/5521995669625?text=Est%C3%A1gio%20Desenvolvimento." target="_blank">(21) 99566-9625</a>
                    </li>
                    <li class="email">
                        <img src="images/email.png" alt="email">
                        <p>Guifariasgomes@gmail.com</p>
                    </li>
                    <li>
                        <img src="images/loc.png" alt="local">
                        <p>Rio de Janeiro - RJ</p>
                    </li>
                    <li>
                        <img src="images/github.png" alt="git">
                        <p><a href="https://github.com/Hivegui" target="_blank">Meu Github</a>
                    </li> 
                </address>   
            </ul>
        </div>
        <nav>
            <div class="item">
                <input type="checkbox" id="check">
                <label for="check">► <strong>SOBRE</strong></label>
                <ul>
                    <p> Sempre fui muito ligado à tecnologia na minha adolescência, seja montando meu próprio computador, fazendo manutenção e resolvendo os problemas nos computadores da família.<br>
                       Acabei entrando na faculdade de Comunicação Social (Publicidade e Propaganda), onde pude desenvolver meu lado comunicativo, inovador e trabalhando em equipe.<br>
                       Na pandemia, comecei a estudar programação e no primeiro semestre de 2022, iniciei minha 2ª graduação em Análise e Desenvolvimento de Sistemas, e atualmente é onde busco minha<br>
                       primeira oportunidade como desenvolvedor.<br>
                </ul>
            </div>
        </nav>
        
            <h3>OBJETIVO</h3>
            <p>Estágio em Desenvolvimento Back End</p>
        <h3>FORMAÇÃO ACADÊMICA</h3>
            <p>02/2022 - Cursando Análise e Desenvolvimento de Sistemas - Universidade Veiga de Almeida</p>
            <p>02/2022 - Bacharel em Publicidade e Propaganda - Universidade Estácio de Sá</p>
        <h3>CURSOS</h3>
            <p>Javascript - Origamid (Concluído em 20/03/2023)</p>
            <p><br>HTML e CSS - Origamid (Concluído em 20/03/2023)</p></p>
            <p><br>PHP - Curso em Vídeo (Concluído em 23/03/2023)</p></p>
            <p><br>Python - Curso em Vídeo (Concluído em 07/08/2022)</p></p>
            <p><br>MySQL - Curso em Vídeo (Concluído em 22/03/2023)</p>
        <h3>LÍNGUAS</h3>
            <p>Inglês - Intermediário</p>
        <h3>CONHECIMENTOS ESPECÍFICOS</h3>
            <p><br>Linguagens de Programação: PHP, JAVASCRIPT, HTML, CSS, PYTHON</p>
            <p><br>Banco de Dados: MySQL</p>
    
    </body>
</html>