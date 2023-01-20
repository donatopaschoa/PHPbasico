<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
    <link rel="stylesheet" href="_css/style.css">
    <style>
        span.texto {
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?><br>

        <a href="03exercicio.html">Voltar</a>
    </div>
</body>
</html>