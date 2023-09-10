<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igual (no compara tipos, solo valores)
// var_dump($a == $b); true
// var_dump($a == $b2); true

// === Idéntico (compara tipos y valores)
// var_dump($a === $b); true
// var_dump($a === $b2); false

// != Diferente (no compara tipos)
// var_dump($a != $b); false
// var_dump($a != $b2); false

// !== Distinto (compara tipos y valores)
// var_dump($a !== $b); false
// var_dump($a !== $b2); true

// < Menor que
// var_dump($a < $b); false
// var_dump($c < $b); false
// var_dump($d < $b); true

// > Mayor que 
// var_dump($a > $b); false
// var_dump($c > $b); true
// var_dump($d > $b); false

// <= menor o igual a
// var_dump($a <= $b); true
// var_dump($c <= $b); false
// var_dump($d <= $b); true

// >= mayor o igual a
// var_dump($a >= $b); true
// var_dump($c >= $b); true
// var_dump($d >= $b); false

// <=> Nave espacial
// var_dump(2 <=> 1); 1
// var_dump(1 <=> 2); -1
// var_dump(1 <=> 1); 0

// ?? Fusión de null 
// $edad_de_pepito = 20;
// echo $edad_de_juanito ?? $edad_de_pepito;
