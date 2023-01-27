<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
</head>
<body>
    <div>
        <?php
            function soma() {
                $lst = func_get_args();
                $qtde = func_num_args();
                $soma = 0;
                
                for($i=0; $i<$qtde; $i++){
                    $soma +=$lst[$i];
                }
                return $soma;
            }

            echo "A soma dos valores é " .soma(1, 2, 3, 4, 5);
        ?>
    </div>
</body>
</html>