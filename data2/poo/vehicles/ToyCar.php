<?php

namespace Vehicle;
require_once 'VehiclesBase.php';

class ToyCar extends VehicleBase
{
	public function move()
	{
		echo $this->startEngine() . '<br>';
		echo 'Car: moving';
	}

	public function startEngine()
	{
		throw new \Exception('Engine not found');
	}

}

?>