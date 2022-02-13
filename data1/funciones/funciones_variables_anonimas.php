<?php

// Funciones anonimas
$operation=function($num1, $num2) {
  echo 'Funcion anonima';
  return $num1+$num2;
};

echo $operation(15, 5);

// Funciones variables
function operation() {
  echo 'Funcion variables';
}

$variable = 'operation';
$variable();

 ?>
