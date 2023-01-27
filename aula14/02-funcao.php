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
                echo "<p> A soma de $a + $b vale $s</p>";
            }

            soma(5, 7);
            $x = 1;
            $y = 2;
            soma($x, $y)
        ?>
    </div>
</body>
</html>