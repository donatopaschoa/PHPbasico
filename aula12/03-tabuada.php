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
            $n = $_GET["num"];
            echo "<h1>Mostrando a Tabuada do $n:</h1>";
            $c = 1;

            do{
                echo "$n x $c = " . ($n * $c) ."<br>";
                $c ++;
            }while($c <= 10)
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>