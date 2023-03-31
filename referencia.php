<?php
    $foo = 'Bob'; // Asigna el valor 'Bob' a $foo
    $bar = &$foo; // Referenciar $foo vía $bar.
    $bar = "Mi nombre es $bar"; // Modifica $bar...
    
    echo $bar;
    echo $foo; // $foo también se modifica.
?>