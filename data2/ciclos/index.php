<?php
	for ($i=0; $i <= 10 ; $i++) { 
		echo $i . '<br>';
	}

	$i = 0;

	while ($i <= 10) {
		echo $i . '<br>';
		$i++;
	}

	$i = 0;

	do {
		echo $i . '<br>';
		$i++;
	} while($i <= 10);

	$names = ['Alex', 'Elizabeth', 'Joshua'];

	foreach ($names as $key => $name) {
		echo $key . ' - ' . $name . '<br>';
	}

?>