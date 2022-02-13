<?php

include 'includes/header.php';

class MenuRestaurant {
  public $nombre = 'Nombre del producto';
  public $precio = 0;
}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de naranja';
$bebida->precio = 30;

$postre = new MenuRestaurant();
$postre->nombre = 'Postre';
$postre->precio = 100;

var_dump($bebida);
var_dump($postre);
