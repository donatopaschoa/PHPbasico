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
            $v = array("A", "J", "M", "X", "K");
            print_r($v); // >> Array ( [0] => A [1] => J [2] => M [3] => X [4] => K )

            //Outra forma via tag <pr> (pré-formatado):
            echo "<pre>";
            $v = array("A", "J", "M", "X", "K");
            print_r($v); 
            echo "</pre>";
            /* Temos:
            Array
            (
                [0] => A
                [1] => J
                [2] => M
                [3] => X
                [4] => K
            )
            */

            // Outra maneira onde vc necessita saber o tipo de cada elemento q compõe o vetor com detalhes:
            var_dump($v);
            /* Temos:
            C:\wamp64\www\PHPbasico\aula19\01-exibir.php:32:
            array (size=5)
            0 => string 'A' (length=1)
            1 => string 'J' (length=1)
            2 => string 'M' (length=1)
            3 => string 'X' (length=1)
            4 => string 'K' (length=1)
            */
        ?>
    </div>
</body>
</html>