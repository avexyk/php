<?php
	$stringVar = 'Hello';
	echo $stringVar;

	// Diferencias entre comillas simples y dobles
	// Con simples el texto irá al cliente
	// Con dobles evaluará la cadena buscando carácteres de escape o variables
	
	$intVar = 5;
	$stringVar = "Hello $intVar";
	echo $stringVar;

	// Dinámicamente tipado
	// Cambiar la asignación de variable
	$newVar = 9;
	$newVar = 'String';

	// Cuando se quiera hacer operaciones entre variables PHP intentará hacer cast.
	// Cast es cambiar el tipo de una variable a otro
	// PHP es débilmente tipado
	// PHP hace CAST
	
	$conVar = 8.9;
	$newString = "Hola " . $conVar;
	echo $newString;

?>