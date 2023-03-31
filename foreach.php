<?php
    // $numeros = [1, 2, 3, 4];

    // foreach ($numeros as &$numero) {
    //     $numero = $numero * 2;
    //     // echo $numero;
    // }

    // print_r($numeros);

    

    $array = ["nota_final" => 1, 2, "nota_media" => 3, 4];
    foreach ($array as $key => &$valor) {
        echo $key." =>".$valor."\n";
        
        // $valor = $valor * 2;
    }

    // print_r($array);

    
