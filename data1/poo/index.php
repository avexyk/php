<?php

require_once('persona.php');

$anonima = new class(10,20) extends Persona {
	private $dividendo;
	private $divisor;

	public function __construct($dividendo, $divisor) {
		$this->dividendo=$dividendo;
		$this->divisor=$divisor;
		$this->ver();
	}

	public function division() {
		$suma=$this->dividendo+$this->divisor;
		echo 'Soy clase anonima '.$suma;
	}

};

$anonima->division();









// declare(strict_types=1);

// // require_once('persona.php');
// // // require_once('controladores/cliente.php');
// // require_once('empleado.php');
// // require_once('proveedor.php');

// require_once('autoload.php');

// (new Autoload())->load();

// // $load=new Autoload();
// // $load->load();

// // Autorecarga
// function load($class) {
// 	echo $class;
// }

// spl_autoload_register('load');

// use controladores as con;

// $laura = new con\Cliente();
// $laura->setNombre('Laura');

// echo $laura->getNombre();



 ?>