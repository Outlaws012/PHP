<?php 

$precios_cafe = [23,34,64,43,1,3];

usort($precios_cafe, function($a, $b){
    return $a <=> $b;
});

var_dump($precios_cafe);