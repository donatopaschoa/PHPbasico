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
            $estado = $_GET["estado"];

            switch($estado) {

                case "AM":
                case "RR":
                case "AP":
                case "PA":
                case "TO":
                case "RO":
                case "AC":
                    $lugar = "Região Norte";
                    break;

                case "MA":
                case "PI":
                case "CE":
                case "RN":
                case "PE":
                case "PB":
                case "SE":
                case "AL":
                case "BA":
                    $lugar = "Região Nordeste";
                    break;

                case "MT":
                case "MS":
                case "GO":
                    $lugar = "Região Centro-Oeste";
                    break;

                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    $lugar = "Região Sudeste";
                    break;

                case "PR":
                case "RS":
                case "SC":
                    $lugar = "Região Sul";
                    break;

                default: 
                $lugar = "Erro, volte e escolha um estado";

            }

            echo "Você mora na <span class='foco'>$lugar<br>";
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>