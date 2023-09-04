<?php

// $edades = [20, 18, 40];
// $edades = array(20, 18, 40);
// echo "Una de las edades que esta adentro es: " . $edades[0];

//Arreglos asociativos

// $edades = array(
//     "Juan" => 35,
//     "Pedro" =>  67,
//     "Ana" => 90
// );

// echo "La edad de pedro es " . $edades["Pedro"];

$cafes = array(
    "Capuchino" => 50,
    "Americano" => 40.50,
    "Mocha" => 35,
);

// echo "El precio del café Americano es de {$cafes['Americano']} ";

// $personas = array(
//     "Carlos" => array(
//         "edad" => 20,
//         "apellido" => "Her"
//     ),
//     "Mauricio" => array(
//         "edad" => 21,
//         "apellido" => "Gus"
//     )
// );

// echo "La información de Mauricio es: Edad: " . $personas["Mauricio"]["edad"] . " Apellido: " . $personas["Mauricio"]["apellido"];

// Manipulación de arreglos 

$edades = [18,22,40,34];

// count 
// echo count($edades); // Cuenta los elementos dentro el array

// array_push()
array_push($edades , 25) ; // Agregar un elemento al final del arreglo

// is_array
$no_es_array = "";
// var_dump (is_array ($edades)); // Confirmar si una variable es un arreglo

// explode
// $lista_frutas = "fresa, cereza, manzana";
// $lista_array = explode(",", $lista_frutas); // separa cada elemento y lo pone en forma de arreglo
// var_dump($lista_array);// Imprimir en pantalla el contenido del array

// implode
// $lista_frutas_array = ["fresa", "cereza", "manzana"];
// $lista_frutas = implode(",", $lista_frutas_array); // Une los elementos del un array con el string
// var_dump($lista_frutas);

echo "\n";