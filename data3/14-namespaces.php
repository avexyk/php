<?php 

// Un namespaces te permite que múltiples clases de llamen de la misma forma

namespace main;

include 'includes/header.php';

require_once 'Empleado.php';

echo '<br>';

class Empleado {
  public function __construct() {
    echo 'Desde el archivo 14-namespaces.php';
  }
}

$empleado = new Empleado();