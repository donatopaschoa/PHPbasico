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

        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $calculo = isset($_GET["calc"]) ? $_GET["calc"] : "ERRO";

        switch($calculo) {

            case "dobro":
                $valor = 2 * $n;
                $valor = 2*$n;
                break;
            
            case "raiz":
                $valor = sqrt($n);
                break;

            case "cubo":
                $valor = pow($n,3); // $valor = $n ^ 3;
                break;
            
            default: $valor = "Erro, favor voltar e digitar novamente";

        }


        echo "$calculo de $n é <span class='foco'>$valor</span><br>";

        ?>
        <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>
</html>