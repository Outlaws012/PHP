<?php

// Do while (Se ejecuta por lo menos una vez)

// $count = 1;
// do {
//     echo "$count * 12 es " . $count * 12 . "\n" ;
// } while (++$count <= 12);

// Bucle For

// for ($count=1; $count <= 12; $count++)  
//     echo "$count * 12 es " . $count * 12 . "\n";

// $j = 10; 
// while ($j > -10)  { 
//     $j--; 
//     if ($j == 0) continue; 
//     echo (10 / $j) . "\n"; 
// } 

$usernames = ["Pepito","Brey","Lion"];

do {
    $username = readline("Ingrese su nuevo nombre de usuario:  ");
    echo "\n";
} while (in_array($username, $usernames));