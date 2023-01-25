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
            
            $n = $_GET["val"];
            $c = $n;
            echo "<h1> Calculando o fatorial de $n:</h1>";
            $fatorial = 1;

            do {
                $fatorial *= $c;
                $c --;
            }while($c >= 1);

            echo "<h2> $n! = $fatorial</h2>";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>