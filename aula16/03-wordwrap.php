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
            $txt1 = "1234567890123456789012345678901234567890";
            $txt2 = "1234567890123456789012345678901234567890ABCD";

            echo "<p><h2>wordwrap com TRUE:</h2></p>";

            $resultado_1 = wordwrap($txt1, 15, "<br>", true);
            $resultado_2 = wordwrap($txt2, 15, "<br>", true);

            echo "TXT_1:<br>";
            echo $resultado_1;

            echo "<br>";

            echo "TXT_2:<br>";
            echo $resultado_2;

            // --------------------------------------------
            echo "<p><h2>wordwrap com FALSE:</h2></p>";

            $resultado_1 = wordwrap($txt1, 15, "<br>", false);
            $resultado_2 = wordwrap($txt2, 15, "<br>", false);

            echo "TXT_1:<br>";
            echo $resultado_1;

            echo "<br>";

            echo "TXT_2:<br>";
            echo $resultado_2;
        ?>  
        
    </div>
</body>
</html>