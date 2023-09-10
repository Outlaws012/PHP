<?php

// 2 -> 1
// 3 -> 2
// 4 -> 3
// 5 -> 5
// 6 -> 8
// 7 -> 13
// 8 -> 21

$num_tienda = 2;
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $num_tienda ; $i++) {
    
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

    echo $actual . "\n";
}

echo "\n";
