<?php

namespace controladores;

require_once('persona.php');
require_once('operaciones.php');

class Cliente extends \Persona {

  use \Operaciones;

  private $comun;
  private $correo;

  function __construct() {
    echo 'Inicio';
    $this->comun='';
    $this->correo='default@hotmail.com';
  }

  public function getComun():int {
    return $this->comun;
  }

  public function setComun(int $comun) {
    $this->comun=$comun;
  }

  public function getCorreo():String {
    return $this->correo;
  }

  public function setCorreo(String $correo) {
    $this->correo=$correo;
  }

  // Funciones generales get y set
  // public function __set($nameAttribute, $value) {
  //   $this->$nameAttribute=$value;
  // }
  //
  // public function __get($nameAttribute) {
  //   return $this->$nameAttribute;
  // }

  function comer() {
    // Métodos y atributos de la clase padre a hija
    echo parent::hablar();
  }

  function correr() {
    echo "Cliente corriendo";
  }

  function pagar() {
    echo 'El dinero que gaste fue: '.$this->suma(23, 22);
  }

  function decir(Empleado $empleado) {
    echo "{$this->getNombre()} es un cliente y es atendido por {$empleado->getNombre()}";
  }

  function __destruct() {
    echo "Final";
  }

}

 ?>
