<?php
    function nota($F1, $F2) {
        $nt = ($F1 + $F2) / 2;
        if ($nt >= 6) {
            echo "Aluno Aprovado";
        } 
        else if ($nt >= 4) {
            echo "Aluno em Recuperação";
        } 
        else {
            echo "Aluno Reprovado";
        }
}
    nota(10, 8);
    nota(5, 5);
    nota(3, 2);
?>