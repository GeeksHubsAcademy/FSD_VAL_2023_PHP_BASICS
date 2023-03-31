<?php

$arr = [
    "a" => 1,
    3 => 2,
    0 => 56,
    "x" => 42,
    "ignacio" => 16
];
var_dump($arr);

$arr['ignacio'] = 19; // Esto es lo mismo que $arr[13] = 56 en este punto de el script

var_dump($arr);
// $arr["x"] = 42; // Esto agrega un nuevo elemento al array con la clave "x"
unset($arr['ignacio']); // Esto elimina el elemento del array
// unset($arr); // Esto elimina el array completo

var_dump($arr);
