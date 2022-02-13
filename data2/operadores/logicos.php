<?php
	$v1 = 1;
	$v2 = 1;
	$v3 = 2;
	$v4 = 3;

	$result1 = $v1 == $v2;
	echo 'Result 1: ';
	var_dump($result1);
	echo '<br>';

	$result2 = $v3 == $v4;
	echo 'Result 2: ';
	var_dump($result2);
	echo '<br>';
	echo '<br>';

	$result3 = $result1 && $result2;
	echo 'Resultado AND: ';
	var_dump($result3);
	echo '<br>';
	
	$result3 = $result1 || $result2;
	echo 'Resultado OR: ';
	var_dump($result3);
?>