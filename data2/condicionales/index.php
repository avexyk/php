<?php

	$color = 'orange';

	if ($color == 'black') {
		echo 'Color is Black';
	} else {
		echo 'Color is not Black';
	}
	
	if ($color == 'black') {
		echo 'Color is Black';
	} elseif ($color == 'white') {
		echo 'Color is White';
	}

	switch ($color) {
		case 'white':
			echo 'Color is White';
			break;
		case 'black':
			echo 'Color is Black';
			break;
		case 'crimson':
			echo 'Color is Crimson';
			break;
		default:
			echo 'Color is ... ' . $color;
			break;
	}

?>