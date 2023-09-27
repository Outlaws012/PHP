<?php 

    $bruno = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!-- Esto no se debe de hacer -->
    <!-- <?php 
        if ($bruno) {
            echo "<b>Esta condicional es verdadera</b>";
        } else {
            echo "<b>OK</b>";
        }
    ?> -->
    
    <!-- Eso es aceptable -->
    <!-- <?php if($bruno) { ?>
        <b>Se hablo de Bruno</b>
    <?php } else { ?>
        <b>No se hablo de Bruno</b>
    <?php } ?>  -->

    <!-- Esto si se puede hacer -->
    <?php if($bruno): ?>
        <b>Se hablo de Bruno</b>
    <?php else: ?>
        <b>No se hablo de Bruno</b>
    <?php endif; ?>
    
</body>
</html>