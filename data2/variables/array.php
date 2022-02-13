<?php
	$arrayVar = ['crimson', 'skyblue', 'yellow'];
	var_dump($arrayVar);
	
	$narrayVar = [
		0 => 'orange',
		1 => 'white',
		2 => 'green'
	];
	var_dump($narrayVar);

	$marrayVar = [
		'color1' => 'lightblue',
		'color2' => 'purple',
		2 => 'brown'
	];
	var_dump($marrayVar);
	var_dump($marrayVar[2]);
	var_dump($marrayVar['color2']);
?>