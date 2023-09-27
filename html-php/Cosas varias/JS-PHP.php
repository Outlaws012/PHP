<?php  

    $users = array(
        array(
            'id' => 0, 
            'username' => 'Bruce', 
        ),
        array(
            'id' => 1, 
            'username' => 'Breyner', 
        ),
        array(
            'id' => 2, 
            'username' => 'Carlos', 
        ),
    );

    $edad_de_breyner = 20;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JavaScript</title>
</head>

<body>

    <script>
    let users = JSON.parse('<?= json_encode($users) ?>');
    console.log(users);

    let edadDeBreyner = <?= $edad_de_breyner ?>;
    console.log(`Edad de Breyner: ${edadDeBreyner}`);
    </script>

</body>

</html>