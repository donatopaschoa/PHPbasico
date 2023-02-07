<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
    <link rel="stylesheet" href="_CSS/style.css">
</head>
<body>
    <div>
        <pre>
            <?php
                $texto = "donato paschoa amezaga";
                echo ucfirst($texto); // >> Donato paschoa amezaga 

                $lst = explode(" ", $texto);
                print_r($lst);

                // Usando o "for": >> Donato Paschoa Amezaga
                for($i=0; $i<count($lst); $i++) {
                    echo ucfirst($lst[$i]) ." ";
                }
                echo "<br>";
                // Usando "foreach": >> Donato Paschoa Amezaga
                foreach($lst as $v){
                    echo ucfirst($v) ." ";
                }
            ?>
        </pre>
    </div>
</body>
</html>