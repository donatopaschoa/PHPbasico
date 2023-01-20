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
            $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
            $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
            $media = number_format((($n1 + $n2)/2), 2, ",", ".");

            if($media < 5) {
                $situacao = "REPROVADO";
            } elseif ($media < 7) {
                $situacao = "RECUPERAÇÃO"                 ;
            } else{
                $situacao = "APROVADO";
            }

            echo "A média entre $n1 e $n2 é igual a $media <br>";
            echo "Situação do aluno: $situacao<br>";

        ?>
        <input type="button" value="Voltar" onclick="fncVoltar()">

    </div>
    <script>
        function fncVoltar() {
            window.location.href = '03exercicio.html'
        }
    </script>
</body>
</html>