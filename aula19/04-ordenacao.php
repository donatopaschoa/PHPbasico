<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de HTML</title>
</head>
<body>
    <div>
        <pre>
            <?php
                $v = array(3,5,8,2,0);
                print_r($v);
                /*
                [0] => 3
                [1] => 5
                [2] => 8
                [3] => 2
                [4] => 0
                */

                // Removendo o elemento 2 (núm. 8): repare q o vetor de 4 elementos, o índice vai de 0 a 4 na ordem mas sem o "índice 1" q foi removido
                unset($v[1]);
                print_r($v);
                /*
                [0] => 3
                [2] => 8
                [3] => 2
                [4] => 0
                */

                // Ordenando o conteúdo do vetor mantendo os mesmo índices (cada elemento arrasta seu índice original)
                asort($v);
                print_r($v);
                /*
                [4] => 0
                [3] => 2
                [0] => 3
                [2] => 8
                */
                
                // Idem anterior na ordem Reversa
                arsort($v);
                print_r($v);
                /*
                [2] => 8
                [0] => 3
                [3] => 2
                [4] => 0
                */

                // Ordenação dos ídices (key - chave) em ordem crescente, arrastando o conteúdo de cada um conforme o vetor original:
                ksort($v);
                print_r($v);
                /*
                [0] => 3
                [2] => 8
                [3] => 2
                [4] => 0
                */

                // Ordenação dos ídices (key - chave) em ordem DEcrescente, arrastando o conteúdo de cada um conforme o vetor original:
                echo "Estou aqui <br>";
                krsort($v);
                print_r($v);
                /*
                [4] => 0
                [3] => 2
                [2] => 8
                [0] => 3
                */

                // Ordenando: repare q o vetor de 4 elementos, o índice vai de 0 a 3 sem pular a sequencia
                sort($v);
                print_r($v);
                /*
                [0] => 0
                [1] => 2
                [2] => 3
                [3] => 8
                */

                // Forma REVERSA (decrescente):
                rsort($v);
                print_r($v);
                /*
                [0] => 8
                [1] => 3
                [2] => 2
                [3] => 0
                */
            ?>
        </pre>
    </div>
</body>
</html>