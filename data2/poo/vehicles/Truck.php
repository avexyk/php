<?php

namespace Vehicle;
require_once 'VehiclesBase.php';

class Truck extends VehicleBase
{
	// public static $count = 0;
	private static $count = 0;
	private $type;
	
	public function __construct($ownerName, $type)
	{
		$this->type = $type;
		// parent::__construct($ownerName);
		$this->owner = $ownerName;
		// PHP permite acceder a las variables estáticas a traves del método self ya que con this no es posible hacerlo.
		self::$count++;
	}

	public function move()
	{
		echo $this->startEngine() . '<br>';
		echo 'Truck ' . $this->type . ': moving';
	}

	public static function getTotal()
	{
		return self::$count;
	}

	public function startEngine()
	{
		return '<br>Truck: start engine';
	}

}

?>