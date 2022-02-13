<?php

//El tipo de la variable se determina por el contexto
$var = 'String';
$var = 12;

$price = 129.99;
$age = 25;
$name = 'Francisco';
$isLive = false;

// echo gettype($var);
// var_dump($var);

// Conversiones
// (int)$var
// boolval($var)
// floatval($var)
// intval($var)

$price = (int)$price;
var_dump($price);

// Cuando se hace conversión a booleans si tiene un 0.0 sería false
// O cuando no tenga nada de string a boolean seria false

 ?>
