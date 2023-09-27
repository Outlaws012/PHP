<?php

    $name = "Bruce";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>

<body>

    <?php 
        echo "Estoy aprendiendo a integrar PHP con HTML";
    ?>

    <?= 
        "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>"
    ?>

    <h1>Hola <?= $name ?></h1>

</body>

</html>