<?php

include 'includes/header.php';

class MenuRestaurant {
  public $nombre = 'Nombre del Producto';
  public $precio = 0;

  public function obtenerProductoNombre() {
    // $this hace referencia al objeto y las propiedades de forma individual
    echo 'Producto '. $this->nombre .' tiene un precio de '. $this->precio;
  }

}

// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de Naranja';
$bebida->precio = 120;
$bebida->obtenerProductoNombre();

echo '<br>';

$postre = new MenuRestaurant();
$postre->nombre = 'Pastel de Chocolate';
$postre->precio = 150;
$postre->obtenerProductoNombre();