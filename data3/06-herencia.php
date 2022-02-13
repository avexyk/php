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

class Bebidas {
  public $nombre;
  public $precio;
  public $medida;

  public function __construct( $nombre, $precio, $medida ) {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->medida = $medida;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }

  public function getMedida() {
    return $this->medida;
  }

}

$bebida = new Bebidas('Té', 20, '300ml');
var_dump($bebida);

class Postres {
  public $nombre;
  public $precio;
  public $peso;

  public function __construct( $nombre, $precio, $peso ) {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->peso = $peso;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getPrecio() {
    return $this->precio;
  }

  public function getPeso() {
    return $this->peso;
  }

}

$postre = new Postres('Pastel', 55, '250g');
var_dump($postre);