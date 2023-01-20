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
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e terá $idade anos <br>";

            if($idade >= 18) {
                $votar = "já pode votar";
                $dirigir = "já pode dirigir";
            } else {
                $votar = "não pode votar";
                $dirigir = "não pode dirigir";   
            }

            echo "Com esta idade você $votar e também $dirigir";

        ?>
    </div>
</body>
</html>