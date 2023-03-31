<?php

$array = [
    "nombre" => "Juan",
    "apellido" => "Garcia",
    "hobbes" => [
        "deportes" => [
            "petanca",
            "balonmano",
        ]
    ],
    1 => "hola",
    "2" => "adios"
];

print_r($array["hobbies"]["deportes"]);
