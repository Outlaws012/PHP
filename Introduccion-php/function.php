<?php 

/* function get_pokemon (){
    $numero_random = rand(1, 5);

    switch ($numero_random) {
        case 1:
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
        default:
            echo "Lo siento no hay Pokémon para ti";
    }
}

for ($i=0; $i < 10; $i++) { 
    get_pokemon();
}

echo "\n"; */

/* function student_legend($platzi_rank){

    if ($platzi_rank >= 20000) {
        echo "Eres un estudiante Legend";
    }
    else {
        echo "Aun no alcanzas el nivel Legend";
    }
}

do {
    $rank_user = (int) readline("Cual es tu rank?: ");
    student_legend($rank_user);
} while (true); */

// function suma($a, $b){
//     echo "La suma de $a + $b es: " . $a + $b . "\n";
// }

// suma(5, 6);

// $array1 = [1,2,3];
// $array2 = [4,5,6];

// $resultado = [...$array1, ...$array2];


function suma($a, $b){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

$num = [1,2];
$nun2 = [50,60];
$num3 = [95,64];

suma(...$num);
suma(...$nun2);
suma(...$num3);

