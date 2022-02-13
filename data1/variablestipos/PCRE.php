<?php
// Expresiones de regulares de Perl

// Validador de fecha
// $text='21/10/2019';
// echo preg_match("/([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])(\/|-)(\d{4})/",$text);

// * Delimitadores
// / # ~

// Metacaracteres
// ^ Encuentra el patrón al inicio de la cadena
// $ Encuentra el patrón al final de la cadena
// i Evita la sensibilidad de mayusculas y minusculas

// Agrupadores
// [aeizo] Caracteres que coincidan con el patrón
// [a-c] Rango que coincidan con el patrón
// [1-9] Rango que coincidan con el patrón

// () Permiten crear subpatrones
// | OR

// Escape: Disminuye la expresion en tanaño
// d -> dectecta numeros
// D -> Muestra todo menos numeros
// Rangos -> A-Za-z0-9 = w !w=W

// Cuantificadores
// * Encuentra 0 o mas matches de su precedente
// + Encuentra 1 o más matches
// ? Encuentra 0 o 1 más matches
// {5} Número determinado de caracteres
// {4, 5} Rango determinado de caracteres

$text='hooooola';
// $regex='/^Regulares/';
// $regex='/Regulares$/';
// $regex='/Regulares$/i';
// $regex='/Re[a-x]lares/i';
// $regex='/Mé(x|j)ico/i';
// $regex='/[0-9]/';
// $regex='/\D/';
// $regex='/[A-Za-z0-9_]/';
// $regex='/\W/';
// Utilizar barras invertidas
// $regex='/30\/12\/1990/';
// $regex='/ho*la/';
// $regex='/ho+la/';
// $regex='/ho?la/';
// $regex='/ho{5}la/';
$regex='/ho{4,5}la/';

// echo preg_match($regex, $text);
// matches = arreglo con coincidencias
// echo preg_match_all($regex, $text, $matches);
echo preg_match($regex, $text);

// print_r($matches);

 ?>
