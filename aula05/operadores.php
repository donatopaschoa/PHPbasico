<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <?php
        $n1 = 3;
        $n2 = 2;
        $m = ($n1 + $n2) / 2;
        echo "n1 = $n1, n2 = $n2 <br>";
        echo "<br>A soma vale ".($n1 + $n2);
        echo "<br>A subtração vale ".($n1 - $n2);
        echo "<br>A divisão vale ".($n1 / $n2);
        echo "<br>A multiplicação vale ".($n1 * $n2);
        echo "<br>O módulo vale ".($n1 % $n2);
        echo "<br>A média vale $m"
    ?>
</body>
</html>