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
            function teste(&$x){
                $x += 2;
                echo "<p>O valor de X é $x</p>"; // >> 5
            }

            $a = 3;
            teste($a);

            echo "<p>O valor de A = $a</p>"; // >> 5
        ?>
    </div>
</body>
</html>