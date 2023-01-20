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
            $x = "abc";
            $$x = "def";

            echo "O conteúdo da variável x é $x";
            echo "<br>O conteúdo da variavel abc é $abc";

        ?>
    </div>
</body>
</html>