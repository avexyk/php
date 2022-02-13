<?php

abstract class Persona {
  // Moficiadores de acceso
  // public: Visto desde cualquier clase
  // private: Visto en clase actual
  // protected: Visibilidad clases padre y clases hijas
  private $nombre;
  private $apellido;
  private $sexo;
  private $nacionalidad;
  private $edad;
  // Variable estática
  static $color = 'Rojo';

  abstract function correr();
  // {
  //   echo "Yo corro";
  // }

  function ver() {
    // Para poder acceder a una variable dentro de la misma clase se utiliza
    // la palabra reservada self y ::
    // echo "Yo veo una camisa ".self::$color;
    // $this->nombre;
    // $this->correr();
    $this->enviarOrden('ver');
  }

  protected function hablar() {
    // $this->ver();
    // $this->apellido;
    echo "Función hablar";
  }

  private function enviarOrden($orden) {
    switch ($orden) {
      case 'correr':
        echo "Correr";
        break;
      case 'ver':
        echo "Ver";
        break;
      case 'hablar':
        echo "Hablar";
        break;
      default:
        echo "No hay orden";
        break;
    }
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

}


 ?>
