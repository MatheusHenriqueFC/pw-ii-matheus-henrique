<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício IMC</title>
</head>
<body>
<?php
        $peso =60;
        $altura = 1.70;
        $imc = $peso / pow($altura, 2);

        switch ($imc) {

            case $imc < 16.9;
            echo "Muito abaixo do peso";
            break;

            case $imc < 18.4;
            echo "Abaixo do peso";
            break;

            case $imc < 24.9;
            echo "Peso normal";
            break;
 
            case $imc < 29.9;
            echo "Acima do peso";
            break;

            case $imc < 34.9;
            echo "Obesidade grau I";
            break;

            case $imc < 40;
            echo "Obesidade grau II";
            break;
            
            default;
            $classificacao = "Obesidade Grau III";
            $obesidade = "Grau III";
            break;
        }
    ?>
</body>
</html>