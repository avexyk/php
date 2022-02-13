<?php 

namespace empleado;

class Empleado {
  public function __construct() {
    echo 'Desde el archivo Empleado.php';
  }
}

$empleado = new Empleado();