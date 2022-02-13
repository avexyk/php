<?php

// require_once 'model/animal.php';

// Saber que controladores tenemos
// print_r(PDO::getAvailableDrivers());
// PDO: Conexion a base de datos.
// PDO Statement: Maneja las sentencias SQL
// PDO Exception: Maneja los errores que puedan ocurrir al realizar la conexion

// $animal = new Animal();

// print_r() Imprimi arreglos y objetos
// print_r($animal->getAll());

// $animal->id=4;

// $animal->nombre='Kelly';
// $animal->especie='Canina';
// $animal->raza='Guerrera';
// $animal->genero='Hembra';
// $animal->edad='12';
// $animal->color='Blanco';

// $animal->create();
// $animal->update();

// Contral frontal mejora la seguridad de la aplicación
// Al ser un único punto de acceso index.php
// El resto de los archivo permanece innacesible a los usuarios
// Mejora el mantenimiento de la aplicación

if (!isset($_REQUEST['controller'])) {
	require_once 'controller/animal_controller.php';
	$controller=new AnimalController();
	$controller->indexAnimal();
} else {
	$controller=$_REQUEST['controller'];
	$action=$_REQUEST['action'];
	require_once 'controller/'.$controller.'_controller.php';
	$controller=ucwords($controller).'Controller';
	$controller=new $controller;
	call_user_func(array($controller,$action));
}


 ?>