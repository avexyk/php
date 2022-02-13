<?php

$shirt="Verde";

switch ($shirt) {
  case 'Rojo':
    echo "Camisa color rojo, solo talla chica";
    break;

  case 'Azul':
    echo "Camisa color Azul, solo talla chica, grande";
    break;

  case 'Rosa':
    echo "Camisa color Rosa, solo talla chica";
    break;

  case 'Verde':
    echo "Camisa color Verde, solo talla grande";
    break;

  default:
    echo "No encontramos lo que buscabas";
    break;
}

 ?>
