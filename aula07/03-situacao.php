<!DOCTYPE html>
<html lang="en">
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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2)/2;
            
            echo "<p><strong>Situação do aluno:</strong></p>";
            echo "Notas: $nota1 e $nota2<br>";
            echo "Amédia do aluno é $media<br>";
            
            //Primeira forma:
            //$situacao = ($media < 6)?"REPROVADO":"APROVADO";
            //echo "O aluno foi <strong>$situacao</strong>";

            //Segunda forma (reduzida):
            echo "O aluno foi <strong>" . ( ($media < 6)?"REPROVADO":"APROVADO"  ) ."</strong>";
        ?>
    </div>
</body>
</html>