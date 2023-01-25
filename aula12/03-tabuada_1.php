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
        <form action="03-tabuada_2.php">
            Número:
            <select name="num">
                <?php
                    $c = 1;
                    do{
                        echo "<option value='$c'>$c</option>";
                        $c ++;
                    }while($c <= 10)
                ?>
            </select>
            <input type="submit" class="botao" value="Tabuada">
        </form>
    </div>
</body>
</html>