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
            $valor = $_GET["v"];
            echo "O valor enviado foi $valor";
            echo "<br> A raiz quadrada é " . number_format(sqrt($valor),2,",",".");
        ?>
        <br>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>
</html>