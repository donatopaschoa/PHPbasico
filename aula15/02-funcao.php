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
            include "funcoes-gerais.php";
            echo "<p><h1>Testando Rotina Externa:</h1></p>";
            $num = 89;
            echo "<h2>" .$num .primo($num) ."</h2><br>";
            echo "<h2> 1 + 2 + 3 + 4 + 5 = " .soma(1, 2, 3, 4, 5) ."</h2>";
        ?>
    </div>
</body>
</html>