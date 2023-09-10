<?php 

$cafeteria = array (
    "Americano" => 20,
    "Latte" => 20.5,
    "Tinto" => 10,
    "Capuchino" => 30,
);

foreach ($cafeteria as $cafe => $price) {

    if ($cafe == "Tinto") {
        echo "El Tinto no es muy rico ";
        continue;
    }

    echo "El café $cafe es muy rico! \n";

    /* echo "Actualmente encontré al café $cafe \n";

    if ($cafe == "Latte") {
        echo "Encontramos a Latte!";
        break;
    }*/
}

