<?php

$attendance=5;
$average=9;
$result=($average>=7 AND $attendance==6);

echo var_dump($result);

/*
Operador AND &&
$result=($average>=7 && $attendance==6);
Operador OR ||
$result=($average>=7 || $attendance==6);
Operadores NOT !
$result = !($average>=10);

AND, OR, XOR (Si 2 valores son verdades false)
$result=($average>=7 XOR $attendance==6);
$result=($average>=7 OR $attendance==6);
$result=($average>=7 AND $attendance==6);

Revisar precedencias de operadores
*/


 ?>
