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
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["opcao"];
            echo "<h2>Operador Unário:</h2>";
            echo "a = $n1, b = $n2";
            $r = $tipo == "s" ? $n1 + $n2 : $n1 * $n2;
            echo "<br>O resultado é $r";
        ?>
    </div>
</body>
</html>