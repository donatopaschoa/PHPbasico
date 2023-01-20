<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos via GET</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
        
            echo "<h2>Valores recebidos: $n1 e $n2: </h2>";
            echo "O valor absoluto de $n2 é ". abs($n2);
            echo "<br>O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2);
            echo "<br>Raiz quadrada de $n1 é " . sqrt($n1);
            echo "<br>O arredondamento de $n1 é " . round($n1);
            echo "<br>A parte inteira de $n1 é " . intval($n1);
            echo "<br>O valor de $n1 em moedas é R$ " . number_format($n1, 2, ",", ".");
        ?>
    </div>
</body>
</html>