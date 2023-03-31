<?php
    $a = 1; /* ámbito global */
    
    function test($elNombreQueYoQuiera)
    {
        global $a;
        // echo $elNombreQueYoQuiera;
        /* referencia a una variable del ámbito local */
    }

    test($a);
?>