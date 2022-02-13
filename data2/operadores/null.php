<?php
	// El operador null nos permite verificar si la variable tiene un valor diferente de NULL y existe y en caso de que no podemos asignar un valor default.
	$a = null;

	// Verifica si $a tiene un valor NULL
	$result = $a ?? 'default';
	var_dump($result);

?>