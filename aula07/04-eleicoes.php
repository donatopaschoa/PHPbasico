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
            $anoAtual = date("Y");
            $anoNascimento = $_GET["an"];
            $idade = $anoAtual - $anoNascimento;
            $tipo = ($idade >= 18 && $idade < 65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO"; 

            echo "Quem nasceu em $anoNascimento tem idade de $idade anos<br>";
            echo "E desta forma seu voto é $tipo";
        ?>
    </div>
</body>
</html>