<?php

namespace Vehicle;
require_once 'VehiclesBase.php';
require_once 'GPSTrait.php';

class Car extends VehicleBase implements \Serializable
{

	use GPSTrait;

	public function move()
	{
		echo $this->startEngine() . '<br>';
		echo 'Car: moving';
	}

	public function startEngine()
	{
		return '<br>Car: start engine';
	}

	public function serialize()
	{
		echo 'Serializable<br>';
		return $this->owner;
	}

	public function unserialize($serialized)
	{
		echo 'Unserializable<br>';
		$this->owner = $serialized;
	}

}

?>