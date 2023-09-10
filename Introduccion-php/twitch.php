<?php

/* Ejercicio:
Para poder retirar las donaciones de la plataforma, 
debe tener un mínimo de 100$, a partir de este limite puede
retirar el dinero de lo contrario nao nao  */

$donations = readline("Hey bro, cuanto tienes en donaciones?: ");

if ($donations >= 100) {
    echo "Puedes retirar tu dinero, le metes muy rico bro";
} else {
    echo "No puedes retirar tu dinero, lo siento rey";
}

echo "\n";