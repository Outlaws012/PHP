<?php

/*Hacer un array de 3 gatos donde tenga nombre, ocupación, color
y comida (comidas que le gustan y comidas que no)*/

$gatos = [
    [
        'nombre'=>'Bruce',
        'ocupacion'=> 'Batman',
        'color'=> 'negro',
        'comida'=> [
            'favorita' => 'carne',
            'no_favorita'=>'remolacha'
        ],
    ],
    [   
        'nombre'=>'Lion',
        'ocupacion'=> 'Arquitecto',
        'color'=> 'Naranja',
        'comida'=> [
            'favorita' => 'Chocolate',
            'no_favorita'=>'Tomate'
        ],
    ],
    [
        'nombre'=>'Shadow',
        'ocupacion'=> 'Programador',
        'color'=> 'gris',
        'comida'=> [
            'favorita' => 'Spaghetti',
            'no_favorita'=>'Mondongo'
        ],
    ],
];

$gato1 = $gatos[0];

echo "Las comidas favoritas de Bruce es la " . $gato1['comida']['favorita'];
