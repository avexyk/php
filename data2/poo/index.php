<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

// Definir métodos estáticos nos permite crear métodos y propiedades accesibles sin tener que instanciar una clase. Estos no será unicos para cada instancias si no para todos los objetos.

// Existen algunas clases que no quisieran ser instanciadas entre si
// Clases abstractas que no permiten ser instanciadas y para lo unico que sirven es para ser clases bases de otras subclases o clases padre de hijas
// 
// En las interfaces ninguno de los metodos pueden tener contenido ni las propiedades se utilizaran. Una interface se utiliza como una especie de contrato en vez de herencia.
// Traits permitira o extendera las funcionalidades de las clases sin las limitantes de la herencia

use Vehicle\{Car, Truck, ToyCar};
// use Vehicle\Truck;


try {
	echo 'Class ToyCar';
	$car = new ToyCar('Alex');
	$car->move();
} catch (Exception $e)
{
	echo '<br>This is a toy';
	// log...
} finally
{
	echo '<br><br>Finally';
}

	echo '<br><br>Class Car';
	$car = new Car('Alex');
	$car->move();
	echo '<br>GPS pos: ' . $car->getPos();
	echo '<br>Owner car: ' . $car->getOwner() . '<br>';
	
	echo '<br>Class Truck 1';
	$truck1 = new Truck('Ingrid', 'PickUp');
	$truck1->move();
	echo '<br>Owner truck: ' . $truck1->getOwner() . '<br>';

	echo '<br>Class Truck 2';
	$truck2 = new Truck('Laura', 'PickUp');
	$truck2->move();
	echo '<br>Owner truck: ' . $truck2->getOwner() . '<br>';

	echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';

	// $v1 = new \Vehicle\VehicleBase('Alex');
	// $v1->move();

	// $car->owner = 'Alex';
	// $car->propietario = 'Francisco';
	// $car->setOwner('Rita');
	// $car2->setOwner('Ingrid');

	// echo 'Owner: ' . $car->owner;
	// 
	$ser = serialize($car);
	$newCar = unserialize($ser);

	echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';

?>