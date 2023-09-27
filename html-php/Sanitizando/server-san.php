<?php  

$name = $_POST["nombre"];
$username = $_POST["username"];
$edad = $_POST["edad"];
$email = $_POST["email"];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>

<body>
    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin números:</p>
    <?= $onlywords ?>

    <p>Username con números:</p>
    <?= $onlynumers ?>

    <p>Edad:</p>
    <?= $sanitize_int ?>

    <p>Email:</p>
    <?= $email ?>
</body>

</html>