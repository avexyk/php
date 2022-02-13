<?php

namespace Vehicle;

abstract class VehicleBase
{
	// __construct Es llamado inmediatamente después que creamos un objeto
	// __destruct será llamado en el momento que ya no exista referencia a nuestro objeto o termine nuestro script

	protected $owner;
	// private $propietario = 'Javier';

	public function __construct($owner)
	{
		// Cada vez que se hace una instancia se llama un constructor
		$this->owner = $owner;
		echo '<br>Constructor';
	}

	public function __destruct()
	{
		// Es útil para liberar recursos
		echo '<br>Destructor';
	}

	public function move()
	{
		echo $this->startEngine();
		echo 'moving <br>';
	}

	public function getOwner()
	{
		return $this->owner;
	}

	public function setOwner($owner)
	{
		$this->$owner = $owner;
	}

	public abstract function startEngine();

}

?>