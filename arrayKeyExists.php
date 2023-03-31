<?php
    $vehiculo = [
        'marca' => "Ford",
        'modelo' => "Focus",
        'numero_ruedas' => 4,
        'electrico' => false
    ];

    // if(isset($vehiculo['rueda_repuesto'])) {

    // }

    var_dump(array_key_exists('marca',$vehiculo));
    var_dump(array_key_exists('rueda_repuesto',$vehiculo));