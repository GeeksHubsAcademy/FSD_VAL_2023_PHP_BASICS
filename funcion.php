<?php
    function foo($edad, $nombre = "default")
    {
        echo $edad;
        return "mi nombre es: ".$nombre;
    }

    print_r(foo(5));


?>