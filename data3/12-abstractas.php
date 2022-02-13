<?php

include 'includes/header.php';

// Es una clase que no se puede instanciar pero sirve de base para otras clases

abstract class MenuRestaurant {

  public $nombre;
  protected $precio;

  public function __construct( $nombre, $precio) {
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

class Bebida extends MenuRestaurant {

  public $medida;

  public function __construct( $nombre, $precio, $medida ) {
    parent::__construct( $nombre, $precio );
    $this->medida = $medida;
  }

  public function getPrecio() {
    return 'El precio es: ' . $this->precio;
  }

  public function getMedida() {
    return $this->medida;
  }

}

$postre = new Bebida('Jugo de limón', 175, '150ml');
var_dump($postre);