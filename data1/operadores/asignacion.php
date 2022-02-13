<?php

$a = 15;
$b = 10;

// Asignación por referencia
$a = &$b;

$a = $a+$b;

echo $a;

 ?>
