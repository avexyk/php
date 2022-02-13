<?php 
include 'includes/header.php';

// Los métodos estáticos son aquellos que no requieren instanciar una clase para acceder a ellos

class DB {
  public static function conectarDB() {
    echo 'Conexión a base de datos';
  }
}

class Email {
  public static function enviarEmail() {
    echo 'Enviando Email...';
  }
}

DB::conectarDB();
echo '<br>';
Email::enviarEmail();