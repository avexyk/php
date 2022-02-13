<?php

include 'includes/header.php';

class MenuRestaurant {
  public $nombre;
  public $precio;

  public function __construct( $nombre, $precio ) {
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

class Bebidas extends MenuRestaurant {
  public $medida;

  public function __construct( $nombre, $precio, $medida ) {
    parent::__construct($nombre, $precio);
    $this->medida = $medida;
  }

  public function getMedida() {
    return $this->medida;
  }

}

$bebida = new Bebidas('Té', 20, '300ml');
var_dump($bebida);

class Postres extends MenuRestaurant {
  public $peso;

  public function __construct( $nombre, $precio, $peso ) {
    parent::__construct($nombre, $precio);
    $this->peso = $peso;
  }

  public function getPeso() {
    return $this->peso;
  }

}

$postre = new Postres('Pastel', 55, '250g');
var_dump($postre);