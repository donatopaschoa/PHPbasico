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
        <pre>
            <?php
                echo "<h2>Criação de um vetor c/ campo numérico fora de ordem e não consecutivo:</h2>";
                $v = array(3=>5,
                           1=>9,
                           7=>8,
                           10=>17);

                // Visualização do array:
                print_r($v);

                echo "<h2>Visualização do conteúdo na horizontal:</h2>";
                foreach($v as $valor){
                    echo "$valor ";
                }
                echo "<br>";

                echo "<h2>Visualização do campo e conteúdo na vertical (linha):</h2>";

                echo "<h3> Primeiro modo:</h3>";
                foreach($v as $campo => $conteudo){
                    echo "[$campo] => $conteudo <br>";
                };

                echo "<h3> Segundo modo:</h3>";
                foreach($v as $campo => $conteudo){
                    echo "O campo $campo possue o conteudo $conteudo <br>";
                }

                // Criação de um vetor c/ índice NÃO numérico:
                $w = array("nome"=>"Ana",
                               "idade"=>23,
                               "peso"=>65.5);

                // Podemos adicionar mais um elemento depois da última posição:
                $w["fuma"] = true;
                echo "<h2>Visualização de um array NÃO numérico:</h2>";
                print_r($w);

                echo "<h2>Visualização personalizada via 'foreach':</h2>";
                foreach($w as $campo => $conteudo) {
                    echo "O campo<strong> $campo </strong>possue o conteúdo <strong>$conteudo </strong><br>";
                };
                
            ?>
        </pre>
    </div>
 </body>
 </html>