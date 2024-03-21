<?php
    $numeros = array(0,2,9,20,7);
    $maiorNumero = $numeros[0];
    foreach ($numeros as $numero){
        if ($numero > $maiorNumero){
            $maiorNumero = $numero;
        }
    }
    echo "O maior número é: ". $maiorNumero;
?>