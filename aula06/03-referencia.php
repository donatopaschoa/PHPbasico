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
            $b = $a;
            $b += 5;
            echo "<h2>Usando variáveis não referenciadas:</h2>";
            echo "A = $a";
            echo "<br>B = $b";

            $a = 3;
            $b = &$a; // passagem de referência (a variável de a reflete em b e vice-versa)
            $b += 5;
            echo "<h2>Usando variáveis referenciadas:</h2>";
            echo "A = $a";
            echo "<br>B = $b";

        ?>
    </div>
</body>
</html>