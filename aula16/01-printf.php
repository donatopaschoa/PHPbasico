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
            $produto = "Leite";
            $Valor = 4.597;

            // Arredondamento de 2 casas decimais>> 4.60
            echo "O $produto custa R$ " .number_format($Valor, 2) ."<br>"; 

            // Arredondamento de 2 casas decimais>> 4.60
            printf("O %s custa R$ %.2f", $produto, $Valor);
        ?>
    </div>
</body>
</html>