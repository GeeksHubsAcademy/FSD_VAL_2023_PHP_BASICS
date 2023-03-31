<?php
  function lanzarDados($numDados, $max, $min) {
    $suma = 0;
    foreach (range(1, $numDados) as $i) {
      $resultado = rand($min, $max);
      $suma += $resultado;
      echo "Dado " . $i . ": " . $resultado . "\n";
    }
    
    echo "Suma total: " . $suma . "\n";
    return $suma;
  }
?>