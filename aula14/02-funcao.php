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
            function soma($a, $b) {
                $s = $a + $b;
                return $s;
            }

            $x = 2;
            $y = 3;

            echo "A soma entre $x e $y é " .soma($x, $y);
        ?>
    </div>
</body>
</html>