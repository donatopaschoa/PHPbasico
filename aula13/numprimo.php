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
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $c = 0;
            $valores = "";
            echo "<h1>Analizando o número $n:</h1>";

            for($i=1; $i<=$n; $i++) {

                if ($n % $i == 0){
                    $valores = $valores ." " .strval($i);
                    $c ++;
                }
            }
            if($c == 2){
                $resultado = "É PRIMO";
            } else{
                $resultado = "NÃO É PRIMO";
            }

            echo "<h2>Valores múltiplos: $valores</h2>";
            echo "<h2>Total de múltiplos: $c</h2>";
            echo "<h2>Resultado: $n <span class='foco'> $resultado </span><br>";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>