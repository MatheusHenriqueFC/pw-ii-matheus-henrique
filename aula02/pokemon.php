<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pokemons = array(
        "Charmander",
        "Squirtle",
        "Bulbassaur",
        "Pikachu",
        "Eevee",
    );

    foreach($pokemons as $pokemons){
        if ($pokemons !== "Charmander"){
            echo $pokemons. "<br>";
        }
    }

    ?>
</body>
</html>