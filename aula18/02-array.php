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
        <pre>
            <?php
                $v = range(5, 17, 2);

                echo "<h2>Primeiro modo de visualização:</h2>";
                print_r($v);
                
                echo "<h2>Segundo modo de visualização:</h2>";
                for($i=0; $i<count($v); $i++){
                  echo "$v[$i] ";
                };

                echo "<h2>Terceiro modo de visualização:</h2>";
                foreach($v as $s){
                    echo "$s ";
                };

                echo "<h2>Quarto modo de visualização:</h2>";
                echo "<table border='1'> <tr>";
                foreach($v as $s){
                    echo "<td> $s </td>";
                };
                echo "</tr> </table>";
            ?>
        </pre>
    </div>
</body>
</html>