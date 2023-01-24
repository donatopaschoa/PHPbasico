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
        <form action="02-parte2.php" method="get">
        <?php
            // Criando as caixas de texto em tempo de execução:
            $c = 1;
            while($c <= 5) {
                echo "Valor $c: <input type='number' name='v$c' value='0' min='0' max='100'><br>";
                $c ++;
            }

        ?>
        <input type="submit" class="botao" value="Enviar">
        </form>
    </div>
</body>
</html>