<?php
    function soma($num1, $num2, $result) {
        $result = $num1 + $num2;
        if ($result < 0) {
            echo "o resultado é 0"; 
        }
        else { 
            echo "$num1 + $num2 = $result"; 
        }
    }

?>

<?php 
    soma($_POST["num1"], $_POST["num2"]);
?>
