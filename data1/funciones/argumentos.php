<?php

function division($divisor, $dividendo=1) {
  $resultado=$divisor/$dividendo;
  echo 'El resultado de la division es: '.$resultado;
}

$dividendo=7;

division(14,$dividendo);

// Recursividad
function call($value) {
  if ($value<=10) {
    echo "$value \n";
    call(++$value);
  }
}

call(1);


 ?>
