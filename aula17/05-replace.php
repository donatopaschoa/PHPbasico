<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
    <link rel="stylesheet" href="_CSS/style.css">
</head>
<body>
    <div>
        <?php
            $frase = "Gosto de estudar Matematica";
            $novaFrase = str_replace("Matematica", "PHP", $frase);
            echo $novaFrase;
        ?>
    </div>
</body>
</html>