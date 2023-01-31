<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Básico de PHP</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <h2>Listagem de caracteres: <br>char(n), núm > caracteres<br></h2>
        <ul>
        <?php
            for($i=35; $i<=103; $i++){
                echo "<li> $i = " .chr($i) ."</li>";
            }
        ?>
        </ul>
    </div>
</body>
</html>