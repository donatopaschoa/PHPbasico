<!DOCTYPE html>
<html lang="pt-br">
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

        $diaSemna = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch($diaSemna) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;

            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto! ;)";
                break;

            default:
                echo "Dia da semana inválido";
        }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>