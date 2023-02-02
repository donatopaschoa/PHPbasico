<!DOCTYPE html>
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de PHP</title>
</head>
<body>
    <div>
        <pre>
            <?php
                echo "<h2> Vetor inicial: </h2>";
                $v = array("A", "J", "M", "X", "K");
                print_r($v);

                echo "<h2>Incluir um elemento no final do vetor: ---------------:</h2>";

                echo "<h2>Primeira maneira:</h2>";
                $v[] = "O";
                print_r($v);

                echo "<h2>Segunda maneira:</h2>";
                array_push($v, "K"); // >> Usado em tratamento específico de pilha *****
                print_r($v);

                echo "<h2> Incluir um elemento no início do vetor: ---------------:</h2>";
                // (neste caso, V5.6, este elemento assumirá posição 0 e os seguintes serão incrementados, porém, caso haja um índice faltando (fora da ordem ou da sequência), todos serão reordenados 0,1,2,3,4,5,...)
                array_unshift($v, "W");
                print_r($v);

                echo "<h2> Excluir um elemento no início do vetor: ---------------:</h2>";
                // (neste caso, V5.6, o segundo elemento assumirá posição 0 e os seguintes, 1,2,3,4 ..., porém, caso haja um índice faltando (fora da ordem ou da sequência), todos serão reordenados 0,1,2,3,4,5,...)
                array_shift($v);
                print_r($v);

                echo "<h2>Eliminando elementos de um vetor: --------------------:</h2>";

                echo "<h2>Eliminando o último elemento:</h2>";
                array_pop($v); // >> Usado em tratamento específico de pilha *****
                print_r($v);

                echo "<h2>Eliminando um elemento específico:</h2>";
                // (neste caso, a posição deste elemento será removida, permanecendo inalterados os índices restantes)
                unset($v[3]);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>