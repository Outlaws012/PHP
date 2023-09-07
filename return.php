<?php

function freddy()
{
    $num_random =  rand(1, 4);
    $frase = "";

    switch ($num_random) {
        case 1:
            $frase = "Nunca pares de aprender";
            break;
        case 2:
            $frase = "Las empresas no son familia";
            break;
        case 3:
            $frase = "La tecnología es el futuro";
            break;
        case 4:
            $frase = "Amo PHP";
            break;
    }
    return $frase;
}

echo freddy();

echo "\n";
