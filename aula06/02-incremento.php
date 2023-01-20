<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuição:</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $atual = $_GET["aa"];
            echo "O ano atual é $atual";
            echo "<br>O ano anterior é " . $atual--; // >> 23, apresentou a variável e depois decrementou uma unidade
            echo "<br>O ano anterior é " . $atual;   // >> 22 Apresentou a variáveal anteriormente decrementada
            echo "<br>O ano anterior é " . --$atual; // >> 21 decrementou uma unidade da variável anterior e apresentou
        ?>
    </div>
</body>
</html>