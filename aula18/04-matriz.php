<!DOCTYPE html>
<html lang="en">
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
                $n = array(array(2,3),
                            array(3,4),
                            array(9,5));
                print_r($n);
                
                $n[0] [1] = $n[2][0];
                print_r($n); 
            ?>
        </pre>
    </div>
</body>
</html>