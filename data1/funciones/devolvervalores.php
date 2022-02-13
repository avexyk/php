<?php

function operation($num1, $num2) {
  return $num1-$num2;
}

function operarreglo($num1, $num2) {
  return array($num1+$num2, $num1-$num2, $num1/$num2);
}

list($plus, $minus, $div)=operarreglo(15, 5);
echo "La suma es: $plus La resta es: $minus La division es: $div";

echo var_dump(operation(15,5));

 ?>
