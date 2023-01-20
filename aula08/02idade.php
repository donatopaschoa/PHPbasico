<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $nome =isset($_GET["nome"]) ? $_GET["nome"] : "[não  informado]";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"]: "[não informado";

            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos";
        ?>
        <br>
        <a href="02exercicio.html">Voltar</a>
    </div>
</body>
</html>