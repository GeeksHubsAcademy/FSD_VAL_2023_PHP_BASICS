<?php

    function lanzarDados($minCaras = 1, $maxCaras = 6, $numeroDados = 1): array 
    {
        
        $suma = 0;
        $result = [];
        for($i = 0; $i < $numeroDados; $i++){
            $randoNumber = rand($minCaras, $maxCaras);

            $result[] = $randoNumber;
            $suma += $randoNumber;
            $result["suma"] = $suma;
        }

        return $result;
    }

    print_r(lanzarDados(1,6, 2));


?>