<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico em PHP</title>
</head>
<body>
    <div>
        <?php
            $frase = "Curso em video";
            echo substr($frase,1); // >> urso em video, retorna o elemento 1 em diante
            echo "<br>";
            echo substr($frase, -5); // >> video, 5 últimos caracteres
            echo "<br>";

            $novo = str_pad("Curso", 8, "-",STR_PAD_RIGHT); 
            // >> Curso--- completa com "-" os 8 dígitos incluindo "Curso"

            echo "Faço $novo diariamente"; 
            // >> Faço Curso--- diariamente
        ?>
    </div>
</body>
</html>