<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de imágenes</title>
</head>

<body>

    <form action="./server-input.php" method="post" enctype="multipart/form-data">

        <!-- Input Simple -->
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> -->

        <!-- Input Arreglo -->
        <!-- <label for="nombre">Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- Input Arreglo Asociativo -->
        <!-- <label for="nombre">Persona:</label>
        <input type="text" name="personas[nombre]">
        <label for="">Correo de la persona</label>
        <input type="email" name="personas[email]">
        <label for="">Edad de la persona</label>
        <input type="number" name="personas[edad]"> -->

        <!-- Checkbox -->
        <!-- <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Este valor fue clickeado">
        <input type="checkbox" name="list3"> -->

        <!-- Radios -->
        <!-- <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">
        <label for="españa">España</label>
        <input type="radio" name="pais" value="España" id="españa">
        <label for="mexico">México</label>
        <input type="radio" name="pais" value="México" id="mexico"> -->

        <!-- Múltiples archivos -->
        <!-- <label for="galeria">Carga tus imágenes</label>
        <input type="file" multiple name="galeria[]" id="galeria"> -->

        <!-- Validar un formulario -->
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">

        <button name="form" type="submit">Mandar formulario</button>
    </form>

</body>

</html>