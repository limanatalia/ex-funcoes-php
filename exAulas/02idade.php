<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Integração HTML + PHP</title>
    </head>
    <body>
        <div>
            <?php
                    //isset = para nao receber valor pela url
            $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[NÃO INFORMADO]" ;
            $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[SEM SEXO]" ;
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos.";
            ?>
    <br/>
        <a href="02exercicio.html">Voltar</a>
            
        </div>
    </body>
</html>