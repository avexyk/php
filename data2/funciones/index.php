<?php
	// Declaraciones de la funcion
	
	$result = 100;

	function hello($name)
	{
		echo 'Hello ' . $name;
		echo '<br>';
	}

	// hello();
	hello('Francisco');
	hello('Javier');

	// Instrucciones
	
	function suma($a, $b)
	{
		$result = $a + $b;
		return $result;
	}

	$c = suma(120, 190);
	var_dump($c);

	$c = suma(120, 190);
	var_dump($result);

	// Scope alcance que tiene una variable
	


?>