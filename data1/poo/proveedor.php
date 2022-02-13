<?php

require_once('persona.php');

class Proveedor extends Persona {
  private $cuenta;
  private $banco;

  function enviarProductos() {

  }

  function correr() {
    echo "Proveedor corriendo";
  }

  // Polimorfirsmo

}


 ?>
