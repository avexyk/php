<?php
// Trabajo sobre arreglos y objetos

$animals = array('Gato','Perro','Gallina','Paloma');
$frutas = array('Nombre'=>'Francisco','Apellio'=>'Javier');

// Arreglos indexados
foreach ($animals as $animal) {
  echo "El animal es $animal \n";
}

// Arreglos asociativos
foreach ($frutas as $key => $value) {
  echo "La clave es $key y el valor es $value \n";
}

 ?>
