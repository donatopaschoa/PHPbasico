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
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO";
            echo "As variáveis a = $a do tipo numérica e b = $b do tipo string são <strong>iguais</strong>? $r<br>";
            $r = ($a === $b) ? "SIM" : "NÃO";
            echo "<br>As variáveis a = $a do tipo numérica e b = $b do tipo string são <strong>idênticas</strong>? $r";
        ?>
    </div>
</body>
</html>