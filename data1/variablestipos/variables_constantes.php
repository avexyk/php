<?php

// Comienza con letra o _
// Caracteres o - la componen
// Difiere en minusculas y mayusculas
// $=pseudovariable

// Estaticamente tipado JAVA
// int number

// Dinamicamente tipado PHP (Existen cuando se les asignar el valor)
// number=1

// Fuertemente tipado (No se permite las violaciones de datos)
// Debilmente tipado (No se define de forma explicita, durante la ejecucación
// se le asigna en función a lo que reciba)

// Ambito de las variables

// Variable de ambito global
// $rosa = 'Color';

// function test() {
  // Ambito local
  // echo $rosa='Flor';

  // Ambito global dentro de una funcion
  // global $rosa;
  // echo $rosa;
// }

// test();

// CONSTANTES
// Son en mayusculas

// Definición en tiempo de compilación
const PATH1='cf/variables.php';
echo PATH1;

// Definición en tiempo de ejecución
define('PATH2', 'cf/varibles.php');
echo PATH2;

$path='cf/variables.php';
define('PATH3', mt_rand());
define('PATH4', $path);

echo PATH3;
echo PATH4;

// Todas las constantes definidas
get_defined_constants();

// Constantes definidades y de donde vienen
get_defined_constants(true);

// print_r=Arreglos, print y echo = cadenas
// print_r(get_defined_constants());

print_r(get_defined_constants(true));

 ?>
