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
            $v1[0] = 4;
            $v1[1] = 8;
            $v1[2] = "Olá";
            print_r($v1 ); // >> Array ( [0] => 4 [1] => 8 [2] => Olá )
            printf("<br>");

            $v2 = array(3, 7, 12, 9, 67);
            print_r($v2); //  Array ( [0] => 3 [1] => 7 [2] => 12 [3] => 9 [4] => 67 )
            printf("<br>");

            var_dump($v1);
            printf("<br>");
            /*
                C:\wamp64\www\PHPbasico\aula16\02-print_r.php:23:
                array (size=3)
                0 => int 4
                1 => int 8
                2 => string 'Olá' (length=4)
            */

            var_export($v1); // >> array ( 0 => 4, 1 => 8, 2 => 'Olá', )
        ?>
    </div>
</body>
</html>