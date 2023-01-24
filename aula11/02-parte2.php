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

            // Criando variáveis em tempo de execução e armazenando valores postados do formulário
            $i = 1;
            while($i <= 5) {
                $v = "num$i";
                $url = "v$i";
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;

                $i++;
            }

            // Apresentando os valores:
            $i = 1;
            while($i <= 5) {
                $v = "num$i";
                echo "Valor $i: " .$$v ."<br>";
                $i ++;
            }

        ?>
    </div>
</body>
</html>