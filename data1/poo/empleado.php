<?php

require_once('persona.php');
require_once('interface.php');

class Empleado extends Persona implements interfaceClase {
  private $posición;
  private $calendario;

  function cocinar() {
    echo "Método cocinar";
  }

  function correr() {
    echo "Empleado corriendo";
  }

  public function interfaceUno() {

  }
  public function interfaceDos() {

  }
  public function interfaceTres() {
    
  }

}

 ?>
