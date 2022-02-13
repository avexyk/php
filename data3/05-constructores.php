<?php
include 'includes/header.php';

// Constructores: Función que se ejecuta automáticamente en el momento que crear un objeto de la clase

class MenuRestaurant {
  public $nombre;
  public $precio;

  public function __construct($nombre, $precio) {
    // echo 'Ejecución desde el constructor';
    $this->nombre = $nombre;
    $this->precio = $precio;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }

}

$bebida = new MenuRestaurant("Jugo de fresa", 35);
echo $bebida->getNombre();