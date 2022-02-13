<?php
	$v1 = 10;
	$v2 = 12;
	$v3 = '12';

	$result = $v1 == $v2;
	var_dump($result);

	$result = $v1 === $v3;
	var_dump($result);

	// Valores y tipos === !==
	$result = $v1 != $v2;
	var_dump($result);

	// Menor, igual, mayor
	// 0 = son iguales
	// -1 = segundo elemento mayor
	// 1 = primer elemento mayor
	$result = $v1 <=> $v2;
	var_dump($result);


?>