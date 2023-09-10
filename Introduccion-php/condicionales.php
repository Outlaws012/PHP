<?php

$asientos_disponible = 4;
$parcero_de_miguel = true;

if ($asientos_disponible > 0) {
    echo "Puedes ver la película de spider-man";
}
elseif ($parcero_de_miguel == true) {
    echo "Bueno, entre";
}
else {
    echo "No puedes ver la película";
}