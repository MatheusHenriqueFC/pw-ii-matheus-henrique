<?php
    function soma($num1, $num2) {
        if ($num1 + $num2 < 0) {
            echo "o resultado é " . $num1 "+" $num2 "= 0"; 
        }
        else { 
            echo "o resultado é " . $num1 + $num2; 
        }
    }

    soma(-10, 5);

?>
