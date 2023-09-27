<?php  


// var_dump($_POST["list1"]);
// var_dump($_POST["list2"]);
// var_dump($_POST["list3"]);

// var_dump($_POST["pais"]);


// if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
//     echo "Hola {$_POST['nombre']}!";
// } else {
//     echo "No hay nombre";
// }

if (isset($_POST["form"])) {
    echo "Si se mando todo el formulario";
} else {
    echo "No se mando el formulario";
}